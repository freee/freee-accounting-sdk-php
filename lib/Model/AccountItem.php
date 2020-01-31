<?php
/**
 * AccountItem
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
 * AccountItem Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'accountItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'company_id' => 'int',
        'tax_code' => 'int',
        'account_category_id' => 'int',
        'shortcut' => 'string',
        'shortcut_num' => 'string',
        'corresponding_type_expense' => 'int',
        'corresponding_type_income' => 'int',
        'searchable' => 'int',
        'accumulated_dep_account_item_name' => 'string',
        'items' => '\Freee\Accounting\Model\AccountItemItems[]',
        'partners' => '\Freee\Accounting\Model\AccountItemPartners[]',
        'available' => 'bool',
        'walletable_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'company_id' => null,
        'tax_code' => null,
        'account_category_id' => null,
        'shortcut' => null,
        'shortcut_num' => null,
        'corresponding_type_expense' => null,
        'corresponding_type_income' => null,
        'searchable' => null,
        'accumulated_dep_account_item_name' => null,
        'items' => null,
        'partners' => null,
        'available' => null,
        'walletable_id' => null
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
        'company_id' => 'company_id',
        'tax_code' => 'tax_code',
        'account_category_id' => 'account_category_id',
        'shortcut' => 'shortcut',
        'shortcut_num' => 'shortcut_num',
        'corresponding_type_expense' => 'corresponding_type_expense',
        'corresponding_type_income' => 'corresponding_type_income',
        'searchable' => 'searchable',
        'accumulated_dep_account_item_name' => 'accumulated_dep_account_item_name',
        'items' => 'items',
        'partners' => 'partners',
        'available' => 'available',
        'walletable_id' => 'walletable_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'company_id' => 'setCompanyId',
        'tax_code' => 'setTaxCode',
        'account_category_id' => 'setAccountCategoryId',
        'shortcut' => 'setShortcut',
        'shortcut_num' => 'setShortcutNum',
        'corresponding_type_expense' => 'setCorrespondingTypeExpense',
        'corresponding_type_income' => 'setCorrespondingTypeIncome',
        'searchable' => 'setSearchable',
        'accumulated_dep_account_item_name' => 'setAccumulatedDepAccountItemName',
        'items' => 'setItems',
        'partners' => 'setPartners',
        'available' => 'setAvailable',
        'walletable_id' => 'setWalletableId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'company_id' => 'getCompanyId',
        'tax_code' => 'getTaxCode',
        'account_category_id' => 'getAccountCategoryId',
        'shortcut' => 'getShortcut',
        'shortcut_num' => 'getShortcutNum',
        'corresponding_type_expense' => 'getCorrespondingTypeExpense',
        'corresponding_type_income' => 'getCorrespondingTypeIncome',
        'searchable' => 'getSearchable',
        'accumulated_dep_account_item_name' => 'getAccumulatedDepAccountItemName',
        'items' => 'getItems',
        'partners' => 'getPartners',
        'available' => 'getAvailable',
        'walletable_id' => 'getWalletableId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['company_id'] = isset($data['company_id']) ? $data['company_id'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['account_category_id'] = isset($data['account_category_id']) ? $data['account_category_id'] : null;
        $this->container['shortcut'] = isset($data['shortcut']) ? $data['shortcut'] : null;
        $this->container['shortcut_num'] = isset($data['shortcut_num']) ? $data['shortcut_num'] : null;
        $this->container['corresponding_type_expense'] = isset($data['corresponding_type_expense']) ? $data['corresponding_type_expense'] : null;
        $this->container['corresponding_type_income'] = isset($data['corresponding_type_income']) ? $data['corresponding_type_income'] : null;
        $this->container['searchable'] = isset($data['searchable']) ? $data['searchable'] : null;
        $this->container['accumulated_dep_account_item_name'] = isset($data['accumulated_dep_account_item_name']) ? $data['accumulated_dep_account_item_name'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['partners'] = isset($data['partners']) ? $data['partners'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['walletable_id'] = isset($data['walletable_id']) ? $data['walletable_id'] : null;
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
        if ($this->container['company_id'] === null) {
            $invalidProperties[] = "'company_id' can't be null";
        }
        if (($this->container['company_id'] > 999999999999)) {
            $invalidProperties[] = "invalid value for 'company_id', must be smaller than or equal to 999999999999.";
        }

        if (($this->container['company_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'company_id', must be bigger than or equal to 1.";
        }

        if ($this->container['tax_code'] === null) {
            $invalidProperties[] = "'tax_code' can't be null";
        }
        if ($this->container['account_category_id'] === null) {
            $invalidProperties[] = "'account_category_id' can't be null";
        }
        if ($this->container['corresponding_type_expense'] === null) {
            $invalidProperties[] = "'corresponding_type_expense' can't be null";
        }
        if ($this->container['corresponding_type_income'] === null) {
            $invalidProperties[] = "'corresponding_type_income' can't be null";
        }
        if ($this->container['searchable'] === null) {
            $invalidProperties[] = "'searchable' can't be null";
        }
        if ($this->container['available'] === null) {
            $invalidProperties[] = "'available' can't be null";
        }
        if ($this->container['walletable_id'] === null) {
            $invalidProperties[] = "'walletable_id' can't be null";
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
     * @param int $id 勘定科目ID
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
     * @param string $name 勘定科目名 (30文字以内)
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
            throw new \InvalidArgumentException('invalid value for $company_id when calling AccountItem., must be smaller than or equal to 999999999999.');
        }
        if (($company_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $company_id when calling AccountItem., must be bigger than or equal to 1.');
        }

        $this->container['company_id'] = $company_id;

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
     * Gets account_category_id
     *
     * @return int
     */
    public function getAccountCategoryId()
    {
        return $this->container['account_category_id'];
    }

    /**
     * Sets account_category_id
     *
     * @param int $account_category_id 勘定科目のカテゴリーコード
     *
     * @return $this
     */
    public function setAccountCategoryId($account_category_id)
    {
        $this->container['account_category_id'] = $account_category_id;

        return $this;
    }

    /**
     * Gets shortcut
     *
     * @return string|null
     */
    public function getShortcut()
    {
        return $this->container['shortcut'];
    }

    /**
     * Sets shortcut
     *
     * @param string|null $shortcut ショートカット1 (20文字以内)
     *
     * @return $this
     */
    public function setShortcut($shortcut)
    {
        $this->container['shortcut'] = $shortcut;

        return $this;
    }

    /**
     * Gets shortcut_num
     *
     * @return string|null
     */
    public function getShortcutNum()
    {
        return $this->container['shortcut_num'];
    }

    /**
     * Sets shortcut_num
     *
     * @param string|null $shortcut_num ショートカット2(勘定科目コード) (20文字以内)
     *
     * @return $this
     */
    public function setShortcutNum($shortcut_num)
    {
        $this->container['shortcut_num'] = $shortcut_num;

        return $this;
    }

    /**
     * Gets corresponding_type_expense
     *
     * @return int
     */
    public function getCorrespondingTypeExpense()
    {
        return $this->container['corresponding_type_expense'];
    }

    /**
     * Sets corresponding_type_expense
     *
     * @param int $corresponding_type_expense 支出取引相手勘定科目ID
     *
     * @return $this
     */
    public function setCorrespondingTypeExpense($corresponding_type_expense)
    {
        $this->container['corresponding_type_expense'] = $corresponding_type_expense;

        return $this;
    }

    /**
     * Gets corresponding_type_income
     *
     * @return int
     */
    public function getCorrespondingTypeIncome()
    {
        return $this->container['corresponding_type_income'];
    }

    /**
     * Sets corresponding_type_income
     *
     * @param int $corresponding_type_income 収入取引相手勘定科目ID
     *
     * @return $this
     */
    public function setCorrespondingTypeIncome($corresponding_type_income)
    {
        $this->container['corresponding_type_income'] = $corresponding_type_income;

        return $this;
    }

    /**
     * Gets searchable
     *
     * @return int
     */
    public function getSearchable()
    {
        return $this->container['searchable'];
    }

    /**
     * Sets searchable
     *
     * @param int $searchable 検索可能:2, 検索不可：3
     *
     * @return $this
     */
    public function setSearchable($searchable)
    {
        $this->container['searchable'] = $searchable;

        return $this;
    }

    /**
     * Gets accumulated_dep_account_item_name
     *
     * @return string|null
     */
    public function getAccumulatedDepAccountItemName()
    {
        return $this->container['accumulated_dep_account_item_name'];
    }

    /**
     * Sets accumulated_dep_account_item_name
     *
     * @param string|null $accumulated_dep_account_item_name 減価償却累計額勘定科目
     *
     * @return $this
     */
    public function setAccumulatedDepAccountItemName($accumulated_dep_account_item_name)
    {
        $this->container['accumulated_dep_account_item_name'] = $accumulated_dep_account_item_name;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Freee\Accounting\Model\AccountItemItems[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Freee\Accounting\Model\AccountItemItems[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets partners
     *
     * @return \Freee\Accounting\Model\AccountItemPartners[]|null
     */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
     * Sets partners
     *
     * @param \Freee\Accounting\Model\AccountItemPartners[]|null $partners partners
     *
     * @return $this
     */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;

        return $this;
    }

    /**
     * Gets available
     *
     * @return bool
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param bool $available 勘定科目の使用設定（true: 使用する、false: 使用しない）
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets walletable_id
     *
     * @return int
     */
    public function getWalletableId()
    {
        return $this->container['walletable_id'];
    }

    /**
     * Sets walletable_id
     *
     * @param int $walletable_id 口座ID
     *
     * @return $this
     */
    public function setWalletableId($walletable_id)
    {
        $this->container['walletable_id'] = $walletable_id;

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


