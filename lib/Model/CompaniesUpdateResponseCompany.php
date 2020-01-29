<?php
/**
 * CompaniesUpdateResponseCompany
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
 * CompaniesUpdateResponseCompany Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CompaniesUpdateResponseCompany implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'companiesUpdateResponse_company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'name_kana' => 'string',
        'display_name' => 'string',
        'tax_at_source_calc_type' => 'int',
        'contact_name' => 'string',
        'head_count' => 'int',
        'corporate_number' => 'string',
        'txn_number_format' => 'string',
        'default_wallet_account_id' => 'int',
        'private_settlement' => 'bool',
        'minus_format' => 'int',
        'role' => 'string',
        'phone1' => 'string',
        'phone2' => 'string',
        'fax' => 'string',
        'zipcode' => 'string',
        'prefecture_code' => 'int',
        'street_name1' => 'string',
        'street_name2' => 'string',
        'invoice_layout' => 'int',
        'invoice_style' => 'int',
        'amount_fraction' => 'int',
        'industry_class' => 'string',
        'industry_code' => 'string',
        'workflow_setting' => 'string',
        'fiscal_years' => '\Freee\Accounting\Model\FiscalYears[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'name_kana' => null,
        'display_name' => null,
        'tax_at_source_calc_type' => null,
        'contact_name' => null,
        'head_count' => null,
        'corporate_number' => null,
        'txn_number_format' => null,
        'default_wallet_account_id' => null,
        'private_settlement' => null,
        'minus_format' => null,
        'role' => null,
        'phone1' => null,
        'phone2' => null,
        'fax' => null,
        'zipcode' => null,
        'prefecture_code' => null,
        'street_name1' => null,
        'street_name2' => null,
        'invoice_layout' => null,
        'invoice_style' => null,
        'amount_fraction' => null,
        'industry_class' => null,
        'industry_code' => null,
        'workflow_setting' => null,
        'fiscal_years' => null
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
        'name' => 'name',
        'name_kana' => 'name_kana',
        'display_name' => 'display_name',
        'tax_at_source_calc_type' => 'tax_at_source_calc_type',
        'contact_name' => 'contact_name',
        'head_count' => 'head_count',
        'corporate_number' => 'corporate_number',
        'txn_number_format' => 'txn_number_format',
        'default_wallet_account_id' => 'default_wallet_account_id',
        'private_settlement' => 'private_settlement',
        'minus_format' => 'minus_format',
        'role' => 'role',
        'phone1' => 'phone1',
        'phone2' => 'phone2',
        'fax' => 'fax',
        'zipcode' => 'zipcode',
        'prefecture_code' => 'prefecture_code',
        'street_name1' => 'street_name1',
        'street_name2' => 'street_name2',
        'invoice_layout' => 'invoice_layout',
        'invoice_style' => 'invoice_style',
        'amount_fraction' => 'amount_fraction',
        'industry_class' => 'industry_class',
        'industry_code' => 'industry_code',
        'workflow_setting' => 'workflow_setting',
        'fiscal_years' => 'fiscal_years'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'name_kana' => 'setNameKana',
        'display_name' => 'setDisplayName',
        'tax_at_source_calc_type' => 'setTaxAtSourceCalcType',
        'contact_name' => 'setContactName',
        'head_count' => 'setHeadCount',
        'corporate_number' => 'setCorporateNumber',
        'txn_number_format' => 'setTxnNumberFormat',
        'default_wallet_account_id' => 'setDefaultWalletAccountId',
        'private_settlement' => 'setPrivateSettlement',
        'minus_format' => 'setMinusFormat',
        'role' => 'setRole',
        'phone1' => 'setPhone1',
        'phone2' => 'setPhone2',
        'fax' => 'setFax',
        'zipcode' => 'setZipcode',
        'prefecture_code' => 'setPrefectureCode',
        'street_name1' => 'setStreetName1',
        'street_name2' => 'setStreetName2',
        'invoice_layout' => 'setInvoiceLayout',
        'invoice_style' => 'setInvoiceStyle',
        'amount_fraction' => 'setAmountFraction',
        'industry_class' => 'setIndustryClass',
        'industry_code' => 'setIndustryCode',
        'workflow_setting' => 'setWorkflowSetting',
        'fiscal_years' => 'setFiscalYears'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'name_kana' => 'getNameKana',
        'display_name' => 'getDisplayName',
        'tax_at_source_calc_type' => 'getTaxAtSourceCalcType',
        'contact_name' => 'getContactName',
        'head_count' => 'getHeadCount',
        'corporate_number' => 'getCorporateNumber',
        'txn_number_format' => 'getTxnNumberFormat',
        'default_wallet_account_id' => 'getDefaultWalletAccountId',
        'private_settlement' => 'getPrivateSettlement',
        'minus_format' => 'getMinusFormat',
        'role' => 'getRole',
        'phone1' => 'getPhone1',
        'phone2' => 'getPhone2',
        'fax' => 'getFax',
        'zipcode' => 'getZipcode',
        'prefecture_code' => 'getPrefectureCode',
        'street_name1' => 'getStreetName1',
        'street_name2' => 'getStreetName2',
        'invoice_layout' => 'getInvoiceLayout',
        'invoice_style' => 'getInvoiceStyle',
        'amount_fraction' => 'getAmountFraction',
        'industry_class' => 'getIndustryClass',
        'industry_code' => 'getIndustryCode',
        'workflow_setting' => 'getWorkflowSetting',
        'fiscal_years' => 'getFiscalYears'
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

    const TXN_NUMBER_FORMAT_NOT_USED = 'not_used';
    const TXN_NUMBER_FORMAT_DIGITS = 'digits';
    const TXN_NUMBER_FORMAT_ALNUM = 'alnum';
    const ROLE_ADMIN = 'admin';
    const ROLE_SIMPLE_ACCOUNTING = 'simple_accounting';
    const ROLE_SELF_ONLY = 'self_only';
    const ROLE_READ_ONLY = 'read_only';
    const INDUSTRY_CLASS_EMPTY = '';
    const INDUSTRY_CLASS_AGRICULTURE_FORESTRY_FISHERIES_ORE = 'agriculture_forestry_fisheries_ore';
    const INDUSTRY_CLASS_CONSTRUCTION = 'construction';
    const INDUSTRY_CLASS_MANUFACTURING_PROCESSING = 'manufacturing_processing';
    const INDUSTRY_CLASS_IT = 'it';
    const INDUSTRY_CLASS_TRANSPORTATION_LOGISTICS = 'transportation_logistics';
    const INDUSTRY_CLASS_RETAIL_WHOLESALE = 'retail_wholesale';
    const INDUSTRY_CLASS_FINANCE_INSURANCE = 'finance_insurance';
    const INDUSTRY_CLASS_REAL_ESTATE_RENTAL = 'real_estate_rental';
    const INDUSTRY_CLASS_PROFESSION = 'profession';
    const INDUSTRY_CLASS_DESIGN_PRODUCTION = 'design_production';
    const INDUSTRY_CLASS_FOOD = 'food';
    const INDUSTRY_CLASS_LIFESTYLE = 'lifestyle';
    const INDUSTRY_CLASS_EDUCATION = 'education';
    const INDUSTRY_CLASS_MEDICAL_WELFARE = 'medical_welfare';
    const INDUSTRY_CLASS_OTHER_SERVICES = 'other_services';
    const INDUSTRY_CLASS_OTHER = 'other';
    const INDUSTRY_CODE_EMPTY = '';
    const INDUSTRY_CODE_TRANSPORT_DELIVERY = 'transport_delivery';
    const INDUSTRY_CODE_DELIVERY = 'delivery';
    const INDUSTRY_CODE_OTHER_TRANSPORTATION_LOGISTICS = 'other_transportation_logistics';
    const WORKFLOW_SETTING_ENABLE = 'enable';
    const WORKFLOW_SETTING_DISABLE = 'disable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTxnNumberFormatAllowableValues()
    {
        return [
            self::TXN_NUMBER_FORMAT_NOT_USED,
            self::TXN_NUMBER_FORMAT_DIGITS,
            self::TXN_NUMBER_FORMAT_ALNUM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_ADMIN,
            self::ROLE_SIMPLE_ACCOUNTING,
            self::ROLE_SELF_ONLY,
            self::ROLE_READ_ONLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIndustryClassAllowableValues()
    {
        return [
            self::INDUSTRY_CLASS_EMPTY,
            self::INDUSTRY_CLASS_AGRICULTURE_FORESTRY_FISHERIES_ORE,
            self::INDUSTRY_CLASS_CONSTRUCTION,
            self::INDUSTRY_CLASS_MANUFACTURING_PROCESSING,
            self::INDUSTRY_CLASS_IT,
            self::INDUSTRY_CLASS_TRANSPORTATION_LOGISTICS,
            self::INDUSTRY_CLASS_RETAIL_WHOLESALE,
            self::INDUSTRY_CLASS_FINANCE_INSURANCE,
            self::INDUSTRY_CLASS_REAL_ESTATE_RENTAL,
            self::INDUSTRY_CLASS_PROFESSION,
            self::INDUSTRY_CLASS_DESIGN_PRODUCTION,
            self::INDUSTRY_CLASS_FOOD,
            self::INDUSTRY_CLASS_LIFESTYLE,
            self::INDUSTRY_CLASS_EDUCATION,
            self::INDUSTRY_CLASS_MEDICAL_WELFARE,
            self::INDUSTRY_CLASS_OTHER_SERVICES,
            self::INDUSTRY_CLASS_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIndustryCodeAllowableValues()
    {
        return [
            self::INDUSTRY_CODE_EMPTY,
            self::INDUSTRY_CODE_TRANSPORT_DELIVERY,
            self::INDUSTRY_CODE_DELIVERY,
            self::INDUSTRY_CODE_OTHER_TRANSPORTATION_LOGISTICS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWorkflowSettingAllowableValues()
    {
        return [
            self::WORKFLOW_SETTING_ENABLE,
            self::WORKFLOW_SETTING_DISABLE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_kana'] = isset($data['name_kana']) ? $data['name_kana'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['tax_at_source_calc_type'] = isset($data['tax_at_source_calc_type']) ? $data['tax_at_source_calc_type'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['head_count'] = isset($data['head_count']) ? $data['head_count'] : null;
        $this->container['corporate_number'] = isset($data['corporate_number']) ? $data['corporate_number'] : null;
        $this->container['txn_number_format'] = isset($data['txn_number_format']) ? $data['txn_number_format'] : null;
        $this->container['default_wallet_account_id'] = isset($data['default_wallet_account_id']) ? $data['default_wallet_account_id'] : null;
        $this->container['private_settlement'] = isset($data['private_settlement']) ? $data['private_settlement'] : null;
        $this->container['minus_format'] = isset($data['minus_format']) ? $data['minus_format'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['phone1'] = isset($data['phone1']) ? $data['phone1'] : null;
        $this->container['phone2'] = isset($data['phone2']) ? $data['phone2'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['prefecture_code'] = isset($data['prefecture_code']) ? $data['prefecture_code'] : null;
        $this->container['street_name1'] = isset($data['street_name1']) ? $data['street_name1'] : null;
        $this->container['street_name2'] = isset($data['street_name2']) ? $data['street_name2'] : null;
        $this->container['invoice_layout'] = isset($data['invoice_layout']) ? $data['invoice_layout'] : null;
        $this->container['invoice_style'] = isset($data['invoice_style']) ? $data['invoice_style'] : null;
        $this->container['amount_fraction'] = isset($data['amount_fraction']) ? $data['amount_fraction'] : null;
        $this->container['industry_class'] = isset($data['industry_class']) ? $data['industry_class'] : null;
        $this->container['industry_code'] = isset($data['industry_code']) ? $data['industry_code'] : null;
        $this->container['workflow_setting'] = isset($data['workflow_setting']) ? $data['workflow_setting'] : null;
        $this->container['fiscal_years'] = isset($data['fiscal_years']) ? $data['fiscal_years'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['name_kana'] === null) {
            $invalidProperties[] = "'name_kana' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['tax_at_source_calc_type'] === null) {
            $invalidProperties[] = "'tax_at_source_calc_type' can't be null";
        }
        if ($this->container['contact_name'] === null) {
            $invalidProperties[] = "'contact_name' can't be null";
        }
        if ($this->container['head_count'] === null) {
            $invalidProperties[] = "'head_count' can't be null";
        }
        if (($this->container['head_count'] > 7)) {
            $invalidProperties[] = "invalid value for 'head_count', must be smaller than or equal to 7.";
        }

        if (($this->container['head_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'head_count', must be bigger than or equal to 0.";
        }

        if ($this->container['corporate_number'] === null) {
            $invalidProperties[] = "'corporate_number' can't be null";
        }
        if ($this->container['txn_number_format'] === null) {
            $invalidProperties[] = "'txn_number_format' can't be null";
        }
        $allowedValues = $this->getTxnNumberFormatAllowableValues();
        if (!is_null($this->container['txn_number_format']) && !in_array($this->container['txn_number_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'txn_number_format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['private_settlement'] === null) {
            $invalidProperties[] = "'private_settlement' can't be null";
        }
        if ($this->container['minus_format'] === null) {
            $invalidProperties[] = "'minus_format' can't be null";
        }
        if (($this->container['minus_format'] > 1)) {
            $invalidProperties[] = "invalid value for 'minus_format', must be smaller than or equal to 1.";
        }

        if (($this->container['minus_format'] < 0)) {
            $invalidProperties[] = "invalid value for 'minus_format', must be bigger than or equal to 0.";
        }

        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['phone1'] === null) {
            $invalidProperties[] = "'phone1' can't be null";
        }
        if ($this->container['phone2'] === null) {
            $invalidProperties[] = "'phone2' can't be null";
        }
        if ($this->container['fax'] === null) {
            $invalidProperties[] = "'fax' can't be null";
        }
        if ($this->container['zipcode'] === null) {
            $invalidProperties[] = "'zipcode' can't be null";
        }
        if ($this->container['prefecture_code'] === null) {
            $invalidProperties[] = "'prefecture_code' can't be null";
        }
        if (($this->container['prefecture_code'] > 46)) {
            $invalidProperties[] = "invalid value for 'prefecture_code', must be smaller than or equal to 46.";
        }

        if (($this->container['prefecture_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'prefecture_code', must be bigger than or equal to 0.";
        }

        if ($this->container['street_name1'] === null) {
            $invalidProperties[] = "'street_name1' can't be null";
        }
        if ($this->container['street_name2'] === null) {
            $invalidProperties[] = "'street_name2' can't be null";
        }
        if ($this->container['invoice_layout'] === null) {
            $invalidProperties[] = "'invoice_layout' can't be null";
        }
        if (($this->container['invoice_layout'] > 5)) {
            $invalidProperties[] = "invalid value for 'invoice_layout', must be smaller than or equal to 5.";
        }

        if (($this->container['invoice_layout'] < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_layout', must be bigger than or equal to 0.";
        }

        if ($this->container['invoice_style'] === null) {
            $invalidProperties[] = "'invoice_style' can't be null";
        }
        if (($this->container['invoice_style'] > 1)) {
            $invalidProperties[] = "invalid value for 'invoice_style', must be smaller than or equal to 1.";
        }

        if (($this->container['invoice_style'] < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_style', must be bigger than or equal to 0.";
        }

        if ($this->container['amount_fraction'] === null) {
            $invalidProperties[] = "'amount_fraction' can't be null";
        }
        if (($this->container['amount_fraction'] > 2)) {
            $invalidProperties[] = "invalid value for 'amount_fraction', must be smaller than or equal to 2.";
        }

        if (($this->container['amount_fraction'] < 0)) {
            $invalidProperties[] = "invalid value for 'amount_fraction', must be bigger than or equal to 0.";
        }

        if ($this->container['industry_class'] === null) {
            $invalidProperties[] = "'industry_class' can't be null";
        }
        $allowedValues = $this->getIndustryClassAllowableValues();
        if (!is_null($this->container['industry_class']) && !in_array($this->container['industry_class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'industry_class', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['industry_code'] === null) {
            $invalidProperties[] = "'industry_code' can't be null";
        }
        $allowedValues = $this->getIndustryCodeAllowableValues();
        if (!is_null($this->container['industry_code']) && !in_array($this->container['industry_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'industry_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['workflow_setting'] === null) {
            $invalidProperties[] = "'workflow_setting' can't be null";
        }
        $allowedValues = $this->getWorkflowSettingAllowableValues();
        if (!is_null($this->container['workflow_setting']) && !in_array($this->container['workflow_setting'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'workflow_setting', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param int $id 事業所ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 事業所の正式名称 (100文字以内)
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_kana
     *
     * @return string
     */
    public function getNameKana()
    {
        return $this->container['name_kana'];
    }

    /**
     * Sets name_kana
     *
     * @param string $name_kana 正式名称フリガナ (100文字以内)
     *
     * @return $this
     */
    public function setNameKana($name_kana)
    {
        $this->container['name_kana'] = $name_kana;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name 事業所名
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets tax_at_source_calc_type
     *
     * @return int
     */
    public function getTaxAtSourceCalcType()
    {
        return $this->container['tax_at_source_calc_type'];
    }

    /**
     * Sets tax_at_source_calc_type
     *
     * @param int $tax_at_source_calc_type 源泉徴収税計算（0: 消費税を含める、1: 消費税を含めない）
     *
     * @return $this
     */
    public function setTaxAtSourceCalcType($tax_at_source_calc_type)
    {
        $this->container['tax_at_source_calc_type'] = $tax_at_source_calc_type;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name 担当者名 (50文字以内)
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets head_count
     *
     * @return int
     */
    public function getHeadCount()
    {
        return $this->container['head_count'];
    }

    /**
     * Sets head_count
     *
     * @param int $head_count 従業員数（0: 経営者のみ、1: 2~5人、2: 6~10人、3: 11~20人、4: 21~30人、5: 31~40人、6: 41~100人、7: 100人以上
     *
     * @return $this
     */
    public function setHeadCount($head_count)
    {

        if (($head_count > 7)) {
            throw new \InvalidArgumentException('invalid value for $head_count when calling CompaniesUpdateResponseCompany., must be smaller than or equal to 7.');
        }
        if (($head_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $head_count when calling CompaniesUpdateResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['head_count'] = $head_count;

        return $this;
    }

    /**
     * Gets corporate_number
     *
     * @return string
     */
    public function getCorporateNumber()
    {
        return $this->container['corporate_number'];
    }

    /**
     * Sets corporate_number
     *
     * @param string $corporate_number 法人番号 (半角数字13桁、法人のみ)
     *
     * @return $this
     */
    public function setCorporateNumber($corporate_number)
    {
        $this->container['corporate_number'] = $corporate_number;

        return $this;
    }

    /**
     * Gets txn_number_format
     *
     * @return string
     */
    public function getTxnNumberFormat()
    {
        return $this->container['txn_number_format'];
    }

    /**
     * Sets txn_number_format
     *
     * @param string $txn_number_format 仕訳番号形式（not_used: 使用しない、digits: 数字（例：5091824）、alnum: 英数字（例：59J0P））
     *
     * @return $this
     */
    public function setTxnNumberFormat($txn_number_format)
    {
        $allowedValues = $this->getTxnNumberFormatAllowableValues();
        if (!in_array($txn_number_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'txn_number_format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['txn_number_format'] = $txn_number_format;

        return $this;
    }

    /**
     * Gets default_wallet_account_id
     *
     * @return int|null
     */
    public function getDefaultWalletAccountId()
    {
        return $this->container['default_wallet_account_id'];
    }

    /**
     * Sets default_wallet_account_id
     *
     * @param int|null $default_wallet_account_id 決済口座のデフォルト
     *
     * @return $this
     */
    public function setDefaultWalletAccountId($default_wallet_account_id)
    {
        $this->container['default_wallet_account_id'] = $default_wallet_account_id;

        return $this;
    }

    /**
     * Gets private_settlement
     *
     * @return bool
     */
    public function getPrivateSettlement()
    {
        return $this->container['private_settlement'];
    }

    /**
     * Sets private_settlement
     *
     * @param bool $private_settlement プライベート資金/役員資金（false: 使用しない、true: 使用する）
     *
     * @return $this
     */
    public function setPrivateSettlement($private_settlement)
    {
        $this->container['private_settlement'] = $private_settlement;

        return $this;
    }

    /**
     * Gets minus_format
     *
     * @return int
     */
    public function getMinusFormat()
    {
        return $this->container['minus_format'];
    }

    /**
     * Sets minus_format
     *
     * @param int $minus_format マイナスの表示方法（0: -、 1: △）
     *
     * @return $this
     */
    public function setMinusFormat($minus_format)
    {

        if (($minus_format > 1)) {
            throw new \InvalidArgumentException('invalid value for $minus_format when calling CompaniesUpdateResponseCompany., must be smaller than or equal to 1.');
        }
        if (($minus_format < 0)) {
            throw new \InvalidArgumentException('invalid value for $minus_format when calling CompaniesUpdateResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['minus_format'] = $minus_format;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role ユーザーの権限
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets phone1
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->container['phone1'];
    }

    /**
     * Sets phone1
     *
     * @param string $phone1 電話番号１
     *
     * @return $this
     */
    public function setPhone1($phone1)
    {
        $this->container['phone1'] = $phone1;

        return $this;
    }

    /**
     * Gets phone2
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->container['phone2'];
    }

    /**
     * Sets phone2
     *
     * @param string $phone2 電話番号２
     *
     * @return $this
     */
    public function setPhone2($phone2)
    {
        $this->container['phone2'] = $phone2;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax FAX
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode 郵便番号
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets prefecture_code
     *
     * @return int
     */
    public function getPrefectureCode()
    {
        return $this->container['prefecture_code'];
    }

    /**
     * Sets prefecture_code
     *
     * @param int $prefecture_code 都道府県コード（0: 北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄
     *
     * @return $this
     */
    public function setPrefectureCode($prefecture_code)
    {

        if (($prefecture_code > 46)) {
            throw new \InvalidArgumentException('invalid value for $prefecture_code when calling CompaniesUpdateResponseCompany., must be smaller than or equal to 46.');
        }
        if (($prefecture_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $prefecture_code when calling CompaniesUpdateResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['prefecture_code'] = $prefecture_code;

        return $this;
    }

    /**
     * Gets street_name1
     *
     * @return string
     */
    public function getStreetName1()
    {
        return $this->container['street_name1'];
    }

    /**
     * Sets street_name1
     *
     * @param string $street_name1 市区町村・番地
     *
     * @return $this
     */
    public function setStreetName1($street_name1)
    {
        $this->container['street_name1'] = $street_name1;

        return $this;
    }

    /**
     * Gets street_name2
     *
     * @return string
     */
    public function getStreetName2()
    {
        return $this->container['street_name2'];
    }

    /**
     * Sets street_name2
     *
     * @param string $street_name2 建物名・部屋番号など
     *
     * @return $this
     */
    public function setStreetName2($street_name2)
    {
        $this->container['street_name2'] = $street_name2;

        return $this;
    }

    /**
     * Gets invoice_layout
     *
     * @return int
     */
    public function getInvoiceLayout()
    {
        return $this->container['invoice_layout'];
    }

    /**
     * Sets invoice_layout
     *
     * @param int $invoice_layout レイアウト(0: レイアウト1, 1:レイアウト2, 3:封筒1, 4:レイアウト3(繰越金額欄あり), 5: 封筒2(繰越金額欄あり))
     *
     * @return $this
     */
    public function setInvoiceLayout($invoice_layout)
    {

        if (($invoice_layout > 5)) {
            throw new \InvalidArgumentException('invalid value for $invoice_layout when calling CompaniesUpdateResponseCompany., must be smaller than or equal to 5.');
        }
        if (($invoice_layout < 0)) {
            throw new \InvalidArgumentException('invalid value for $invoice_layout when calling CompaniesUpdateResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['invoice_layout'] = $invoice_layout;

        return $this;
    }

    /**
     * Gets invoice_style
     *
     * @return int
     */
    public function getInvoiceStyle()
    {
        return $this->container['invoice_style'];
    }

    /**
     * Sets invoice_style
     *
     * @param int $invoice_style スタイル(0: クラシック, 1: モダン)
     *
     * @return $this
     */
    public function setInvoiceStyle($invoice_style)
    {

        if (($invoice_style > 1)) {
            throw new \InvalidArgumentException('invalid value for $invoice_style when calling CompaniesUpdateResponseCompany., must be smaller than or equal to 1.');
        }
        if (($invoice_style < 0)) {
            throw new \InvalidArgumentException('invalid value for $invoice_style when calling CompaniesUpdateResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['invoice_style'] = $invoice_style;

        return $this;
    }

    /**
     * Gets amount_fraction
     *
     * @return int
     */
    public function getAmountFraction()
    {
        return $this->container['amount_fraction'];
    }

    /**
     * Sets amount_fraction
     *
     * @param int $amount_fraction 金額端数処理方法（0: 切り捨て、1: 切り上げ、2: 四捨五入）
     *
     * @return $this
     */
    public function setAmountFraction($amount_fraction)
    {

        if (($amount_fraction > 2)) {
            throw new \InvalidArgumentException('invalid value for $amount_fraction when calling CompaniesUpdateResponseCompany., must be smaller than or equal to 2.');
        }
        if (($amount_fraction < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount_fraction when calling CompaniesUpdateResponseCompany., must be bigger than or equal to 0.');
        }

        $this->container['amount_fraction'] = $amount_fraction;

        return $this;
    }

    /**
     * Gets industry_class
     *
     * @return string
     */
    public function getIndustryClass()
    {
        return $this->container['industry_class'];
    }

    /**
     * Sets industry_class
     *
     * @param string $industry_class 種別（agriculture_forestry_fisheries_ore: 農林水産業/鉱業、construction: 建設、manufacturing_processing: 製造/加工、it: IT、transportation_logistics: 運輸/物流、retail_wholesale: 小売/卸売、finance_insurance: 金融/保険、real_estate_rental: 不動産/レンタル、profession: 士業/学術/専門技術サービス、design_production: デザイン/制作、food: 飲食、leisure_entertainment: レジャー/娯楽、lifestyle: 生活関連サービス、education: 教育/学習支援、medical_welfare: 医療/福祉、other_services: その他サービス、other: その他）
     *
     * @return $this
     */
    public function setIndustryClass($industry_class)
    {
        $allowedValues = $this->getIndustryClassAllowableValues();
        if (!in_array($industry_class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'industry_class', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['industry_class'] = $industry_class;

        return $this;
    }

    /**
     * Gets industry_code
     *
     * @return string
     */
    public function getIndustryCode()
    {
        return $this->container['industry_code'];
    }

    /**
     * Sets industry_code
     *
     * @param string $industry_code コード（transport_delivery: 輸送業/配送業、delivery: バイク便等の配達業、other_transportation_logistics: その他の運輸業、物流業）
     *
     * @return $this
     */
    public function setIndustryCode($industry_code)
    {
        $allowedValues = $this->getIndustryCodeAllowableValues();
        if (!in_array($industry_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'industry_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['industry_code'] = $industry_code;

        return $this;
    }

    /**
     * Gets workflow_setting
     *
     * @return string
     */
    public function getWorkflowSetting()
    {
        return $this->container['workflow_setting'];
    }

    /**
     * Sets workflow_setting
     *
     * @param string $workflow_setting 仕訳承認フロー（enable: 有効、 disable: 無効）
     *
     * @return $this
     */
    public function setWorkflowSetting($workflow_setting)
    {
        $allowedValues = $this->getWorkflowSettingAllowableValues();
        if (!in_array($workflow_setting, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'workflow_setting', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['workflow_setting'] = $workflow_setting;

        return $this;
    }

    /**
     * Gets fiscal_years
     *
     * @return \Freee\Accounting\Model\FiscalYears[]|null
     */
    public function getFiscalYears()
    {
        return $this->container['fiscal_years'];
    }

    /**
     * Sets fiscal_years
     *
     * @param \Freee\Accounting\Model\FiscalYears[]|null $fiscal_years fiscal_years
     *
     * @return $this
     */
    public function setFiscalYears($fiscal_years)
    {
        $this->container['fiscal_years'] = $fiscal_years;

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


