<?php
/**
 * TrialBsTwoYearsResponseTrialBsTwoYears
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
 * TrialBsTwoYearsResponseTrialBsTwoYears Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrialBsTwoYearsResponseTrialBsTwoYears implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trialBsTwoYearsResponse_trial_bs_two_years';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_id' => 'int',
        'up_to_date' => 'bool',
        'fiscal_year' => 'int',
        'start_month' => 'int',
        'end_month' => 'int',
        'start_date' => 'string',
        'end_date' => 'string',
        'account_item_display_type' => 'string',
        'breakdown_display_type' => 'string',
        'partner_id' => 'int',
        'partner_code' => 'string',
        'item_id' => 'int',
        'adjustment' => 'string',
        'created_at' => 'string',
        'balances' => '\Freee\Accounting\Model\TrialBsTwoYearsResponseTrialBsTwoYearsBalances[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'company_id' => null,
        'up_to_date' => null,
        'fiscal_year' => null,
        'start_month' => null,
        'end_month' => null,
        'start_date' => null,
        'end_date' => null,
        'account_item_display_type' => null,
        'breakdown_display_type' => null,
        'partner_id' => null,
        'partner_code' => null,
        'item_id' => null,
        'adjustment' => null,
        'created_at' => null,
        'balances' => null
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
        'up_to_date' => 'up_to_date',
        'fiscal_year' => 'fiscal_year',
        'start_month' => 'start_month',
        'end_month' => 'end_month',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'account_item_display_type' => 'account_item_display_type',
        'breakdown_display_type' => 'breakdown_display_type',
        'partner_id' => 'partner_id',
        'partner_code' => 'partner_code',
        'item_id' => 'item_id',
        'adjustment' => 'adjustment',
        'created_at' => 'created_at',
        'balances' => 'balances'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'up_to_date' => 'setUpToDate',
        'fiscal_year' => 'setFiscalYear',
        'start_month' => 'setStartMonth',
        'end_month' => 'setEndMonth',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'account_item_display_type' => 'setAccountItemDisplayType',
        'breakdown_display_type' => 'setBreakdownDisplayType',
        'partner_id' => 'setPartnerId',
        'partner_code' => 'setPartnerCode',
        'item_id' => 'setItemId',
        'adjustment' => 'setAdjustment',
        'created_at' => 'setCreatedAt',
        'balances' => 'setBalances'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'up_to_date' => 'getUpToDate',
        'fiscal_year' => 'getFiscalYear',
        'start_month' => 'getStartMonth',
        'end_month' => 'getEndMonth',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'account_item_display_type' => 'getAccountItemDisplayType',
        'breakdown_display_type' => 'getBreakdownDisplayType',
        'partner_id' => 'getPartnerId',
        'partner_code' => 'getPartnerCode',
        'item_id' => 'getItemId',
        'adjustment' => 'getAdjustment',
        'created_at' => 'getCreatedAt',
        'balances' => 'getBalances'
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

    const ACCOUNT_ITEM_DISPLAY_TYPE_ACCOUNT_ITEM = 'account_item';
    const ACCOUNT_ITEM_DISPLAY_TYPE_GROUP = 'group';
    const BREAKDOWN_DISPLAY_TYPE_PARTNER = 'partner';
    const BREAKDOWN_DISPLAY_TYPE_ITEM = 'item';
    const BREAKDOWN_DISPLAY_TYPE_ACCOUNT_ITEM = 'account_item';
    const ADJUSTMENT_ONLY = 'only';
    const ADJUSTMENT_WITHOUT = 'without';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountItemDisplayTypeAllowableValues()
    {
        return [
            self::ACCOUNT_ITEM_DISPLAY_TYPE_ACCOUNT_ITEM,
            self::ACCOUNT_ITEM_DISPLAY_TYPE_GROUP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBreakdownDisplayTypeAllowableValues()
    {
        return [
            self::BREAKDOWN_DISPLAY_TYPE_PARTNER,
            self::BREAKDOWN_DISPLAY_TYPE_ITEM,
            self::BREAKDOWN_DISPLAY_TYPE_ACCOUNT_ITEM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdjustmentAllowableValues()
    {
        return [
            self::ADJUSTMENT_ONLY,
            self::ADJUSTMENT_WITHOUT,
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
        $this->container['up_to_date'] = isset($data['up_to_date']) ? $data['up_to_date'] : null;
        $this->container['fiscal_year'] = isset($data['fiscal_year']) ? $data['fiscal_year'] : null;
        $this->container['start_month'] = isset($data['start_month']) ? $data['start_month'] : null;
        $this->container['end_month'] = isset($data['end_month']) ? $data['end_month'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['account_item_display_type'] = isset($data['account_item_display_type']) ? $data['account_item_display_type'] : null;
        $this->container['breakdown_display_type'] = isset($data['breakdown_display_type']) ? $data['breakdown_display_type'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['partner_code'] = isset($data['partner_code']) ? $data['partner_code'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['adjustment'] = isset($data['adjustment']) ? $data['adjustment'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['balances'] = isset($data['balances']) ? $data['balances'] : null;
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

        if ($this->container['up_to_date'] === null) {
            $invalidProperties[] = "'up_to_date' can't be null";
        }
        $allowedValues = $this->getAccountItemDisplayTypeAllowableValues();
        if (!is_null($this->container['account_item_display_type']) && !in_array($this->container['account_item_display_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'account_item_display_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBreakdownDisplayTypeAllowableValues();
        if (!is_null($this->container['breakdown_display_type']) && !in_array($this->container['breakdown_display_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'breakdown_display_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdjustmentAllowableValues();
        if (!is_null($this->container['adjustment']) && !in_array($this->container['adjustment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'adjustment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['balances'] === null) {
            $invalidProperties[] = "'balances' can't be null";
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
            throw new \InvalidArgumentException('invalid value for $company_id when calling TrialBsTwoYearsResponseTrialBsTwoYears., must be smaller than or equal to 999999999999.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling TrialBsTwoYearsResponseTrialBsTwoYears., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets up_to_date
     *
     * @return bool
     */
    public function getUpToDate()
    {
        return $this->container['up_to_date'];
    }

    /**
     * Sets up_to_date
     *
     * @param bool $up_to_date 集計結果が最新かどうか
     *
     * @return $this
     */
    public function setUpToDate($up_to_date)
    {
        $this->container['up_to_date'] = $up_to_date;

        return $this;
    }

    /**
     * Gets fiscal_year
     *
     * @return int|null
     */
    public function getFiscalYear()
    {
        return $this->container['fiscal_year'];
    }

    /**
     * Sets fiscal_year
     *
     * @param int|null $fiscal_year 会計年度(条件に指定した時、または条件に月、日条件がない時のみ含まれる）
     *
     * @return $this
     */
    public function setFiscalYear($fiscal_year)
    {
        $this->container['fiscal_year'] = $fiscal_year;

        return $this;
    }

    /**
     * Gets start_month
     *
     * @return int|null
     */
    public function getStartMonth()
    {
        return $this->container['start_month'];
    }

    /**
     * Sets start_month
     *
     * @param int|null $start_month 発生月で絞込：開始会計月(mm)(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setStartMonth($start_month)
    {
        $this->container['start_month'] = $start_month;

        return $this;
    }

    /**
     * Gets end_month
     *
     * @return int|null
     */
    public function getEndMonth()
    {
        return $this->container['end_month'];
    }

    /**
     * Sets end_month
     *
     * @param int|null $end_month 発生月で絞込：終了会計月(mm)(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setEndMonth($end_month)
    {
        $this->container['end_month'] = $end_month;

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
     * @param string|null $start_date 発生日で絞込：開始日(yyyy-mm-dd)(条件に指定した時のみ含まれる）
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
     * @param string|null $end_date 発生日で絞込：終了日(yyyy-mm-dd)(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets account_item_display_type
     *
     * @return string|null
     */
    public function getAccountItemDisplayType()
    {
        return $this->container['account_item_display_type'];
    }

    /**
     * Sets account_item_display_type
     *
     * @param string|null $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group）(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setAccountItemDisplayType($account_item_display_type)
    {
        $allowedValues = $this->getAccountItemDisplayTypeAllowableValues();
        if (!is_null($account_item_display_type) && !in_array($account_item_display_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account_item_display_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_item_display_type'] = $account_item_display_type;

        return $this;
    }

    /**
     * Gets breakdown_display_type
     *
     * @return string|null
     */
    public function getBreakdownDisplayType()
    {
        return $this->container['breakdown_display_type'];
    }

    /**
     * Sets breakdown_display_type
     *
     * @param string|null $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item）(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setBreakdownDisplayType($breakdown_display_type)
    {
        $allowedValues = $this->getBreakdownDisplayTypeAllowableValues();
        if (!is_null($breakdown_display_type) && !in_array($breakdown_display_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'breakdown_display_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['breakdown_display_type'] = $breakdown_display_type;

        return $this;
    }

    /**
     * Gets partner_id
     *
     * @return int|null
     */
    public function getPartnerId()
    {
        return $this->container['partner_id'];
    }

    /**
     * Sets partner_id
     *
     * @param int|null $partner_id 取引先ID(条件に指定した時のみ含まれる）
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
     * @param string|null $partner_code 取引先コード(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setPartnerCode($partner_code)
    {
        $this->container['partner_code'] = $partner_code;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int|null $item_id 品目ID(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets adjustment
     *
     * @return string|null
     */
    public function getAdjustment()
    {
        return $this->container['adjustment'];
    }

    /**
     * Sets adjustment
     *
     * @param string|null $adjustment 決算整理仕訳のみ: only, 決算整理仕訳以外: without(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setAdjustment($adjustment)
    {
        $allowedValues = $this->getAdjustmentAllowableValues();
        if (!is_null($adjustment) && !in_array($adjustment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'adjustment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['adjustment'] = $adjustment;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at 作成日時
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets balances
     *
     * @return \Freee\Accounting\Model\TrialBsTwoYearsResponseTrialBsTwoYearsBalances[]
     */
    public function getBalances()
    {
        return $this->container['balances'];
    }

    /**
     * Sets balances
     *
     * @param \Freee\Accounting\Model\TrialBsTwoYearsResponseTrialBsTwoYearsBalances[] $balances balances
     *
     * @return $this
     */
    public function setBalances($balances)
    {
        $this->container['balances'] = $balances;

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


