<?php
/**
 * PartnerUpdateParams
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
 * OpenAPI Generator version: 4.1.3
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
 * PartnerUpdateParams Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PartnerUpdateParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'partnerUpdateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_id' => 'int',
        'name' => 'string',
        'shortcut1' => 'string',
        'shortcut2' => 'string',
        'long_name' => 'string',
        'name_kana' => 'string',
        'default_title' => 'string',
        'phone' => 'string',
        'contact_name' => 'string',
        'email' => 'string',
        'address_attributes' => '\Freee\Accounting\Model\PartnerCreateParamsAddressAttributes',
        'partner_doc_setting_attributes' => '\Freee\Accounting\Model\PartnerCreateParamsPartnerDocSettingAttributes',
        'partner_bank_account_attributes' => '\Freee\Accounting\Model\PartnerCreateParamsPartnerBankAccountAttributes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'company_id' => null,
        'name' => null,
        'shortcut1' => null,
        'shortcut2' => null,
        'long_name' => null,
        'name_kana' => null,
        'default_title' => null,
        'phone' => null,
        'contact_name' => null,
        'email' => null,
        'address_attributes' => null,
        'partner_doc_setting_attributes' => null,
        'partner_bank_account_attributes' => null
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
        'company_id' => 'company_id',
        'name' => 'name',
        'shortcut1' => 'shortcut1',
        'shortcut2' => 'shortcut2',
        'long_name' => 'long_name',
        'name_kana' => 'name_kana',
        'default_title' => 'default_title',
        'phone' => 'phone',
        'contact_name' => 'contact_name',
        'email' => 'email',
        'address_attributes' => 'address_attributes',
        'partner_doc_setting_attributes' => 'partner_doc_setting_attributes',
        'partner_bank_account_attributes' => 'partner_bank_account_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'name' => 'setName',
        'shortcut1' => 'setShortcut1',
        'shortcut2' => 'setShortcut2',
        'long_name' => 'setLongName',
        'name_kana' => 'setNameKana',
        'default_title' => 'setDefaultTitle',
        'phone' => 'setPhone',
        'contact_name' => 'setContactName',
        'email' => 'setEmail',
        'address_attributes' => 'setAddressAttributes',
        'partner_doc_setting_attributes' => 'setPartnerDocSettingAttributes',
        'partner_bank_account_attributes' => 'setPartnerBankAccountAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'name' => 'getName',
        'shortcut1' => 'getShortcut1',
        'shortcut2' => 'getShortcut2',
        'long_name' => 'getLongName',
        'name_kana' => 'getNameKana',
        'default_title' => 'getDefaultTitle',
        'phone' => 'getPhone',
        'contact_name' => 'getContactName',
        'email' => 'getEmail',
        'address_attributes' => 'getAddressAttributes',
        'partner_doc_setting_attributes' => 'getPartnerDocSettingAttributes',
        'partner_bank_account_attributes' => 'getPartnerBankAccountAttributes'
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

    const DEFAULT_TITLE_EMPTY = '';
    const DEFAULT_TITLE_ = '(空白)';
    const DEFAULT_TITLE_ = '御中';
    const DEFAULT_TITLE_ = '様';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultTitleAllowableValues()
    {
        return [
            self::DEFAULT_TITLE_EMPTY,
            self::DEFAULT_TITLE_,
            self::DEFAULT_TITLE_,
            self::DEFAULT_TITLE_,
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
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shortcut1'] = isset($data['shortcut1']) ? $data['shortcut1'] : null;
        $this->container['shortcut2'] = isset($data['shortcut2']) ? $data['shortcut2'] : null;
        $this->container['long_name'] = isset($data['long_name']) ? $data['long_name'] : null;
        $this->container['name_kana'] = isset($data['name_kana']) ? $data['name_kana'] : null;
        $this->container['default_title'] = isset($data['default_title']) ? $data['default_title'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['address_attributes'] = isset($data['address_attributes']) ? $data['address_attributes'] : null;
        $this->container['partner_doc_setting_attributes'] = isset($data['partner_doc_setting_attributes']) ? $data['partner_doc_setting_attributes'] : null;
        $this->container['partner_bank_account_attributes'] = isset($data['partner_bank_account_attributes']) ? $data['partner_bank_account_attributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 999999999999.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['shortcut1']) && (mb_strlen($this->container['shortcut1']) > 255)) {
            $invalidProperties[] = "invalid value for 'shortcut1', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['shortcut2']) && (mb_strlen($this->container['shortcut2']) > 255)) {
            $invalidProperties[] = "invalid value for 'shortcut2', the character length must be smaller than or equal to 255.";
        }

        $allowedValues = $this->getDefaultTitleAllowableValues();
        if (!is_null($this->container['default_title']) && !in_array($this->container['default_title'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'default_title', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['contact_name']) && (mb_strlen($this->container['contact_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'contact_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 255)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 255.";
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
            throw new \InvalidArgumentException('invalid value for $company_id when calling PartnerUpdateParams., must be smaller than or equal to 999999999999.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling PartnerUpdateParams., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

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
     * @param string $name 取引先名 (255文字以内)
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PartnerUpdateParams., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets shortcut1
     *
     * @return string|null
     */
    public function getShortcut1()
    {
        return $this->container['shortcut1'];
    }

    /**
     * Sets shortcut1
     *
     * @param string|null $shortcut1 ショートカット１ (255文字以内)
     *
     * @return $this
     */
    public function setShortcut1($shortcut1)
    {
        if (!is_null($shortcut1) && (mb_strlen($shortcut1) > 255)) {
            throw new \InvalidArgumentException('invalid length for $shortcut1 when calling PartnerUpdateParams., must be smaller than or equal to 255.');
        }

        $this->container['shortcut1'] = $shortcut1;

        return $this;
    }

    /**
     * Gets shortcut2
     *
     * @return string|null
     */
    public function getShortcut2()
    {
        return $this->container['shortcut2'];
    }

    /**
     * Sets shortcut2
     *
     * @param string|null $shortcut2 ショートカット２ (255文字以内)
     *
     * @return $this
     */
    public function setShortcut2($shortcut2)
    {
        if (!is_null($shortcut2) && (mb_strlen($shortcut2) > 255)) {
            throw new \InvalidArgumentException('invalid length for $shortcut2 when calling PartnerUpdateParams., must be smaller than or equal to 255.');
        }

        $this->container['shortcut2'] = $shortcut2;

        return $this;
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
        $allowedValues = $this->getDefaultTitleAllowableValues();
        if (!is_null($default_title) && !in_array($default_title, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'default_title', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @param string|null $contact_name 営業担当者名 (255文字以内)
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        if (!is_null($contact_name) && (mb_strlen($contact_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $contact_name when calling PartnerUpdateParams., must be smaller than or equal to 255.');
        }

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
     * @param string|null $email 営業担当者 メールアドレス (255文字以内)
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 255)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PartnerUpdateParams., must be smaller than or equal to 255.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets address_attributes
     *
     * @return \Freee\Accounting\Model\PartnerCreateParamsAddressAttributes|null
     */
    public function getAddressAttributes()
    {
        return $this->container['address_attributes'];
    }

    /**
     * Sets address_attributes
     *
     * @param \Freee\Accounting\Model\PartnerCreateParamsAddressAttributes|null $address_attributes address_attributes
     *
     * @return $this
     */
    public function setAddressAttributes($address_attributes)
    {
        $this->container['address_attributes'] = $address_attributes;

        return $this;
    }

    /**
     * Gets partner_doc_setting_attributes
     *
     * @return \Freee\Accounting\Model\PartnerCreateParamsPartnerDocSettingAttributes|null
     */
    public function getPartnerDocSettingAttributes()
    {
        return $this->container['partner_doc_setting_attributes'];
    }

    /**
     * Sets partner_doc_setting_attributes
     *
     * @param \Freee\Accounting\Model\PartnerCreateParamsPartnerDocSettingAttributes|null $partner_doc_setting_attributes partner_doc_setting_attributes
     *
     * @return $this
     */
    public function setPartnerDocSettingAttributes($partner_doc_setting_attributes)
    {
        $this->container['partner_doc_setting_attributes'] = $partner_doc_setting_attributes;

        return $this;
    }

    /**
     * Gets partner_bank_account_attributes
     *
     * @return \Freee\Accounting\Model\PartnerCreateParamsPartnerBankAccountAttributes|null
     */
    public function getPartnerBankAccountAttributes()
    {
        return $this->container['partner_bank_account_attributes'];
    }

    /**
     * Sets partner_bank_account_attributes
     *
     * @param \Freee\Accounting\Model\PartnerCreateParamsPartnerBankAccountAttributes|null $partner_bank_account_attributes partner_bank_account_attributes
     *
     * @return $this
     */
    public function setPartnerBankAccountAttributes($partner_bank_account_attributes)
    {
        $this->container['partner_bank_account_attributes'] = $partner_bank_account_attributes;

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


