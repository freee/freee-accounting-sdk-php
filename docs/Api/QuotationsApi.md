# Freee\Accounting\QuotationsApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuotation**](QuotationsApi.md#createQuotation) | **POST** /api/1/quotations | 見積書の作成
[**destroyQuotation**](QuotationsApi.md#destroyQuotation) | **DELETE** /api/1/quotations/{id} | 見積書の削除
[**getQuotation**](QuotationsApi.md#getQuotation) | **GET** /api/1/quotations/{id} | 見積書の取得
[**getQuotations**](QuotationsApi.md#getQuotations) | **GET** /api/1/quotations | 見積書一覧の取得
[**updateQuotation**](QuotationsApi.md#updateQuotation) | **PUT** /api/1/quotations/{id} | 見積書の更新



## createQuotation

> \Freee\Accounting\Model\QuotationResponse createQuotation($quotation_create_params)

見積書の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の見積書を作成する</p>  <h2 id=\"_1\">注意点</h2> <ul> <li> <p>partner_code, partner_idはどちらかの指定が必須です。ただし両方同時に指定することはできません。</p> </li> <li> <p>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。</p> </li> <li> <p>本APIでは見積内容(quotation_contents)は、最大100行までになります。</p> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\QuotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quotation_create_params = new \Freee\Accounting\Model\QuotationCreateParams(); // \Freee\Accounting\Model\QuotationCreateParams | 見積書の作成

try {
    $result = $apiInstance->createQuotation($quotation_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationsApi->createQuotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quotation_create_params** | [**\Freee\Accounting\Model\QuotationCreateParams**](../Model/QuotationCreateParams.md)| 見積書の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\QuotationResponse**](../Model/QuotationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyQuotation

> destroyQuotation($id, $company_id)

見積書の削除

<h2 id=\"\">概要</h2>  <p>指定した事業所の見積書を削除する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\QuotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyQuotation($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling QuotationsApi->destroyQuotation: ', $e->getMessage(), PHP_EOL;
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


## getQuotation

> \Freee\Accounting\Model\QuotationResponse getQuotation($company_id, $id)

見積書の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の見積書詳細を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\QuotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$id = 56; // int | 見積書ID

try {
    $result = $apiInstance->getQuotation($company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationsApi->getQuotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **id** | **int**| 見積書ID |

### Return type

[**\Freee\Accounting\Model\QuotationResponse**](../Model/QuotationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getQuotations

> \Freee\Accounting\Model\InlineResponse2007 getQuotations($company_id, $partner_id, $partner_code, $start_issue_date, $end_issue_date, $quotation_number, $description, $quotation_status, $offset, $limit)

見積書一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の見積書一覧を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\QuotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$partner_id = 56; // int | 取引先IDで絞込
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込
$start_issue_date = 'start_issue_date_example'; // string | 見積日の開始日(yyyy-mm-dd)
$end_issue_date = 'end_issue_date_example'; // string | 見積日の終了日(yyyy-mm-dd)
$quotation_number = 'quotation_number_example'; // string | 見積書番号
$description = 'description_example'; // string | 概要
$quotation_status = 'quotation_status_example'; // string | 見積書ステータス  (unsubmitted: 送付待ち, submitted: 送付済み, all: 全て)
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 20, 最大: 100)

try {
    $result = $apiInstance->getQuotations($company_id, $partner_id, $partner_code, $start_issue_date, $end_issue_date, $quotation_number, $description, $quotation_status, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationsApi->getQuotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **partner_id** | **int**| 取引先IDで絞込 | [optional]
 **partner_code** | **string**| 取引先コードで絞込 | [optional]
 **start_issue_date** | **string**| 見積日の開始日(yyyy-mm-dd) | [optional]
 **end_issue_date** | **string**| 見積日の終了日(yyyy-mm-dd) | [optional]
 **quotation_number** | **string**| 見積書番号 | [optional]
 **description** | **string**| 概要 | [optional]
 **quotation_status** | **string**| 見積書ステータス  (unsubmitted: 送付待ち, submitted: 送付済み, all: 全て) | [optional]
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 20, 最大: 100) | [optional]

### Return type

[**\Freee\Accounting\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateQuotation

> \Freee\Accounting\Model\QuotationResponse updateQuotation($id, $quotation_update_params)

見積書の更新

<h2 id=\"\">概要</h2>  <p>指定した事業所の見積書を更新する</p>  <h2 id=\"_1\">注意点</h2> <ul> <li> <p>partner_code, partner_idを両方同時に指定することはできません。</p> </li> <li> <p>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。</p> </li> <li> <p>本APIでは見積内容(quotation_contents)は、最大100行までになります。</p> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\QuotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 見積書ID
$quotation_update_params = new \Freee\Accounting\Model\QuotationUpdateParams(); // \Freee\Accounting\Model\QuotationUpdateParams | 見積書の更新

try {
    $result = $apiInstance->updateQuotation($id, $quotation_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationsApi->updateQuotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 見積書ID |
 **quotation_update_params** | [**\Freee\Accounting\Model\QuotationUpdateParams**](../Model/QuotationUpdateParams.md)| 見積書の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\QuotationResponse**](../Model/QuotationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

