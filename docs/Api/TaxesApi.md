# Freee\Accounting\TaxesApi

All URIs are relative to https://api.freee.co.jp.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTaxCode()**](TaxesApi.md#getTaxCode) | **GET** /api/1/taxes/codes/{code} | 税区分の取得
[**getTaxCodes()**](TaxesApi.md#getTaxCodes) | **GET** /api/1/taxes/codes | 税区分一覧の取得
[**getTaxesCompanies()**](TaxesApi.md#getTaxesCompanies) | **GET** /api/1/taxes/companies/{company_id} | 指定した事業所の税区分一覧の取得


## `getTaxCode()`

```php
getTaxCode($code): \Freee\Accounting\Model\TaxResponse
```

税区分の取得

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
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **int**| 税区分コード |

### Return type

[**\Freee\Accounting\Model\TaxResponse**](../Model/TaxResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxCodes()`

```php
getTaxCodes(): \Freee\Accounting\Model\InlineResponse2009
```

税区分一覧の取得

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Freee\Accounting\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxesCompanies()`

```php
getTaxesCompanies($company_id, $display_category, $available): \Freee\Accounting\Model\InlineResponse20010
```

指定した事業所の税区分一覧の取得

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
$display_category = 'display_category_example'; // string | この項目はインボイス制度で利用する項目です。2023年7月頃から利用できる予定です。税区分の表示カテゴリ（ tax_5: 5%表示の税区分、 tax_8: 8%表示の税区分、 tax_r8: 軽減税率8%表示の税区分、 tax_10: 10%表示の税区分、 tax_5_e80: インボイス経過措置5%表示80%控除の税区分、 tax_5_e50: インボイス経過措置5%表示50%控除の税区分、 tax_8_e80: インボイス経過措置8%表示80%控除の税区分、 tax_8_e50: インボイス経過措置8%表示50%控除の税区分、 tax_r8_e80: インボイス経過措置軽減税率8%表示80%控除の税区分、 tax_r8_e50: インボイス経過措置軽減税率8%表示50%控除の税区分、 tax_10_e80: インボイス経過措置10%表示80%控除の税区分、 tax_10_e50: インボイス経過措置10%表示50%控除の税区分）
$available = True; // bool | この項目はインボイス制度で利用する項目です。2023年7月頃から利用できる予定です。税区分の使用設定。true: 使用する、false: 使用しない

try {
    $result = $apiInstance->getTaxesCompanies($company_id, $display_category, $available);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getTaxesCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **display_category** | **string**| この項目はインボイス制度で利用する項目です。2023年7月頃から利用できる予定です。税区分の表示カテゴリ（ tax_5: 5%表示の税区分、 tax_8: 8%表示の税区分、 tax_r8: 軽減税率8%表示の税区分、 tax_10: 10%表示の税区分、 tax_5_e80: インボイス経過措置5%表示80%控除の税区分、 tax_5_e50: インボイス経過措置5%表示50%控除の税区分、 tax_8_e80: インボイス経過措置8%表示80%控除の税区分、 tax_8_e50: インボイス経過措置8%表示50%控除の税区分、 tax_r8_e80: インボイス経過措置軽減税率8%表示80%控除の税区分、 tax_r8_e50: インボイス経過措置軽減税率8%表示50%控除の税区分、 tax_10_e80: インボイス経過措置10%表示80%控除の税区分、 tax_10_e50: インボイス経過措置10%表示50%控除の税区分） | [optional]
 **available** | **bool**| この項目はインボイス制度で利用する項目です。2023年7月頃から利用できる予定です。税区分の使用設定。true: 使用する、false: 使用しない | [optional]

### Return type

[**\Freee\Accounting\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
