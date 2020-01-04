<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Freee\Accounting\Laravel\Traits\FreeeAccounting;

class User extends Authenticatable
{
    use Notifiable;
    use FreeeAccounting;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'freee_id',
        'name',
        'email',
        'first_name',
        'last_name',
        'token',
        'refresh_token',
        'expired_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'expired_at' => 'datetime',
    ];

    /**
     * @return string
     */
    protected function tokenForFreeeAccounting()
    {
        return $this->token;
    }
}
