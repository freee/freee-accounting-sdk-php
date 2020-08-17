# Freee\Accounting\ApprovalFlowRoutesApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApprovalFlowRoute**](ApprovalFlowRoutesApi.md#getApprovalFlowRoute) | **GET** /api/1/approval_flow_routes/{id} | 申請経路の取得
[**getApprovalFlowRoutes**](ApprovalFlowRoutesApi.md#getApprovalFlowRoutes) | **GET** /api/1/approval_flow_routes | 申請経路一覧の取得



## getApprovalFlowRoute

> \Freee\Accounting\Model\ApprovalFlowRouteResponse getApprovalFlowRoute($id, $company_id)

申請経路の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の申請経路を取得する</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"\">注意点</h2>  <ul>   <li>     <p>申請経路、承認者の指定として部門役職データ連携を活用し、以下のいずれかを利用している各種申請と申請経路はAPI経由で参照は可能ですが、作成と更新、承認ステータスの変更ができません。</p>     <ul>       <li>役職指定（申請者の所属部門）</li>       <li>役職指定（申請時に部門指定）</li>       <li>部門および役職指定</li>     </ul>   </li>   <li>個人アカウントの場合は、プレミアムプランでご利用できます。</li>   <li>法人アカウントの場合は、ベーシックプラン、プロフェッショナルプラン、エンタープライズプランでご利用できます。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalFlowRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 経路申請ID
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getApprovalFlowRoute($id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalFlowRoutesApi->getApprovalFlowRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 経路申請ID |
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\ApprovalFlowRouteResponse**](../Model/ApprovalFlowRouteResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getApprovalFlowRoutes

> \Freee\Accounting\Model\ApprovalFlowRoutesIndexResponse getApprovalFlowRoutes($company_id, $included_user_id, $usage, $request_form_id)

申請経路一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の申請経路一覧を取得する</p>  <p>各種申請APIの使い方については、<a href=\"https://developer.freee.co.jp/tips/accounting-approval-requests\" target=\"_blank\">会計freeeの各種申請APIの使い方</a>をご参照ください</p>  <h2 id=\"\">注意点</h2>  <ul>   <li>     <p>申請経路、承認者の指定として部門役職データ連携を活用し、以下のいずれかを利用している各種申請と申請経路はAPI経由で参照は可能ですが、作成と更新、承認ステータスの変更ができません。</p>     <ul>       <li>役職指定（申請者の所属部門）</li>       <li>役職指定（申請時に部門指定）</li>       <li>部門および役職指定</li>     </ul>   </li>   <li>個人アカウントの場合は、プレミアムプランでご利用できます。</li>   <li>法人アカウントの場合は、ベーシックプラン、プロフェッショナルプラン、エンタープライズプランでご利用できます。</li> </ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\ApprovalFlowRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$included_user_id = 56; // int | 経路に含まれるユーザーのユーザーID
$usage = 'usage_example'; // string | 申請種別（各申請種別が使用できる申請経路に絞り込めます。例えば、ApprovalRequest を指定すると、各種申請が使用できる申請経路に絞り込めます。） * `TxnApproval` - 仕訳承認 * `ExpenseApplication` - 経費精算 * `PaymentRequest` - 支払依頼 * `ApprovalRequest` - 各種申請 * `DocApproval` - 請求書等 (見積書・納品書・請求書・発注書)
$request_form_id = 56; // int | 申請フォームID request_form_id指定時はusage条件をApprovalRequestに指定してください。指定しない場合無効になります。

try {
    $result = $apiInstance->getApprovalFlowRoutes($company_id, $included_user_id, $usage, $request_form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalFlowRoutesApi->getApprovalFlowRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **included_user_id** | **int**| 経路に含まれるユーザーのユーザーID | [optional]
 **usage** | **string**| 申請種別（各申請種別が使用できる申請経路に絞り込めます。例えば、ApprovalRequest を指定すると、各種申請が使用できる申請経路に絞り込めます。） * &#x60;TxnApproval&#x60; - 仕訳承認 * &#x60;ExpenseApplication&#x60; - 経費精算 * &#x60;PaymentRequest&#x60; - 支払依頼 * &#x60;ApprovalRequest&#x60; - 各種申請 * &#x60;DocApproval&#x60; - 請求書等 (見積書・納品書・請求書・発注書) | [optional]
 **request_form_id** | **int**| 申請フォームID request_form_id指定時はusage条件をApprovalRequestに指定してください。指定しない場合無効になります。 | [optional]

### Return type

[**\Freee\Accounting\Model\ApprovalFlowRoutesIndexResponse**](../Model/ApprovalFlowRoutesIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

