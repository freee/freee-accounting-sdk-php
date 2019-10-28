# Freee\Accounting\ExpenseApplicationsApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createExpenseApplication**](ExpenseApplicationsApi.md#createExpenseApplication) | **POST** /expense_applications | 経費申請の作成
[**destroyExpenseApplication**](ExpenseApplicationsApi.md#destroyExpenseApplication) | **DELETE** /expense_applications/{id} | 経費申請の削除
[**updateExpenseApplication**](ExpenseApplicationsApi.md#updateExpenseApplication) | **PUT** /expense_applications/{id} | 経費申請の更新



## createExpenseApplication

> \Freee\Accounting\Model\ExpenseApplicationsResponse createExpenseApplication($create_expense_application_params)

経費申請の作成

<h2 id=\"_1\">概要</h2>  <p>指定した事業所の経費申請を作成する</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>本APIでは、経費申請の下書きを作成することができます。申請作業はWebから行ってください。</li>   <li>現在、申請経路はWeb上からのみ入力できます。Web上での申請時に指定してください。</li>   <li>申請時には、申請タイトル(title)に加え、申請日(issue_date)、項目行については金額(amount)、日付(transaction_date)、内容(description)が必須項目となります。申請時の業務効率化のため、API入力をお勧めします。</li>   <li>個人アカウントの場合は、プレミアムプランでご利用できます。</li>   <li>法人アカウントの場合は、ベーシックプラン、プロフェッショナルプラン、エンタープライズプランでご利用できます。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ExpenseApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_expense_application_params = new \Freee\Accounting\Model\CreateExpenseApplicationParams(); // \Freee\Accounting\Model\CreateExpenseApplicationParams | 経費申請の作成

try {
    $result = $apiInstance->createExpenseApplication($create_expense_application_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationsApi->createExpenseApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_expense_application_params** | [**\Freee\Accounting\Model\CreateExpenseApplicationParams**](../Model/CreateExpenseApplicationParams.md)| 経費申請の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationsResponse**](../Model/ExpenseApplicationsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyExpenseApplication

> destroyExpenseApplication($id, $company_id)

経費申請の削除

<h2 id=\"\">概要</h2>  <p>指定した事業所の経費申請を削除する</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>個人アカウントの場合は、プレミアムプランでご利用できます。</li>   <li>法人アカウントの場合は、ベーシックプラン、プロフェッショナルプラン、エンタープライズプランでご利用できます。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ExpenseApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyExpenseApplication($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationsApi->destroyExpenseApplication: ', $e->getMessage(), PHP_EOL;
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


## updateExpenseApplication

> \Freee\Accounting\Model\ExpenseApplicationsResponse updateExpenseApplication($id, $update_expense_application_params)

経費申請の更新

<h2 id=\"\">概要</h2>  <p>指定した事業所の経費申請を更新する</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>本APIでは、経費申請の下書きを更新することができます。申請作業はWebから行ってください。</li>   <li>現在、申請経路はWeb上からのみ入力できます。Web上での申請時に指定してください。</li>   <li>申請時には、申請タイトル(title)に加え、申請日(issue_date)、項目行については金額(amount)、日付(transaction_date)、内容(description)が必須項目となります。申請時の業務効率化のため、API入力をお勧めします。</li>   <li>個人アカウントの場合は、プレミアムプランでご利用できます。</li>   <li>法人アカウントの場合は、ベーシックプラン、プロフェッショナルプラン、エンタープライズプランでご利用できます。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ExpenseApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$update_expense_application_params = new \Freee\Accounting\Model\UpdateExpenseApplicationParams(); // \Freee\Accounting\Model\UpdateExpenseApplicationParams | 経費申請の更新

try {
    $result = $apiInstance->updateExpenseApplication($id, $update_expense_application_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationsApi->updateExpenseApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **update_expense_application_params** | [**\Freee\Accounting\Model\UpdateExpenseApplicationParams**](../Model/UpdateExpenseApplicationParams.md)| 経費申請の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationsResponse**](../Model/ExpenseApplicationsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

