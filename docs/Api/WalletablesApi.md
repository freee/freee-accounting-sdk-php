# Freee\Accounting\WalletablesApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWalletable**](WalletablesApi.md#createWalletable) | **POST** /walletables | 口座の作成
[**getWalletables**](WalletablesApi.md#getWalletables) | **GET** /walletables | 口座一覧の取得



## createWalletable

> \Freee\Accounting\Model\WalletablesCreateResponse createWalletable($create_walletable_params)

口座の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所に口座を作成する</p>  <p>同期に対応した口座はこのAPIでは作成できません</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li>  <li> <p>name : 口座名</p> </li>  <li> <p>bank_id : サービスID</p> </li>  <li> <p>group_name : 決算書表示名（小カテゴリー）　例：売掛金, 受取手形, 未収入金（法人のみ）, 買掛金, 支払手形, 未払金, 預り金, 前受金</p> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\WalletablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_walletable_params = new \Freee\Accounting\Model\CreateWalletableParams(); // \Freee\Accounting\Model\CreateWalletableParams | 口座の作成

try {
    $result = $apiInstance->createWalletable($create_walletable_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletablesApi->createWalletable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_walletable_params** | [**\Freee\Accounting\Model\CreateWalletableParams**](../Model/CreateWalletableParams.md)| 口座の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\WalletablesCreateResponse**](../Model/WalletablesCreateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWalletables

> \Freee\Accounting\Model\WalletablesIndexResponse getWalletables($company_id, $with_balance)

口座一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の口座一覧を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li>type <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li>  <li>walletable_balance : 登録残高</li>  <li>last_balance : 同期残高</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\WalletablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$with_balance = True; // bool | 残高情報を含める

try {
    $result = $apiInstance->getWalletables($company_id, $with_balance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletablesApi->getWalletables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **with_balance** | **bool**| 残高情報を含める | [optional]

### Return type

[**\Freee\Accounting\Model\WalletablesIndexResponse**](../Model/WalletablesIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

