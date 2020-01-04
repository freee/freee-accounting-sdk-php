# Freee SDK for Laravel

`freee-accounting-sdk-php`をLaravelから使いやすくするパッケージ。
https://github.com/freee/freee-accounting-sdk-php

## Requirements
- PHP >= 7.2
- Laravel >= 6.0

## Installation
```
composer require freee/laravel-freee-sdk
```

### config/services.php
`socialite-freee`と同じ。

```
    'freee' => [
        'client_id' => env('FREEE_ACCOUNTING_CLIENT_ID'),
        'client_secret' => env('FREEE_ACCOUNTING_CLIENT_SECRET'),
        'redirect' => env('FREEE_ACCOUNTING_REDIRECT', '/auth-callback'),
    ],
```

### .env
```
FREEE_ACCOUNTING_CLIENT_ID=
FREEE_ACCOUNTING_CLIENT_SECRET=
FREEE_ACCOUNTING_REDIRECT=
```

## 使い方
Facade・Trait・Macroを使う方法とそれぞれテスト時の注意があるのでよく確認してください。

### Facade
```php
use Freee\Accounting\Configuration;
use Freee\Accounting\Laravel\Facades\Freee;

class Controller
{
    public function meFacade(Request $request)
    {
        $user = $request->user();

        // 普通の使い方と同じように$configを作ってセット。
        $config = Configuration::getDefaultConfiguration()->setAccessToken($user->token);
        // Freee::config($config)->companies()と繋げることも可能
        Freee::config($config);

        // companies()はCompaniesApiクラスのインスタンスを返すマジックメソッド。
        // 先頭のみ小文字、最後のApiを除いたメソッド名がルール。TrialBalanceApiならtrialBalance()
        // getCompanies()はCompaniesApiクラスのメソッド。後の使い方は同じ。
        // Responseは(string)でjsonに変換されるのでdecodeしてarrayで取得。Laravelならこの形のほうが扱いやすい。
        $companiesResponse = json_decode((string) Freee::companies()->getCompanies(), true);
        $targetCompanyId = $companiesResponse['companies'][0]['id'];

        // deals()はDealsApi。変換せずにそのままviewへ。null多すぎの解決方法はmacroで。
        $limit = 5;
        $deals = Freee::deals()->getDeals(
            $targetCompanyId,
            null, null, null, null, null, null, null, null, null, null, null, null,
            $limit)->getDeals();

        return view('account.me', compact('user', 'deals'));
    }
}
```

### Facadeのテスト

```php
    public function testMeFacade()
    {
        Freee::shouldReceive('config');

        // shouldReceiveですべてモックするのでAPIは実行されない。
        Freee::shouldReceive('companies->getCompanies')->andReturn(json_encode([
            'companies' => [
                [
                    'id' => 1,
                    'role' => 'admin',
                ]
            ]
        ]));

        Freee::shouldReceive('deals->getDeals->getDeals')->andReturn([]);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('me_facade'));

        $response->assertStatus(200)
            ->assertViewHas(['user', 'deals'])
            ->assertSeeText($user->email);
    }
```

### Trait
「traitで機能の有効化」で一段とLaravelらしくなる。

Userモデルに`FreeeAccounting`を追加。`tokenForFreeeAccounting()`でtokenを返す。

```php
use Freee\Accounting\Laravel\Traits\FreeeAccounting;

class User
{
    use FreeeAccounting;

    /**
     * @return string
     */
    public function tokenForFreeeAccounting()
    {
        return $this->token;
    }
}
```

```php
    public function meTrait(Request $request)
    {
        $user = $request->user();

        // $user->freee()はconfigをセット済のFreeeなので後は同じ。
        $companiesResponse = json_decode($user->freee()->companies()->getCompanies(), true);
        $targetCompanyId = $companiesResponse['companies'][0]['id'];

        $limit = 5;
        $deals = $user->freee()->deals()->getDeals(
            $targetCompanyId,
            null, null, null, null, null, null, null, null, null, null, null, null,
            $limit)->getDeals();

        return view('account.me', compact('user', 'deals'));
    }
```

### Traitのテスト

```php
    public function testMeTrait()
    {
        // freee()では毎回config()してるのでモック時にもconfigが必要
        Freee::shouldReceive('config->companies->getCompanies')->andReturn(json_encode([
            'companies' => [
                [
                    'id' => 1,
                    'role' => 'admin',
                ]
            ]
        ]));

        Freee::shouldReceive('config->deals->getDeals->getDeals')->andReturn([]);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('me_trait'));

        $response->assertStatus(200)
            ->assertViewHas(['user', 'deals'])
            ->assertSeeText($user->email);
    }
```

### Macro
Laravelのmacroと同じなのでどんなメソッドでも追加可能。
`AppServiceProvider@boot`などで定義。

```php
use Freee\Accounting\Laravel\Facades\Freee;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Freee::macro('getCompanyId', function ($index = 0) {
            $companiesApi = $this->companies();
            $companiesResponse = $companiesApi->getCompanies();
            return $companiesResponse->getCompanies()[$index]->getId();
        });

        Freee::macro('getDeals', function ($company_id, $limit = 5) {
            $dealsApi = $this->deals();
            $dealsResponse = $dealsApi->getDeals(
                $company_id,
                null, null, null, null, null, null, null, null, null, null, null, null,
                $limit);
            return $dealsResponse->getDeals();
        });
    }
}
```

```php
    public function meMacro(Request $request)
    {
        $user = $request->user();

        // 長いコードをmacroに追い出したのでこれだけで済む
        $company_id = $user->freee()->getCompanyId();

        $deals = $user->freee()->getDeals($company_id);

        return view('account.me', compact('user', 'deals'));
    }
```

### Macroのテスト

```php
    public function testMeMacro()
    {
        // freee()なのでconfigは必要だけどその後はmacroのメソッドのみ
        Freee::shouldReceive('config->getCompanyId')->andReturn(0);
        Freee::shouldReceive('config->getDeals')->andReturn([]);

        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('me_macro'));

        $response->assertStatus(200)
            ->assertSeeText($user->email);
    }
```

### refreshToken
access tokenの有効期限は24時間。`Freee::refreshToken()`で更新。

```php
    public function refresh(Request $request)
    {
        $response = Freee::refreshToken($request->user()->refresh_token);

        $request->user()->fill([
            'token' => $response['access_token'] ?? '',
            'refresh_token' => $response['refresh_token'] ?? '',
            'expired_at' => now()->addSeconds($response['expires_in']),
        ])->save();

        return back();
    }
```

### Laravel外で使う

```php
use Freee\Accounting\Configuration;
use Freee\Accounting\Laravel\FreeeClient;

$freee = new FreeeClient('client_id', 'client_secret');
$config = Configuration::getDefaultConfiguration()->setAccessToken('token');
$freee->config($config);
$companiesResponse = json_decode($freee->companies()->getCompanies(), true);
```

## LICENCE
MIT
