<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Remember;

class Article extends Model
{
    protected $table = 'article';
    use Remember;
    protected $rememberFor = 10;
    protected $rememberCacheTag = 'table_article';

    function getUser()
    {
        return $this->hasOne('App\User', 'email', 'creator');
    }
}
