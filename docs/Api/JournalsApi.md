# Freee\Accounting\JournalsApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadJournal**](JournalsApi.md#downloadJournal) | **GET** /api/1/journals/reports/{id}/download | ダウンロード実行
[**getJournalStatus**](JournalsApi.md#getJournalStatus) | **GET** /api/1/journals/reports/{id}/status | ステータス確認
[**getJournals**](JournalsApi.md#getJournals) | **GET** /api/1/journals | ダウンロード要求



## downloadJournal

> \SplFileObject downloadJournal($id, $company_id)

ダウンロード実行

<h2 id=\"\">概要</h2>  <p>ダウンロードを実行する</p>  <p>＊このAPIは無料プランのアカウントではご利用になれません</p>  <h2 id=\"_2\">定義</h2>  <ul> <li>id : 受け付けID</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\JournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 受け付けID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->downloadJournal($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalsApi->downloadJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 受け付けID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/pdf, text/csv, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getJournalStatus

> \Freee\Accounting\Model\JournalStatusResponse getJournalStatus($company_id, $id, $visible_tags, $start_date, $end_date)

ステータス確認

<h2 id=\"\">概要</h2>  <p>ダウンロードリクエストのステータスを確認する</p>  <p>＊このAPIは無料プランのアカウントではご利用になれません</p>  <h2 id=\"_2\">定義</h2>  <ul> <li> <p>status</p>  <ul> <li>enqueued : 実行待ち</li>  <li>working : 実行中</li>  <li>uploaded : 準備完了</li> </ul> </li>  <li> <p>id : 受け付けID</p> </li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\JournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$id = 56; // int | 受け付けID
$visible_tags = array('visible_tags_example'); // string[] | 補助科目やコメントとして出力する項目
$start_date = 'start_date_example'; // string | 取得開始日 (yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 取得終了日 (yyyy-mm-dd)

try {
    $result = $apiInstance->getJournalStatus($company_id, $id, $visible_tags, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalsApi->getJournalStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **id** | **int**| 受け付けID |
 **visible_tags** | [**string[]**](../Model/string.md)| 補助科目やコメントとして出力する項目 | [optional]
 **start_date** | **string**| 取得開始日 (yyyy-mm-dd) | [optional]
 **end_date** | **string**| 取得終了日 (yyyy-mm-dd) | [optional]

### Return type

[**\Freee\Accounting\Model\JournalStatusResponse**](../Model/JournalStatusResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getJournals

> \Freee\Accounting\Model\JournalsResponse getJournals($download_type, $company_id, $visible_tags, $start_date, $end_date)

ダウンロード要求

<h2 id=\"\">概要</h2>  <p>ユーザーが所属する事業所の仕訳帳のダウンロードをリクエストします 生成されるファイルに関しては、<a href=\"https://support.freee.co.jp/hc/ja/articles/204599604#2\">ヘルプページ</a>をご参照ください</p>  <p>＊このAPIは無料プランのアカウントではご利用になれません</p>  <h2 id=\"_2\">定義</h2>  <ul> <li>download_type <ul> <li>generic(freee Webからダウンロードできるものと同じ)</li> <li>csv (yayoi形式)</li> <li>pdf</li> </ul> </li> <li>visible_tags : 指定しない場合は従来の仕様の仕訳帳が出力されます <ul> <li>partner : 取引先タグ</li> <li>item : 品目タグ</li> <li>tag : メモタグ</li> <li>section : 部門タグ</li> <li>description : 備考欄</li> <li>wallet_txn_description : 明細の備考欄</li>       <li>         segment_1_tag : セグメント1(法人向けプロフェッショナル, 法人向けエンタープライズプラン)<br>         segment_2_tag : セグメント2(法人向け エンタープライズプラン)<br>         segment_3_tag : セグメント3(法人向け エンタープライズプラン)<br><br>         <a href=\"https://support.freee.co.jp/hc/ja/articles/360020679611-%E3%82%BB%E3%82%B0%E3%83%A1%E3%83%B3%E3%83%88-%E5%88%86%E6%9E%90%E7%94%A8%E3%82%BF%E3%82%B0-%E3%81%AE%E8%A8%AD%E5%AE%9A\" target=\"_blank\">セグメント（分析用タグ）の設定</a><br>       </li>       <li>all : 指定された場合は上記の設定をすべて有効として扱いますが、セグメント1、セグメント2、セグメント3は含みません。セグメントが必要な場合はallではなく、segment_1_tag, segment_2_tag, segment_3_tagを指定してください。</li> </ul> </li> <li>id : 受け付けID</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\JournalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$download_type = 'download_type_example'; // string | ダウンロード形式
$company_id = 56; // int | 事業所ID
$visible_tags = array('visible_tags_example'); // string[] | 補助科目やコメントとして出力する項目
$start_date = 'start_date_example'; // string | 取得開始日 (yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 取得終了日 (yyyy-mm-dd)

try {
    $result = $apiInstance->getJournals($download_type, $company_id, $visible_tags, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalsApi->getJournals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **download_type** | **string**| ダウンロード形式 |
 **company_id** | **int**| 事業所ID |
 **visible_tags** | [**string[]**](../Model/string.md)| 補助科目やコメントとして出力する項目 | [optional]
 **start_date** | **string**| 取得開始日 (yyyy-mm-dd) | [optional]
 **end_date** | **string**| 取得終了日 (yyyy-mm-dd) | [optional]

### Return type

[**\Freee\Accounting\Model\JournalsResponse**](../Model/JournalsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

