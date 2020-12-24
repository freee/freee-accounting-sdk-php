# Freee\Accounting\UsersApi

All URIs are relative to https://api.freee.co.jp.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUsers()**](UsersApi.md#getUsers) | **GET** /api/1/users | 事業所に所属するユーザー一覧の取得
[**getUsersCapabilities()**](UsersApi.md#getUsersCapabilities) | **GET** /api/1/users/capabilities | ログインユーザーの権限の取得
[**getUsersMe()**](UsersApi.md#getUsersMe) | **GET** /api/1/users/me | ログインユーザー情報の取得
[**updateUser()**](UsersApi.md#updateUser) | **PUT** /api/1/users/me | ユーザー情報の更新


## `getUsers()`

```php
getUsers($company_id, $limit): \Freee\Accounting\Model\InlineResponse20015
```

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
$limit = 56; // int | 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 3000)

try {
    $result = $apiInstance->getUsers($company_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |
 **limit** | **int**| 取得レコードの件数 (デフォルト: 50, 最小: 1, 最大: 3000) | [optional]

### Return type

[**\Freee\Accounting\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersCapabilities()`

```php
getUsersCapabilities($company_id): \Freee\Accounting\Model\InlineResponse20016
```

ログインユーザーの権限の取得

<h2 id=\"\">概要</h2>  <p>ユーザーの権限情報を取得する</p>

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
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_id** | **int**| 事業所ID |

### Return type

[**\Freee\Accounting\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersMe()`

```php
getUsersMe($companies): \Freee\Accounting\Model\MeResponse
```

ログインユーザー情報の取得

<h2 id=\"\">概要</h2>  <p>ユーザーの情報を取得する</p>

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
$companies = True; // bool | 取得情報にユーザーが所属する事業所一覧を含める

try {
    $result = $apiInstance->getUsersMe($companies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companies** | **bool**| 取得情報にユーザーが所属する事業所一覧を含める | [optional]

### Return type

[**\Freee\Accounting\Model\MeResponse**](../Model/MeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_params): \Freee\Accounting\Model\UserResponse
```

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
$user_params = new \Freee\Accounting\Model\UserParams(); // \Freee\Accounting\Model\UserParams | ユーザー情報の更新

try {
    $result = $apiInstance->updateUser($user_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_params** | [**\Freee\Accounting\Model\UserParams**](../Model/UserParams.md)| ユーザー情報の更新 | [optional]

### Return type

[**\Freee\Accounting\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
