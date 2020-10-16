# 会計freee PHP SDK

会計freee API を PHP で利用するための SDK です。

会計freee API の詳細については、[会計API 概要 | freee Developers Community](https://developer.freee.co.jp/docs/accounting) をご参照ください。

### **【重要】** 会計freee APIの新バージョンについて

会計freee APIは、2020年12月まで、2つのバージョンが利用できる状態です。古いものは2020年12月に利用不可となります。

このSDKは、リリースバージョンによって、内部で利用するAPIバージョンが異なります。

- 2.0.0 以降 - 会計freee APIの新しいAPIバージョン(v2020-06-15)に対応しています。
- 2.0.0 未満 - 会計freee APIの古いAPIバージョンを利用しています。古いAPIの提供終了に伴い、2020年12月以降に利用不可となります。

## 目次

- [チュートリアル](#チュートリアル)
  - [前提条件](#前提条件)
  - [実行環境](#実行環境)
  - [freeeアプリストアへのアプリケーション登録](#freeeアプリストアへのアプリケーション登録)
  - [サンプルの実行方法](#サンプルの実行方法)
  - [SDKの導入方法](#SDKの導入方法)
- [コントリビューションについて](#コントリビューションについて)
- [ライセンス](#ライセンス)

## チュートリアル

会計freee PHP SDK を利用する手順について記載します。

### 前提条件

本SDKを利用する前に下記をご確認ください。

- freee 本体のアカウントがあること
- PHP の基礎について理解があること

freee 本体のアカウントは、後述する [freeeアプリストアへのアプリケーション登録](#freeeアプリストアへのアプリケーション登録) で必要になります。

freee API に関しては、[チュートリアルガイド](https://app.secure.freee.co.jp/developers/tutorials/1-freee%20API%E3%82%92%E5%A7%8B%E3%82%81%E3%82%8B#freee%20API%E3%82%92%E5%A7%8B%E3%82%81%E3%82%8B) をご参照ください。

PHP の基礎については、 [PHP: PHP マニュアル - Manual ](https://www.php.net/manual/ja/) をご参照ください。

### 実行環境

このリポジトリは以下の環境を想定しています。

- PHP 7.1 以上
- composer

このリポジトリは、 PHP 7.1 以上を対象としています。PHP の実行環境をお持ちでない方は、 [PHP: インストールと設定 - Manual](https://www.php.net/manual/ja/install.php) を参考に環境を準備してください。また、 [composer](https://getcomposer.org/) はこちらからインストールしてください。

### freeeアプリストアへのアプリケーション登録

本 SDK で利用する `client_id` および `client_secret` を取得するため、freeeアプリストアの開発者ページでアプリケーションを登録します。

こちらの [チュートリアル | freee アプリストア](https://app.secure.freee.co.jp/developers/tutorials/2-%E3%82%A2%E3%83%97%E3%83%AA%E3%82%B1%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%82%92%E4%BD%9C%E6%88%90%E3%81%99%E3%82%8B) を参考に、アプリケーションを登録して下さい。

本 SDK と接続するには、コールバックURLに、`http://localhost:8000/auth-callback` を設定します。

### サンプルの実行方法

#### WebApp のサンプル

##### WebApp のサンプルの実行環境

サンプルは [Laravel](https://laravel.com/) 7.x をベースに作成しています。サンプルを実行する際は、前述の実行環境に加え、下記も併せてご準備ください。

- PHP 7.2.5 以上
  - BCMath PHP Extension
  - Ctype PHP Extension
  - JSON PHP Extension
  - Mbstring PHP Extension
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension
- composer
- Node.js (UI生成時に `npm` を使用するため)

##### WebApp のサンプルの実行環境 (Docker)

また、Docker を利用可能な方向けに、上記実行環境を含む Dockerfile および docker-compose.yaml を同梱しています。利用する際は、下記をご参考にご利用ください。

```bash
cd <本リポジトリのクローン先ディレクトリ>
cd samples
docker-compose build
docker-compose up -d
docker exec -it samples_webapp_1 /bin/bash
```

上記の操作後、dockerコンテナの `/usr/src/app` にログインできます。このディレクトリは、本リポジトリの `samples/BasicWebApp` をマウントしたものです。下記の手順を適宜読み替えて、ご利用ください。

##### WebApp のサンプルの実行手順

本リポジトリをクローンしたのち、PowerShell や bash などのターミナルでディレクトリに移動します。

```bash
cd <本リポジトリのクローン先ディレクトリ>
cd samples/BasicWebApp
cp .env.example .env
```

コピーした `.env` を開き、下記の部分を設定してください。 `<client_id>`, `<client_secret>` は、それぞれ [freeeアプリストアへのアプリケーション登録](#freeeアプリストアへのアプリケーション登録) で取得した値を設定します。

```env
FREEE_ACCOUNTING_CLIENT_ID=<client_id>
FREEE_ACCOUNTING_CLIENT_SECRET=<client_secret>
```

ターミナルで、下記を実行します。

```bash
# パッケージをインストールする
composer install

# Application encryption key を発行する
php artisan key:generate

# sqlite ファイルを作成し、マイグレーションを実行する
touch database/database.sqlite
php artisan migrate

# Laravel の内蔵サーバーを実行する
php artisan serve

# ※ Docker で動かしている場合は、下記のように host を指定する
php artisan serve --host 0.0.0.0
```

`http://localhost:8000` を開き、ページが開けば正常に起動できています。

右上の「LOGIN」をクリックすると、freeeアプリストアのアプリケーションに対して認証が行われます。初回は「アプリ連携の開始」という画面が表示されますので、内容を確認し「許可する」ボタンをクリックしてください。

正常に認証されれば、 `http://localhost:8000/home` にリダイレクトされます。上部のバーに freee のユーザー名が表示されていれば成功です。また、ユーザー名を選択し、そのプルダウンから「Me」を選択すると、ユーザー情報や取引情報が表示されれば、情報を正しく取得できていることが確認できます。

なお、内蔵サーバーを停止するには、 Ctrl + c を押下します。

### SDKの導入方法

この項では、本 SDK の導入の参考として、 Laravel で利用する方法を記述します。

まず、 Laravel のプロジェクトを新規作成します。既存のプロジェクトに導入する場合は、読み飛ばしてください。まず、Laravel のプロジェクトを作成するため、`laravel` コマンドを [Installing Laravel](https://laravel.com/docs/7.x#installing-laravel) を参考にインストールします。なお、前述の Dockerfile を利用する場合は、すでにインストール済みです。

```bash
# Laravel のプロジェクトを新規作成し、そのディレクトリに移動する
laravel new sampleapp
cd sampleapp

# 確認のため、Laravel の内蔵サーバーを実行する
php artisan serve

# ※ Docker で動かしている場合は、下記のように host を指定する
php artisan serve --host 0.0.0.0

# 内蔵サーバーを停止するには、 Ctrl + c を押下します
```

`.env` に下記を追加し、[WebApp のサンプルの実行手順](#webapp-%E3%81%AE%E3%82%B5%E3%83%B3%E3%83%97%E3%83%AB%E3%81%AE%E5%AE%9F%E8%A1%8C%E6%89%8B%E9%A0%86) に倣い `<client_id>`, `<client-secret>` を設定してください。

```env
FREEE_ACCOUNTING_CLIENT_ID=<client_id>
FREEE_ACCOUNTING_CLIENT_SECRET=<client_secret>
```

つぎに、データベースの設定を sqlite に変更します。 `.env` を下記のように編集します。 `DB_DATABASE` はプロジェクト内の `database/database.sqlite` への絶対パスを設定します。適宜調整してください。

```
#DB_CONNECTION=mysql
DB_CONNECTION=sqlite
...
#DB_DATABASE=laravel
DB_DATABASE=/usr/src/app/database/database.sqlite
```

つぎに、sqlite ファイルを作成し、マイグレーションを実行します。

```bash
# 自動作成されたマイグレーションファイルを削除する
rm database/migrations/2014_10_12_000000_create_users_table.php
# マイグレーションを作成する
php artisan make:migration create_users_table --create=users
```

作成したマイグレーションファイルを下記のように編集します。

```php
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            // ↓↓ ここから ↓↓
            $table->unsignedBigInteger('freee_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('token')->nullable();
            $table->rememberToken();
            // ↑↑ ここまで編集 ↑↑
            $table->timestamps();
        });
```

```bash
# sqlite ファイルを作成し、マイグレーションを実行する
touch database/database.sqlite
php artisan migrate
```

`app/User.php` を編集します。

```php
    protected $fillable = [
        // ↓↓ ここから ↓↓
        // 'name', 'email', 'password',
        'name', 'email', 'freee_id', 'first_name', 'last_name', 'token'
        // ↑↑ ここまで編集 ↑↑
    ];
```

プロジェクトの準備ができたら、パッケージのインストールを行います。本SDK のコアである会計freee APIは OAuth2 による認証を行うため、 Laravel オフィシャルパッケージである [Socialite](https://socialiteproviders.netlify.com/) も利用します。

- `freee/freee-accounting-sdk`: 本SDK
- `socialiteproviders/generators`: Socialite のカスタムプロバイダのベースコードを生成するためのパッケージ（参考: https://github.com/SocialiteProviders/Generators)
- `socialiteproviders/manager`: Socialite のカスタムプロバイダを扱うためのパッケージ

```bash
composer require freee/freee-accounting-sdk
composer require socialiteproviders/generators
composer require socialiteproviders/manager
```

そして `config/app.php` の `providers` に、下記を参考にプロバイダを追記します。

```php
    'providers' => [
        // ... 中略 ...
        SocialiteProviders\Generators\GeneratorsServiceProvider::class,
        SocialiteProviders\Manager\ServiceProvider::class,
        // ... 中略 ...
    ],
```

`socialiteproviders/generators` の artisan コマンドを利用して、ベースコードを作成します。

```bash
# freee の OAuth2 認証を処理するコードを作成する
php artisan make:socialite FreeeAccounting --spec=oauth2 --authorize_url=https://accounts.secure.freee.co.jp/public_api/authorize --access_token_url=https://accounts.secure.freee.co.jp/public_api/token --user_details_url=https://api.freee.co.jp/api/1/users/me

# 作成したファイルを読み込む
composer dumpautoload
```

つぎに、認証用の画面を用意します。今回は `laravel/ui` を導入し、その画面を流用します。詳細は [Authentication - Laravel - The PHP Framework For Web Artisans](https://laravel.com/docs/7.x/authentication#authentication-quickstart) をご参照ください。

```bash
composer require laravel/ui
php artisan ui vue --auth
npm install && npm run dev
```

この時点で、 `routes/web.php` には `Auth::routes();` が追加され、認証周りのルーティングが設定されています。今回は、新規登録とパスワードリセットを利用しないので、下記のように編集します。

```php
// Auth::routes();
Auth::routes([
    'register' => false,
    'reset' => false,
]);
```

これまでの操作で、Laravel の内部でユーザーデータを持つ認証機構のベースができました。しかし、会計freee APIでは、freee に認証・認可を問い合わせる造りになるため、さらに変更を加えます。

まず、 `routes/web.php` に下記のルーティングを追加します。

```php
Route::get('login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('auth-callback', 'Auth\LoginController@handleProviderCallback')->name('authCallback');
```

そして、設定値にも変更を加えます。まず、 `config/services.php` に下記を追加します。

```php
<?php

return [

    // ... 中略 ...

    // ↓↓ ここから ↓↓
    'freeeaccounting' => [
        'client_id' => env('FREEE_ACCOUNTING_CLIENT_ID'),
        'client_secret' => env('FREEE_ACCOUNTING_CLIENT_SECRET'),
        'redirect' => 'http://localhost:8000/auth-callback',
    ],
    // ↑↑ ここまで編集 ↑↑
];
```

つぎに、 `SocialiteProviders` 配下のコードを少し修正します。

`SocialiteProviders/src/FreeeAccounting/Provider.php`

```php
    protected function getUserByToken($token)
    {
        // ... 中略 ...

        // ↓↓ ここから ↓↓
        // return json_decode($response->getBody(), true);
        $body = json_decode($response->getBody(), true);
        return $body['user'];
        // ↑↑ ここまで編集 ↑↑
    }
```

```php
    protected function mapUserToObject(array $user)
    {
        // ↓↓ ここから ↓↓
        $user['name'] = $user['last_name'] . ' ' . $user['first_name'];
        // ↑↑ ここまで追加 ↑↑

        return (new User())->setRaw($user)->map([
            'id'       => $user['id'],
            // 'nickname' => $user['username'],
            'name'     => $user['name'],
            'email'    => $user['email'],
            // 'avatar'   => $user['avatar'],
            // ↓↓ ここから ↓↓
            'display_name' => $user['display_name'],
            'first_name' => $user['first_name'],
            'last_name' => $user['last_name'],
            'first_name_kana' => $user['first_name_kana'],
            'last_name_kana' => $user['last_name_kana'],
            // ↑↑ ここまで追加 ↑↑
        ]);
    }
```

それでは、つぎにコントローラを整備しましょう。まず、 `app\Http\Auth\LoginController.php` を編集し、 会計freee API にログインできるようにします。

```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// ↓↓ ここから ↓↓
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;
// ↑↑ ここまで編集 ↑↑

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // ↓↓ ここから ↓↓
    // use AuthenticatesUsers;
    // ↑↑ ここまで編集 ↑↑

    // ... 中略 ...

    // ↓↓ ここから ↓↓
    /**
     * Redirect the user to the Freee Accounting authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('freeeaccounting')->redirect();
    }

    /**
     * Obtain the user information from Freee Accounting.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('freeeaccounting')->user();

        $loggedInUser = User::updateOrCreate(
            [
                'freee_id' => $user->id,
            ],
            [
                'name' => $user->name,
                'email' => $user->email,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'token' => $user->token,
            ]
        );

        Auth::login($loggedInUser);
        return redirect($this->redirectTo);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
    // ↑↑ ここまで追加 ↑↑
}
```

`app/Providers/EventServiceProvider.php` も下記のように編集します。

```php
<?php

namespace App\Providers;

// ... 中略 ...

// ↓↓ ここから ↓↓
use SocialiteProviders\Manager\SocialiteWasCalled;
use SocialiteProviders\FreeeAccounting\FreeeAccountingExtendSocialite;
// ↑↑ ここまで追加 ↑↑

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // ↓↓ ここから ↓↓
        SocialiteWasCalled::class => [
            FreeeAccountingExtendSocialite::class,
        ],
        // ↑↑ ここまで追加 ↑↑
    ];

    // ... 略 ...
}

```

ここまでの手順により、Laravel プロジェクトで会計freee APIにログインできるようになりました。

次に、本SDK を利用して情報を取得する部分も作成してみましょう。

情報を表示するための、コントローラー、ビューを作成します。まず、コントローラとして `AccountController` を作成しましょう。

```bash
php artisan make:controller AccountController
```

`app/Http/Controllers/AccountController.php` が作成されるので、そこに処理を記述します。

```php
<?php

namespace App\Http\Controllers;

// ↓↓ ここから ↓↓
// use Illuminate\Http\Request;
use Freee\Accounting\Configuration;
use Freee\Accounting\Api\CompaniesApi;
use Freee\Accounting\Api\DealsApi;
use Illuminate\Support\Facades\Auth;
// ↑↑ ここまで編集 ↑↑

class AccountController extends Controller
{
    //

    // ↓↓ ここから ↓↓
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display information of current user.
     *
     * @return \Illuminate\View\View
     */
    public function me()
    {
        $user = Auth::user();

        $config = Configuration::getDefaultConfiguration()->setAccessToken($user->token);

        $companiesApiInstance = new CompaniesApi(null, $config);
        $companiesResponse = $companiesApiInstance->getCompanies();

        $dealsApiInstance = new DealsApi(null, $config);
        $targetCompanyId = $companiesResponse->getCompanies()[0]->getId();
        $dealsNumberlimit = 5;
        $dealsResponse = $dealsApiInstance->getDeals(
            $targetCompanyId,
            null, null, null, null, null, null, null, null, null, null, null, null,
            $dealsNumberlimit);
        $deals = $dealsResponse->getDeals();

        $invoicesApiInstance = new InvoicesApi(null, $config);
        $invoicesResponse = $invoicesApiInstance->getInvoices($targetCompanyId);
        $invoices = $invoicesResponse->getInvoices();

        return view('account.me', compact('user', 'deals', 'invoices'));
    }
    // ↑↑ ここまで追加 ↑↑
}
```

そして、 `AccountController` にルーティングを通すために、 `routes/web.php` で下記を追記します。

```php
Route::get('/account/me', 'AccountController@me')->name('me');
```

次にビューを用意しましょう。 `resources/views/account` ディレクトリを作成し、本リポジトリの `samples/BasicWebApp/resources/views/account` 配下のファイルをコピーします。

```bash
mkdir -p resources/views/account

# 前述のようにファイルをコピーする
```

作成したページへ遷移するメニューを追加しましょう。 `resources/views/layouts/app.blade.php` を下記のように更新します。

```php
<!-- ... 中略 ... -->

<!-- Right Side Of Navbar -->
<ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <!-- ↓↓ ここから ↓↓ -->
                <a class="dropdown-item" href="{{ route('me') }}">
                    {{ __('Me') }}
                </a>
                <!-- ↑↑ ここまで追加 ↑↑ -->
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

<!-- ... 略 ... -->
```

ここで本手順は終わりです。 [サンプルの実行方法](#サンプルの実行方法) で示されるような動作が確認できれば導入成功です。

## コントリビューションについて

このプロジェクトへのコントリビューションを歓迎いたします。詳細については[コントリビューションガイド](./CONTRIBUTION_GUIDE.md)をご覧ください。

- [機能リクエスト](./CONTRIBUTION_GUIDE.md#機能リクエスト)
- [不具合報告](./CONTRIBUTION_GUIDE.md#不具合報告)
- [プルリクエストの作成について](./CONTRIBUTION_GUIDE.md#プルリクエストの作成について)

## ライセンス

ライセンスについては下記をご参照ください。

[MIT License](./LICENSE)
