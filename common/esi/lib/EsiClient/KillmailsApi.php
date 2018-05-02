<?php
/**
 * KillmailsApi
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

namespace EsiClient;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * KillmailsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KillmailsApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://esi.evetech.net');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return KillmailsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCharactersCharacterIdKillmailsRecent
     *
     * Get character kills and losses
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param int $max_count How many killmails to return at maximum (optional, default to 50)
     * @param int $max_kill_id Only return killmails with ID smaller than this. (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdKillmailsRecent($character_id, $datasource = null, $if_none_match = null, $max_count = null, $max_kill_id = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getCharactersCharacterIdKillmailsRecentWithHttpInfo($character_id, $datasource, $if_none_match, $max_count, $max_kill_id, $token, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdKillmailsRecentWithHttpInfo
     *
     * Get character kills and losses
     *
     * @param int $character_id An EVE character ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param int $max_count How many killmails to return at maximum (optional, default to 50)
     * @param int $max_kill_id Only return killmails with ID smaller than this. (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCharactersCharacterIdKillmailsRecentWithHttpInfo($character_id, $datasource = null, $if_none_match = null, $max_count = null, $max_kill_id = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'character_id' is set
        if ($character_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $character_id when calling getCharactersCharacterIdKillmailsRecent');
        }
        if (($character_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$character_id" when calling KillmailsApi.getCharactersCharacterIdKillmailsRecent, must be bigger than or equal to 1.0.');
        }

        if (!is_null($max_count) && ($max_count > 5000.0)) {
            throw new \InvalidArgumentException('invalid value for "$max_count" when calling KillmailsApi.getCharactersCharacterIdKillmailsRecent, must be smaller than or equal to 5000.0.');
        }

        // parse inputs
        $resourcePath = "/v1/characters/{character_id}/killmails/recent/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($max_count !== null) {
            $queryParams['max_count'] = $this->apiClient->getSerializer()->toQueryValue($max_count);
        }
        // query params
        if ($max_kill_id !== null) {
            $queryParams['max_kill_id'] = $this->apiClient->getSerializer()->toQueryValue($max_kill_id);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($character_id !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($character_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[]',
                '/v1/characters/{character_id}/killmails/recent/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCharactersCharacterIdKillmailsRecent200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Unauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadGateway', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCorporationsCorporationIdKillmailsRecent
     *
     * Get corporation kills and losses
     *
     * @param int $corporation_id An EVE corporation ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param int $max_kill_id Only return killmails with ID smaller than this (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetCorporationsCorporationIdKillmailsRecent200Ok[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCorporationsCorporationIdKillmailsRecent($corporation_id, $datasource = null, $if_none_match = null, $max_kill_id = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getCorporationsCorporationIdKillmailsRecentWithHttpInfo($corporation_id, $datasource, $if_none_match, $max_kill_id, $token, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getCorporationsCorporationIdKillmailsRecentWithHttpInfo
     *
     * Get corporation kills and losses
     *
     * @param int $corporation_id An EVE corporation ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param int $max_kill_id Only return killmails with ID smaller than this (optional)
     * @param string $token Access token to use if unable to set a header (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetCorporationsCorporationIdKillmailsRecent200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getCorporationsCorporationIdKillmailsRecentWithHttpInfo($corporation_id, $datasource = null, $if_none_match = null, $max_kill_id = null, $token = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'corporation_id' is set
        if ($corporation_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $corporation_id when calling getCorporationsCorporationIdKillmailsRecent');
        }
        if (($corporation_id < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$corporation_id" when calling KillmailsApi.getCorporationsCorporationIdKillmailsRecent, must be bigger than or equal to 1.0.');
        }

        // parse inputs
        $resourcePath = "/v1/corporations/{corporation_id}/killmails/recent/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($max_kill_id !== null) {
            $queryParams['max_kill_id'] = $this->apiClient->getSerializer()->toQueryValue($max_kill_id);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($corporation_id !== null) {
            $resourcePath = str_replace(
                "{" . "corporation_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($corporation_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetCorporationsCorporationIdKillmailsRecent200Ok[]',
                '/v1/corporations/{corporation_id}/killmails/recent/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetCorporationsCorporationIdKillmailsRecent200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetCorporationsCorporationIdKillmailsRecent200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Unauthorized', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadGateway', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getKillmailsKillmailIdKillmailHash
     *
     * Get a single killmail
     *
     * @param string $killmail_hash The killmail hash for verification (required)
     * @param int $killmail_id The killmail ID to be queried (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return \Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getKillmailsKillmailIdKillmailHash($killmail_hash, $killmail_id, $datasource = null, $if_none_match = null, $user_agent = null, $x_user_agent = null)
    {
        list($response) = $this->getKillmailsKillmailIdKillmailHashWithHttpInfo($killmail_hash, $killmail_id, $datasource, $if_none_match, $user_agent, $x_user_agent);
        return $response;
    }

    /**
     * Operation getKillmailsKillmailIdKillmailHashWithHttpInfo
     *
     * Get a single killmail
     *
     * @param string $killmail_hash The killmail hash for verification (required)
     * @param int $killmail_id The killmail ID to be queried (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $if_none_match ETag from a previous request. A 304 will be returned if this matches the current ETag (optional)
     * @param string $user_agent Client identifier, takes precedence over headers (optional)
     * @param string $x_user_agent Client identifier, takes precedence over User-Agent (optional)
     * @return Array of \Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getKillmailsKillmailIdKillmailHashWithHttpInfo($killmail_hash, $killmail_id, $datasource = null, $if_none_match = null, $user_agent = null, $x_user_agent = null)
    {
        // verify the required parameter 'killmail_hash' is set
        if ($killmail_hash === null) {
            throw new \InvalidArgumentException('Missing the required parameter $killmail_hash when calling getKillmailsKillmailIdKillmailHash');
        }
        // verify the required parameter 'killmail_id' is set
        if ($killmail_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $killmail_id when calling getKillmailsKillmailIdKillmailHash');
        }
        // parse inputs
        $resourcePath = "/v1/killmails/{killmail_id}/{killmail_hash}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($user_agent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($user_agent);
        }
        // header params
        if ($if_none_match !== null) {
            $headerParams['If-None-Match'] = $this->apiClient->getSerializer()->toHeaderValue($if_none_match);
        }
        // header params
        if ($x_user_agent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($x_user_agent);
        }
        // path params
        if ($killmail_hash !== null) {
            $resourcePath = str_replace(
                "{" . "killmail_hash" . "}",
                $this->apiClient->getSerializer()->toPathValue($killmail_hash),
                $resourcePath
            );
        }
        // path params
        if ($killmail_id !== null) {
            $resourcePath = str_replace(
                "{" . "killmail_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($killmail_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk',
                '/v1/killmails/{killmail_id}/{killmail_hash}/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetKillmailsKillmailIdKillmailHashUnprocessableEntity', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BadGateway', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ServiceUnavailable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
