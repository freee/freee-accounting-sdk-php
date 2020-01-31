<?php
/**
 * ManualJournalsApi
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
 * ManualJournalsApi Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ManualJournalsApi
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
     * Operation createManualJournal
     *
     * 振替伝票の作成
     *
     * @param  \Freee\Accounting\Model\ManualJournalsCreateParams $parameters 振替伝票の作成 (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\ManualJournalsCreateResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError|\Freee\Accounting\Model\ServiceUnavailableError
     */
    public function createManualJournal($parameters = null)
    {
        list($response) = $this->createManualJournalWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation createManualJournalWithHttpInfo
     *
     * 振替伝票の作成
     *
     * @param  \Freee\Accounting\Model\ManualJournalsCreateParams $parameters 振替伝票の作成 (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\ManualJournalsCreateResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError|\Freee\Accounting\Model\ServiceUnavailableError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createManualJournalWithHttpInfo($parameters = null)
    {
        $request = $this->createManualJournalRequest($parameters);

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
                case 201:
                    if ('\Freee\Accounting\Model\ManualJournalsCreateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\ManualJournalsCreateResponse', []),
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
                case 503:
                    if ('\Freee\Accounting\Model\ServiceUnavailableError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\ServiceUnavailableError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Freee\Accounting\Model\ManualJournalsCreateResponse';
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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\ManualJournalsCreateResponse',
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
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\ServiceUnavailableError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createManualJournalAsync
     *
     * 振替伝票の作成
     *
     * @param  \Freee\Accounting\Model\ManualJournalsCreateParams $parameters 振替伝票の作成 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createManualJournalAsync($parameters = null)
    {
        return $this->createManualJournalAsyncWithHttpInfo($parameters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createManualJournalAsyncWithHttpInfo
     *
     * 振替伝票の作成
     *
     * @param  \Freee\Accounting\Model\ManualJournalsCreateParams $parameters 振替伝票の作成 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createManualJournalAsyncWithHttpInfo($parameters = null)
    {
        $returnType = '\Freee\Accounting\Model\ManualJournalsCreateResponse';
        $request = $this->createManualJournalRequest($parameters);

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
     * Create request for operation 'createManualJournal'
     *
     * @param  \Freee\Accounting\Model\ManualJournalsCreateParams $parameters 振替伝票の作成 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createManualJournalRequest($parameters = null)
    {

        $resourcePath = '/api/1/manual_journals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($parameters)) {
            $_tempBody = $parameters;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation destroyManualJournal
     *
     * 振替伝票の削除
     *
     * @param  int $id id (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function destroyManualJournal($id, $company_id)
    {
        $this->destroyManualJournalWithHttpInfo($id, $company_id);
    }

    /**
     * Operation destroyManualJournalWithHttpInfo
     *
     * 振替伝票の削除
     *
     * @param  int $id (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyManualJournalWithHttpInfo($id, $company_id)
    {
        $request = $this->destroyManualJournalRequest($id, $company_id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
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
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\BadRequestNotFoundError',
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
     * Operation destroyManualJournalAsync
     *
     * 振替伝票の削除
     *
     * @param  int $id (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyManualJournalAsync($id, $company_id)
    {
        return $this->destroyManualJournalAsyncWithHttpInfo($id, $company_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyManualJournalAsyncWithHttpInfo
     *
     * 振替伝票の削除
     *
     * @param  int $id (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyManualJournalAsyncWithHttpInfo($id, $company_id)
    {
        $returnType = '';
        $request = $this->destroyManualJournalRequest($id, $company_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'destroyManualJournal'
     *
     * @param  int $id (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function destroyManualJournalRequest($id, $company_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling destroyManualJournal'
            );
        }
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling destroyManualJournal'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling ManualJournalsApi.destroyManualJournal, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling ManualJournalsApi.destroyManualJournal, must be bigger than or equal to 1.');
        }


        $resourcePath = '/api/1/manual_journals/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['company_id'] = ObjectSerializer::toQueryValue($company_id);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getManualJournal
     *
     * 振替伝票の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id id (required)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\ManualJournalsShowResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\BadRequestNotFoundError|\Freee\Accounting\Model\InternalServerError
     */
    public function getManualJournal($company_id, $id)
    {
        list($response) = $this->getManualJournalWithHttpInfo($company_id, $id);
        return $response;
    }

    /**
     * Operation getManualJournalWithHttpInfo
     *
     * 振替伝票の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id (required)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\ManualJournalsShowResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\BadRequestNotFoundError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getManualJournalWithHttpInfo($company_id, $id)
    {
        $request = $this->getManualJournalRequest($company_id, $id);

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
                    if ('\Freee\Accounting\Model\ManualJournalsShowResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\ManualJournalsShowResponse', []),
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
                case 404:
                    if ('\Freee\Accounting\Model\BadRequestNotFoundError' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\BadRequestNotFoundError', []),
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

            $returnType = '\Freee\Accounting\Model\ManualJournalsShowResponse';
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
                        '\Freee\Accounting\Model\ManualJournalsShowResponse',
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
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Freee\Accounting\Model\BadRequestNotFoundError',
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
     * Operation getManualJournalAsync
     *
     * 振替伝票の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getManualJournalAsync($company_id, $id)
    {
        return $this->getManualJournalAsyncWithHttpInfo($company_id, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getManualJournalAsyncWithHttpInfo
     *
     * 振替伝票の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getManualJournalAsyncWithHttpInfo($company_id, $id)
    {
        $returnType = '\Freee\Accounting\Model\ManualJournalsShowResponse';
        $request = $this->getManualJournalRequest($company_id, $id);

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
     * Create request for operation 'getManualJournal'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getManualJournalRequest($company_id, $id)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getManualJournal'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling ManualJournalsApi.getManualJournal, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling ManualJournalsApi.getManualJournal, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getManualJournal'
            );
        }

        $resourcePath = '/api/1/manual_journals/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($company_id !== null) {
            $queryParams['company_id'] = ObjectSerializer::toQueryValue($company_id);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
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
     * Operation getManualJournals
     *
     * 振替伝票一覧の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $entry_side 貸借で絞込 (貸方: credit, 借方: debit) (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  int $min_amount 金額で絞込：下限 (optional)
     * @param  int $max_amount 金額で絞込：上限 (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択の貸借行を絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択の貸借行を絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_1_tag_id セグメント１IDで絞り込み（0を指定すると、セグメント１が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_2_tag_id セグメント２IDで絞り込み（0を指定すると、セグメント２が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_3_tag_id セグメント３IDで絞り込み（0を指定すると、セグメント３が未選択の貸借行を絞り込めます） (optional)
     * @param  string $comment_status コメント状態で絞込（自分宛のコメント: posted_with_mention, 自分宛のコメント-未解決: raised_with_mention, 自分宛のコメント-解決済: resolved_with_mention, コメントあり: posted, 未解決: raised, 解決済: resolved, コメントなし: none） (optional)
     * @param  bool $comment_important 重要コメント付きの振替伝票を絞込 (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $txn_number 仕訳番号で絞込（事業所の仕訳番号形式が有効な場合のみ） (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 500) (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\ManualJournalsIndexResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError
     */
    public function getManualJournals($company_id, $start_issue_date = null, $end_issue_date = null, $entry_side = null, $account_item_id = null, $min_amount = null, $max_amount = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $segment_1_tag_id = null, $segment_2_tag_id = null, $segment_3_tag_id = null, $comment_status = null, $comment_important = null, $adjustment = null, $txn_number = null, $offset = null, $limit = null)
    {
        list($response) = $this->getManualJournalsWithHttpInfo($company_id, $start_issue_date, $end_issue_date, $entry_side, $account_item_id, $min_amount, $max_amount, $partner_id, $partner_code, $item_id, $section_id, $segment_1_tag_id, $segment_2_tag_id, $segment_3_tag_id, $comment_status, $comment_important, $adjustment, $txn_number, $offset, $limit);
        return $response;
    }

    /**
     * Operation getManualJournalsWithHttpInfo
     *
     * 振替伝票一覧の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $entry_side 貸借で絞込 (貸方: credit, 借方: debit) (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  int $min_amount 金額で絞込：下限 (optional)
     * @param  int $max_amount 金額で絞込：上限 (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択の貸借行を絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択の貸借行を絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_1_tag_id セグメント１IDで絞り込み（0を指定すると、セグメント１が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_2_tag_id セグメント２IDで絞り込み（0を指定すると、セグメント２が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_3_tag_id セグメント３IDで絞り込み（0を指定すると、セグメント３が未選択の貸借行を絞り込めます） (optional)
     * @param  string $comment_status コメント状態で絞込（自分宛のコメント: posted_with_mention, 自分宛のコメント-未解決: raised_with_mention, 自分宛のコメント-解決済: resolved_with_mention, コメントあり: posted, 未解決: raised, 解決済: resolved, コメントなし: none） (optional)
     * @param  bool $comment_important 重要コメント付きの振替伝票を絞込 (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $txn_number 仕訳番号で絞込（事業所の仕訳番号形式が有効な場合のみ） (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 500) (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\ManualJournalsIndexResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getManualJournalsWithHttpInfo($company_id, $start_issue_date = null, $end_issue_date = null, $entry_side = null, $account_item_id = null, $min_amount = null, $max_amount = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $segment_1_tag_id = null, $segment_2_tag_id = null, $segment_3_tag_id = null, $comment_status = null, $comment_important = null, $adjustment = null, $txn_number = null, $offset = null, $limit = null)
    {
        $request = $this->getManualJournalsRequest($company_id, $start_issue_date, $end_issue_date, $entry_side, $account_item_id, $min_amount, $max_amount, $partner_id, $partner_code, $item_id, $section_id, $segment_1_tag_id, $segment_2_tag_id, $segment_3_tag_id, $comment_status, $comment_important, $adjustment, $txn_number, $offset, $limit);

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
                    if ('\Freee\Accounting\Model\ManualJournalsIndexResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\ManualJournalsIndexResponse', []),
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

            $returnType = '\Freee\Accounting\Model\ManualJournalsIndexResponse';
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
                        '\Freee\Accounting\Model\ManualJournalsIndexResponse',
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
     * Operation getManualJournalsAsync
     *
     * 振替伝票一覧の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $entry_side 貸借で絞込 (貸方: credit, 借方: debit) (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  int $min_amount 金額で絞込：下限 (optional)
     * @param  int $max_amount 金額で絞込：上限 (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択の貸借行を絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択の貸借行を絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_1_tag_id セグメント１IDで絞り込み（0を指定すると、セグメント１が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_2_tag_id セグメント２IDで絞り込み（0を指定すると、セグメント２が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_3_tag_id セグメント３IDで絞り込み（0を指定すると、セグメント３が未選択の貸借行を絞り込めます） (optional)
     * @param  string $comment_status コメント状態で絞込（自分宛のコメント: posted_with_mention, 自分宛のコメント-未解決: raised_with_mention, 自分宛のコメント-解決済: resolved_with_mention, コメントあり: posted, 未解決: raised, 解決済: resolved, コメントなし: none） (optional)
     * @param  bool $comment_important 重要コメント付きの振替伝票を絞込 (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $txn_number 仕訳番号で絞込（事業所の仕訳番号形式が有効な場合のみ） (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 500) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getManualJournalsAsync($company_id, $start_issue_date = null, $end_issue_date = null, $entry_side = null, $account_item_id = null, $min_amount = null, $max_amount = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $segment_1_tag_id = null, $segment_2_tag_id = null, $segment_3_tag_id = null, $comment_status = null, $comment_important = null, $adjustment = null, $txn_number = null, $offset = null, $limit = null)
    {
        return $this->getManualJournalsAsyncWithHttpInfo($company_id, $start_issue_date, $end_issue_date, $entry_side, $account_item_id, $min_amount, $max_amount, $partner_id, $partner_code, $item_id, $section_id, $segment_1_tag_id, $segment_2_tag_id, $segment_3_tag_id, $comment_status, $comment_important, $adjustment, $txn_number, $offset, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getManualJournalsAsyncWithHttpInfo
     *
     * 振替伝票一覧の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $entry_side 貸借で絞込 (貸方: credit, 借方: debit) (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  int $min_amount 金額で絞込：下限 (optional)
     * @param  int $max_amount 金額で絞込：上限 (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択の貸借行を絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択の貸借行を絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_1_tag_id セグメント１IDで絞り込み（0を指定すると、セグメント１が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_2_tag_id セグメント２IDで絞り込み（0を指定すると、セグメント２が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_3_tag_id セグメント３IDで絞り込み（0を指定すると、セグメント３が未選択の貸借行を絞り込めます） (optional)
     * @param  string $comment_status コメント状態で絞込（自分宛のコメント: posted_with_mention, 自分宛のコメント-未解決: raised_with_mention, 自分宛のコメント-解決済: resolved_with_mention, コメントあり: posted, 未解決: raised, 解決済: resolved, コメントなし: none） (optional)
     * @param  bool $comment_important 重要コメント付きの振替伝票を絞込 (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $txn_number 仕訳番号で絞込（事業所の仕訳番号形式が有効な場合のみ） (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 500) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getManualJournalsAsyncWithHttpInfo($company_id, $start_issue_date = null, $end_issue_date = null, $entry_side = null, $account_item_id = null, $min_amount = null, $max_amount = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $segment_1_tag_id = null, $segment_2_tag_id = null, $segment_3_tag_id = null, $comment_status = null, $comment_important = null, $adjustment = null, $txn_number = null, $offset = null, $limit = null)
    {
        $returnType = '\Freee\Accounting\Model\ManualJournalsIndexResponse';
        $request = $this->getManualJournalsRequest($company_id, $start_issue_date, $end_issue_date, $entry_side, $account_item_id, $min_amount, $max_amount, $partner_id, $partner_code, $item_id, $section_id, $segment_1_tag_id, $segment_2_tag_id, $segment_3_tag_id, $comment_status, $comment_important, $adjustment, $txn_number, $offset, $limit);

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
     * Create request for operation 'getManualJournals'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $entry_side 貸借で絞込 (貸方: credit, 借方: debit) (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  int $min_amount 金額で絞込：下限 (optional)
     * @param  int $max_amount 金額で絞込：上限 (optional)
     * @param  int $partner_id 取引先IDで絞込（0を指定すると、取引先が未選択の貸借行を絞り込めます） (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  int $item_id 品目IDで絞込（0を指定すると、品目が未選択の貸借行を絞り込めます） (optional)
     * @param  int $section_id 部門IDで絞込（0を指定すると、部門が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_1_tag_id セグメント１IDで絞り込み（0を指定すると、セグメント１が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_2_tag_id セグメント２IDで絞り込み（0を指定すると、セグメント２が未選択の貸借行を絞り込めます） (optional)
     * @param  int $segment_3_tag_id セグメント３IDで絞り込み（0を指定すると、セグメント３が未選択の貸借行を絞り込めます） (optional)
     * @param  string $comment_status コメント状態で絞込（自分宛のコメント: posted_with_mention, 自分宛のコメント-未解決: raised_with_mention, 自分宛のコメント-解決済: resolved_with_mention, コメントあり: posted, 未解決: raised, 解決済: resolved, コメントなし: none） (optional)
     * @param  bool $comment_important 重要コメント付きの振替伝票を絞込 (optional)
     * @param  string $adjustment 決算整理仕訳で絞込（決算整理仕訳のみ: only, 決算整理仕訳以外: without） (optional)
     * @param  string $txn_number 仕訳番号で絞込（事業所の仕訳番号形式が有効な場合のみ） (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 500) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getManualJournalsRequest($company_id, $start_issue_date = null, $end_issue_date = null, $entry_side = null, $account_item_id = null, $min_amount = null, $max_amount = null, $partner_id = null, $partner_code = null, $item_id = null, $section_id = null, $segment_1_tag_id = null, $segment_2_tag_id = null, $segment_3_tag_id = null, $comment_status = null, $comment_important = null, $adjustment = null, $txn_number = null, $offset = null, $limit = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getManualJournals'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to 1.');
        }

        if ($account_item_id !== null && $account_item_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$account_item_id" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($account_item_id !== null && $account_item_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$account_item_id" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to 1.');
        }

        if ($min_amount !== null && $min_amount > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$min_amount" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($min_amount !== null && $min_amount < -999999999999) {
            throw new \InvalidArgumentException('invalid value for "$min_amount" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to -999999999999.');
        }

        if ($max_amount !== null && $max_amount > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$max_amount" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($max_amount !== null && $max_amount < -999999999999) {
            throw new \InvalidArgumentException('invalid value for "$max_amount" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to -999999999999.');
        }

        if ($partner_id !== null && $partner_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($partner_id !== null && $partner_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to 0.');
        }

        if ($item_id !== null && $item_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$item_id" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($item_id !== null && $item_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$item_id" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to 0.');
        }

        if ($section_id !== null && $section_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$section_id" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($section_id !== null && $section_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$section_id" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to 0.');
        }

        if ($segment_1_tag_id !== null && $segment_1_tag_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$segment_1_tag_id" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($segment_1_tag_id !== null && $segment_1_tag_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$segment_1_tag_id" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to 0.');
        }

        if ($segment_2_tag_id !== null && $segment_2_tag_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$segment_2_tag_id" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($segment_2_tag_id !== null && $segment_2_tag_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$segment_2_tag_id" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to 0.');
        }

        if ($segment_3_tag_id !== null && $segment_3_tag_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$segment_3_tag_id" when calling ManualJournalsApi.getManualJournals, must be smaller than or equal to 999999999999.');
        }
        if ($segment_3_tag_id !== null && $segment_3_tag_id < 0) {
            throw new \InvalidArgumentException('invalid value for "$segment_3_tag_id" when calling ManualJournalsApi.getManualJournals, must be bigger than or equal to 0.');
        }


        $resourcePath = '/api/1/manual_journals';
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
        if ($start_issue_date !== null) {
            $queryParams['start_issue_date'] = ObjectSerializer::toQueryValue($start_issue_date);
        }
        // query params
        if ($end_issue_date !== null) {
            $queryParams['end_issue_date'] = ObjectSerializer::toQueryValue($end_issue_date);
        }
        // query params
        if ($entry_side !== null) {
            $queryParams['entry_side'] = ObjectSerializer::toQueryValue($entry_side);
        }
        // query params
        if ($account_item_id !== null) {
            $queryParams['account_item_id'] = ObjectSerializer::toQueryValue($account_item_id);
        }
        // query params
        if ($min_amount !== null) {
            $queryParams['min_amount'] = ObjectSerializer::toQueryValue($min_amount);
        }
        // query params
        if ($max_amount !== null) {
            $queryParams['max_amount'] = ObjectSerializer::toQueryValue($max_amount);
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
        if ($segment_1_tag_id !== null) {
            $queryParams['segment_1_tag_id'] = ObjectSerializer::toQueryValue($segment_1_tag_id);
        }
        // query params
        if ($segment_2_tag_id !== null) {
            $queryParams['segment_2_tag_id'] = ObjectSerializer::toQueryValue($segment_2_tag_id);
        }
        // query params
        if ($segment_3_tag_id !== null) {
            $queryParams['segment_3_tag_id'] = ObjectSerializer::toQueryValue($segment_3_tag_id);
        }
        // query params
        if ($comment_status !== null) {
            $queryParams['comment_status'] = ObjectSerializer::toQueryValue($comment_status);
        }
        // query params
        if ($comment_important !== null) {
            $queryParams['comment_important'] = ObjectSerializer::toQueryValue($comment_important);
        }
        // query params
        if ($adjustment !== null) {
            $queryParams['adjustment'] = ObjectSerializer::toQueryValue($adjustment);
        }
        // query params
        if ($txn_number !== null) {
            $queryParams['txn_number'] = ObjectSerializer::toQueryValue($txn_number);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
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
     * Operation updateManualJournal
     *
     * 振替伝票の更新
     *
     * @param  int $id id (required)
     * @param  \Freee\Accounting\Model\ManualJournalsUpdateParams $parameters 振替伝票の更新 (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\ManualJournalsUpdateResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError
     */
    public function updateManualJournal($id, $parameters = null)
    {
        list($response) = $this->updateManualJournalWithHttpInfo($id, $parameters);
        return $response;
    }

    /**
     * Operation updateManualJournalWithHttpInfo
     *
     * 振替伝票の更新
     *
     * @param  int $id (required)
     * @param  \Freee\Accounting\Model\ManualJournalsUpdateParams $parameters 振替伝票の更新 (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\ManualJournalsUpdateResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError|\Freee\Accounting\Model\InternalServerError, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateManualJournalWithHttpInfo($id, $parameters = null)
    {
        $request = $this->updateManualJournalRequest($id, $parameters);

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
                    if ('\Freee\Accounting\Model\ManualJournalsUpdateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\ManualJournalsUpdateResponse', []),
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

            $returnType = '\Freee\Accounting\Model\ManualJournalsUpdateResponse';
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
                        '\Freee\Accounting\Model\ManualJournalsUpdateResponse',
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
     * Operation updateManualJournalAsync
     *
     * 振替伝票の更新
     *
     * @param  int $id (required)
     * @param  \Freee\Accounting\Model\ManualJournalsUpdateParams $parameters 振替伝票の更新 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateManualJournalAsync($id, $parameters = null)
    {
        return $this->updateManualJournalAsyncWithHttpInfo($id, $parameters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateManualJournalAsyncWithHttpInfo
     *
     * 振替伝票の更新
     *
     * @param  int $id (required)
     * @param  \Freee\Accounting\Model\ManualJournalsUpdateParams $parameters 振替伝票の更新 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateManualJournalAsyncWithHttpInfo($id, $parameters = null)
    {
        $returnType = '\Freee\Accounting\Model\ManualJournalsUpdateResponse';
        $request = $this->updateManualJournalRequest($id, $parameters);

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
     * Create request for operation 'updateManualJournal'
     *
     * @param  int $id (required)
     * @param  \Freee\Accounting\Model\ManualJournalsUpdateParams $parameters 振替伝票の更新 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateManualJournalRequest($id, $parameters = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateManualJournal'
            );
        }

        $resourcePath = '/api/1/manual_journals/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($parameters)) {
            $_tempBody = $parameters;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            'PUT',
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
