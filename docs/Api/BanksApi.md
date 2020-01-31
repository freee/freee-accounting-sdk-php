# Freee\Accounting\BanksApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBank**](BanksApi.md#getBank) | **GET** /api/1/banks/{id} | 連携サービスの取得
[**getBanks**](BanksApi.md#getBanks) | **GET** /api/1/banks | 連携サービス一覧の取得



## getBank

> \Freee\Accounting\Model\BanksShowResponse getBank($id)

連携サービスの取得

<h2 id=\"\">概要</h2>  <p>連携しているサービスを取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li>type <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\BanksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 連携サービスID

try {
    $result = $apiInstance->getBank($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanksApi->getBank: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 連携サービスID |

### Return type

[**\Freee\Accounting\Model\BanksShowResponse**](../Model/BanksShowResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBanks

> \Freee\Accounting\Model\BanksIndexResponse getBanks($offset, $limit, $type)

連携サービス一覧の取得

<h2 id=\"\">概要</h2>  <p>連携しているサービス一覧を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li>type <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : その他の決済口座</li> </ul> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\BanksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | 開始位置
$limit = 56; // int | 取得上限数,最大500件
$type = 'type_example'; // string | サービス種別

try {
    $result = $apiInstance->getBanks($offset, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BanksApi->getBanks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| 開始位置 | [optional]
 **limit** | **int**| 取得上限数,最大500件 | [optional]
 **type** | **string**| サービス種別 | [optional]

### Return type

[**\Freee\Accounting\Model\BanksIndexResponse**](../Model/BanksIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

