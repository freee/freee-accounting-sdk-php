# OpenAPIClient-php

<h1 id=\"freee_api\">freee API</h1> <hr /> <h2 id=\"\">スタートガイド</h2> <p>1. セットアップ</p> <ol> <ul><li><a href=\"https://support.freee.co.jp/hc/ja/articles/202847230\" class=\"external-link\" rel=\"nofollow\">freeeアカウント（無料）</a>を<a href=\"https://secure.freee.co.jp/users/sign_up\" class=\"external-link\" rel=\"nofollow\">作成</a>します（すでにお持ちの場合は次へ）</li><li><a href=\"https://app.secure.freee.co.jp/developers/demo_companies/description\" class=\"external-link\" rel=\"nofollow\">開発者向け事業所・環境を作成</a>します</li><li><span><a href=\"https://app.secure.freee.co.jp/developers/applications\" class=\"external-link\" rel=\"nofollow\">前のステップで作成した事業所を選択してfreeeアプリを追加</a>します</span></li><li>Client IDをCopyしておきます</li> </ul> </ol>  <p>2. 実際にAPIを叩いてみる（ブラウザからAPIのレスポンスを確認する）</p> <ol> <ul><li><span><span>以下のURLの●をclient_idに入れ替えて<a href=\"https://app.secure.freee.co.jp/developers/tutorials/3-%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E3%83%88%E3%83%BC%E3%82%AF%E3%83%B3%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B#%E8%AA%8D%E5%8F%AF%E3%82%B3%E3%83%BC%E3%83%89%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B\" class=\"external-link\" rel=\"nofollow\">アクセストークンを取得</a>します</span></span><ul><li><span><span><pre><code>https://accounts.secure.freee.co.jp/public_api/authorize?client_id=●&amp;redirect_uri=urn%3Aietf%3Awg%3Aoauth%3A2.0%3Aoob&amp;response_type=token</a></code></pre></span></span></li></ul></li><li><span><a href=\"https://developer.freee.co.jp/docs/accounting/reference#/%E9%80%A3%E7%B5%A1%E5%85%88\" class=\"external-link\" rel=\"nofollow\">APIリファレンス</a>で<code>Authorize</code>を押下します</span></li><li><span>アクセストークン<span><span>を入力して</span></span>&nbsp;もう一度<span><code>Authorize</code>を押下して<code>Close</code>を押下します</span></span></li><li>リファレンス内のCompanies（事業所）に移動し、<code>Try it out</code>を押下し、<code>Execute</code>を押下します</li><li>Response bodyを参照し、事業所ID(id属性)を活用して、Companies以外のエンドポイントでどのようなデータのやりとりできるのか確認します</li></ul> </ol> <p>3. 連携を実装する</p> <ol> <ul><li><a href=\"https://developer.freee.co.jp/tips\" class=\"external-link\" rel=\"nofollow\">API TIPS</a>を参考に、ユースケースごとの連携の概要を学びます。<span>例えば</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-salesmanegement-system\" class=\"external-link\" rel=\"nofollow\">SFA、CRM、販売管理システムから会計freeeへの連携</a>や<a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-excel-and-spreadsheet\" class=\"external-link\" rel=\"nofollow\">エクセルやgoogle spreadsheetからの連携</a>です</li><li>実利用向け事業所がすでにある場合は利用、ない場合は作成します（セットアップで作成したのは開発者向け環境のため活用不可）</li><li><a href=\"https://developer.freee.co.jp/docs/accounting/reference\" class=\"external-link\" rel=\"nofollow\">API documentation</a><span>&nbsp;を参照し、躓いた場合は</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/community/forum/community\" class=\"external-link\" rel=\"nofollow\">Community</a><span>&nbsp;で質問してみましょう</span></li></ul> </ol> <p>アプリケーションの登録方法や認証方法、またはAPIの活用方法でご不明な点がある場合は<a href=\"https://support.freee.co.jp/hc/ja/sections/115000030743\">ヘルプセンター</a>もご確認ください</p> <hr /> <h2 id=\"_2\">仕様</h2>  <h3 id=\"api\">APIエンドポイント</h3>  <p>https://api.freee.co.jp/ (httpsのみ)</p>  <h3 id=\"_3\">認証方式</h3>  <p><a href=\"http://tools.ietf.org/html/rfc6749\">OAuth2</a>に対応</p>  <ul> <li>Authorization Code Flow (Webアプリ向け)</li>  <li>Implicit Flow (Mobileアプリ向け)</li> </ul>  <h3 id=\"_4\">認証エンドポイント</h3>  <p>https://accounts.secure.freee.co.jp/</p>  <ul> <li>authorize : https://accounts.secure.freee.co.jp/public_api/authorize</li>  <li>token : https://accounts.secure.freee.co.jp/public_api/token</li> </ul>  <h3 id=\"_5\">アクセストークンのリフレッシュ</h3>  <p>認証時に得たrefresh_token を使ってtoken の期限をリフレッシュして新規に発行することが出来ます。</p>  <p>grant_type=refresh_token で https://accounts.secure.freee.co.jp/public_api/token にアクセスすればリフレッシュされます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/token</p>  <p>params: grant_type=refresh_token&amp;client_id=UID&amp;client_secret=SECRET&amp;refresh_token=REFRESH_TOKEN</p>  <p>詳細は<a href=\"https://github.com/applicake/doorkeeper/wiki/Enable-Refresh-Token-Credentials#flow\">refresh_token</a>を参照下さい。</p>  <h3 id=\"_6\">アクセストークンの破棄</h3>  <p>認証時に得たaccess_tokenまたはrefresh_tokenを使って、tokenを破棄することができます。 token=access_tokenまたはtoken=refresh_tokenでhttps://accounts.secure.freee.co.jp/public_api/revokeにアクセスすると破棄されます。token_type_hintでaccess_tokenまたはrefresh_tokenを陽に指定できます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/revoke</p>  <p>params: token=ACCESS_TOKEN</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN</p>  <p>または</p>  <p>params: token=ACCESS_TOKEN&amp;token_type_hint=access_token</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN&amp;token_type_hint=refresh_token</p>  <p>詳細は <a href=\"https://tools.ietf.org/html/rfc7009\">OAuth 2.0 Token revocation</a> をご参照ください。</p>  <h3 id=\"_7\">データフォーマット</h3>  <p>リクエスト、レスポンスともにJSON形式をサポート</p>  <h3 id=\"_8\">共通レスポンスヘッダー</h3>  <p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>  <ul> <li> <p>X-Freee-Request-ID</p> <ul> <li>各リクエスト毎に発行されるID</li> </ul> </li> </ul>  <h3 id=\"_9\">共通エラーレスポンス</h3>  <ul> <li> <p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p> </li>  <li> <p>type</p>  <ul> <li>status : HTTPステータスコードの説明</li>  <li>validation : エラーの詳細の説明（開発者向け）</li> </ul> </li> </ul>  <p>レスポンスの例</p>  <pre><code>  {     &quot;status_code&quot; : 400,     &quot;errors&quot; : [       {         &quot;type&quot; : &quot;status&quot;,         &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]       },       {         &quot;type&quot; : &quot;validation&quot;,         &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]       }     ]   }</code></pre> <hr /> <h2 id=\"_10\">連絡先</h2>  <p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p> <hr />&copy; Since 2013 freee K.K.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: v1.0
- Package version: v2.0.0-alpha
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

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
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
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
$parameters = new \Freee\Accounting\Model\AccountItemParams(); // \Freee\Accounting\Model\AccountItemParams | 勘定科目の作成

