<?php

/**
 * @package EDK
 */
use Swagger\Client\ApiException;

class ZKBFetchException extends Exception {}
/**
 * imports kills from zkillboard.
 *
 * @author Salvoxia
 */
class ZKBFetch 
{
    /** @param array list of external alliance ID */
    protected $allianceIds = array();
    /** @param array list of external corp ID */
    protected $corporationIds = array();
    /** @param array  of external pilotId */
    protected $pilotIds = array();
    /** @param string additional modifiers */
    protected $additionalModifiers = '';
    /** @param the URL to zkb API, containing all modifiers */
    public $url;
    
    /** @param JSON formatted raw data from the zkb API */
    protected $rawData;
    
    /** @param array of posted kills with external ID */
    private $posted = array();
    /** @param array of skipped kills with external ID */
    private $skipped = array();
    /** @param int accumulated number of kills returned by zKB */
    protected $numberOfKillsFetched = 0;
    
    /** @param array of texts created by fetcher during posting */
    private $parsemsg = array();
    
    /** @param boolean flag indicating whether NPC only kills should be ignored */
    protected $ignoreNPCOnly = FALSE;
    
    /** @param int the database ID for this fetch configuration */
    protected $id;
    /** @param int the last timestamp for the last kill fetched from this url*/
    protected $lastKillTimestamp;
    /** @param int negative offset in hours to apply to the last kill timestamp before fetching */
    protected $killTimestampOffset;
    /** @param int the zKB API page number to fetch; will be increased during fetch cycles */
    protected $pageNumber = 1;
    /** @param int the unix formatted timestamp to use as startTime for fetching */
    protected $startTimestamp;
    protected $endTimestamp;
    
    /** @param int default for the negative offset in hours to apply to the last kill timestamp before fetching */
    public static $KILL_TIMESTAMP_OFFSET_DEFAULT = 2;
    
    /** @param int maximum number of cycles tried to fetch to get new kills before stopping as a safety measure */
    public static $MAXIMUM_NUMBER_OF_CYCLES = 10;
    
    /** field for counting the number of kills fetched from CREST; we need to keep track for not running into PHP's time limit */
    protected static $NUMBER_OF_KILLS_FETCHED_FROM_CREST = 0;
   
    public function __construct($id = NULL)
    {
        $this->id = $id;
        $this->killTimestampOffset = self::$KILL_TIMESTAMP_OFFSET_DEFAULT;
        
        date_default_timezone_set("UTC"); 
    }
    
    /**
     * fetches all attributes from the database
     */
    public function execQuery()
    {
        if(is_null($this->id)) 
        {
            return;
        }
        
        $fetchParams = new DBPreparedQuery();
        $fetchParams->prepare('SELECT fetchID, url, lastKillTimestamp FROM kb3_zkbfetch WHERE fetchID = ?');
        $lastKillTimestamp = NULL;
        $arr = array(&$this->id, &$this->url, &$lastKillTimestamp);
        $fetchParams->bind_results($arr);
        $types = 'i';
        $arr2 = array(&$types, &$this->id);
        $fetchParams->bind_params($arr2);

        $fetchParams->execute();
        if($fetchParams->recordCount() > 0)
        {
            $fetchParams->fetch();
            $this->lastKillTimestamp = strtotime($lastKillTimestamp);
        }
    }
    
    /**
     * gets a fetch configuration from the database, using
     * the given ID as key
     * @param int $id
     * @return \ZKBFetch
     */
    public static function getByID($id)
    {
        $ZKBFetch = new ZKBFetch($id);
        return $ZKBFetch;
    }
    
