<?php
/**
 * V2characterscharacterIdstatsOrbital
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
 * V2characterscharacterIdstatsOrbital Class Doc Comment
 *
 * @category    Class */
 // @description orbital object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V2characterscharacterIdstatsOrbital implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v2characterscharacter_idstats_orbital';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'strike_characters_killed' => 'int',
        'strike_damage_to_players_armor_amount' => 'int',
        'strike_damage_to_players_shield_amount' => 'int'
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
        'strike_characters_killed' => 'strike_characters_killed',
        'strike_damage_to_players_armor_amount' => 'strike_damage_to_players_armor_amount',
        'strike_damage_to_players_shield_amount' => 'strike_damage_to_players_shield_amount'
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
        'strike_characters_killed' => 'setStrikeCharactersKilled',
        'strike_damage_to_players_armor_amount' => 'setStrikeDamageToPlayersArmorAmount',
        'strike_damage_to_players_shield_amount' => 'setStrikeDamageToPlayersShieldAmount'
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
        'strike_characters_killed' => 'getStrikeCharactersKilled',
        'strike_damage_to_players_armor_amount' => 'getStrikeDamageToPlayersArmorAmount',
        'strike_damage_to_players_shield_amount' => 'getStrikeDamageToPlayersShieldAmount'
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
        $this->container['strike_characters_killed'] = isset($data['strike_characters_killed']) ? $data['strike_characters_killed'] : null;
        $this->container['strike_damage_to_players_armor_amount'] = isset($data['strike_damage_to_players_armor_amount']) ? $data['strike_damage_to_players_armor_amount'] : null;
        $this->container['strike_damage_to_players_shield_amount'] = isset($data['strike_damage_to_players_shield_amount']) ? $data['strike_damage_to_players_shield_amount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets strike_characters_killed
     * @return int
     */
    public function getStrikeCharactersKilled()
    {
        return $this->container['strike_characters_killed'];
    }

    /**
     * Sets strike_characters_killed
     * @param int $strike_characters_killed strike_characters_killed integer
     * @return $this
     */
    public function setStrikeCharactersKilled($strike_characters_killed)
    {
        $this->container['strike_characters_killed'] = $strike_characters_killed;

        return $this;
    }

    /**
     * Gets strike_damage_to_players_armor_amount
     * @return int
     */
    public function getStrikeDamageToPlayersArmorAmount()
    {
        return $this->container['strike_damage_to_players_armor_amount'];
    }

    /**
     * Sets strike_damage_to_players_armor_amount
     * @param int $strike_damage_to_players_armor_amount strike_damage_to_players_armor_amount integer
     * @return $this
     */
    public function setStrikeDamageToPlayersArmorAmount($strike_damage_to_players_armor_amount)
    {
        $this->container['strike_damage_to_players_armor_amount'] = $strike_damage_to_players_armor_amount;

        return $this;
    }

    /**
     * Gets strike_damage_to_players_shield_amount
     * @return int
     */
    public function getStrikeDamageToPlayersShieldAmount()
    {
        return $this->container['strike_damage_to_players_shield_amount'];
    }

    /**
     * Sets strike_damage_to_players_shield_amount
     * @param int $strike_damage_to_players_shield_amount strike_damage_to_players_shield_amount integer
     * @return $this
     */
    public function setStrikeDamageToPlayersShieldAmount($strike_damage_to_players_shield_amount)
    {
        $this->container['strike_damage_to_players_shield_amount'] = $strike_damage_to_players_shield_amount;

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


