# Freee\Accounting\InvoicesApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInvoice**](InvoicesApi.md#createInvoice) | **POST** /api/1/invoices | 請求書の作成
[**destroyInvoice**](InvoicesApi.md#destroyInvoice) | **DELETE** /api/1/invoices/{id} | 請求書の削除
[**getInvoice**](InvoicesApi.md#getInvoice) | **GET** /api/1/invoices/{id} | 請求書の取得
[**getInvoices**](InvoicesApi.md#getInvoices) | **GET** /api/1/invoices | 請求書一覧の取得
[**updateInvoice**](InvoicesApi.md#updateInvoice) | **PUT** /api/1/invoices/{id} | 請求書の更新



## createInvoice

> \Freee\Accounting\Model\InvoicesResponse createInvoice($parameters)

請求書の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の請求書を作成する</p>  <h2 id=\"_1\">注意点</h2> <ul> <li> <p>取引先ID（partner_id）と取引先の名称項目（partner_name, partner_long_name, partner_zipcode, partner_prefecture_code, partner_address1, partner_address2）を同時に指定することはできません。名称項目のみ指定した場合は新規取引先として登録されます。</p> </li> <li> <p>[重要] <a rel=\"noopener noreferrer\" href=\"https://developer.freee.co.jp/news/1783\" target=\"_blank\">parnter_idは必須化予定</a>です。parnter_idを必ず指定してご利用ください。</p> </li> <li> <p>請求書ステータス(invoice_status)を発行(issue)で利用した場合、請求内容の合計金額が0円以上になる必要があります。</p> </li> <li><p>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。また「partner_code、partner_id、partner_name」は同時に指定することはできません。</p></li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parameters = new \Freee\Accounting\Model\InvoicesCreateParams(); // \Freee\Accounting\Model\InvoicesCreateParams | 請求書の作成

try {
    $result = $apiInstance->createInvoice($parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parameters** | [**\Freee\Accounting\Model\InvoicesCreateParams**](../Model/InvoicesCreateParams.md)| 請求書の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\InvoicesResponse**](../Model/InvoicesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyInvoice

> destroyInvoice($id, $company_id)

請求書の削除

<h2 id=\"\">概要</h2>  <p>指定した事業所の請求書を削除する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyInvoice($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->destroyInvoice: ', $e->getMessage(), PHP_EOL;
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


## getInvoice

> \Freee\Accounting\Model\InvoicesResponse getInvoice($company_id, $id)

請求書の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の請求書詳細を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$id = 56; // int | 請求書ID

try {
    $result = $apiInstance->getInvoice($company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **id** | **int**| 請求書ID |

### Return type

[**\Freee\Accounting\Model\InvoicesResponse**](../Model/InvoicesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoices

> \Freee\Accounting\Model\InvoicesIndexResponse getInvoices($company_id, $partner_id, $partner_code, $issue_date_start, $issue_date_end, $due_date_start, $due_date_end, $invoice_number, $description, $invoice_status, $payment_status, $offset, $limit)

請求書一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の請求書一覧を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$partner_id = 56; // int | 取引先IDで絞込
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込
$issue_date_start = 'issue_date_start_example'; // string | 請求日の開始日(yyyy-mm-dd)
$issue_date_end = 'issue_date_end_example'; // string | 請求日の終了日(yyyy-mm-dd)
$due_date_start = 'due_date_start_example'; // string | 期日の開始日(yyyy-mm-dd)
$due_date_end = 'due_date_end_example'; // string | 期日の終了日(yyyy-mm-dd)
$invoice_number = 'invoice_number_example'; // string | 請求書番号
$description = 'description_example'; // string | 概要
$invoice_status = 'invoice_status_example'; // string | 請求書ステータス  (draft: 下書き, applying: 申請中, remanded: 差し戻し, rejected: 却下, approved: 承認済み, issued: 発行済み)
$payment_status = 'payment_status_example'; // string | 入金ステータス  (unsettled: 入金待ち, settled: 入金済み)
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 20, 最大: 100)

try {
    $result = $apiInstance->getInvoices($company_id, $partner_id, $partner_code, $issue_date_start, $issue_date_end, $due_date_start, $due_date_end, $invoice_number, $description, $invoice_status, $payment_status, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **partner_id** | **int**| 取引先IDで絞込 | [optional]
 **partner_code** | **string**| 取引先コードで絞込 | [optional]
 **issue_date_start** | **string**| 請求日の開始日(yyyy-mm-dd) | [optional]
 **issue_date_end** | **string**| 請求日の終了日(yyyy-mm-dd) | [optional]
 **due_date_start** | **string**| 期日の開始日(yyyy-mm-dd) | [optional]
 **due_date_end** | **string**| 期日の終了日(yyyy-mm-dd) | [optional]
 **invoice_number** | **string**| 請求書番号 | [optional]
 **description** | **string**| 概要 | [optional]
 **invoice_status** | **string**| 請求書ステータス  (draft: 下書き, applying: 申請中, remanded: 差し戻し, rejected: 却下, approved: 承認済み, issued: 発行済み) | [optional]
 **payment_status** | **string**| 入金ステータス  (unsettled: 入金待ち, settled: 入金済み) | [optional]
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 20, 最大: 100) | [optional]

### Return type

[**\Freee\Accounting\Model\InvoicesIndexResponse**](../Model/InvoicesIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateInvoice

> \Freee\Accounting\Model\InvoicesResponse updateInvoice($id, $parameters)

請求書の更新

<h2 id=\"\">概要</h2>  <p>指定した事業所の請求書を更新する</p>  <h2 id=\"_1\">注意点</h2> <ul> <li> <p>取引先ID（partner_id）と取引先の名称項目（partner_name, partner_long_name, partner_zipcode, partner_prefecture_code, partner_address1, partner_address2）の更新はできません。名称項目を変更したい場合は取引先APIをご利用ください。</p> </li> <li> <p>[重要] <a rel=\"noopener noreferrer\" href=\"https://developer.freee.co.jp/news/1783\" target=\"_blank\">parnter_idは必須化予定</a>です。parnter_idを必ず指定してご利用ください。</p> </li> <li> <p>入金済みの請求書に対する金額関連の変更はできません。</p> </li> <li> <p>請求書ステータスは確定(issue)のみ指定可能です。請求書ステータスを確定する時のみ指定してください。</p> </li> <li> <p>請求書WFを利用している場合、承認済み請求書は承認権限を持たないユーザーでは更新できません。</p> </li> <li> <p>更新後の請求書ステータス(invoice_status)が下書き以外の場合、請求内容の合計金額が0円以上になる必要があります。</p></li> <li><p>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。また「partner_code、partner_id、partner_name」は同時に指定することはできません。</p></li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 請求書ID
$parameters = new \Freee\Accounting\Model\InvoicesUpdateParams(); // \Freee\Accounting\Model\InvoicesUpdateParams | 請求書の更新

try {
    $result = $apiInstance->updateInvoice($id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 請求書ID |
 **parameters** | [**\Freee\Accounting\Model\InvoicesUpdateParams**](../Model/InvoicesUpdateParams.md)| 請求書の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\InvoicesResponse**](../Model/InvoicesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

