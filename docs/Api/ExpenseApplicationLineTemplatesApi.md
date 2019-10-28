# Freee\Accounting\ExpenseApplicationLineTemplatesApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExpenseApplicationLineTemplates**](ExpenseApplicationLineTemplatesApi.md#getExpenseApplicationLineTemplates) | **GET** /expense_application_line_templates | 経費科目一覧の取得



## getExpenseApplicationLineTemplates

> \Freee\Accounting\Model\ExpenseApplicationLineTemplatesIndexResponse getExpenseApplicationLineTemplates($company_id, $offset, $limit)

経費科目一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の経費科目一覧を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ExpenseApplicationLineTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 20, 最大: 100)

try {
    $result = $apiInstance->getExpenseApplicationLineTemplates($company_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationLineTemplatesApi->getExpenseApplicationLineTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 20, 最大: 100) | [optional]

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationLineTemplatesIndexResponse**](../Model/ExpenseApplicationLineTemplatesIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

