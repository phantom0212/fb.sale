<?php
$data_id = [];
$i = 1;
?>
@if(isset($articles))
    @foreach($articles as $article)
        @if (isset($except) && $except == true && isset($GLOBALS['except_id']) && in_array($article->id , $GLOBALS['except_id'] ))
        @else
            <?php
            if (isset($except) && $except == true) {
                $data_id[] = $article->id;
                if ($i == 9) break;
            }
            $creator = isset($article->getUser->name) ? $article->getUser->name : 'Anonymous';
            $user_id = isset($article->getUser->id) ? $article->getUser->id : 1;
            $str_cache = 'article_view_' . $article->id;
            $view = \Cache::driver('redis_2')->has($str_cache) ? \Cache::driver('redis_2')->get($str_cache) : 0;
            $url = genLink($article, route('detail-article'), $article->title, $article->id);
            ?>

            @if(isset($view_component) && $view_component == 'normal')
                <li>
                    <a target="_blank" href="{{  $url }}" class="imgVideo w100pt left">
                        <button href="{{  $url }}" class="btPlay"><i class="fa fa-play" aria-hidden="true"></i></button>
                        <div class="bgR"></div>
                        <img class="image_article" src="{{ get_thumbnail($article->thumbnail , 230 , 130 ) }}">
                    </a>
                    <a target="_blank" href="{{  $url }}" class="title"><h2>{{$article->title}}</h2></a>
                    <p> Đăng bởi: <b><a
                                    href="{{route('get-user-article').'/'.str_slug($creator).'_'.$user_id.'.html'}}">{{$creator}}</a></b>
                    </p>
                    <p><b>{{number_format($view)}} </b>views ,<b> {{ time_elapsed_string($article->published_at)}} </b>
                    </p>
                </li>
            @else
                <div class="slide">
                    <a target="_blank" href="{{  $url }}" class="imgVideo w100pt left">
                        <button href="{{  $url }}" class="btPlay"><i class="fa fa-play" aria-hidden="true"></i></button>
                        <div class="bgR"></div>
                        <img class="image_article" src="{{ get_thumbnail($article->thumbnail , 230 , 130 ) }}">
                    </a>
                    <a target="_blank" href="{{  $url }}" class="title"><h2>{{$article->title}}</h2></a>
                    <p> Đăng bởi: <b><a
                                    href="{{route('get-user-article').'/'.str_slug($creator).'_'.$user_id.'.html'}}">{{$creator}}</a></b>
                    </p>
                    <p><b>{{number_format($view)}} </b>views ,<b> {{ time_elapsed_string($article->published_at)}} </b>
                    </p>
                </div>
            @endif
            <?php $i++;?>
        @endif
    @endforeach
    <?php
    $GLOBALS['except_id'] = $data_id;
    ?>
@endif
