# Freee\Accounting\TagsApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTag**](TagsApi.md#createTag) | **POST** /api/1/tags | メモタグの作成
[**destroyTag**](TagsApi.md#destroyTag) | **DELETE** /api/1/tags/{id} | メモタグの削除
[**getTag**](TagsApi.md#getTag) | **GET** /api/1/tags/{id} | メモタグの詳細情報の取得
[**getTags**](TagsApi.md#getTags) | **GET** /api/1/tags | メモタグ一覧の取得
[**updateTag**](TagsApi.md#updateTag) | **PUT** /api/1/tags/{id} | メモタグの更新



## createTag

> \Freee\Accounting\Model\TagResponse createTag($tag_params)

メモタグの作成

<h2 id=\"\">概要</h2>  <p>指定した事業所のメモタグを作成する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_params = new \Freee\Accounting\Model\TagParams(); // \Freee\Accounting\Model\TagParams | メモタグの作成

try {
    $result = $apiInstance->createTag($tag_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_params** | [**\Freee\Accounting\Model\TagParams**](../Model/TagParams.md)| メモタグの作成 |

### Return type

[**\Freee\Accounting\Model\TagResponse**](../Model/TagResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyTag

> destroyTag($id, $company_id)

メモタグの削除

<h2 id=\"\">概要</h2>  <p>指定した事業所のメモタグを削除する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | タグID
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyTag($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->destroyTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| タグID |
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


## getTag

> \Freee\Accounting\Model\TagResponse getTag($id, $company_id)

メモタグの詳細情報の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所のメモタグを取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | タグID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getTag($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| タグID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\TagResponse**](../Model/TagResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTags

> \Freee\Accounting\Model\InlineResponse20011 getTags($company_id, $offset, $limit)

メモタグ一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所のメモタグ一覧を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 3000)

try {
    $result = $apiInstance->getTags($company_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTags: ', $e->getMessage(), PHP_EOL;
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

[**\Freee\Accounting\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTag

> \Freee\Accounting\Model\TagResponse updateTag($id, $tag_params)

メモタグの更新

<h2 id=\"\">概要</h2>  <p>指定した事業所のメモタグを更新する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | メモタグID
$tag_params = new \Freee\Accounting\Model\TagParams(); // \Freee\Accounting\Model\TagParams | メモタグの更新

try {
    $result = $apiInstance->updateTag($id, $tag_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| メモタグID |
 **tag_params** | [**\Freee\Accounting\Model\TagParams**](../Model/TagParams.md)| メモタグの更新 | [optional]

### Return type

[**\Freee\Accounting\Model\TagResponse**](../Model/TagResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

