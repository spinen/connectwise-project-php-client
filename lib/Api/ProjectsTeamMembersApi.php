<?php
/**
 * ProjectsTeamMembersApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Project
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Project API
 *
 * ConnectWise Project API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Project\Api;

use \Spinen\ConnectWise\Clients\Project\ApiClient;
use \Spinen\ConnectWise\Clients\Project\ApiException;
use \Spinen\ConnectWise\Clients\Project\Configuration;
use \Spinen\ConnectWise\Clients\Project\ObjectSerializer;

/**
 * ProjectsTeamMembersApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Project
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectsTeamMembersApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Project\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Project\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Project\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Project\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Project\ApiClient $apiClient set the API client
     *
     * @return ProjectsTeamMembersApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Project\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation projectProjectsIdTeamMembersCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Model\Count
     */
    public function projectProjectsIdTeamMembersCountGet($id, $conditions = null)
    {
        list($response) = $this->projectProjectsIdTeamMembersCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation projectProjectsIdTeamMembersCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdTeamMembersCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdTeamMembersCountGet');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/teamMembers/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Project\Model\Count',
                '/project/projects/{id}/teamMembers/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdTeamMembersGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember[]
     */
    public function projectProjectsIdTeamMembersGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->projectProjectsIdTeamMembersGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation projectProjectsIdTeamMembersGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember[], HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdTeamMembersGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdTeamMembersGet');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/teamMembers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember[]',
                '/project/projects/{id}/teamMembers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdTeamMembersPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember $team_member  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember
     */
    public function projectProjectsIdTeamMembersPost($id, $team_member)
    {
        list($response) = $this->projectProjectsIdTeamMembersPostWithHttpInfo($id, $team_member);
        return $response;
    }

    /**
     * Operation projectProjectsIdTeamMembersPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember $team_member  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdTeamMembersPostWithHttpInfo($id, $team_member)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdTeamMembersPost');
        }
        // verify the required parameter 'team_member' is set
        if ($team_member === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_member when calling projectProjectsIdTeamMembersPost');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/teamMembers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($team_member)) {
            $_tempBody = $team_member;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember',
                '/project/projects/{id}/teamMembers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdTeamMembersTeamMemberIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_member_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return void
     */
    public function projectProjectsIdTeamMembersTeamMemberIdDelete($id, $team_member_id)
    {
        list($response) = $this->projectProjectsIdTeamMembersTeamMemberIdDeleteWithHttpInfo($id, $team_member_id);
        return $response;
    }

    /**
     * Operation projectProjectsIdTeamMembersTeamMemberIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_member_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdTeamMembersTeamMemberIdDeleteWithHttpInfo($id, $team_member_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdTeamMembersTeamMemberIdDelete');
        }
        // verify the required parameter 'team_member_id' is set
        if ($team_member_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_member_id when calling projectProjectsIdTeamMembersTeamMemberIdDelete');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/teamMembers/{teamMemberId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($team_member_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamMemberId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_member_id),
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/project/projects/{id}/teamMembers/{teamMemberId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdTeamMembersTeamMemberIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_member_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember
     */
    public function projectProjectsIdTeamMembersTeamMemberIdGet($id, $team_member_id)
    {
        list($response) = $this->projectProjectsIdTeamMembersTeamMemberIdGetWithHttpInfo($id, $team_member_id);
        return $response;
    }

    /**
     * Operation projectProjectsIdTeamMembersTeamMemberIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_member_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdTeamMembersTeamMemberIdGetWithHttpInfo($id, $team_member_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdTeamMembersTeamMemberIdGet');
        }
        // verify the required parameter 'team_member_id' is set
        if ($team_member_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_member_id when calling projectProjectsIdTeamMembersTeamMemberIdGet');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/teamMembers/{teamMemberId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($team_member_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamMemberId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_member_id),
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember',
                '/project/projects/{id}/teamMembers/{teamMemberId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdTeamMembersTeamMemberIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_member_id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember
     */
    public function projectProjectsIdTeamMembersTeamMemberIdPatch($id, $team_member_id, $operations)
    {
        list($response) = $this->projectProjectsIdTeamMembersTeamMemberIdPatchWithHttpInfo($id, $team_member_id, $operations);
        return $response;
    }

    /**
     * Operation projectProjectsIdTeamMembersTeamMemberIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_member_id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdTeamMembersTeamMemberIdPatchWithHttpInfo($id, $team_member_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdTeamMembersTeamMemberIdPatch');
        }
        // verify the required parameter 'team_member_id' is set
        if ($team_member_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_member_id when calling projectProjectsIdTeamMembersTeamMemberIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling projectProjectsIdTeamMembersTeamMemberIdPatch');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/teamMembers/{teamMemberId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($team_member_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamMemberId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_member_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember',
                '/project/projects/{id}/teamMembers/{teamMemberId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdTeamMembersTeamMemberIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_member_id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember $team_member  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember
     */
    public function projectProjectsIdTeamMembersTeamMemberIdPut($id, $team_member_id, $team_member)
    {
        list($response) = $this->projectProjectsIdTeamMembersTeamMemberIdPutWithHttpInfo($id, $team_member_id, $team_member);
        return $response;
    }

    /**
     * Operation projectProjectsIdTeamMembersTeamMemberIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $team_member_id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember $team_member  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdTeamMembersTeamMemberIdPutWithHttpInfo($id, $team_member_id, $team_member)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdTeamMembersTeamMemberIdPut');
        }
        // verify the required parameter 'team_member_id' is set
        if ($team_member_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_member_id when calling projectProjectsIdTeamMembersTeamMemberIdPut');
        }
        // verify the required parameter 'team_member' is set
        if ($team_member === null) {
            throw new \InvalidArgumentException('Missing the required parameter $team_member when calling projectProjectsIdTeamMembersTeamMemberIdPut');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/teamMembers/{teamMemberId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($team_member_id !== null) {
            $resourcePath = str_replace(
                "{" . "teamMemberId" . "}",
                $this->apiClient->getSerializer()->toPathValue($team_member_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($team_member)) {
            $_tempBody = $team_member;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember',
                '/project/projects/{id}/teamMembers/{teamMemberId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\ProjectTeamMember', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}