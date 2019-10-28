# Freee\Accounting\TrialBalanceApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTrialBs**](TrialBalanceApi.md#getTrialBs) | **GET** /reports/trial_bs | 貸借対照表の取得
[**getTrialBsThreeYears**](TrialBalanceApi.md#getTrialBsThreeYears) | **GET** /reports/trial_bs_three_years | 貸借対照表(３期間比較)の取得
[**getTrialBsTwoYears**](TrialBalanceApi.md#getTrialBsTwoYears) | **GET** /reports/trial_bs_two_years | 貸借対照表(前年比較)の取得
[**getTrialPl**](TrialBalanceApi.md#getTrialPl) | **GET** /reports/trial_pl | 損益計算書の取得
[**getTrialPlSections**](TrialBalanceApi.md#getTrialPlSections) | **GET** /reports/trial_pl_sections | 損益計算書(部門比較)の取得
[**getTrialPlThreeYears**](TrialBalanceApi.md#getTrialPlThreeYears) | **GET** /reports/trial_pl_three_years | 損益計算書(３期間比較)の取得
[**getTrialPlTwoYears**](TrialBalanceApi.md#getTrialPlTwoYears) | **GET** /reports/trial_pl_two_years | 損益計算書(前年比較)の取得



## getTrialBs

> \Freee\Accounting\Model\TrialBsResponse getTrialBs($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment)

貸借対照表の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の貸借対照表を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul>  <li> <p>created_at : 作成日時</p> </li>  <li> <p>account_item_name : 勘定科目名</p> </li>  <li> <p>hierarchy_level: 階層レベル</p> </li>  <li> <p>parent_account_item_name: 親の勘定科目名</p> </li> <li> <p>opening_balance : 期首残高 </p> </li>  <li> <p>debit_amount : 借方金額 </p> </li> <li> <p>credit_amount:  貸方金額 </p> </li> <li> <p>closing_balance : 期末残高 </p> </li> <li> <p>composition_ratio : 構成比</p> </li> <h2 id=\"_3\">注意点</h2> <ul> <li>会計年度が指定されない場合、現在の会計年度がデフォルトとなります。</li> <li>絞り込み条件の日付と、月または年度は同時に指定することはできません。</li> </ul> <h2 id=\"_4\">レスポンスの例</h2>  <blockquote> <p>GET https://api.freee.co.jp/api/1/reports/trial_bs?company_id=1&amp;fiscal_year=2017&amp;breakdown_display_type=partner</p> </blockquote>  <pre><code>{   &quot;trial_bs&quot; :     {       &quot;company_id&quot; : 1,       &quot;fiscal_year&quot; : 2017,       &quot;breakdown_display_type&quot; : &quot;partner&quot;,       &quot;created_at&quot; : &quot;2018-05-01 12:00:50&quot       &quot;balances&quot; : [{         &quot;account_item_id&quot; : 1000,         &quot;account_item_name&quot; : &quot;現金&quot;,         &quot;hierarchy_level&quot; : 2,         &quot;parent_account_item_id&quot; : 100;         &quot;parent_account_item_name&quot; : &quot;流動資産&quot;,         &quot;opening_balance&quot; : 100000,         &quot;debit_amount&quot; : 50000,         &quot;credit_amount&quot; : 20000,         &quot;closing_balance&quot; : 130000,         &quot;composition_ratio&quot; : 0.25         &quot;partners&quot; : [{           &quot;id&quot; : 123,           &quot;name&quot; : &quot;freee&quot;,           &quot;long_name&quot; : &quot;freee株式会社&quot;,           &quot;opening_balance&quot; : 100000,           &quot;debit_amount&quot; : 50000,           &quot;credit_amount&quot; : 20000,           &quot;closing_balance&quot; : 130000,           &quot;composition_ratio&quot; : 0.25           },         ...         ]       },       ...       ]     } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TrialBalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$fiscal_year = 56; // int | 会計年度
$start_month = 56; // int | 発生月で絞込：開始会計月(mm)
$end_month = 56; // int | 発生月で絞込：終了会計月(mm)
$start_date = 'start_date_example'; // string | 発生日で絞込：開始日(yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 発生日で絞込：終了日(yyyy-mm-dd)
$account_item_display_type = 'account_item_display_type_example'; // string | 勘定科目の表示（勘定科目: account_item, 決算書表示:group）
$breakdown_display_type = 'breakdown_display_type_example'; // string | 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます
$partner_id = 56; // int | 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます）
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です）
$item_id = 56; // int | 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます）
$adjustment = 'adjustment_example'; // string | 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without）

try {
    $result = $apiInstance->getTrialBs($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrialBalanceApi->getTrialBs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **fiscal_year** | **int**| 会計年度 | [optional]
 **start_month** | **int**| 発生月で絞込：開始会計月(mm) | [optional]
 **end_month** | **int**| 発生月で絞込：終了会計月(mm) | [optional]
 **start_date** | **string**| 発生日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_date** | **string**| 発生日で絞込：終了日(yyyy-mm-dd) | [optional]
 **account_item_display_type** | **string**| 勘定科目の表示（勘定科目: account_item, 決算書表示:group） | [optional]
 **breakdown_display_type** | **string**| 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます | [optional]
 **partner_id** | **int**| 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） | [optional]
 **partner_code** | **string**| 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） | [optional]
 **item_id** | **int**| 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） | [optional]
 **adjustment** | **string**| 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） | [optional]

### Return type

[**\Freee\Accounting\Model\TrialBsResponse**](../Model/TrialBsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrialBsThreeYears

> \Freee\Accounting\Model\TrialBsThreeYearsResponse getTrialBsThreeYears($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment)

貸借対照表(３期間比較)の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の貸借対照表(３期間比較)を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul>  <li> <p>created_at : 作成日時</p> </li>  <li> <p>account_item_name : 勘定科目名</p> </li>  <li> <p>hierarchy_level: 階層レベル</p> </li>  <li> <p>parent_account_item_name: 親の勘定科目名</p> </li> <li> <p>two_years_before_closing_balance:  前々年度期末残高 </p> </li> <li> <p>last_year_closing_balance:  前年度期末残高 </p> </li> <li> <p>closing_balance : 期末残高 </p> </li> <li> <p>year_on_year : 前年比</p> </li> <h2 id=\"_3\">注意点</h2> <ul> <li>会計年度が指定されない場合、現在の会計年度がデフォルトとなります。</li> <li>絞り込み条件の日付と、月または年度は同時に指定することはできません。</li> </ul> <h2 id=\"_4\">レスポンスの例</h2>  <blockquote> <p>GET https://api.freee.co.jp/api/1/reports/trial_bs_three_years?company_id=1&amp;fiscal_year=2017</p> </blockquote>  <pre><code>{   &quot;trial_bs_three_years&quot; :     {       &quot;company_id&quot; : 1,       &quot;fiscal_year&quot; : 2017,       &quot;created_at&quot; : &quot;2018-05-01 12:00:50&quot       &quot;balances&quot; : [{         &quot;account_item_id&quot; : 1000,         &quot;account_item_name&quot; : &quot;現金&quot;,         &quot;hierarchy_level&quot; : 2,         &quot;parent_account_item_id&quot; : 100;         &quot;parent_account_item_name&quot; : &quot;流動資産&quot;,         &quot;two_year_before_closing_balance&quot; : 50000,         &quot;last_year_closing_balance&quot; : 25000,         &quot;closing_balance&quot; : 100000,         &quot;year_on_year&quot; : 0.85       },       ...       ]     } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TrialBalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$fiscal_year = 56; // int | 会計年度
$start_month = 56; // int | 発生月で絞込：開始会計月(mm)
$end_month = 56; // int | 発生月で絞込：終了会計月(mm)
$start_date = 'start_date_example'; // string | 発生日で絞込：開始日(yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 発生日で絞込：終了日(yyyy-mm-dd)
$account_item_display_type = 'account_item_display_type_example'; // string | 勘定科目の表示（勘定科目: account_item, 決算書表示:group）
$breakdown_display_type = 'breakdown_display_type_example'; // string | 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます
$partner_id = 56; // int | 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます）
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です）
$item_id = 56; // int | 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます）
$adjustment = 'adjustment_example'; // string | 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without）

try {
    $result = $apiInstance->getTrialBsThreeYears($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrialBalanceApi->getTrialBsThreeYears: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **fiscal_year** | **int**| 会計年度 | [optional]
 **start_month** | **int**| 発生月で絞込：開始会計月(mm) | [optional]
 **end_month** | **int**| 発生月で絞込：終了会計月(mm) | [optional]
 **start_date** | **string**| 発生日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_date** | **string**| 発生日で絞込：終了日(yyyy-mm-dd) | [optional]
 **account_item_display_type** | **string**| 勘定科目の表示（勘定科目: account_item, 決算書表示:group） | [optional]
 **breakdown_display_type** | **string**| 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます | [optional]
 **partner_id** | **int**| 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） | [optional]
 **partner_code** | **string**| 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） | [optional]
 **item_id** | **int**| 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） | [optional]
 **adjustment** | **string**| 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） | [optional]

### Return type

[**\Freee\Accounting\Model\TrialBsThreeYearsResponse**](../Model/TrialBsThreeYearsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrialBsTwoYears

> \Freee\Accounting\Model\TrialBsTwoYearsResponse getTrialBsTwoYears($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment)

貸借対照表(前年比較)の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の貸借対照表(前年比較)を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul>  <li> <p>created_at : 作成日時</p> </li>  <li> <p>account_item_name : 勘定科目名</p> </li>  <li> <p>hierarchy_level: 階層レベル</p> </li>  <li> <p>parent_account_item_name: 親の勘定科目名</p> </li> <li> <p>last_year_closing_balance:  前年度期末残高 </p> </li> <li> <p>closing_balance : 期末残高 </p> </li> <h2 id=\"_3\">注意点</h2> <ul> <li>会計年度が指定されない場合、現在の会計年度がデフォルトとなります。</li> <li>絞り込み条件の日付と、月または年度は同時に指定することはできません。</li> </ul>  <h2 id=\"_4\">レスポンスの例</h2>  <blockquote> <p>GET https://api.freee.co.jp/api/1/reports/trial_bs_two_years?company_id=1&amp;fiscal_year=2017</p> </blockquote>  <pre><code>{   &quot;trial_bs_two_years&quot; :     {       &quot;company_id&quot; : 1,       &quot;fiscal_year&quot; : 2017,       &quot;created_at&quot; : &quot;2018-05-01 12:00:50&quot       &quot;balances&quot; : [{         &quot;account_item_id&quot; : 1000,         &quot;account_item_name&quot; : &quot;現金&quot;,         &quot;hierarchy_level&quot; : 2,         &quot;parent_account_item_id&quot; : 100;         &quot;parent_account_item_name&quot; : &quot;流動資産&quot;,         &quot;last_year_closing_balance&quot; : 25000,         &quot;closing_balance&quot; : 100000,         &quot;year_on_year&quot; : 0.85        },       ...       ]     } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TrialBalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$fiscal_year = 56; // int | 会計年度
$start_month = 56; // int | 発生月で絞込：開始会計月(mm)
$end_month = 56; // int | 発生月で絞込：終了会計月(mm)
$start_date = 'start_date_example'; // string | 発生日で絞込：開始日(yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 発生日で絞込：終了日(yyyy-mm-dd)
$account_item_display_type = 'account_item_display_type_example'; // string | 勘定科目の表示（勘定科目: account_item, 決算書表示:group）
$breakdown_display_type = 'breakdown_display_type_example'; // string | 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます
$partner_id = 56; // int | 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます）
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です）
$item_id = 56; // int | 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます）
$adjustment = 'adjustment_example'; // string | 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without）

try {
    $result = $apiInstance->getTrialBsTwoYears($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrialBalanceApi->getTrialBsTwoYears: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **fiscal_year** | **int**| 会計年度 | [optional]
 **start_month** | **int**| 発生月で絞込：開始会計月(mm) | [optional]
 **end_month** | **int**| 発生月で絞込：終了会計月(mm) | [optional]
 **start_date** | **string**| 発生日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_date** | **string**| 発生日で絞込：終了日(yyyy-mm-dd) | [optional]
 **account_item_display_type** | **string**| 勘定科目の表示（勘定科目: account_item, 決算書表示:group） | [optional]
 **breakdown_display_type** | **string**| 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます | [optional]
 **partner_id** | **int**| 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） | [optional]
 **partner_code** | **string**| 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） | [optional]
 **item_id** | **int**| 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） | [optional]
 **adjustment** | **string**| 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） | [optional]

### Return type

[**\Freee\Accounting\Model\TrialBsTwoYearsResponse**](../Model/TrialBsTwoYearsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrialPl

> \Freee\Accounting\Model\TrialPlResponse getTrialPl($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation)

損益計算書の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の損益計算書を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul>  <li> <p>created_at : 作成日時</p> </li>  <li> <p>account_item_name : 勘定科目名</p> </li>  <li> <p>hierarchy_level: 階層レベル</p> </li>  <li> <p>parent_account_item_name: 親の勘定科目名</p> </li> <li> <p>opening_balance : 期首残高 </p> </li>  <li> <p>debit_amount : 借方金額 </p> </li> <li> <p>credit_amount:  貸方金額 </p> </li> <li> <p>closing_balance : 期末残高 </p> </li> <li> <p>composition_ratio : 構成比</p> </li> <h2 id=\"_3\">注意点</h2> <ul> <li>会計年度が指定されない場合、現在の会計年度がデフォルトとなります。</li> <li>絞り込み条件の日付と、月または年度は同時に指定することはできません。</li> </ul> <h2 id=\"_4\">レスポンスの例</h2>  <blockquote> <p>GET https://api.freee.co.jp/api/1/reports/trial_pl?company_id=1&amp;fiscal_year=2017&amp;breakdown_display_type=partner</p> </blockquote>  <pre><code>{   &quot;trial_pl&quot; :     {       &quot;company_id&quot; : 1,       &quot;fiscal_year&quot; : 2017,       &quot;breakdown_display_type&quot; : &quot;partner&quot;,       &quot;created_at&quot; : &quot;2018-05-01 12:00:50&quot       &quot;balances&quot; : [{         &quot;account_item_id&quot; : 1500,         &quot;account_item_name&quot; : &quot;売上高&quot;,         &quot;hierarchy_level&quot; : 2,         &quot;parent_account_item_id&quot; : 100;         &quot;parent_account_item_name&quot; : &quot;営業収益&quot;,         &quot;opening_balance&quot; : 100000,         &quot;debit_amount&quot; : 50000,         &quot;credit_amount&quot; : 20000,         &quot;closing_balance&quot; : 130000,         &quot;composition_ratio&quot; : 0.25         &quot;partners&quot; : [{           &quot;id&quot; : 123,           &quot;name&quot; : &quot;freee&quot;,           &quot;long_name&quot; : &quot;freee株式会社&quot;,           &quot;opening_balance&quot; : 100000,           &quot;debit_amount&quot; : 50000,           &quot;credit_amount&quot; : 20000,           &quot;closing_balance&quot; : 130000,           &quot;composition_ratio&quot; : 0.25           },         ...         ]       },       ...       ]     } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TrialBalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$fiscal_year = 56; // int | 会計年度
$start_month = 56; // int | 発生月で絞込：開始会計月(mm)
$end_month = 56; // int | 発生月で絞込：終了会計月(mm)
$start_date = 'start_date_example'; // string | 発生日で絞込：開始日(yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 発生日で絞込：終了日(yyyy-mm-dd)
$account_item_display_type = 'account_item_display_type_example'; // string | 勘定科目の表示（勘定科目: account_item, 決算書表示:group）
$breakdown_display_type = 'breakdown_display_type_example'; // string | 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます
$partner_id = 56; // int | 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます）
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です）
$item_id = 56; // int | 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます）
$section_id = 56; // int | 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます）
$adjustment = 'adjustment_example'; // string | 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without）
$cost_allocation = 'cost_allocation_example'; // string | 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without）

try {
    $result = $apiInstance->getTrialPl($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrialBalanceApi->getTrialPl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **fiscal_year** | **int**| 会計年度 | [optional]
 **start_month** | **int**| 発生月で絞込：開始会計月(mm) | [optional]
 **end_month** | **int**| 発生月で絞込：終了会計月(mm) | [optional]
 **start_date** | **string**| 発生日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_date** | **string**| 発生日で絞込：終了日(yyyy-mm-dd) | [optional]
 **account_item_display_type** | **string**| 勘定科目の表示（勘定科目: account_item, 決算書表示:group） | [optional]
 **breakdown_display_type** | **string**| 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます | [optional]
 **partner_id** | **int**| 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） | [optional]
 **partner_code** | **string**| 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） | [optional]
 **item_id** | **int**| 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） | [optional]
 **section_id** | **int**| 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） | [optional]
 **adjustment** | **string**| 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） | [optional]
 **cost_allocation** | **string**| 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） | [optional]

### Return type

[**\Freee\Accounting\Model\TrialPlResponse**](../Model/TrialPlResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrialPlSections

> \Freee\Accounting\Model\TrialPlSectionsResponse getTrialPlSections($company_id, $section_ids, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment, $cost_allocation)

損益計算書(部門比較)の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の損益計算書(部門比較)を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul>  <li> <p>created_at : 作成日時</p> </li>  <li> <p>account_item_name : 勘定科目名</p> </li>  <li> <p>hierarchy_level: 階層レベル</p> </li>  <li> <p>parent_account_item_name: 親の勘定科目名</p> </li> <li> <p>closing_balance : 期末残高 </p> </li> <h2 id=\"_3\">注意点</h2> <ul> <li>個人向けのプレミアムプラン、法人向けのビジネスプラン以上で利用可能なAPIです。対象外のプランでは401エラーを返却します。</li> <li>会計年度が指定されない場合、現在の会計年度がデフォルトとなります。</li> <li>絞り込み条件の日付と、月または年度は同時に指定することはできません。</li> </ul> <h2 id=\"_4\">レスポンスの例</h2>  <blockquote> <p>GET https://api.freee.co.jp/api/1/reports/trial_pl_three_years?company_id=1&amp;section_ids=1,2,3&amp;fiscal_year=2017</p></p> </blockquote>  <pre><code>{   &quot;trial_pl_sections&quot; :     {       &quot;company_id&quot; : 1,       &quot;section_ids&quot; : &quot;1,2,3&quot;,       &quot;fiscal_year&quot; : 2017,       &quot;created_at&quot; : &quot;2018-05-01 12:00:50&quot       &quot;balances&quot; : [{         &quot;account_item_id&quot; : 1500,         &quot;account_item_name&quot; : &quot;売上高&quot;,         &quot;hierarchy_level&quot; : 2,         &quot;parent_account_item_id&quot; : 100;         &quot;parent_account_item_name&quot; : &quot;営業収益&quot;,         &quot;closing_balance&quot; : 1000000,         &quot;sections&quot; : [{           &quot;id&quot;: 1           &quot;name&quot;: &quot;営業部&quot;,           &quot;closing_balance&quot; : 100000         },         {           &quot;id&quot;: 2           &quot;name&quot;: &quot;広報部&quot;,           &quot;closing_balance&quot; : 200000         },         {           &quot;id&quot;: 3           &quot;name&quot;: &quot;人事部&quot;,           &quot;closing_balance&quot; : 300000         },         ...         ]       },       ...       ]     } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TrialBalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$section_ids = 'section_ids_example'; // string | 出力する部門の指定（半角数字のidを半角カンマ区切りスペースなしで指定してください）
$fiscal_year = 56; // int | 会計年度
$start_month = 56; // int | 発生月で絞込：開始会計月(mm)
$end_month = 56; // int | 発生月で絞込：終了会計月(mm)
$start_date = 'start_date_example'; // string | 発生日で絞込：開始日(yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 発生日で絞込：終了日(yyyy-mm-dd)
$account_item_display_type = 'account_item_display_type_example'; // string | 勘定科目の表示（勘定科目: account_item, 決算書表示:group）
$breakdown_display_type = 'breakdown_display_type_example'; // string | 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます
$partner_id = 56; // int | 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます）
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です）
$item_id = 56; // int | 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます）
$adjustment = 'adjustment_example'; // string | 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without）
$cost_allocation = 'cost_allocation_example'; // string | 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without）

try {
    $result = $apiInstance->getTrialPlSections($company_id, $section_ids, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment, $cost_allocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrialBalanceApi->getTrialPlSections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **section_ids** | **string**| 出力する部門の指定（半角数字のidを半角カンマ区切りスペースなしで指定してください） |
 **fiscal_year** | **int**| 会計年度 | [optional]
 **start_month** | **int**| 発生月で絞込：開始会計月(mm) | [optional]
 **end_month** | **int**| 発生月で絞込：終了会計月(mm) | [optional]
 **start_date** | **string**| 発生日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_date** | **string**| 発生日で絞込：終了日(yyyy-mm-dd) | [optional]
 **account_item_display_type** | **string**| 勘定科目の表示（勘定科目: account_item, 決算書表示:group） | [optional]
 **breakdown_display_type** | **string**| 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます | [optional]
 **partner_id** | **int**| 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） | [optional]
 **partner_code** | **string**| 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） | [optional]
 **item_id** | **int**| 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） | [optional]
 **adjustment** | **string**| 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） | [optional]
 **cost_allocation** | **string**| 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） | [optional]

### Return type

[**\Freee\Accounting\Model\TrialPlSectionsResponse**](../Model/TrialPlSectionsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrialPlThreeYears

> \Freee\Accounting\Model\TrialPlThreeYearsResponse getTrialPlThreeYears($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation)

損益計算書(３期間比較)の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の損益計算書(３期間比較)を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul>  <li> <p>created_at : 作成日時</p> </li>  <li> <p>account_item_name : 勘定科目名</p> </li>  <li> <p>hierarchy_level: 階層レベル</p> </li>  <li> <p>parent_account_item_name: 親の勘定科目名</p> </li> <li> <p>two_years_before_closing_balance:  前々年度期末残高 </p> </li> <li> <p>last_year_closing_balance:  前年度期末残高 </p> </li> <li> <p>closing_balance : 期末残高 </p> </li> <li> <p>year_on_year : 前年比</p> </li> <h2 id=\"_3\">注意点</h2> <ul> <li>会計年度が指定されない場合、現在の会計年度がデフォルトとなります。</li> <li>絞り込み条件の日付と、月または年度は同時に指定することはできません。</li> </ul> <h2 id=\"_4\">レスポンスの例</h2>  <blockquote> <p>GET https://api.freee.co.jp/api/1/reports/trial_pl_three_years?company_id=1&fiscal_year=2017</p> </blockquote>  <pre><code>{   &quot;trial_pl_three_years&quot; :     {       &quot;company_id&quot; : 1,       &quot;fiscal_year&quot; : 2017,       &quot;created_at&quot; : &quot;2018-05-01 12:00:50&quot       &quot;balances&quot; : [{         &quot;account_item_id&quot; : 1500,         &quot;account_item_name&quot; : &quot;売上高&quot;,         &quot;hierarchy_level&quot; : 2,         &quot;parent_account_item_id&quot; : 100;         &quot;parent_account_item_name&quot; : &quot;営業収益&quot;,         &quot;two_year_before_closing_balance&quot; : 50000,         &quot;last_year_closing_balance&quot; : 25000,         &quot;closing_balance&quot; : 100000,         &quot;year_on_year&quot; : 0.85       },       ...       ]     } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TrialBalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$fiscal_year = 56; // int | 会計年度
$start_month = 56; // int | 発生月で絞込：開始会計月(mm)
$end_month = 56; // int | 発生月で絞込：終了会計月(mm)
$start_date = 'start_date_example'; // string | 発生日で絞込：開始日(yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 発生日で絞込：終了日(yyyy-mm-dd)
$account_item_display_type = 'account_item_display_type_example'; // string | 勘定科目の表示（勘定科目: account_item, 決算書表示:group）
$breakdown_display_type = 'breakdown_display_type_example'; // string | 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます
$partner_id = 56; // int | 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます）
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です）
$item_id = 56; // int | 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます）
$section_id = 56; // int | 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます）
$adjustment = 'adjustment_example'; // string | 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without）
$cost_allocation = 'cost_allocation_example'; // string | 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without）

try {
    $result = $apiInstance->getTrialPlThreeYears($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrialBalanceApi->getTrialPlThreeYears: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **fiscal_year** | **int**| 会計年度 | [optional]
 **start_month** | **int**| 発生月で絞込：開始会計月(mm) | [optional]
 **end_month** | **int**| 発生月で絞込：終了会計月(mm) | [optional]
 **start_date** | **string**| 発生日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_date** | **string**| 発生日で絞込：終了日(yyyy-mm-dd) | [optional]
 **account_item_display_type** | **string**| 勘定科目の表示（勘定科目: account_item, 決算書表示:group） | [optional]
 **breakdown_display_type** | **string**| 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます | [optional]
 **partner_id** | **int**| 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） | [optional]
 **partner_code** | **string**| 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） | [optional]
 **item_id** | **int**| 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） | [optional]
 **section_id** | **int**| 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） | [optional]
 **adjustment** | **string**| 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） | [optional]
 **cost_allocation** | **string**| 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） | [optional]

### Return type

[**\Freee\Accounting\Model\TrialPlThreeYearsResponse**](../Model/TrialPlThreeYearsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTrialPlTwoYears

> \Freee\Accounting\Model\TrialPlTwoYearsResponse getTrialPlTwoYears($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation)

損益計算書(前年比較)の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の損益計算書(前年比較)を取得する</p>  <h2 id=\"_2\">定義</h2>  <ul>  <li> <p>created_at : 作成日時</p> </li>  <li> <p>account_item_name : 勘定科目名</p> </li>  <li> <p>hierarchy_level: 階層レベル</p> </li>  <li> <p>parent_account_item_name: 親の勘定科目名</p> </li> <li> <p>last_year_closing_balance:  前年度期末残高 </p> </li> <li> <p>closing_balance : 期末残高 </p> </li> <li> <p>year_on_year : 前年比</p> </li> <h2 id=\"_3\">注意点</h2> <ul> <li>会計年度が指定されない場合、現在の会計年度がデフォルトとなります。</li> <li>絞り込み条件の日付と、月または年度は同時に指定することはできません。</li> </ul>  <h2 id=\"_4\">レスポンスの例</h2>  <blockquote> <p>GET https://api.freee.co.jp/api/1/reports/trial_pl_two_years?company_id=1&amp;fiscal_year=2017</p> </blockquote>  <pre><code>{   &quot;trial_pl_two_years&quot; :     {       &quot;company_id&quot; : 1,       &quot;fiscal_year&quot; : 2017,       &quot;created_at&quot; : &quot;2018-05-01 12:00:50&quot       &quot;balances&quot; : [{         &quot;account_item_id&quot; : 1500,         &quot;account_item_name&quot; : &quot;売上高&quot;,         &quot;hierarchy_level&quot; : 2,         &quot;parent_account_item_id&quot; : 100;         &quot;parent_account_item_name&quot; : &quot;営業収益&quot;,         &quot;last_year_closing_balance&quot; : 25000,         &quot;closing_balance&quot; : 100000,         &quot;year_on_year&quot; : 0.85        },       ...       ]     } }</code></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\TrialBalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$fiscal_year = 56; // int | 会計年度
$start_month = 56; // int | 発生月で絞込：開始会計月(mm)
$end_month = 56; // int | 発生月で絞込：終了会計月(mm)
$start_date = 'start_date_example'; // string | 発生日で絞込：開始日(yyyy-mm-dd)
$end_date = 'end_date_example'; // string | 発生日で絞込：終了日(yyyy-mm-dd)
$account_item_display_type = 'account_item_display_type_example'; // string | 勘定科目の表示（勘定科目: account_item, 決算書表示:group）
$breakdown_display_type = 'breakdown_display_type_example'; // string | 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます
$partner_id = 56; // int | 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます）
$partner_code = 'partner_code_example'; // string | 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です）
$item_id = 56; // int | 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます）
$section_id = 56; // int | 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます）
$adjustment = 'adjustment_example'; // string | 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without）
$cost_allocation = 'cost_allocation_example'; // string | 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without）

try {
    $result = $apiInstance->getTrialPlTwoYears($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrialBalanceApi->getTrialPlTwoYears: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **fiscal_year** | **int**| 会計年度 | [optional]
 **start_month** | **int**| 発生月で絞込：開始会計月(mm) | [optional]
 **end_month** | **int**| 発生月で絞込：終了会計月(mm) | [optional]
 **start_date** | **string**| 発生日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_date** | **string**| 発生日で絞込：終了日(yyyy-mm-dd) | [optional]
 **account_item_display_type** | **string**| 勘定科目の表示（勘定科目: account_item, 決算書表示:group） | [optional]
 **breakdown_display_type** | **string**| 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます | [optional]
 **partner_id** | **int**| 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） | [optional]
 **partner_code** | **string**| 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） | [optional]
 **item_id** | **int**| 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） | [optional]
 **section_id** | **int**| 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） | [optional]
 **adjustment** | **string**| 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） | [optional]
 **cost_allocation** | **string**| 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） | [optional]

### Return type

[**\Freee\Accounting\Model\TrialPlTwoYearsResponse**](../Model/TrialPlTwoYearsResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

