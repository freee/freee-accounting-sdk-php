# Freee\Accounting\ExpenseApplicationsApi

All URIs are relative to https://api.freee.co.jp.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createExpenseApplication()**](ExpenseApplicationsApi.md#createExpenseApplication) | **POST** /api/1/expense_applications | 経費申請の作成
[**destroyExpenseApplication()**](ExpenseApplicationsApi.md#destroyExpenseApplication) | **DELETE** /api/1/expense_applications/{id} | 経費申請の削除
[**getExpenseApplication()**](ExpenseApplicationsApi.md#getExpenseApplication) | **GET** /api/1/expense_applications/{id} | 経費申請詳細の取得
[**getExpenseApplications()**](ExpenseApplicationsApi.md#getExpenseApplications) | **GET** /api/1/expense_applications | 経費申請一覧の取得
[**updateExpenseApplication()**](ExpenseApplicationsApi.md#updateExpenseApplication) | **PUT** /api/1/expense_applications/{id} | 経費申請の更新


## `createExpenseApplication()`

```php
createExpenseApplication($expense_application_create_params): \Freee\Accounting\Model\ExpenseApplicationResponse
```

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
$expense_application_create_params = new \Freee\Accounting\Model\ExpenseApplicationCreateParams(); // \Freee\Accounting\Model\ExpenseApplicationCreateParams | 経費申請の作成

try {
    $result = $apiInstance->createExpenseApplication($expense_application_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationsApi->createExpenseApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_application_create_params** | [**\Freee\Accounting\Model\ExpenseApplicationCreateParams**](../Model/ExpenseApplicationCreateParams.md)| 経費申請の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationResponse**](../Model/ExpenseApplicationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyExpenseApplication()`

```php
destroyExpenseApplication($id, $company_id)
```

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
$id = 56; // int
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyExpenseApplication($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationsApi->destroyExpenseApplication: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpenseApplication()`

```php
getExpenseApplication($id, $company_id): \Freee\Accounting\Model\ExpenseApplicationResponse
```

経費申請詳細の取得

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
$id = 56; // int | 経費申請ID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getExpenseApplication($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationsApi->getExpenseApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 経費申請ID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationResponse**](../Model/ExpenseApplicationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExpenseApplications()`

```php
getExpenseApplications($company_id, $offset, $limit): \Freee\Accounting\Model\ExpenseApplicationsIndexResponse
```

経費申請一覧の取得

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
$company_id = 56; // int | 事業所ID
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 500)

try {
    $result = $apiInstance->getExpenseApplications($company_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationsApi->getExpenseApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 500) | [optional]

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationsIndexResponse**](../Model/ExpenseApplicationsIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExpenseApplication()`

```php
updateExpenseApplication($id, $expense_application_update_params): \Freee\Accounting\Model\ExpenseApplicationResponse
```

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
$id = 56; // int
$expense_application_update_params = new \Freee\Accounting\Model\ExpenseApplicationUpdateParams(); // \Freee\Accounting\Model\ExpenseApplicationUpdateParams | 経費申請の更新

try {
    $result = $apiInstance->updateExpenseApplication($id, $expense_application_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpenseApplicationsApi->updateExpenseApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **expense_application_update_params** | [**\Freee\Accounting\Model\ExpenseApplicationUpdateParams**](../Model/ExpenseApplicationUpdateParams.md)| 経費申請の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\ExpenseApplicationResponse**](../Model/ExpenseApplicationResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
