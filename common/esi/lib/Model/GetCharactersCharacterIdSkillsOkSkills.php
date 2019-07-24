<?php
/**
 * GetCharactersCharacterIdSkillsOkSkills
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
 * GetCharactersCharacterIdSkillsOkSkills Class Doc Comment
 *
 * @category    Class */
 // @description skill object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCharactersCharacterIdSkillsOkSkills implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_characters_character_id_skills_ok_skills';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'active_skill_level' => 'int',
        'skill_id' => 'int',
        'skillpoints_in_skill' => 'int',
        'trained_skill_level' => 'int'
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
        'active_skill_level' => 'active_skill_level',
        'skill_id' => 'skill_id',
        'skillpoints_in_skill' => 'skillpoints_in_skill',
        'trained_skill_level' => 'trained_skill_level'
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
        'active_skill_level' => 'setActiveSkillLevel',
        'skill_id' => 'setSkillId',
        'skillpoints_in_skill' => 'setSkillpointsInSkill',
        'trained_skill_level' => 'setTrainedSkillLevel'
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
        'active_skill_level' => 'getActiveSkillLevel',
        'skill_id' => 'getSkillId',
        'skillpoints_in_skill' => 'getSkillpointsInSkill',
        'trained_skill_level' => 'getTrainedSkillLevel'
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
        $this->container['active_skill_level'] = isset($data['active_skill_level']) ? $data['active_skill_level'] : null;
        $this->container['skill_id'] = isset($data['skill_id']) ? $data['skill_id'] : null;
        $this->container['skillpoints_in_skill'] = isset($data['skillpoints_in_skill']) ? $data['skillpoints_in_skill'] : null;
        $this->container['trained_skill_level'] = isset($data['trained_skill_level']) ? $data['trained_skill_level'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['active_skill_level'] === null) {
            $invalid_properties[] = "'active_skill_level' can't be null";
        }
        if ($this->container['skill_id'] === null) {
            $invalid_properties[] = "'skill_id' can't be null";
        }
        if ($this->container['skillpoints_in_skill'] === null) {
            $invalid_properties[] = "'skillpoints_in_skill' can't be null";
        }
        if ($this->container['trained_skill_level'] === null) {
            $invalid_properties[] = "'trained_skill_level' can't be null";
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
        if ($this->container['active_skill_level'] === null) {
            return false;
        }
        if ($this->container['skill_id'] === null) {
            return false;
        }
        if ($this->container['skillpoints_in_skill'] === null) {
            return false;
        }
        if ($this->container['trained_skill_level'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets active_skill_level
     * @return int
     */
    public function getActiveSkillLevel()
    {
        return $this->container['active_skill_level'];
    }

    /**
     * Sets active_skill_level
     * @param int $active_skill_level active_skill_level integer
     * @return $this
     */
    public function setActiveSkillLevel($active_skill_level)
    {
        $this->container['active_skill_level'] = $active_skill_level;

        return $this;
    }

    /**
     * Gets skill_id
     * @return int
     */
    public function getSkillId()
    {
        return $this->container['skill_id'];
    }

    /**
     * Sets skill_id
     * @param int $skill_id skill_id integer
     * @return $this
     */
    public function setSkillId($skill_id)
    {
        $this->container['skill_id'] = $skill_id;

        return $this;
    }

    /**
     * Gets skillpoints_in_skill
     * @return int
     */
    public function getSkillpointsInSkill()
    {
        return $this->container['skillpoints_in_skill'];
    }

    /**
     * Sets skillpoints_in_skill
     * @param int $skillpoints_in_skill skillpoints_in_skill integer
     * @return $this
     */
    public function setSkillpointsInSkill($skillpoints_in_skill)
    {
        $this->container['skillpoints_in_skill'] = $skillpoints_in_skill;

        return $this;
    }

    /**
     * Gets trained_skill_level
     * @return int
     */
    public function getTrainedSkillLevel()
    {
        return $this->container['trained_skill_level'];
    }

    /**
     * Sets trained_skill_level
     * @param int $trained_skill_level trained_skill_level integer
     * @return $this
     */
    public function setTrainedSkillLevel($trained_skill_level)
    {
        $this->container['trained_skill_level'] = $trained_skill_level;

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


