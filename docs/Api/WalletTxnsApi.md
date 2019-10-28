# Freee\Accounting\WalletTxnsApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWalletTxn**](WalletTxnsApi.md#createWalletTxn) | **POST** /wallet_txns | 明細の作成
[**getWalletTxns**](WalletTxnsApi.md#getWalletTxns) | **GET** /wallet_txns | 明細一覧の取得



## createWalletTxn

> \Freee\Accounting\Model\WalletTxnsCreateResponse createWalletTxn($create_wallet_txn_params)

明細の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の明細を作成する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>amount : 明細金額</p> </li>  <li> <p>due_amount : 取引登録待ち金額</p> </li>  <li> <p>balance : 残高</p> </li>  <li> <p>entry_side</p>  <ul> <li>income : 入金</li>  <li>expense : 出金</li> </ul> </li>  <li> <p>walletable_type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\WalletTxnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_wallet_txn_params = new \Freee\Accounting\Model\CreateWalletTxnParams(); // \Freee\Accounting\Model\CreateWalletTxnParams | 明細の作成

try {
    $result = $apiInstance->createWalletTxn($create_wallet_txn_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletTxnsApi->createWalletTxn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_wallet_txn_params** | [**\Freee\Accounting\Model\CreateWalletTxnParams**](../Model/CreateWalletTxnParams.md)| 明細の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\WalletTxnsCreateResponse**](../Model/WalletTxnsCreateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWalletTxns

> \Freee\Accounting\Model\WalletTxnsIndexResponse getWalletTxns($company_id, $walletable_type, $walletable_id, $start_date, $end_date, $entry_side, $offset, $limit)

明細一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の明細一覧を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>amount : 明細金額</p> </li>  <li> <p>due_amount : 取引登録待ち金額</p> </li>  <li> <p>balance : 残高</p> </li>  <li> <p>entry_side</p>  <ul> <li>income : 入金</li>  <li>expense : 出金</li> </ul> </li>  <li> <p>walletable_type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\WalletTxnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$walletable_type = 'walletable_type_example'; // string | 口座区分 (銀行口座: bank_account, クレジットカード: credit_card, 現金: wallet)
$walletable_id = 56; // int | 口座ID
$start_date = 'start_date_example'; // string | 取引日で絞込：開始日 (yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 取引日で絞込：終了日 (yyyy-mm-dd)
$entry_side = 'entry_side_example'; // string | 入金／出金 (入金: income, 出金: expense)
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 20, 最大: 100)

try {
    $result = $apiInstance->getWalletTxns($company_id, $walletable_type, $walletable_id, $start_date, $end_date, $entry_side, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletTxnsApi->getWalletTxns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **walletable_type** | **string**| 口座区分 (銀行口座: bank_account, クレジットカード: credit_card, 現金: wallet) | [optional]
 **walletable_id** | **int**| 口座ID | [optional]
 **start_date** | **string**| 取引日で絞込：開始日 (yyyy-mm-dd) | [optional]
 **end_date** | **string**| 取引日で絞込：終了日 (yyyy-mm-dd) | [optional]
 **entry_side** | **string**| 入金／出金 (入金: income, 出金: expense) | [optional]
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 20, 最大: 100) | [optional]

### Return type

[**\Freee\Accounting\Model\WalletTxnsIndexResponse**](../Model/WalletTxnsIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

