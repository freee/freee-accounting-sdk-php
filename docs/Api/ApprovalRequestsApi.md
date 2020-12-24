# Freee\Accounting\ApprovalRequestsApi

All URIs are relative to https://api.freee.co.jp.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createApprovalRequest()**](ApprovalRequestsApi.md#createApprovalRequest) | **POST** /api/1/approval_requests | 各種申請の作成
[**destroyApprovalRequest()**](ApprovalRequestsApi.md#destroyApprovalRequest) | **DELETE** /api/1/approval_requests/{id} | 各種申請の削除
[**getApprovalRequest()**](ApprovalRequestsApi.md#getApprovalRequest) | **GET** /api/1/approval_requests/{id} | 各種申請の取得
[**getApprovalRequestForm()**](ApprovalRequestsApi.md#getApprovalRequestForm) | **GET** /api/1/approval_requests/forms/{id} | 各種申請の申請フォームの取得
[**getApprovalRequestForms()**](ApprovalRequestsApi.md#getApprovalRequestForms) | **GET** /api/1/approval_requests/forms | 各種申請の申請フォーム一覧の取得
[**getApprovalRequests()**](ApprovalRequestsApi.md#getApprovalRequests) | **GET** /api/1/approval_requests | 各種申請の一覧
[**updateApprovalRequest()**](ApprovalRequestsApi.md#updateApprovalRequest) | **PUT** /api/1/approval_requests/{id} | 各種申請の更新
[**updateApprovalRequestAction()**](ApprovalRequestsApi.md#updateApprovalRequestAction) | **POST** /api/1/approval_requests/{id}/actions | 各種申請の承認操作


## `createApprovalRequest()`

```php
createApprovalRequest($approval_request_create_params): \Freee\Accounting\Model\ApprovalRequestResponse
```

各種申請の作成

<h2 id=\"_1\">概要</h2>  <p>指定した事業所の各種申請を作成する</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>本APIでは、各種申請を作成することができます。</li>   <li>     申請項目(request_items)については、申請フォームで設定された項目のIDとそれに対応する値を入力してください。     <ul>       <li>タイトル(title)：文字列(改行なし) 例)予算申請</li>       <li>1行コメント(single_line)：文字列(改行なし) 例)予算に関する申請</li>       <li>複数行コメント(multi_line)：文字列(改行あり)       <br>       &nbsp;&nbsp;例)<br>       &nbsp;&nbsp;予算に関する申請<br>       &nbsp;&nbsp;申請日 2020-01-01<br>       </li>       <li>プルダウン(select)： プルダウンの選択肢の名前(改行なし) 例)開発部</li>       <li>日付(date)： 日付形式 例)2020-01-01</li>       <li>金額(amount)： 数値(申請フォームで設定した上限・下限金額内の値, 改行なし) 例)10000</li>       <li>添付ファイル(receipt)： ファイルボックスAPIのID 例)1</li>     </ul>   </li>   <li>     申請ステータス(下書き、申請中)の指定と変更、及び承認操作（承認する、却下する、申請者へ差し戻す、代理承認する、承認済み・却下済みを取り消す）は以下を参考にして行ってください。     <ul>       <li>         承認操作は申請ステータスが申請中、承認済み、却下のものだけが対象です。         <ul>           <li>             初回申請の場合             <ul><li>申請の作成（POST）</li></ul>           </li>           <li>             作成済みの申請の申請ステータス変更・更新する場合             <ul><li>申請の更新（PUT）</li></ul>           </li>           <li>             申請中、承認済み、却下の申請の承認操作を行う場合             <ul><li>承認操作の実行（POST）</li></ul>           </li>         </ul>       </li>       <li>申請の削除（DELETE）が可能なのは申請ステータスが下書き、差戻しの場合のみです</li>     </ul>   </li>   <li>     申請経路、承認者の指定として部門役職データ連携を活用し、以下のいずれかを利用している各種申請は本API経由で作成ができません。     <ul>       <li>役職指定（申請者の所属部門）</li>       <li>役職指定（申請時に部門指定）</li>       <li>部門および役職指定</li>     </ul>   </li>   <li>Web画面やAPIを通じて申請フォームが変更されると、本APIで使用する項目ID（request_itemsで指定するid）も変更されます。本API利用前に各種申請の取得APIを利用し、最新の申請フォームを取得することを推奨します。</li>   <li>本APIはエンタープライズプランをご利用の事業所のみ利用可能です。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$approval_request_create_params = new \Freee\Accounting\Model\ApprovalRequestCreateParams(); // \Freee\Accounting\Model\ApprovalRequestCreateParams | 各種申請の作成

try {
    $result = $apiInstance->createApprovalRequest($approval_request_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->createApprovalRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **approval_request_create_params** | [**\Freee\Accounting\Model\ApprovalRequestCreateParams**](../Model/ApprovalRequestCreateParams.md)| 各種申請の作成 | [optional]

### Return type

[**\Freee\Accounting\Model\ApprovalRequestResponse**](../Model/ApprovalRequestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyApprovalRequest()`

```php
destroyApprovalRequest($id, $company_id)
```

各種申請の削除

<h2 id=\"\">概要</h2>  <p>指定した事業所の各種申請を削除する</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>     申請ステータス(下書き、申請中)の指定と変更、及び承認操作（承認する、却下する、申請者へ差し戻す、代理承認する、承認済み・却下済みを取り消す）は以下を参考にして行ってください。     <ul>       <li>         承認操作は申請ステータスが申請中、承認済み、却下のものだけが対象です。         <ul>           <li>             初回申請の場合             <ul><li>申請の作成（POST）</li></ul>           </li>           <li>             作成済みの申請の申請ステータス変更・更新する場合             <ul><li>申請の更新（PUT）</li></ul>           </li>           <li>             申請中、承認済み、却下の申請の承認操作を行う場合             <ul><li>承認操作の実行（POST）</li></ul>           </li>         </ul>       </li>       <li>申請の削除（DELETE）が可能なのは申請ステータスが下書き、差戻しの場合のみです</li>     </ul>   </li>   <li>本APIはエンタープライズプランをご利用の事業所のみ利用可能です。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 各種申請ID
$company_id = 56; // int | 事業所ID

try {
    $apiInstance->destroyApprovalRequest($id, $company_id);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->destroyApprovalRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 各種申請ID |
 **company_id** | **int**| 事業所ID |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalRequest()`

```php
getApprovalRequest($id, $company_id): \Freee\Accounting\Model\ApprovalRequestResponse
```

各種申請の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の各種申請を取得する</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>     申請経路、承認者の指定として部門役職データ連携を活用し、以下のいずれかを利用している各種申請と申請経路はAPI経由で参照は可能ですが、作成と更新、承認ステータスの変更ができません。     <ul>       <li>役職指定（申請者の所属部門）</li>       <li>役職指定（申請時に部門指定）</li>       <li>部門および役職指定</li>     </ul>   </li>   <li>本APIはエンタープライズプランをご利用の事業所のみ利用可能です。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 各種申請ID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getApprovalRequest($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->getApprovalRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 各種申請ID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\ApprovalRequestResponse**](../Model/ApprovalRequestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalRequestForm()`

```php
getApprovalRequestForm($id, $company_id): \Freee\Accounting\Model\ApprovalRequestFormResponse
```

各種申請の申請フォームの取得

<h2 id=\"_1\">概要</h2>  <p>指定した事業所の各種申請の申請フォームを取得する</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>本APIはエンタープライズプランをご利用の事業所のみ利用可能です。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 申請フォームID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getApprovalRequestForm($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->getApprovalRequestForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 申請フォームID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\ApprovalRequestFormResponse**](../Model/ApprovalRequestFormResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalRequestForms()`

```php
getApprovalRequestForms($company_id): \Freee\Accounting\Model\InlineResponse200
```

各種申請の申請フォーム一覧の取得

<h2 id=\"_1\">概要</h2>  <p>指定した事業所の各種申請の申請フォーム一覧を取得する</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>本APIはエンタープライズプランをご利用の事業所のみ利用可能です。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getApprovalRequestForms($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->getApprovalRequestForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalRequests()`

```php
getApprovalRequests($company_id, $status, $application_number, $title, $form_id, $start_application_date, $end_application_date, $applicant_id, $approver_id, $offset, $limit): \Freee\Accounting\Model\ApprovalRequestsIndexResponse
```

各種申請の一覧

<h2 id=\"_1\">概要</h2>  <p>指定した事業所の各種申請一覧を取得する</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>本APIでは、各種申請の一覧を取得することができます。</li>   <li>     申請経路、承認者の指定として部門役職データ連携を活用し、以下のいずれかを利用している各種申請と申請経路はAPI経由で参照は可能ですが、作成と更新、承認ステータスの変更ができません。     <ul>       <li>役職指定（申請者の所属部門）</li>       <li>役職指定（申請時に部門指定）</li>       <li>部門および役職指定</li>     </ul>   </li>   <li>本APIはエンタープライズプランをご利用の事業所のみ利用可能です。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$status = draft; // string | 申請ステータス(draft:下書き, in_progress:申請中, approved:承認済, rejected:却下, feedback:差戻し)
$application_number = 2; // int | 申請No.
$title = 大阪出張; // string | 申請タイトル
$form_id = 56; // int | 申請フォームID
$start_application_date = 'start_application_date_example'; // string | 申請日で絞込：開始日(yyyy-mm-dd)
$end_application_date = 'end_application_date_example'; // string | 申請日で絞込：終了日(yyyy-mm-dd)
$applicant_id = 56; // int | 申請者のユーザーID
$approver_id = 1; // int | 承認者のユーザーID
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 500)

try {
    $result = $apiInstance->getApprovalRequests($company_id, $status, $application_number, $title, $form_id, $start_application_date, $end_application_date, $applicant_id, $approver_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->getApprovalRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **status** | **string**| 申請ステータス(draft:下書き, in_progress:申請中, approved:承認済, rejected:却下, feedback:差戻し) | [optional]
 **application_number** | **int**| 申請No. | [optional]
 **title** | **string**| 申請タイトル | [optional]
 **form_id** | **int**| 申請フォームID | [optional]
 **start_application_date** | **string**| 申請日で絞込：開始日(yyyy-mm-dd) | [optional]
 **end_application_date** | **string**| 申請日で絞込：終了日(yyyy-mm-dd) | [optional]
 **applicant_id** | **int**| 申請者のユーザーID | [optional]
 **approver_id** | **int**| 承認者のユーザーID | [optional]
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 500) | [optional]

### Return type

[**\Freee\Accounting\Model\ApprovalRequestsIndexResponse**](../Model/ApprovalRequestsIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApprovalRequest()`

```php
updateApprovalRequest($id, $approval_request_update_params): \Freee\Accounting\Model\ApprovalRequestResponse
```

各種申請の更新

<h2 id=\"_1\">概要</h2>  <p>指定した事業所の各種申請を更新する</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>本APIでは、各種申請を更新することができます。</li>   <li>     申請項目(request_items)については、各種申請の取得APIで取得したrequest_items.idとそれに対応する値を入力してください。     <ul>       <li>タイトル(title)：文字列(改行なし) 例)予算申請</li>       <li>1行コメント(single_line)：文字列(改行なし) 例)予算に関する申請</li>       <li>複数行コメント(multi_line)：文字列(改行あり)       <br>       &nbsp;&nbsp;例)<br>       &nbsp;&nbsp;予算に関する申請<br>       &nbsp;&nbsp;申請日 2020-01-01<br>       </li>       <li>プルダウン(select)： プルダウンの選択肢の名前(改行なし) 例)開発部</li>       <li>日付(date)： 日付形式 例)2020-01-01</li>       <li>金額(amount)： 数値(申請フォームで設定した上限・下限金額内の値, 改行なし) 例)10000</li>       <li>添付ファイル(receipt)： ファイルボックスAPIのID 例)1</li>     </ul>   </li>   <li>本APIでは、status(申請ステータス): draft:下書き, feedback:差戻しのみ更新可能です。</li>   <li>     申請ステータス(下書き、申請中)の指定と変更、及び承認操作（承認する、却下する、申請者へ差し戻す、代理承認する、承認済み・却下済みを取り消す）は以下を参考にして行ってください。     <ul>       <li>         承認操作は申請ステータスが申請中、承認済み、却下のものだけが対象です。         <ul>           <li>             初回申請の場合             <ul><li>申請の作成（POST）</li></ul>           </li>           <li>             作成済みの申請の申請ステータス変更・更新する場合             <ul><li>申請の更新（PUT）</li></ul>           </li>           <li>             申請中、承認済み、却下の申請の承認操作を行う場合             <ul><li>承認操作の実行（POST）</li></ul>           </li>         </ul>       </li>       <li>申請の削除（DELETE）が可能なのは申請ステータスが下書き、差戻しの場合のみです</li>     </ul>   </li>   <li>     申請経路、承認者の指定として部門役職データ連携を活用し、以下のいずれかを利用している各種申請は本API経由で更新ができません。     <ul>       <li>役職指定（申請者の所属部門）</li>       <li>役職指定（申請時に部門指定）</li>       <li>部門および役職指定</li>     </ul>   </li>   <li>Web画面やAPIを通じて申請フォームが変更されると、本APIで使用する項目ID（request_itemsで指定するid）も変更されます。本APIで使用する項目IDは申請作成時点の項目IDです。本API利用前に各種申請の取得APIを利用し、申請作成時点の項目IDを取得することを推奨します。</li>   <li>本APIはエンタープライズプランをご利用の事業所のみ利用可能です。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 各種申請ID
$approval_request_update_params = new \Freee\Accounting\Model\ApprovalRequestUpdateParams(); // \Freee\Accounting\Model\ApprovalRequestUpdateParams | 各種申請の更新

try {
    $result = $apiInstance->updateApprovalRequest($id, $approval_request_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->updateApprovalRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 各種申請ID |
 **approval_request_update_params** | [**\Freee\Accounting\Model\ApprovalRequestUpdateParams**](../Model/ApprovalRequestUpdateParams.md)| 各種申請の更新 |

### Return type

[**\Freee\Accounting\Model\ApprovalRequestResponse**](../Model/ApprovalRequestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApprovalRequestAction()`

```php
updateApprovalRequestAction($id, $approval_request_action_create_params): \Freee\Accounting\Model\ApprovalRequestResponse
```

各種申請の承認操作

<h2 id=\"_1\">概要</h2>  <p>指定した事業所の各種申請の承認操作を行う</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"_2\">注意点</h2> <ul>   <li>本APIでは、各種申請の承認操作（承認する、却下する、申請者へ差し戻す、代理承認する、承認済み・却下済みを取り消す）を行うことができます。</li>   <li>     申請ステータス(下書き、申請中)の指定と変更、及び承認操作（承認する、却下する、申請者へ差し戻す、代理承認する、承認済み・却下済みを取り消す）は以下を参考にして行ってください。     <ul>       <li>         承認操作は申請ステータスが申請中、承認済み、却下のものだけが対象です。         <ul>           <li>             初回申請の場合             <ul><li>申請の作成（POST）</li></ul>           </li>           <li>             作成済みの申請の申請ステータス変更・更新する場合             <ul><li>申請の更新（PUT）</li></ul>           </li>           <li>             申請中、承認済み、却下の申請の承認操作を行う場合             <ul><li>承認操作の実行（POST）</li></ul>           </li>         </ul>       </li>       <li>申請の削除（DELETE）が可能なのは申請ステータスが下書き、差戻しの場合のみです</li>     </ul>   </li> 　<li>     申請経路、承認者の指定として部門役職データ連携を活用し、以下のいずれかを利用している各種申請はAPI経由で承認ステータスの変更ができません。     <ul>       <li>役職指定（申請者の所属部門）</li>       <li>役職指定（申請時に部門指定）</li>       <li>部門および役職指定</li>     </ul>   </li>   <li>本APIはエンタープライズプランをご利用の事業所のみ利用可能です。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 各種申請ID
$approval_request_action_create_params = new \Freee\Accounting\Model\ApprovalRequestActionCreateParams(); // \Freee\Accounting\Model\ApprovalRequestActionCreateParams | 各種申請の承認操作

try {
    $result = $apiInstance->updateApprovalRequestAction($id, $approval_request_action_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalRequestsApi->updateApprovalRequestAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 各種申請ID |
 **approval_request_action_create_params** | [**\Freee\Accounting\Model\ApprovalRequestActionCreateParams**](../Model/ApprovalRequestActionCreateParams.md)| 各種申請の承認操作 |

### Return type

[**\Freee\Accounting\Model\ApprovalRequestResponse**](../Model/ApprovalRequestResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