    /**
     * adds a new fetch configuration to the database
     * @return int the ID for the new fetch configuration
     * @throws ZKBFetchException
     */
    public function add()
    {
        if(!is_null($this->id))
        {
            return $this->id;
        }
        
        // check url
        if(is_null($this->url) || strlen(trim($this->url)) < 1)
        {
            throw new ZKBFetchException("No URL given for ZKBFetch!");
        }
        
        // if no lastKillTimestamp given, set it to NOW
        if(is_null($this->lastKillTimestamp) || $this->lastKillTimestamp === 0)
        {
            // get current timestamp in UTC
            $this->lastKillTimestamp = time();
        }
        
        $fetchParams = new DBPreparedQuery();
        $fetchParams->prepare('INSERT INTO kb3_zkbfetch (`url`, `lastKillTimestamp`) VALUES (?, ?)');
        $types = 'ss';
        $timeString = strftime('%Y-%m-%d %H:00', $this->lastKillTimestamp);

	$arr2 = array(&$types, &$this->url, &$timeString);

        $fetchParams->bind_params($arr2);

        if(!$fetchParams->execute())
        {
            throw new ZKBFetchException("Error while adding ZKBFetch configuration: ".$fetchParams->getErrorMsg());
        }
        
        return $fetchParams->getInsertID();
    }
    
    /**
     * deletes the fetch configuration with the given ID
     * @param int $id
     */
    public static function delete($id)
    {
        $fetchParams = new DBPreparedQuery();
        $fetchParams->prepare('DELETE FROM kb3_zkbfetch WHERE fetchID = ?');
        $types = 'i';
        $arr = array(&$types, &$id);
        $fetchParams->bind_params($arr);

        return $fetchParams->execute();
    }
    
    /**
     * gets all ZKBFetch configurations from the database
     * @return array of \ZKBFetch objects
     */
    public static function getAll()
    {
        $resultObjects = array();
        
        $qry = DBFactory::getDBQuery(true);
        $qry->execute('SELECT fetchID FROM kb3_zkbfetch ORDER BY fetchID ASC');
        while($result = $qry->getRow())
        {
            $resultObjects[] = ZKBFetch::getByID($result['fetchID']);
        }
        
        return $resultObjects;
    }
    
    public function setUrl($url)
    {
	
        $this->url = $url;
        
        if(is_null($this->id))
        {
            return;
        }
        
        $updateParams = new DBPreparedQuery();
        $updateParams->prepare('UPDATE kb3_zkbfetch SET url = ? WHERE fetchID = ?');
        $types = 'si';
        if ($this->pageNumber > 1) {
            $arr = array(&$types, &$this->fetchUrl, &$this->id);
        } else {
            $arr = array(&$types, &$this->url, &$this->id);
        }

        $updateParams->bind_params($arr);
        if(!$updateParams->execute())
        {
            return false;
        }
        
        return true;
    }
    
    public function getUrl()
    {
        if(!is_null($this->id) && is_null($this->url))
        {
            $this->execQuery();
        }
        return $this->url;
    }
    
    
    public function getID()
    {
        return $this->id;
    }
    
    public function getLastKillTimestamp()
    {
	
        if(!is_null($this->id) && is_null($this->lastKillTimestamp))
        {
            $this->execQuery();
        }
        return $this->lastKillTimestamp;
    }
    
    
    public function setLastKillTimestamp($timestamp)
    {
        if(!is_numeric($timestamp))
        {
            return false;
        }
        $this->lastKillTimestamp = $timestamp;
        
        if(is_null($this->id))
        {
            return;
        }
        $timeString = strftime('%Y-%m-%d %H:00', $this->lastKillTimestamp);
        $updateParams = new DBPreparedQuery();
        $updateParams->prepare('UPDATE kb3_zkbfetch SET lastKillTimestamp = ? WHERE fetchID = ?');
        $types = 'si';
        $arr = array(&$types, &$timeString, &$this->id);
        $updateParams->bind_params($arr);
        if(!$updateParams->execute())
        {
            return false;
        }
        
        return true;
    }
    
    
    /**
     * 
     * @param boolean $ignoreNPCOnlyKills flag indicating whether to ignore NPC only killmails
     */
    public function setIgnoreNpcOnlyKills($ignoreNPCOnlyKills)
    {
        if($ignoreNPCOnlyKills === TRUE)
        {
            $this->ignoreNPCOnly = TRUE;
        }
        
        else
        {
            $this->ignoreNPCOnly = FALSE;
        }
    }
    
