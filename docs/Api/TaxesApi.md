# Freee\Accounting\TaxesApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTaxCode**](TaxesApi.md#getTaxCode) | **GET** /api/1/taxes/codes/{code} | 税区分コードの取得
[**getTaxCodes**](TaxesApi.md#getTaxCodes) | **GET** /api/1/taxes/codes | 税区分コード一覧の取得
[**getTaxesCompanies**](TaxesApi.md#getTaxesCompanies) | **GET** /api/1/taxes/companies/{company_id} | 税区分コード詳細一覧の取得



## getTaxCode

> \Freee\Accounting\Model\TaxesCodesShowResponse getTaxCode($code)

税区分コードの取得

<h2 id=\"\">概要</h2>  <p>税区分コードを取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 56; // int | 税区分コード

try {
    $result = $apiInstance->getTaxCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getTaxCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **int**| 税区分コード |

### Return type

[**\Freee\Accounting\Model\TaxesCodesShowResponse**](../Model/TaxesCodesShowResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTaxCodes

> \Freee\Accounting\Model\TaxesCodesIndexResponse getTaxCodes()

税区分コード一覧の取得

<h2 id=\"\">概要</h2>  <p>税区分コード一覧を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getTaxCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Freee\Accounting\Model\TaxesCodesIndexResponse**](../Model/TaxesCodesIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTaxesCompanies

> \Freee\Accounting\Model\TaxesCompaniesResponse getTaxesCompanies($company_id)

税区分コード詳細一覧の取得

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getTaxesCompanies($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getTaxesCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\TaxesCompaniesResponse**](../Model/TaxesCompaniesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