try {
    $result = $apiInstance->createAccountItem($parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountItemsApi->createAccountItem: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.freee.co.jp*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountItemsApi* | [**createAccountItem**](docs/Api/AccountItemsApi.md#createaccountitem) | **POST** /api/1/account_items | 勘定科目の作成
*AccountItemsApi* | [**destroyAccountItem**](docs/Api/AccountItemsApi.md#destroyaccountitem) | **DELETE** /api/1/account_items/{id} | 勘定科目の削除
*AccountItemsApi* | [**getAccountItem**](docs/Api/AccountItemsApi.md#getaccountitem) | **GET** /api/1/account_items/{id} | 勘定科目の詳細情報の取得
*AccountItemsApi* | [**getAccountItems**](docs/Api/AccountItemsApi.md#getaccountitems) | **GET** /api/1/account_items | 勘定科目一覧の取得
*AccountItemsApi* | [**updateAccountItem**](docs/Api/AccountItemsApi.md#updateaccountitem) | **PUT** /api/1/account_items/{id} | 勘定科目の更新
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
*UsersApi* | [**getUsersCapabilities**](docs/Api/UsersApi.md#getuserscapabilities) | **GET** /api/1/users/capabilities | ログインユーザの権限の取得
*UsersApi* | [**getUsersMe**](docs/Api/UsersApi.md#getusersme) | **GET** /api/1/users/me | ログインユーザ情報の取得
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


## Documentation For Models

 - [AccountItem](docs/Model/AccountItem.md)
 - [AccountItemItems](docs/Model/AccountItemItems.md)
 - [AccountItemParams](docs/Model/AccountItemParams.md)
 - [AccountItemParamsAccountItem](docs/Model/AccountItemParamsAccountItem.md)
 - [AccountItemParamsAccountItemItems](docs/Model/AccountItemParamsAccountItemItems.md)
 - [AccountItemPartners](docs/Model/AccountItemPartners.md)
 - [AccountItemsCreateResponse](docs/Model/AccountItemsCreateResponse.md)
 - [AccountItemsIndexResponse](docs/Model/AccountItemsIndexResponse.md)
 - [AccountItemsIndexResponseAccountItems](docs/Model/AccountItemsIndexResponseAccountItems.md)
 - [AccountItemsShowResponse](docs/Model/AccountItemsShowResponse.md)
 - [AccountItemsUpdateResponse](docs/Model/AccountItemsUpdateResponse.md)
 - [ApprovalRequest](docs/Model/ApprovalRequest.md)
 - [ApprovalRequestRequestItems](docs/Model/ApprovalRequestRequestItems.md)
 - [ApprovalRequestsResponse](docs/Model/ApprovalRequestsResponse.md)
 - [BadRequestError](docs/Model/BadRequestError.md)
 - [BadRequestErrorErrors](docs/Model/BadRequestErrorErrors.md)
 - [BadRequestNotFoundError](docs/Model/BadRequestNotFoundError.md)
 - [BadRequestNotFoundErrorErrors](docs/Model/BadRequestNotFoundErrorErrors.md)
 - [Bank](docs/Model/Bank.md)
 - [BanksIndexResponse](docs/Model/BanksIndexResponse.md)
 - [BanksShowResponse](docs/Model/BanksShowResponse.md)
 - [CompaniesIndexResponse](docs/Model/CompaniesIndexResponse.md)
 - [CompaniesIndexResponseCompanies](docs/Model/CompaniesIndexResponseCompanies.md)
 - [CompaniesShowResponse](docs/Model/CompaniesShowResponse.md)
 - [CompaniesShowResponseCompany](docs/Model/CompaniesShowResponseCompany.md)
 - [CompaniesUpdateResponse](docs/Model/CompaniesUpdateResponse.md)
 - [CompaniesUpdateResponseCompany](docs/Model/CompaniesUpdateResponseCompany.md)
 - [CreateDealParams](docs/Model/CreateDealParams.md)
 - [CreateDealParamsDetails](docs/Model/CreateDealParamsDetails.md)
 - [CreateDealParamsPayments](docs/Model/CreateDealParamsPayments.md)
 - [CreateExpenseApplicationParams](docs/Model/CreateExpenseApplicationParams.md)
 - [CreateExpenseApplicationParamsExpenseApplicationLines](docs/Model/CreateExpenseApplicationParamsExpenseApplicationLines.md)
 - [CreateItemParams](docs/Model/CreateItemParams.md)
 - [CreateWalletTxnParams](docs/Model/CreateWalletTxnParams.md)
 - [DealPaymentParams](docs/Model/DealPaymentParams.md)
 - [Deals](docs/Model/Deals.md)
 - [DealsCreateResponse](docs/Model/DealsCreateResponse.md)
 - [DealsDetails](docs/Model/DealsDetails.md)
 - [DealsIndexResponse](docs/Model/DealsIndexResponse.md)
 - [DealsIndexResponseMeta](docs/Model/DealsIndexResponseMeta.md)
 - [DealsPayments](docs/Model/DealsPayments.md)
 - [DealsRenews](docs/Model/DealsRenews.md)
 - [DealsRenewsDetails](docs/Model/DealsRenewsDetails.md)
 - [DealsResponse](docs/Model/DealsResponse.md)
 - [DealsWithoutRenews](docs/Model/DealsWithoutRenews.md)
 - [ExpenseApplication](docs/Model/ExpenseApplication.md)
 - [ExpenseApplicationExpenseApplicationLines](docs/Model/ExpenseApplicationExpenseApplicationLines.md)
 - [ExpenseApplicationLineTemplate](docs/Model/ExpenseApplicationLineTemplate.md)
 - [ExpenseApplicationLineTemplateParams](docs/Model/ExpenseApplicationLineTemplateParams.md)
 - [ExpenseApplicationLineTemplatesIndexResponse](docs/Model/ExpenseApplicationLineTemplatesIndexResponse.md)
 - [ExpenseApplicationLineTemplatesResponse](docs/Model/ExpenseApplicationLineTemplatesResponse.md)
 - [ExpenseApplicationsIndexResponse](docs/Model/ExpenseApplicationsIndexResponse.md)
 - [ExpenseApplicationsResponse](docs/Model/ExpenseApplicationsResponse.md)
 - [FiscalYears](docs/Model/FiscalYears.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [InternalServerErrorErrors](docs/Model/InternalServerErrorErrors.md)
 - [Invoice](docs/Model/Invoice.md)
 - [InvoiceInvoiceContents](docs/Model/InvoiceInvoiceContents.md)
 - [InvoiceTotalAmountPerVatRate](docs/Model/InvoiceTotalAmountPerVatRate.md)
 - [InvoicesCreateParams](docs/Model/InvoicesCreateParams.md)
 - [InvoicesCreateParamsInvoiceContents](docs/Model/InvoicesCreateParamsInvoiceContents.md)
 - [InvoicesIndexResponse](docs/Model/InvoicesIndexResponse.md)
 - [InvoicesResponse](docs/Model/InvoicesResponse.md)
 - [InvoicesUpdateParams](docs/Model/InvoicesUpdateParams.md)
 - [InvoicesUpdateParamsInvoiceContents](docs/Model/InvoicesUpdateParamsInvoiceContents.md)
 - [ItemResponse](docs/Model/ItemResponse.md)
 - [ItemResponseItem](docs/Model/ItemResponseItem.md)
 - [ItemsIndexResponse](docs/Model/ItemsIndexResponse.md)
 - [ItemsIndexResponseItems](docs/Model/ItemsIndexResponseItems.md)
 - [JournalsDownloadNotFoundError](docs/Model/JournalsDownloadNotFoundError.md)
 - [JournalsEnqueueJournalsResponse](docs/Model/JournalsEnqueueJournalsResponse.md)
 - [JournalsEnqueueJournalsResponseJournals](docs/Model/JournalsEnqueueJournalsResponseJournals.md)
 - [JournalsStatusNotFoundError](docs/Model/JournalsStatusNotFoundError.md)
 - [JournalsStatusResponse](docs/Model/JournalsStatusResponse.md)
 - [JournalsStatusResponseJournals](docs/Model/JournalsStatusResponseJournals.md)
 - [ManualJournal](docs/Model/ManualJournal.md)
 - [ManualJournalDetails](docs/Model/ManualJournalDetails.md)
 - [ManualJournalsCreateParams](docs/Model/ManualJournalsCreateParams.md)
 - [ManualJournalsCreateParamsDetails](docs/Model/ManualJournalsCreateParamsDetails.md)
 - [ManualJournalsCreateResponse](docs/Model/ManualJournalsCreateResponse.md)
 - [ManualJournalsIndexResponse](docs/Model/ManualJournalsIndexResponse.md)
 - [ManualJournalsShowResponse](docs/Model/ManualJournalsShowResponse.md)
 - [ManualJournalsUpdateParams](docs/Model/ManualJournalsUpdateParams.md)
 - [ManualJournalsUpdateParamsDetails](docs/Model/ManualJournalsUpdateParamsDetails.md)
 - [ManualJournalsUpdateResponse](docs/Model/ManualJournalsUpdateResponse.md)
 - [Partner](docs/Model/Partner.md)
 - [PartnerAllOf](docs/Model/PartnerAllOf.md)
 - [PartnerAllOf1](docs/Model/PartnerAllOf1.md)
 - [PartnerCodeParams](docs/Model/PartnerCodeParams.md)
 - [PartnerCreateParams](docs/Model/PartnerCreateParams.md)
 - [PartnerCreateParamsAddressAttributes](docs/Model/PartnerCreateParamsAddressAttributes.md)
 - [PartnerCreateParamsPartnerBankAccountAttributes](docs/Model/PartnerCreateParamsPartnerBankAccountAttributes.md)
 - [PartnerCreateParamsPartnerDocSettingAttributes](docs/Model/PartnerCreateParamsPartnerDocSettingAttributes.md)
 - [PartnerUpdateParams](docs/Model/PartnerUpdateParams.md)
 - [PartnersIndexResponse](docs/Model/PartnersIndexResponse.md)
 - [PartnersResponse](docs/Model/PartnersResponse.md)
 - [Receipt](docs/Model/Receipt.md)
 - [ReceiptUpdateParams](docs/Model/ReceiptUpdateParams.md)
 - [ReceiptUser](docs/Model/ReceiptUser.md)
 - [ReceiptsIndexResponse](docs/Model/ReceiptsIndexResponse.md)
 - [ReceiptsResponse](docs/Model/ReceiptsResponse.md)
 - [RenewsCreateDetailParams](docs/Model/RenewsCreateDetailParams.md)
 - [RenewsCreateParams](docs/Model/RenewsCreateParams.md)
 - [RenewsResponse](docs/Model/RenewsResponse.md)
 - [RenewsUpdateDetailParams](docs/Model/RenewsUpdateDetailParams.md)
 - [RenewsUpdateParams](docs/Model/RenewsUpdateParams.md)
 - [Section](docs/Model/Section.md)
 - [SectionParams](docs/Model/SectionParams.md)
 - [SectionsCreateResponse](docs/Model/SectionsCreateResponse.md)
 - [SectionsCreateResponseSection](docs/Model/SectionsCreateResponseSection.md)
 - [SectionsIndexResponse](docs/Model/SectionsIndexResponse.md)
 - [SectionsResponse](docs/Model/SectionsResponse.md)
 - [SectionsShowResponse](docs/Model/SectionsShowResponse.md)
 - [SectionsShowResponseSection](docs/Model/SectionsShowResponseSection.md)
 - [SectionsUpdateResponse](docs/Model/SectionsUpdateResponse.md)
 - [SectionsUpdateResponseSection](docs/Model/SectionsUpdateResponseSection.md)
 - [SegmentTag](docs/Model/SegmentTag.md)
 - [SegmentTagParams](docs/Model/SegmentTagParams.md)
 - [SegmentTagsIndexResponse](docs/Model/SegmentTagsIndexResponse.md)
 - [SegmentTagsResponse](docs/Model/SegmentTagsResponse.md)
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
 - [TagsIndexResponse](docs/Model/TagsIndexResponse.md)
 - [TagsParams](docs/Model/TagsParams.md)
 - [TagsResponse](docs/Model/TagsResponse.md)
 - [TaxesCode](docs/Model/TaxesCode.md)
 - [TaxesCodesIndexResponse](docs/Model/TaxesCodesIndexResponse.md)
 - [TaxesCodesShowResponse](docs/Model/TaxesCodesShowResponse.md)
 - [TaxesCompaniesResponse](docs/Model/TaxesCompaniesResponse.md)
 - [TaxesCompaniesResponseTaxes](docs/Model/TaxesCompaniesResponseTaxes.md)
 - [TaxesIndexResponse](docs/Model/TaxesIndexResponse.md)
 - [TaxesIndexResponseTaxes](docs/Model/TaxesIndexResponseTaxes.md)
 - [Transfer](docs/Model/Transfer.md)
 - [TransferParams](docs/Model/TransferParams.md)
 - [TransfersIndexResponse](docs/Model/TransfersIndexResponse.md)
 - [TransfersResponse](docs/Model/TransfersResponse.md)
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
 - [UpdateCompanyParams](docs/Model/UpdateCompanyParams.md)
 - [UpdateCompanyParamsAddressAttributes](docs/Model/UpdateCompanyParamsAddressAttributes.md)
 - [UpdateCompanyParamsDocTemplate](docs/Model/UpdateCompanyParamsDocTemplate.md)
 - [UpdateCompanyParamsFiscalYearsAttributes](docs/Model/UpdateCompanyParamsFiscalYearsAttributes.md)
 - [UpdateCompanyParamsSalesInformationAttributes](docs/Model/UpdateCompanyParamsSalesInformationAttributes.md)
 - [UpdateDealParams](docs/Model/UpdateDealParams.md)
 - [UpdateDealParamsDetails](docs/Model/UpdateDealParamsDetails.md)
 - [UpdateExpenseApplicationParams](docs/Model/UpdateExpenseApplicationParams.md)
 - [UpdateExpenseApplicationParamsExpenseApplicationLines](docs/Model/UpdateExpenseApplicationParamsExpenseApplicationLines.md)
 - [UpdateItemParams](docs/Model/UpdateItemParams.md)
 - [User](docs/Model/User.md)
 - [UserUpdateParams](docs/Model/UserUpdateParams.md)
 - [UsersCapabilitiesResponse](docs/Model/UsersCapabilitiesResponse.md)
 - [UsersCapability](docs/Model/UsersCapability.md)
 - [UsersIndexResponse](docs/Model/UsersIndexResponse.md)
 - [UsersMeResponse](docs/Model/UsersMeResponse.md)
 - [UsersMeResponseUser](docs/Model/UsersMeResponseUser.md)
 - [UsersMeResponseUserCompanies](docs/Model/UsersMeResponseUserCompanies.md)
 - [UsersUpdateResponse](docs/Model/UsersUpdateResponse.md)
 - [WalletTxn](docs/Model/WalletTxn.md)
 - [WalletTxnsIndexResponse](docs/Model/WalletTxnsIndexResponse.md)
 - [WalletTxnsShowResponse](docs/Model/WalletTxnsShowResponse.md)
 - [Walletable](docs/Model/Walletable.md)
 - [WalletableCreateParams](docs/Model/WalletableCreateParams.md)
 - [WalletableUpdateParams](docs/Model/WalletableUpdateParams.md)
 - [WalletablesCreateResponse](docs/Model/WalletablesCreateResponse.md)
 - [WalletablesIndexResponse](docs/Model/WalletablesIndexResponse.md)
 - [WalletablesResponse](docs/Model/WalletablesResponse.md)


## Documentation For Authorization



## oauth2


- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://accounts.secure.freee.co.jp/public_api/authorize
- **Scopes**: 
- **write**: データの書き込み
- **read**: データの読み取り


## Author