    /**
     * 
     * @param int $killTimestampOffset negative offset in hours to apply to the last kill timestamp before fetching
     */
    public function setKillTimestampOffset($killTimestampOffset)
    {
        if(is_numeric($killTimestampOffset))
	{
	    
            $this->killTimestampOffset = $killTimestampOffset;
        }
    }

    
    /**
     * reads the zkb API using $this->url
     * @throws Exception
     */
    public function fetch()
    {
        if (!$this->fetchUrl) 
	{
	    	
            return false;
        }
        
        // create killmail representation
        // get instance
        try
        {
            $this->rawData = SimpleCrest::getReferenceByUrl($this->fetchUrl);
            
            // check whether the zKB API returned an error
            if(isset($this->rawData->error))
            {
                throw new ZKBFetchException($this->rawData->error);
            }
            // since the orderDirection modifier is no longer supported,
            // we need to reverse the order of the results for our algorithms to work properly
            $this->rawData = array_reverse($this->rawData);
	    $this->setUrl($this->fetchUrl);
        }
        
        // if a zKBFetchException is thrown, simply re-throw it
        catch(ZKBFetchException $e)
        {
            throw $e;
        }

        // convert any other exception into a zKBFetchException
        catch(Exception $e)
        {
            throw new ZKBFetchException($e->getMessage(), $e->getCode());
        }
    }
    
    
    /**
     * clean parameters from api url
     * transform URL for zKB API
     */
    protected function sanitizeFetchUrl() {
        // zkb api doesnt support anymore
        str_replace('xml/', '', $this->fetchUrl);
	$this->fetchUrl = preg_replace("/\/startTime\/[0-9]*/i", "", $this->fetchUrl);
	$this->fetchUrl = preg_replace("/\/endTime\/[0-9]*/i", "", $this->fetchUrl);
	$this->fetchUrl = preg_replace("/\/limit\/[0-9]*/i", "", $this->fetchUrl);
	
        // clean fields
        $this->fetchUrl = preg_replace("/\/year\/[0-9]*/i", "", $this->fetchUrl);
	$this->fetchUrl = preg_replace("/\/month\/[0-9]*/i", "", $this->fetchUrl);
	$this->fetchUrl = preg_replace("/\/page\/[0-9]*/i", "", $this->fetchUrl);
	$this->fetchUrl = preg_replace("/\/pastSeconds\/[0-9]*/i", "", $this->fetchUrl);

        // must end with a slash
        if(substr($this->fetchUrl, -1) != '/')
        {
            $this->fetchUrl .= '/';
        }

    }


