# Freee\Accounting\TransfersApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTransfer**](TransfersApi.md#createTransfer) | **POST** /transfers | 取引（振替）の作成
[**getTransfers**](TransfersApi.md#getTransfers) | **GET** /transfers | 取引（振替）一覧の取得



## createTransfer

> \Freee\Accounting\Model\TransfersCreateResponse createTransfer($inline_object1)

取引（振替）の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（振替）を作成する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>amount : 振替金額</p> </li>  <li> <p>from_walletable_type, to_walletable_type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object1 = new \Freee\Accounting\Model\InlineObject1(); // \Freee\Accounting\Model\InlineObject1 | 

try {
    $result = $apiInstance->createTransfer($inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->createTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object1** | [**\Freee\Accounting\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\Freee\Accounting\Model\TransfersCreateResponse**](../Model/TransfersCreateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTransfers

> \Freee\Accounting\Model\TransfersIndexResponse getTransfers($company_id, $start_date, $end_date, $offset, $limit)

取引（振替）一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（振替）一覧を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>amount : 振替金額</p> </li>  <li> <p>from_walletable_type, to_walletable_type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$start_date = 'start_date_example'; // string | 振替日で絞込：開始日 (yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 振替日で絞込：終了日 (yyyy-mm-dd)
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 20, 最大: 100)

try {
    $result = $apiInstance->getTransfers($company_id, $start_date, $end_date, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->getTransfers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **start_date** | **string**| 振替日で絞込：開始日 (yyyy-mm-dd) | [optional]
 **end_date** | **string**| 振替日で絞込：終了日 (yyyy-mm-dd) | [optional]
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 20, 最大: 100) | [optional]

### Return type

[**\Freee\Accounting\Model\TransfersIndexResponse**](../Model/TransfersIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

