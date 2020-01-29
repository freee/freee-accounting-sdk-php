# Freee\Accounting\UsersApi

All URIs are relative to *https://api.freee.co.jp*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsers**](UsersApi.md#getUsers) | **GET** /api/1/users | 事業所に所属するユーザー一覧の取得
[**getUsersCapabilities**](UsersApi.md#getUsersCapabilities) | **GET** /api/1/users/capabilities | ログインユーザの権限の取得
[**getUsersMe**](UsersApi.md#getUsersMe) | **GET** /api/1/users/me | ログインユーザ情報の取得
[**updateUser**](UsersApi.md#updateUser) | **PUT** /api/1/users/me | ユーザー情報の更新



## getUsers

> \Freee\Accounting\Model\UsersIndexResponse getUsers($company_id, $limit)

事業所に所属するユーザー一覧の取得

<h2 id=\"\">概要</h2>  <p>事業所に所属するユーザーの一覧を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID
$limit = 56; // int | 取得上限数,最大3000件

try {
    $result = $apiInstance->getUsers($company_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **limit** | **int**| 取得上限数,最大3000件 | [optional]

### Return type

[**\Freee\Accounting\Model\UsersIndexResponse**](../Model/UsersIndexResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUsersCapabilities

> \Freee\Accounting\Model\UsersCapabilitiesResponse getUsersCapabilities($company_id)

ログインユーザの権限の取得

<h2 id=\"\">概要</h2>  <p>ユーザの権限情報を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 56; // int | 事業所ID

try {
    $result = $apiInstance->getUsersCapabilities($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersCapabilities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\UsersCapabilitiesResponse**](../Model/UsersCapabilitiesResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUsersMe

> \Freee\Accounting\Model\UsersMeResponse getUsersMe($companies)

ログインユーザ情報の取得

<h2 id=\"\">概要</h2>  <p>ユーザの情報を取得する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companies = True; // bool | 取得情報にユーザが所属する事業所一覧を含める

try {
    $result = $apiInstance->getUsersMe($companies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companies** | **bool**| 取得情報にユーザが所属する事業所一覧を含める | [optional]

### Return type

[**\Freee\Accounting\Model\UsersMeResponse**](../Model/UsersMeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateUser

> \Freee\Accounting\Model\UsersUpdateResponse updateUser($parameters)

ユーザー情報の更新

<h2 id=\"\">概要</h2>  <p>ユーザー情報を更新する</p>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Freee\Accounting\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Freee\Accounting\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parameters = new \Freee\Accounting\Model\UserUpdateParams(); // \Freee\Accounting\Model\UserUpdateParams | ユーザー情報の更新

try {
    $result = $apiInstance->updateUser($parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parameters** | [**\Freee\Accounting\Model\UserUpdateParams**](../Model/UserUpdateParams.md)| ユーザー情報の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\UsersUpdateResponse**](../Model/UsersUpdateResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

