<?php
/**
 * JournalsResponseJournals
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
 * JournalsResponseJournals Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JournalsResponseJournals implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'journalsResponse_journals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_id' => 'int',
        'download_type' => 'string',
        'end_date' => 'string',
        'id' => 'int',
        'messages' => 'string[]',
        'start_date' => 'string',
        'status_url' => 'string',
        'visible_tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'company_id' => null,
        'download_type' => null,
        'end_date' => null,
        'id' => null,
        'messages' => null,
        'start_date' => null,
        'status_url' => null,
        'visible_tags' => null
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
        'download_type' => 'download_type',
        'end_date' => 'end_date',
        'id' => 'id',
        'messages' => 'messages',
        'start_date' => 'start_date',
        'status_url' => 'status_url',
        'visible_tags' => 'visible_tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_id' => 'setCompanyId',
        'download_type' => 'setDownloadType',
        'end_date' => 'setEndDate',
        'id' => 'setId',
        'messages' => 'setMessages',
        'start_date' => 'setStartDate',
        'status_url' => 'setStatusUrl',
        'visible_tags' => 'setVisibleTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_id' => 'getCompanyId',
        'download_type' => 'getDownloadType',
        'end_date' => 'getEndDate',
        'id' => 'getId',
        'messages' => 'getMessages',
        'start_date' => 'getStartDate',
        'status_url' => 'getStatusUrl',
        'visible_tags' => 'getVisibleTags'
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

    const DOWNLOAD_TYPE_CSV = 'csv';
    const DOWNLOAD_TYPE_GENERIC = 'generic';
    const DOWNLOAD_TYPE_PDF = 'pdf';
    const VISIBLE_TAGS_PARTNER = 'partner';
    const VISIBLE_TAGS_ITEM = 'item';
    const VISIBLE_TAGS_TAG = 'tag';
    const VISIBLE_TAGS_SECTION = 'section';
    const VISIBLE_TAGS_DESCRIPTION = 'description';
    const VISIBLE_TAGS_WALLET_TXN_DESCRIPTION = 'wallet_txn_description';
    const VISIBLE_TAGS_ALL = 'all';
    const VISIBLE_TAGS_SEGMENT_1_TAG = 'segment_1_tag';
    const VISIBLE_TAGS_SEGMENT_2_TAG = 'segment_2_tag';
    const VISIBLE_TAGS_SEGMENT_3_TAG = 'segment_3_tag';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDownloadTypeAllowableValues()
    {
        return [
            self::DOWNLOAD_TYPE_CSV,
            self::DOWNLOAD_TYPE_GENERIC,
            self::DOWNLOAD_TYPE_PDF,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisibleTagsAllowableValues()
    {
        return [
            self::VISIBLE_TAGS_PARTNER,
            self::VISIBLE_TAGS_ITEM,
            self::VISIBLE_TAGS_TAG,
            self::VISIBLE_TAGS_SECTION,
            self::VISIBLE_TAGS_DESCRIPTION,
            self::VISIBLE_TAGS_WALLET_TXN_DESCRIPTION,
            self::VISIBLE_TAGS_ALL,
            self::VISIBLE_TAGS_SEGMENT_1_TAG,
            self::VISIBLE_TAGS_SEGMENT_2_TAG,
            self::VISIBLE_TAGS_SEGMENT_3_TAG,
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
        $this->container['download_type'] = isset($data['download_type']) ? $data['download_type'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['status_url'] = isset($data['status_url']) ? $data['status_url'] : null;
        $this->container['visible_tags'] = isset($data['visible_tags']) ? $data['visible_tags'] : null;
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
        if (($this->container['company_id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getDownloadTypeAllowableValues();
        if (!is_null($this->container['download_type']) && !in_array($this->container['download_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'download_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
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

        if (($company_id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling JournalsResponseJournals., must be smaller than or equal to 2147483647.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling JournalsResponseJournals., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets download_type
     *
     * @return string|null
     */
    public function getDownloadType()
    {
        return $this->container['download_type'];
    }

    /**
     * Sets download_type
     *
     * @param string|null $download_type ダウンロード形式
     *
     * @return $this
     */
    public function setDownloadType($download_type)
    {
        $allowedValues = $this->getDownloadTypeAllowableValues();
        if (!is_null($download_type) && !in_array($download_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'download_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['download_type'] = $download_type;

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
     * @param string|null $end_date 取得終了日 (yyyy-mm-dd)
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
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
     * @param int $id 受け付けID
     *
     * @return $this
     */
    public function setId($id)
    {

        if (($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling JournalsResponseJournals., must be smaller than or equal to 2147483647.');
        }
        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling JournalsResponseJournals., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return string[]|null
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param string[]|null $messages messages
     *
     * @return $this
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

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
     * @param string|null $start_date 取得開始日 (yyyy-mm-dd)
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets status_url
     *
     * @return string|null
     */
    public function getStatusUrl()
    {
        return $this->container['status_url'];
    }

    /**
     * Sets status_url
     *
     * @param string|null $status_url ステータス確認用URL
     *
     * @return $this
     */
    public function setStatusUrl($status_url)
    {
        $this->container['status_url'] = $status_url;

        return $this;
    }

    /**
     * Gets visible_tags
     *
     * @return string[]|null
     */
    public function getVisibleTags()
    {
        return $this->container['visible_tags'];
    }

    /**
     * Sets visible_tags
     *
     * @param string[]|null $visible_tags visible_tags
     *
     * @return $this
     */
    public function setVisibleTags($visible_tags)
    {
        $allowedValues = $this->getVisibleTagsAllowableValues();
        if (!is_null($visible_tags) && array_diff($visible_tags, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'visible_tags', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visible_tags'] = $visible_tags;

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


