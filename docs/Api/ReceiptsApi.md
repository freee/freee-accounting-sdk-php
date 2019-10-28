# Freee\Accounting\ReceiptsApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReceipt**](ReceiptsApi.md#createReceipt) | **POST** /receipts | ファイルボックス 証憑ファイルアップロード



## createReceipt

> \Freee\Accounting\Model\ReceiptCreateResponse createReceipt($company_id, $receipt, $description, $issue_date)

ファイルボックス 証憑ファイルアップロード

<h2 id=\"\">概要</h2>  <p>ファイルボックスに証憑ファイルをアップロードする</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$receipt = "/path/to/file.txt"; // \SplFileObject | 証憑ファイル
$description = 'description_example'; // string | メモ (255文字以内)
$issue_date = 'issue_date_example'; // string | 取引日 (yyyy-mm-dd)

try {
    $result = $apiInstance->createReceipt($company_id, $receipt, $description, $issue_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->createReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **receipt** | **\SplFileObject****\SplFileObject**| 証憑ファイル |
 **description** | **string**| メモ (255文字以内) | [optional]
 **issue_date** | **string**| 取引日 (yyyy-mm-dd) | [optional]

### Return type

[**\Freee\Accounting\Model\ReceiptCreateResponse**](../Model/ReceiptCreateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

