# Freee\Accounting\DealsApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeal**](DealsApi.md#createDeal) | **POST** /deals | 取引（収入／支出）の作成
[**getDeal**](DealsApi.md#getDeal) | **GET** /deals/{id} | 取引（収入／支出）の取得
[**getDeals**](DealsApi.md#getDeals) | **GET** /deals | 取引（収入／支出）一覧の取得
[**updateDeal**](DealsApi.md#updateDeal) | **PUT** /deals/{id} | 取引（収入／支出）の更新



## createDeal

> \Freee\Accounting\Model\DealsCreateResponse createDeal($create_deal_params)

取引（収入／支出）の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（収入／支出）を作成する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>due_date : 支払期日</p> </li>  <li> <p>amount : 金額</p> </li>  <li> <p>due_amount : 支払残額</p> </li>  <li> <p>type</p>  <ul> <li>income : 収入</li>  <li>expense : 支出</li> </ul> </li>  <li> <p>ref_number : 管理番号</p> </li>  <li> <p>details : 取引の明細行</p> </li>  <li> <p>payments : 取引の支払行</p> </li>  <li> <p>from_walletable_type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : 現金</li>  <li>private_account_item : プライベート資金（法人の場合は役員借入金もしくは役員借入金、個人の場合は事業主貸もしくは事業主借）</li> </ul> </li> </ul>  <h2 id=\"_3\">注意点</h2>  <ul> <li> <p>tax_idは廃止予定です。tax_codeをご利用ください。</p> </li>  <li> <p>tax_code, tax_idはどちらかの指定が必須です。両方指定した場合はtax_codeが優先されます。</p> </li> <p><li>本APIでは+更新行(renews)の操作ができません。+更新行の作成APIをご利用ください。</p></li>  <p><li>セグメントタグ情報は法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</p></li>  <li> <p>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。またpartner_codeとpartner_idは同時に指定することはできません。</p></li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_deal_params = new \Freee\Accounting\Model\CreateDealParams(); // \Freee\Accounting\Model\CreateDealParams | 取引（収入／支出）の作成

try {
    $result = $apiInstance->createDeal($create_deal_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->createDeal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_deal_params** | [**\Freee\Accounting\Model\CreateDealParams**](../Model/CreateDealParams.md)| 取引（収入／支出）の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\DealsCreateResponse**](../Model/DealsCreateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeal

> \Freee\Accounting\Model\DealsResponse getDeal($company_id, $id, $accruals)

取引（収入／支出）の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（収入／支出）を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>due_date : 支払期日</p> </li>  <li> <p>amount : 金額</p> </li>  <li> <p>due_amount : 支払残額</p> </li>  <li> <p>type</p>  <ul> <li>income : 収入</li>  <li>expense : 支出</li> </ul> </li>  <li> <p>details : 取引の明細行</p> </li>  <li> <p>accruals : 取引の債権債務行</p> </li>  <li> <p>renews : 取引の+更新行</p> </li>  <li> <p>payments : 取引の支払行</p> </li>  <li> <p>from_walletable_type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : 現金</li>  <li>private_account_item : プライベート資金（法人の場合は役員借入金もしくは役員借入金、個人の場合は事業主貸もしくは事業主借）</li> </ul> </li>  <li> <p>registered_from</p>  <ul> <li>all : すべての取引</li>  <li>me : 自身が登録した取引</li> </ul> </li> </ul>  <h2 id=\"_3\">注意点</h2>  <ul> <li>tax_idは廃止予定です。tax_codeをご利用ください。</li>  <li>セグメントタグ情報は法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$id = 56; // int | 
$accruals = 'accruals_example'; // string | 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する）

try {
    $result = $apiInstance->getDeal($company_id, $id, $accruals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->getDeal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **id** | **int**|  |
 **accruals** | **string**| 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） | [optional]

### Return type

[**\Freee\Accounting\Model\DealsResponse**](../Model/DealsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeals

> \Freee\Accounting\Model\DealsIndexResponse getDeals($company_id, $partner_id, $account_item_id, $partner_code, $status, $type, $start_issue_date, $end_issue_date, $start_due_date, $end_due_date, $start_renew_date, $end_renew_date, $offset, $limit, $registered_from, $accruals)

取引（収入／支出）一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引一覧（収入／支出）を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>due_date : 支払期日</p> </li>  <li> <p>amount : 金額</p> </li>  <li> <p>due_amount : 支払残額</p> </li>  <li> <p>type</p>  <ul> <li>income : 収入</li>  <li>expense : 支出</li> </ul> </li>  <li> <p>details : 取引の明細行</p> </li>  <li> <p>accruals : 取引の債権債務行</p> </li>  <li> <p>renews : 取引の+更新行</p> </li>  <li> <p>payments : 取引の支払行</p> </li>  <li> <p>from_walletable_type</p>  <ul> <li>bank_account : 銀行口座</li>  <li>credit_card : クレジットカード</li>  <li>wallet : 現金</li>  <li>private_account_item : プライベート資金（法人の場合は役員借入金もしくは役員借入金、個人の場合は事業主貸もしくは事業主借）</li> </ul> </li>  <li> <p>registered_from</p>  <ul> <li>all : すべての取引</li>  <li>me : 自身が登録した取引</li> </ul> </li> </ul>  <h2 id=\"_3\">注意点</h2>  <ul> <li>tax_idは廃止予定です。tax_codeをご利用ください。</li>  <li>セグメントタグ情報は法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li> <li>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。またpartner_codeとpartner_idは同時に指定することはできません。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$partner_id = 56; // int | 取引先IDで絞込
$account_item_id = 56; // int | 勘定科目IDで絞込
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込
$status = 'status_example'; // string | 決済状況で絞込 (未決済: unsettled, 完了: settled)
$type = 'type_example'; // string | 収支区分 (収入: income, 支出: expense)
$start_issue_date = 'start_issue_date_example'; // string | 発生日で絞込：開始日(yyyy-mm-dd)
$end_issue_date = 'end_issue_date_example'; // string | 発生日で絞込：終了日(yyyy-mm-dd)
$start_due_date = 'start_due_date_example'; // string | 支払期日で絞込：開始日(yyyy-mm-dd)
$end_due_date = 'end_due_date_example'; // string | 支払期日で絞込：終了日(yyyy-mm-dd)
$start_renew_date = 'start_renew_date_example'; // string | +更新日で絞込：開始日(yyyy-mm-dd)
$end_renew_date = 'end_renew_date_example'; // string | +更新日で絞込：終了日(yyyy-mm-dd)
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 20, 最大: 100)
$registered_from = 'registered_from_example'; // string | 取引登録元アプリで絞込（me: 本APIを叩くアプリ自身から登録した取引のみ）
$accruals = 'accruals_example'; // string | 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する）

try {
    $result = $apiInstance->getDeals($company_id, $partner_id, $account_item_id, $partner_code, $status, $type, $start_issue_date, $end_issue_date, $start_due_date, $end_due_date, $start_renew_date, $end_renew_date, $offset, $limit, $registered_from, $accruals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->getDeals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **partner_id** | **int**| 取引先IDで絞込 | [optional]
 **account_item_id** | **int**| 勘定科目IDで絞込 | [optional]
 **partner_code** | **string**| 取引先コードで絞込 | [optional]
 **status** | **string**| 決済状況で絞込 (未決済: unsettled, 完了: settled) | [optional]
 **type** | **string**| 収支区分 (収入: income, 支出: expense) | [optional]
 **start_issue_date** | **string**| 発生日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_issue_date** | **string**| 発生日で絞込：終了日(yyyy-mm-dd) | [optional]
 **start_due_date** | **string**| 支払期日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_due_date** | **string**| 支払期日で絞込：終了日(yyyy-mm-dd) | [optional]
 **start_renew_date** | **string**| +更新日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_renew_date** | **string**| +更新日で絞込：終了日(yyyy-mm-dd) | [optional]
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 20, 最大: 100) | [optional]
 **registered_from** | **string**| 取引登録元アプリで絞込（me: 本APIを叩くアプリ自身から登録した取引のみ） | [optional]
 **accruals** | **string**| 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） | [optional]

### Return type

[**\Freee\Accounting\Model\DealsIndexResponse**](../Model/DealsIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDeal

> \Freee\Accounting\Model\DealsResponse updateDeal($id, $update_deal_params)

取引（収入／支出）の更新

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引（収入／支出）を更新する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>due_date : 支払期日</p> </li>  <li> <p>amount : 金額</p> </li>  <li> <p>due_amount : 支払残額</p> </li>  <li> <p>type</p>  <ul> <li>income : 収入</li>  <li>expense : 支出</li> </ul> </li>  <li> <p>details : 取引の明細行</p> </li> <li> <p>renews : 取引の+更新行</p> </li> <li> <p>payments : 取引の支払行</p> </li> <li> <p>from_walletable_type</p> <ul> <li>bank_account : 銀行口座</li> <li>credit_card : クレジットカード</li> <li>wallet : 現金</li> <li>private_account_item : プライベート資金（法人の場合は役員借入金もしくは役員借入金、個人の場合は事業主貸もしくは事業主借）</li> </ul> </li> </ul>  <h2 id=\"_3\">注意点</h2>  <ul> <li>本APIでは支払行(payments)の操作ができません。支払行の作成・更新・削除APIをご利用ください。</li> <li>本APIでは+更新行(renews)の操作ができません。+更新行の作成・更新・削除APIをご利用ください。</li>  <li>本APIでは収入／支出の切替えができません。既存の取引を削除後、再度作成してください。</li>  <li>本APIで取引を更新すると、消費税の計算方法は必ず内税方式が選択されます。</li>  <li>セグメントタグ情報は法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li> <li>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。またpartner_codeとpartner_idは同時に指定することはできません。</ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\DealsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 取引ID
$update_deal_params = new \Freee\Accounting\Model\UpdateDealParams(); // \Freee\Accounting\Model\UpdateDealParams | 取引（収入／支出）の更新

try {
    $result = $apiInstance->updateDeal($id, $update_deal_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealsApi->updateDeal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 取引ID |
 **update_deal_params** | [**\Freee\Accounting\Model\UpdateDealParams**](../Model/UpdateDealParams.md)| 取引（収入／支出）の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\DealsResponse**](../Model/DealsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

