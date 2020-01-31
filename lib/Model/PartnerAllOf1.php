<?php
/**
 * PartnerAllOf1
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
 * PartnerAllOf1 Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PartnerAllOf1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'partner_allOf_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'long_name' => 'string',
        'name_kana' => 'string',
        'default_title' => 'string',
        'phone' => 'string',
        'contact_name' => 'string',
        'email' => 'string',
        'address_attributes_zipcode' => 'string',
        'address_attributes_prefecture_code' => 'int',
        'address_attributes_street_name1' => 'string',
        'address_attributes_street_name2' => 'string',
        'partner_doc_setting_attributes_sending_method' => 'string',
        'partner_bank_account_attributes_bank_name' => 'string',
        'partner_bank_account_attributes_bank_name_kana' => 'string',
        'partner_bank_account_attributes_bank_code' => 'string',
        'partner_bank_account_attributes_branch_name' => 'string',
        'partner_bank_account_attributes_branch_kana' => 'string',
        'partner_bank_account_attributes_branch_code' => 'string',
        'partner_bank_account_attributes_account_type' => 'string',
        'partner_bank_account_attributes_account_number' => 'string',
        'partner_bank_account_attributes_account_name' => 'string',
        'partner_bank_account_attributes_long_account_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'long_name' => null,
        'name_kana' => null,
        'default_title' => null,
        'phone' => null,
        'contact_name' => null,
        'email' => null,
        'address_attributes_zipcode' => null,
        'address_attributes_prefecture_code' => null,
        'address_attributes_street_name1' => null,
        'address_attributes_street_name2' => null,
        'partner_doc_setting_attributes_sending_method' => null,
        'partner_bank_account_attributes_bank_name' => null,
        'partner_bank_account_attributes_bank_name_kana' => null,
        'partner_bank_account_attributes_bank_code' => null,
        'partner_bank_account_attributes_branch_name' => null,
        'partner_bank_account_attributes_branch_kana' => null,
        'partner_bank_account_attributes_branch_code' => null,
        'partner_bank_account_attributes_account_type' => null,
        'partner_bank_account_attributes_account_number' => null,
        'partner_bank_account_attributes_account_name' => null,
        'partner_bank_account_attributes_long_account_name' => null
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
        'long_name' => 'long_name',
        'name_kana' => 'name_kana',
        'default_title' => 'default_title',
        'phone' => 'phone',
        'contact_name' => 'contact_name',
        'email' => 'email',
        'address_attributes_zipcode' => 'address_attributes[zipcode]',
        'address_attributes_prefecture_code' => 'address_attributes[prefecture_code]',
        'address_attributes_street_name1' => 'address_attributes[street_name1]',
        'address_attributes_street_name2' => 'address_attributes[street_name2]',
        'partner_doc_setting_attributes_sending_method' => 'partner_doc_setting_attributes[sending_method]',
        'partner_bank_account_attributes_bank_name' => 'partner_bank_account_attributes[bank_name]',
        'partner_bank_account_attributes_bank_name_kana' => 'partner_bank_account_attributes[bank_name_kana]',
        'partner_bank_account_attributes_bank_code' => 'partner_bank_account_attributes[bank_code]',
        'partner_bank_account_attributes_branch_name' => 'partner_bank_account_attributes[branch_name]',
        'partner_bank_account_attributes_branch_kana' => 'partner_bank_account_attributes[branch_kana]',
        'partner_bank_account_attributes_branch_code' => 'partner_bank_account_attributes[branch_code]',
        'partner_bank_account_attributes_account_type' => 'partner_bank_account_attributes[account_type]',
        'partner_bank_account_attributes_account_number' => 'partner_bank_account_attributes[account_number]',
        'partner_bank_account_attributes_account_name' => 'partner_bank_account_attributes[account_name]',
        'partner_bank_account_attributes_long_account_name' => 'partner_bank_account_attributes[long_account_name]'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'long_name' => 'setLongName',
        'name_kana' => 'setNameKana',
        'default_title' => 'setDefaultTitle',
        'phone' => 'setPhone',
        'contact_name' => 'setContactName',
        'email' => 'setEmail',
        'address_attributes_zipcode' => 'setAddressAttributesZipcode',
        'address_attributes_prefecture_code' => 'setAddressAttributesPrefectureCode',
        'address_attributes_street_name1' => 'setAddressAttributesStreetName1',
        'address_attributes_street_name2' => 'setAddressAttributesStreetName2',
        'partner_doc_setting_attributes_sending_method' => 'setPartnerDocSettingAttributesSendingMethod',
        'partner_bank_account_attributes_bank_name' => 'setPartnerBankAccountAttributesBankName',
        'partner_bank_account_attributes_bank_name_kana' => 'setPartnerBankAccountAttributesBankNameKana',
        'partner_bank_account_attributes_bank_code' => 'setPartnerBankAccountAttributesBankCode',
        'partner_bank_account_attributes_branch_name' => 'setPartnerBankAccountAttributesBranchName',
        'partner_bank_account_attributes_branch_kana' => 'setPartnerBankAccountAttributesBranchKana',
        'partner_bank_account_attributes_branch_code' => 'setPartnerBankAccountAttributesBranchCode',
        'partner_bank_account_attributes_account_type' => 'setPartnerBankAccountAttributesAccountType',
        'partner_bank_account_attributes_account_number' => 'setPartnerBankAccountAttributesAccountNumber',
        'partner_bank_account_attributes_account_name' => 'setPartnerBankAccountAttributesAccountName',
        'partner_bank_account_attributes_long_account_name' => 'setPartnerBankAccountAttributesLongAccountName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'long_name' => 'getLongName',
        'name_kana' => 'getNameKana',
        'default_title' => 'getDefaultTitle',
        'phone' => 'getPhone',
        'contact_name' => 'getContactName',
        'email' => 'getEmail',
        'address_attributes_zipcode' => 'getAddressAttributesZipcode',
        'address_attributes_prefecture_code' => 'getAddressAttributesPrefectureCode',
        'address_attributes_street_name1' => 'getAddressAttributesStreetName1',
        'address_attributes_street_name2' => 'getAddressAttributesStreetName2',
        'partner_doc_setting_attributes_sending_method' => 'getPartnerDocSettingAttributesSendingMethod',
        'partner_bank_account_attributes_bank_name' => 'getPartnerBankAccountAttributesBankName',
        'partner_bank_account_attributes_bank_name_kana' => 'getPartnerBankAccountAttributesBankNameKana',
        'partner_bank_account_attributes_bank_code' => 'getPartnerBankAccountAttributesBankCode',
        'partner_bank_account_attributes_branch_name' => 'getPartnerBankAccountAttributesBranchName',
        'partner_bank_account_attributes_branch_kana' => 'getPartnerBankAccountAttributesBranchKana',
        'partner_bank_account_attributes_branch_code' => 'getPartnerBankAccountAttributesBranchCode',
        'partner_bank_account_attributes_account_type' => 'getPartnerBankAccountAttributesAccountType',
        'partner_bank_account_attributes_account_number' => 'getPartnerBankAccountAttributesAccountNumber',
        'partner_bank_account_attributes_account_name' => 'getPartnerBankAccountAttributesAccountName',
        'partner_bank_account_attributes_long_account_name' => 'getPartnerBankAccountAttributesLongAccountName'
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

    const PARTNER_DOC_SETTING_ATTRIBUTES_SENDING_METHOD_MAIL = 'mail';
    const PARTNER_DOC_SETTING_ATTRIBUTES_SENDING_METHOD_POSTING = 'posting';
    const PARTNER_DOC_SETTING_ATTRIBUTES_SENDING_METHOD_MAIN_AND_POSTING = 'main_and_posting';
    const PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_ORDINARY = 'ordinary';
    const PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_CHECKING = 'checking';
    const PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_EARMARKED = 'earmarked';
    const PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_SAVINGS = 'savings';
    const PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPartnerDocSettingAttributesSendingMethodAllowableValues()
    {
        return [
            self::PARTNER_DOC_SETTING_ATTRIBUTES_SENDING_METHOD_MAIL,
            self::PARTNER_DOC_SETTING_ATTRIBUTES_SENDING_METHOD_POSTING,
            self::PARTNER_DOC_SETTING_ATTRIBUTES_SENDING_METHOD_MAIN_AND_POSTING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPartnerBankAccountAttributesAccountTypeAllowableValues()
    {
        return [
            self::PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_ORDINARY,
            self::PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_CHECKING,
            self::PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_EARMARKED,
            self::PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_SAVINGS,
            self::PARTNER_BANK_ACCOUNT_ATTRIBUTES_ACCOUNT_TYPE_OTHER,
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
        $this->container['long_name'] = isset($data['long_name']) ? $data['long_name'] : null;
        $this->container['name_kana'] = isset($data['name_kana']) ? $data['name_kana'] : null;
        $this->container['default_title'] = isset($data['default_title']) ? $data['default_title'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['address_attributes_zipcode'] = isset($data['address_attributes_zipcode']) ? $data['address_attributes_zipcode'] : null;
        $this->container['address_attributes_prefecture_code'] = isset($data['address_attributes_prefecture_code']) ? $data['address_attributes_prefecture_code'] : null;
        $this->container['address_attributes_street_name1'] = isset($data['address_attributes_street_name1']) ? $data['address_attributes_street_name1'] : null;
        $this->container['address_attributes_street_name2'] = isset($data['address_attributes_street_name2']) ? $data['address_attributes_street_name2'] : null;
        $this->container['partner_doc_setting_attributes_sending_method'] = isset($data['partner_doc_setting_attributes_sending_method']) ? $data['partner_doc_setting_attributes_sending_method'] : null;
        $this->container['partner_bank_account_attributes_bank_name'] = isset($data['partner_bank_account_attributes_bank_name']) ? $data['partner_bank_account_attributes_bank_name'] : null;
        $this->container['partner_bank_account_attributes_bank_name_kana'] = isset($data['partner_bank_account_attributes_bank_name_kana']) ? $data['partner_bank_account_attributes_bank_name_kana'] : null;
        $this->container['partner_bank_account_attributes_bank_code'] = isset($data['partner_bank_account_attributes_bank_code']) ? $data['partner_bank_account_attributes_bank_code'] : null;
        $this->container['partner_bank_account_attributes_branch_name'] = isset($data['partner_bank_account_attributes_branch_name']) ? $data['partner_bank_account_attributes_branch_name'] : null;
        $this->container['partner_bank_account_attributes_branch_kana'] = isset($data['partner_bank_account_attributes_branch_kana']) ? $data['partner_bank_account_attributes_branch_kana'] : null;
        $this->container['partner_bank_account_attributes_branch_code'] = isset($data['partner_bank_account_attributes_branch_code']) ? $data['partner_bank_account_attributes_branch_code'] : null;
        $this->container['partner_bank_account_attributes_account_type'] = isset($data['partner_bank_account_attributes_account_type']) ? $data['partner_bank_account_attributes_account_type'] : null;
        $this->container['partner_bank_account_attributes_account_number'] = isset($data['partner_bank_account_attributes_account_number']) ? $data['partner_bank_account_attributes_account_number'] : null;
        $this->container['partner_bank_account_attributes_account_name'] = isset($data['partner_bank_account_attributes_account_name']) ? $data['partner_bank_account_attributes_account_name'] : null;
        $this->container['partner_bank_account_attributes_long_account_name'] = isset($data['partner_bank_account_attributes_long_account_name']) ? $data['partner_bank_account_attributes_long_account_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['address_attributes_prefecture_code']) && ($this->container['address_attributes_prefecture_code'] > 46)) {
            $invalidProperties[] = "invalid value for 'address_attributes_prefecture_code', must be smaller than or equal to 46.";
        }

        if (!is_null($this->container['address_attributes_prefecture_code']) && ($this->container['address_attributes_prefecture_code'] < 0)) {
            $invalidProperties[] = "invalid value for 'address_attributes_prefecture_code', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getPartnerDocSettingAttributesSendingMethodAllowableValues();
        if (!is_null($this->container['partner_doc_setting_attributes_sending_method']) && !in_array($this->container['partner_doc_setting_attributes_sending_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'partner_doc_setting_attributes_sending_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPartnerBankAccountAttributesAccountTypeAllowableValues();
        if (!is_null($this->container['partner_bank_account_attributes_account_type']) && !in_array($this->container['partner_bank_account_attributes_account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'partner_bank_account_attributes_account_type', must be one of '%s'",
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
     * Gets long_name
     *
     * @return string|null
     */
    public function getLongName()
    {
        return $this->container['long_name'];
    }

    /**
     * Sets long_name
     *
     * @param string|null $long_name 正式名称（255文字以内）
     *
     * @return $this
     */
    public function setLongName($long_name)
    {
        $this->container['long_name'] = $long_name;

        return $this;
    }

    /**
     * Gets name_kana
     *
     * @return string|null
     */
    public function getNameKana()
    {
        return $this->container['name_kana'];
    }

    /**
     * Sets name_kana
     *
     * @param string|null $name_kana カナ名称（255文字以内）
     *
     * @return $this
     */
    public function setNameKana($name_kana)
    {
        $this->container['name_kana'] = $name_kana;

        return $this;
    }

    /**
     * Gets default_title
     *
     * @return string|null
     */
    public function getDefaultTitle()
    {
        return $this->container['default_title'];
    }

    /**
     * Sets default_title
     *
     * @param string|null $default_title 敬称（御中、様、(空白)の3つから選択）
     *
     * @return $this
     */
    public function setDefaultTitle($default_title)
    {
        $this->container['default_title'] = $default_title;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone 電話番号
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string|null
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string|null $contact_name 担当者 氏名
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email 担当者 メールアドレス
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets address_attributes_zipcode
     *
     * @return string|null
     */
    public function getAddressAttributesZipcode()
    {
        return $this->container['address_attributes_zipcode'];
    }

    /**
     * Sets address_attributes_zipcode
     *
     * @param string|null $address_attributes_zipcode 郵便番号
     *
     * @return $this
     */
    public function setAddressAttributesZipcode($address_attributes_zipcode)
    {
        $this->container['address_attributes_zipcode'] = $address_attributes_zipcode;

        return $this;
    }

    /**
     * Gets address_attributes_prefecture_code
     *
     * @return int|null
     */
    public function getAddressAttributesPrefectureCode()
    {
        return $this->container['address_attributes_prefecture_code'];
    }

    /**
     * Sets address_attributes_prefecture_code
     *
     * @param int|null $address_attributes_prefecture_code 都道府県コード（0:北海道、1:青森、2:岩手、3:宮城、4:秋田、5:山形、6:福島、7:茨城、8:栃木、9:群馬、10:埼玉、11:千葉、12:東京、13:神奈川、14:新潟、15:富山、16:石川、17:福井、18:山梨、19:長野、20:岐阜、21:静岡、22:愛知、23:三重、24:滋賀、25:京都、26:大阪、27:兵庫、28:奈良、29:和歌山、30:鳥取、31:島根、32:岡山、33:広島、34:山口、35:徳島、36:香川、37:愛媛、38:高知、39:福岡、40:佐賀、41:長崎、42:熊本、43:大分、44:宮崎、45:鹿児島、46:沖縄
     *
     * @return $this
     */
    public function setAddressAttributesPrefectureCode($address_attributes_prefecture_code)
    {

        if (!is_null($address_attributes_prefecture_code) && ($address_attributes_prefecture_code > 46)) {
            throw new \InvalidArgumentException('invalid value for $address_attributes_prefecture_code when calling PartnerAllOf1., must be smaller than or equal to 46.');
        }
        if (!is_null($address_attributes_prefecture_code) && ($address_attributes_prefecture_code < 0)) {
            throw new \InvalidArgumentException('invalid value for $address_attributes_prefecture_code when calling PartnerAllOf1., must be bigger than or equal to 0.');
        }

        $this->container['address_attributes_prefecture_code'] = $address_attributes_prefecture_code;

        return $this;
    }

    /**
     * Gets address_attributes_street_name1
     *
     * @return string|null
     */
    public function getAddressAttributesStreetName1()
    {
        return $this->container['address_attributes_street_name1'];
    }

    /**
     * Sets address_attributes_street_name1
     *
     * @param string|null $address_attributes_street_name1 市区町村・番地
     *
     * @return $this
     */
    public function setAddressAttributesStreetName1($address_attributes_street_name1)
    {
        $this->container['address_attributes_street_name1'] = $address_attributes_street_name1;

        return $this;
    }

    /**
     * Gets address_attributes_street_name2
     *
     * @return string|null
     */
    public function getAddressAttributesStreetName2()
    {
        return $this->container['address_attributes_street_name2'];
    }

    /**
     * Sets address_attributes_street_name2
     *
     * @param string|null $address_attributes_street_name2 建物名・部屋番号など
     *
     * @return $this
     */
    public function setAddressAttributesStreetName2($address_attributes_street_name2)
    {
        $this->container['address_attributes_street_name2'] = $address_attributes_street_name2;

        return $this;
    }

    /**
     * Gets partner_doc_setting_attributes_sending_method
     *
     * @return string|null
     */
    public function getPartnerDocSettingAttributesSendingMethod()
    {
        return $this->container['partner_doc_setting_attributes_sending_method'];
    }

    /**
     * Sets partner_doc_setting_attributes_sending_method
     *
     * @param string|null $partner_doc_setting_attributes_sending_method 請求書送付方法(mail:メール、posting:郵送、mail_and_posting:メールと郵送)
     *
     * @return $this
     */
    public function setPartnerDocSettingAttributesSendingMethod($partner_doc_setting_attributes_sending_method)
    {
        $allowedValues = $this->getPartnerDocSettingAttributesSendingMethodAllowableValues();
        if (!is_null($partner_doc_setting_attributes_sending_method) && !in_array($partner_doc_setting_attributes_sending_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'partner_doc_setting_attributes_sending_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['partner_doc_setting_attributes_sending_method'] = $partner_doc_setting_attributes_sending_method;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_bank_name
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesBankName()
    {
        return $this->container['partner_bank_account_attributes_bank_name'];
    }

    /**
     * Sets partner_bank_account_attributes_bank_name
     *
     * @param string|null $partner_bank_account_attributes_bank_name 銀行名
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesBankName($partner_bank_account_attributes_bank_name)
    {
        $this->container['partner_bank_account_attributes_bank_name'] = $partner_bank_account_attributes_bank_name;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_bank_name_kana
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesBankNameKana()
    {
        return $this->container['partner_bank_account_attributes_bank_name_kana'];
    }

    /**
     * Sets partner_bank_account_attributes_bank_name_kana
     *
     * @param string|null $partner_bank_account_attributes_bank_name_kana 銀行名（カナ）
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesBankNameKana($partner_bank_account_attributes_bank_name_kana)
    {
        $this->container['partner_bank_account_attributes_bank_name_kana'] = $partner_bank_account_attributes_bank_name_kana;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_bank_code
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesBankCode()
    {
        return $this->container['partner_bank_account_attributes_bank_code'];
    }

    /**
     * Sets partner_bank_account_attributes_bank_code
     *
     * @param string|null $partner_bank_account_attributes_bank_code 銀行番号
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesBankCode($partner_bank_account_attributes_bank_code)
    {
        $this->container['partner_bank_account_attributes_bank_code'] = $partner_bank_account_attributes_bank_code;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_branch_name
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesBranchName()
    {
        return $this->container['partner_bank_account_attributes_branch_name'];
    }

    /**
     * Sets partner_bank_account_attributes_branch_name
     *
     * @param string|null $partner_bank_account_attributes_branch_name 支店名
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesBranchName($partner_bank_account_attributes_branch_name)
    {
        $this->container['partner_bank_account_attributes_branch_name'] = $partner_bank_account_attributes_branch_name;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_branch_kana
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesBranchKana()
    {
        return $this->container['partner_bank_account_attributes_branch_kana'];
    }

    /**
     * Sets partner_bank_account_attributes_branch_kana
     *
     * @param string|null $partner_bank_account_attributes_branch_kana 支店名（カナ）
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesBranchKana($partner_bank_account_attributes_branch_kana)
    {
        $this->container['partner_bank_account_attributes_branch_kana'] = $partner_bank_account_attributes_branch_kana;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_branch_code
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesBranchCode()
    {
        return $this->container['partner_bank_account_attributes_branch_code'];
    }

    /**
     * Sets partner_bank_account_attributes_branch_code
     *
     * @param string|null $partner_bank_account_attributes_branch_code 受取人名（カナ）
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesBranchCode($partner_bank_account_attributes_branch_code)
    {
        $this->container['partner_bank_account_attributes_branch_code'] = $partner_bank_account_attributes_branch_code;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_account_type
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesAccountType()
    {
        return $this->container['partner_bank_account_attributes_account_type'];
    }

    /**
     * Sets partner_bank_account_attributes_account_type
     *
     * @param string|null $partner_bank_account_attributes_account_type 口座種別(ordinary:普通、checking:当座、earmarked:納税準備預金、savings:貯蓄、other:その他)
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesAccountType($partner_bank_account_attributes_account_type)
    {
        $allowedValues = $this->getPartnerBankAccountAttributesAccountTypeAllowableValues();
        if (!is_null($partner_bank_account_attributes_account_type) && !in_array($partner_bank_account_attributes_account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'partner_bank_account_attributes_account_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['partner_bank_account_attributes_account_type'] = $partner_bank_account_attributes_account_type;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_account_number
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesAccountNumber()
    {
        return $this->container['partner_bank_account_attributes_account_number'];
    }

    /**
     * Sets partner_bank_account_attributes_account_number
     *
     * @param string|null $partner_bank_account_attributes_account_number 口座番号
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesAccountNumber($partner_bank_account_attributes_account_number)
    {
        $this->container['partner_bank_account_attributes_account_number'] = $partner_bank_account_attributes_account_number;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_account_name
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesAccountName()
    {
        return $this->container['partner_bank_account_attributes_account_name'];
    }

    /**
     * Sets partner_bank_account_attributes_account_name
     *
     * @param string|null $partner_bank_account_attributes_account_name 受取人名（カナ）
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesAccountName($partner_bank_account_attributes_account_name)
    {
        $this->container['partner_bank_account_attributes_account_name'] = $partner_bank_account_attributes_account_name;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes_long_account_name
     *
     * @return string|null
     */
    public function getPartnerBankAccountAttributesLongAccountName()
    {
        return $this->container['partner_bank_account_attributes_long_account_name'];
    }

    /**
     * Sets partner_bank_account_attributes_long_account_name
     *
     * @param string|null $partner_bank_account_attributes_long_account_name 受取人名
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributesLongAccountName($partner_bank_account_attributes_long_account_name)
    {
        $this->container['partner_bank_account_attributes_long_account_name'] = $partner_bank_account_attributes_long_account_name;

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


