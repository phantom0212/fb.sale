@if(isset($articles))
    @foreach($articles as $article)
        <?php
        $creator = isset($article->getUser->name) ? $article->getUser->name : 'Anonymous';
        $user_id = isset($article->getUser->id) ? $article->getUser->id : 1;
        $str_cache = 'article_view_' . $article->id;
        $view = \Cache::driver('redis_2')->has($str_cache) ? \Cache::driver('redis_2')->get($str_cache) : 0;

        $url = genLink($article,route('detail-article'),$article->title,$article->id);
        ?>

        <li>
            <a href="{{ $url }}" class="imgVideo w100pt left">
                <button href="{{ $url }}" class="btPlay"><i class="fa fa-play"
                                                   aria-hidden="true"></i></button>
                {{--<div class="time">05:02</div>--}}
                {{--<button class="save">Lưu</button>--}}
                <div class="bgR"></div>
                <img src="{{ get_thumbnail($article->thumbnail , 230 , 130 ) }}">
            </a>
            <a href="{{ $url }}" class="title"><h2>{{ str_limit($article->title , 30) }}</h2>
            </a>
            <p> Đăng bởi: <b><a
                            href="{{route('get-user-article').'/'.str_slug($creator).'_'.$user_id.'.html'}}">{{$creator}}</a></b></p>
            <p><b>{{number_format($view)}} </b>views , {{ time_elapsed_string($article->published_at)}} </p>
        </li>
    @endforeach
@endif