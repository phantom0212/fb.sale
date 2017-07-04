<?php
namespace App\Repositories\Article;

use App\Models\Articles;
use Redis;

class ArticleEloquent implements ArticleInterface
{
    function getById($id)
    {
        //Check Cache
        if (\Cache::has('article_' . $id)) {
            $article = \Cache::get('article_' . $id);
            $type = isset($article->type) ? $article->type : '';
            if ($type == 'Video') {
                return $article;
            } else {
                return null;
            }
        } else {
            $article = Articles::with('getVideo', 'getUser')->where('article.type', 'Video')
                ->where('status', 'publish')
                ->where('id', $id)
                ->first();
        }
        return $article;
    }
    function getNew($take = null, $category_id = null, $order_by = null, $search = null, $creator = null, $like = false, $except = [])
    {
        $articles = Articles::with('getUser')
            ->where('type', 'Video')
            ->where('status', 'publish')
            ->whereNotIn('id', $except)
            ->orderBy('published_at', 'desc')
            ->orderBy('id', 'desc');
        if ($creator != null) {
            $articles = $articles->where('creator', $creator);
        }
        if ($search != null) {
            $articles->where(
                function ($query) use ($search) {
                    $query->where('title', 'like', '% ' . $search . ' %');
                    $query->Orwhere('title', 'like', '%' . $search . '%');
                    $query->Orwhere('title', 'like', $search . '%');
                    $query->Orwhere('title', 'like', '%' . $search);
                }
            );
        }
        $articles = $articles->groupBy('id');
        if ($take != null) {
            $articles = $articles->paginate($take);
        } else {
            $articles = $articles->paginate(16);
        }

        return $articles;

    }

    function getWhereInArticle($data_id, $take = null)
    {
        $i = 1;
        $articles = [];
        foreach ($data_id as $items) {
            $article = $this->getById($items);
            if ($article != null) {
                $articles [] = $article;
                if ($take != null && $i == $take) {
                    return $articles;
                }
                $i++;
            }
        }
        return $articles;
    }

    function getByCategory($category, $paginate = 8)
    {
        $data = [];
        $articles = '';
        try {
            $redis = new \Redis();
            $redis->connect(env('REDIS_HOST'), env('REDIS_PORT'));
            if (request()->has('page')) {
                $paged = request()->get('page');
                $offset = ($paged - 1) * $paginate < 0 ? 0 : ($paged - 1) * $paginate;
                $limit = ($offset + $paginate) - 1 < 0 ? 0 : ($offset + $paginate) - 1;
                $data = $redis->zRevRange('category_article_' . $category->id, $offset, $limit);
            } else {
                $data = $redis->zRevRange('category_article_' . $category->id, 0, PAGINATE_CATEGORY);
            }
            $redis->close();
            if (!empty($data)) {
                $articles = $this->getWhereInArticle($data, $paginate);
                return $articles;
            } else {
                $articles = null;
                return $articles;
            }

        } catch (\Exception $e) {
            $articles = null;
            return $articles;
        }

    }

    function getByUser($user, $paginate = 8)
    {
        $data = [];
        try {
            $redis = new \Redis();
            $redis->connect(env('REDIS_HOST'), env('REDIS_PORT'));
            if (request()->has('page')) {
                $paged = request()->get('page');
                $offset = ($paged - 1) * $paginate < 0 ? 0 : ($paged - 1) * $paginate;
                $limit = ($offset + $paginate) - 1 < 0 ? 0 : ($offset + $paginate) - 1;
                $data = $redis->zRevRange('user_article_' . $user->id, $offset, $limit);
            } else {
                $data = $redis->zRevRange('user_article_' . $user->id, 0, 7);
            }
            $redis->close();
            if (!empty($data)) {
                $articles = $this->getWhereInArticle($data, $paginate);
                return $articles;
            } else {

                return $articles;
            }

        } catch (\Exception $e) {
            $articles = Articles::where('status', 'Publish')->orderBy('created_at', 'desc')->paginate(8);
            return $articles;
        }

    }

    function getRelate($article, $except = [])
    {
        $parent_category = $article->parent_category;
        if (isset($article->related)) {
            $relate = @json_decode($article->related);
            if (isset($relate)) {
                foreach ($relate as $item) {
                    foreach ($item as $k => $v) {
                        $related_id[] = $k;
                    }
                }
            }
            if (!empty($related_id)) {
                //GOI REPOSITORY LAY RA BAI VIET LIEN QUAN + CACHE
                $relateds = $this->getWhereInArticle($related_id, 8);
            } else {
                $category_parent = GetCategoryFromCache($parent_category);
                $articles = $this->getByCategory($category_parent, 8);
                $relateds = $articles;
            }
            return $relateds;
        } else {
            $category_parent = GetCategoryFromCache($parent_category);
            $articles = $this->getByCategory($category_parent, 8);
            $relateds = $articles;
        }
        return $relateds;
    }

    function getSlugCategory($category)
    {
        $category = $category->getChild()->where('status', 1)->get();
        return $category;
    }

    function getHot($paginate = 8)
    {
        $key = 'article_view_by_day_' . date('dmY');
        $redis = new Redis();
        $redis->connect(env('REDIS_HOST_2'), env('REDIS_PORT_2'));
        if (request()->has('page')) {
            $paged = request()->get('page');
            $offset = ($paged - 1) * $paginate < 0 ? 0 : ($paged - 1) * $paginate;
            $limit = ($offset + $paginate) - 1 < 0 ? 0 : ($offset + $paginate) - 1;
            $data = $redis->zRevRange($key, $offset, $limit);
        } else {
            $data = $redis->zRevRange($key, 0, PAGINATE_CATEGORY);
        }
        $redis->close();
        if (!empty($data)) {
            $articles = $this->getWhereInArticle($data, $paginate);
            return $articles;
        } else {
            $category_clip_hot = GetCategoryFromCache(CLIP_HOT);
            return $this->getByCategory($category_clip_hot, 8);
        }
    }

}