<?php
/**
 * GetFwStats200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.8.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetFwStats200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetFwStats200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_fw_stats_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'faction_id' => 'int',
        'kills' => '\Swagger\Client\Model\V1fwstatsKills',
        'pilots' => 'int',
        'systems_controlled' => 'int',
        'victory_points' => '\Swagger\Client\Model\V1fwstatsVictoryPoints'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'faction_id' => 'faction_id',
        'kills' => 'kills',
        'pilots' => 'pilots',
        'systems_controlled' => 'systems_controlled',
        'victory_points' => 'victory_points'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'faction_id' => 'setFactionId',
        'kills' => 'setKills',
        'pilots' => 'setPilots',
        'systems_controlled' => 'setSystemsControlled',
        'victory_points' => 'setVictoryPoints'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'faction_id' => 'getFactionId',
        'kills' => 'getKills',
        'pilots' => 'getPilots',
        'systems_controlled' => 'getSystemsControlled',
        'victory_points' => 'getVictoryPoints'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['faction_id'] = isset($data['faction_id']) ? $data['faction_id'] : null;
        $this->container['kills'] = isset($data['kills']) ? $data['kills'] : null;
        $this->container['pilots'] = isset($data['pilots']) ? $data['pilots'] : null;
        $this->container['systems_controlled'] = isset($data['systems_controlled']) ? $data['systems_controlled'] : null;
        $this->container['victory_points'] = isset($data['victory_points']) ? $data['victory_points'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['faction_id'] === null) {
            $invalid_properties[] = "'faction_id' can't be null";
        }
        if ($this->container['pilots'] === null) {
            $invalid_properties[] = "'pilots' can't be null";
        }
        if ($this->container['systems_controlled'] === null) {
            $invalid_properties[] = "'systems_controlled' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['faction_id'] === null) {
            return false;
        }
        if ($this->container['pilots'] === null) {
            return false;
        }
        if ($this->container['systems_controlled'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets faction_id
     * @return int
     */
    public function getFactionId()
    {
        return $this->container['faction_id'];
    }

    /**
     * Sets faction_id
     * @param int $faction_id faction_id integer
     * @return $this
     */
    public function setFactionId($faction_id)
    {
        $this->container['faction_id'] = $faction_id;

        return $this;
    }

    /**
     * Gets kills
     * @return \Swagger\Client\Model\V1fwstatsKills
     */
    public function getKills()
    {
        return $this->container['kills'];
    }

    /**
     * Sets kills
     * @param \Swagger\Client\Model\V1fwstatsKills $kills
     * @return $this
     */
    public function setKills($kills)
    {
        $this->container['kills'] = $kills;

        return $this;
    }

    /**
     * Gets pilots
     * @return int
     */
    public function getPilots()
    {
        return $this->container['pilots'];
    }

    /**
     * Sets pilots
     * @param int $pilots How many pilots fight for the given faction
     * @return $this
     */
    public function setPilots($pilots)
    {
        $this->container['pilots'] = $pilots;

        return $this;
    }

    /**
     * Gets systems_controlled
     * @return int
     */
    public function getSystemsControlled()
    {
        return $this->container['systems_controlled'];
    }

    /**
     * Sets systems_controlled
     * @param int $systems_controlled The number of solar systems controlled by the given faction
     * @return $this
     */
    public function setSystemsControlled($systems_controlled)
    {
        $this->container['systems_controlled'] = $systems_controlled;

        return $this;
    }

    /**
     * Gets victory_points
     * @return \Swagger\Client\Model\V1fwstatsVictoryPoints
     */
    public function getVictoryPoints()
    {
        return $this->container['victory_points'];
    }

    /**
     * Sets victory_points
     * @param \Swagger\Client\Model\V1fwstatsVictoryPoints $victory_points
     * @return $this
     */
    public function setVictoryPoints($victory_points)
    {
        $this->container['victory_points'] = $victory_points;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


