# Laravel Socialite for Freee

https://developer.freee.co.jp/

## Requirements
- PHP >= 7.2

## Installation
```
composer require freee/socialite-freee
```

### config/services.php

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

## Usage

routes/web.php
```
Route::get('/', 'LoginController@redirect');
Route::get('auth-callback', 'LoginController@callback');
```

LoginController

```php
namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('freee')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('freee')->user();
        dd($user);
    }
}

```

## LICENCE
MIT
