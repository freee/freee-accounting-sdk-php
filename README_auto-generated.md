# OpenAPIClient-php


<h1 id=\"freee_api\">freee API</h1>
<hr />
<h2 id=\"start_guide\">スタートガイド</h2>

<p>freee API開発がはじめての方は<a href=\"https://developer.freee.co.jp/getting-started\">freee API スタートガイド</a>を参照してください。</p>

<hr />
<h2 id=\"specification\">仕様</h2>

<pre><code>【重要】会計freee APIの新バージョンについて
2020年12月まで、2つのバージョンが利用できる状態です。古いものは2020年12月に利用不可となります。<br>
新しいAPIを利用するにはリクエストヘッダーに以下を指定します。
X-Api-Version: 2020-06-15<br>
指定がない場合は2020年12月に廃止予定のAPIを利用することとなります。<br>
【重要】APIのバージョン指定をせずに利用し続ける場合
2020年12月に新しいバージョンのAPIに自動的に切り替わります。
詳細は、<a href=\"https://developer.freee.co.jp/release-note/2948\" target=\"_blank\">リリースノート</a>をご覧ください。<br>
旧バージョンのAPIリファレンスを確認したい場合は、<a href=\"https://freee.github.io/freee-api-schema/\" target=\"_blank\">旧バージョンのAPIリファレンスページ</a>をご覧ください。
</code></pre>

<h3 id=\"api_endpoint\">APIエンドポイント</h3>

<p>https://api.freee.co.jp/ (httpsのみ)</p>

<h3 id=\"about_authorize\">認証について</h3>
<p>OAuth2.0を利用します。詳細は<a href=\"https://developer.freee.co.jp/docs\" target=\"_blank\">ドキュメントの認証</a>パートを参照してください。</p>

<h3 id=\"data_format\">データフォーマット</h3>

<p>リクエスト、レスポンスともにJSON形式をサポートしていますが、詳細は、API毎の説明欄（application/jsonなど）を確認してください。</p>

<h3 id=\"compatibility\">後方互換性ありの変更</h3>

<p>freeeでは、APIを改善していくために以下のような変更は後方互換性ありとして通知なく変更を入れることがあります。アプリケーション実装者は以下を踏まえて開発を行ってください。</p>

<ul>
<li>新しいAPIリソース・エンドポイントの追加</li>
<li>既存のAPIに対して必須ではない新しいリクエストパラメータの追加</li>
<li>既存のAPIレスポンスに対する新しいプロパティの追加</li>
<li>既存のAPIレスポンスに対するプロパティの順番の入れ変え</li>
<li>keyとなっているidやcodeの長さの変更（長くする）</li>
</ul>

<h3 id=\"common_response_header\">共通レスポンスヘッダー</h3>

<p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>

<ul>
<li>
<p>X-Freee-Request-ID</p>
<ul>
<li>各リクエスト毎に発行されるID</li>
</ul>
</li>
</ul>

<h3 id=\"common_error_response\">共通エラーレスポンス</h3>

<ul>
<li>
<p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p>
</li>
<li>
<p>一部のエラーレスポンスにはエラーコードが含まれます。<br>詳細は、<a href=\"https://developer.freee.co.jp/tips/faq/40x-checkpoint\">HTTPステータスコード400台エラー時のチェックポイント</a>を参照してください</p>
</li>
<p>type</p>

<ul>
<li>status : HTTPステータスコードの説明</li>

<li>validation : エラーの詳細の説明（開発者向け）</li>
</ul>
</li>
</ul>

<p>レスポンスの例</p>

<pre><code>  {
    &quot;status_code&quot; : 400,
    &quot;errors&quot; : [
      {
        &quot;type&quot; : &quot;status&quot;,
        &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]
      },
      {
        &quot;type&quot; : &quot;validation&quot;,
        &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]
      }
    ]
  }</code></pre>

</br>

<h3 id=\"api_rate_limit\">API使用制限</h3>

  <p>freeeは一定期間に過度のアクセスを検知した場合、APIアクセスをコントロールする場合があります。</p>
  <p>その際のhttp status codeは403となります。制限がかかってから10分程度が過ぎると再度使用することができるようになります。</p>

<h4 id=\"reports_api_endpoint\">/reportsエンドポイント</h4>

<p>freeeは/reportsエンドポイントに対して1秒間に10以上のアクセスを検知した場合、APIアクセスをコントロールする場合があります。その際のhttp status codeは429（too many requests）となります。</p>

<p>レスポンスボディのmetaプロパティに以下を含めます。</p>

<ul>
  <li>設定されている上限値</li>
  <li>上限に達するまでの使用可能回数</li>
  <li>（上限値に達した場合）使用回数がリセットされる時刻</li>
</ul>

<h3 id=\"plan_api_rate_limit\">プラン別のAPI Rate Limit</h3>
  <table border=\"1\">
    <tbody>
      <tr>
        <th style=\"padding: 10px\"><strong>会計freeeプラン名</strong></th>
        <th style=\"padding: 10px\"><strong>事業所とアプリケーション毎に1日でのAPIコール数</strong></th>
      </tr>
      <tr>
        <td style=\"padding: 10px\">エンタープライズ</td>
        <td style=\"padding: 10px\">10,000</td>
      </tr>
      <tr>
        <td style=\"padding: 10px\">プロフェッショナル</td>
        <td style=\"padding: 10px\">5,000</td>
      </tr>
      <tr>
        <td style=\"padding: 10px\">ベーシック</td>
        <td style=\"padding: 10px\">3,000</td>
      </tr>
      <tr>
        <td style=\"padding: 10px\">ミニマム</td>
        <td style=\"padding: 10px\">3,000</td>
      </tr>
      <tr>
        <td style=\"padding: 10px\">上記以外</td>
        <td style=\"padding: 10px\">3,000</td>
      </tr>
    </tbody>
  </table>

<h3 id=\"webhook\">Webhookについて</h3>

<p>詳細は<a href=\"https://developer.freee.co.jp/docs/accounting/webhook\" target=\"_blank\">会計Webhook概要</a>を参照してください。</p>

<hr />
<h2 id=\"contact\">連絡先</h2>

