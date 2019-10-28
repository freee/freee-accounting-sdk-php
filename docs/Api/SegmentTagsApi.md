# Freee\Accounting\SegmentTagsApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSegmentTag**](SegmentTagsApi.md#createSegmentTag) | **POST** /segments/{segment_id}/tags | セグメントの作成
[**destroySegmentsTag**](SegmentTagsApi.md#destroySegmentsTag) | **DELETE** /segments/{segment_id}/tags/{id} | セグメントタグの削除
[**getSegmentTags**](SegmentTagsApi.md#getSegmentTags) | **GET** /segments/{segment_id}/tags | セグメントタグ一覧の取得
[**updateSegmentTag**](SegmentTagsApi.md#updateSegmentTag) | **PUT** /segments/{segment_id}/tags/{id} | セグメントタグの更新



## createSegmentTag

> \Freee\Accounting\Model\SegmentTagsResponse createSegmentTag($segment_id, $parameters)

セグメントの作成

<h2 id=\"\">概要</h2>  <p>指定した事業所のセグメントタグを作成する</p>  <h2 id=\"\">注意点</h2>  <ul>  <li>本APIは法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li>  </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\SegmentTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = 56; // int | セグメントID
$parameters = new \Freee\Accounting\Model\SegmentTagParams(); // \Freee\Accounting\Model\SegmentTagParams | セグメントタグの作成

try {
    $result = $apiInstance->createSegmentTag($segment_id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentTagsApi->createSegmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment_id** | **int**| セグメントID |
 **parameters** | [**\Freee\Accounting\Model\SegmentTagParams**](../Model/SegmentTagParams.md)| セグメントタグの作成 |

### Return type

[**\Freee\Accounting\Model\SegmentTagsResponse**](../Model/SegmentTagsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroySegmentsTag

> destroySegmentsTag($segment_id, $id, $company_id)

セグメントタグの削除

<h2 id=\"\">概要</h2>  <p>指定した事業所のセグメントタグを削除する</p>  <h2 id=\"\">注意点</h2>  <ul>  <li>本APIは法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li>  </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\SegmentTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = 56; // int | セグメントID
$id = 56; // int | セグメントタグID
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroySegmentsTag($segment_id, $id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling SegmentTagsApi->destroySegmentsTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment_id** | **int**| セグメントID |
 **id** | **int**| セグメントタグID |
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


## getSegmentTags

> \Freee\Accounting\Model\SegmentTagsIndexResponse getSegmentTags($company_id, $segment_id, $offset, $limit)

セグメントタグ一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所のセグメントタグ一覧を取得する</p>  <h2 id=\"\">注意点</h2>  <ul>  <li>本APIは法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li>  </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\SegmentTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$segment_id = 56; // int | セグメントID
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 20, 最大: 500)

try {
    $result = $apiInstance->getSegmentTags($company_id, $segment_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentTagsApi->getSegmentTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **segment_id** | **int**| セグメントID |
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 20, 最大: 500) | [optional]

### Return type

[**\Freee\Accounting\Model\SegmentTagsIndexResponse**](../Model/SegmentTagsIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSegmentTag

> \Freee\Accounting\Model\SegmentTagsResponse updateSegmentTag($segment_id, $id, $parameters)

セグメントタグの更新

<h2 id=\"\">概要</h2>  <p>指定した事業所のセグメントタグを更新する</p>  <h2 id=\"\">注意点</h2>  <ul>  <li>本APIは法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li>  </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\SegmentTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = 56; // int | セグメントID
$id = 56; // int | セグメントタグID
$parameters = new \Freee\Accounting\Model\SegmentTagParams(); // \Freee\Accounting\Model\SegmentTagParams | セグメントタグの作成

try {
    $result = $apiInstance->updateSegmentTag($segment_id, $id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentTagsApi->updateSegmentTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment_id** | **int**| セグメントID |
 **id** | **int**| セグメントタグID |
 **parameters** | [**\Freee\Accounting\Model\SegmentTagParams**](../Model/SegmentTagParams.md)| セグメントタグの作成 |

### Return type

[**\Freee\Accounting\Model\SegmentTagsResponse**](../Model/SegmentTagsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

