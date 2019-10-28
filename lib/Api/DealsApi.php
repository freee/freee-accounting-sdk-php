<?php
/**
 * DealsApi
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
 * DealsApi Class Doc Comment
 *
 * @category Class
 * @package  Freee\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DealsApi
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
     * Operation createDeal
     *
     * 取引（収入／支出）の作成
     *
     * @param  \Freee\Accounting\Model\CreateDealParams $parameters 取引（収入／支出）の作成 (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\DealsCreateResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError
     */
    public function createDeal($parameters = null)
    {
        list($response) = $this->createDealWithHttpInfo($parameters);
        return $response;
    }

    /**
     * Operation createDealWithHttpInfo
     *
     * 取引（収入／支出）の作成
     *
     * @param  \Freee\Accounting\Model\CreateDealParams $parameters 取引（収入／支出）の作成 (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\DealsCreateResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDealWithHttpInfo($parameters = null)
    {
        $request = $this->createDealRequest($parameters);

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
                    if ('\Freee\Accounting\Model\DealsCreateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\DealsCreateResponse', []),
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
            }

            $returnType = '\Freee\Accounting\Model\DealsCreateResponse';
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
                        '\Freee\Accounting\Model\DealsCreateResponse',
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
            }
            throw $e;
        }
    }

    /**
     * Operation createDealAsync
     *
     * 取引（収入／支出）の作成
     *
     * @param  \Freee\Accounting\Model\CreateDealParams $parameters 取引（収入／支出）の作成 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDealAsync($parameters = null)
    {
        return $this->createDealAsyncWithHttpInfo($parameters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDealAsyncWithHttpInfo
     *
     * 取引（収入／支出）の作成
     *
     * @param  \Freee\Accounting\Model\CreateDealParams $parameters 取引（収入／支出）の作成 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDealAsyncWithHttpInfo($parameters = null)
    {
        $returnType = '\Freee\Accounting\Model\DealsCreateResponse';
        $request = $this->createDealRequest($parameters);

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
     * Create request for operation 'createDeal'
     *
     * @param  \Freee\Accounting\Model\CreateDealParams $parameters 取引（収入／支出）の作成 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createDealRequest($parameters = null)
    {

        $resourcePath = '/deals';
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
                ['application/json', 'application/x-www-form-urlencoded']
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
     * Operation destroyDeal
     *
     * 取引（収入／支出）の削除
     *
     * @param  int $id 取引ID (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function destroyDeal($id, $company_id)
    {
        $this->destroyDealWithHttpInfo($id, $company_id);
    }

    /**
     * Operation destroyDealWithHttpInfo
     *
     * 取引（収入／支出）の削除
     *
     * @param  int $id 取引ID (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function destroyDealWithHttpInfo($id, $company_id)
    {
        $request = $this->destroyDealRequest($id, $company_id);

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
            }
            throw $e;
        }
    }

    /**
     * Operation destroyDealAsync
     *
     * 取引（収入／支出）の削除
     *
     * @param  int $id 取引ID (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyDealAsync($id, $company_id)
    {
        return $this->destroyDealAsyncWithHttpInfo($id, $company_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation destroyDealAsyncWithHttpInfo
     *
     * 取引（収入／支出）の削除
     *
     * @param  int $id 取引ID (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function destroyDealAsyncWithHttpInfo($id, $company_id)
    {
        $returnType = '';
        $request = $this->destroyDealRequest($id, $company_id);

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
     * Create request for operation 'destroyDeal'
     *
     * @param  int $id 取引ID (required)
     * @param  int $company_id 事業所ID (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function destroyDealRequest($id, $company_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling destroyDeal'
            );
        }
        if ($id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling DealsApi.destroyDeal, must be smaller than or equal to 999999999999.');
        }
        if ($id < 1) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling DealsApi.destroyDeal, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling destroyDeal'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling DealsApi.destroyDeal, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling DealsApi.destroyDeal, must be bigger than or equal to 1.');
        }


        $resourcePath = '/deals/{id}';
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
     * Operation getDeal
     *
     * 取引（収入／支出）の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id id (required)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\DealsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError
     */
    public function getDeal($company_id, $id, $accruals = null)
    {
        list($response) = $this->getDealWithHttpInfo($company_id, $id, $accruals);
        return $response;
    }

    /**
     * Operation getDealWithHttpInfo
     *
     * 取引（収入／支出）の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id (required)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\DealsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDealWithHttpInfo($company_id, $id, $accruals = null)
    {
        $request = $this->getDealRequest($company_id, $id, $accruals);

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
                    if ('\Freee\Accounting\Model\DealsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\DealsResponse', []),
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
            }

            $returnType = '\Freee\Accounting\Model\DealsResponse';
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
                        '\Freee\Accounting\Model\DealsResponse',
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
            }
            throw $e;
        }
    }

    /**
     * Operation getDealAsync
     *
     * 取引（収入／支出）の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id (required)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDealAsync($company_id, $id, $accruals = null)
    {
        return $this->getDealAsyncWithHttpInfo($company_id, $id, $accruals)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDealAsyncWithHttpInfo
     *
     * 取引（収入／支出）の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id (required)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDealAsyncWithHttpInfo($company_id, $id, $accruals = null)
    {
        $returnType = '\Freee\Accounting\Model\DealsResponse';
        $request = $this->getDealRequest($company_id, $id, $accruals);

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
     * Create request for operation 'getDeal'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $id (required)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDealRequest($company_id, $id, $accruals = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getDeal'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling DealsApi.getDeal, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling DealsApi.getDeal, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getDeal'
            );
        }
        if ($id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling DealsApi.getDeal, must be smaller than or equal to 999999999999.');
        }
        if ($id < 1) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling DealsApi.getDeal, must be bigger than or equal to 1.');
        }


        $resourcePath = '/deals/{id}';
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
        if ($accruals !== null) {
            $queryParams['accruals'] = ObjectSerializer::toQueryValue($accruals);
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
     * Operation getDeals
     *
     * 取引（収入／支出）一覧の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $partner_id 取引先IDで絞込 (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  string $status 決済状況で絞込 (未決済: unsettled, 完了: settled) (optional)
     * @param  string $type 収支区分 (収入: income, 支出: expense) (optional)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_due_date 支払期日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_due_date 支払期日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_renew_date +更新日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_renew_date +更新日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 100) (optional)
     * @param  string $registered_from 取引登録元アプリで絞込（me: 本APIを叩くアプリ自身から登録した取引のみ） (optional)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\DealsIndexResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError
     */
    public function getDeals($company_id, $partner_id = null, $account_item_id = null, $partner_code = null, $status = null, $type = null, $start_issue_date = null, $end_issue_date = null, $start_due_date = null, $end_due_date = null, $start_renew_date = null, $end_renew_date = null, $offset = null, $limit = null, $registered_from = null, $accruals = null)
    {
        list($response) = $this->getDealsWithHttpInfo($company_id, $partner_id, $account_item_id, $partner_code, $status, $type, $start_issue_date, $end_issue_date, $start_due_date, $end_due_date, $start_renew_date, $end_renew_date, $offset, $limit, $registered_from, $accruals);
        return $response;
    }

    /**
     * Operation getDealsWithHttpInfo
     *
     * 取引（収入／支出）一覧の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $partner_id 取引先IDで絞込 (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  string $status 決済状況で絞込 (未決済: unsettled, 完了: settled) (optional)
     * @param  string $type 収支区分 (収入: income, 支出: expense) (optional)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_due_date 支払期日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_due_date 支払期日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_renew_date +更新日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_renew_date +更新日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 100) (optional)
     * @param  string $registered_from 取引登録元アプリで絞込（me: 本APIを叩くアプリ自身から登録した取引のみ） (optional)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\DealsIndexResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDealsWithHttpInfo($company_id, $partner_id = null, $account_item_id = null, $partner_code = null, $status = null, $type = null, $start_issue_date = null, $end_issue_date = null, $start_due_date = null, $end_due_date = null, $start_renew_date = null, $end_renew_date = null, $offset = null, $limit = null, $registered_from = null, $accruals = null)
    {
        $request = $this->getDealsRequest($company_id, $partner_id, $account_item_id, $partner_code, $status, $type, $start_issue_date, $end_issue_date, $start_due_date, $end_due_date, $start_renew_date, $end_renew_date, $offset, $limit, $registered_from, $accruals);

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
                    if ('\Freee\Accounting\Model\DealsIndexResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\DealsIndexResponse', []),
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
            }

            $returnType = '\Freee\Accounting\Model\DealsIndexResponse';
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
                        '\Freee\Accounting\Model\DealsIndexResponse',
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
            }
            throw $e;
        }
    }

    /**
     * Operation getDealsAsync
     *
     * 取引（収入／支出）一覧の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $partner_id 取引先IDで絞込 (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  string $status 決済状況で絞込 (未決済: unsettled, 完了: settled) (optional)
     * @param  string $type 収支区分 (収入: income, 支出: expense) (optional)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_due_date 支払期日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_due_date 支払期日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_renew_date +更新日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_renew_date +更新日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 100) (optional)
     * @param  string $registered_from 取引登録元アプリで絞込（me: 本APIを叩くアプリ自身から登録した取引のみ） (optional)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDealsAsync($company_id, $partner_id = null, $account_item_id = null, $partner_code = null, $status = null, $type = null, $start_issue_date = null, $end_issue_date = null, $start_due_date = null, $end_due_date = null, $start_renew_date = null, $end_renew_date = null, $offset = null, $limit = null, $registered_from = null, $accruals = null)
    {
        return $this->getDealsAsyncWithHttpInfo($company_id, $partner_id, $account_item_id, $partner_code, $status, $type, $start_issue_date, $end_issue_date, $start_due_date, $end_due_date, $start_renew_date, $end_renew_date, $offset, $limit, $registered_from, $accruals)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDealsAsyncWithHttpInfo
     *
     * 取引（収入／支出）一覧の取得
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $partner_id 取引先IDで絞込 (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  string $status 決済状況で絞込 (未決済: unsettled, 完了: settled) (optional)
     * @param  string $type 収支区分 (収入: income, 支出: expense) (optional)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_due_date 支払期日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_due_date 支払期日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_renew_date +更新日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_renew_date +更新日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 100) (optional)
     * @param  string $registered_from 取引登録元アプリで絞込（me: 本APIを叩くアプリ自身から登録した取引のみ） (optional)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDealsAsyncWithHttpInfo($company_id, $partner_id = null, $account_item_id = null, $partner_code = null, $status = null, $type = null, $start_issue_date = null, $end_issue_date = null, $start_due_date = null, $end_due_date = null, $start_renew_date = null, $end_renew_date = null, $offset = null, $limit = null, $registered_from = null, $accruals = null)
    {
        $returnType = '\Freee\Accounting\Model\DealsIndexResponse';
        $request = $this->getDealsRequest($company_id, $partner_id, $account_item_id, $partner_code, $status, $type, $start_issue_date, $end_issue_date, $start_due_date, $end_due_date, $start_renew_date, $end_renew_date, $offset, $limit, $registered_from, $accruals);

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
     * Create request for operation 'getDeals'
     *
     * @param  int $company_id 事業所ID (required)
     * @param  int $partner_id 取引先IDで絞込 (optional)
     * @param  int $account_item_id 勘定科目IDで絞込 (optional)
     * @param  string $partner_code 取引先コードで絞込 (optional)
     * @param  string $status 決済状況で絞込 (未決済: unsettled, 完了: settled) (optional)
     * @param  string $type 収支区分 (収入: income, 支出: expense) (optional)
     * @param  string $start_issue_date 発生日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_issue_date 発生日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_due_date 支払期日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_due_date 支払期日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  string $start_renew_date +更新日で絞込：開始日(yyyy-mm-dd) (optional)
     * @param  string $end_renew_date +更新日で絞込：終了日(yyyy-mm-dd) (optional)
     * @param  int $offset 取得レコードのオフセット (デフォルト: 0) (optional)
     * @param  int $limit 取得レコードの件数 (デフォルト: 20, 最大: 100) (optional)
     * @param  string $registered_from 取引登録元アプリで絞込（me: 本APIを叩くアプリ自身から登録した取引のみ） (optional)
     * @param  string $accruals 取引の債権債務行の表示（without: 表示しない(デフォルト), with: 表示する） (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDealsRequest($company_id, $partner_id = null, $account_item_id = null, $partner_code = null, $status = null, $type = null, $start_issue_date = null, $end_issue_date = null, $start_due_date = null, $end_due_date = null, $start_renew_date = null, $end_renew_date = null, $offset = null, $limit = null, $registered_from = null, $accruals = null)
    {
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling getDeals'
            );
        }
        if ($company_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling DealsApi.getDeals, must be smaller than or equal to 999999999999.');
        }
        if ($company_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$company_id" when calling DealsApi.getDeals, must be bigger than or equal to 1.');
        }

        if ($partner_id !== null && $partner_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling DealsApi.getDeals, must be smaller than or equal to 999999999999.');
        }
        if ($partner_id !== null && $partner_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$partner_id" when calling DealsApi.getDeals, must be bigger than or equal to 1.');
        }

        if ($account_item_id !== null && $account_item_id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$account_item_id" when calling DealsApi.getDeals, must be smaller than or equal to 999999999999.');
        }
        if ($account_item_id !== null && $account_item_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$account_item_id" when calling DealsApi.getDeals, must be bigger than or equal to 1.');
        }


        $resourcePath = '/deals';
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
        if ($partner_id !== null) {
            $queryParams['partner_id'] = ObjectSerializer::toQueryValue($partner_id);
        }
        // query params
        if ($account_item_id !== null) {
            $queryParams['account_item_id'] = ObjectSerializer::toQueryValue($account_item_id);
        }
        // query params
        if ($partner_code !== null) {
            $queryParams['partner_code'] = ObjectSerializer::toQueryValue($partner_code);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type);
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
        if ($start_due_date !== null) {
            $queryParams['start_due_date'] = ObjectSerializer::toQueryValue($start_due_date);
        }
        // query params
        if ($end_due_date !== null) {
            $queryParams['end_due_date'] = ObjectSerializer::toQueryValue($end_due_date);
        }
        // query params
        if ($start_renew_date !== null) {
            $queryParams['start_renew_date'] = ObjectSerializer::toQueryValue($start_renew_date);
        }
        // query params
        if ($end_renew_date !== null) {
            $queryParams['end_renew_date'] = ObjectSerializer::toQueryValue($end_renew_date);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($registered_from !== null) {
            $queryParams['registered_from'] = ObjectSerializer::toQueryValue($registered_from);
        }
        // query params
        if ($accruals !== null) {
            $queryParams['accruals'] = ObjectSerializer::toQueryValue($accruals);
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
     * Operation updateDeal
     *
     * 取引（収入／支出）の更新
     *
     * @param  int $id 取引ID (required)
     * @param  \Freee\Accounting\Model\UpdateDealParams $parameters 取引（収入／支出）の更新 (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Freee\Accounting\Model\DealsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError
     */
    public function updateDeal($id, $parameters = null)
    {
        list($response) = $this->updateDealWithHttpInfo($id, $parameters);
        return $response;
    }

    /**
     * Operation updateDealWithHttpInfo
     *
     * 取引（収入／支出）の更新
     *
     * @param  int $id 取引ID (required)
     * @param  \Freee\Accounting\Model\UpdateDealParams $parameters 取引（収入／支出）の更新 (optional)
     *
     * @throws \Freee\Accounting\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Freee\Accounting\Model\DealsResponse|\Freee\Accounting\Model\BadRequestError|\Freee\Accounting\Model\UnauthorizedError, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDealWithHttpInfo($id, $parameters = null)
    {
        $request = $this->updateDealRequest($id, $parameters);

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
                    if ('\Freee\Accounting\Model\DealsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Freee\Accounting\Model\DealsResponse', []),
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
            }

            $returnType = '\Freee\Accounting\Model\DealsResponse';
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
                        '\Freee\Accounting\Model\DealsResponse',
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
            }
            throw $e;
        }
    }

    /**
     * Operation updateDealAsync
     *
     * 取引（収入／支出）の更新
     *
     * @param  int $id 取引ID (required)
     * @param  \Freee\Accounting\Model\UpdateDealParams $parameters 取引（収入／支出）の更新 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDealAsync($id, $parameters = null)
    {
        return $this->updateDealAsyncWithHttpInfo($id, $parameters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDealAsyncWithHttpInfo
     *
     * 取引（収入／支出）の更新
     *
     * @param  int $id 取引ID (required)
     * @param  \Freee\Accounting\Model\UpdateDealParams $parameters 取引（収入／支出）の更新 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDealAsyncWithHttpInfo($id, $parameters = null)
    {
        $returnType = '\Freee\Accounting\Model\DealsResponse';
        $request = $this->updateDealRequest($id, $parameters);

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
     * Create request for operation 'updateDeal'
     *
     * @param  int $id 取引ID (required)
     * @param  \Freee\Accounting\Model\UpdateDealParams $parameters 取引（収入／支出）の更新 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateDealRequest($id, $parameters = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateDeal'
            );
        }
        if ($id > 999999999999) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling DealsApi.updateDeal, must be smaller than or equal to 999999999999.');
        }
        if ($id < 1) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling DealsApi.updateDeal, must be bigger than or equal to 1.');
        }


        $resourcePath = '/deals/{id}';
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
                ['application/json', 'application/x-www-form-urlencoded']
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
