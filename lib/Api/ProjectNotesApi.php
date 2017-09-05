<?php
/**
 * ProjectNotesApi
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

namespace Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Api;

use \Spinen\ConnectWise\Clients\Project\ApiClient;
use \Spinen\ConnectWise\Clients\Project\ApiException;
use \Spinen\ConnectWise\Clients\Project\Configuration;
use \Spinen\ConnectWise\Clients\Project\ObjectSerializer;

/**
 * ProjectNotesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Project
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectNotesApi
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
     * @return ProjectNotesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Project\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation projectProjectsIdNotesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Count
     */
    public function projectProjectsIdNotesCountGet($id, $conditions = null)
    {
        list($response) = $this->projectProjectsIdNotesCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation projectProjectsIdNotesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdNotesCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdNotesCountGet');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/notes/count";
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
                '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Count',
                '/project/projects/{id}/notes/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdNotesGet
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
     * @return \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote[]
     */
    public function projectProjectsIdNotesGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->projectProjectsIdNotesGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation projectProjectsIdNotesGetWithHttpInfo
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
     * @return array of \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote[], HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdNotesGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdNotesGet');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/notes";
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
                '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote[]',
                '/project/projects/{id}/notes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdNotesNoteIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return void
     */
    public function projectProjectsIdNotesNoteIdDelete($id, $note_id)
    {
        list($response) = $this->projectProjectsIdNotesNoteIdDeleteWithHttpInfo($id, $note_id);
        return $response;
    }

    /**
     * Operation projectProjectsIdNotesNoteIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdNotesNoteIdDeleteWithHttpInfo($id, $note_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdNotesNoteIdDelete');
        }
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling projectProjectsIdNotesNoteIdDelete');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/notes/{noteId}";
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
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
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
                '/project/projects/{id}/notes/{noteId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdNotesNoteIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote
     */
    public function projectProjectsIdNotesNoteIdGet($id, $note_id)
    {
        list($response) = $this->projectProjectsIdNotesNoteIdGetWithHttpInfo($id, $note_id);
        return $response;
    }

    /**
     * Operation projectProjectsIdNotesNoteIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdNotesNoteIdGetWithHttpInfo($id, $note_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdNotesNoteIdGet');
        }
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling projectProjectsIdNotesNoteIdGet');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/notes/{noteId}";
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
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
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
                '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote',
                '/project/projects/{id}/notes/{noteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdNotesNoteIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote
     */
    public function projectProjectsIdNotesNoteIdPatch($id, $note_id, $operations)
    {
        list($response) = $this->projectProjectsIdNotesNoteIdPatchWithHttpInfo($id, $note_id, $operations);
        return $response;
    }

    /**
     * Operation projectProjectsIdNotesNoteIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdNotesNoteIdPatchWithHttpInfo($id, $note_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdNotesNoteIdPatch');
        }
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling projectProjectsIdNotesNoteIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling projectProjectsIdNotesNoteIdPatch');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/notes/{noteId}";
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
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
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
                '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote',
                '/project/projects/{id}/notes/{noteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdNotesNoteIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote $note  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote
     */
    public function projectProjectsIdNotesNoteIdPut($id, $note_id, $note)
    {
        list($response) = $this->projectProjectsIdNotesNoteIdPutWithHttpInfo($id, $note_id, $note);
        return $response;
    }

    /**
     * Operation projectProjectsIdNotesNoteIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $note_id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote $note  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdNotesNoteIdPutWithHttpInfo($id, $note_id, $note)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdNotesNoteIdPut');
        }
        // verify the required parameter 'note_id' is set
        if ($note_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note_id when calling projectProjectsIdNotesNoteIdPut');
        }
        // verify the required parameter 'note' is set
        if ($note === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note when calling projectProjectsIdNotesNoteIdPut');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/notes/{noteId}";
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
        if ($note_id !== null) {
            $resourcePath = str_replace(
                "{" . "noteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($note_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($note)) {
            $_tempBody = $note;
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
                '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote',
                '/project/projects/{id}/notes/{noteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation projectProjectsIdNotesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote $note  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote
     */
    public function projectProjectsIdNotesPost($id, $note)
    {
        list($response) = $this->projectProjectsIdNotesPostWithHttpInfo($id, $note);
        return $response;
    }

    /**
     * Operation projectProjectsIdNotesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote $note  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdNotesPostWithHttpInfo($id, $note)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdNotesPost');
        }
        // verify the required parameter 'note' is set
        if ($note === null) {
            throw new \InvalidArgumentException('Missing the required parameter $note when calling projectProjectsIdNotesPost');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/notes";
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
        if (isset($note)) {
            $_tempBody = $note;
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
                '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote',
                '/project/projects/{id}/notes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\ProjectNote', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Spinen\ConnectWise\Clients\Project\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
