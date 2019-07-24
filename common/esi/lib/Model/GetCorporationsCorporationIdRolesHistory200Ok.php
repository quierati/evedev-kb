<?php
/**
 * GetCorporationsCorporationIdRolesHistory200Ok
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
 * GetCorporationsCorporationIdRolesHistory200Ok Class Doc Comment
 *
 * @category    Class */
 // @description 200 ok object
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetCorporationsCorporationIdRolesHistory200Ok implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'get_corporations_corporation_id_roles_history_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'changed_at' => '\DateTime',
        'character_id' => 'int',
        'issuer_id' => 'int',
        'new_roles' => 'string[]',
        'old_roles' => 'string[]',
        'role_type' => 'string'
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
        'changed_at' => 'changed_at',
        'character_id' => 'character_id',
        'issuer_id' => 'issuer_id',
        'new_roles' => 'new_roles',
        'old_roles' => 'old_roles',
        'role_type' => 'role_type'
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
        'changed_at' => 'setChangedAt',
        'character_id' => 'setCharacterId',
        'issuer_id' => 'setIssuerId',
        'new_roles' => 'setNewRoles',
        'old_roles' => 'setOldRoles',
        'role_type' => 'setRoleType'
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
        'changed_at' => 'getChangedAt',
        'character_id' => 'getCharacterId',
        'issuer_id' => 'getIssuerId',
        'new_roles' => 'getNewRoles',
        'old_roles' => 'getOldRoles',
        'role_type' => 'getRoleType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const NEW_ROLES_ACCOUNT_TAKE_1 = 'Account_Take_1';
    const NEW_ROLES_ACCOUNT_TAKE_2 = 'Account_Take_2';
    const NEW_ROLES_ACCOUNT_TAKE_3 = 'Account_Take_3';
    const NEW_ROLES_ACCOUNT_TAKE_4 = 'Account_Take_4';
    const NEW_ROLES_ACCOUNT_TAKE_5 = 'Account_Take_5';
    const NEW_ROLES_ACCOUNT_TAKE_6 = 'Account_Take_6';
    const NEW_ROLES_ACCOUNT_TAKE_7 = 'Account_Take_7';
    const NEW_ROLES_ACCOUNTANT = 'Accountant';
    const NEW_ROLES_AUDITOR = 'Auditor';
    const NEW_ROLES_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    const NEW_ROLES_CONFIG_EQUIPMENT = 'Config_Equipment';
    const NEW_ROLES_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    const NEW_ROLES_CONTAINER_TAKE_1 = 'Container_Take_1';
    const NEW_ROLES_CONTAINER_TAKE_2 = 'Container_Take_2';
    const NEW_ROLES_CONTAINER_TAKE_3 = 'Container_Take_3';
    const NEW_ROLES_CONTAINER_TAKE_4 = 'Container_Take_4';
    const NEW_ROLES_CONTAINER_TAKE_5 = 'Container_Take_5';
    const NEW_ROLES_CONTAINER_TAKE_6 = 'Container_Take_6';
    const NEW_ROLES_CONTAINER_TAKE_7 = 'Container_Take_7';
    const NEW_ROLES_CONTRACT_MANAGER = 'Contract_Manager';
    const NEW_ROLES_DIPLOMAT = 'Diplomat';
    const NEW_ROLES_DIRECTOR = 'Director';
    const NEW_ROLES_FACTORY_MANAGER = 'Factory_Manager';
    const NEW_ROLES_FITTING_MANAGER = 'Fitting_Manager';
    const NEW_ROLES_HANGAR_QUERY_1 = 'Hangar_Query_1';
    const NEW_ROLES_HANGAR_QUERY_2 = 'Hangar_Query_2';
    const NEW_ROLES_HANGAR_QUERY_3 = 'Hangar_Query_3';
    const NEW_ROLES_HANGAR_QUERY_4 = 'Hangar_Query_4';
    const NEW_ROLES_HANGAR_QUERY_5 = 'Hangar_Query_5';
    const NEW_ROLES_HANGAR_QUERY_6 = 'Hangar_Query_6';
    const NEW_ROLES_HANGAR_QUERY_7 = 'Hangar_Query_7';
    const NEW_ROLES_HANGAR_TAKE_1 = 'Hangar_Take_1';
    const NEW_ROLES_HANGAR_TAKE_2 = 'Hangar_Take_2';
    const NEW_ROLES_HANGAR_TAKE_3 = 'Hangar_Take_3';
    const NEW_ROLES_HANGAR_TAKE_4 = 'Hangar_Take_4';
    const NEW_ROLES_HANGAR_TAKE_5 = 'Hangar_Take_5';
    const NEW_ROLES_HANGAR_TAKE_6 = 'Hangar_Take_6';
    const NEW_ROLES_HANGAR_TAKE_7 = 'Hangar_Take_7';
    const NEW_ROLES_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    const NEW_ROLES_PERSONNEL_MANAGER = 'Personnel_Manager';
    const NEW_ROLES_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    const NEW_ROLES_RENT_OFFICE = 'Rent_Office';
    const NEW_ROLES_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    const NEW_ROLES_SECURITY_OFFICER = 'Security_Officer';
    const NEW_ROLES_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    const NEW_ROLES_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    const NEW_ROLES_STATION_MANAGER = 'Station_Manager';
    const NEW_ROLES_TERRESTRIAL_COMBAT_OFFICER = 'Terrestrial_Combat_Officer';
    const NEW_ROLES_TERRESTRIAL_LOGISTICS_OFFICER = 'Terrestrial_Logistics_Officer';
    const NEW_ROLES_TRADER = 'Trader';
    const OLD_ROLES_ACCOUNT_TAKE_1 = 'Account_Take_1';
    const OLD_ROLES_ACCOUNT_TAKE_2 = 'Account_Take_2';
    const OLD_ROLES_ACCOUNT_TAKE_3 = 'Account_Take_3';
    const OLD_ROLES_ACCOUNT_TAKE_4 = 'Account_Take_4';
    const OLD_ROLES_ACCOUNT_TAKE_5 = 'Account_Take_5';
    const OLD_ROLES_ACCOUNT_TAKE_6 = 'Account_Take_6';
    const OLD_ROLES_ACCOUNT_TAKE_7 = 'Account_Take_7';
    const OLD_ROLES_ACCOUNTANT = 'Accountant';
    const OLD_ROLES_AUDITOR = 'Auditor';
    const OLD_ROLES_COMMUNICATIONS_OFFICER = 'Communications_Officer';
    const OLD_ROLES_CONFIG_EQUIPMENT = 'Config_Equipment';
    const OLD_ROLES_CONFIG_STARBASE_EQUIPMENT = 'Config_Starbase_Equipment';
    const OLD_ROLES_CONTAINER_TAKE_1 = 'Container_Take_1';
    const OLD_ROLES_CONTAINER_TAKE_2 = 'Container_Take_2';
    const OLD_ROLES_CONTAINER_TAKE_3 = 'Container_Take_3';
    const OLD_ROLES_CONTAINER_TAKE_4 = 'Container_Take_4';
    const OLD_ROLES_CONTAINER_TAKE_5 = 'Container_Take_5';
    const OLD_ROLES_CONTAINER_TAKE_6 = 'Container_Take_6';
    const OLD_ROLES_CONTAINER_TAKE_7 = 'Container_Take_7';
    const OLD_ROLES_CONTRACT_MANAGER = 'Contract_Manager';
    const OLD_ROLES_DIPLOMAT = 'Diplomat';
    const OLD_ROLES_DIRECTOR = 'Director';
    const OLD_ROLES_FACTORY_MANAGER = 'Factory_Manager';
    const OLD_ROLES_FITTING_MANAGER = 'Fitting_Manager';
    const OLD_ROLES_HANGAR_QUERY_1 = 'Hangar_Query_1';
    const OLD_ROLES_HANGAR_QUERY_2 = 'Hangar_Query_2';
    const OLD_ROLES_HANGAR_QUERY_3 = 'Hangar_Query_3';
    const OLD_ROLES_HANGAR_QUERY_4 = 'Hangar_Query_4';
    const OLD_ROLES_HANGAR_QUERY_5 = 'Hangar_Query_5';
    const OLD_ROLES_HANGAR_QUERY_6 = 'Hangar_Query_6';
    const OLD_ROLES_HANGAR_QUERY_7 = 'Hangar_Query_7';
    const OLD_ROLES_HANGAR_TAKE_1 = 'Hangar_Take_1';
    const OLD_ROLES_HANGAR_TAKE_2 = 'Hangar_Take_2';
    const OLD_ROLES_HANGAR_TAKE_3 = 'Hangar_Take_3';
    const OLD_ROLES_HANGAR_TAKE_4 = 'Hangar_Take_4';
    const OLD_ROLES_HANGAR_TAKE_5 = 'Hangar_Take_5';
    const OLD_ROLES_HANGAR_TAKE_6 = 'Hangar_Take_6';
    const OLD_ROLES_HANGAR_TAKE_7 = 'Hangar_Take_7';
    const OLD_ROLES_JUNIOR_ACCOUNTANT = 'Junior_Accountant';
    const OLD_ROLES_PERSONNEL_MANAGER = 'Personnel_Manager';
    const OLD_ROLES_RENT_FACTORY_FACILITY = 'Rent_Factory_Facility';
    const OLD_ROLES_RENT_OFFICE = 'Rent_Office';
    const OLD_ROLES_RENT_RESEARCH_FACILITY = 'Rent_Research_Facility';
    const OLD_ROLES_SECURITY_OFFICER = 'Security_Officer';
    const OLD_ROLES_STARBASE_DEFENSE_OPERATOR = 'Starbase_Defense_Operator';
    const OLD_ROLES_STARBASE_FUEL_TECHNICIAN = 'Starbase_Fuel_Technician';
    const OLD_ROLES_STATION_MANAGER = 'Station_Manager';
    const OLD_ROLES_TERRESTRIAL_COMBAT_OFFICER = 'Terrestrial_Combat_Officer';
    const OLD_ROLES_TERRESTRIAL_LOGISTICS_OFFICER = 'Terrestrial_Logistics_Officer';
    const OLD_ROLES_TRADER = 'Trader';
    const ROLE_TYPE_GRANTABLE_ROLES = 'grantable_roles';
    const ROLE_TYPE_GRANTABLE_ROLES_AT_BASE = 'grantable_roles_at_base';
    const ROLE_TYPE_GRANTABLE_ROLES_AT_HQ = 'grantable_roles_at_hq';
    const ROLE_TYPE_GRANTABLE_ROLES_AT_OTHER = 'grantable_roles_at_other';
    const ROLE_TYPE_ROLES = 'roles';
    const ROLE_TYPE_ROLES_AT_BASE = 'roles_at_base';
    const ROLE_TYPE_ROLES_AT_HQ = 'roles_at_hq';
    const ROLE_TYPE_ROLES_AT_OTHER = 'roles_at_other';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNewRolesAllowableValues()
    {
        return [
            self::NEW_ROLES_ACCOUNT_TAKE_1,
            self::NEW_ROLES_ACCOUNT_TAKE_2,
            self::NEW_ROLES_ACCOUNT_TAKE_3,
            self::NEW_ROLES_ACCOUNT_TAKE_4,
            self::NEW_ROLES_ACCOUNT_TAKE_5,
            self::NEW_ROLES_ACCOUNT_TAKE_6,
            self::NEW_ROLES_ACCOUNT_TAKE_7,
            self::NEW_ROLES_ACCOUNTANT,
            self::NEW_ROLES_AUDITOR,
            self::NEW_ROLES_COMMUNICATIONS_OFFICER,
            self::NEW_ROLES_CONFIG_EQUIPMENT,
            self::NEW_ROLES_CONFIG_STARBASE_EQUIPMENT,
            self::NEW_ROLES_CONTAINER_TAKE_1,
            self::NEW_ROLES_CONTAINER_TAKE_2,
            self::NEW_ROLES_CONTAINER_TAKE_3,
            self::NEW_ROLES_CONTAINER_TAKE_4,
            self::NEW_ROLES_CONTAINER_TAKE_5,
            self::NEW_ROLES_CONTAINER_TAKE_6,
            self::NEW_ROLES_CONTAINER_TAKE_7,
            self::NEW_ROLES_CONTRACT_MANAGER,
            self::NEW_ROLES_DIPLOMAT,
            self::NEW_ROLES_DIRECTOR,
            self::NEW_ROLES_FACTORY_MANAGER,
            self::NEW_ROLES_FITTING_MANAGER,
            self::NEW_ROLES_HANGAR_QUERY_1,
            self::NEW_ROLES_HANGAR_QUERY_2,
            self::NEW_ROLES_HANGAR_QUERY_3,
            self::NEW_ROLES_HANGAR_QUERY_4,
            self::NEW_ROLES_HANGAR_QUERY_5,
            self::NEW_ROLES_HANGAR_QUERY_6,
            self::NEW_ROLES_HANGAR_QUERY_7,
            self::NEW_ROLES_HANGAR_TAKE_1,
            self::NEW_ROLES_HANGAR_TAKE_2,
            self::NEW_ROLES_HANGAR_TAKE_3,
            self::NEW_ROLES_HANGAR_TAKE_4,
            self::NEW_ROLES_HANGAR_TAKE_5,
            self::NEW_ROLES_HANGAR_TAKE_6,
            self::NEW_ROLES_HANGAR_TAKE_7,
            self::NEW_ROLES_JUNIOR_ACCOUNTANT,
            self::NEW_ROLES_PERSONNEL_MANAGER,
            self::NEW_ROLES_RENT_FACTORY_FACILITY,
            self::NEW_ROLES_RENT_OFFICE,
            self::NEW_ROLES_RENT_RESEARCH_FACILITY,
            self::NEW_ROLES_SECURITY_OFFICER,
            self::NEW_ROLES_STARBASE_DEFENSE_OPERATOR,
            self::NEW_ROLES_STARBASE_FUEL_TECHNICIAN,
            self::NEW_ROLES_STATION_MANAGER,
            self::NEW_ROLES_TERRESTRIAL_COMBAT_OFFICER,
            self::NEW_ROLES_TERRESTRIAL_LOGISTICS_OFFICER,
            self::NEW_ROLES_TRADER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOldRolesAllowableValues()
    {
        return [
            self::OLD_ROLES_ACCOUNT_TAKE_1,
            self::OLD_ROLES_ACCOUNT_TAKE_2,
            self::OLD_ROLES_ACCOUNT_TAKE_3,
            self::OLD_ROLES_ACCOUNT_TAKE_4,
            self::OLD_ROLES_ACCOUNT_TAKE_5,
            self::OLD_ROLES_ACCOUNT_TAKE_6,
            self::OLD_ROLES_ACCOUNT_TAKE_7,
            self::OLD_ROLES_ACCOUNTANT,
            self::OLD_ROLES_AUDITOR,
            self::OLD_ROLES_COMMUNICATIONS_OFFICER,
            self::OLD_ROLES_CONFIG_EQUIPMENT,
            self::OLD_ROLES_CONFIG_STARBASE_EQUIPMENT,
            self::OLD_ROLES_CONTAINER_TAKE_1,
            self::OLD_ROLES_CONTAINER_TAKE_2,
            self::OLD_ROLES_CONTAINER_TAKE_3,
            self::OLD_ROLES_CONTAINER_TAKE_4,
            self::OLD_ROLES_CONTAINER_TAKE_5,
            self::OLD_ROLES_CONTAINER_TAKE_6,
            self::OLD_ROLES_CONTAINER_TAKE_7,
            self::OLD_ROLES_CONTRACT_MANAGER,
            self::OLD_ROLES_DIPLOMAT,
            self::OLD_ROLES_DIRECTOR,
            self::OLD_ROLES_FACTORY_MANAGER,
            self::OLD_ROLES_FITTING_MANAGER,
            self::OLD_ROLES_HANGAR_QUERY_1,
            self::OLD_ROLES_HANGAR_QUERY_2,
            self::OLD_ROLES_HANGAR_QUERY_3,
            self::OLD_ROLES_HANGAR_QUERY_4,
            self::OLD_ROLES_HANGAR_QUERY_5,
            self::OLD_ROLES_HANGAR_QUERY_6,
            self::OLD_ROLES_HANGAR_QUERY_7,
            self::OLD_ROLES_HANGAR_TAKE_1,
            self::OLD_ROLES_HANGAR_TAKE_2,
            self::OLD_ROLES_HANGAR_TAKE_3,
            self::OLD_ROLES_HANGAR_TAKE_4,
            self::OLD_ROLES_HANGAR_TAKE_5,
            self::OLD_ROLES_HANGAR_TAKE_6,
            self::OLD_ROLES_HANGAR_TAKE_7,
            self::OLD_ROLES_JUNIOR_ACCOUNTANT,
            self::OLD_ROLES_PERSONNEL_MANAGER,
            self::OLD_ROLES_RENT_FACTORY_FACILITY,
            self::OLD_ROLES_RENT_OFFICE,
            self::OLD_ROLES_RENT_RESEARCH_FACILITY,
            self::OLD_ROLES_SECURITY_OFFICER,
            self::OLD_ROLES_STARBASE_DEFENSE_OPERATOR,
            self::OLD_ROLES_STARBASE_FUEL_TECHNICIAN,
            self::OLD_ROLES_STATION_MANAGER,
            self::OLD_ROLES_TERRESTRIAL_COMBAT_OFFICER,
            self::OLD_ROLES_TERRESTRIAL_LOGISTICS_OFFICER,
            self::OLD_ROLES_TRADER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRoleTypeAllowableValues()
    {
        return [
            self::ROLE_TYPE_GRANTABLE_ROLES,
            self::ROLE_TYPE_GRANTABLE_ROLES_AT_BASE,
            self::ROLE_TYPE_GRANTABLE_ROLES_AT_HQ,
            self::ROLE_TYPE_GRANTABLE_ROLES_AT_OTHER,
            self::ROLE_TYPE_ROLES,
            self::ROLE_TYPE_ROLES_AT_BASE,
            self::ROLE_TYPE_ROLES_AT_HQ,
            self::ROLE_TYPE_ROLES_AT_OTHER,
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
        $this->container['changed_at'] = isset($data['changed_at']) ? $data['changed_at'] : null;
        $this->container['character_id'] = isset($data['character_id']) ? $data['character_id'] : null;
        $this->container['issuer_id'] = isset($data['issuer_id']) ? $data['issuer_id'] : null;
        $this->container['new_roles'] = isset($data['new_roles']) ? $data['new_roles'] : null;
        $this->container['old_roles'] = isset($data['old_roles']) ? $data['old_roles'] : null;
        $this->container['role_type'] = isset($data['role_type']) ? $data['role_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['changed_at'] === null) {
            $invalid_properties[] = "'changed_at' can't be null";
        }
        if ($this->container['character_id'] === null) {
            $invalid_properties[] = "'character_id' can't be null";
        }
        if ($this->container['issuer_id'] === null) {
            $invalid_properties[] = "'issuer_id' can't be null";
        }
        if ($this->container['new_roles'] === null) {
            $invalid_properties[] = "'new_roles' can't be null";
        }
        if ($this->container['old_roles'] === null) {
            $invalid_properties[] = "'old_roles' can't be null";
        }
        if ($this->container['role_type'] === null) {
            $invalid_properties[] = "'role_type' can't be null";
        }
        $allowed_values = array("grantable_roles", "grantable_roles_at_base", "grantable_roles_at_hq", "grantable_roles_at_other", "roles", "roles_at_base", "roles_at_hq", "roles_at_other");
        if (!in_array($this->container['role_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'role_type', must be one of #{allowed_values}.";
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
        if ($this->container['changed_at'] === null) {
            return false;
        }
        if ($this->container['character_id'] === null) {
            return false;
        }
        if ($this->container['issuer_id'] === null) {
            return false;
        }
        if ($this->container['new_roles'] === null) {
            return false;
        }
        if ($this->container['old_roles'] === null) {
            return false;
        }
        if ($this->container['role_type'] === null) {
            return false;
        }
        $allowed_values = array("grantable_roles", "grantable_roles_at_base", "grantable_roles_at_hq", "grantable_roles_at_other", "roles", "roles_at_base", "roles_at_hq", "roles_at_other");
        if (!in_array($this->container['role_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets changed_at
     * @return \DateTime
     */
    public function getChangedAt()
    {
        return $this->container['changed_at'];
    }

    /**
     * Sets changed_at
     * @param \DateTime $changed_at changed_at string
     * @return $this
     */
    public function setChangedAt($changed_at)
    {
        $this->container['changed_at'] = $changed_at;

        return $this;
    }

    /**
     * Gets character_id
     * @return int
     */
    public function getCharacterId()
    {
        return $this->container['character_id'];
    }

    /**
     * Sets character_id
     * @param int $character_id The character whose roles are changed
     * @return $this
     */
    public function setCharacterId($character_id)
    {
        $this->container['character_id'] = $character_id;

        return $this;
    }

    /**
     * Gets issuer_id
     * @return int
     */
    public function getIssuerId()
    {
        return $this->container['issuer_id'];
    }

    /**
     * Sets issuer_id
     * @param int $issuer_id ID of the character who issued this change
     * @return $this
     */
    public function setIssuerId($issuer_id)
    {
        $this->container['issuer_id'] = $issuer_id;

        return $this;
    }

    /**
     * Gets new_roles
     * @return string[]
     */
    public function getNewRoles()
    {
        return $this->container['new_roles'];
    }

    /**
     * Sets new_roles
     * @param string[] $new_roles new_roles array
     * @return $this
     */
    public function setNewRoles($new_roles)
    {
        $allowed_values = array('Account_Take_1', 'Account_Take_2', 'Account_Take_3', 'Account_Take_4', 'Account_Take_5', 'Account_Take_6', 'Account_Take_7', 'Accountant', 'Auditor', 'Communications_Officer', 'Config_Equipment', 'Config_Starbase_Equipment', 'Container_Take_1', 'Container_Take_2', 'Container_Take_3', 'Container_Take_4', 'Container_Take_5', 'Container_Take_6', 'Container_Take_7', 'Contract_Manager', 'Diplomat', 'Director', 'Factory_Manager', 'Fitting_Manager', 'Hangar_Query_1', 'Hangar_Query_2', 'Hangar_Query_3', 'Hangar_Query_4', 'Hangar_Query_5', 'Hangar_Query_6', 'Hangar_Query_7', 'Hangar_Take_1', 'Hangar_Take_2', 'Hangar_Take_3', 'Hangar_Take_4', 'Hangar_Take_5', 'Hangar_Take_6', 'Hangar_Take_7', 'Junior_Accountant', 'Personnel_Manager', 'Rent_Factory_Facility', 'Rent_Office', 'Rent_Research_Facility', 'Security_Officer', 'Starbase_Defense_Operator', 'Starbase_Fuel_Technician', 'Station_Manager', 'Terrestrial_Combat_Officer', 'Terrestrial_Logistics_Officer', 'Trader');
        if (!in_array($new_roles, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'new_roles', must be one of 'Account_Take_1', 'Account_Take_2', 'Account_Take_3', 'Account_Take_4', 'Account_Take_5', 'Account_Take_6', 'Account_Take_7', 'Accountant', 'Auditor', 'Communications_Officer', 'Config_Equipment', 'Config_Starbase_Equipment', 'Container_Take_1', 'Container_Take_2', 'Container_Take_3', 'Container_Take_4', 'Container_Take_5', 'Container_Take_6', 'Container_Take_7', 'Contract_Manager', 'Diplomat', 'Director', 'Factory_Manager', 'Fitting_Manager', 'Hangar_Query_1', 'Hangar_Query_2', 'Hangar_Query_3', 'Hangar_Query_4', 'Hangar_Query_5', 'Hangar_Query_6', 'Hangar_Query_7', 'Hangar_Take_1', 'Hangar_Take_2', 'Hangar_Take_3', 'Hangar_Take_4', 'Hangar_Take_5', 'Hangar_Take_6', 'Hangar_Take_7', 'Junior_Accountant', 'Personnel_Manager', 'Rent_Factory_Facility', 'Rent_Office', 'Rent_Research_Facility', 'Security_Officer', 'Starbase_Defense_Operator', 'Starbase_Fuel_Technician', 'Station_Manager', 'Terrestrial_Combat_Officer', 'Terrestrial_Logistics_Officer', 'Trader'");
        }
        $this->container['new_roles'] = $new_roles;

        return $this;
    }

    /**
     * Gets old_roles
     * @return string[]
     */
    public function getOldRoles()
    {
        return $this->container['old_roles'];
    }

    /**
     * Sets old_roles
     * @param string[] $old_roles old_roles array
     * @return $this
     */
    public function setOldRoles($old_roles)
    {
        $allowed_values = array('Account_Take_1', 'Account_Take_2', 'Account_Take_3', 'Account_Take_4', 'Account_Take_5', 'Account_Take_6', 'Account_Take_7', 'Accountant', 'Auditor', 'Communications_Officer', 'Config_Equipment', 'Config_Starbase_Equipment', 'Container_Take_1', 'Container_Take_2', 'Container_Take_3', 'Container_Take_4', 'Container_Take_5', 'Container_Take_6', 'Container_Take_7', 'Contract_Manager', 'Diplomat', 'Director', 'Factory_Manager', 'Fitting_Manager', 'Hangar_Query_1', 'Hangar_Query_2', 'Hangar_Query_3', 'Hangar_Query_4', 'Hangar_Query_5', 'Hangar_Query_6', 'Hangar_Query_7', 'Hangar_Take_1', 'Hangar_Take_2', 'Hangar_Take_3', 'Hangar_Take_4', 'Hangar_Take_5', 'Hangar_Take_6', 'Hangar_Take_7', 'Junior_Accountant', 'Personnel_Manager', 'Rent_Factory_Facility', 'Rent_Office', 'Rent_Research_Facility', 'Security_Officer', 'Starbase_Defense_Operator', 'Starbase_Fuel_Technician', 'Station_Manager', 'Terrestrial_Combat_Officer', 'Terrestrial_Logistics_Officer', 'Trader');
        if (!in_array($old_roles, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'old_roles', must be one of 'Account_Take_1', 'Account_Take_2', 'Account_Take_3', 'Account_Take_4', 'Account_Take_5', 'Account_Take_6', 'Account_Take_7', 'Accountant', 'Auditor', 'Communications_Officer', 'Config_Equipment', 'Config_Starbase_Equipment', 'Container_Take_1', 'Container_Take_2', 'Container_Take_3', 'Container_Take_4', 'Container_Take_5', 'Container_Take_6', 'Container_Take_7', 'Contract_Manager', 'Diplomat', 'Director', 'Factory_Manager', 'Fitting_Manager', 'Hangar_Query_1', 'Hangar_Query_2', 'Hangar_Query_3', 'Hangar_Query_4', 'Hangar_Query_5', 'Hangar_Query_6', 'Hangar_Query_7', 'Hangar_Take_1', 'Hangar_Take_2', 'Hangar_Take_3', 'Hangar_Take_4', 'Hangar_Take_5', 'Hangar_Take_6', 'Hangar_Take_7', 'Junior_Accountant', 'Personnel_Manager', 'Rent_Factory_Facility', 'Rent_Office', 'Rent_Research_Facility', 'Security_Officer', 'Starbase_Defense_Operator', 'Starbase_Fuel_Technician', 'Station_Manager', 'Terrestrial_Combat_Officer', 'Terrestrial_Logistics_Officer', 'Trader'");
        }
        $this->container['old_roles'] = $old_roles;

        return $this;
    }

    /**
     * Gets role_type
     * @return string
     */
    public function getRoleType()
    {
        return $this->container['role_type'];
    }

    /**
     * Sets role_type
     * @param string $role_type role_type string
     * @return $this
     */
    public function setRoleType($role_type)
    {
        $allowed_values = array('grantable_roles', 'grantable_roles_at_base', 'grantable_roles_at_hq', 'grantable_roles_at_other', 'roles', 'roles_at_base', 'roles_at_hq', 'roles_at_other');
        if (!in_array($role_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'role_type', must be one of 'grantable_roles', 'grantable_roles_at_base', 'grantable_roles_at_hq', 'grantable_roles_at_other', 'roles', 'roles_at_base', 'roles_at_hq', 'roles_at_other'");
        }
        $this->container['role_type'] = $role_type;

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


