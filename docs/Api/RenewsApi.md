# Freee\Accounting\RenewsApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDealRenew**](RenewsApi.md#createDealRenew) | **POST** /api/1/deals/{id}/renews | 取引（収入／支出）に対する+更新の作成
[**deleteDealRenew**](RenewsApi.md#deleteDealRenew) | **DELETE** /api/1/deals/{id}/renews/{renew_id} | 取引（収入／支出）の+更新の削除
[**updateDealRenew**](RenewsApi.md#updateDealRenew) | **PUT** /api/1/deals/{id}/renews/{renew_id} | 取引（収入／支出）の+更新の更新



## createDealRenew

> \Freee\Accounting\Model\RenewsResponse createDealRenew($id, $parameters)

取引（収入／支出）に対する+更新の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（収入／支出）の+更新を作成する</p> <h2 id=\"_2\">定義</h2> <ul> <li> <p>issue_date : 発生日</p> </li> <li> <p>due_date : 支払期日</p> </li> <li> <p>amount : 金額</p> </li> <li> <p>due_amount : 支払残額</p> </li> <li> <p>type</p> <ul> <li>income : 収入</li> <li>expense : 支出</li> </ul> </li> <li> <p>details : 取引の明細行</p> </li> <li> <p>accruals : 取引の債権債務行</p> </li> <li> <p>renews : 取引の+更新行</p> </li> <li> <p>payments : 取引の支払行</p> </li> <li> <p>from_walletable_type</p> <ul> <li>bank_account : 銀行口座</li> <li>credit_card : クレジットカード</li> <li>wallet : 現金</li> <li>private_account_item : プライベート資金（法人の場合は役員借入金もしくは役員借入金、個人の場合は事業主貸もしくは事業主借）</li> </ul> </li> </ul> <h2 id=\"_3\">注意点</h2> <ul> <li>本APIではdetails(取引の明細行)、accruals(債権債務行)、renewsのdetails(+更新の明細行)のみ操作可能です。</li> <li>本APIで取引を更新すると、消費税の計算方法は必ず内税方式が選択されます。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\RenewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 取引ID
$parameters = new \Freee\Accounting\Model\RenewsCreateParams(); // \Freee\Accounting\Model\RenewsCreateParams | 取引（収入／支出）に対する+更新の情報

try {
    $result = $apiInstance->createDealRenew($id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenewsApi->createDealRenew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 取引ID |
 **parameters** | [**\Freee\Accounting\Model\RenewsCreateParams**](../Model/RenewsCreateParams.md)| 取引（収入／支出）に対する+更新の情報 |

### Return type

[**\Freee\Accounting\Model\RenewsResponse**](../Model/RenewsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteDealRenew

> \Freee\Accounting\Model\RenewsResponse deleteDealRenew($id, $renew_id, $company_id)

取引（収入／支出）の+更新の削除

<h2 id=\"\">概要</h2> <p>指定した事業所の取引（収入／支出）の+更新を削除する</p> <h2 id=\"_3\">注意点</h2> <ul> <li>本APIでは+更新の削除のみ可能です。取引や支払行に対する削除はできません。</li> <li>renew_idにはrenewsのid(+更新ID)を指定してください。renewsのdetailsのid(+更新の明細行ID)を指定できません。</li> <li>月締めされている仕訳に紐づく＋更新行の編集・削除はできません。</li> <li>承認済み仕訳に紐づく＋更新行の編集・削除は管理者権限のユーザーのみ可能です。</li> <li>本APIで取引を更新すると、消費税の計算方法は必ず内税方式が選択されます。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\RenewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 取引ID
$renew_id = 56; // int | +更新ID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->deleteDealRenew($id, $renew_id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenewsApi->deleteDealRenew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 取引ID |
 **renew_id** | **int**| +更新ID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\RenewsResponse**](../Model/RenewsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDealRenew

> \Freee\Accounting\Model\RenewsResponse updateDealRenew($id, $renew_id, $parameters)

取引（収入／支出）の+更新の更新

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（収入／支出）の+更新を更新する</p> <h2 id=\"_2\">定義</h2> <ul> <li> <p>issue_date : 発生日</p> </li> <li> <p>due_date : 支払期日</p> </li> <li> <p>amount : 金額</p> </li> <li> <p>due_amount : 支払残額</p> </li> <li> <p>type</p> <ul> <li>income : 収入</li> <li>expense : 支出</li> </ul> </li> <li> <p>details : 取引の明細行</p> </li> <li> <p>accruals : 取引の債権債務行</p> </li> <li> <p>renews : 取引の+更新行</p> </li> <li> <p>payments : 取引の支払行</p> </li> <li> <p>from_walletable_type</p> <ul> <li>bank_account : 銀行口座</li> <li>credit_card : クレジットカード</li> <li>wallet : 現金</li> <li>private_account_item : プライベート資金（法人の場合は役員借入金もしくは役員借入金、個人の場合は事業主貸もしくは事業主借）</li> </ul> </li> </ul> <h2 id=\"_3\">注意点</h2> <ul> <li>本APIでは+更新の更新のみ可能です。取引や支払行に対する更新はできません。</li> <li>renew_idにはrenewsのid(+更新ID)を指定してください。renewsのdetailsのid(+更新の明細行ID)を指定できません。</li> <li>月締めされている仕訳に紐づく＋更新行の編集・削除はできません。</li> <li>承認済み仕訳に紐づく＋更新行の編集・削除は管理者権限のユーザーのみ可能です。</li> <li>本APIで取引を更新すると、消費税の計算方法は必ず内税方式が選択されます。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\RenewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 取引ID
$renew_id = 56; // int | +更新ID
$parameters = new \Freee\Accounting\Model\RenewsUpdateParams(); // \Freee\Accounting\Model\RenewsUpdateParams | +更新の更新情報

try {
    $result = $apiInstance->updateDealRenew($id, $renew_id, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenewsApi->updateDealRenew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 取引ID |
 **renew_id** | **int**| +更新ID |
 **parameters** | [**\Freee\Accounting\Model\RenewsUpdateParams**](../Model/RenewsUpdateParams.md)| +更新の更新情報 |

### Return type

[**\Freee\Accounting\Model\RenewsResponse**](../Model/RenewsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

