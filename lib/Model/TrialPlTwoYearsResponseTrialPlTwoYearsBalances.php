<?php
/**
 * TrialPlTwoYearsResponseTrialPlTwoYearsBalances
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
 * TrialPlTwoYearsResponseTrialPlTwoYearsBalances Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrialPlTwoYearsResponseTrialPlTwoYearsBalances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trialPlTwoYearsResponse_trial_pl_two_years_balances';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_item_id' => 'int',
        'account_item_name' => 'string',
        'partners' => '\Freee\Accounting\Model\TrialBsTwoYearsResponseTrialBsTwoYearsPartners[]',
        'items' => '\Freee\Accounting\Model\TrialBsTwoYearsResponseTrialBsTwoYearsItems[]',
        'sections' => '\Freee\Accounting\Model\TrialPlTwoYearsResponseTrialPlTwoYearsSections[]',
        'account_category_id' => 'int',
        'account_category_name' => 'string',
        'total_line' => 'bool',
        'hierarchy_level' => 'int',
        'parent_account_category_id' => 'int',
        'parent_account_category_name' => 'string',
        'last_year_closing_balance' => 'int',
        'closing_balance' => 'int',
        'year_on_year' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account_item_id' => null,
        'account_item_name' => null,
        'partners' => null,
        'items' => null,
        'sections' => null,
        'account_category_id' => null,
        'account_category_name' => null,
        'total_line' => null,
        'hierarchy_level' => null,
        'parent_account_category_id' => null,
        'parent_account_category_name' => null,
        'last_year_closing_balance' => null,
        'closing_balance' => null,
        'year_on_year' => null
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
        'account_item_id' => 'account_item_id',
        'account_item_name' => 'account_item_name',
        'partners' => 'partners',
        'items' => 'items',
        'sections' => 'sections',
        'account_category_id' => 'account_category_id',
        'account_category_name' => 'account_category_name',
        'total_line' => 'total_line',
        'hierarchy_level' => 'hierarchy_level',
        'parent_account_category_id' => 'parent_account_category_id',
        'parent_account_category_name' => 'parent_account_category_name',
        'last_year_closing_balance' => 'last_year_closing_balance',
        'closing_balance' => 'closing_balance',
        'year_on_year' => 'year_on_year'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_item_id' => 'setAccountItemId',
        'account_item_name' => 'setAccountItemName',
        'partners' => 'setPartners',
        'items' => 'setItems',
        'sections' => 'setSections',
        'account_category_id' => 'setAccountCategoryId',
        'account_category_name' => 'setAccountCategoryName',
        'total_line' => 'setTotalLine',
        'hierarchy_level' => 'setHierarchyLevel',
        'parent_account_category_id' => 'setParentAccountCategoryId',
        'parent_account_category_name' => 'setParentAccountCategoryName',
        'last_year_closing_balance' => 'setLastYearClosingBalance',
        'closing_balance' => 'setClosingBalance',
        'year_on_year' => 'setYearOnYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_item_id' => 'getAccountItemId',
        'account_item_name' => 'getAccountItemName',
        'partners' => 'getPartners',
        'items' => 'getItems',
        'sections' => 'getSections',
        'account_category_id' => 'getAccountCategoryId',
        'account_category_name' => 'getAccountCategoryName',
        'total_line' => 'getTotalLine',
        'hierarchy_level' => 'getHierarchyLevel',
        'parent_account_category_id' => 'getParentAccountCategoryId',
        'parent_account_category_name' => 'getParentAccountCategoryName',
        'last_year_closing_balance' => 'getLastYearClosingBalance',
        'closing_balance' => 'getClosingBalance',
        'year_on_year' => 'getYearOnYear'
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
        $this->container['account_item_id'] = isset($data['account_item_id']) ? $data['account_item_id'] : null;
        $this->container['account_item_name'] = isset($data['account_item_name']) ? $data['account_item_name'] : null;
        $this->container['partners'] = isset($data['partners']) ? $data['partners'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['sections'] = isset($data['sections']) ? $data['sections'] : null;
        $this->container['account_category_id'] = isset($data['account_category_id']) ? $data['account_category_id'] : null;
        $this->container['account_category_name'] = isset($data['account_category_name']) ? $data['account_category_name'] : null;
        $this->container['total_line'] = isset($data['total_line']) ? $data['total_line'] : null;
        $this->container['hierarchy_level'] = isset($data['hierarchy_level']) ? $data['hierarchy_level'] : null;
        $this->container['parent_account_category_id'] = isset($data['parent_account_category_id']) ? $data['parent_account_category_id'] : null;
        $this->container['parent_account_category_name'] = isset($data['parent_account_category_name']) ? $data['parent_account_category_name'] : null;
        $this->container['last_year_closing_balance'] = isset($data['last_year_closing_balance']) ? $data['last_year_closing_balance'] : null;
        $this->container['closing_balance'] = isset($data['closing_balance']) ? $data['closing_balance'] : null;
        $this->container['year_on_year'] = isset($data['year_on_year']) ? $data['year_on_year'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets account_item_id
     *
     * @return int|null
     */
    public function getAccountItemId()
    {
        return $this->container['account_item_id'];
    }

    /**
     * Sets account_item_id
     *
     * @param int|null $account_item_id 勘定科目ID(勘定科目の時のみ含まれる)
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
     * @return string|null
     */
    public function getAccountItemName()
    {
        return $this->container['account_item_name'];
    }

    /**
     * Sets account_item_name
     *
     * @param string|null $account_item_name 勘定科目名(勘定科目の時のみ含まれる)
     *
     * @return $this
     */
    public function setAccountItemName($account_item_name)
    {
        $this->container['account_item_name'] = $account_item_name;

        return $this;
    }

    /**
     * Gets partners
     *
     * @return \Freee\Accounting\Model\TrialBsTwoYearsResponseTrialBsTwoYearsPartners[]|null
     */
    public function getPartners()
    {
        return $this->container['partners'];
    }

    /**
     * Sets partners
     *
     * @param \Freee\Accounting\Model\TrialBsTwoYearsResponseTrialBsTwoYearsPartners[]|null $partners breakdown_display_type:partner, account_item_display_type:account_item指定時のみ含まれる
     *
     * @return $this
     */
    public function setPartners($partners)
    {
        $this->container['partners'] = $partners;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Freee\Accounting\Model\TrialBsTwoYearsResponseTrialBsTwoYearsItems[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Freee\Accounting\Model\TrialBsTwoYearsResponseTrialBsTwoYearsItems[]|null $items breakdown_display_type:item, account_item_display_type:account_item指定時のみ含まれる
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets sections
     *
     * @return \Freee\Accounting\Model\TrialPlTwoYearsResponseTrialPlTwoYearsSections[]|null
     */
    public function getSections()
    {
        return $this->container['sections'];
    }

    /**
     * Sets sections
     *
     * @param \Freee\Accounting\Model\TrialPlTwoYearsResponseTrialPlTwoYearsSections[]|null $sections breakdown_display_type:section, account_item_display_type:account_item指定時のみ含まれる
     *
     * @return $this
     */
    public function setSections($sections)
    {
        $this->container['sections'] = $sections;

        return $this;
    }

    /**
     * Gets account_category_id
     *
     * @return int|null
     */
    public function getAccountCategoryId()
    {
        return $this->container['account_category_id'];
    }

    /**
     * Sets account_category_id
     *
     * @param int|null $account_category_id 勘定科目カテゴリーID(勘定科目カテゴリーの時のみ含まれる)
     *
     * @return $this
     */
    public function setAccountCategoryId($account_category_id)
    {
        $this->container['account_category_id'] = $account_category_id;

        return $this;
    }

    /**
     * Gets account_category_name
     *
     * @return string|null
     */
    public function getAccountCategoryName()
    {
        return $this->container['account_category_name'];
    }

    /**
     * Sets account_category_name
     *
     * @param string|null $account_category_name 勘定科目カテゴリー名(勘定科目カテゴリーの時のみ含まれる)
     *
     * @return $this
     */
    public function setAccountCategoryName($account_category_name)
    {
        $this->container['account_category_name'] = $account_category_name;

        return $this;
    }

    /**
     * Gets total_line
     *
     * @return bool|null
     */
    public function getTotalLine()
    {
        return $this->container['total_line'];
    }

    /**
     * Sets total_line
     *
     * @param bool|null $total_line 合計行(勘定科目カテゴリー名の時のみ含まれる)
     *
     * @return $this
     */
    public function setTotalLine($total_line)
    {
        $this->container['total_line'] = $total_line;

        return $this;
    }

    /**
     * Gets hierarchy_level
     *
     * @return int|null
     */
    public function getHierarchyLevel()
    {
        return $this->container['hierarchy_level'];
    }

    /**
     * Sets hierarchy_level
     *
     * @param int|null $hierarchy_level 階層レベル
     *
     * @return $this
     */
    public function setHierarchyLevel($hierarchy_level)
    {
        $this->container['hierarchy_level'] = $hierarchy_level;

        return $this;
    }

    /**
     * Gets parent_account_category_id
     *
     * @return int|null
     */
    public function getParentAccountCategoryId()
    {
        return $this->container['parent_account_category_id'];
    }

    /**
     * Sets parent_account_category_id
     *
     * @param int|null $parent_account_category_id 上位科目カテゴリーID(上層が存在する場合含まれる)
     *
     * @return $this
     */
    public function setParentAccountCategoryId($parent_account_category_id)
    {
        $this->container['parent_account_category_id'] = $parent_account_category_id;

        return $this;
    }

    /**
     * Gets parent_account_category_name
     *
     * @return string|null
     */
    public function getParentAccountCategoryName()
    {
        return $this->container['parent_account_category_name'];
    }

    /**
     * Sets parent_account_category_name
     *
     * @param string|null $parent_account_category_name 上位勘定科目カテゴリー名(上層が存在する場合含まれる)
     *
     * @return $this
     */
    public function setParentAccountCategoryName($parent_account_category_name)
    {
        $this->container['parent_account_category_name'] = $parent_account_category_name;

        return $this;
    }

    /**
     * Gets last_year_closing_balance
     *
     * @return int|null
     */
    public function getLastYearClosingBalance()
    {
        return $this->container['last_year_closing_balance'];
    }

    /**
     * Sets last_year_closing_balance
     *
     * @param int|null $last_year_closing_balance 前年度期末残高
     *
     * @return $this
     */
    public function setLastYearClosingBalance($last_year_closing_balance)
    {
        $this->container['last_year_closing_balance'] = $last_year_closing_balance;

        return $this;
    }

    /**
     * Gets closing_balance
     *
     * @return int|null
     */
    public function getClosingBalance()
    {
        return $this->container['closing_balance'];
    }

    /**
     * Sets closing_balance
     *
     * @param int|null $closing_balance 期末残高
     *
     * @return $this
     */
    public function setClosingBalance($closing_balance)
    {
        $this->container['closing_balance'] = $closing_balance;

        return $this;
    }

    /**
     * Gets year_on_year
     *
     * @return float|null
     */
    public function getYearOnYear()
    {
        return $this->container['year_on_year'];
    }

    /**
     * Sets year_on_year
     *
     * @param float|null $year_on_year 前年比
     *
     * @return $this
     */
    public function setYearOnYear($year_on_year)
    {
        $this->container['year_on_year'] = $year_on_year;

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


