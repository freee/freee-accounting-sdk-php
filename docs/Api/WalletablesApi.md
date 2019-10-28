# Freee\Accounting\WalletablesApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWalletable**](WalletablesApi.md#createWalletable) | **POST** /walletables | 口座の作成
[**destroyWalletable**](WalletablesApi.md#destroyWalletable) | **DELETE** /walletables/{type}/{id} | 口座の削除
[**getWalletable**](WalletablesApi.md#getWalletable) | **GET** /walletables/{type}/{id} | 口座情報の取得
[**getWalletables**](WalletablesApi.md#getWalletables) | **GET** /walletables | 口座一覧の取得
[**updateWalletable**](WalletablesApi.md#updateWalletable) | **PUT** /walletables/{type}/{id} | 口座の更新



## createWalletable

> \Freee\Accounting\Model\WalletablesCreateResponse createWalletable($parameters)

口座の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所に口座を作成する</p>  <h2 id=\"\">注意点</h2> <ul><li>同期に対応した口座はこのAPIでは作成できません</li></ul>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li>  <li> <p>name : 口座名</p> </li>  <li> <p>bank_id : サービスID</p> </li>  <li> <p>group_name : 決算書表示名（小カテゴリー）　例：売掛金, 受取手形, 未収入金（法人のみ）, 買掛金, 支払手形, 未払金, 預り金, 前受金</p> </li> </ul>

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
$parameters = new \Freee\Accounting\Model\WalletableCreateParams(); // \Freee\Accounting\Model\WalletableCreateParams | 口座の作成

try {
    $result = $apiInstance->createWalletable($parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletablesApi->createWalletable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parameters** | [**\Freee\Accounting\Model\WalletableCreateParams**](../Model/WalletableCreateParams.md)| 口座の作成 | [optional]

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


## destroyWalletable

> destroyWalletable($id, $type, $company_id)

口座の削除

<h2 id=\"\">概要</h2>  <p>指定した事業所の口座を削除する</p>  <h2 id=\"\">注意点</h2> <ul> <li>削除を実行するには、当該口座に関連する仕訳データを事前に削除する必要があります。</li> <li>当該口座に仕訳が残っていないか確認するには、レポートの「仕訳帳」等を参照し、必要に応じて、「取引」や「口座振替」も削除します。</li>  </ul>

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
$id = 56; // int | 口座ID
$type = 'type_example'; // string | 口座種別（bank_account : 銀行口座, credit_card : クレジットカード, wallet : その他の決済口座）
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyWalletable($id, $type, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling WalletablesApi->destroyWalletable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 口座ID |
 **type** | **string**| 口座種別（bank_account : 銀行口座, credit_card : クレジットカード, wallet : その他の決済口座） |
 **company_id** | **int**| 事業所ID |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getWalletable

> \Freee\Accounting\Model\WalletablesResponse getWalletable($id, $type, $company_id)

口座情報の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の口座情報を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li>type <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li>  <li>walletable_balance : 登録残高</li>  <li>last_balance : 同期残高</li> </ul>

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
$id = new \stdClass; // object | 口座ID
$type = 'type_example'; // string | 口座種別（bank_account : 銀行口座, credit_card : クレジットカード, wallet : その他の決済口座）
$company_id = new \stdClass; // object | 事業所ID

try {
    $result = $apiInstance->getWalletable($id, $type, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletablesApi->getWalletable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**object**](../Model/.md)| 口座ID |
 **type** | **string**| 口座種別（bank_account : 銀行口座, credit_card : クレジットカード, wallet : その他の決済口座） |
 **company_id** | [**object**](../Model/.md)| 事業所ID |

### Return type

[**\Freee\Accounting\Model\WalletablesResponse**](../Model/WalletablesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
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


## updateWalletable

> \Freee\Accounting\Model\WalletablesResponse updateWalletable($id, $type, $company_id, $parameters)

口座の更新

<h2 id=\"\">概要</h2>  <p>口座を更新する</p>

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
$id = 56; // int | 
$type = 'type_example'; // string | 口座種別（bank_account : 銀行口座, credit_card : クレジットカード, wallet : その他の決済口座）
$company_id = new \stdClass; // object | 事業所ID
$parameters = new \Freee\Accounting\Model\WalletableUpdateParams(); // \Freee\Accounting\Model\WalletableUpdateParams | 口座の作成

try {
    $result = $apiInstance->updateWalletable($id, $type, $company_id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletablesApi->updateWalletable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **type** | **string**| 口座種別（bank_account : 銀行口座, credit_card : クレジットカード, wallet : その他の決済口座） |
 **company_id** | [**object**](../Model/.md)| 事業所ID |
 **parameters** | [**\Freee\Accounting\Model\WalletableUpdateParams**](../Model/WalletableUpdateParams.md)| 口座の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\WalletablesResponse**](../Model/WalletablesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

