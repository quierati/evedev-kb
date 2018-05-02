<?php
/**
 * GetCorporationCorporationIdMiningExtractions200Ok
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
 * OpenAPI spec version: 0.8.0
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
 * GetCorporationCorporationIdMiningExtractions200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationCorporationIdMiningExtractions200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporation_corporation_id_mining_extractions_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'chunk_arrival_time' => '\DateTime',
        'extraction_start_time' => '\DateTime',
        'moon_id' => 'int',
        'natural_decay_time' => '\DateTime',
        'structure_id' => 'int'
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
        'chunk_arrival_time' => 'chunk_arrival_time',
        'extraction_start_time' => 'extraction_start_time',
        'moon_id' => 'moon_id',
        'natural_decay_time' => 'natural_decay_time',
        'structure_id' => 'structure_id'
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
        'chunk_arrival_time' => 'setChunkArrivalTime',
        'extraction_start_time' => 'setExtractionStartTime',
        'moon_id' => 'setMoonId',
        'natural_decay_time' => 'setNaturalDecayTime',
        'structure_id' => 'setStructureId'
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
        'chunk_arrival_time' => 'getChunkArrivalTime',
        'extraction_start_time' => 'getExtractionStartTime',
        'moon_id' => 'getMoonId',
        'natural_decay_time' => 'getNaturalDecayTime',
        'structure_id' => 'getStructureId'
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
        $this->container['chunk_arrival_time'] = isset($data['chunk_arrival_time']) ? $data['chunk_arrival_time'] : null;
        $this->container['extraction_start_time'] = isset($data['extraction_start_time']) ? $data['extraction_start_time'] : null;
        $this->container['moon_id'] = isset($data['moon_id']) ? $data['moon_id'] : null;
        $this->container['natural_decay_time'] = isset($data['natural_decay_time']) ? $data['natural_decay_time'] : null;
        $this->container['structure_id'] = isset($data['structure_id']) ? $data['structure_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['chunk_arrival_time'] === null) {
            $invalid_properties[] = "'chunk_arrival_time' can't be null";
        }
        if ($this->container['extraction_start_time'] === null) {
            $invalid_properties[] = "'extraction_start_time' can't be null";
        }
        if ($this->container['moon_id'] === null) {
            $invalid_properties[] = "'moon_id' can't be null";
        }
        if ($this->container['natural_decay_time'] === null) {
            $invalid_properties[] = "'natural_decay_time' can't be null";
        }
        if ($this->container['structure_id'] === null) {
            $invalid_properties[] = "'structure_id' can't be null";
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
        if ($this->container['chunk_arrival_time'] === null) {
            return false;
        }
        if ($this->container['extraction_start_time'] === null) {
            return false;
        }
        if ($this->container['moon_id'] === null) {
            return false;
        }
        if ($this->container['natural_decay_time'] === null) {
            return false;
        }
        if ($this->container['structure_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets chunk_arrival_time
     * @return \DateTime
     */
    public function getChunkArrivalTime()
    {
        return $this->container['chunk_arrival_time'];
    }

    /**
     * Sets chunk_arrival_time
     * @param \DateTime $chunk_arrival_time The time at which the chunk being extracted will arrive and can be fractured by the moon mining drill.
     * @return $this
     */
    public function setChunkArrivalTime($chunk_arrival_time)
    {
        $this->container['chunk_arrival_time'] = $chunk_arrival_time;

        return $this;
    }

    /**
     * Gets extraction_start_time
     * @return \DateTime
     */
    public function getExtractionStartTime()
    {
        return $this->container['extraction_start_time'];
    }

    /**
     * Sets extraction_start_time
     * @param \DateTime $extraction_start_time The time at which the current extraction was initiated.
     * @return $this
     */
    public function setExtractionStartTime($extraction_start_time)
    {
        $this->container['extraction_start_time'] = $extraction_start_time;

        return $this;
    }

    /**
     * Gets moon_id
     * @return int
     */
    public function getMoonId()
    {
        return $this->container['moon_id'];
    }

    /**
     * Sets moon_id
     * @param int $moon_id moon_id integer
     * @return $this
     */
    public function setMoonId($moon_id)
    {
        $this->container['moon_id'] = $moon_id;

        return $this;
    }

    /**
     * Gets natural_decay_time
     * @return \DateTime
     */
    public function getNaturalDecayTime()
    {
        return $this->container['natural_decay_time'];
    }

    /**
     * Sets natural_decay_time
     * @param \DateTime $natural_decay_time The time at which the chunk being extracted will naturally fracture if it is not first fractured by the moon mining drill.
     * @return $this
     */
    public function setNaturalDecayTime($natural_decay_time)
    {
        $this->container['natural_decay_time'] = $natural_decay_time;

        return $this;
    }

    /**
     * Gets structure_id
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     * @param int $structure_id structure_id integer
     * @return $this
     */
    public function setStructureId($structure_id)
    {
        $this->container['structure_id'] = $structure_id;

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


