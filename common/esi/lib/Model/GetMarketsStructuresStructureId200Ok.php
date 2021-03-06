<?php
/**
 * GetMarketsStructuresStructureId200Ok
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
 * GetMarketsStructuresStructureId200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetMarketsStructuresStructureId200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_markets_structures_structure_id_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'duration' => 'int',
        'is_buy_order' => 'bool',
        'issued' => '\DateTime',
        'location_id' => 'int',
        'min_volume' => 'int',
        'order_id' => 'int',
        'price' => 'double',
        'range' => 'string',
        'type_id' => 'int',
        'volume_remain' => 'int',
        'volume_total' => 'int'
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
        'duration' => 'duration',
        'is_buy_order' => 'is_buy_order',
        'issued' => 'issued',
        'location_id' => 'location_id',
        'min_volume' => 'min_volume',
        'order_id' => 'order_id',
        'price' => 'price',
        'range' => 'range',
        'type_id' => 'type_id',
        'volume_remain' => 'volume_remain',
        'volume_total' => 'volume_total'
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
        'duration' => 'setDuration',
        'is_buy_order' => 'setIsBuyOrder',
        'issued' => 'setIssued',
        'location_id' => 'setLocationId',
        'min_volume' => 'setMinVolume',
        'order_id' => 'setOrderId',
        'price' => 'setPrice',
        'range' => 'setRange',
        'type_id' => 'setTypeId',
        'volume_remain' => 'setVolumeRemain',
        'volume_total' => 'setVolumeTotal'
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
        'duration' => 'getDuration',
        'is_buy_order' => 'getIsBuyOrder',
        'issued' => 'getIssued',
        'location_id' => 'getLocationId',
        'min_volume' => 'getMinVolume',
        'order_id' => 'getOrderId',
        'price' => 'getPrice',
        'range' => 'getRange',
        'type_id' => 'getTypeId',
        'volume_remain' => 'getVolumeRemain',
        'volume_total' => 'getVolumeTotal'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const RANGE_STATION = 'station';
    const RANGE_REGION = 'region';
    const RANGE_SOLARSYSTEM = 'solarsystem';
    const RANGE__1 = '1';
    const RANGE__2 = '2';
    const RANGE__3 = '3';
    const RANGE__4 = '4';
    const RANGE__5 = '5';
    const RANGE__10 = '10';
    const RANGE__20 = '20';
    const RANGE__30 = '30';
    const RANGE__40 = '40';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRangeAllowableValues()
    {
        return [
            self::RANGE_STATION,
            self::RANGE_REGION,
            self::RANGE_SOLARSYSTEM,
            self::RANGE__1,
            self::RANGE__2,
            self::RANGE__3,
            self::RANGE__4,
            self::RANGE__5,
            self::RANGE__10,
            self::RANGE__20,
            self::RANGE__30,
            self::RANGE__40,
        ];
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['is_buy_order'] = isset($data['is_buy_order']) ? $data['is_buy_order'] : null;
        $this->container['issued'] = isset($data['issued']) ? $data['issued'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['min_volume'] = isset($data['min_volume']) ? $data['min_volume'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['volume_remain'] = isset($data['volume_remain']) ? $data['volume_remain'] : null;
        $this->container['volume_total'] = isset($data['volume_total']) ? $data['volume_total'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['duration'] === null) {
            $invalid_properties[] = "'duration' can't be null";
        }
        if ($this->container['is_buy_order'] === null) {
            $invalid_properties[] = "'is_buy_order' can't be null";
        }
        if ($this->container['issued'] === null) {
            $invalid_properties[] = "'issued' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalid_properties[] = "'location_id' can't be null";
        }
        if ($this->container['min_volume'] === null) {
            $invalid_properties[] = "'min_volume' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalid_properties[] = "'order_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['range'] === null) {
            $invalid_properties[] = "'range' can't be null";
        }
        $allowed_values = array("station", "region", "solarsystem", "1", "2", "3", "4", "5", "10", "20", "30", "40");
        if (!in_array($this->container['range'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'range', must be one of #{allowed_values}.";
        }

        if ($this->container['type_id'] === null) {
            $invalid_properties[] = "'type_id' can't be null";
        }
        if ($this->container['volume_remain'] === null) {
            $invalid_properties[] = "'volume_remain' can't be null";
        }
        if ($this->container['volume_total'] === null) {
            $invalid_properties[] = "'volume_total' can't be null";
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
        if ($this->container['duration'] === null) {
            return false;
        }
        if ($this->container['is_buy_order'] === null) {
            return false;
        }
        if ($this->container['issued'] === null) {
            return false;
        }
        if ($this->container['location_id'] === null) {
            return false;
        }
        if ($this->container['min_volume'] === null) {
            return false;
        }
        if ($this->container['order_id'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['range'] === null) {
            return false;
        }
        $allowed_values = array("station", "region", "solarsystem", "1", "2", "3", "4", "5", "10", "20", "30", "40");
        if (!in_array($this->container['range'], $allowed_values)) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        if ($this->container['volume_remain'] === null) {
            return false;
        }
        if ($this->container['volume_total'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration duration integer
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets is_buy_order
     * @return bool
     */
    public function getIsBuyOrder()
    {
        return $this->container['is_buy_order'];
    }

    /**
     * Sets is_buy_order
     * @param bool $is_buy_order is_buy_order boolean
     * @return $this
     */
    public function setIsBuyOrder($is_buy_order)
    {
        $this->container['is_buy_order'] = $is_buy_order;

        return $this;
    }

    /**
     * Gets issued
     * @return \DateTime
     */
    public function getIssued()
    {
        return $this->container['issued'];
    }

    /**
     * Sets issued
     * @param \DateTime $issued issued string
     * @return $this
     */
    public function setIssued($issued)
    {
        $this->container['issued'] = $issued;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param int $location_id location_id integer
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets min_volume
     * @return int
     */
    public function getMinVolume()
    {
        return $this->container['min_volume'];
    }

    /**
     * Sets min_volume
     * @param int $min_volume min_volume integer
     * @return $this
     */
    public function setMinVolume($min_volume)
    {
        $this->container['min_volume'] = $min_volume;

        return $this;
    }

    /**
     * Gets order_id
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param int $order_id order_id integer
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price price number
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets range
     * @return string
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     * @param string $range range string
     * @return $this
     */
    public function setRange($range)
    {
        $allowed_values = array('station', 'region', 'solarsystem', '1', '2', '3', '4', '5', '10', '20', '30', '40');
        if (!in_array($range, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'range', must be one of 'station', 'region', 'solarsystem', '1', '2', '3', '4', '5', '10', '20', '30', '40'");
        }
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets type_id
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     * @param int $type_id type_id integer
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets volume_remain
     * @return int
     */
    public function getVolumeRemain()
    {
        return $this->container['volume_remain'];
    }

    /**
     * Sets volume_remain
     * @param int $volume_remain volume_remain integer
     * @return $this
     */
    public function setVolumeRemain($volume_remain)
    {
        $this->container['volume_remain'] = $volume_remain;

        return $this;
    }

    /**
     * Gets volume_total
     * @return int
     */
    public function getVolumeTotal()
    {
        return $this->container['volume_total'];
    }

    /**
     * Sets volume_total
     * @param int $volume_total volume_total integer
     * @return $this
     */
    public function setVolumeTotal($volume_total)
    {
        $this->container['volume_total'] = $volume_total;

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