<p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p>
<hr />&copy; Since 2013 freee K.K.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/freee/freee-accounting-sdk-php.git"
    }
  ],
  "require": {
    "freee/freee-accounting-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\AccountItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_item_params = new \Freee\Accounting\Model\AccountItemParams(); // \Freee\Accounting\Model\AccountItemParams | 勘定科目の作成

try {
    $result = $apiInstance->createAccountItem($account_item_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountItemsApi->createAccountItem: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.freee.co.jp*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountItemsApi* | [**createAccountItem**](docs/Api/AccountItemsApi.md#createaccountitem) | **POST** /api/1/account_items | 勘定科目の作成
*AccountItemsApi* | [**destroyAccountItem**](docs/Api/AccountItemsApi.md#destroyaccountitem) | **DELETE** /api/1/account_items/{id} | 勘定科目の削除
*AccountItemsApi* | [**getAccountItem**](docs/Api/AccountItemsApi.md#getaccountitem) | **GET** /api/1/account_items/{id} | 勘定科目の詳細情報の取得
*AccountItemsApi* | [**getAccountItems**](docs/Api/AccountItemsApi.md#getaccountitems) | **GET** /api/1/account_items | 勘定科目一覧の取得
*AccountItemsApi* | [**updateAccountItem**](docs/Api/AccountItemsApi.md#updateaccountitem) | **PUT** /api/1/account_items/{id} | 勘定科目の更新
*ApprovalFlowRoutesApi* | [**getApprovalFlowRoute**](docs/Api/ApprovalFlowRoutesApi.md#getapprovalflowroute) | **GET** /api/1/approval_flow_routes/{id} | 申請経路の取得
*ApprovalFlowRoutesApi* | [**getApprovalFlowRoutes**](docs/Api/ApprovalFlowRoutesApi.md#getapprovalflowroutes) | **GET** /api/1/approval_flow_routes | 申請経路一覧の取得
*ApprovalRequestsApi* | [**createApprovalRequest**](docs/Api/ApprovalRequestsApi.md#createapprovalrequest) | **POST** /api/1/approval_requests | 各種申請の作成
*ApprovalRequestsApi* | [**destroyApprovalRequest**](docs/Api/ApprovalRequestsApi.md#destroyapprovalrequest) | **DELETE** /api/1/approval_requests/{id} | 各種申請の削除
*ApprovalRequestsApi* | [**getApprovalRequest**](docs/Api/ApprovalRequestsApi.md#getapprovalrequest) | **GET** /api/1/approval_requests/{id} | 各種申請の取得
*ApprovalRequestsApi* | [**getApprovalRequestForm**](docs/Api/ApprovalRequestsApi.md#getapprovalrequestform) | **GET** /api/1/approval_requests/forms/{id} | 各種申請の申請フォームの取得
*ApprovalRequestsApi* | [**getApprovalRequestForms**](docs/Api/ApprovalRequestsApi.md#getapprovalrequestforms) | **GET** /api/1/approval_requests/forms | 各種申請の申請フォーム一覧の取得
*ApprovalRequestsApi* | [**getApprovalRequests**](docs/Api/ApprovalRequestsApi.md#getapprovalrequests) | **GET** /api/1/approval_requests | 各種申請の一覧
*ApprovalRequestsApi* | [**updateApprovalRequest**](docs/Api/ApprovalRequestsApi.md#updateapprovalrequest) | **PUT** /api/1/approval_requests/{id} | 各種申請の更新
*ApprovalRequestsApi* | [**updateApprovalRequestAction**](docs/Api/ApprovalRequestsApi.md#updateapprovalrequestaction) | **POST** /api/1/approval_requests/{id}/actions | 各種申請の承認操作
*BanksApi* | [**getBank**](docs/Api/BanksApi.md#getbank) | **GET** /api/1/banks/{id} | 連携サービスの取得
*BanksApi* | [**getBanks**](docs/Api/BanksApi.md#getbanks) | **GET** /api/1/banks | 連携サービス一覧の取得
*CompaniesApi* | [**getCompanies**](docs/Api/CompaniesApi.md#getcompanies) | **GET** /api/1/companies | 事業所一覧の取得
*CompaniesApi* | [**getCompany**](docs/Api/CompaniesApi.md#getcompany) | **GET** /api/1/companies/{id} | 事業所の詳細情報の取得
*CompaniesApi* | [**updateCompany**](docs/Api/CompaniesApi.md#updatecompany) | **PUT** /api/1/companies/{id} | 事業所情報の更新
*DealsApi* | [**createDeal**](docs/Api/DealsApi.md#createdeal) | **POST** /api/1/deals | 取引（収入／支出）の作成
*DealsApi* | [**destroyDeal**](docs/Api/DealsApi.md#destroydeal) | **DELETE** /api/1/deals/{id} | 取引（収入／支出）の削除
*DealsApi* | [**getDeal**](docs/Api/DealsApi.md#getdeal) | **GET** /api/1/deals/{id} | 取引（収入／支出）の取得
*DealsApi* | [**getDeals**](docs/Api/DealsApi.md#getdeals) | **GET** /api/1/deals | 取引（収入／支出）一覧の取得
*DealsApi* | [**updateDeal**](docs/Api/DealsApi.md#updatedeal) | **PUT** /api/1/deals/{id} | 取引（収入／支出）の更新
*ExpenseApplicationLineTemplatesApi* | [**createExpenseApplicationLineTemplate**](docs/Api/ExpenseApplicationLineTemplatesApi.md#createexpenseapplicationlinetemplate) | **POST** /api/1/expense_application_line_templates | 経費科目の作成
*ExpenseApplicationLineTemplatesApi* | [**destroyExpenseApplicationLineTemplate**](docs/Api/ExpenseApplicationLineTemplatesApi.md#destroyexpenseapplicationlinetemplate) | **DELETE** /api/1/expense_application_line_templates/{id} | 経費科目の削除
*ExpenseApplicationLineTemplatesApi* | [**getExpenseApplicationLineTemplate**](docs/Api/ExpenseApplicationLineTemplatesApi.md#getexpenseapplicationlinetemplate) | **GET** /api/1/expense_application_line_templates/{id} | 経費科目の取得
*ExpenseApplicationLineTemplatesApi* | [**getExpenseApplicationLineTemplates**](docs/Api/ExpenseApplicationLineTemplatesApi.md#getexpenseapplicationlinetemplates) | **GET** /api/1/expense_application_line_templates | 経費科目一覧の取得
*ExpenseApplicationLineTemplatesApi* | [**updateExpenseApplicationLineTemplate**](docs/Api/ExpenseApplicationLineTemplatesApi.md#updateexpenseapplicationlinetemplate) | **PUT** /api/1/expense_application_line_templates/{id} | 経費科目の更新
*ExpenseApplicationsApi* | [**createExpenseApplication**](docs/Api/ExpenseApplicationsApi.md#createexpenseapplication) | **POST** /api/1/expense_applications | 経費申請の作成
*ExpenseApplicationsApi* | [**destroyExpenseApplication**](docs/Api/ExpenseApplicationsApi.md#destroyexpenseapplication) | **DELETE** /api/1/expense_applications/{id} | 経費申請の削除
*ExpenseApplicationsApi* | [**getExpenseApplication**](docs/Api/ExpenseApplicationsApi.md#getexpenseapplication) | **GET** /api/1/expense_applications/{id} | 経費申請詳細の取得
*ExpenseApplicationsApi* | [**getExpenseApplications**](docs/Api/ExpenseApplicationsApi.md#getexpenseapplications) | **GET** /api/1/expense_applications | 経費申請一覧の取得
*ExpenseApplicationsApi* | [**updateExpenseApplication**](docs/Api/ExpenseApplicationsApi.md#updateexpenseapplication) | **PUT** /api/1/expense_applications/{id} | 経費申請の更新
*InvoicesApi* | [**createInvoice**](docs/Api/InvoicesApi.md#createinvoice) | **POST** /api/1/invoices | 請求書の作成
*InvoicesApi* | [**destroyInvoice**](docs/Api/InvoicesApi.md#destroyinvoice) | **DELETE** /api/1/invoices/{id} | 請求書の削除
*InvoicesApi* | [**getInvoice**](docs/Api/InvoicesApi.md#getinvoice) | **GET** /api/1/invoices/{id} | 請求書の取得
*InvoicesApi* | [**getInvoices**](docs/Api/InvoicesApi.md#getinvoices) | **GET** /api/1/invoices | 請求書一覧の取得
*InvoicesApi* | [**updateInvoice**](docs/Api/InvoicesApi.md#updateinvoice) | **PUT** /api/1/invoices/{id} | 請求書の更新
*ItemsApi* | [**createItem**](docs/Api/ItemsApi.md#createitem) | **POST** /api/1/items | 品目の作成
*ItemsApi* | [**destroyItem**](docs/Api/ItemsApi.md#destroyitem) | **DELETE** /api/1/items/{id} | 品目の削除
*ItemsApi* | [**getItem**](docs/Api/ItemsApi.md#getitem) | **GET** /api/1/items/{id} | 品目の取得
*ItemsApi* | [**getItems**](docs/Api/ItemsApi.md#getitems) | **GET** /api/1/items | 品目一覧の取得
*ItemsApi* | [**updateItem**](docs/Api/ItemsApi.md#updateitem) | **PUT** /api/1/items/{id} | 品目の更新
*JournalsApi* | [**downloadJournal**](docs/Api/JournalsApi.md#downloadjournal) | **GET** /api/1/journals/reports/{id}/download | ダウンロード実行
*JournalsApi* | [**getJournalStatus**](docs/Api/JournalsApi.md#getjournalstatus) | **GET** /api/1/journals/reports/{id}/status | ステータス確認
*JournalsApi* | [**getJournals**](docs/Api/JournalsApi.md#getjournals) | **GET** /api/1/journals | ダウンロード要求
*ManualJournalsApi* | [**createManualJournal**](docs/Api/ManualJournalsApi.md#createmanualjournal) | **POST** /api/1/manual_journals | 振替伝票の作成
*ManualJournalsApi* | [**destroyManualJournal**](docs/Api/ManualJournalsApi.md#destroymanualjournal) | **DELETE** /api/1/manual_journals/{id} | 振替伝票の削除
*ManualJournalsApi* | [**getManualJournal**](docs/Api/ManualJournalsApi.md#getmanualjournal) | **GET** /api/1/manual_journals/{id} | 振替伝票の取得
*ManualJournalsApi* | [**getManualJournals**](docs/Api/ManualJournalsApi.md#getmanualjournals) | **GET** /api/1/manual_journals | 振替伝票一覧の取得
*ManualJournalsApi* | [**updateManualJournal**](docs/Api/ManualJournalsApi.md#updatemanualjournal) | **PUT** /api/1/manual_journals/{id} | 振替伝票の更新
*PartnersApi* | [**createPartner**](docs/Api/PartnersApi.md#createpartner) | **POST** /api/1/partners | 取引先の作成
*PartnersApi* | [**destroyPartner**](docs/Api/PartnersApi.md#destroypartner) | **DELETE** /api/1/partners/{id} | 取引先の削除
*PartnersApi* | [**getPartner**](docs/Api/PartnersApi.md#getpartner) | **GET** /api/1/partners/{id} | 取引先の取得
*PartnersApi* | [**getPartners**](docs/Api/PartnersApi.md#getpartners) | **GET** /api/1/partners | 取引先一覧の取得
*PartnersApi* | [**updatePartner**](docs/Api/PartnersApi.md#updatepartner) | **PUT** /api/1/partners/{id} | 取引先の更新
*PartnersApi* | [**updatePartnerByCode**](docs/Api/PartnersApi.md#updatepartnerbycode) | **PUT** /api/1/partners/code/{code} | 取引先の更新
*PaymentsApi* | [**createDealPayment**](docs/Api/PaymentsApi.md#createdealpayment) | **POST** /api/1/deals/{id}/payments | 取引（収入／支出）の支払行作成
*PaymentsApi* | [**destroyDealPayment**](docs/Api/PaymentsApi.md#destroydealpayment) | **DELETE** /api/1/deals/{id}/payments/{payment_id} | 取引（収入／支出）の支払行削除
*PaymentsApi* | [**updateDealPayment**](docs/Api/PaymentsApi.md#updatedealpayment) | **PUT** /api/1/deals/{id}/payments/{payment_id} | 取引（収入／支出）の支払行更新
*QuotationsApi* | [**createQuotation**](docs/Api/QuotationsApi.md#createquotation) | **POST** /api/1/quotations | 見積書の作成
*QuotationsApi* | [**destroyQuotation**](docs/Api/QuotationsApi.md#destroyquotation) | **DELETE** /api/1/quotations/{id} | 見積書の削除
*QuotationsApi* | [**getQuotation**](docs/Api/QuotationsApi.md#getquotation) | **GET** /api/1/quotations/{id} | 見積書の取得
*QuotationsApi* | [**getQuotations**](docs/Api/QuotationsApi.md#getquotations) | **GET** /api/1/quotations | 見積書一覧の取得
*QuotationsApi* | [**updateQuotation**](docs/Api/QuotationsApi.md#updatequotation) | **PUT** /api/1/quotations/{id} | 見積書の更新
*ReceiptsApi* | [**createReceipt**](docs/Api/ReceiptsApi.md#createreceipt) | **POST** /api/1/receipts | ファイルボックス 証憑ファイルアップロード
*ReceiptsApi* | [**destroyReceipt**](docs/Api/ReceiptsApi.md#destroyreceipt) | **DELETE** /api/1/receipts/{id} | ファイルボックス 証憑ファイルを削除する
*ReceiptsApi* | [**getReceipt**](docs/Api/ReceiptsApi.md#getreceipt) | **GET** /api/1/receipts/{id} | ファイルボックス 証憑ファイルの取得
*ReceiptsApi* | [**getReceipts**](docs/Api/ReceiptsApi.md#getreceipts) | **GET** /api/1/receipts | ファイルボックス 証憑ファイル一覧の取得
*ReceiptsApi* | [**updateReceipt**](docs/Api/ReceiptsApi.md#updatereceipt) | **PUT** /api/1/receipts/{id} | ファイルボックス 証憑ファイル情報更新
*RenewsApi* | [**createDealRenew**](docs/Api/RenewsApi.md#createdealrenew) | **POST** /api/1/deals/{id}/renews | 取引（収入／支出）に対する+更新の作成
*RenewsApi* | [**deleteDealRenew**](docs/Api/RenewsApi.md#deletedealrenew) | **DELETE** /api/1/deals/{id}/renews/{renew_id} | 取引（収入／支出）の+更新の削除
*RenewsApi* | [**updateDealRenew**](docs/Api/RenewsApi.md#updatedealrenew) | **PUT** /api/1/deals/{id}/renews/{renew_id} | 取引（収入／支出）の+更新の更新
*SectionsApi* | [**createSection**](docs/Api/SectionsApi.md#createsection) | **POST** /api/1/sections | 部門の作成
*SectionsApi* | [**destroySection**](docs/Api/SectionsApi.md#destroysection) | **DELETE** /api/1/sections/{id} | 部門の削除
*SectionsApi* | [**getSection**](docs/Api/SectionsApi.md#getsection) | **GET** /api/1/sections/{id} | 
*SectionsApi* | [**getSections**](docs/Api/SectionsApi.md#getsections) | **GET** /api/1/sections | 部門一覧の取得
*SectionsApi* | [**updateSection**](docs/Api/SectionsApi.md#updatesection) | **PUT** /api/1/sections/{id} | 部門の更新
*SegmentTagsApi* | [**createSegmentTag**](docs/Api/SegmentTagsApi.md#createsegmenttag) | **POST** /api/1/segments/{segment_id}/tags | セグメントの作成
*SegmentTagsApi* | [**destroySegmentsTag**](docs/Api/SegmentTagsApi.md#destroysegmentstag) | **DELETE** /api/1/segments/{segment_id}/tags/{id} | セグメントタグの削除
*SegmentTagsApi* | [**getSegmentTags**](docs/Api/SegmentTagsApi.md#getsegmenttags) | **GET** /api/1/segments/{segment_id}/tags | セグメントタグ一覧の取得
*SegmentTagsApi* | [**updateSegmentTag**](docs/Api/SegmentTagsApi.md#updatesegmenttag) | **PUT** /api/1/segments/{segment_id}/tags/{id} | セグメントタグの更新
*SelectablesApi* | [**getFormsSelectables**](docs/Api/SelectablesApi.md#getformsselectables) | **GET** /api/1/forms/selectables | フォーム用選択項目情報の取得
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /api/1/tags | メモタグの作成
*TagsApi* | [**destroyTag**](docs/Api/TagsApi.md#destroytag) | **DELETE** /api/1/tags/{id} | メモタグの削除
*TagsApi* | [**getTag**](docs/Api/TagsApi.md#gettag) | **GET** /api/1/tags/{id} | メモタグの詳細情報の取得
*TagsApi* | [**getTags**](docs/Api/TagsApi.md#gettags) | **GET** /api/1/tags | メモタグ一覧の取得
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /api/1/tags/{id} | メモタグの更新
*TaxesApi* | [**getTaxCode**](docs/Api/TaxesApi.md#gettaxcode) | **GET** /api/1/taxes/codes/{code} | 税区分コードの取得
*TaxesApi* | [**getTaxCodes**](docs/Api/TaxesApi.md#gettaxcodes) | **GET** /api/1/taxes/codes | 税区分コード一覧の取得
*TaxesApi* | [**getTaxesCompanies**](docs/Api/TaxesApi.md#gettaxescompanies) | **GET** /api/1/taxes/companies/{company_id} | 税区分コード詳細一覧の取得
*TransfersApi* | [**createTransfer**](docs/Api/TransfersApi.md#createtransfer) | **POST** /api/1/transfers | 取引（振替）の作成
*TransfersApi* | [**destroyTransfer**](docs/Api/TransfersApi.md#destroytransfer) | **DELETE** /api/1/transfers/{id} | 取引（振替）の削除する
*TransfersApi* | [**getTransfer**](docs/Api/TransfersApi.md#gettransfer) | **GET** /api/1/transfers/{id} | 取引（振替）の取得
*TransfersApi* | [**getTransfers**](docs/Api/TransfersApi.md#gettransfers) | **GET** /api/1/transfers | 取引（振替）一覧の取得
*TransfersApi* | [**updateTransfer**](docs/Api/TransfersApi.md#updatetransfer) | **PUT** /api/1/transfers/{id} | 取引（振替）の更新
*TrialBalanceApi* | [**getTrialBs**](docs/Api/TrialBalanceApi.md#gettrialbs) | **GET** /api/1/reports/trial_bs | 貸借対照表の取得
*TrialBalanceApi* | [**getTrialBsThreeYears**](docs/Api/TrialBalanceApi.md#gettrialbsthreeyears) | **GET** /api/1/reports/trial_bs_three_years | 貸借対照表(３期間比較)の取得
*TrialBalanceApi* | [**getTrialBsTwoYears**](docs/Api/TrialBalanceApi.md#gettrialbstwoyears) | **GET** /api/1/reports/trial_bs_two_years | 貸借対照表(前年比較)の取得
*TrialBalanceApi* | [**getTrialPl**](docs/Api/TrialBalanceApi.md#gettrialpl) | **GET** /api/1/reports/trial_pl | 損益計算書の取得
*TrialBalanceApi* | [**getTrialPlSections**](docs/Api/TrialBalanceApi.md#gettrialplsections) | **GET** /api/1/reports/trial_pl_sections | 損益計算書(部門比較)の取得
*TrialBalanceApi* | [**getTrialPlThreeYears**](docs/Api/TrialBalanceApi.md#gettrialplthreeyears) | **GET** /api/1/reports/trial_pl_three_years | 損益計算書(３期間比較)の取得
*TrialBalanceApi* | [**getTrialPlTwoYears**](docs/Api/TrialBalanceApi.md#gettrialpltwoyears) | **GET** /api/1/reports/trial_pl_two_years | 損益計算書(前年比較)の取得
*UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /api/1/users | 事業所に所属するユーザー一覧の取得
*UsersApi* | [**getUsersCapabilities**](docs/Api/UsersApi.md#getuserscapabilities) | **GET** /api/1/users/capabilities | ログインユーザーの権限の取得
*UsersApi* | [**getUsersMe**](docs/Api/UsersApi.md#getusersme) | **GET** /api/1/users/me | ログインユーザー情報の取得
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PUT** /api/1/users/me | ユーザー情報の更新
*WalletTxnsApi* | [**createWalletTxn**](docs/Api/WalletTxnsApi.md#createwallettxn) | **POST** /api/1/wallet_txns | 明細の作成
*WalletTxnsApi* | [**destroyWalletTxn**](docs/Api/WalletTxnsApi.md#destroywallettxn) | **DELETE** /api/1/wallet_txns/{id} | 明細の削除
*WalletTxnsApi* | [**getWalletTxn**](docs/Api/WalletTxnsApi.md#getwallettxn) | **GET** /api/1/wallet_txns/{id} | 明細の取得
*WalletTxnsApi* | [**getWalletTxns**](docs/Api/WalletTxnsApi.md#getwallettxns) | **GET** /api/1/wallet_txns | 明細一覧の取得
*WalletablesApi* | [**createWalletable**](docs/Api/WalletablesApi.md#createwalletable) | **POST** /api/1/walletables | 口座の作成
*WalletablesApi* | [**destroyWalletable**](docs/Api/WalletablesApi.md#destroywalletable) | **DELETE** /api/1/walletables/{type}/{id} | 口座の削除
*WalletablesApi* | [**getWalletable**](docs/Api/WalletablesApi.md#getwalletable) | **GET** /api/1/walletables/{type}/{id} | 口座情報の取得
*WalletablesApi* | [**getWalletables**](docs/Api/WalletablesApi.md#getwalletables) | **GET** /api/1/walletables | 口座一覧の取得
*WalletablesApi* | [**updateWalletable**](docs/Api/WalletablesApi.md#updatewalletable) | **PUT** /api/1/walletables/{type}/{id} | 口座の更新

## Models

- [AccountItemParams](docs/Model/AccountItemParams.md)
- [AccountItemParamsAccountItem](docs/Model/AccountItemParamsAccountItem.md)
- [AccountItemParamsAccountItemItems](docs/Model/AccountItemParamsAccountItemItems.md)
- [AccountItemResponse](docs/Model/AccountItemResponse.md)
- [AccountItemResponseAccountItem](docs/Model/AccountItemResponseAccountItem.md)
- [AccountItemResponseAccountItemItems](docs/Model/AccountItemResponseAccountItemItems.md)
- [AccountItemResponseAccountItemPartners](docs/Model/AccountItemResponseAccountItemPartners.md)
- [AccountItemsResponse](docs/Model/AccountItemsResponse.md)
- [AccountItemsResponseAccountItems](docs/Model/AccountItemsResponseAccountItems.md)
- [ApprovalFlowRouteResponse](docs/Model/ApprovalFlowRouteResponse.md)
- [ApprovalFlowRouteResponseApprovalFlowRoute](docs/Model/ApprovalFlowRouteResponseApprovalFlowRoute.md)
- [ApprovalFlowRouteResponseApprovalFlowRouteSteps](docs/Model/ApprovalFlowRouteResponseApprovalFlowRouteSteps.md)
- [ApprovalFlowRoutesIndexResponse](docs/Model/ApprovalFlowRoutesIndexResponse.md)
- [ApprovalFlowRoutesIndexResponseApprovalFlowRoutes](docs/Model/ApprovalFlowRoutesIndexResponseApprovalFlowRoutes.md)
- [ApprovalRequestActionCreateParams](docs/Model/ApprovalRequestActionCreateParams.md)
- [ApprovalRequestCreateParams](docs/Model/ApprovalRequestCreateParams.md)
- [ApprovalRequestCreateParamsRequestItems](docs/Model/ApprovalRequestCreateParamsRequestItems.md)
- [ApprovalRequestForm](docs/Model/ApprovalRequestForm.md)
- [ApprovalRequestFormParts](docs/Model/ApprovalRequestFormParts.md)
- [ApprovalRequestFormResponse](docs/Model/ApprovalRequestFormResponse.md)
- [ApprovalRequestFormValues](docs/Model/ApprovalRequestFormValues.md)
- [ApprovalRequestResponse](docs/Model/ApprovalRequestResponse.md)
- [ApprovalRequestResponseApprovalRequest](docs/Model/ApprovalRequestResponseApprovalRequest.md)
- [ApprovalRequestResponseApprovalRequestApprovalFlowLogs](docs/Model/ApprovalRequestResponseApprovalRequestApprovalFlowLogs.md)
- [ApprovalRequestResponseApprovalRequestApprovalRequestForm](docs/Model/ApprovalRequestResponseApprovalRequestApprovalRequestForm.md)
- [ApprovalRequestResponseApprovalRequestApprovers](docs/Model/ApprovalRequestResponseApprovalRequestApprovers.md)
- [ApprovalRequestResponseApprovalRequestComments](docs/Model/ApprovalRequestResponseApprovalRequestComments.md)
- [ApprovalRequestResponseApprovalRequestRequestItems](docs/Model/ApprovalRequestResponseApprovalRequestRequestItems.md)
- [ApprovalRequestUpdateParams](docs/Model/ApprovalRequestUpdateParams.md)
- [ApprovalRequestsIndexResponse](docs/Model/ApprovalRequestsIndexResponse.md)
- [ApprovalRequestsIndexResponseApprovalRequests](docs/Model/ApprovalRequestsIndexResponseApprovalRequests.md)
- [BadRequestError](docs/Model/BadRequestError.md)
- [BadRequestErrorErrors](docs/Model/BadRequestErrorErrors.md)
- [BadRequestNotFoundError](docs/Model/BadRequestNotFoundError.md)
- [BadRequestNotFoundErrorErrors](docs/Model/BadRequestNotFoundErrorErrors.md)
- [Bank](docs/Model/Bank.md)
- [BankResponse](docs/Model/BankResponse.md)
- [CompaniesPlanResponse](docs/Model/CompaniesPlanResponse.md)
- [CompanyIndexResponse](docs/Model/CompanyIndexResponse.md)
- [CompanyIndexResponseCompanies](docs/Model/CompanyIndexResponseCompanies.md)
- [CompanyParams](docs/Model/CompanyParams.md)
- [CompanyParamsFiscalYears](docs/Model/CompanyParamsFiscalYears.md)
- [CompanyResponse](docs/Model/CompanyResponse.md)
- [CompanyResponseCompany](docs/Model/CompanyResponseCompany.md)
- [CompanyUpdateResponse](docs/Model/CompanyUpdateResponse.md)
- [CompanyUpdateResponseCompany](docs/Model/CompanyUpdateResponseCompany.md)
- [CompanyUpdateResponseCompanyFiscalYears](docs/Model/CompanyUpdateResponseCompanyFiscalYears.md)
- [Deal](docs/Model/Deal.md)
- [DealCreateParams](docs/Model/DealCreateParams.md)
- [DealCreateParamsDetails](docs/Model/DealCreateParamsDetails.md)
- [DealCreateParamsPayments](docs/Model/DealCreateParamsPayments.md)
- [DealCreateResponse](docs/Model/DealCreateResponse.md)
- [DealCreateResponseDeal](docs/Model/DealCreateResponseDeal.md)
- [DealCreateResponseDealDetails](docs/Model/DealCreateResponseDealDetails.md)
- [DealCreateResponseDealPayments](docs/Model/DealCreateResponseDealPayments.md)
- [DealDetails](docs/Model/DealDetails.md)
- [DealReceipts](docs/Model/DealReceipts.md)
- [DealRenews](docs/Model/DealRenews.md)
- [DealResponse](docs/Model/DealResponse.md)
- [DealUpdateParams](docs/Model/DealUpdateParams.md)
- [DealUpdateParamsDetails](docs/Model/DealUpdateParamsDetails.md)
- [DealUser](docs/Model/DealUser.md)
- [DeprecatedApprovalRequestParams](docs/Model/DeprecatedApprovalRequestParams.md)
- [DeprecatedApprovalRequestParamsRequestItems](docs/Model/DeprecatedApprovalRequestParamsRequestItems.md)
- [DeprecatedApprovalRequestResponse](docs/Model/DeprecatedApprovalRequestResponse.md)
- [DeprecatedApprovalRequestResponseApprovalRequest](docs/Model/DeprecatedApprovalRequestResponseApprovalRequest.md)
- [DeprecatedApprovalRequestResponseApprovalRequestRequestItems](docs/Model/DeprecatedApprovalRequestResponseApprovalRequestRequestItems.md)
- [ExpenseApplicationCreateParams](docs/Model/ExpenseApplicationCreateParams.md)
- [ExpenseApplicationCreateParamsExpenseApplicationLines](docs/Model/ExpenseApplicationCreateParamsExpenseApplicationLines.md)
- [ExpenseApplicationLineTemplate](docs/Model/ExpenseApplicationLineTemplate.md)
- [ExpenseApplicationLineTemplateParams](docs/Model/ExpenseApplicationLineTemplateParams.md)
- [ExpenseApplicationLineTemplateResponse](docs/Model/ExpenseApplicationLineTemplateResponse.md)
- [ExpenseApplicationResponse](docs/Model/ExpenseApplicationResponse.md)
- [ExpenseApplicationResponseExpenseApplication](docs/Model/ExpenseApplicationResponseExpenseApplication.md)
- [ExpenseApplicationResponseExpenseApplicationExpenseApplicationLines](docs/Model/ExpenseApplicationResponseExpenseApplicationExpenseApplicationLines.md)
- [ExpenseApplicationUpdateParams](docs/Model/ExpenseApplicationUpdateParams.md)
- [ExpenseApplicationUpdateParamsExpenseApplicationLines](docs/Model/ExpenseApplicationUpdateParamsExpenseApplicationLines.md)
- [ExpenseApplicationsIndexResponse](docs/Model/ExpenseApplicationsIndexResponse.md)
- [FiscalYears](docs/Model/FiscalYears.md)
- [ForbiddenError](docs/Model/ForbiddenError.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse20012](docs/Model/InlineResponse20012.md)
- [InlineResponse20013](docs/Model/InlineResponse20013.md)
- [InlineResponse20013Taxes](docs/Model/InlineResponse20013Taxes.md)
- [InlineResponse20014](docs/Model/InlineResponse20014.md)
- [InlineResponse20015](docs/Model/InlineResponse20015.md)
- [InlineResponse20016](docs/Model/InlineResponse20016.md)
- [InlineResponse20017](docs/Model/InlineResponse20017.md)
- [InlineResponse20018](docs/Model/InlineResponse20018.md)
- [InlineResponse20018Meta](docs/Model/InlineResponse20018Meta.md)
- [InlineResponse20019](docs/Model/InlineResponse20019.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2002Meta](docs/Model/InlineResponse2002Meta.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InternalServerError](docs/Model/InternalServerError.md)
- [InternalServerErrorErrors](docs/Model/InternalServerErrorErrors.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceCreateParams](docs/Model/InvoiceCreateParams.md)
- [InvoiceCreateParamsInvoiceContents](docs/Model/InvoiceCreateParamsInvoiceContents.md)
- [InvoiceInvoiceContents](docs/Model/InvoiceInvoiceContents.md)
- [InvoiceResponse](docs/Model/InvoiceResponse.md)
- [InvoiceTotalAmountPerVatRate](docs/Model/InvoiceTotalAmountPerVatRate.md)
- [InvoiceUpdateParams](docs/Model/InvoiceUpdateParams.md)
- [InvoiceUpdateParamsInvoiceContents](docs/Model/InvoiceUpdateParamsInvoiceContents.md)
- [Item](docs/Model/Item.md)
- [ItemParams](docs/Model/ItemParams.md)
- [ItemResponse](docs/Model/ItemResponse.md)
- [JournalStatusResponse](docs/Model/JournalStatusResponse.md)
- [JournalStatusResponseJournals](docs/Model/JournalStatusResponseJournals.md)
- [JournalsResponse](docs/Model/JournalsResponse.md)
- [JournalsResponseJournals](docs/Model/JournalsResponseJournals.md)
- [ManualJournal](docs/Model/ManualJournal.md)
- [ManualJournalCreateParams](docs/Model/ManualJournalCreateParams.md)
- [ManualJournalCreateParamsDetails](docs/Model/ManualJournalCreateParamsDetails.md)
- [ManualJournalDetails](docs/Model/ManualJournalDetails.md)
- [ManualJournalResponse](docs/Model/ManualJournalResponse.md)
- [ManualJournalUpdateParams](docs/Model/ManualJournalUpdateParams.md)
- [ManualJournalUpdateParamsDetails](docs/Model/ManualJournalUpdateParamsDetails.md)
- [MeResponse](docs/Model/MeResponse.md)
- [MeResponseUser](docs/Model/MeResponseUser.md)
- [MeResponseUserCompanies](docs/Model/MeResponseUserCompanies.md)
- [PartnerCreateParams](docs/Model/PartnerCreateParams.md)
- [PartnerCreateParamsAddressAttributes](docs/Model/PartnerCreateParamsAddressAttributes.md)
- [PartnerCreateParamsInvoicePaymentTermAttributes](docs/Model/PartnerCreateParamsInvoicePaymentTermAttributes.md)
- [PartnerCreateParamsPartnerBankAccountAttributes](docs/Model/PartnerCreateParamsPartnerBankAccountAttributes.md)
- [PartnerCreateParamsPartnerDocSettingAttributes](docs/Model/PartnerCreateParamsPartnerDocSettingAttributes.md)
- [PartnerResponse](docs/Model/PartnerResponse.md)
- [PartnerResponsePartner](docs/Model/PartnerResponsePartner.md)
- [PartnerResponsePartnerAddressAttributes](docs/Model/PartnerResponsePartnerAddressAttributes.md)
- [PartnerUpdateParams](docs/Model/PartnerUpdateParams.md)
- [PartnersResponse](docs/Model/PartnersResponse.md)
- [PartnersResponsePartners](docs/Model/PartnersResponsePartners.md)
- [PaymentParams](docs/Model/PaymentParams.md)
- [Quotation](docs/Model/Quotation.md)
- [QuotationCreateParams](docs/Model/QuotationCreateParams.md)
- [QuotationQuotationContents](docs/Model/QuotationQuotationContents.md)
- [QuotationResponse](docs/Model/QuotationResponse.md)
- [QuotationUpdateParams](docs/Model/QuotationUpdateParams.md)
- [QuotationUpdateParamsQuotationContents](docs/Model/QuotationUpdateParamsQuotationContents.md)
- [Receipt](docs/Model/Receipt.md)
- [ReceiptResponse](docs/Model/ReceiptResponse.md)
- [ReceiptUpdateParams](docs/Model/ReceiptUpdateParams.md)
- [RenewCreateParams](docs/Model/RenewCreateParams.md)
- [RenewCreateParamsDetails](docs/Model/RenewCreateParamsDetails.md)
- [RenewUpdateParams](docs/Model/RenewUpdateParams.md)
- [RenewUpdateParamsDetails](docs/Model/RenewUpdateParamsDetails.md)
- [Section](docs/Model/Section.md)
- [SectionParams](docs/Model/SectionParams.md)
- [SectionResponse](docs/Model/SectionResponse.md)
- [SegmentTag](docs/Model/SegmentTag.md)
- [SegmentTagParams](docs/Model/SegmentTagParams.md)
- [SegmentTagResponse](docs/Model/SegmentTagResponse.md)
- [SelectablesIndexResponse](docs/Model/SelectablesIndexResponse.md)
- [SelectablesIndexResponseAccountCategories](docs/Model/SelectablesIndexResponseAccountCategories.md)
- [SelectablesIndexResponseAccountGroups](docs/Model/SelectablesIndexResponseAccountGroups.md)
- [SelectablesIndexResponseAccountItems](docs/Model/SelectablesIndexResponseAccountItems.md)
- [SelectablesIndexResponseDefaultTax](docs/Model/SelectablesIndexResponseDefaultTax.md)
- [SelectablesIndexResponseDefaultTaxTaxRate5](docs/Model/SelectablesIndexResponseDefaultTaxTaxRate5.md)
- [SelectablesIndexResponseDefaultTaxTaxRate8](docs/Model/SelectablesIndexResponseDefaultTaxTaxRate8.md)
- [ServiceUnavailableError](docs/Model/ServiceUnavailableError.md)
- [ServiceUnavailableErrorErrors](docs/Model/ServiceUnavailableErrorErrors.md)
- [Tag](docs/Model/Tag.md)
- [TagParams](docs/Model/TagParams.md)
- [TagResponse](docs/Model/TagResponse.md)
- [Tax](docs/Model/Tax.md)
- [TaxResponse](docs/Model/TaxResponse.md)
- [TooManyRequestsError](docs/Model/TooManyRequestsError.md)
- [TooManyRequestsErrorMeta](docs/Model/TooManyRequestsErrorMeta.md)
- [Transfer](docs/Model/Transfer.md)
- [TransferParams](docs/Model/TransferParams.md)
- [TransferResponse](docs/Model/TransferResponse.md)
- [TrialBsResponse](docs/Model/TrialBsResponse.md)
- [TrialBsResponseTrialBs](docs/Model/TrialBsResponseTrialBs.md)
- [TrialBsResponseTrialBsBalances](docs/Model/TrialBsResponseTrialBsBalances.md)
- [TrialBsResponseTrialBsItems](docs/Model/TrialBsResponseTrialBsItems.md)
- [TrialBsResponseTrialBsPartners](docs/Model/TrialBsResponseTrialBsPartners.md)
- [TrialBsThreeYearsResponse](docs/Model/TrialBsThreeYearsResponse.md)
- [TrialBsThreeYearsResponseTrialBsThreeYears](docs/Model/TrialBsThreeYearsResponseTrialBsThreeYears.md)
- [TrialBsThreeYearsResponseTrialBsThreeYearsBalances](docs/Model/TrialBsThreeYearsResponseTrialBsThreeYearsBalances.md)
- [TrialBsThreeYearsResponseTrialBsThreeYearsItems](docs/Model/TrialBsThreeYearsResponseTrialBsThreeYearsItems.md)
- [TrialBsThreeYearsResponseTrialBsThreeYearsPartners](docs/Model/TrialBsThreeYearsResponseTrialBsThreeYearsPartners.md)
- [TrialBsTwoYearsResponse](docs/Model/TrialBsTwoYearsResponse.md)
- [TrialBsTwoYearsResponseTrialBsTwoYears](docs/Model/TrialBsTwoYearsResponseTrialBsTwoYears.md)
- [TrialBsTwoYearsResponseTrialBsTwoYearsBalances](docs/Model/TrialBsTwoYearsResponseTrialBsTwoYearsBalances.md)
- [TrialBsTwoYearsResponseTrialBsTwoYearsItems](docs/Model/TrialBsTwoYearsResponseTrialBsTwoYearsItems.md)
- [TrialBsTwoYearsResponseTrialBsTwoYearsPartners](docs/Model/TrialBsTwoYearsResponseTrialBsTwoYearsPartners.md)
- [TrialPlResponse](docs/Model/TrialPlResponse.md)
- [TrialPlResponseTrialPl](docs/Model/TrialPlResponseTrialPl.md)
- [TrialPlResponseTrialPlBalances](docs/Model/TrialPlResponseTrialPlBalances.md)
- [TrialPlResponseTrialPlSections](docs/Model/TrialPlResponseTrialPlSections.md)
- [TrialPlSectionsResponse](docs/Model/TrialPlSectionsResponse.md)
- [TrialPlSectionsResponseTrialPlSections](docs/Model/TrialPlSectionsResponseTrialPlSections.md)
- [TrialPlSectionsResponseTrialPlSectionsBalances](docs/Model/TrialPlSectionsResponseTrialPlSectionsBalances.md)
- [TrialPlSectionsResponseTrialPlSectionsItems](docs/Model/TrialPlSectionsResponseTrialPlSectionsItems.md)
- [TrialPlSectionsResponseTrialPlSectionsPartners](docs/Model/TrialPlSectionsResponseTrialPlSectionsPartners.md)
- [TrialPlSectionsResponseTrialPlSectionsSections](docs/Model/TrialPlSectionsResponseTrialPlSectionsSections.md)
- [TrialPlThreeYearsResponse](docs/Model/TrialPlThreeYearsResponse.md)
- [TrialPlThreeYearsResponseTrialPlThreeYears](docs/Model/TrialPlThreeYearsResponseTrialPlThreeYears.md)
- [TrialPlThreeYearsResponseTrialPlThreeYearsBalances](docs/Model/TrialPlThreeYearsResponseTrialPlThreeYearsBalances.md)
- [TrialPlThreeYearsResponseTrialPlThreeYearsSections](docs/Model/TrialPlThreeYearsResponseTrialPlThreeYearsSections.md)
- [TrialPlTwoYearsResponse](docs/Model/TrialPlTwoYearsResponse.md)
- [TrialPlTwoYearsResponseTrialPlTwoYears](docs/Model/TrialPlTwoYearsResponseTrialPlTwoYears.md)
- [TrialPlTwoYearsResponseTrialPlTwoYearsBalances](docs/Model/TrialPlTwoYearsResponseTrialPlTwoYearsBalances.md)
- [TrialPlTwoYearsResponseTrialPlTwoYearsSections](docs/Model/TrialPlTwoYearsResponseTrialPlTwoYearsSections.md)
- [UnauthorizedError](docs/Model/UnauthorizedError.md)
- [User](docs/Model/User.md)
- [UserCapability](docs/Model/UserCapability.md)
- [UserParams](docs/Model/UserParams.md)
- [UserResponse](docs/Model/UserResponse.md)
- [WalletTxn](docs/Model/WalletTxn.md)
- [WalletTxnParams](docs/Model/WalletTxnParams.md)
- [WalletTxnResponse](docs/Model/WalletTxnResponse.md)
- [Walletable](docs/Model/Walletable.md)
- [WalletableCreateParams](docs/Model/WalletableCreateParams.md)
- [WalletableCreateResponse](docs/Model/WalletableCreateResponse.md)
- [WalletableCreateResponseWalletable](docs/Model/WalletableCreateResponseWalletable.md)
- [WalletableResponse](docs/Model/WalletableResponse.md)
- [WalletableUpdateParams](docs/Model/WalletableUpdateParams.md)

## Authorization

### oauth2

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://accounts.secure.freee.co.jp/public_api/authorize`
- **Scopes**: 
    - **read**: データの読み取り
    - **write**: データの書き込み

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.0`
    - Package version: `v2.3.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