    /**
     * executes verifications on $url to ensure
     * it's a valid URL for zKB API
     * @throws ZKBFetchException
     */
    protected function validateUrl()
    {
        $this->fetchUrl = $this->url;

        // check last pageNumber
	$pageNumber = 1;
        preg_match('/page\/(?<pageNumber>\d+)/', $this->fetchUrl, $matches);
        if ($matches) {
            $pageNumber = (int) $matches["pageNumber"];
	}
	if ($pageNumber > $this->pageNumber ) {
            $this->pageNumber = (int) $matches["pageNumber"];
	}

        $this->sanitizeFetchUrl();

        // add startTime, if given and the URL is not for a specific kill
        if(!is_null($this->startTimestamp) && strlen(trim($this->startTimestamp) > 0)
                && strpos($this->fetchUrl, 'killID') === FALSE) {

            self::checkTimestamp($this->startTimestamp);
			
	    $pastSeconds = time() - $this->startTimestamp;
	    $pastSeconds = (intval($pastSeconds / 3600) + 1) * 3600;

	    if ($pastSeconds < 604800) {
		$this->fetchUrl .= "pastSeconds/$pastSeconds/";
	    } else {
		$year = strftime("%Y", $this->startTimestamp);
		$month = strftime("%m", $this->startTimestamp);
		$this->fetchUrl .= "year/$year/month/$month/";
                $this->fetchUrl .= "page/$this->pageNumber/";
	    }
        }

        $urlPieces = explode("/", $this->fetchUrl);
        if(count($urlPieces) < 5 || $urlPieces[3] != "api")
        {
            throw new ZKBFetchException("Invalid zBK API URL: ".$this->fetchUrl);
        }
    }
    
    
    /**
     * processes all kills for this fetch cycle
     * @throws ZKBFetchException
     */
    public function processApi()
    {
        // initialize rawData
        $this->rawData = array();
        
        // remember the timestamp we started with
        $this->startTimestamp = $this->lastKillTimestamp - ($this->lastKillTimestamp % 3600);

        // calculate the timestamp of the next full hour, starting at the time of the last kill;
        // this is the timestamp we want to reach at least
        if($this->startTimestamp)
        {
            $nextFullHourTimestamp = $this->startTimestamp+1 + (3600 - (($this->startTimestamp+1) % 3600));
        }

        // apply negative offset
        if(isset($this->killTimestampOffset) && is_numeric($this->killTimestampOffset) && isset($this->startTimestamp) && is_numeric($this->startTimestamp))
        {
            $this->startTimestamp -= $this->killTimestampOffset*3600;
        }
        
        // initialize fetch counter
        $cyclesFetched = 0;
        
        $fetchUrlPreviousCycle = '';

        // we need this loop to keep fetching until we don't get any data (because there is no new data)
        // or we get data containing a kill with a timestamp newer than the timestamp we started with
        do
	{
            // validate and build the URL
            $this->validateUrl();

            $this->logDebug("PROCCESSING URL: " . $this->fetchUrl);
            EDKError::log("fetch url = ". $this->fetchUrl);
            // check if the fetch URL is the same as for the last cycle
            if($fetchUrlPreviousCycle == $this->fetchUrl)
            {
                // stop fetching, we're fetching the same bunch of kills all over again!
                // may happen if more than one kill matches the last kill timestamp
                break;
            }
            
            // fetch the raw data from zKB API
            try
            {
                
                EDKError::log("get content from url = ". $this->fetchUrl);
                $this->fetch();
                $this->url =  $this->fetchUrl;
            }
            catch(Exception $e)
            {
                //$this->lastKillTimestamp = $startTimestamp;
                //throw $e;
		break;
            }

            if(empty($this->rawData))
            {
                //throw new ZKBFetchException("Empty result returned by API ".$this->fetchUrl);
                // this is a valid case
                // set rawData to an empty array, so the loop doesn't complain
                $this->rawData = array();
            }
            
            //$maxNumberOfKillsPerRun = config::get('maxNumberOfKillsPerRun'); 
            $maxNumberOfKillsPerRun = 200;

            // add kills to accumulated number of kills fetched from zKB
            $this->numberOfKillsFetched += count($this->rawData);
        
            // loop over all kills
            foreach($this->rawData AS $killData)
	    {
                try
                {
                    $this->processKill($killData);
                }
                catch(ZKBFetchException $e)
                {
                    $this->parsemsg[] = $e->getMessage();
                }
                catch(ApiException $e)
                {
                    $this->parsemsg[] = "Error communicating with ESI, aborting!";
                    $this->parsemsg[] = $e->getMessage();
                    break;
                }
            }

            // no timestamp given at all
            if($this->startTimestamp == NULL || $nextFullHourTimestamp == NULL)
            {
                break;
            }
            
            // a large number in get external api's 
            if($cyclesFetched >= self::$MAXIMUM_NUMBER_OF_CYCLES)
            {
                $this->parsemsg[] = "Stopped fetching maximum number of cycles (" . $cyclesFetched .") reached (with fetched ".($this->numberOfKillsFetched)." kills ";
                break;
            }
			

            // increment do/while runs			
            $cyclesFetched++;

	    // increment page number
            $this->pageNumber++;

            // remember the URL we used during this cycle
            $fetchUrlPreviousCycle = $this->fetchUrl;

	    $chronologicalLastKillTimestamp = $this->lastKillTimestamp;

            // number of killmails processed
	    $count_kills = count($this->rawData);

            // maxNumberOfKillsPerRun
            //if ($count_kills >= 200) {
		// increment page number
                //$this->pageNumber++;
            //}
	   
	} while($count_kills >= 200);
        

        EDKError::log(" lastKillTimestamp = ".strftime("%Y-%m-%d %H:%M:%S", $this->lastKillTimestamp));
        EDKError::log(" # kills in last fetch = ".count($this->rawData));

        if($this->lastKillTimestamp <= $nextFullHourTimestamp) $bool = 'true'; else $bool = 'false';
        EDKError::log(strftime("%Y-%m-%d %H:%M:%S", $this->lastKillTimestamp)." <= ".strftime("%Y-%m-%d %H:%M:%S", $nextFullHourTimestamp)."=".$bool);

        // we did not get any new data, but technically should continue fetching --> advance the last kill timestamp one day
        //if(count($this->rawData) == 0 && $this->lastKillTimestamp <= $nextFullHourTimestamp && time() > $this->startTimestamp + 86400)
	if($cyclesFetched == 0)
        {
        	// advance
        	$this->setLastKillTimestamp($this->startTimestamp + 21600);
        }
	else
	{
	// $this->fetchUrl contains /year/Y/month/m/
	    if (strpos($fetchUrlPreviousCycle, "year") !== false && strpos($fetchUrlPreviousCycle, "month") !== false)
		{
			// all kills fetched from a previous month -> setLastKillTimestamp to the next month and first day
			if (date('m', $chronologicalLastKillTimestamp) != date('m', time()))
			{
				$chronologicalLastKillTimestamp = strtotime('first day of ' . strftime("%Y-%m-%d 12:00:00", $chronologicalLastKillTimestamp) . " +1 months");
				// change url for get next month
				if ($count_kills < 200) {
				    $this->logDebug("FINISHED MONTH:" . $chronologicalLastKillTimestamp);
				    $this->sanitizeFetchUrl();		
				    $this->setUrl($this->fetchUrl);
				}
			}

		}
		// chronologically last fetched kill Timestamp
		$this->setLastKillTimestamp($chronologicalLastKillTimestamp);
	}
    }
    
    
    
