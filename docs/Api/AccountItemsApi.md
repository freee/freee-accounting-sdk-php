# Freee\Accounting\AccountItemsApi

All URIs are relative to https://api.freee.co.jp.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountItem()**](AccountItemsApi.md#createAccountItem) | **POST** /api/1/account_items | 勘定科目の作成
[**destroyAccountItem()**](AccountItemsApi.md#destroyAccountItem) | **DELETE** /api/1/account_items/{id} | 勘定科目の削除
[**getAccountItem()**](AccountItemsApi.md#getAccountItem) | **GET** /api/1/account_items/{id} | 勘定科目の取得
[**getAccountItems()**](AccountItemsApi.md#getAccountItems) | **GET** /api/1/account_items | 勘定科目一覧の取得
[**updateAccountItem()**](AccountItemsApi.md#updateAccountItem) | **PUT** /api/1/account_items/{id} | 勘定科目の更新


## `createAccountItem()`

```php
createAccountItem($account_item_create_params): \Freee\Accounting\Model\AccountItemResponse
```

勘定科目の作成

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\AccountItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_item_create_params = new \Freee\Accounting\Model\AccountItemCreateParams(); // \Freee\Accounting\Model\AccountItemCreateParams | 勘定科目の作成

try {
    $result = $apiInstance->createAccountItem($account_item_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountItemsApi->createAccountItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_item_create_params** | [**\Freee\Accounting\Model\AccountItemCreateParams**](../Model/AccountItemCreateParams.md)| 勘定科目の作成 |

### Return type

[**\Freee\Accounting\Model\AccountItemResponse**](../Model/AccountItemResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyAccountItem()`

```php
destroyAccountItem($id, $company_id)
```

勘定科目の削除

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\AccountItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyAccountItem($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling AccountItemsApi->destroyAccountItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **company_id** | **int**| 事業所ID |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountItem()`

```php
getAccountItem($company_id, $id): \Freee\Accounting\Model\AccountItemResponse
```

勘定科目の取得

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\AccountItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$id = 56; // int | 勘定科目ID

try {
    $result = $apiInstance->getAccountItem($company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountItemsApi->getAccountItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **id** | **int**| 勘定科目ID |

### Return type

[**\Freee\Accounting\Model\AccountItemResponse**](../Model/AccountItemResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountItems()`

```php
getAccountItems($company_id, $base_date): \Freee\Accounting\Model\AccountItemsResponse
```

勘定科目一覧の取得

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\AccountItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$base_date = 'base_date_example'; // string | 基準日:指定した場合、勘定科目に紐づく税区分(default_tax_code)が、基準日の税率に基づいて返ります。

try {
    $result = $apiInstance->getAccountItems($company_id, $base_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountItemsApi->getAccountItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **base_date** | **string**| 基準日:指定した場合、勘定科目に紐づく税区分(default_tax_code)が、基準日の税率に基づいて返ります。 | [optional]

### Return type

[**\Freee\Accounting\Model\AccountItemsResponse**](../Model/AccountItemsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountItem()`

```php
updateAccountItem($id, $account_item_update_params): \Freee\Accounting\Model\AccountItemResponse
```

勘定科目の更新

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\AccountItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$account_item_update_params = new \Freee\Accounting\Model\AccountItemUpdateParams(); // \Freee\Accounting\Model\AccountItemUpdateParams | 勘定科目の更新

try {
    $result = $apiInstance->updateAccountItem($id, $account_item_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountItemsApi->updateAccountItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **account_item_update_params** | [**\Freee\Accounting\Model\AccountItemUpdateParams**](../Model/AccountItemUpdateParams.md)| 勘定科目の更新 |

### Return type

[**\Freee\Accounting\Model\AccountItemResponse**](../Model/AccountItemResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
