<?php
/**
 * TrialBsResponseTrialBs
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * freee API
 *
 * <h1 id=\"freee_api\">freee API</h1> <hr /> <h2 id=\"start_guide\">スタートガイド</h2>  <p>freee API開発がはじめての方は<a href=\"https://developer.freee.co.jp/getting-started\">freee API スタートガイド</a>を参照してください。</p>  <hr /> <h2 id=\"specification\">仕様</h2>  <pre><code>【重要】会計freee APIの新バージョンについて 2020年12月まで、2つのバージョンが利用できる状態です。古いものは2020年12月に利用不可となります。<br> 新しいAPIを利用するにはリクエストヘッダーに以下を指定します。 X-Api-Version: 2020-06-15<br> 指定がない場合は2020年12月に廃止予定のAPIを利用することとなります。<br> 【重要】APIのバージョン指定をせずに利用し続ける場合 2020年12月に新しいバージョンのAPIに自動的に切り替わります。 詳細は、<a href=\"https://developer.freee.co.jp/release-note/2948\" target=\"_blank\">リリースノート</a>をご覧ください。<br> 旧バージョンのAPIリファレンスを確認したい場合は、<a href=\"https://freee.github.io/freee-api-schema/\" target=\"_blank\">旧バージョンのAPIリファレンスページ</a>をご覧ください。 </code></pre>  <h3 id=\"api_endpoint\">APIエンドポイント</h3>  <p>https://api.freee.co.jp/ (httpsのみ)</p>  <h3 id=\"about_authorize\">認証について</h3> <p>OAuth2.0を利用します。詳細は<a href=\"https://developer.freee.co.jp/docs\" target=\"_blank\">ドキュメントの認証</a>パートを参照してください。</p>  <h3 id=\"data_format\">データフォーマット</h3>  <p>リクエスト、レスポンスともにJSON形式をサポートしていますが、詳細は、API毎の説明欄（application/jsonなど）を確認してください。</p>  <h3 id=\"compatibility\">後方互換性ありの変更</h3>  <p>freeeでは、APIを改善していくために以下のような変更は後方互換性ありとして通知なく変更を入れることがあります。アプリケーション実装者は以下を踏まえて開発を行ってください。</p>  <ul> <li>新しいAPIリソース・エンドポイントの追加</li> <li>既存のAPIに対して必須ではない新しいリクエストパラメータの追加</li> <li>既存のAPIレスポンスに対する新しいプロパティの追加</li> <li>既存のAPIレスポンスに対するプロパティの順番の入れ変え</li> <li>keyとなっているidやcodeの長さの変更（長くする）</li> </ul>  <h3 id=\"common_response_header\">共通レスポンスヘッダー</h3>  <p>すべてのAPIのレスポンスには以下のHTTPヘッダーが含まれます。</p>  <ul> <li> <p>X-Freee-Request-ID</p> <ul> <li>各リクエスト毎に発行されるID</li> </ul> </li> </ul>  <h3 id=\"common_error_response\">共通エラーレスポンス</h3>  <ul> <li> <p>ステータスコードはレスポンス内のJSONに含まれる他、HTTPヘッダにも含まれる</p> </li> <li> <p>一部のエラーレスポンスにはエラーコードが含まれます。<br>詳細は、<a href=\"https://developer.freee.co.jp/tips/faq/40x-checkpoint\">HTTPステータスコード400台エラー時のチェックポイント</a>を参照してください</p> </li> <p>type</p>  <ul> <li>status : HTTPステータスコードの説明</li>  <li>validation : エラーの詳細の説明（開発者向け）</li> </ul> </li> </ul>  <p>レスポンスの例</p>  <pre><code>  {     &quot;status_code&quot; : 400,     &quot;errors&quot; : [       {         &quot;type&quot; : &quot;status&quot;,         &quot;messages&quot; : [&quot;不正なリクエストです。&quot;]       },       {         &quot;type&quot; : &quot;validation&quot;,         &quot;messages&quot; : [&quot;Date は不正な日付フォーマットです。入力例：2013-01-01&quot;]       }     ]   }</code></pre>  </br>  <h3 id=\"api_rate_limit\">API使用制限</h3>    <p>freeeは一定期間に過度のアクセスを検知した場合、APIアクセスをコントロールする場合があります。</p>   <p>その際のhttp status codeは403となります。制限がかかってから10分程度が過ぎると再度使用することができるようになります。</p>  <h4 id=\"reports_api_endpoint\">/reportsエンドポイント</h4>  <p>freeeは/reportsエンドポイントに対して1秒間に10以上のアクセスを検知した場合、APIアクセスをコントロールする場合があります。その際のhttp status codeは429（too many requests）となります。</p>  <p>レスポンスボディのmetaプロパティに以下を含めます。</p>  <ul>   <li>設定されている上限値</li>   <li>上限に達するまでの使用可能回数</li>   <li>（上限値に達した場合）使用回数がリセットされる時刻</li> </ul>  <h3 id=\"plan_api_rate_limit\">プラン別のAPI Rate Limit</h3>   <table border=\"1\">     <tbody>       <tr>         <th style=\"padding: 10px\"><strong>会計freeeプラン名</strong></th>         <th style=\"padding: 10px\"><strong>事業所とアプリケーション毎に1日でのAPIコール数</strong></th>       </tr>       <tr>         <td style=\"padding: 10px\">エンタープライズ</td>         <td style=\"padding: 10px\">10,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">プロフェッショナル</td>         <td style=\"padding: 10px\">5,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">ベーシック</td>         <td style=\"padding: 10px\">3,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">ミニマム</td>         <td style=\"padding: 10px\">3,000</td>       </tr>       <tr>         <td style=\"padding: 10px\">上記以外</td>         <td style=\"padding: 10px\">3,000</td>       </tr>     </tbody>   </table>  <h3 id=\"webhook\">Webhookについて</h3>  <p>詳細は<a href=\"https://developer.freee.co.jp/docs/accounting/webhook\" target=\"_blank\">会計Webhook概要</a>を参照してください。</p>  <hr /> <h2 id=\"contact\">連絡先</h2>  <p>ご不明点、ご要望等は <a href=\"https://support.freee.co.jp/hc/ja/requests/new\">freee サポートデスクへのお問い合わせフォーム</a> からご連絡ください。</p> <hr />&copy; Since 2013 freee K.K.
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta2
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
 * TrialBsResponseTrialBs Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrialBsResponseTrialBs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trialBsResponse_trial_bs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_item_display_type' => 'string',
        'adjustment' => 'string',
        'balances' => '\Freee\Accounting\Model\TrialBsResponseTrialBsBalances[]',
        'breakdown_display_type' => 'string',
        'company_id' => 'int',
        'created_at' => 'string',
        'end_date' => 'string',
        'end_month' => 'int',
        'fiscal_year' => 'int',
        'item_id' => 'int',
        'partner_code' => 'string',
        'partner_id' => 'int',
        'start_date' => 'string',
        'start_month' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_item_display_type' => null,
        'adjustment' => null,
        'balances' => null,
        'breakdown_display_type' => null,
        'company_id' => null,
        'created_at' => null,
        'end_date' => null,
        'end_month' => null,
        'fiscal_year' => null,
        'item_id' => null,
        'partner_code' => null,
        'partner_id' => null,
        'start_date' => null,
        'start_month' => null
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
        'account_item_display_type' => 'account_item_display_type',
        'adjustment' => 'adjustment',
        'balances' => 'balances',
        'breakdown_display_type' => 'breakdown_display_type',
        'company_id' => 'company_id',
        'created_at' => 'created_at',
        'end_date' => 'end_date',
        'end_month' => 'end_month',
        'fiscal_year' => 'fiscal_year',
        'item_id' => 'item_id',
        'partner_code' => 'partner_code',
        'partner_id' => 'partner_id',
        'start_date' => 'start_date',
        'start_month' => 'start_month'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_item_display_type' => 'setAccountItemDisplayType',
        'adjustment' => 'setAdjustment',
        'balances' => 'setBalances',
        'breakdown_display_type' => 'setBreakdownDisplayType',
        'company_id' => 'setCompanyId',
        'created_at' => 'setCreatedAt',
        'end_date' => 'setEndDate',
        'end_month' => 'setEndMonth',
        'fiscal_year' => 'setFiscalYear',
        'item_id' => 'setItemId',
        'partner_code' => 'setPartnerCode',
        'partner_id' => 'setPartnerId',
        'start_date' => 'setStartDate',
        'start_month' => 'setStartMonth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_item_display_type' => 'getAccountItemDisplayType',
        'adjustment' => 'getAdjustment',
        'balances' => 'getBalances',
        'breakdown_display_type' => 'getBreakdownDisplayType',
        'company_id' => 'getCompanyId',
        'created_at' => 'getCreatedAt',
        'end_date' => 'getEndDate',
        'end_month' => 'getEndMonth',
        'fiscal_year' => 'getFiscalYear',
        'item_id' => 'getItemId',
        'partner_code' => 'getPartnerCode',
        'partner_id' => 'getPartnerId',
        'start_date' => 'getStartDate',
        'start_month' => 'getStartMonth'
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
    const ADJUSTMENT_ONLY = 'only';
    const ADJUSTMENT_WITHOUT = 'without';
    const BREAKDOWN_DISPLAY_TYPE_PARTNER = 'partner';
    const BREAKDOWN_DISPLAY_TYPE_ITEM = 'item';
    const BREAKDOWN_DISPLAY_TYPE_ACCOUNT_ITEM = 'account_item';
    

    
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
    public function getAdjustmentAllowableValues()
    {
        return [
            self::ADJUSTMENT_ONLY,
            self::ADJUSTMENT_WITHOUT,
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
        $this->container['account_item_display_type'] = isset($data['account_item_display_type']) ? $data['account_item_display_type'] : null;
        $this->container['adjustment'] = isset($data['adjustment']) ? $data['adjustment'] : null;
        $this->container['balances'] = isset($data['balances']) ? $data['balances'] : null;
        $this->container['breakdown_display_type'] = isset($data['breakdown_display_type']) ? $data['breakdown_display_type'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['end_month'] = isset($data['end_month']) ? $data['end_month'] : null;
        $this->container['fiscal_year'] = isset($data['fiscal_year']) ? $data['fiscal_year'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['partner_code'] = isset($data['partner_code']) ? $data['partner_code'] : null;
        $this->container['partner_id'] = isset($data['partner_id']) ? $data['partner_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['start_month'] = isset($data['start_month']) ? $data['start_month'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccountItemDisplayTypeAllowableValues();
        if (!is_null($this->container['account_item_display_type']) && !in_array($this->container['account_item_display_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'account_item_display_type', must be one of '%s'",
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
        $allowedValues = $this->getBreakdownDisplayTypeAllowableValues();
        if (!is_null($this->container['breakdown_display_type']) && !in_array($this->container['breakdown_display_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'breakdown_display_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['end_month']) && ($this->container['end_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'end_month', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['end_month']) && ($this->container['end_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'end_month', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['item_id']) && ($this->container['item_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'item_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['item_id']) && ($this->container['item_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'item_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['partner_id']) && ($this->container['partner_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'partner_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['start_month']) && ($this->container['start_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'start_month', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['start_month']) && ($this->container['start_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'start_month', must be bigger than or equal to 1.";
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
     * Gets balances
     *
     * @return \Freee\Accounting\Model\TrialBsResponseTrialBsBalances[]
     */
    public function getBalances()
    {
        return $this->container['balances'];
    }

    /**
     * Sets balances
     *
     * @param \Freee\Accounting\Model\TrialBsResponseTrialBsBalances[] $balances balances
     *
     * @return $this
     */
    public function setBalances($balances)
    {
        $this->container['balances'] = $balances;

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

        if (($company_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling TrialBsResponseTrialBs., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling TrialBsResponseTrialBs., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

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
     * @param int|null $end_month 発生月で絞込：終了会計月(1-12)(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setEndMonth($end_month)
    {

        if (!is_null($end_month) && ($end_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $end_month when calling TrialBsResponseTrialBs., must be smaller than or equal to 12.');
        }
        if (!is_null($end_month) && ($end_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $end_month when calling TrialBsResponseTrialBs., must be bigger than or equal to 1.');
        }

        $this->container['end_month'] = $end_month;

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

        if (!is_null($item_id) && ($item_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling TrialBsResponseTrialBs., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($item_id) && ($item_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $item_id when calling TrialBsResponseTrialBs., must be bigger than or equal to 1.');
        }

        $this->container['item_id'] = $item_id;

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

        if (!is_null($partner_id) && ($partner_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling TrialBsResponseTrialBs., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($partner_id) && ($partner_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $partner_id when calling TrialBsResponseTrialBs., must be bigger than or equal to 1.');
        }

        $this->container['partner_id'] = $partner_id;

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
     * @param int|null $start_month 発生月で絞込：開始会計月(1-12)(条件に指定した時のみ含まれる）
     *
     * @return $this
     */
    public function setStartMonth($start_month)
    {

        if (!is_null($start_month) && ($start_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $start_month when calling TrialBsResponseTrialBs., must be smaller than or equal to 12.');
        }
        if (!is_null($start_month) && ($start_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $start_month when calling TrialBsResponseTrialBs., must be bigger than or equal to 1.');
        }

        $this->container['start_month'] = $start_month;

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


