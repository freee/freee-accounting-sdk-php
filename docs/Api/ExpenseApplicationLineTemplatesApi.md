# Freee\Accounting\ExpenseApplicationLineTemplatesApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createExpenseApplicationLineTemplate**](ExpenseApplicationLineTemplatesApi.md#createExpenseApplicationLineTemplate) | **POST** /expense_application_line_templates | 経費科目の作成
[**destroyExpenseApplicationLineTemplate**](ExpenseApplicationLineTemplatesApi.md#destroyExpenseApplicationLineTemplate) | **DELETE** /expense_application_line_templates/{id} | 経費科目の削除
[**getExpenseApplicationLineTemplate**](ExpenseApplicationLineTemplatesApi.md#getExpenseApplicationLineTemplate) | **GET** /expense_application_line_templates/{id} | 経費科目の取得
[**getExpenseApplicationLineTemplates**](ExpenseApplicationLineTemplatesApi.md#getExpenseApplicationLineTemplates) | **GET** /expense_application_line_templates | 経費科目一覧の取得
[**updateExpenseApplicationLineTemplate**](ExpenseApplicationLineTemplatesApi.md#updateExpenseApplicationLineTemplate) | **PUT** /expense_application_line_templates/{id} | 経費科目の更新



## createExpenseApplicationLineTemplate

> \Freee\Accounting\Model\ExpenseApplicationLineTemplatesResponse createExpenseApplicationLineTemplate($parameters)

経費科目の作成

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ExpenseApplicationLineTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parameters = new \Freee\Accounting\Model\ExpenseApplicationLineTemplateParams(); // \Freee\Accounting\Model\ExpenseApplicationLineTemplateParams | 経費科目の作成

try {
    $result = $apiInstance->createExpenseApplicationLineTemplate($parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationLineTemplatesApi->createExpenseApplicationLineTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parameters** | [**\Freee\Accounting\Model\ExpenseApplicationLineTemplateParams**](../Model/ExpenseApplicationLineTemplateParams.md)| 経費科目の作成 |

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationLineTemplatesResponse**](../Model/ExpenseApplicationLineTemplatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyExpenseApplicationLineTemplate

> destroyExpenseApplicationLineTemplate($id, $company_id)

経費科目の削除

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ExpenseApplicationLineTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 経費科目ID
$company_id = new \stdClass; // object | 事業所ID

try {
    $apiInstance->destroyExpenseApplicationLineTemplate($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationLineTemplatesApi->destroyExpenseApplicationLineTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 経費科目ID |
 **company_id** | [**object**](../Model/.md)| 事業所ID |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExpenseApplicationLineTemplate

> \Freee\Accounting\Model\ExpenseApplicationLineTemplatesResponse getExpenseApplicationLineTemplate($id, $company_id)

経費科目の取得

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ExpenseApplicationLineTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \stdClass; // object | 経費科目ID
$company_id = new \stdClass; // object | 事業所ID

try {
    $result = $apiInstance->getExpenseApplicationLineTemplate($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationLineTemplatesApi->getExpenseApplicationLineTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**object**](../Model/.md)| 経費科目ID |
 **company_id** | [**object**](../Model/.md)| 事業所ID |

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationLineTemplatesResponse**](../Model/ExpenseApplicationLineTemplatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExpenseApplicationLineTemplates

> \Freee\Accounting\Model\ExpenseApplicationLineTemplatesIndexResponse getExpenseApplicationLineTemplates($company_id, $offset, $limit)

経費科目一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の経費科目一覧を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ExpenseApplicationLineTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 20, 最大: 100)

try {
    $result = $apiInstance->getExpenseApplicationLineTemplates($company_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationLineTemplatesApi->getExpenseApplicationLineTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 20, 最大: 100) | [optional]

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationLineTemplatesIndexResponse**](../Model/ExpenseApplicationLineTemplatesIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateExpenseApplicationLineTemplate

> \Freee\Accounting\Model\ExpenseApplicationLineTemplatesResponse updateExpenseApplicationLineTemplate($id, $parameters)

経費科目の更新

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ExpenseApplicationLineTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = new \stdClass; // object | 経費科目ID
$parameters = new \Freee\Accounting\Model\ExpenseApplicationLineTemplateParams(); // \Freee\Accounting\Model\ExpenseApplicationLineTemplateParams | 経費科目の更新

try {
    $result = $apiInstance->updateExpenseApplicationLineTemplate($id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationLineTemplatesApi->updateExpenseApplicationLineTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**object**](../Model/.md)| 経費科目ID |
 **parameters** | [**\Freee\Accounting\Model\ExpenseApplicationLineTemplateParams**](../Model/ExpenseApplicationLineTemplateParams.md)| 経費科目の更新 |

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationLineTemplatesResponse**](../Model/ExpenseApplicationLineTemplatesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