    /**
     * processes a single kill from the zKB API
     * @param json $killData a json decoded kill
     * @throws ZKBFetchException if kill cannot be parsed
     * @throws ApiException on error when fetching the kill from ESI
     */
    protected function processKill($killData)
    {
        // sometimes, the killData is malformed
        if((int)$killData->killmail_id === 0)
        {
            throw new ZKBFetchException("Invalid format for kill, skipping");
        }
        
        $qry = DBFactory::getDBQuery();

        // Check hashes with a prepared query.
        // Make it static so we can reuse the same query for feed fetches.
        $checkHash;
        $hash;
        $trust;
        $killId;        
        
      
        
        // Check for duplicate by external ID
        $qry->execute('SELECT kll_id, kll_timestamp FROM kb3_kills WHERE kll_external_id = '.$killData->killmail_id);
        if($qry->recordCount())
        {
            // kill is already known
            $this->skipped[] = $killData->killmail_id;
			$result = $qry->getRow();
			$this->lastKillTimestamp = strtotime($result['kll_timestamp']);
            return;
        }

        // check for non-api kill
        if($killData->killmail_id < 0)
        {
            throw new ZKBFetchException("Only API-verified kills are supported, this is a non-verified kill: ".$killData->killmail_id);
        }



        $EsiParser = new \EsiParser($killData->killmail_id, strval($killData->zkb->hash));
        $EsiParser->setAllowNpcOnlyKills(!$this->ignoreNPCOnly);
        try
        {
            $killId = $EsiParser->parse();
            $Kill = Kill::getByID($killId);
            $this->lastKillTimestamp = strtotime($Kill->getTimeStamp());
            $timestamp = date('Y-m-d H:m:i', $this->lastKillTimestamp);
            // Filtering
            if(config::get('filter_apply'))
            {
                $filterdate =  intval(config::get('filter_date'));
                if (strtotime($timestamp) < $filterdate) {
                    $filterdate = kbdate("j F Y", config::get("filter_date"));
                    $this->skipped[] = $killData->killmail_id;
                    throw new ZKBFetchException("Kill ".$killData->killmail_id." (time: $timestamp) is older than the oldest allowed date (" .$filterdate. ")", -3);
                }
            }
            
        } 
        
        catch (EsiParserException $e) 
        {
            // tried posting an NPC only kill when not allowed (-5)
            // kill deleted permanently (-4)
            // kill too old to be posted (-3)
            // kill already posted, but not detected during pre-check (should not happen) (-1)
            if($e->getCode() < 0)
            {
                $this->skipped[] = $killData->killmail_id;
                return;
            }

            else
            {
                $this->skipped[] = $killData->killmail_id;
                throw new ZKBFetchException($e->getMessage().", KillID = ".$killData->killmail_id);
            }
        }
        
        catch(ApiException $e)
        {
            
            // ESI error due to incorrect ESI hash
            if($e->getCode() == 422 && config::get('skipNonVerifyableKills'))
            {
                $this->skipped[] = $killData->killmail_id;
                throw new ZKBFetchException($e->getMessage().", KillID = ".$killData->killmail_id);
            }

            else
            {
                throw $e;
            }
        }
        
        catch(KillException $e)
        {
            $this->skipped[] = $killData->killmail_id;
            throw new ZKBFetchException($e->getMessage().", KillID = ".$killData->killmail_id);
        }
        
        if($killId > 0)
        {

            self::$NUMBER_OF_KILLS_FETCHED_FROM_CREST++;
            $this->posted[] = $killData->killmail_id;
            $logaddress = "ZKB:".$this->url;
            $baseUrlEndIndex = strpos($logaddress, 'api/');
            if ($baseUrlEndIndex !== FALSE) 
            {
                $logaddress = substr($logaddress, 0, $baseUrlEndIndex);
                $logaddress .= "kill/$killData->killmail_id/";
            }
	    $this->setLastKillTimestamp($this->lastKillTimestamp);
            logger::logKill($killId, $logaddress);
        }
        
        // duplicate after all
        else
        {
            $this->skipped[] = $killData->killmail_id;
        }
    }
   
