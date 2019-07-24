<?php
/**
 * GetCharactersCharacterIdNotificationsContacts200Ok
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
 * GetCharactersCharacterIdNotificationsContacts200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdNotificationsContacts200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_notifications_contacts_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'message' => 'string',
        'notification_id' => 'int',
        'send_date' => '\DateTime',
        'sender_character_id' => 'int',
        'standing_level' => 'float'
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
        'message' => 'message',
        'notification_id' => 'notification_id',
        'send_date' => 'send_date',
        'sender_character_id' => 'sender_character_id',
        'standing_level' => 'standing_level'
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
        'message' => 'setMessage',
        'notification_id' => 'setNotificationId',
        'send_date' => 'setSendDate',
        'sender_character_id' => 'setSenderCharacterId',
        'standing_level' => 'setStandingLevel'
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
        'message' => 'getMessage',
        'notification_id' => 'getNotificationId',
        'send_date' => 'getSendDate',
        'sender_character_id' => 'getSenderCharacterId',
        'standing_level' => 'getStandingLevel'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['notification_id'] = isset($data['notification_id']) ? $data['notification_id'] : null;
        $this->container['send_date'] = isset($data['send_date']) ? $data['send_date'] : null;
        $this->container['sender_character_id'] = isset($data['sender_character_id']) ? $data['sender_character_id'] : null;
        $this->container['standing_level'] = isset($data['standing_level']) ? $data['standing_level'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['message'] === null) {
            $invalid_properties[] = "'message' can't be null";
        }
        if ($this->container['notification_id'] === null) {
            $invalid_properties[] = "'notification_id' can't be null";
        }
        if ($this->container['send_date'] === null) {
            $invalid_properties[] = "'send_date' can't be null";
        }
        if ($this->container['sender_character_id'] === null) {
            $invalid_properties[] = "'sender_character_id' can't be null";
        }
        if ($this->container['standing_level'] === null) {
            $invalid_properties[] = "'standing_level' can't be null";
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
        if ($this->container['message'] === null) {
            return false;
        }
        if ($this->container['notification_id'] === null) {
            return false;
        }
        if ($this->container['send_date'] === null) {
            return false;
        }
        if ($this->container['sender_character_id'] === null) {
            return false;
        }
        if ($this->container['standing_level'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message message string
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets notification_id
     * @return int
     */
    public function getNotificationId()
    {
        return $this->container['notification_id'];
    }

    /**
     * Sets notification_id
     * @param int $notification_id notification_id integer
     * @return $this
     */
    public function setNotificationId($notification_id)
    {
        $this->container['notification_id'] = $notification_id;

        return $this;
    }

    /**
     * Gets send_date
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->container['send_date'];
    }

    /**
     * Sets send_date
     * @param \DateTime $send_date send_date string
     * @return $this
     */
    public function setSendDate($send_date)
    {
        $this->container['send_date'] = $send_date;

        return $this;
    }

    /**
     * Gets sender_character_id
     * @return int
     */
    public function getSenderCharacterId()
    {
        return $this->container['sender_character_id'];
    }

    /**
     * Sets sender_character_id
     * @param int $sender_character_id sender_character_id integer
     * @return $this
     */
    public function setSenderCharacterId($sender_character_id)
    {
        $this->container['sender_character_id'] = $sender_character_id;

        return $this;
    }

    /**
     * Gets standing_level
     * @return float
     */
    public function getStandingLevel()
    {
        return $this->container['standing_level'];
    }

    /**
     * Sets standing_level
     * @param float $standing_level A number representing the standing level the receiver has been added at by the sender. The standing levels are as follows: -10 -> Terrible | -5 -> Bad |  0 -> Neutral |  5 -> Good |  10 -> Excellent
     * @return $this
     */
    public function setStandingLevel($standing_level)
    {
        $this->container['standing_level'] = $standing_level;

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


