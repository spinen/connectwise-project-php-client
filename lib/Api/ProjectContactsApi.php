<?php
/**
 * ProjectContactsApi
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
 * ProjectContactsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Project
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectContactsApi
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
     * @return ProjectContactsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Project\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation projectProjectsIdContactsContactIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $contact_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return void
     */
    public function projectProjectsIdContactsContactIdDelete($id, $contact_id)
    {
        list($response) = $this->projectProjectsIdContactsContactIdDeleteWithHttpInfo($id, $contact_id);
        return $response;
    }

    /**
     * Operation projectProjectsIdContactsContactIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $contact_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdContactsContactIdDeleteWithHttpInfo($id, $contact_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdContactsContactIdDelete');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling projectProjectsIdContactsContactIdDelete');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/contacts/{contactId}";
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
        if ($contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "contactId" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_id),
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
                '/project/projects/{id}/contacts/{contactId}'
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
     * Operation projectProjectsIdContactsContactIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $contact_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Model\ProjectContact
     */
    public function projectProjectsIdContactsContactIdGet($id, $contact_id)
    {
        list($response) = $this->projectProjectsIdContactsContactIdGetWithHttpInfo($id, $contact_id);
        return $response;
    }

    /**
     * Operation projectProjectsIdContactsContactIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $contact_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Model\ProjectContact, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdContactsContactIdGetWithHttpInfo($id, $contact_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdContactsContactIdGet');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling projectProjectsIdContactsContactIdGet');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/contacts/{contactId}";
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
        if ($contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "contactId" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_id),
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
                '\Spinen\ConnectWise\Clients\Project\Model\ProjectContact',
                '/project/projects/{id}/contacts/{contactId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Model\ProjectContact', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\ProjectContact', $e->getResponseHeaders());
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
     * Operation projectProjectsIdContactsGet
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
     * @return \Spinen\ConnectWise\Clients\Project\Model\ProjectContact[]
     */
    public function projectProjectsIdContactsGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->projectProjectsIdContactsGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation projectProjectsIdContactsGetWithHttpInfo
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
     * @return array of \Spinen\ConnectWise\Clients\Project\Model\ProjectContact[], HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdContactsGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdContactsGet');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/contacts";
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
                '\Spinen\ConnectWise\Clients\Project\Model\ProjectContact[]',
                '/project/projects/{id}/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Model\ProjectContact[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\ProjectContact[]', $e->getResponseHeaders());
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
     * Operation projectProjectsIdContactsPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Model\ProjectContact $contact  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Project\Model\ProjectContact
     */
    public function projectProjectsIdContactsPost($id, $contact)
    {
        list($response) = $this->projectProjectsIdContactsPostWithHttpInfo($id, $contact);
        return $response;
    }

    /**
     * Operation projectProjectsIdContactsPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Project\Model\ProjectContact $contact  (required)
     * @throws \Spinen\ConnectWise\Clients\Project\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Project\Model\ProjectContact, HTTP status code, HTTP response headers (array of strings)
     */
    public function projectProjectsIdContactsPostWithHttpInfo($id, $contact)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling projectProjectsIdContactsPost');
        }
        // verify the required parameter 'contact' is set
        if ($contact === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact when calling projectProjectsIdContactsPost');
        }
        // parse inputs
        $resourcePath = "/project/projects/{id}/contacts";
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
        if (isset($contact)) {
            $_tempBody = $contact;
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
                '\Spinen\ConnectWise\Clients\Project\Model\ProjectContact',
                '/project/projects/{id}/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Project\Model\ProjectContact', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Project\Model\ProjectContact', $e->getResponseHeaders());
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
