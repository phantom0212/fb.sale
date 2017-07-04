<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Remember;

class Videos extends Model
{
    protected $table = 'video';
//    use Remember;
    protected $rememberFor = 10;
    protected $rememberCacheTag = 'table_video';
}
