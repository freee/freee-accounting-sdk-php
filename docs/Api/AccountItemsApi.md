# Freee\Accounting\AccountItemsApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountItem**](AccountItemsApi.md#createAccountItem) | **POST** /account_items | 勘定科目の作成
[**getAccountItem**](AccountItemsApi.md#getAccountItem) | **GET** /account_items/{id} | 勘定科目の詳細情報の取得
[**getAccountItems**](AccountItemsApi.md#getAccountItems) | **GET** /account_items | 勘定科目一覧の取得
[**updateAccountItem**](AccountItemsApi.md#updateAccountItem) | **PUT** /account_items/{id} | 勘定科目の更新



## createAccountItem

> \Freee\Accounting\Model\AccountItemsCreateResponse createAccountItem($account_item_params)

勘定科目の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の勘定科目を作成する</p>

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
$account_item_params = new \Freee\Accounting\Model\AccountItemParams(); // \Freee\Accounting\Model\AccountItemParams | 勘定科目の作成

try {
    $result = $apiInstance->createAccountItem($account_item_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountItemsApi->createAccountItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_item_params** | [**\Freee\Accounting\Model\AccountItemParams**](../Model/AccountItemParams.md)| 勘定科目の作成 |

### Return type

[**\Freee\Accounting\Model\AccountItemsCreateResponse**](../Model/AccountItemsCreateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountItem

> \Freee\Accounting\Model\AccountItemsShowResponse getAccountItem($company_id, $id)

勘定科目の詳細情報の取得

<h2 id=\"\">概要</h2>  <p>指定した勘定科目の詳細を取得する</p>

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **id** | **int**| 勘定科目ID |

### Return type

[**\Freee\Accounting\Model\AccountItemsShowResponse**](../Model/AccountItemsShowResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAccountItems

> \Freee\Accounting\Model\AccountItemsIndexResponse getAccountItems($company_id, $base_date)

勘定科目一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の勘定科目一覧を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li>default_tax_id : デフォルト設定がされている税区分ID</li>  <li>default_tax_code : リクエストした日時を基準とした税区分コード</li> </ul>

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
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **base_date** | **string**| 基準日:指定した場合、勘定科目に紐づく税区分(default_tax_code)が、基準日の税率に基づいて返ります。 | [optional]

### Return type

[**\Freee\Accounting\Model\AccountItemsIndexResponse**](../Model/AccountItemsIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAccountItem

> \Freee\Accounting\Model\AccountItemsUpdateResponse updateAccountItem($id, $account_item_params)

勘定科目の更新

<h2 id=\"\">概要</h2>  <p>勘定科目を更新する</p>

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
$id = 56; // int | 
$account_item_params = new \Freee\Accounting\Model\AccountItemParams(); // \Freee\Accounting\Model\AccountItemParams | 勘定科目の更新

try {
    $result = $apiInstance->updateAccountItem($id, $account_item_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountItemsApi->updateAccountItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **account_item_params** | [**\Freee\Accounting\Model\AccountItemParams**](../Model/AccountItemParams.md)| 勘定科目の更新 |

### Return type

[**\Freee\Accounting\Model\AccountItemsUpdateResponse**](../Model/AccountItemsUpdateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

