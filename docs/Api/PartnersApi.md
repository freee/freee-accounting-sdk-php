# Freee\Accounting\PartnersApi

All URIs are relative to *https://api.freee.co.jp/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPartner**](PartnersApi.md#createPartner) | **POST** /partners | 取引先の作成
[**getPartners**](PartnersApi.md#getPartners) | **GET** /partners | 取引先一覧の取得
[**updatePartner**](PartnersApi.md#updatePartner) | **PUT** /partners/{id} | 取引先の更新
[**updatePartnerByCode**](PartnersApi.md#updatePartnerByCode) | **PUT** /partners/code/{code} | 取引先の更新



## createPartner

> \Freee\Accounting\Model\PartnersResponse createPartner($partner_create_params)

取引先の作成

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引先を作成する</p> <ul> <li>codeを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。</li> <li>取引先コードの利用を有効にしている場合は、codeの指定は必須です。</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner_create_params = new \Freee\Accounting\Model\PartnerCreateParams(); // \Freee\Accounting\Model\PartnerCreateParams | 取引先の作成

try {
    $result = $apiInstance->createPartner($partner_create_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->createPartner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partner_create_params** | [**\Freee\Accounting\Model\PartnerCreateParams**](../Model/PartnerCreateParams.md)| 取引先の作成 |

### Return type

[**\Freee\Accounting\Model\PartnersResponse**](../Model/PartnersResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPartners

> \Freee\Accounting\Model\PartnersIndexResponse getPartners($company_id, $offset, $limit, $keyword)

取引先一覧の取得

<h2 id=\"\">概要</h2>  <p>指定した事業所の取引先一覧を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$offset = 56; // int | 取得レコードのオフセット (デフォルト: 0)
$limit = 56; // int | 取得レコードの件数 (デフォルト: 50, 最大: 3000)
$keyword = 'keyword_example'; // string | 検索キーワード：取引先名・正式名称・カナ名称に対するあいまい検索で一致、またはショートカットキー1・2のいずれかに完全一致

try {
    $result = $apiInstance->getPartners($company_id, $offset, $limit, $keyword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->getPartners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **offset** | **int**| 取得レコードのオフセット (デフォルト: 0) | [optional]
 **limit** | **int**| 取得レコードの件数 (デフォルト: 50, 最大: 3000) | [optional]
 **keyword** | **string**| 検索キーワード：取引先名・正式名称・カナ名称に対するあいまい検索で一致、またはショートカットキー1・2のいずれかに完全一致 | [optional]

### Return type

[**\Freee\Accounting\Model\PartnersIndexResponse**](../Model/PartnersIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePartner

> \Freee\Accounting\Model\PartnersResponse updatePartner($id, $partner_update_params)

取引先の更新

<h2 id=\"\">概要</h2>  <p>指定した取引先の情報を更新する</p> <ul> <li>codeを指定、更新することはできません。</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 取引先ID
$partner_update_params = new \Freee\Accounting\Model\PartnerUpdateParams(); // \Freee\Accounting\Model\PartnerUpdateParams | 取引先の更新

try {
    $result = $apiInstance->updatePartner($id, $partner_update_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->updatePartner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| 取引先ID |
 **partner_update_params** | [**\Freee\Accounting\Model\PartnerUpdateParams**](../Model/PartnerUpdateParams.md)| 取引先の更新 |

### Return type

[**\Freee\Accounting\Model\PartnersResponse**](../Model/PartnersResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePartnerByCode

> \Freee\Accounting\Model\PartnersResponse updatePartnerByCode($code, $partner_code_params)

取引先の更新

<h2 id=\"\">概要</h2>  <p>取引先コードをキーに、指定した取引先の情報を更新する</p> <ul> <li>このAPIを利用するには、事業所の設定から取引先コードの利用を有効にする必要があります。</li> <li>コードを日本語に設定している場合は、URLエンコードしてURLに含めるようにしてください。</li></ul>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | 取引先コード
$partner_code_params = new \Freee\Accounting\Model\PartnerCodeParams(); // \Freee\Accounting\Model\PartnerCodeParams | 取引先の更新

try {
    $result = $apiInstance->updatePartnerByCode($code, $partner_code_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->updatePartnerByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| 取引先コード |
 **partner_code_params** | [**\Freee\Accounting\Model\PartnerCodeParams**](../Model/PartnerCodeParams.md)| 取引先の更新 |

### Return type

[**\Freee\Accounting\Model\PartnersResponse**](../Model/PartnersResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

