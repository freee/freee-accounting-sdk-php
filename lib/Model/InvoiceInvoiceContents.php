<?php
/**
 * InvoiceInvoiceContents
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
 * InvoiceInvoiceContents Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InvoiceInvoiceContents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'invoice_invoice_contents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'order' => 'int',
        'type' => 'string',
        'qty' => 'float',
        'unit' => 'string',
        'unit_price' => 'float',
        'amount' => 'int',
        'vat' => 'int',
        'reduced_vat' => 'bool',
        'description' => 'string',
        'account_item_id' => 'int',
        'account_item_name' => 'string',
        'tax_code' => 'int',
        'item_id' => 'int',
        'item_name' => 'string',
        'section_id' => 'int',
        'section_name' => 'string',
        'tag_ids' => 'int[]',
        'tag_names' => 'string[]',
        'segment_1_tag_id' => 'int',
        'segment_1_tag_name' => 'string',
        'segment_2_tag_id' => 'int',
        'segment_2_tag_name' => 'string',
        'segment_3_tag_id' => 'int',
        'segment_3_tag_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'order' => null,
        'type' => null,
        'qty' => null,
        'unit' => null,
        'unit_price' => null,
        'amount' => null,
        'vat' => null,
        'reduced_vat' => null,
        'description' => null,
        'account_item_id' => null,
        'account_item_name' => null,
        'tax_code' => null,
        'item_id' => null,
        'item_name' => null,
        'section_id' => null,
        'section_name' => null,
        'tag_ids' => null,
        'tag_names' => null,
        'segment_1_tag_id' => null,
        'segment_1_tag_name' => null,
        'segment_2_tag_id' => null,
        'segment_2_tag_name' => null,
        'segment_3_tag_id' => null,
        'segment_3_tag_name' => null
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
        'order' => 'order',
        'type' => 'type',
        'qty' => 'qty',
        'unit' => 'unit',
        'unit_price' => 'unit_price',
        'amount' => 'amount',
        'vat' => 'vat',
        'reduced_vat' => 'reduced_vat',
        'description' => 'description',
        'account_item_id' => 'account_item_id',
        'account_item_name' => 'account_item_name',
        'tax_code' => 'tax_code',
        'item_id' => 'item_id',
        'item_name' => 'item_name',
        'section_id' => 'section_id',
        'section_name' => 'section_name',
        'tag_ids' => 'tag_ids',
        'tag_names' => 'tag_names',
        'segment_1_tag_id' => 'segment_1_tag_id',
        'segment_1_tag_name' => 'segment_1_tag_name',
        'segment_2_tag_id' => 'segment_2_tag_id',
        'segment_2_tag_name' => 'segment_2_tag_name',
        'segment_3_tag_id' => 'segment_3_tag_id',
        'segment_3_tag_name' => 'segment_3_tag_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'order' => 'setOrder',
        'type' => 'setType',
        'qty' => 'setQty',
        'unit' => 'setUnit',
        'unit_price' => 'setUnitPrice',
        'amount' => 'setAmount',
        'vat' => 'setVat',
        'reduced_vat' => 'setReducedVat',
        'description' => 'setDescription',
        'account_item_id' => 'setAccountItemId',
        'account_item_name' => 'setAccountItemName',
        'tax_code' => 'setTaxCode',
        'item_id' => 'setItemId',
        'item_name' => 'setItemName',
        'section_id' => 'setSectionId',
        'section_name' => 'setSectionName',
        'tag_ids' => 'setTagIds',
        'tag_names' => 'setTagNames',
        'segment_1_tag_id' => 'setSegment1TagId',
        'segment_1_tag_name' => 'setSegment1TagName',
        'segment_2_tag_id' => 'setSegment2TagId',
        'segment_2_tag_name' => 'setSegment2TagName',
        'segment_3_tag_id' => 'setSegment3TagId',
        'segment_3_tag_name' => 'setSegment3TagName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'order' => 'getOrder',
        'type' => 'getType',
        'qty' => 'getQty',
        'unit' => 'getUnit',
        'unit_price' => 'getUnitPrice',
        'amount' => 'getAmount',
        'vat' => 'getVat',
        'reduced_vat' => 'getReducedVat',
        'description' => 'getDescription',
        'account_item_id' => 'getAccountItemId',
        'account_item_name' => 'getAccountItemName',
        'tax_code' => 'getTaxCode',
        'item_id' => 'getItemId',
        'item_name' => 'getItemName',
        'section_id' => 'getSectionId',
        'section_name' => 'getSectionName',
        'tag_ids' => 'getTagIds',
        'tag_names' => 'getTagNames',
        'segment_1_tag_id' => 'getSegment1TagId',
        'segment_1_tag_name' => 'getSegment1TagName',
        'segment_2_tag_id' => 'getSegment2TagId',
        'segment_2_tag_name' => 'getSegment2TagName',
        'segment_3_tag_id' => 'getSegment3TagId',
        'segment_3_tag_name' => 'getSegment3TagName'
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

    const TYPE_NORMAL = 'normal';
    const TYPE_DISCOUNT = 'discount';
    const TYPE_TEXT = 'text';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
            self::TYPE_DISCOUNT,
            self::TYPE_TEXT,
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
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['reduced_vat'] = isset($data['reduced_vat']) ? $data['reduced_vat'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['account_item_id'] = isset($data['account_item_id']) ? $data['account_item_id'] : null;
        $this->container['account_item_name'] = isset($data['account_item_name']) ? $data['account_item_name'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_name'] = isset($data['item_name']) ? $data['item_name'] : null;
        $this->container['section_id'] = isset($data['section_id']) ? $data['section_id'] : null;
        $this->container['section_name'] = isset($data['section_name']) ? $data['section_name'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['tag_names'] = isset($data['tag_names']) ? $data['tag_names'] : null;
        $this->container['segment_1_tag_id'] = isset($data['segment_1_tag_id']) ? $data['segment_1_tag_id'] : null;
        $this->container['segment_1_tag_name'] = isset($data['segment_1_tag_name']) ? $data['segment_1_tag_name'] : null;
        $this->container['segment_2_tag_id'] = isset($data['segment_2_tag_id']) ? $data['segment_2_tag_id'] : null;
        $this->container['segment_2_tag_name'] = isset($data['segment_2_tag_name']) ? $data['segment_2_tag_name'] : null;
        $this->container['segment_3_tag_id'] = isset($data['segment_3_tag_id']) ? $data['segment_3_tag_id'] : null;
        $this->container['segment_3_tag_name'] = isset($data['segment_3_tag_name']) ? $data['segment_3_tag_name'] : null;
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
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['qty'] === null) {
            $invalidProperties[] = "'qty' can't be null";
        }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
        if ($this->container['unit_price'] === null) {
            $invalidProperties[] = "'unit_price' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['vat'] === null) {
            $invalidProperties[] = "'vat' can't be null";
        }
        if ($this->container['reduced_vat'] === null) {
            $invalidProperties[] = "'reduced_vat' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['account_item_id'] === null) {
            $invalidProperties[] = "'account_item_id' can't be null";
        }
        if ($this->container['account_item_name'] === null) {
            $invalidProperties[] = "'account_item_name' can't be null";
        }
        if ($this->container['tax_code'] === null) {
            $invalidProperties[] = "'tax_code' can't be null";
        }
        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if ($this->container['item_name'] === null) {
            $invalidProperties[] = "'item_name' can't be null";
        }
        if ($this->container['section_id'] === null) {
            $invalidProperties[] = "'section_id' can't be null";
        }
        if ($this->container['section_name'] === null) {
            $invalidProperties[] = "'section_name' can't be null";
        }
        if ($this->container['tag_ids'] === null) {
            $invalidProperties[] = "'tag_ids' can't be null";
        }
        if ($this->container['tag_names'] === null) {
            $invalidProperties[] = "'tag_names' can't be null";
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
     * @param int $id 請求内容ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order 順序
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type 行の種類
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return float
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param float $qty 数量
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit 単位
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float $unit_price 単価
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount 金額
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return int
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param int $vat 消費税額
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets reduced_vat
     *
     * @return bool
     */
    public function getReducedVat()
    {
        return $this->container['reduced_vat'];
    }

    /**
     * Sets reduced_vat
     *
     * @param bool $reduced_vat 軽減税率税区分（true: 対象、false: 対象外）
     *
     * @return $this
     */
    public function setReducedVat($reduced_vat)
    {
        $this->container['reduced_vat'] = $reduced_vat;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description 備考
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets account_item_id
     *
     * @return int
     */
    public function getAccountItemId()
    {
        return $this->container['account_item_id'];
    }

    /**
     * Sets account_item_id
     *
     * @param int $account_item_id 勘定科目ID
     *
     * @return $this
     */
    public function setAccountItemId($account_item_id)
    {
        $this->container['account_item_id'] = $account_item_id;

        return $this;
    }

    /**
     * Gets account_item_name
     *
     * @return string
     */
    public function getAccountItemName()
    {
        return $this->container['account_item_name'];
    }

    /**
     * Sets account_item_name
     *
     * @param string $account_item_name 勘定科目名
     *
     * @return $this
     */
    public function setAccountItemName($account_item_name)
    {
        $this->container['account_item_name'] = $account_item_name;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return int
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param int $tax_code 税区分コード
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id 品目ID
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_name
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     *
     * @param string $item_name 品目
     *
     * @return $this
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets section_id
     *
     * @return int
     */
    public function getSectionId()
    {
        return $this->container['section_id'];
    }

    /**
     * Sets section_id
     *
     * @param int $section_id 部門ID
     *
     * @return $this
     */
    public function setSectionId($section_id)
    {
        $this->container['section_id'] = $section_id;

        return $this;
    }

    /**
     * Gets section_name
     *
     * @return string
     */
    public function getSectionName()
    {
        return $this->container['section_name'];
    }

    /**
     * Sets section_name
     *
     * @param string $section_name 部門
     *
     * @return $this
     */
    public function setSectionName($section_name)
    {
        $this->container['section_name'] = $section_name;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return int[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param int[] $tag_ids tag_ids
     *
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets tag_names
     *
     * @return string[]
     */
    public function getTagNames()
    {
        return $this->container['tag_names'];
    }

    /**
     * Sets tag_names
     *
     * @param string[] $tag_names tag_names
     *
     * @return $this
     */
    public function setTagNames($tag_names)
    {
        $this->container['tag_names'] = $tag_names;

        return $this;
    }

    /**
     * Gets segment_1_tag_id
     *
     * @return int|null
     */
    public function getSegment1TagId()
    {
        return $this->container['segment_1_tag_id'];
    }

    /**
     * Sets segment_1_tag_id
     *
     * @param int|null $segment_1_tag_id セグメント１ID
     *
     * @return $this
     */
    public function setSegment1TagId($segment_1_tag_id)
    {
        $this->container['segment_1_tag_id'] = $segment_1_tag_id;

        return $this;
    }

    /**
     * Gets segment_1_tag_name
     *
     * @return string|null
     */
    public function getSegment1TagName()
    {
        return $this->container['segment_1_tag_name'];
    }

    /**
     * Sets segment_1_tag_name
     *
     * @param string|null $segment_1_tag_name セグメント１ID
     *
     * @return $this
     */
    public function setSegment1TagName($segment_1_tag_name)
    {
        $this->container['segment_1_tag_name'] = $segment_1_tag_name;

        return $this;
    }

    /**
     * Gets segment_2_tag_id
     *
     * @return int|null
     */
    public function getSegment2TagId()
    {
        return $this->container['segment_2_tag_id'];
    }

    /**
     * Sets segment_2_tag_id
     *
     * @param int|null $segment_2_tag_id セグメント２ID
     *
     * @return $this
     */
    public function setSegment2TagId($segment_2_tag_id)
    {
        $this->container['segment_2_tag_id'] = $segment_2_tag_id;

        return $this;
    }

    /**
     * Gets segment_2_tag_name
     *
     * @return string|null
     */
    public function getSegment2TagName()
    {
        return $this->container['segment_2_tag_name'];
    }

    /**
     * Sets segment_2_tag_name
     *
     * @param string|null $segment_2_tag_name セグメント２
     *
     * @return $this
     */
    public function setSegment2TagName($segment_2_tag_name)
    {
        $this->container['segment_2_tag_name'] = $segment_2_tag_name;

        return $this;
    }

    /**
     * Gets segment_3_tag_id
     *
     * @return int|null
     */
    public function getSegment3TagId()
    {
        return $this->container['segment_3_tag_id'];
    }

    /**
     * Sets segment_3_tag_id
     *
     * @param int|null $segment_3_tag_id セグメント３ID
     *
     * @return $this
     */
    public function setSegment3TagId($segment_3_tag_id)
    {
        $this->container['segment_3_tag_id'] = $segment_3_tag_id;

        return $this;
    }

    /**
     * Gets segment_3_tag_name
     *
     * @return string|null
     */
    public function getSegment3TagName()
    {
        return $this->container['segment_3_tag_name'];
    }

    /**
     * Sets segment_3_tag_name
     *
     * @param string|null $segment_3_tag_name セグメント３
     *
     * @return $this
     */
    public function setSegment3TagName($segment_3_tag_name)
    {
        $this->container['segment_3_tag_name'] = $segment_3_tag_name;

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


