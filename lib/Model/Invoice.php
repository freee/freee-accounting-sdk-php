<?php
/**
 * Invoice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * <h1 id=\"freee_api\">freee API</h1> <hr /> <h2 id=\"\">スタートガイド</h2> <p>1. セットアップ</p> <ol> <ul><li><a href=\"https://support.freee.co.jp/hc/ja/articles/202847230\" class=\"external-link\" rel=\"nofollow\">freeeアカウント（無料）</a>を<a href=\"https://secure.freee.co.jp/users/sign_up\" class=\"external-link\" rel=\"nofollow\">作成</a>します（すでにお持ちの場合は次へ）</li><li><a href=\"https://app.secure.freee.co.jp/developers/demo_companies/description\" class=\"external-link\" rel=\"nofollow\">開発者向け事業所・環境を作成</a>します</li><li><span><a href=\"https://app.secure.freee.co.jp/developers/applications\" class=\"external-link\" rel=\"nofollow\">前のステップで作成した事業所を選択してfreeeアプリを追加</a>します</span></li><li>Client IDをCopyしておきます</li> </ul> </ol>  <p>2. 実際にAPIを叩いてみる（ブラウザからAPIのレスポンスを確認する）</p> <ol> <ul><li><span><span>以下のURLの●をclient_idに入れ替えて<a href=\"https://app.secure.freee.co.jp/developers/tutorials/3-%E3%82%A2%E3%82%AF%E3%82%BB%E3%82%B9%E3%83%88%E3%83%BC%E3%82%AF%E3%83%B3%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B#%E8%AA%8D%E5%8F%AF%E3%82%B3%E3%83%BC%E3%83%89%E3%82%92%E5%8F%96%E5%BE%97%E3%81%99%E3%82%8B\" class=\"external-link\" rel=\"nofollow\">アクセストークンを取得</a>します</span></span><ul><li><span><span><pre><code>https://accounts.secure.freee.co.jp/public_api/authorize?client_id=●&amp;redirect_uri=urn%3Aietf%3Awg%3Aoauth%3A2.0%3Aoob&amp;response_type=token</a></code></pre></span></span></li></ul></li><li><span><a href=\"https://developer.freee.co.jp/docs/accounting/reference#/%E9%80%A3%E7%B5%A1%E5%85%88\" class=\"external-link\" rel=\"nofollow\">APIリファレンス</a>で<code>Authorize</code>を押下します</span></li><li><span>アクセストークン<span><span>を入力して</span></span>&nbsp;もう一度<span><code>Authorize</code>を押下して<code>Close</code>を押下します</span></span></li><li>リファレンス内のCompanies（事業所）に移動し、<code>Try it out</code>を押下し、<code>Execute</code>を押下します</li><li>Response bodyを参照し、事業所ID(id属性)を活用して、Companies以外のエンドポイントでどのようなデータのやりとりできるのか確認します</li></ul> </ol> <p>3. 連携を実装する</p> <ol> <ul><li><a href=\"https://developer.freee.co.jp/tips\" class=\"external-link\" rel=\"nofollow\">API TIPS</a>を参考に、ユースケースごとの連携の概要を学びます。<span>例えば</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-salesmanegement-system\" class=\"external-link\" rel=\"nofollow\">SFA、CRM、販売管理システムから会計freeeへの連携</a>や<a href=\"https://developer.freee.co.jp/tips/how-to-cooperate-excel-and-spreadsheet\" class=\"external-link\" rel=\"nofollow\">エクセルやgoogle spreadsheetからの連携</a>です</li><li>実利用向け事業所がすでにある場合は利用、ない場合は作成します（セットアップで作成したのは開発者向け環境のため活用不可）</li><li><a href=\"https://developer.freee.co.jp/docs/accounting/reference\" class=\"external-link\" rel=\"nofollow\">API documentation</a><span>&nbsp;を参照し、躓いた場合は</span><span>&nbsp;</span><a href=\"https://developer.freee.co.jp/community/forum/community\" class=\"external-link\" rel=\"nofollow\">Community</a><span>&nbsp;で質問してみましょう</span></li></ul> </ol> <p>アプリケーションの登録方法や認証方法、またはAPIの活用方法でご不明な点がある場合は<a href=\"https://support.freee.co.jp/hc/ja/sections/115000030743\">ヘルプセンター</a>もご確認ください</p> <hr /> <h2 id=\"_2\">仕様</h2>  <h3 id=\"api\">APIエンドポイント</h3>  <p>https://api.freee.co.jp/ (httpsのみ)</p>  <h3 id=\"_3\">認証方式</h3>  <p><a href=\"http://tools.ietf.org/html/rfc6749\">OAuth2</a>に対応</p>  <ul> <li>Authorization Code Flow (Webアプリ向け)</li>  <li>Implicit Flow (Mobileアプリ向け)</li> </ul>  <h3 id=\"_4\">認証エンドポイント</h3>  <p>https://accounts.secure.freee.co.jp/</p>  <ul> <li>authorize : https://accounts.secure.freee.co.jp/public_api/authorize</li>  <li>token : https://accounts.secure.freee.co.jp/public_api/token</li> </ul>  <h3 id=\"_5\">アクセストークンのリフレッシュ</h3>  <p>認証時に得たrefresh_token を使ってtoken の期限をリフレッシュして新規に発行することが出来ます。</p>  <p>grant_type=refresh_token で https://accounts.secure.freee.co.jp/public_api/token にアクセスすればリフレッシュされます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/token</p>  <p>params: grant_type=refresh_token&amp;client_id=UID&amp;client_secret=SECRET&amp;refresh_token=REFRESH_TOKEN</p>  <p>詳細は<a href=\"https://github.com/applicake/doorkeeper/wiki/Enable-Refresh-Token-Credentials#flow\">refresh_token</a>を参照下さい。</p>  <h3 id=\"_6\">アクセストークンの破棄</h3>  <p>認証時に得たaccess_tokenまたはrefresh_tokenを使って、tokenを破棄することができます。 token=access_tokenまたはtoken=refresh_tokenでhttps://accounts.secure.freee.co.jp/public_api/revokeにアクセスすると破棄されます。token_type_hintでaccess_tokenまたはrefresh_tokenを陽に指定できます。</p>  <p>e.g.)</p>  <p>POST: https://accounts.secure.freee.co.jp/public_api/revoke</p>  <p>params: token=ACCESS_TOKEN</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN</p>  <p>または</p>  <p>params: token=ACCESS_TOKEN&amp;token_type_hint=access_token</p>  <p>または</p>  <p>params: token=REFRESH_TOKEN&amp;token_type_hint=refresh_token</p>  <p>詳細は <a href=\"https://tools.ietf.org/html/rfc7009\">OAuth 2.0 Token revocation</a> をご参照ください。</p>  <h3 id=\"_7\">データフォーマット</h3>  <p>リクエスト、レスポンスともにJSON形式をサポート</p>  <h3 id=\"_8\">共通レスポンスヘッダー</h3>  <p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>  <ul> <li> <p>X-Freee-Request-ID</p> <ul> <li>各リクエスト毎に発行されるID</li> </ul> </li> </ul>  <h3 id=\"_9\">共通エラーレスポンス</h3>  <ul> <li> <p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p> </li>  <li> <p>type</p>  <ul> <li>status : HTTPステータスコードの説明</li>  <li>validation : エラーの詳細の説明（開発者向け）</li> </ul> </li> </ul>  <p>レスポンスの例</p>  <pre><code>  {     &quot;status_code&quot; : 400,     &quot;errors&quot; : [       {         &quot;type&quot; : &quot;status&quot;,         &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]       },       {         &quot;type&quot; : &quot;validation&quot;,         &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]       }     ]   }</code></pre> <hr /> <h2 id=\"_10\">連絡先</h2>  <p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p> <hr />&copy; Since 2013 freee K.K.
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Freee\Accounting\Model;

use \ArrayAccess;
use \Freee\Accounting\ObjectSerializer;

/**
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Invoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'company_id' => 'int',
        'issue_date' => 'string',
        'partner_id' => 'int',
        'partner_code' => 'string',
        'invoice_number' => 'string',
        'title' => 'string',
        'due_date' => 'string',
        'total_amount' => 'int',
        'total_vat' => 'int',
        'sub_total' => 'int',
        'booking_date' => 'string',
        'description' => 'string',
        'invoice_status' => 'string',
        'payment_status' => 'string',
        'payment_date' => 'string',
        'web_published_at' => 'string',
        'web_downloaded_at' => 'string',
        'web_confirmed_at' => 'string',
        'mail_sent_at' => 'string',
        'posting_status' => 'string',
        'partner_name' => 'string',
        'partner_long_name' => 'string',
        'partner_title' => 'string',
        'partner_zipcode' => 'string',
        'partner_prefecture_code' => 'int',
        'partner_prefecture_name' => 'string',
        'partner_address1' => 'string',
        'partner_address2' => 'string',
        'partner_contact_info' => 'string',
        'company_name' => 'string',
        'company_zipcode' => 'string',
        'company_prefecture_code' => 'int',
        'company_prefecture_name' => 'string',
        'company_address1' => 'string',
        'company_address2' => 'string',
        'company_contact_info' => 'string',
        'payment_type' => 'string',
        'payment_bank_info' => 'string',
        'message' => 'string',
        'notes' => 'string',
        'invoice_layout' => 'string',
        'tax_entry_method' => 'string',
        'deal_id' => 'int',
        'invoice_contents' => '\Freee\Accounting\Model\InvoiceInvoiceContents[]',
        'total_amount_per_vat_rate' => '\Freee\Accounting\Model\InvoiceTotalAmountPerVatRate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'company_id' => null,
        'issue_date' => null,
        'partner_id' => null,
        'partner_code' => null,
        'invoice_number' => null,
        'title' => null,
        'due_date' => null,
        'total_amount' => null,
        'total_vat' => null,
        'sub_total' => null,
        'booking_date' => null,
        'description' => null,
        'invoice_status' => null,
        'payment_status' => null,
        'payment_date' => null,
        'web_published_at' => null,
        'web_downloaded_at' => null,
        'web_confirmed_at' => null,
        'mail_sent_at' => null,
        'posting_status' => null,
        'partner_name' => null,
        'partner_long_name' => null,
        'partner_title' => null,
        'partner_zipcode' => null,
        'partner_prefecture_code' => null,
        'partner_prefecture_name' => null,
        'partner_address1' => null,
        'partner_address2' => null,
        'partner_contact_info' => null,
        'company_name' => null,
        'company_zipcode' => null,
        'company_prefecture_code' => null,
        'company_prefecture_name' => null,
        'company_address1' => null,
        'company_address2' => null,
        'company_contact_info' => null,
        'payment_type' => null,
        'payment_bank_info' => null,
        'message' => null,
        'notes' => null,
        'invoice_layout' => null,
        'tax_entry_method' => null,
        'deal_id' => null,
        'invoice_contents' => null,
        'total_amount_per_vat_rate' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'company_id' => 'company_id',
        'issue_date' => 'issue_date',
        'partner_id' => 'partner_id',
        'partner_code' => 'partner_code',
        'invoice_number' => 'invoice_number',
        'title' => 'title',
        'due_date' => 'due_date',
        'total_amount' => 'total_amount',
        'total_vat' => 'total_vat',
        'sub_total' => 'sub_total',
        'booking_date' => 'booking_date',
        'description' => 'description',
        'invoice_status' => 'invoice_status',
        'payment_status' => 'payment_status',
        'payment_date' => 'payment_date',
        'web_published_at' => 'web_published_at',
        'web_downloaded_at' => 'web_downloaded_at',
        'web_confirmed_at' => 'web_confirmed_at',
        'mail_sent_at' => 'mail_sent_at',
        'posting_status' => 'posting_status',
        'partner_name' => 'partner_name',
        'partner_long_name' => 'partner_long_name',
        'partner_title' => 'partner_title',
        'partner_zipcode' => 'partner_zipcode',
        'partner_prefecture_code' => 'partner_prefecture_code',
        'partner_prefecture_name' => 'partner_prefecture_name',
        'partner_address1' => 'partner_address1',
        'partner_address2' => 'partner_address2',
        'partner_contact_info' => 'partner_contact_info',
        'company_name' => 'company_name',
        'company_zipcode' => 'company_zipcode',
        'company_prefecture_code' => 'company_prefecture_code',
        'company_prefecture_name' => 'company_prefecture_name',
        'company_address1' => 'company_address1',
        'company_address2' => 'company_address2',
        'company_contact_info' => 'company_contact_info',
        'payment_type' => 'payment_type',
        'payment_bank_info' => 'payment_bank_info',
        'message' => 'message',
        'notes' => 'notes',
        'invoice_layout' => 'invoice_layout',
        'tax_entry_method' => 'tax_entry_method',
        'deal_id' => 'deal_id',
        'invoice_contents' => 'invoice_contents',
        'total_amount_per_vat_rate' => 'total_amount_per_vat_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'issue_date' => 'setIssueDate',
        'partner_id' => 'setPartnerId',
        'partner_code' => 'setPartnerCode',
        'invoice_number' => 'setInvoiceNumber',
        'title' => 'setTitle',
        'due_date' => 'setDueDate',
        'total_amount' => 'setTotalAmount',
        'total_vat' => 'setTotalVat',
        'sub_total' => 'setSubTotal',
        'booking_date' => 'setBookingDate',
        'description' => 'setDescription',
        'invoice_status' => 'setInvoiceStatus',
        'payment_status' => 'setPaymentStatus',
        'payment_date' => 'setPaymentDate',
        'web_published_at' => 'setWebPublishedAt',
        'web_downloaded_at' => 'setWebDownloadedAt',
        'web_confirmed_at' => 'setWebConfirmedAt',
        'mail_sent_at' => 'setMailSentAt',
        'posting_status' => 'setPostingStatus',
        'partner_name' => 'setPartnerName',
        'partner_long_name' => 'setPartnerLongName',
        'partner_title' => 'setPartnerTitle',
        'partner_zipcode' => 'setPartnerZipcode',
        'partner_prefecture_code' => 'setPartnerPrefectureCode',
        'partner_prefecture_name' => 'setPartnerPrefectureName',
        'partner_address1' => 'setPartnerAddress1',
        'partner_address2' => 'setPartnerAddress2',
        'partner_contact_info' => 'setPartnerContactInfo',
        'company_name' => 'setCompanyName',
        'company_zipcode' => 'setCompanyZipcode',
        'company_prefecture_code' => 'setCompanyPrefectureCode',
        'company_prefecture_name' => 'setCompanyPrefectureName',
        'company_address1' => 'setCompanyAddress1',
        'company_address2' => 'setCompanyAddress2',
        'company_contact_info' => 'setCompanyContactInfo',
        'payment_type' => 'setPaymentType',
        'payment_bank_info' => 'setPaymentBankInfo',
        'message' => 'setMessage',
        'notes' => 'setNotes',
        'invoice_layout' => 'setInvoiceLayout',
        'tax_entry_method' => 'setTaxEntryMethod',
        'deal_id' => 'setDealId',
        'invoice_contents' => 'setInvoiceContents',
        'total_amount_per_vat_rate' => 'setTotalAmountPerVatRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'issue_date' => 'getIssueDate',
        'partner_id' => 'getPartnerId',
        'partner_code' => 'getPartnerCode',
        'invoice_number' => 'getInvoiceNumber',
        'title' => 'getTitle',
        'due_date' => 'getDueDate',
        'total_amount' => 'getTotalAmount',
        'total_vat' => 'getTotalVat',
        'sub_total' => 'getSubTotal',
        'booking_date' => 'getBookingDate',
        'description' => 'getDescription',
        'invoice_status' => 'getInvoiceStatus',
        'payment_status' => 'getPaymentStatus',
        'payment_date' => 'getPaymentDate',
        'web_published_at' => 'getWebPublishedAt',
        'web_downloaded_at' => 'getWebDownloadedAt',
        'web_confirmed_at' => 'getWebConfirmedAt',
        'mail_sent_at' => 'getMailSentAt',
        'posting_status' => 'getPostingStatus',
        'partner_name' => 'getPartnerName',
        'partner_long_name' => 'getPartnerLongName',
        'partner_title' => 'getPartnerTitle',
        'partner_zipcode' => 'getPartnerZipcode',
        'partner_prefecture_code' => 'getPartnerPrefectureCode',
        'partner_prefecture_name' => 'getPartnerPrefectureName',
        'partner_address1' => 'getPartnerAddress1',
        'partner_address2' => 'getPartnerAddress2',
        'partner_contact_info' => 'getPartnerContactInfo',
        'company_name' => 'getCompanyName',
        'company_zipcode' => 'getCompanyZipcode',
        'company_prefecture_code' => 'getCompanyPrefectureCode',
        'company_prefecture_name' => 'getCompanyPrefectureName',
        'company_address1' => 'getCompanyAddress1',
        'company_address2' => 'getCompanyAddress2',
        'company_contact_info' => 'getCompanyContactInfo',
        'payment_type' => 'getPaymentType',
        'payment_bank_info' => 'getPaymentBankInfo',
        'message' => 'getMessage',
        'notes' => 'getNotes',
        'invoice_layout' => 'getInvoiceLayout',
        'tax_entry_method' => 'getTaxEntryMethod',
        'deal_id' => 'getDealId',
        'invoice_contents' => 'getInvoiceContents',
        'total_amount_per_vat_rate' => 'getTotalAmountPerVatRate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const INVOICE_STATUS_DRAFT = 'draft';
    const INVOICE_STATUS_APPLYING = 'applying';
    const INVOICE_STATUS_REMANDED = 'remanded';
    const INVOICE_STATUS_REJECTED = 'rejected';
    const INVOICE_STATUS_APPROVED = 'approved';
    const INVOICE_STATUS_ISSUED = 'issued';
    const PAYMENT_STATUS_EMPTY = '';
    const PAYMENT_STATUS_UNSETTLED = 'unsettled';
    const PAYMENT_STATUS_SETTLED = 'settled';
    const POSTING_STATUS_EMPTY = '';
    const POSTING_STATUS_UNREQUESTED = 'unrequested';
    const POSTING_STATUS_PREVIEW_REGISTERED = 'preview_registered';
    const POSTING_STATUS_PREVIEW_FAILED = 'preview_failed';
    const POSTING_STATUS_ORDERED = 'ordered';
    const POSTING_STATUS_ORDER_FAILED = 'order_failed';
    const POSTING_STATUS_PRINTING = 'printing';
    const POSTING_STATUS_CANCELED = 'canceled';
    const POSTING_STATUS_POSTED = 'posted';
    const PAYMENT_TYPE_EMPTY = '';
    const PAYMENT_TYPE_TRANSFER = 'transfer';
    const PAYMENT_TYPE_DIRECT_DEBIT = 'direct_debit';
    const INVOICE_LAYOUT_DEFAULT_CLASSIC = 'default_classic';
    const INVOICE_LAYOUT_STANDARD_CLASSIC = 'standard_classic';
    const INVOICE_LAYOUT_ENVELOPE_CLASSIC = 'envelope_classic';
    const INVOICE_LAYOUT_CARRIED_FORWARD_STANDARD_CLASSIC = 'carried_forward_standard_classic';
    const INVOICE_LAYOUT_CARRIED_FORWARD_ENVELOPE_CLASSIC = 'carried_forward_envelope_classic';
    const INVOICE_LAYOUT_DEFAULT_MODERN = 'default_modern';
    const INVOICE_LAYOUT_STANDARD_MODERN = 'standard_modern';
    const INVOICE_LAYOUT_ENVELOPE_MODERN = 'envelope_modern';
    const TAX_ENTRY_METHOD_EMPTY = '';
    const TAX_ENTRY_METHOD_INCLUSIVE = 'inclusive';
    const TAX_ENTRY_METHOD_EXCLUSIVE = 'exclusive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceStatusAllowableValues()
    {
        return [
            self::INVOICE_STATUS_DRAFT,
            self::INVOICE_STATUS_APPLYING,
            self::INVOICE_STATUS_REMANDED,
            self::INVOICE_STATUS_REJECTED,
            self::INVOICE_STATUS_APPROVED,
            self::INVOICE_STATUS_ISSUED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_EMPTY,
            self::PAYMENT_STATUS_UNSETTLED,
            self::PAYMENT_STATUS_SETTLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPostingStatusAllowableValues()
    {
        return [
            self::POSTING_STATUS_EMPTY,
            self::POSTING_STATUS_UNREQUESTED,
            self::POSTING_STATUS_PREVIEW_REGISTERED,
            self::POSTING_STATUS_PREVIEW_FAILED,
            self::POSTING_STATUS_ORDERED,
            self::POSTING_STATUS_ORDER_FAILED,
            self::POSTING_STATUS_PRINTING,
            self::POSTING_STATUS_CANCELED,
            self::POSTING_STATUS_POSTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_EMPTY,
            self::PAYMENT_TYPE_TRANSFER,
            self::PAYMENT_TYPE_DIRECT_DEBIT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceLayoutAllowableValues()
    {
        return [
            self::INVOICE_LAYOUT_DEFAULT_CLASSIC,
            self::INVOICE_LAYOUT_STANDARD_CLASSIC,
            self::INVOICE_LAYOUT_ENVELOPE_CLASSIC,
            self::INVOICE_LAYOUT_CARRIED_FORWARD_STANDARD_CLASSIC,
            self::INVOICE_LAYOUT_CARRIED_FORWARD_ENVELOPE_CLASSIC,
            self::INVOICE_LAYOUT_DEFAULT_MODERN,
            self::INVOICE_LAYOUT_STANDARD_MODERN,
            self::INVOICE_LAYOUT_ENVELOPE_MODERN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxEntryMethodAllowableValues()
    {
        return [
            self::TAX_ENTRY_METHOD_EMPTY,
            self::TAX_ENTRY_METHOD_INCLUSIVE,
            self::TAX_ENTRY_METHOD_EXCLUSIVE,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['issue_date'] = isset($data['issue_date']) ? $data['issue_date'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['partner_code'] = isset($data['partner_code']) ? $data['partner_code'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['total_vat'] = isset($data['total_vat']) ? $data['total_vat'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : null;
        $this->container['booking_date'] = isset($data['booking_date']) ? $data['booking_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['invoice_status'] = isset($data['invoice_status']) ? $data['invoice_status'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['web_published_at'] = isset($data['web_published_at']) ? $data['web_published_at'] : null;
        $this->container['web_downloaded_at'] = isset($data['web_downloaded_at']) ? $data['web_downloaded_at'] : null;
        $this->container['web_confirmed_at'] = isset($data['web_confirmed_at']) ? $data['web_confirmed_at'] : null;
        $this->container['mail_sent_at'] = isset($data['mail_sent_at']) ? $data['mail_sent_at'] : null;
        $this->container['posting_status'] = isset($data['posting_status']) ? $data['posting_status'] : null;
        $this->container['partner_name'] = isset($data['partner_name']) ? $data['partner_name'] : null;
        $this->container['partner_long_name'] = isset($data['partner_long_name']) ? $data['partner_long_name'] : null;
        $this->container['partner_title'] = isset($data['partner_title']) ? $data['partner_title'] : null;
        $this->container['partner_zipcode'] = isset($data['partner_zipcode']) ? $data['partner_zipcode'] : null;
        $this->container['partner_prefecture_code'] = isset($data['partner_prefecture_code']) ? $data['partner_prefecture_code'] : null;
        $this->container['partner_prefecture_name'] = isset($data['partner_prefecture_name']) ? $data['partner_prefecture_name'] : null;
        $this->container['partner_address1'] = isset($data['partner_address1']) ? $data['partner_address1'] : null;
        $this->container['partner_address2'] = isset($data['partner_address2']) ? $data['partner_address2'] : null;
        $this->container['partner_contact_info'] = isset($data['partner_contact_info']) ? $data['partner_contact_info'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_zipcode'] = isset($data['company_zipcode']) ? $data['company_zipcode'] : null;
        $this->container['company_prefecture_code'] = isset($data['company_prefecture_code']) ? $data['company_prefecture_code'] : null;
        $this->container['company_prefecture_name'] = isset($data['company_prefecture_name']) ? $data['company_prefecture_name'] : null;
        $this->container['company_address1'] = isset($data['company_address1']) ? $data['company_address1'] : null;
        $this->container['company_address2'] = isset($data['company_address2']) ? $data['company_address2'] : null;
        $this->container['company_contact_info'] = isset($data['company_contact_info']) ? $data['company_contact_info'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['payment_bank_info'] = isset($data['payment_bank_info']) ? $data['payment_bank_info'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['invoice_layout'] = isset($data['invoice_layout']) ? $data['invoice_layout'] : null;
        $this->container['tax_entry_method'] = isset($data['tax_entry_method']) ? $data['tax_entry_method'] : null;
        $this->container['deal_id'] = isset($data['deal_id']) ? $data['deal_id'] : null;
        $this->container['invoice_contents'] = isset($data['invoice_contents']) ? $data['invoice_contents'] : null;
        $this->container['total_amount_per_vat_rate'] = isset($data['total_amount_per_vat_rate']) ? $data['total_amount_per_vat_rate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 999999999999.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if ($this->container['issue_date'] === null) {
            $invalidProperties[] = "'issue_date' can't be null";
        }
        if ($this->container['partner_id'] === null) {
            $invalidProperties[] = "'partner_id' can't be null";
        }
        if ($this->container['invoice_number'] === null) {
            $invalidProperties[] = "'invoice_number' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['invoice_status'] === null) {
            $invalidProperties[] = "'invoice_status' can't be null";
        }
        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!is_null($this->container['invoice_status']) && !in_array($this->container['invoice_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['posting_status'] === null) {
            $invalidProperties[] = "'posting_status' can't be null";
        }
        $allowedValues = $this->getPostingStatusAllowableValues();
        if (!is_null($this->container['posting_status']) && !in_array($this->container['posting_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'posting_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['partner_prefecture_code']) && ($this->container['partner_prefecture_code'] > 46)) {
            $invalidProperties[] = "invalid value for 'partner_prefecture_code', must be smaller than or equal to 46.";
        }

        if (!is_null($this->container['partner_prefecture_code']) && ($this->container['partner_prefecture_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'partner_prefecture_code', must be bigger than or equal to 0.";
        }

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if (!is_null($this->container['company_prefecture_code']) && ($this->container['company_prefecture_code'] > 46)) {
            $invalidProperties[] = "invalid value for 'company_prefecture_code', must be smaller than or equal to 46.";
        }

        if (!is_null($this->container['company_prefecture_code']) && ($this->container['company_prefecture_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'company_prefecture_code', must be bigger than or equal to 0.";
        }

        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
        }
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['invoice_layout'] === null) {
            $invalidProperties[] = "'invoice_layout' can't be null";
        }
        $allowedValues = $this->getInvoiceLayoutAllowableValues();
        if (!is_null($this->container['invoice_layout']) && !in_array($this->container['invoice_layout'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_layout', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tax_entry_method'] === null) {
            $invalidProperties[] = "'tax_entry_method' can't be null";
        }
        $allowedValues = $this->getTaxEntryMethodAllowableValues();
        if (!is_null($this->container['tax_entry_method']) && !in_array($this->container['tax_entry_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tax_entry_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['total_amount_per_vat_rate'] === null) {
            $invalidProperties[] = "'total_amount_per_vat_rate' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id 請求書ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int $company_id 事業所ID
     *
     * @return $this
     */
    public function setCompanyId($company_id)
    {

        if (($company_id > 999999999999)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling Invoice., must be smaller than or equal to 999999999999.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling Invoice., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets issue_date
     *
     * @return string
     */
    public function getIssueDate()
    {
        return $this->container['issue_date'];
    }

    /**
     * Sets issue_date
     *
     * @param string $issue_date 請求日 (yyyy-mm-dd)
     *
     * @return $this
     */
    public function setIssueDate($issue_date)
    {
        $this->container['issue_date'] = $issue_date;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int $partner_id 取引先ID
     *
     * @return $this
     */
    public function setPartnerId($partner_id)
    {
        $this->container['partner_id'] = $partner_id;

        return $this;
    }

    /**
     * Gets partner_code
     *
     * @return string|null
     */
    public function getPartnerCode()
    {
        return $this->container['partner_code'];
    }

    /**
     * Sets partner_code
     *
     * @param string|null $partner_code 取引先コード
     *
     * @return $this
     */
    public function setPartnerCode($partner_code)
    {
        $this->container['partner_code'] = $partner_code;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number 請求書番号
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title タイトル
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string|null $due_date 期日 (yyyy-mm-dd)
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param int $total_amount 合計金額
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_vat
     *
     * @return int|null
     */
    public function getTotalVat()
    {
        return $this->container['total_vat'];
    }

    /**
     * Sets total_vat
     *
     * @param int|null $total_vat 合計金額
     *
     * @return $this
     */
    public function setTotalVat($total_vat)
    {
        $this->container['total_vat'] = $total_vat;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return int|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param int|null $sub_total 小計
     *
     * @return $this
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets booking_date
     *
     * @return string|null
     */
    public function getBookingDate()
    {
        return $this->container['booking_date'];
    }

    /**
     * Sets booking_date
     *
     * @param string|null $booking_date 売上計上日
     *
     * @return $this
     */
    public function setBookingDate($booking_date)
    {
        $this->container['booking_date'] = $booking_date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 概要
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets invoice_status
     *
     * @return string
     */
    public function getInvoiceStatus()
    {
        return $this->container['invoice_status'];
    }

    /**
     * Sets invoice_status
     *
     * @param string $invoice_status 請求書ステータス  (draft: 下書き, applying: 申請中, remanded: 差し戻し, rejected: 却下, approved: 承認済み, issued: 発行済み)
     *
     * @return $this
     */
    public function setInvoiceStatus($invoice_status)
    {
        $allowedValues = $this->getInvoiceStatusAllowableValues();
        if (!in_array($invoice_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_status'] = $invoice_status;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string|null $payment_status 入金ステータス  (unsettled: 入金待ち, settled: 入金済み)
     *
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($payment_status) && !in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets payment_date
     *
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param string|null $payment_date 入金日
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets web_published_at
     *
     * @return string|null
     */
    public function getWebPublishedAt()
    {
        return $this->container['web_published_at'];
    }

    /**
     * Sets web_published_at
     *
     * @param string|null $web_published_at Web共有日時(最新)
     *
     * @return $this
     */
    public function setWebPublishedAt($web_published_at)
    {
        $this->container['web_published_at'] = $web_published_at;

        return $this;
    }

    /**
     * Gets web_downloaded_at
     *
     * @return string|null
     */
    public function getWebDownloadedAt()
    {
        return $this->container['web_downloaded_at'];
    }

    /**
     * Sets web_downloaded_at
     *
     * @param string|null $web_downloaded_at Web共有ダウンロード日時(最新)
     *
     * @return $this
     */
    public function setWebDownloadedAt($web_downloaded_at)
    {
        $this->container['web_downloaded_at'] = $web_downloaded_at;

        return $this;
    }

    /**
     * Gets web_confirmed_at
     *
     * @return string|null
     */
    public function getWebConfirmedAt()
    {
        return $this->container['web_confirmed_at'];
    }

    /**
     * Sets web_confirmed_at
     *
     * @param string|null $web_confirmed_at Web共有取引先確認日時(最新)
     *
     * @return $this
     */
    public function setWebConfirmedAt($web_confirmed_at)
    {
        $this->container['web_confirmed_at'] = $web_confirmed_at;

        return $this;
    }

    /**
     * Gets mail_sent_at
     *
     * @return string|null
     */
    public function getMailSentAt()
    {
        return $this->container['mail_sent_at'];
    }

    /**
     * Sets mail_sent_at
     *
     * @param string|null $mail_sent_at メール送信日時(最新)
     *
     * @return $this
     */
    public function setMailSentAt($mail_sent_at)
    {
        $this->container['mail_sent_at'] = $mail_sent_at;

        return $this;
    }

    /**
     * Gets posting_status
     *
     * @return string
     */
    public function getPostingStatus()
    {
        return $this->container['posting_status'];
    }

    /**
     * Sets posting_status
     *
     * @param string $posting_status 郵送ステータス(unrequested: リクエスト前, preview_registered: プレビュー登録, preview_failed: プレビュー登録失敗, ordered: 注文中, order_failed: 注文失敗, printing: 印刷中, canceled: キャンセル, posted: 投函済み)
     *
     * @return $this
     */
    public function setPostingStatus($posting_status)
    {
        $allowedValues = $this->getPostingStatusAllowableValues();
        if (!in_array($posting_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'posting_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['posting_status'] = $posting_status;

        return $this;
    }

    /**
     * Gets partner_name
     *
     * @return string|null
     */
    public function getPartnerName()
    {
        return $this->container['partner_name'];
    }

    /**
     * Sets partner_name
     *
     * @param string|null $partner_name 取引先名
     *
     * @return $this
     */
    public function setPartnerName($partner_name)
    {
        $this->container['partner_name'] = $partner_name;

        return $this;
    }

    /**
     * Gets partner_long_name
     *
     * @return string|null
     */
    public function getPartnerLongName()
    {
        return $this->container['partner_long_name'];
    }

    /**
     * Sets partner_long_name
     *
     * @param string|null $partner_long_name 取引先正式名称
     *
     * @return $this
     */
    public function setPartnerLongName($partner_long_name)
    {
        $this->container['partner_long_name'] = $partner_long_name;

        return $this;
    }

    /**
     * Gets partner_title
     *
     * @return string|null
     */
    public function getPartnerTitle()
    {
        return $this->container['partner_title'];
    }

    /**
     * Sets partner_title
     *
     * @param string|null $partner_title 敬称（御中、様、(空白)の3つから選択）
     *
     * @return $this
     */
    public function setPartnerTitle($partner_title)
    {
        $this->container['partner_title'] = $partner_title;

        return $this;
    }

    /**
     * Gets partner_zipcode
     *
     * @return string|null
     */
    public function getPartnerZipcode()
    {
        return $this->container['partner_zipcode'];
    }

    /**
     * Sets partner_zipcode
     *
     * @param string|null $partner_zipcode 郵便番号
     *
     * @return $this
     */
    public function setPartnerZipcode($partner_zipcode)
    {
        $this->container['partner_zipcode'] = $partner_zipcode;

        return $this;
    }

    /**
     * Gets partner_prefecture_code
     *
     * @return int|null
     */
    public function getPartnerPrefectureCode()
    {
        return $this->container['partner_prefecture_code'];
    }

    /**
     * Sets partner_prefecture_code
     *
     * @param int|null $partner_prefecture_code 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄
     *
     * @return $this
     */
    public function setPartnerPrefectureCode($partner_prefecture_code)
    {

        if (!is_null($partner_prefecture_code) && ($partner_prefecture_code > 46)) {
            throw new \InvalidArgumentException('invalid value for $partner_prefecture_code when calling Invoice., must be smaller than or equal to 46.');
        }
        if (!is_null($partner_prefecture_code) && ($partner_prefecture_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $partner_prefecture_code when calling Invoice., must be bigger than or equal to 0.');
        }

        $this->container['partner_prefecture_code'] = $partner_prefecture_code;

        return $this;
    }

    /**
     * Gets partner_prefecture_name
     *
     * @return string|null
     */
    public function getPartnerPrefectureName()
    {
        return $this->container['partner_prefecture_name'];
    }

    /**
     * Sets partner_prefecture_name
     *
     * @param string|null $partner_prefecture_name 都道府県
     *
     * @return $this
     */
    public function setPartnerPrefectureName($partner_prefecture_name)
    {
        $this->container['partner_prefecture_name'] = $partner_prefecture_name;

        return $this;
    }

    /**
     * Gets partner_address1
     *
     * @return string|null
     */
    public function getPartnerAddress1()
    {
        return $this->container['partner_address1'];
    }

    /**
     * Sets partner_address1
     *
     * @param string|null $partner_address1 市区町村・番地
     *
     * @return $this
     */
    public function setPartnerAddress1($partner_address1)
    {
        $this->container['partner_address1'] = $partner_address1;

        return $this;
    }

    /**
     * Gets partner_address2
     *
     * @return string|null
     */
    public function getPartnerAddress2()
    {
        return $this->container['partner_address2'];
    }

    /**
     * Sets partner_address2
     *
     * @param string|null $partner_address2 建物名・部屋番号など
     *
     * @return $this
     */
    public function setPartnerAddress2($partner_address2)
    {
        $this->container['partner_address2'] = $partner_address2;

        return $this;
    }

    /**
     * Gets partner_contact_info
     *
     * @return string|null
     */
    public function getPartnerContactInfo()
    {
        return $this->container['partner_contact_info'];
    }

    /**
     * Sets partner_contact_info
     *
     * @param string|null $partner_contact_info 取引先担当者名
     *
     * @return $this
     */
    public function setPartnerContactInfo($partner_contact_info)
    {
        $this->container['partner_contact_info'] = $partner_contact_info;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name 事業所名
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_zipcode
     *
     * @return string|null
     */
    public function getCompanyZipcode()
    {
        return $this->container['company_zipcode'];
    }

    /**
     * Sets company_zipcode
     *
     * @param string|null $company_zipcode 郵便番号
     *
     * @return $this
     */
    public function setCompanyZipcode($company_zipcode)
    {
        $this->container['company_zipcode'] = $company_zipcode;

        return $this;
    }

    /**
     * Gets company_prefecture_code
     *
     * @return int|null
     */
    public function getCompanyPrefectureCode()
    {
        return $this->container['company_prefecture_code'];
    }

    /**
     * Sets company_prefecture_code
     *
     * @param int|null $company_prefecture_code 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄
     *
     * @return $this
     */
    public function setCompanyPrefectureCode($company_prefecture_code)
    {

        if (!is_null($company_prefecture_code) && ($company_prefecture_code > 46)) {
            throw new \InvalidArgumentException('invalid value for $company_prefecture_code when calling Invoice., must be smaller than or equal to 46.');
        }
        if (!is_null($company_prefecture_code) && ($company_prefecture_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $company_prefecture_code when calling Invoice., must be bigger than or equal to 0.');
        }

        $this->container['company_prefecture_code'] = $company_prefecture_code;

        return $this;
    }

    /**
     * Gets company_prefecture_name
     *
     * @return string|null
     */
    public function getCompanyPrefectureName()
    {
        return $this->container['company_prefecture_name'];
    }

    /**
     * Sets company_prefecture_name
     *
     * @param string|null $company_prefecture_name 都道府県
     *
     * @return $this
     */
    public function setCompanyPrefectureName($company_prefecture_name)
    {
        $this->container['company_prefecture_name'] = $company_prefecture_name;

        return $this;
    }

    /**
     * Gets company_address1
     *
     * @return string|null
     */
    public function getCompanyAddress1()
    {
        return $this->container['company_address1'];
    }

    /**
     * Sets company_address1
     *
     * @param string|null $company_address1 市区町村・番地
     *
     * @return $this
     */
    public function setCompanyAddress1($company_address1)
    {
        $this->container['company_address1'] = $company_address1;

        return $this;
    }

    /**
     * Gets company_address2
     *
     * @return string|null
     */
    public function getCompanyAddress2()
    {
        return $this->container['company_address2'];
    }

    /**
     * Sets company_address2
     *
     * @param string|null $company_address2 建物名・部屋番号など
     *
     * @return $this
     */
    public function setCompanyAddress2($company_address2)
    {
        $this->container['company_address2'] = $company_address2;

        return $this;
    }

    /**
     * Gets company_contact_info
     *
     * @return string|null
     */
    public function getCompanyContactInfo()
    {
        return $this->container['company_contact_info'];
    }

    /**
     * Sets company_contact_info
     *
     * @param string|null $company_contact_info 事業所担当者名
     *
     * @return $this
     */
    public function setCompanyContactInfo($company_contact_info)
    {
        $this->container['company_contact_info'] = $company_contact_info;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type 支払方法 (振込: transfer, 引き落とし: direct_debit)
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets payment_bank_info
     *
     * @return string|null
     */
    public function getPaymentBankInfo()
    {
        return $this->container['payment_bank_info'];
    }

    /**
     * Sets payment_bank_info
     *
     * @param string|null $payment_bank_info 支払口座
     *
     * @return $this
     */
    public function setPaymentBankInfo($payment_bank_info)
    {
        $this->container['payment_bank_info'] = $payment_bank_info;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message メッセージ
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes 備考
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets invoice_layout
     *
     * @return string
     */
    public function getInvoiceLayout()
    {
        return $this->container['invoice_layout'];
    }

    /**
     * Sets invoice_layout
     *
     * @param string $invoice_layout レイアウト(default_classic: レイアウト１/クラシック, standard_classic: レイアウト２/クラシック, envelope_classic: 封筒１/クラシック, carried_forward_standard_classic: レイアウト３（繰越金額欄あり）/クラシック, carried_forward_envelope_classic: 封筒２（繰越金額欄あり）/クラシック, default_modern: レイアウト１/モダン, standard_modern: レイアウト２/モダン, envelope_modern: 封筒/モダン)
     *
     * @return $this
     */
    public function setInvoiceLayout($invoice_layout)
    {
        $allowedValues = $this->getInvoiceLayoutAllowableValues();
        if (!in_array($invoice_layout, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_layout', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_layout'] = $invoice_layout;

        return $this;
    }

    /**
     * Gets tax_entry_method
     *
     * @return string
     */
    public function getTaxEntryMethod()
    {
        return $this->container['tax_entry_method'];
    }

    /**
     * Sets tax_entry_method
     *
     * @param string $tax_entry_method 請求書の消費税計算方法(inclusive: 内税, exclusive: 外税)
     *
     * @return $this
     */
    public function setTaxEntryMethod($tax_entry_method)
    {
        $allowedValues = $this->getTaxEntryMethodAllowableValues();
        if (!in_array($tax_entry_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tax_entry_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_entry_method'] = $tax_entry_method;

        return $this;
    }

    /**
     * Gets deal_id
     *
     * @return int|null
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param int|null $deal_id 取引ID (invoice_statusがissuedの時のみIDが表示されます)
     *
     * @return $this
     */
    public function setDealId($deal_id)
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets invoice_contents
     *
     * @return \Freee\Accounting\Model\InvoiceInvoiceContents[]|null
     */
    public function getInvoiceContents()
    {
        return $this->container['invoice_contents'];
    }

    /**
     * Sets invoice_contents
     *
     * @param \Freee\Accounting\Model\InvoiceInvoiceContents[]|null $invoice_contents 請求内容
     *
     * @return $this
     */
    public function setInvoiceContents($invoice_contents)
    {
        $this->container['invoice_contents'] = $invoice_contents;

        return $this;
    }

    /**
     * Gets total_amount_per_vat_rate
     *
     * @return \Freee\Accounting\Model\InvoiceTotalAmountPerVatRate
     */
    public function getTotalAmountPerVatRate()
    {
        return $this->container['total_amount_per_vat_rate'];
    }

    /**
     * Sets total_amount_per_vat_rate
     *
     * @param \Freee\Accounting\Model\InvoiceTotalAmountPerVatRate $total_amount_per_vat_rate total_amount_per_vat_rate
     *
     * @return $this
     */
    public function setTotalAmountPerVatRate($total_amount_per_vat_rate)
    {
        $this->container['total_amount_per_vat_rate'] = $total_amount_per_vat_rate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


