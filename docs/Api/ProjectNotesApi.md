# Spinen\ConnectWise\Clients\Project\ProjectNotesApi
Spinen&#39;s PHP ConnectWise Client for Project API generated by Swagger Code Generator.

All URIs are relative to *https://api-na.myconnectwise.net/v4_6_release/apis/3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectProjectsIdNotesCountGet**](ProjectNotesApi.md#projectProjectsIdNotesCountGet) | **GET** /project/projects/{id}/notes/count | 
[**projectProjectsIdNotesGet**](ProjectNotesApi.md#projectProjectsIdNotesGet) | **GET** /project/projects/{id}/notes | 
[**projectProjectsIdNotesNoteIdDelete**](ProjectNotesApi.md#projectProjectsIdNotesNoteIdDelete) | **DELETE** /project/projects/{id}/notes/{noteId} | 
[**projectProjectsIdNotesNoteIdGet**](ProjectNotesApi.md#projectProjectsIdNotesNoteIdGet) | **GET** /project/projects/{id}/notes/{noteId} | 
[**projectProjectsIdNotesNoteIdPatch**](ProjectNotesApi.md#projectProjectsIdNotesNoteIdPatch) | **PATCH** /project/projects/{id}/notes/{noteId} | 
[**projectProjectsIdNotesNoteIdPut**](ProjectNotesApi.md#projectProjectsIdNotesNoteIdPut) | **PUT** /project/projects/{id}/notes/{noteId} | 
[**projectProjectsIdNotesPost**](ProjectNotesApi.md#projectProjectsIdNotesPost) | **POST** /project/projects/{id}/notes | 


# **projectProjectsIdNotesCountGet**
> \Spinen\ConnectWise\Clients\Project\Model\Count projectProjectsIdNotesCountGet($id, $conditions)



Get Project Notes Count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Project\Api\ProjectNotesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 

try {
    $result = $api_instance->projectProjectsIdNotesCountGet($id, $conditions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectProjectsIdNotesCountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Project\Model\Count**](../Model/Count.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectProjectsIdNotesGet**
> \Spinen\ConnectWise\Clients\Project\Model\ProjectNote[] projectProjectsIdNotesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size)



Get Project Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Project\Api\ProjectNotesApi();
$id = 56; // int | 
$conditions = "conditions_example"; // string | 
$order_by = "order_by_example"; // string | 
$childconditions = "childconditions_example"; // string | 
$customfieldconditions = "customfieldconditions_example"; // string | 
$page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->projectProjectsIdNotesGet($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectProjectsIdNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **conditions** | **string**|  | [optional]
 **order_by** | **string**|  | [optional]
 **childconditions** | **string**|  | [optional]
 **customfieldconditions** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Spinen\ConnectWise\Clients\Project\Model\ProjectNote[]**](../Model/ProjectNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectProjectsIdNotesNoteIdDelete**
> projectProjectsIdNotesNoteIdDelete($id, $note_id)



Delete Project Note By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Project\Api\ProjectNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 

try {
    $api_instance->projectProjectsIdNotesNoteIdDelete($id, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectProjectsIdNotesNoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectProjectsIdNotesNoteIdGet**
> \Spinen\ConnectWise\Clients\Project\Model\ProjectNote projectProjectsIdNotesNoteIdGet($id, $note_id)



Get Project Note By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Project\Api\ProjectNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 

try {
    $result = $api_instance->projectProjectsIdNotesNoteIdGet($id, $note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectProjectsIdNotesNoteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |

### Return type

[**\Spinen\ConnectWise\Clients\Project\Model\ProjectNote**](../Model/ProjectNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectProjectsIdNotesNoteIdPatch**
> \Spinen\ConnectWise\Clients\Project\Model\ProjectNote projectProjectsIdNotesNoteIdPatch($id, $note_id, $operations)



Update Project Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Project\Api\ProjectNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 
$operations = array(new PatchOperation()); // \Spinen\ConnectWise\Clients\Project\Model\PatchOperation[] | 

try {
    $result = $api_instance->projectProjectsIdNotesNoteIdPatch($id, $note_id, $operations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectProjectsIdNotesNoteIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |
 **operations** | [**\Spinen\ConnectWise\Clients\Project\Model\PatchOperation[]**](../Model/PatchOperation.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Project\Model\ProjectNote**](../Model/ProjectNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectProjectsIdNotesNoteIdPut**
> \Spinen\ConnectWise\Clients\Project\Model\ProjectNote projectProjectsIdNotesNoteIdPut($id, $note_id, $note)



Replace Project Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Project\Api\ProjectNotesApi();
$id = 56; // int | 
$note_id = 56; // int | 
$note = new \Spinen\ConnectWise\Clients\Project\Model\ProjectNote(); // \Spinen\ConnectWise\Clients\Project\Model\ProjectNote | 

try {
    $result = $api_instance->projectProjectsIdNotesNoteIdPut($id, $note_id, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectProjectsIdNotesNoteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note_id** | **int**|  |
 **note** | [**\Spinen\ConnectWise\Clients\Project\Model\ProjectNote**](../Model/\Spinen\ConnectWise\Clients\Project\Model\ProjectNote.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Project\Model\ProjectNote**](../Model/ProjectNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectProjectsIdNotesPost**
> \Spinen\ConnectWise\Clients\Project\Model\ProjectNote projectProjectsIdNotesPost($id, $note)



Create Project Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuth
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Spinen\ConnectWise\Clients\Project\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Spinen\ConnectWise\Clients\Project\Api\ProjectNotesApi();
$id = 56; // int | 
$note = new \Spinen\ConnectWise\Clients\Project\Model\ProjectNote(); // \Spinen\ConnectWise\Clients\Project\Model\ProjectNote | 

try {
    $result = $api_instance->projectProjectsIdNotesPost($id, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectNotesApi->projectProjectsIdNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **note** | [**\Spinen\ConnectWise\Clients\Project\Model\ProjectNote**](../Model/\Spinen\ConnectWise\Clients\Project\Model\ProjectNote.md)|  |

### Return type

[**\Spinen\ConnectWise\Clients\Project\Model\ProjectNote**](../Model/ProjectNote.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

