<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Remember;
use Illuminate\Database\Eloquent\SoftDeletes ;

class Articles extends Model
{
    protected $table = 'article';
    use Remember;
    use SoftDeletes;
    protected $rememberFor = 10;
    protected $rememberCacheTag = 'table_article';

    function getUser()
    {
        return $this->hasOne('App\User', 'email', 'creator');
    }

    function getVideo()
    {
        return $this->hasOne('App\Models\Videos', 'id', 'video_id');
    }
}
