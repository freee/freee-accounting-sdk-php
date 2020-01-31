<?php
/**
 * TrialBalanceApi
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

namespace Freee\Accounting\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Freee\Accounting\ApiException;
use Freee\Accounting\Configuration;
use Freee\Accounting\HeaderSelector;
use Freee\Accounting\ObjectSerializer;

/**
 * TrialBalanceApi Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrialBalanceApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getTrialBs
     *
     * 貸借対照表の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\TrialBsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError
     */
    public function getTrialBs($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        list($response) = $this->getTrialBsWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);
        return $response;
    }

    /**
     * Operation getTrialBsWithHttpInfo
     *
     * 貸借対照表の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\TrialBsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrialBsWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        $request = $this->getTrialBsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Freee\Accounting\Model\TrialBsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\TrialBsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Freee\Accounting\Model\BadRequestError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\BadRequestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Freee\Accounting\Model\UnauthorizedError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\UnauthorizedError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Freee\Accounting\Model\InternalServerError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Freee\Accounting\Model\TrialBsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\TrialBsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\BadRequestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\UnauthorizedError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrialBsAsync
     *
     * 貸借対照表の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialBsAsync($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        return $this->getTrialBsAsyncWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrialBsAsyncWithHttpInfo
     *
     * 貸借対照表の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialBsAsyncWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        $returnType = '\Freee\Accounting\Model\TrialBsResponse';
        $request = $this->getTrialBsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTrialBs'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrialBsRequest($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getTrialBs'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialBs, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialBs, must be bigger than or equal to 1.');
        }

        if ($start_month !== null && $start_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialBs, must be smaller than or equal to 12.');
        }
        if ($start_month !== null && $start_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialBs, must be bigger than or equal to 1.');
        }

        if ($end_month !== null && $end_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialBs, must be smaller than or equal to 12.');
        }
        if ($end_month !== null && $end_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialBs, must be bigger than or equal to 1.');
        }

        if ($partner_id !== null && $partner_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling TrialBalanceApi.getTrialBs, must be bigger than or equal to 0.');
        }

        if ($item_id !== null && $item_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$item_id" when calling TrialBalanceApi.getTrialBs, must be bigger than or equal to 0.');
        }


        $resourcePath = '/api/1/reports/trial_bs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['company_id'] = ObjectSerializer::toQueryValue($company_id);
        }
        // query params
        if ($fiscal_year !== null) {
            $queryParams['fiscal_year'] = ObjectSerializer::toQueryValue($fiscal_year);
        }
        // query params
        if ($start_month !== null) {
            $queryParams['start_month'] = ObjectSerializer::toQueryValue($start_month);
        }
        // query params
        if ($end_month !== null) {
            $queryParams['end_month'] = ObjectSerializer::toQueryValue($end_month);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($account_item_display_type !== null) {
            $queryParams['account_item_display_type'] = ObjectSerializer::toQueryValue($account_item_display_type);
        }
        // query params
        if ($breakdown_display_type !== null) {
            $queryParams['breakdown_display_type'] = ObjectSerializer::toQueryValue($breakdown_display_type);
        }
        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = ObjectSerializer::toQueryValue($partner_id);
        }
        // query params
        if ($partner_code !== null) {
            $queryParams['partner_code'] = ObjectSerializer::toQueryValue($partner_code);
        }
        // query params
        if ($item_id !== null) {
            $queryParams['item_id'] = ObjectSerializer::toQueryValue($item_id);
        }
        // query params
        if ($adjustment !== null) {
            $queryParams['adjustment'] = ObjectSerializer::toQueryValue($adjustment);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTrialBsThreeYears
     *
     * 貸借対照表(３期間比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\TrialBsThreeYearsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError
     */
    public function getTrialBsThreeYears($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        list($response) = $this->getTrialBsThreeYearsWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);
        return $response;
    }

    /**
     * Operation getTrialBsThreeYearsWithHttpInfo
     *
     * 貸借対照表(３期間比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\TrialBsThreeYearsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrialBsThreeYearsWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        $request = $this->getTrialBsThreeYearsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Freee\Accounting\Model\TrialBsThreeYearsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\TrialBsThreeYearsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Freee\Accounting\Model\BadRequestError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\BadRequestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Freee\Accounting\Model\UnauthorizedError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\UnauthorizedError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Freee\Accounting\Model\InternalServerError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Freee\Accounting\Model\TrialBsThreeYearsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\TrialBsThreeYearsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\BadRequestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\UnauthorizedError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrialBsThreeYearsAsync
     *
     * 貸借対照表(３期間比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialBsThreeYearsAsync($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        return $this->getTrialBsThreeYearsAsyncWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrialBsThreeYearsAsyncWithHttpInfo
     *
     * 貸借対照表(３期間比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialBsThreeYearsAsyncWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        $returnType = '\Freee\Accounting\Model\TrialBsThreeYearsResponse';
        $request = $this->getTrialBsThreeYearsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTrialBsThreeYears'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrialBsThreeYearsRequest($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getTrialBsThreeYears'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialBsThreeYears, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialBsThreeYears, must be bigger than or equal to 1.');
        }

        if ($start_month !== null && $start_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialBsThreeYears, must be smaller than or equal to 12.');
        }
        if ($start_month !== null && $start_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialBsThreeYears, must be bigger than or equal to 1.');
        }

        if ($end_month !== null && $end_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialBsThreeYears, must be smaller than or equal to 12.');
        }
        if ($end_month !== null && $end_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialBsThreeYears, must be bigger than or equal to 1.');
        }

        if ($partner_id !== null && $partner_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling TrialBalanceApi.getTrialBsThreeYears, must be bigger than or equal to 0.');
        }

        if ($item_id !== null && $item_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$item_id" when calling TrialBalanceApi.getTrialBsThreeYears, must be bigger than or equal to 0.');
        }


        $resourcePath = '/api/1/reports/trial_bs_three_years';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['company_id'] = ObjectSerializer::toQueryValue($company_id);
        }
        // query params
        if ($fiscal_year !== null) {
            $queryParams['fiscal_year'] = ObjectSerializer::toQueryValue($fiscal_year);
        }
        // query params
        if ($start_month !== null) {
            $queryParams['start_month'] = ObjectSerializer::toQueryValue($start_month);
        }
        // query params
        if ($end_month !== null) {
            $queryParams['end_month'] = ObjectSerializer::toQueryValue($end_month);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($account_item_display_type !== null) {
            $queryParams['account_item_display_type'] = ObjectSerializer::toQueryValue($account_item_display_type);
        }
        // query params
        if ($breakdown_display_type !== null) {
            $queryParams['breakdown_display_type'] = ObjectSerializer::toQueryValue($breakdown_display_type);
        }
        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = ObjectSerializer::toQueryValue($partner_id);
        }
        // query params
        if ($partner_code !== null) {
            $queryParams['partner_code'] = ObjectSerializer::toQueryValue($partner_code);
        }
        // query params
        if ($item_id !== null) {
            $queryParams['item_id'] = ObjectSerializer::toQueryValue($item_id);
        }
        // query params
        if ($adjustment !== null) {
            $queryParams['adjustment'] = ObjectSerializer::toQueryValue($adjustment);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTrialBsTwoYears
     *
     * 貸借対照表(前年比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\TrialBsTwoYearsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError
     */
    public function getTrialBsTwoYears($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        list($response) = $this->getTrialBsTwoYearsWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);
        return $response;
    }

    /**
     * Operation getTrialBsTwoYearsWithHttpInfo
     *
     * 貸借対照表(前年比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\TrialBsTwoYearsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrialBsTwoYearsWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        $request = $this->getTrialBsTwoYearsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Freee\Accounting\Model\TrialBsTwoYearsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\TrialBsTwoYearsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Freee\Accounting\Model\BadRequestError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\BadRequestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Freee\Accounting\Model\UnauthorizedError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\UnauthorizedError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Freee\Accounting\Model\InternalServerError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Freee\Accounting\Model\TrialBsTwoYearsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\TrialBsTwoYearsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\BadRequestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\UnauthorizedError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrialBsTwoYearsAsync
     *
     * 貸借対照表(前年比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialBsTwoYearsAsync($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        return $this->getTrialBsTwoYearsAsyncWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrialBsTwoYearsAsyncWithHttpInfo
     *
     * 貸借対照表(前年比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialBsTwoYearsAsyncWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        $returnType = '\Freee\Accounting\Model\TrialBsTwoYearsResponse';
        $request = $this->getTrialBsTwoYearsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTrialBsTwoYears'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrialBsTwoYearsRequest($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getTrialBsTwoYears'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialBsTwoYears, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialBsTwoYears, must be bigger than or equal to 1.');
        }

        if ($start_month !== null && $start_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialBsTwoYears, must be smaller than or equal to 12.');
        }
        if ($start_month !== null && $start_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialBsTwoYears, must be bigger than or equal to 1.');
        }

        if ($end_month !== null && $end_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialBsTwoYears, must be smaller than or equal to 12.');
        }
        if ($end_month !== null && $end_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialBsTwoYears, must be bigger than or equal to 1.');
        }

        if ($partner_id !== null && $partner_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling TrialBalanceApi.getTrialBsTwoYears, must be bigger than or equal to 0.');
        }

        if ($item_id !== null && $item_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$item_id" when calling TrialBalanceApi.getTrialBsTwoYears, must be bigger than or equal to 0.');
        }


        $resourcePath = '/api/1/reports/trial_bs_two_years';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['company_id'] = ObjectSerializer::toQueryValue($company_id);
        }
        // query params
        if ($fiscal_year !== null) {
            $queryParams['fiscal_year'] = ObjectSerializer::toQueryValue($fiscal_year);
        }
        // query params
        if ($start_month !== null) {
            $queryParams['start_month'] = ObjectSerializer::toQueryValue($start_month);
        }
        // query params
        if ($end_month !== null) {
            $queryParams['end_month'] = ObjectSerializer::toQueryValue($end_month);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($account_item_display_type !== null) {
            $queryParams['account_item_display_type'] = ObjectSerializer::toQueryValue($account_item_display_type);
        }
        // query params
        if ($breakdown_display_type !== null) {
            $queryParams['breakdown_display_type'] = ObjectSerializer::toQueryValue($breakdown_display_type);
        }
        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = ObjectSerializer::toQueryValue($partner_id);
        }
        // query params
        if ($partner_code !== null) {
            $queryParams['partner_code'] = ObjectSerializer::toQueryValue($partner_code);
        }
        // query params
        if ($item_id !== null) {
            $queryParams['item_id'] = ObjectSerializer::toQueryValue($item_id);
        }
        // query params
        if ($adjustment !== null) {
            $queryParams['adjustment'] = ObjectSerializer::toQueryValue($adjustment);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTrialPl
     *
     * 損益計算書の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\TrialPlResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError
     */
    public function getTrialPl($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        list($response) = $this->getTrialPlWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);
        return $response;
    }

    /**
     * Operation getTrialPlWithHttpInfo
     *
     * 損益計算書の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\TrialPlResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrialPlWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        $request = $this->getTrialPlRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Freee\Accounting\Model\TrialPlResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\TrialPlResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Freee\Accounting\Model\BadRequestError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\BadRequestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Freee\Accounting\Model\UnauthorizedError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\UnauthorizedError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Freee\Accounting\Model\InternalServerError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Freee\Accounting\Model\TrialPlResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\TrialPlResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\BadRequestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\UnauthorizedError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrialPlAsync
     *
     * 損益計算書の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialPlAsync($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        return $this->getTrialPlAsyncWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrialPlAsyncWithHttpInfo
     *
     * 損益計算書の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialPlAsyncWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        $returnType = '\Freee\Accounting\Model\TrialPlResponse';
        $request = $this->getTrialPlRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTrialPl'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrialPlRequest($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getTrialPl'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialPl, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialPl, must be bigger than or equal to 1.');
        }

        if ($start_month !== null && $start_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialPl, must be smaller than or equal to 12.');
        }
        if ($start_month !== null && $start_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialPl, must be bigger than or equal to 1.');
        }

        if ($end_month !== null && $end_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialPl, must be smaller than or equal to 12.');
        }
        if ($end_month !== null && $end_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialPl, must be bigger than or equal to 1.');
        }

        if ($partner_id !== null && $partner_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling TrialBalanceApi.getTrialPl, must be bigger than or equal to 0.');
        }

        if ($item_id !== null && $item_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$item_id" when calling TrialBalanceApi.getTrialPl, must be bigger than or equal to 0.');
        }

        if ($section_id !== null && $section_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$section_id" when calling TrialBalanceApi.getTrialPl, must be bigger than or equal to 0.');
        }


        $resourcePath = '/api/1/reports/trial_pl';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['company_id'] = ObjectSerializer::toQueryValue($company_id);
        }
        // query params
        if ($fiscal_year !== null) {
            $queryParams['fiscal_year'] = ObjectSerializer::toQueryValue($fiscal_year);
        }
        // query params
        if ($start_month !== null) {
            $queryParams['start_month'] = ObjectSerializer::toQueryValue($start_month);
        }
        // query params
        if ($end_month !== null) {
            $queryParams['end_month'] = ObjectSerializer::toQueryValue($end_month);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($account_item_display_type !== null) {
            $queryParams['account_item_display_type'] = ObjectSerializer::toQueryValue($account_item_display_type);
        }
        // query params
        if ($breakdown_display_type !== null) {
            $queryParams['breakdown_display_type'] = ObjectSerializer::toQueryValue($breakdown_display_type);
        }
        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = ObjectSerializer::toQueryValue($partner_id);
        }
        // query params
        if ($partner_code !== null) {
            $queryParams['partner_code'] = ObjectSerializer::toQueryValue($partner_code);
        }
        // query params
        if ($item_id !== null) {
            $queryParams['item_id'] = ObjectSerializer::toQueryValue($item_id);
        }
        // query params
        if ($section_id !== null) {
            $queryParams['section_id'] = ObjectSerializer::toQueryValue($section_id);
        }
        // query params
        if ($adjustment !== null) {
            $queryParams['adjustment'] = ObjectSerializer::toQueryValue($adjustment);
        }
        // query params
        if ($cost_allocation !== null) {
            $queryParams['cost_allocation'] = ObjectSerializer::toQueryValue($cost_allocation);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTrialPlSections
     *
     * 損益計算書(部門比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $section_ids 出力する部門の指定（半角数字のidを半角カンマ区切りスペースなしで指定してください） (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\TrialPlSectionsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError
     */
    public function getTrialPlSections($company_id, $section_ids, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null, $cost_allocation = null)
    {
        list($response) = $this->getTrialPlSectionsWithHttpInfo($company_id, $section_ids, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment, $cost_allocation);
        return $response;
    }

    /**
     * Operation getTrialPlSectionsWithHttpInfo
     *
     * 損益計算書(部門比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $section_ids 出力する部門の指定（半角数字のidを半角カンマ区切りスペースなしで指定してください） (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\TrialPlSectionsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrialPlSectionsWithHttpInfo($company_id, $section_ids, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null, $cost_allocation = null)
    {
        $request = $this->getTrialPlSectionsRequest($company_id, $section_ids, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment, $cost_allocation);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Freee\Accounting\Model\TrialPlSectionsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\TrialPlSectionsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Freee\Accounting\Model\BadRequestError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\BadRequestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Freee\Accounting\Model\UnauthorizedError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\UnauthorizedError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Freee\Accounting\Model\InternalServerError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Freee\Accounting\Model\TrialPlSectionsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\TrialPlSectionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\BadRequestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\UnauthorizedError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrialPlSectionsAsync
     *
     * 損益計算書(部門比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $section_ids 出力する部門の指定（半角数字のidを半角カンマ区切りスペースなしで指定してください） (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialPlSectionsAsync($company_id, $section_ids, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null, $cost_allocation = null)
    {
        return $this->getTrialPlSectionsAsyncWithHttpInfo($company_id, $section_ids, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment, $cost_allocation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrialPlSectionsAsyncWithHttpInfo
     *
     * 損益計算書(部門比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $section_ids 出力する部門の指定（半角数字のidを半角カンマ区切りスペースなしで指定してください） (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialPlSectionsAsyncWithHttpInfo($company_id, $section_ids, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null, $cost_allocation = null)
    {
        $returnType = '\Freee\Accounting\Model\TrialPlSectionsResponse';
        $request = $this->getTrialPlSectionsRequest($company_id, $section_ids, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $adjustment, $cost_allocation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTrialPlSections'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $section_ids 出力する部門の指定（半角数字のidを半角カンマ区切りスペースなしで指定してください） (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrialPlSectionsRequest($company_id, $section_ids, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $adjustment = null, $cost_allocation = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getTrialPlSections'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialPlSections, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialPlSections, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'section_ids' is set
        if ($section_ids === null || (is_array($section_ids) && count($section_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $section_ids when calling getTrialPlSections'
            );
        }
        if ($start_month !== null && $start_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialPlSections, must be smaller than or equal to 12.');
        }
        if ($start_month !== null && $start_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialPlSections, must be bigger than or equal to 1.');
        }

        if ($end_month !== null && $end_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialPlSections, must be smaller than or equal to 12.');
        }
        if ($end_month !== null && $end_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialPlSections, must be bigger than or equal to 1.');
        }

        if ($partner_id !== null && $partner_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling TrialBalanceApi.getTrialPlSections, must be bigger than or equal to 0.');
        }

        if ($item_id !== null && $item_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$item_id" when calling TrialBalanceApi.getTrialPlSections, must be bigger than or equal to 0.');
        }


        $resourcePath = '/api/1/reports/trial_pl_sections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['company_id'] = ObjectSerializer::toQueryValue($company_id);
        }
        // query params
        if ($section_ids !== null) {
            $queryParams['section_ids'] = ObjectSerializer::toQueryValue($section_ids);
        }
        // query params
        if ($fiscal_year !== null) {
            $queryParams['fiscal_year'] = ObjectSerializer::toQueryValue($fiscal_year);
        }
        // query params
        if ($start_month !== null) {
            $queryParams['start_month'] = ObjectSerializer::toQueryValue($start_month);
        }
        // query params
        if ($end_month !== null) {
            $queryParams['end_month'] = ObjectSerializer::toQueryValue($end_month);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($account_item_display_type !== null) {
            $queryParams['account_item_display_type'] = ObjectSerializer::toQueryValue($account_item_display_type);
        }
        // query params
        if ($breakdown_display_type !== null) {
            $queryParams['breakdown_display_type'] = ObjectSerializer::toQueryValue($breakdown_display_type);
        }
        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = ObjectSerializer::toQueryValue($partner_id);
        }
        // query params
        if ($partner_code !== null) {
            $queryParams['partner_code'] = ObjectSerializer::toQueryValue($partner_code);
        }
        // query params
        if ($item_id !== null) {
            $queryParams['item_id'] = ObjectSerializer::toQueryValue($item_id);
        }
        // query params
        if ($adjustment !== null) {
            $queryParams['adjustment'] = ObjectSerializer::toQueryValue($adjustment);
        }
        // query params
        if ($cost_allocation !== null) {
            $queryParams['cost_allocation'] = ObjectSerializer::toQueryValue($cost_allocation);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTrialPlThreeYears
     *
     * 損益計算書(３期間比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\TrialPlThreeYearsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError
     */
    public function getTrialPlThreeYears($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        list($response) = $this->getTrialPlThreeYearsWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);
        return $response;
    }

    /**
     * Operation getTrialPlThreeYearsWithHttpInfo
     *
     * 損益計算書(３期間比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\TrialPlThreeYearsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrialPlThreeYearsWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        $request = $this->getTrialPlThreeYearsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Freee\Accounting\Model\TrialPlThreeYearsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\TrialPlThreeYearsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Freee\Accounting\Model\BadRequestError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\BadRequestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Freee\Accounting\Model\UnauthorizedError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\UnauthorizedError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Freee\Accounting\Model\InternalServerError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Freee\Accounting\Model\TrialPlThreeYearsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\TrialPlThreeYearsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\BadRequestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\UnauthorizedError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrialPlThreeYearsAsync
     *
     * 損益計算書(３期間比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialPlThreeYearsAsync($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        return $this->getTrialPlThreeYearsAsyncWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrialPlThreeYearsAsyncWithHttpInfo
     *
     * 損益計算書(３期間比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialPlThreeYearsAsyncWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        $returnType = '\Freee\Accounting\Model\TrialPlThreeYearsResponse';
        $request = $this->getTrialPlThreeYearsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTrialPlThreeYears'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrialPlThreeYearsRequest($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getTrialPlThreeYears'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialPlThreeYears, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialPlThreeYears, must be bigger than or equal to 1.');
        }

        if ($start_month !== null && $start_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialPlThreeYears, must be smaller than or equal to 12.');
        }
        if ($start_month !== null && $start_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialPlThreeYears, must be bigger than or equal to 1.');
        }

        if ($end_month !== null && $end_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialPlThreeYears, must be smaller than or equal to 12.');
        }
        if ($end_month !== null && $end_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialPlThreeYears, must be bigger than or equal to 1.');
        }

        if ($partner_id !== null && $partner_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling TrialBalanceApi.getTrialPlThreeYears, must be bigger than or equal to 0.');
        }

        if ($item_id !== null && $item_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$item_id" when calling TrialBalanceApi.getTrialPlThreeYears, must be bigger than or equal to 0.');
        }

        if ($section_id !== null && $section_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$section_id" when calling TrialBalanceApi.getTrialPlThreeYears, must be bigger than or equal to 0.');
        }


        $resourcePath = '/api/1/reports/trial_pl_three_years';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['company_id'] = ObjectSerializer::toQueryValue($company_id);
        }
        // query params
        if ($fiscal_year !== null) {
            $queryParams['fiscal_year'] = ObjectSerializer::toQueryValue($fiscal_year);
        }
        // query params
        if ($start_month !== null) {
            $queryParams['start_month'] = ObjectSerializer::toQueryValue($start_month);
        }
        // query params
        if ($end_month !== null) {
            $queryParams['end_month'] = ObjectSerializer::toQueryValue($end_month);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($account_item_display_type !== null) {
            $queryParams['account_item_display_type'] = ObjectSerializer::toQueryValue($account_item_display_type);
        }
        // query params
        if ($breakdown_display_type !== null) {
            $queryParams['breakdown_display_type'] = ObjectSerializer::toQueryValue($breakdown_display_type);
        }
        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = ObjectSerializer::toQueryValue($partner_id);
        }
        // query params
        if ($partner_code !== null) {
            $queryParams['partner_code'] = ObjectSerializer::toQueryValue($partner_code);
        }
        // query params
        if ($item_id !== null) {
            $queryParams['item_id'] = ObjectSerializer::toQueryValue($item_id);
        }
        // query params
        if ($section_id !== null) {
            $queryParams['section_id'] = ObjectSerializer::toQueryValue($section_id);
        }
        // query params
        if ($adjustment !== null) {
            $queryParams['adjustment'] = ObjectSerializer::toQueryValue($adjustment);
        }
        // query params
        if ($cost_allocation !== null) {
            $queryParams['cost_allocation'] = ObjectSerializer::toQueryValue($cost_allocation);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTrialPlTwoYears
     *
     * 損益計算書(前年比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\TrialPlTwoYearsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError
     */
    public function getTrialPlTwoYears($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        list($response) = $this->getTrialPlTwoYearsWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);
        return $response;
    }

    /**
     * Operation getTrialPlTwoYearsWithHttpInfo
     *
     * 損益計算書(前年比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\TrialPlTwoYearsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrialPlTwoYearsWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        $request = $this->getTrialPlTwoYearsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Freee\Accounting\Model\TrialPlTwoYearsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\TrialPlTwoYearsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Freee\Accounting\Model\BadRequestError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\BadRequestError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Freee\Accounting\Model\UnauthorizedError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\UnauthorizedError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Freee\Accounting\Model\InternalServerError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\InternalServerError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Freee\Accounting\Model\TrialPlTwoYearsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\TrialPlTwoYearsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\BadRequestError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\UnauthorizedError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\InternalServerError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrialPlTwoYearsAsync
     *
     * 損益計算書(前年比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialPlTwoYearsAsync($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        return $this->getTrialPlTwoYearsAsyncWithHttpInfo($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrialPlTwoYearsAsyncWithHttpInfo
     *
     * 損益計算書(前年比較)の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrialPlTwoYearsAsyncWithHttpInfo($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        $returnType = '\Freee\Accounting\Model\TrialPlTwoYearsResponse';
        $request = $this->getTrialPlTwoYearsRequest($company_id, $fiscal_year, $start_month, $end_month, $start_date, $end_date, $account_item_display_type, $breakdown_display_type, $partner_id, $partner_code, $item_id, $section_id, $adjustment, $cost_allocation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTrialPlTwoYears'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $fiscal_year 会計年度 (optional)
     * @param  int $start_month 発生月で絞込：開始会計月(mm) (optional)
     * @param  int $end_month 発生月で絞込：終了会計月(mm) (optional)
     * @param  string $start_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $account_item_display_type 勘定科目の表示（勘定科目: account_item, 決算書表示:group） (optional)
     * @param  string $breakdown_display_type 内訳の表示（取引先: partner, 品目: item, 部門: section, 勘定科目: account_item） ※勘定科目はaccount_item_display_typeが「group」の時のみ指定できます (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択で絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込（事業所設定で取引先コードの利用を有効にしている場合のみ利用可能です） (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択で絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択で絞り込めます） (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $cost_allocation 配賦仕訳で絞込（配賦仕訳のみ：only,配賦仕訳以外：without） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrialPlTwoYearsRequest($company_id, $fiscal_year = null, $start_month = null, $end_month = null, $start_date = null, $end_date = null, $account_item_display_type = null, $breakdown_display_type = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $adjustment = null, $cost_allocation = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getTrialPlTwoYears'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialPlTwoYears, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling TrialBalanceApi.getTrialPlTwoYears, must be bigger than or equal to 1.');
        }

        if ($start_month !== null && $start_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialPlTwoYears, must be smaller than or equal to 12.');
        }
        if ($start_month !== null && $start_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$start_month" when calling TrialBalanceApi.getTrialPlTwoYears, must be bigger than or equal to 1.');
        }

        if ($end_month !== null && $end_month > 12) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialPlTwoYears, must be smaller than or equal to 12.');
        }
        if ($end_month !== null && $end_month < 1) {
            throw new \InvalidArgumentException('invalid value for "$end_month" when calling TrialBalanceApi.getTrialPlTwoYears, must be bigger than or equal to 1.');
        }

        if ($partner_id !== null && $partner_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling TrialBalanceApi.getTrialPlTwoYears, must be bigger than or equal to 0.');
        }

        if ($item_id !== null && $item_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$item_id" when calling TrialBalanceApi.getTrialPlTwoYears, must be bigger than or equal to 0.');
        }

        if ($section_id !== null && $section_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$section_id" when calling TrialBalanceApi.getTrialPlTwoYears, must be bigger than or equal to 0.');
        }


        $resourcePath = '/api/1/reports/trial_pl_two_years';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['company_id'] = ObjectSerializer::toQueryValue($company_id);
        }
        // query params
        if ($fiscal_year !== null) {
            $queryParams['fiscal_year'] = ObjectSerializer::toQueryValue($fiscal_year);
        }
        // query params
        if ($start_month !== null) {
            $queryParams['start_month'] = ObjectSerializer::toQueryValue($start_month);
        }
        // query params
        if ($end_month !== null) {
            $queryParams['end_month'] = ObjectSerializer::toQueryValue($end_month);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }
        // query params
        if ($account_item_display_type !== null) {
            $queryParams['account_item_display_type'] = ObjectSerializer::toQueryValue($account_item_display_type);
        }
        // query params
        if ($breakdown_display_type !== null) {
            $queryParams['breakdown_display_type'] = ObjectSerializer::toQueryValue($breakdown_display_type);
        }
        // query params
        if ($partner_id !== null) {
            $queryParams['partner_id'] = ObjectSerializer::toQueryValue($partner_id);
        }
        // query params
        if ($partner_code !== null) {
            $queryParams['partner_code'] = ObjectSerializer::toQueryValue($partner_code);
        }
        // query params
        if ($item_id !== null) {
            $queryParams['item_id'] = ObjectSerializer::toQueryValue($item_id);
        }
        // query params
        if ($section_id !== null) {
            $queryParams['section_id'] = ObjectSerializer::toQueryValue($section_id);
        }
        // query params
        if ($adjustment !== null) {
            $queryParams['adjustment'] = ObjectSerializer::toQueryValue($adjustment);
        }
        // query params
        if ($cost_allocation !== null) {
            $queryParams['cost_allocation'] = ObjectSerializer::toQueryValue($cost_allocation);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
