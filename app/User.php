<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Remember;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use Remember;
    protected $rememberFor = 10;
    protected $rememberCacheTag = 'table_users';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
