<div id="contentLeft">
    <div class="headerMenu w100pt">
        <a href="#" class="menuBar"> <i class="fa fa-bars" aria-hidden="true"></i></a>
        <a href="#" class="iconMenu"><img src="/dist/image/logo-Tintuc.video.png"></a></div>
    <ul id="leftNavigation">
        <?php $cate = route('category-article'); ?>
        <li><a href="{{ url('/') }}"><i class="fa fa-home leftNavIcon"></i> Trang chủ</a></li>
        <li><a href="{{ $cate.'/hot' }}"><i class="fa fa-star leftNavIcon col-red"></i> Hot nhất</a></li>
        <li><a href="{{ $cate.'/moi' }}"><i class="fa fa-plus-square leftNavIcon col-red"></i> Mới đăng</a></li>
        <li class="">
            <a href="{{ $cate.'/tin-tuchot-news' }}">
                <i class="fa fa-fire leftNavIcon"></i> Tin Tức
            </a>
        </li>
        <li class="">
            <a href="{{ $cate.'/kham-pha' }}">
                <i class="fa fa-coffee leftNavIcon"></i> Khám phá
            </a>
        </li>

        <li>
            <a href="{{ url($cate.'/video') }}"> <i class="fa fa-youtube-play leftNavIcon"></i> Video</a>
        </li>
        <li>
            <a href="{{ url($cate.'/funny') }}"> <i class="fa fa-american-sign-language-interpreting leftNavIcon"></i>
                Funny
            </a>
        </li>
    </ul>
</div>