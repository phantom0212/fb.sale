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
            <?php $list = getCategoryChildMenu(81);
            ?>
            @if(count($list)>0)
                <a class="down_children"><span> <i
                                class="fa fa-angle-down" aria-hidden="true"></i></span></a>
            @endif
            <ul>

                @if(count($list)>0)

                    @foreach($list as $item)
                        <?php
                        $child_data = $item;
                        $title = isset($child_data->title) ? $child_data->title : '';
                        $slug = isset($child_data->slug) ? $child_data->slug : '';
                        ?>
                        @if(isset($child_data->title) && $child_data->title != '' && $child_data->id != 81 )
                            <li>
                                <a href="{{ genUrlCategory($item)  }}"><i
                                            class="fa fa-stop leftNavIcon"></i>{{$title }}</a></li>
                            <li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </li>
        <li class="">
            <a href="{{ $cate.'/kham-pha' }}">
                <i class="fa fa-coffee leftNavIcon"></i> Khám phá
            </a>
            <?php $list = getCategoryChildMenu(82); ?>
            @if(count($list)>0)
                <a class="down_children"><span> <i
                                class="fa fa-angle-down" aria-hidden="true"></i></span></a>
            @endif
            <ul>

                @if(count($list)>0)
                    @foreach($list as $item)
                        <?php
                        $child_data = $item;
                        $title = isset($child_data->title) ? $child_data->title : '';
                        $slug = isset($child_data->slug) ? $child_data->slug : '';
                        ?>
                        @if(isset($child_data->title) && $child_data->title != '' && $child_data->id != 82 )
                            <li>
                                <a href="{{ genUrlCategory($item)  }}"><i
                                            class="fa fa-stop leftNavIcon"></i>{{$title }}</a></li>
                            <li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </li>

        <li>
            <a href="{{ url($cate.'/video') }}"> <i class="fa fa-youtube-play leftNavIcon"></i> Video
            </a>
            <?php $list = getCategoryChildMenu(116); ?>
            @if(count($list)>0)
                <a class="down_children"><span> <i
                                class="fa fa-angle-down" aria-hidden="true"></i></span></a>
            @endif
            <ul>

                @if(count($list)>0)
                    @foreach($list as $item)
                        <?php
                        $child_data = $item;
                        $title = isset($child_data->title) ? $child_data->title : '';
                        $slug = isset($child_data->slug) ? $child_data->slug : '';
                        ?>
                        @if(isset($child_data->title) && $child_data->title != '' && $child_data->id != 116 )
                            <li>
                                <a href="{{ genUrlCategory($item)  }}"><i
                                            class="fa fa-stop leftNavIcon"></i>{{$title }}</a></li>
                            <li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </li>
        <li>
            <a href="{{ url($cate.'/funny') }}"> <i class="fa fa-american-sign-language-interpreting leftNavIcon"></i>
                Funny
            </a>
            <?php $list = getCategoryChildMenu(143); ?>
            @if(count($list)>0)
                <a class="down_children"><span> <i
                                class="fa fa-angle-down" aria-hidden="true"></i></span></a>
            @endif
            <ul>

                @if(count($list)>0)
                    @foreach($list as $item)
                        <?php
                        $child_data = $item;
                        $title = isset($child_data->title) ? $child_data->title : '';
                        $slug = isset($child_data->slug) ? $child_data->slug : '';
                        ?>
                        @if(isset($child_data->title) && $child_data->title != '' && $child_data->id != 143 )
                            <li>
                                <a href="{{ genUrlCategory($item)  }}"><i
                                            class="fa fa-stop leftNavIcon"></i>{{$title }}</a></li>
                            <li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </li>
    </ul>
</div>