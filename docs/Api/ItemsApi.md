# Freee\Accounting\ItemsApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItem**](ItemsApi.md#createItem) | **POST** /api/1/items | 品目の作成
[**destroyItem**](ItemsApi.md#destroyItem) | **DELETE** /api/1/items/{id} | 品目の削除
[**getItem**](ItemsApi.md#getItem) | **GET** /api/1/items/{id} | 品目の取得
[**getItems**](ItemsApi.md#getItems) | **GET** /api/1/items | 品目一覧の取得
[**updateItem**](ItemsApi.md#updateItem) | **PUT** /api/1/items/{id} | 品目の更新



## createItem

> \Freee\Accounting\Model\ItemResponse createItem($item_params)

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
$item_params = new \Freee\Accounting\Model\ItemParams(); // \Freee\Accounting\Model\ItemParams | 品目の作成

try {
    $result = $apiInstance->createItem($item_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_params** | [**\Freee\Accounting\Model\ItemParams**](../Model/ItemParams.md)| 品目の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyItem

> destroyItem($id, $company_id)

品目の削除

<h2 id=\"\">概要</h2>  <p>指定した事業所の品目を削除する</p>

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
$id = 56; // int | 品目ID
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyItem($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->destroyItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 品目ID |
 **company_id** | **int**| 事業所ID |

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


## getItem

> \Freee\Accounting\Model\ItemResponse getItem($company_id, $id)

品目の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の品目を取得する</p>

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
$id = 56; // int | 品目ID

try {
    $result = $apiInstance->getItem($company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **id** | **int**| 品目ID |

### Return type

[**\Freee\Accounting\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getItems

> \Freee\Accounting\Model\InlineResponse2005 getItems($company_id, $offset, $limit)

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
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 3000)

try {
    $result = $apiInstance->getItems($company_id, $offset, $limit);
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
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 3000) | [optional]

### Return type

[**\Freee\Accounting\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateItem

> \Freee\Accounting\Model\ItemResponse updateItem($id, $item_params)

品目の更新

<h2 id=\"\">概要</h2>  <p>指定した事業所の品目を更新する</p>

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
$id = 56; // int | 品目ID
$item_params = new \Freee\Accounting\Model\ItemParams(); // \Freee\Accounting\Model\ItemParams | 品目の更新

try {
    $result = $apiInstance->updateItem($id, $item_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 品目ID |
 **item_params** | [**\Freee\Accounting\Model\ItemParams**](../Model/ItemParams.md)| 品目の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

