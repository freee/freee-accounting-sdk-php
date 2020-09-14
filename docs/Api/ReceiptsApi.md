# Freee\Accounting\ReceiptsApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createReceipt**](ReceiptsApi.md#createReceipt) | **POST** /api/1/receipts | ファイルボックス 証憑ファイルアップロード
[**destroyReceipt**](ReceiptsApi.md#destroyReceipt) | **DELETE** /api/1/receipts/{id} | ファイルボックス 証憑ファイルを削除する
[**getReceipt**](ReceiptsApi.md#getReceipt) | **GET** /api/1/receipts/{id} | ファイルボックス 証憑ファイルの取得
[**getReceipts**](ReceiptsApi.md#getReceipts) | **GET** /api/1/receipts | ファイルボックス 証憑ファイル一覧の取得
[**updateReceipt**](ReceiptsApi.md#updateReceipt) | **PUT** /api/1/receipts/{id} | ファイルボックス 証憑ファイル情報更新



## createReceipt

> \Freee\Accounting\Model\ReceiptResponse createReceipt($company_id, $receipt, $description, $issue_date)

ファイルボックス 証憑ファイルアップロード

<h2 id=\"\">概要</h2>  <p>ファイルボックスに証憑ファイルをアップロードする</p> <h2 id=\"_2\">注意点</h2> <ul>   <li>リクエストヘッダーの Content-Type は、multipart/form-dataにのみ対応しています。</li> </ul>

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

[**\Freee\Accounting\Model\ReceiptResponse**](../Model/ReceiptResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyReceipt

> destroyReceipt($id, $company_id)

ファイルボックス 証憑ファイルを削除する

<h2 id=\"\">概要</h2>  <p>ファイルボックスの証憑ファイルを削除する</p>

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
$id = 56; // int | 証憑ID
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyReceipt($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->destroyReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 証憑ID |
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


## getReceipt

> \Freee\Accounting\Model\ReceiptResponse getReceipt($id, $company_id)

ファイルボックス 証憑ファイルの取得

<h2 id=\"\">概要</h2>  <p>指定した事業所のファイルボックス 証憑ファイルを取得する</p>

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
$id = 56; // int | 証憑ID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getReceipt($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 証憑ID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\ReceiptResponse**](../Model/ReceiptResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReceipts

> \Freee\Accounting\Model\InlineResponse2008 getReceipts($company_id, $start_date, $end_date, $user_name, $number, $comment_type, $comment_important, $category, $offset, $limit)

ファイルボックス 証憑ファイル一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所のファイルボックス 証憑ファイル一覧を取得する</p>

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
$start_date = 'start_date_example'; // string | アップロード日 (yyyy-mm-dd)
$end_date = 'end_date_example'; // string | アップロード日 (yyyy-mm-dd)
$user_name = 'user_name_example'; // string | アップロードしたユーザー名、メールアドレス
$number = 56; // int | アップロードファイルNo
$comment_type = 'comment_type_example'; // string | posted:コメントあり, raised:未解決, resolved:解決済
$comment_important = True; // bool | trueの時、重要コメント付きが対象
$category = 'category_example'; // string | all:すべて、without_deal:未登録、with_expense_application_line:経費申請中, with_deal:登録済み、ignored:無視
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 3000)

try {
    $result = $apiInstance->getReceipts($company_id, $start_date, $end_date, $user_name, $number, $comment_type, $comment_important, $category, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceipts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **start_date** | **string**| アップロード日 (yyyy-mm-dd) |
 **end_date** | **string**| アップロード日 (yyyy-mm-dd) |
 **user_name** | **string**| アップロードしたユーザー名、メールアドレス | [optional]
 **number** | **int**| アップロードファイルNo | [optional]
 **comment_type** | **string**| posted:コメントあり, raised:未解決, resolved:解決済 | [optional]
 **comment_important** | **bool**| trueの時、重要コメント付きが対象 | [optional]
 **category** | **string**| all:すべて、without_deal:未登録、with_expense_application_line:経費申請中, with_deal:登録済み、ignored:無視 | [optional]
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 3000) | [optional]

### Return type

[**\Freee\Accounting\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReceipt

> \Freee\Accounting\Model\ReceiptResponse updateReceipt($id, $receipt_update_params)

ファイルボックス 証憑ファイル情報更新

<h2 id=\"\">概要</h2>  <p>ファイルボックスの証憑ファイル情報を更新する</p> <h2 id=\"_2\">注意点</h2> <ul>   <li>本APIでは、証憑ファイルの再アップロードはできません。</li> </ul>

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
$id = 56; // int | 証憑ID
$receipt_update_params = new \Freee\Accounting\Model\ReceiptUpdateParams(); // \Freee\Accounting\Model\ReceiptUpdateParams | 経費申請の更新

try {
    $result = $apiInstance->updateReceipt($id, $receipt_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->updateReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 証憑ID |
 **receipt_update_params** | [**\Freee\Accounting\Model\ReceiptUpdateParams**](../Model/ReceiptUpdateParams.md)| 経費申請の更新 |

### Return type

[**\Freee\Accounting\Model\ReceiptResponse**](../Model/ReceiptResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

