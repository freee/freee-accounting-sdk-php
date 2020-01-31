<?php
/**
 * UpdateCompanyParamsFiscalYearsAttributes
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
 * UpdateCompanyParamsFiscalYearsAttributes Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateCompanyParamsFiscalYearsAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'updateCompanyParams_fiscal_years_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'use_industry_template' => 'int',
        'indirect_write_off_method' => 'int',
        'indirect_write_off_method_type' => 'int',
        'start_date' => 'string',
        'end_date' => 'string',
        'accounting_period' => 'int',
        'depreciation_fraction' => 'int',
        'return_code' => 'int',
        'tax_fraction' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'use_industry_template' => null,
        'indirect_write_off_method' => null,
        'indirect_write_off_method_type' => null,
        'start_date' => null,
        'end_date' => null,
        'accounting_period' => null,
        'depreciation_fraction' => null,
        'return_code' => null,
        'tax_fraction' => null
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
        'use_industry_template' => 'use_industry_template',
        'indirect_write_off_method' => 'indirect_write_off_method',
        'indirect_write_off_method_type' => 'indirect_write_off_method_type',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'accounting_period' => 'accounting_period',
        'depreciation_fraction' => 'depreciation_fraction',
        'return_code' => 'return_code',
        'tax_fraction' => 'tax_fraction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'use_industry_template' => 'setUseIndustryTemplate',
        'indirect_write_off_method' => 'setIndirectWriteOffMethod',
        'indirect_write_off_method_type' => 'setIndirectWriteOffMethodType',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'accounting_period' => 'setAccountingPeriod',
        'depreciation_fraction' => 'setDepreciationFraction',
        'return_code' => 'setReturnCode',
        'tax_fraction' => 'setTaxFraction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'use_industry_template' => 'getUseIndustryTemplate',
        'indirect_write_off_method' => 'getIndirectWriteOffMethod',
        'indirect_write_off_method_type' => 'getIndirectWriteOffMethodType',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'accounting_period' => 'getAccountingPeriod',
        'depreciation_fraction' => 'getDepreciationFraction',
        'return_code' => 'getReturnCode',
        'tax_fraction' => 'getTaxFraction'
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
        $this->container['use_industry_template'] = isset($data['use_industry_template']) ? $data['use_industry_template'] : null;
        $this->container['indirect_write_off_method'] = isset($data['indirect_write_off_method']) ? $data['indirect_write_off_method'] : null;
        $this->container['indirect_write_off_method_type'] = isset($data['indirect_write_off_method_type']) ? $data['indirect_write_off_method_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['accounting_period'] = isset($data['accounting_period']) ? $data['accounting_period'] : null;
        $this->container['depreciation_fraction'] = isset($data['depreciation_fraction']) ? $data['depreciation_fraction'] : null;
        $this->container['return_code'] = isset($data['return_code']) ? $data['return_code'] : null;
        $this->container['tax_fraction'] = isset($data['tax_fraction']) ? $data['tax_fraction'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['use_industry_template']) && ($this->container['use_industry_template'] > 1)) {
            $invalidProperties[] = "invalid value for 'use_industry_template', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['use_industry_template']) && ($this->container['use_industry_template'] < 0)) {
            $invalidProperties[] = "invalid value for 'use_industry_template', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['indirect_write_off_method']) && ($this->container['indirect_write_off_method'] > 1)) {
            $invalidProperties[] = "invalid value for 'indirect_write_off_method', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['indirect_write_off_method']) && ($this->container['indirect_write_off_method'] < 0)) {
            $invalidProperties[] = "invalid value for 'indirect_write_off_method', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['indirect_write_off_method_type']) && ($this->container['indirect_write_off_method_type'] > 1)) {
            $invalidProperties[] = "invalid value for 'indirect_write_off_method_type', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['indirect_write_off_method_type']) && ($this->container['indirect_write_off_method_type'] < 0)) {
            $invalidProperties[] = "invalid value for 'indirect_write_off_method_type', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['depreciation_fraction']) && ($this->container['depreciation_fraction'] > 1)) {
            $invalidProperties[] = "invalid value for 'depreciation_fraction', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['depreciation_fraction']) && ($this->container['depreciation_fraction'] < 0)) {
            $invalidProperties[] = "invalid value for 'depreciation_fraction', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['tax_fraction']) && ($this->container['tax_fraction'] > 2)) {
            $invalidProperties[] = "invalid value for 'tax_fraction', must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['tax_fraction']) && ($this->container['tax_fraction'] < 0)) {
            $invalidProperties[] = "invalid value for 'tax_fraction', must be bigger than or equal to 0.";
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
     * Gets use_industry_template
     *
     * @return int|null
     */
    public function getUseIndustryTemplate()
    {
        return $this->container['use_industry_template'];
    }

    /**
     * Sets use_industry_template
     *
     * @param int|null $use_industry_template 製造業向け機能（0: 使用しない、1: 使用する）
     *
     * @return $this
     */
    public function setUseIndustryTemplate($use_industry_template)
    {

        if (!is_null($use_industry_template) && ($use_industry_template > 1)) {
            throw new \InvalidArgumentException('invalid value for $use_industry_template when calling UpdateCompanyParamsFiscalYearsAttributes., must be smaller than or equal to 1.');
        }
        if (!is_null($use_industry_template) && ($use_industry_template < 0)) {
            throw new \InvalidArgumentException('invalid value for $use_industry_template when calling UpdateCompanyParamsFiscalYearsAttributes., must be bigger than or equal to 0.');
        }

        $this->container['use_industry_template'] = $use_industry_template;

        return $this;
    }

    /**
     * Gets indirect_write_off_method
     *
     * @return int|null
     */
    public function getIndirectWriteOffMethod()
    {
        return $this->container['indirect_write_off_method'];
    }

    /**
     * Sets indirect_write_off_method
     *
     * @param int|null $indirect_write_off_method 固定資産の控除法（0: 直接控除法、1: 間接控除法）
     *
     * @return $this
     */
    public function setIndirectWriteOffMethod($indirect_write_off_method)
    {

        if (!is_null($indirect_write_off_method) && ($indirect_write_off_method > 1)) {
            throw new \InvalidArgumentException('invalid value for $indirect_write_off_method when calling UpdateCompanyParamsFiscalYearsAttributes., must be smaller than or equal to 1.');
        }
        if (!is_null($indirect_write_off_method) && ($indirect_write_off_method < 0)) {
            throw new \InvalidArgumentException('invalid value for $indirect_write_off_method when calling UpdateCompanyParamsFiscalYearsAttributes., must be bigger than or equal to 0.');
        }

        $this->container['indirect_write_off_method'] = $indirect_write_off_method;

        return $this;
    }

    /**
     * Gets indirect_write_off_method_type
     *
     * @return int|null
     */
    public function getIndirectWriteOffMethodType()
    {
        return $this->container['indirect_write_off_method_type'];
    }

    /**
     * Sets indirect_write_off_method_type
     *
     * @param int|null $indirect_write_off_method_type 間接控除時の累計額（0: 共通、1: 資産分類別）
     *
     * @return $this
     */
    public function setIndirectWriteOffMethodType($indirect_write_off_method_type)
    {

        if (!is_null($indirect_write_off_method_type) && ($indirect_write_off_method_type > 1)) {
            throw new \InvalidArgumentException('invalid value for $indirect_write_off_method_type when calling UpdateCompanyParamsFiscalYearsAttributes., must be smaller than or equal to 1.');
        }
        if (!is_null($indirect_write_off_method_type) && ($indirect_write_off_method_type < 0)) {
            throw new \InvalidArgumentException('invalid value for $indirect_write_off_method_type when calling UpdateCompanyParamsFiscalYearsAttributes., must be bigger than or equal to 0.');
        }

        $this->container['indirect_write_off_method_type'] = $indirect_write_off_method_type;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date 期首日
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date 期末日（決算日）
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets accounting_period
     *
     * @return int|null
     */
    public function getAccountingPeriod()
    {
        return $this->container['accounting_period'];
    }

    /**
     * Sets accounting_period
     *
     * @param int|null $accounting_period 期
     *
     * @return $this
     */
    public function setAccountingPeriod($accounting_period)
    {
        $this->container['accounting_period'] = $accounting_period;

        return $this;
    }

    /**
     * Gets depreciation_fraction
     *
     * @return int|null
     */
    public function getDepreciationFraction()
    {
        return $this->container['depreciation_fraction'];
    }

    /**
     * Sets depreciation_fraction
     *
     * @param int|null $depreciation_fraction 減価償却端数処理法(法人のみ)(0: 切り捨て、1: 切り上げ)
     *
     * @return $this
     */
    public function setDepreciationFraction($depreciation_fraction)
    {

        if (!is_null($depreciation_fraction) && ($depreciation_fraction > 1)) {
            throw new \InvalidArgumentException('invalid value for $depreciation_fraction when calling UpdateCompanyParamsFiscalYearsAttributes., must be smaller than or equal to 1.');
        }
        if (!is_null($depreciation_fraction) && ($depreciation_fraction < 0)) {
            throw new \InvalidArgumentException('invalid value for $depreciation_fraction when calling UpdateCompanyParamsFiscalYearsAttributes., must be bigger than or equal to 0.');
        }

        $this->container['depreciation_fraction'] = $depreciation_fraction;

        return $this;
    }

    /**
     * Gets return_code
     *
     * @return int|null
     */
    public function getReturnCode()
    {
        return $this->container['return_code'];
    }

    /**
     * Sets return_code
     *
     * @param int|null $return_code 不動産所得使用区分(個人事業主のみ)（0: 使用しない、3: 使用する）
     *
     * @return $this
     */
    public function setReturnCode($return_code)
    {
        $this->container['return_code'] = $return_code;

        return $this;
    }

    /**
     * Gets tax_fraction
     *
     * @return int|null
     */
    public function getTaxFraction()
    {
        return $this->container['tax_fraction'];
    }

    /**
     * Sets tax_fraction
     *
     * @param int|null $tax_fraction 消費税端数処理方法（0: 切り上げ、1: 切り捨て, 2: 四捨五入）
     *
     * @return $this
     */
    public function setTaxFraction($tax_fraction)
    {

        if (!is_null($tax_fraction) && ($tax_fraction > 2)) {
            throw new \InvalidArgumentException('invalid value for $tax_fraction when calling UpdateCompanyParamsFiscalYearsAttributes., must be smaller than or equal to 2.');
        }
        if (!is_null($tax_fraction) && ($tax_fraction < 0)) {
            throw new \InvalidArgumentException('invalid value for $tax_fraction when calling UpdateCompanyParamsFiscalYearsAttributes., must be bigger than or equal to 0.');
        }

        $this->container['tax_fraction'] = $tax_fraction;

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


