# Freee\Accounting\ManualJournalsApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createManualJournal**](ManualJournalsApi.md#createManualJournal) | **POST** /api/1/manual_journals | 振替伝票の作成
[**destroyManualJournal**](ManualJournalsApi.md#destroyManualJournal) | **DELETE** /api/1/manual_journals/{id} | 振替伝票の削除
[**getManualJournal**](ManualJournalsApi.md#getManualJournal) | **GET** /api/1/manual_journals/{id} | 振替伝票の取得
[**getManualJournals**](ManualJournalsApi.md#getManualJournals) | **GET** /api/1/manual_journals | 振替伝票一覧の取得
[**updateManualJournal**](ManualJournalsApi.md#updateManualJournal) | **PUT** /api/1/manual_journals/{id} | 振替伝票の更新



## createManualJournal

> \Freee\Accounting\Model\ManualJournalResponse createManualJournal($manual_journal_create_params)

振替伝票の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の振替伝票を作成する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>adjustment : 決算整理仕訳フラグ（true: 決算整理仕訳, false: 日常仕訳）</p> </li>  <li> <p>txn_number : 仕訳番号</p> </li>  <li> <p>details : 振替伝票の貸借行</p> </li>  <li> <p>entry_side : 貸借区分</p>  <ul> <li>credit : 貸方</li>  <li>debit : 借方</li> </ul> </li>  <li> <p>amount : 金額</p> </li> </ul>  <h2 id=\"_3\">注意点</h2>  <ul> <li>振替伝票は売掛・買掛レポートには反映されません。債権・債務データの登録は取引(Deals)をお使いください。</li> <li>事業所の仕訳番号形式が有効な場合のみ、レスポンスで仕訳番号(txn_number)を返します。</li> <li>貸借合わせて100行まで仕訳行を登録できます。</li> <li>セグメントタグ情報は法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li> <li>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。またpartner_codeとpartner_idは同時に指定することはできません。</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ManualJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manual_journal_create_params = new \Freee\Accounting\Model\ManualJournalCreateParams(); // \Freee\Accounting\Model\ManualJournalCreateParams | 振替伝票の作成

try {
    $result = $apiInstance->createManualJournal($manual_journal_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualJournalsApi->createManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manual_journal_create_params** | [**\Freee\Accounting\Model\ManualJournalCreateParams**](../Model/ManualJournalCreateParams.md)| 振替伝票の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\ManualJournalResponse**](../Model/ManualJournalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## destroyManualJournal

> destroyManualJournal($id, $company_id)

振替伝票の削除

<h2 id=\"\">概要</h2>  <p>指定した事業所の振替伝票を削除する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ManualJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyManualJournal($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling ManualJournalsApi->destroyManualJournal: ', $e->getMessage(), PHP_EOL;
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


## getManualJournal

> \Freee\Accounting\Model\ManualJournalResponse getManualJournal($company_id, $id)

振替伝票の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の振替伝票を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li> <li> <p>adjustment : 決算整理仕訳フラグ（true: 決算整理仕訳, false: 日常仕訳）</p> </li> <li> <p>txn_number : 仕訳番号</p> </li> <li> <p>details : 振替伝票の貸借行</p> </li> <li> <p>entry_side : 貸借区分</p> <ul> <li>credit : 貸方</li> <li>debit : 借方</li> </ul> </li> <li> <p>amount : 金額</p> </li> </ul>  <h2 id=\"_3\">注意点</h2>  <ul> <li>振替伝票は売掛・買掛レポートには反映されません。債権・債務データの登録は取引(Deals)をお使いください。</li> <li>事業所の仕訳番号形式が有効な場合のみ、レスポンスで仕訳番号(txn_number)を返します。</li> <li>セグメントタグ情報は法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ManualJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$id = 56; // int | 

try {
    $result = $apiInstance->getManualJournal($company_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualJournalsApi->getManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **id** | **int**|  |

### Return type

[**\Freee\Accounting\Model\ManualJournalResponse**](../Model/ManualJournalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getManualJournals

> \Freee\Accounting\Model\InlineResponse2006 getManualJournals($company_id, $start_issue_date, $end_issue_date, $entry_side, $account_item_id, $min_amount, $max_amount, $partner_id, $partner_code, $item_id, $section_id, $segment_1_tag_id, $segment_2_tag_id, $segment_3_tag_id, $comment_status, $comment_important, $adjustment, $txn_number, $offset, $limit)

振替伝票一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の振替伝票一覧を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>adjustment : 決算整理仕訳フラグ（true: 決算整理仕訳, false: 日常仕訳）</p> </li>  <li> <p>txn_number : 仕訳番号</p> </li>  <li> <p>details : 振替伝票の貸借行</p> </li>  <li> <p>entry_side : 貸借区分</p>  <ul> <li>credit : 貸方</li>  <li>debit : 借方</li> </ul> </li>  <li> <p>amount : 金額</p> </li> </ul>  <h2 id=\"_3\">注意点</h2>  <ul> <li>振替伝票は売掛・買掛レポートには反映されません。債権・債務データの登録は取引(Deals)をお使いください。</li> <li>事業所の仕訳番号形式が有効な場合のみ、レスポンスで仕訳番号(txn_number)を返します。</li> <li>セグメントタグ情報は法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li> <li>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。またpartner_codeとpartner_idは同時に指定することはできません。</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ManualJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$start_issue_date = 'start_issue_date_example'; // string | 発生日で絞込：開始日(yyyy-mm-dd)
$end_issue_date = 'end_issue_date_example'; // string | 発生日で絞込：終了日(yyyy-mm-dd)
$entry_side = 'entry_side_example'; // string | 貸借で絞込 (貸方: credit, 借方: debit)
$account_item_id = 56; // int | 勘定科目IDで絞込
$min_amount = 56; // int | 金額で絞込：下限
$max_amount = 56; // int | 金額で絞込：上限
$partner_id = 56; // int | 取引先IDで絞込（0を指定すると、取引先が未選択の貸借行を絞り込めます）
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込
$item_id = 56; // int | 品目IDで絞込（0を指定すると、品目が未選択の貸借行を絞り込めます）
$section_id = 56; // int | 部門IDで絞込（0を指定すると、部門が未選択の貸借行を絞り込めます）
$segment_1_tag_id = 56; // int | セグメント１IDで絞り込み（0を指定すると、セグメント１が未選択の貸借行を絞り込めます）
$segment_2_tag_id = 56; // int | セグメント２IDで絞り込み（0を指定すると、セグメント２が未選択の貸借行を絞り込めます）
$segment_3_tag_id = 56; // int | セグメント３IDで絞り込み（0を指定すると、セグメント３が未選択の貸借行を絞り込めます）
$comment_status = 'comment_status_example'; // string | コメント状態で絞込（自分宛のコメント: posted_with_mention, 自分宛のコメント-未解決: raised_with_mention, 自分宛のコメント-解決済: resolved_with_mention, コメントあり: posted, 未解決: raised, 解決済: resolved, コメントなし: none）
$comment_important = True; // bool | 重要コメント付きの振替伝票を絞込
$adjustment = 'adjustment_example'; // string | 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without）
$txn_number = 'txn_number_example'; // string | 仕訳番号で絞込（事業所の仕訳番号形式が有効な場合のみ）
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 20, 最小: 1, 最大: 500)

try {
    $result = $apiInstance->getManualJournals($company_id, $start_issue_date, $end_issue_date, $entry_side, $account_item_id, $min_amount, $max_amount, $partner_id, $partner_code, $item_id, $section_id, $segment_1_tag_id, $segment_2_tag_id, $segment_3_tag_id, $comment_status, $comment_important, $adjustment, $txn_number, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualJournalsApi->getManualJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **start_issue_date** | **string**| 発生日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_issue_date** | **string**| 発生日で絞込：終了日(yyyy-mm-dd) | [optional]
 **entry_side** | **string**| 貸借で絞込 (貸方: credit, 借方: debit) | [optional]
 **account_item_id** | **int**| 勘定科目IDで絞込 | [optional]
 **min_amount** | **int**| 金額で絞込：下限 | [optional]
 **max_amount** | **int**| 金額で絞込：上限 | [optional]
 **partner_id** | **int**| 取引先IDで絞込（0を指定すると、取引先が未選択の貸借行を絞り込めます） | [optional]
 **partner_code** | **string**| 取引先コードで絞込 | [optional]
 **item_id** | **int**| 品目IDで絞込（0を指定すると、品目が未選択の貸借行を絞り込めます） | [optional]
 **section_id** | **int**| 部門IDで絞込（0を指定すると、部門が未選択の貸借行を絞り込めます） | [optional]
 **segment_1_tag_id** | **int**| セグメント１IDで絞り込み（0を指定すると、セグメント１が未選択の貸借行を絞り込めます） | [optional]
 **segment_2_tag_id** | **int**| セグメント２IDで絞り込み（0を指定すると、セグメント２が未選択の貸借行を絞り込めます） | [optional]
 **segment_3_tag_id** | **int**| セグメント３IDで絞り込み（0を指定すると、セグメント３が未選択の貸借行を絞り込めます） | [optional]
 **comment_status** | **string**| コメント状態で絞込（自分宛のコメント: posted_with_mention, 自分宛のコメント-未解決: raised_with_mention, 自分宛のコメント-解決済: resolved_with_mention, コメントあり: posted, 未解決: raised, 解決済: resolved, コメントなし: none） | [optional]
 **comment_important** | **bool**| 重要コメント付きの振替伝票を絞込 | [optional]
 **adjustment** | **string**| 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） | [optional]
 **txn_number** | **string**| 仕訳番号で絞込（事業所の仕訳番号形式が有効な場合のみ） | [optional]
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 20, 最小: 1, 最大: 500) | [optional]

### Return type

[**\Freee\Accounting\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateManualJournal

> \Freee\Accounting\Model\ManualJournalResponse updateManualJournal($id, $manual_journal_update_params)

振替伝票の更新

<h2 id=\"\">概要</h2>  <p>指定した事業所の振替伝票を更新する</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>issue_date : 発生日</p> </li>  <li> <p>adjustment : 決算整理仕訳フラグ（true: 決算整理仕訳, false: 日常仕訳）</p> </li>  <li> <p>txn_number : 仕訳番号</p> </li>  <li> <p>details : 振替伝票の貸借行</p> </li>  <li> <p>entry_side : 貸借区分</p>  <ul> <li>credit : 貸方</li>  <li>debit : 借方</li> </ul> </li>  <li> <p>amount : 金額</p> </li> </ul>  <h2 id=\"_3\">注意点</h2>  <ul> <li>振替伝票は売掛・買掛レポートには反映されません。債権・債務データの登録は取引(Deals)をお使いください。</li>  <li>事業所の仕訳番号形式が有効な場合のみ、レスポンスで仕訳番号(txn_number)を返します。</li> <li>貸借合わせて100行まで仕訳行を登録できます。</li>  <li>detailsに含まれない既存の貸借行は削除されます。更新後も残したい行は、必ず貸借行IDを指定してdetailsに含めてください。</li>  <li>detailsに含まれる貸借行IDの指定がある行は、更新行として扱われ更新されます。</li>  <li>detailsに含まれる貸借行IDの指定がない行は、新規行として扱われ追加されます。</li> <li>セグメントタグ情報は法人向けのプロフェッショナルプラン以上で利用可能です。利用可能なセグメントの数は、法人向けのプロフェッショナルプランの場合は1つ、エンタープライズプランの場合は3つです。</li> <li>partner_codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。またpartner_codeとpartner_idは同時に指定することはできません。</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ManualJournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$manual_journal_update_params = new \Freee\Accounting\Model\ManualJournalUpdateParams(); // \Freee\Accounting\Model\ManualJournalUpdateParams | 振替伝票の更新

try {
    $result = $apiInstance->updateManualJournal($id, $manual_journal_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualJournalsApi->updateManualJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **manual_journal_update_params** | [**\Freee\Accounting\Model\ManualJournalUpdateParams**](../Model/ManualJournalUpdateParams.md)| 振替伝票の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\ManualJournalResponse**](../Model/ManualJournalResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