   /**
    * Return any messages generated by parsing json data
    * @return array Text for any messages generated by parsing json data
    */
   function getParseMessages()
   {
           return $this->parsemsg;
   }
   
   
   /**
    * return all kill IDs of kills that have been posted
    * @return array of kill IDs for posted kills
    */
   function getPosted()
   {
       return $this->posted;
   }
   
   /**
    * return the accumulated number of kills by zKB
    */
   function getNumberOfKillsFetched()
   {
       return $this->numberOfKillsFetched;
   }
   
   
   
   /**
    * return all kill IDs of kills that have been skipped
    * @return array of kill IDs for skipped kills
    */
   function getSkipped()
   {
       return $this->skipped;
   }
   
   /**
    * Checks whether the given timestamp is valid for
    * fetching from zKillboard
    * @param int $timestamp the timestamp to check
    * @throws ZKBFetchException
    */
   public static function checkTimestamp($timestamp)
   {
        if(is_null($timestamp) || $timestamp === FALSE || (int) $timestamp < mktime(0, 0, 0, 0, 0, 2007))
        {
            throw new ZKBFetchException("You must use a timestamp starting 2007 or newer!");
        }
   }
   /**
    * Prints the given logText, prefixing it with a GMT timestamp
    * and adding a newline at the end. Also replaces HTML line breaks
    * with the appropriate ones and strips HTML tags from the logText.
    * @param string $logText the text to log
    */
   function logDebug($logText)
   {
	    // determine correct line break for this environment
	    $linebreak = "<br/>";
	    if(defined('STDIN'))
	    {
		$linebreak = PHP_EOL;
	    }
	    // create GMT timestamp
	    $timestamp = gmdate("Y/m/d H:i:s");
	    // convert any HTML linebreaks to appropriate linebreaks
	    $logText = preg_replace('/<br(\s)*(\/)?>/', PHP_EOL, $logText);
	    $logText = str_replace("</div>","</div>".PHP_EOL, $logText);
	    // strip any remaining HTML tags
	    $logText = strip_tags($logText);
	    $logText = str_replace(PHP_EOL, $linebreak, $logText);

	    print $timestamp.' - '.$logText.$linebreak;
   }
}
