# Freee\Accounting\ItemsApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItem**](ItemsApi.md#createItem) | **POST** /items | 品目の作成
[**getItems**](ItemsApi.md#getItems) | **GET** /items | 品目一覧の取得



## createItem

> \Freee\Accounting\Model\ItemsCreateResponse createItem($create_item_params)

品目の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の品目を作成する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_item_params = new \Freee\Accounting\Model\CreateItemParams(); // \Freee\Accounting\Model\CreateItemParams | 品目の作成

try {
    $result = $apiInstance->createItem($create_item_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_item_params** | [**\Freee\Accounting\Model\CreateItemParams**](../Model/CreateItemParams.md)| 品目の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\ItemsCreateResponse**](../Model/ItemsCreateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getItems

> \Freee\Accounting\Model\ItemsIndexResponse getItems($company_id)

品目一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の品目一覧を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getItems($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\ItemsIndexResponse**](../Model/ItemsIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

