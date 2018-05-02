<?php
/**
 * GetLoyaltyStoresCorporationIdOffers200Ok
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
 * GetLoyaltyStoresCorporationIdOffers200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetLoyaltyStoresCorporationIdOffers200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_loyalty_stores_corporation_id_offers_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'ak_cost' => 'int',
        'isk_cost' => 'int',
        'lp_cost' => 'int',
        'offer_id' => 'int',
        'quantity' => 'int',
        'required_items' => '\Swagger\Client\Model\V1loyaltystorescorporationIdoffersRequiredItems[]',
        'type_id' => 'int'
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
        'ak_cost' => 'ak_cost',
        'isk_cost' => 'isk_cost',
        'lp_cost' => 'lp_cost',
        'offer_id' => 'offer_id',
        'quantity' => 'quantity',
        'required_items' => 'required_items',
        'type_id' => 'type_id'
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
        'ak_cost' => 'setAkCost',
        'isk_cost' => 'setIskCost',
        'lp_cost' => 'setLpCost',
        'offer_id' => 'setOfferId',
        'quantity' => 'setQuantity',
        'required_items' => 'setRequiredItems',
        'type_id' => 'setTypeId'
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
        'ak_cost' => 'getAkCost',
        'isk_cost' => 'getIskCost',
        'lp_cost' => 'getLpCost',
        'offer_id' => 'getOfferId',
        'quantity' => 'getQuantity',
        'required_items' => 'getRequiredItems',
        'type_id' => 'getTypeId'
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
        $this->container['ak_cost'] = isset($data['ak_cost']) ? $data['ak_cost'] : null;
        $this->container['isk_cost'] = isset($data['isk_cost']) ? $data['isk_cost'] : null;
        $this->container['lp_cost'] = isset($data['lp_cost']) ? $data['lp_cost'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['required_items'] = isset($data['required_items']) ? $data['required_items'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['isk_cost'] === null) {
            $invalid_properties[] = "'isk_cost' can't be null";
        }
        if ($this->container['lp_cost'] === null) {
            $invalid_properties[] = "'lp_cost' can't be null";
        }
        if ($this->container['offer_id'] === null) {
            $invalid_properties[] = "'offer_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
        }
        if ($this->container['required_items'] === null) {
            $invalid_properties[] = "'required_items' can't be null";
        }
        if ($this->container['type_id'] === null) {
            $invalid_properties[] = "'type_id' can't be null";
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
        if ($this->container['isk_cost'] === null) {
            return false;
        }
        if ($this->container['lp_cost'] === null) {
            return false;
        }
        if ($this->container['offer_id'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['required_items'] === null) {
            return false;
        }
        if ($this->container['type_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets ak_cost
     * @return int
     */
    public function getAkCost()
    {
        return $this->container['ak_cost'];
    }

    /**
     * Sets ak_cost
     * @param int $ak_cost Analysis kredit cost
     * @return $this
     */
    public function setAkCost($ak_cost)
    {
        $this->container['ak_cost'] = $ak_cost;

        return $this;
    }

    /**
     * Gets isk_cost
     * @return int
     */
    public function getIskCost()
    {
        return $this->container['isk_cost'];
    }

    /**
     * Sets isk_cost
     * @param int $isk_cost isk_cost integer
     * @return $this
     */
    public function setIskCost($isk_cost)
    {
        $this->container['isk_cost'] = $isk_cost;

        return $this;
    }

    /**
     * Gets lp_cost
     * @return int
     */
    public function getLpCost()
    {
        return $this->container['lp_cost'];
    }

    /**
     * Sets lp_cost
     * @param int $lp_cost lp_cost integer
     * @return $this
     */
    public function setLpCost($lp_cost)
    {
        $this->container['lp_cost'] = $lp_cost;

        return $this;
    }

    /**
     * Gets offer_id
     * @return int
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     * @param int $offer_id offer_id integer
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity quantity integer
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets required_items
     * @return \Swagger\Client\Model\V1loyaltystorescorporationIdoffersRequiredItems[]
     */
    public function getRequiredItems()
    {
        return $this->container['required_items'];
    }

    /**
     * Sets required_items
     * @param \Swagger\Client\Model\V1loyaltystorescorporationIdoffersRequiredItems[] $required_items required_items array
     * @return $this
     */
    public function setRequiredItems($required_items)
    {
        $this->container['required_items'] = $required_items;

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


