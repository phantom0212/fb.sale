<div id="menu2" class="bge1 menu2">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-left">

                    <li class="hoi-thoai">
                        <a href="/encrypt">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>Hội thoại</a>

                    </li>
                    <li class="dropdown bai-viet">
                        <a href="{{ url('/chuyen-muc/bai-viet/danh-sach')}} " {{--class="dropdown-toggle"
                           data-toggle="dropdown"--}}>
                            <i class="fa fa-edit" aria-hidden="true"></i>Bài viết{{--<i class="fa fa-angle-down"
                                                                                    aria-hidden="true"></i>--}}</a>
                        {{--<ul class="dropdown-menu box-support">--}}
                        {{--<li><a href="{{ url('/chuyen-muc/bai-viet/danh-sach')}} "><i class="fa fa-list"--}}
                                                                                         {{--aria-hidden="true"></i> List--}}
                        {{--</a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i> Create</a>--}}
                        {{--</li>--}}
                        {{--<li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> Update </a></li>--}}
                        {{--</ul>--}}
                    </li>
                    <li class="dropdown thong-ke">
                        <a href="{{ url('/cai-dat/thong-ke')}}">
                            <i class="fa fa-bar-chart-o" aria-hidden="true"></i> Thống kê
                        </a>
                    </li>
                    <li class="cai-dat">
                        <a href="{{ url('/cai-dat/cai-dat-chung')}} ">
                            <i class="fa  fa-cog" aria-hidden="true"></i>Cài đặt</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="clearfix"></div>
    <script>
        var currentLocation = window.location.pathname;
        // alert(currentLocation);
        var caidat = '/cai-dat/cai-dat-chung';
        var baiviet = '/chuyen-muc/bai-viet/danh-sach';
        var thongke = '/cai-dat/thong-ke';

        if (currentLocation == caidat) {
            $('.cai-dat').addClass('active');
        }
        if (currentLocation == baiviet) {
            $('.bai-viet').addClass('active');
        }
        if (currentLocation == thongke) {
            $('.thong-ke').addClass('active');
        }
    </script>
</div>