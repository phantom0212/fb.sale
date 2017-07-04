<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Remember;

class Category extends Model
{
    use Remember;
    protected $rememberFor = 60;
    protected $rememberCacheTag = 'table_category';

    protected $table = 'category';

    function getMetaCategory()
    {
        return $this->hasMany('App\Models\MetaCategory', 'category_id');
    }

    function categoryArticle()
    {
        return $this->belongsToMany('App\Models\Articles', 'article_category', 'category_id', 'article_id');
    }

    function getChild()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
}
