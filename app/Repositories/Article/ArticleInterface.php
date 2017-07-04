<?php
namespace App\Repositories\Article;
interface ArticleInterface
{

    function getById($id);

    function getByCategory($category, $paginate = 8);

    function getRelate($article);

    function getSlugCategory($category);

    function getHot($paginate = 8);

    function getNew($take = null, $category_id = null, $order_by = null, $search = null, $creator = null, $like = false, $except = []);

}