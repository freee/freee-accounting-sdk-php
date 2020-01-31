# Freee\Accounting\SectionsApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSection**](SectionsApi.md#createSection) | **POST** /api/1/sections | 部門の作成
[**destroySection**](SectionsApi.md#destroySection) | **DELETE** /api/1/sections/{id} | 部門の削除
[**getSection**](SectionsApi.md#getSection) | **GET** /api/1/sections/{id} | 
[**getSections**](SectionsApi.md#getSections) | **GET** /api/1/sections | 部門一覧の取得
[**updateSection**](SectionsApi.md#updateSection) | **PUT** /api/1/sections/{id} | 部門の更新



## createSection

> \Freee\Accounting\Model\SectionsCreateResponse createSection($parameters)

部門の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の部門を作成する</p>  <h2 id=\"_2\">レスポンスの例</h2>  <pre><code>// プレミアムプラン（個人）、ビジネスプラン（法人）、エンタープライズプラン（法人） {   &quot;section&quot; : {     &quot;id&quot; : 102,     &quot;company_id&quot; : 1,     &quot;name&quot; : &quot;開発部門&quot;,     &quot;shortcut1&quot; : &quot;DEVELOPER&quot;,     &quot;shortcut2&quot; : &quot;123&quot;,     &quot;indent_count&quot;: 1,     &quot;parent_id&quot;: 101   } } // それ以外のプラン {   &quot;section&quot; : {     &quot;id&quot; : 102,     &quot;company_id&quot; : 1,     &quot;name&quot; : &quot;開発部門&quot;,     &quot;shortcut1&quot; : &quot;DEVELOPER&quot;,     &quot;shortcut2&quot; : &quot;123&quot;   } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parameters = new \Freee\Accounting\Model\SectionParams(); // \Freee\Accounting\Model\SectionParams | 部門の作成

try {
    $result = $apiInstance->createSection($parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->createSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parameters** | [**\Freee\Accounting\Model\SectionParams**](../Model/SectionParams.md)| 部門の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\SectionsCreateResponse**](../Model/SectionsCreateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroySection

> destroySection($id, $company_id)

部門の削除

<h2 id=\"\">概要</h2>  <p>指定した事業所の部門を削除する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroySection($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->destroySection: ', $e->getMessage(), PHP_EOL;
}
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSection

> \Freee\Accounting\Model\SectionsShowResponse getSection($id, $company_id)



<h2 id=\"\">概要</h2>  <p>指定した事業所の部門を参照する</p><h2 id=\"_2\">レスポンスの例</h2>  <pre><code>// プレミアムプラン（個人）、ビジネスプラン（法人）、エンタープライズプラン（法人） {   &quot;section&quot; : {     &quot;id&quot; : 102,     &quot;company_id&quot; : 1,     &quot;name&quot; : &quot;開発部門&quot;,     &quot;long_name&quot;: &quot;開発部門&quot;,     &quot;shortcut1&quot; : &quot;DEVELOPER&quot;,     &quot;shortcut2&quot; : &quot;123&quot;,     &quot;indent_count&quot;: 1,     &quot;parent_id&quot;: 101   } } // それ以外のプラン {   &quot;section&quot; : {     &quot;id&quot; : 102,     &quot;company_id&quot; : 1,     &quot;name&quot; : &quot;開発部門&quot;,     &quot;long_name&quot;: &quot;開発部門&quot;,     &quot;shortcut1&quot; : &quot;DEVELOPER&quot;,     &quot;shortcut2&quot; : &quot;123&quot;   } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 部門ID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getSection($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->getSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 部門ID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\SectionsShowResponse**](../Model/SectionsShowResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSections

> \Freee\Accounting\Model\SectionsIndexResponse getSections($company_id)

部門一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の部門一覧を取得する</p>  <h2 id=\"_2\">レスポンスの例</h2>  <blockquote> <p>GET https://api.freee.co.jp/api/1/sections?company_id=1</p> </blockquote>  <pre><code>// プレミアムプラン（個人）、ビジネスプラン（法人）、エンタープライズプラン（法人） {   &quot;sections&quot; : [     {       &quot;id&quot; : 101,       &quot;company_id&quot; : 1,       &quot;name&quot; : &quot;開発部門&quot;,       &quot;long_name&quot;: &quot;開発部門&quot;,       &quot;shortcut1&quot; : &quot;DEVELOPER&quot;,       &quot;shortcut2&quot; : &quot;123&quot;,       &quot;indent_count&quot;: 1,       &quot;parent_id&quot;: 11     },     ...   ] } // それ以外のプラン {   &quot;sections&quot; : [     {       &quot;id&quot; : 101,       &quot;company_id&quot; : 1,       &quot;name&quot; : &quot;開発部門&quot;,       &quot;long_name&quot;: &quot;開発部門&quot;,       &quot;shortcut1&quot; : &quot;DEVELOPER&quot;,       &quot;shortcut2&quot; : &quot;123&quot;     },     ...   ] }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getSections($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->getSections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\SectionsIndexResponse**](../Model/SectionsIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSection

> \Freee\Accounting\Model\SectionsUpdateResponse updateSection($id, $parameters)

部門の更新

<h2 id=\"\">概要</h2>  <p>指定した事業所の部門を更新する</p><h2 id=\"_2\">レスポンスの例</h2>  <pre><code>// プレミアムプラン（個人）、ビジネスプラン（法人）、エンタープライズプラン（法人） {   &quot;section&quot; : {     &quot;id&quot; : 102,     &quot;company_id&quot; : 1,     &quot;name&quot; : &quot;開発部門&quot;,     &quot;long_name&quot;: &quot;開発部門&quot;,     &quot;shortcut1&quot; : &quot;DEVELOPER&quot;,     &quot;shortcut2&quot; : &quot;123&quot;,     &quot;indent_count&quot;: 1,     &quot;parent_id&quot;: 101   } } // それ以外のプラン {   &quot;section&quot; : {     &quot;id&quot; : 102,     &quot;company_id&quot; : 1,     &quot;name&quot; : &quot;開発部門&quot;,     &quot;long_name&quot;: &quot;開発部門&quot;,     &quot;shortcut1&quot; : &quot;DEVELOPER&quot;,     &quot;shortcut2&quot; : &quot;123&quot;   } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\SectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$parameters = new \Freee\Accounting\Model\SectionParams(); // \Freee\Accounting\Model\SectionParams | 部門の更新

try {
    $result = $apiInstance->updateSection($id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SectionsApi->updateSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **parameters** | [**\Freee\Accounting\Model\SectionParams**](../Model/SectionParams.md)| 部門の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\SectionsUpdateResponse**](../Model/SectionsUpdateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

