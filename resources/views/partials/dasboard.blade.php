<div id="header" class="bg-header header">
    <div class="container">
        <div class="col-lg-2 logo-w"><a href=""><img src="{{ asset('fsale/develop/img/logo-fb.sale-1-mautrang.png') }}"> </a></div>
        <nav class="navbar navbar-default col-lg-10 ">
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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-database" aria-hidden="true"></i> Page chat</a>
                        <ul class="dropdown-menu listACC">
                            <li><a href="/encrypt"><i class="fa fa-comments-o" aria-hidden="true"></i> Hội
                                    thoại {{--<span>4</span></a>--}} </li>
                            <li><a href="{{url('/chuyen-muc/bai-viet/danh-sach')}}"><i class="fa fa-edit"
                                                                                       aria-hidden="true"></i> Bài
                                    viết {{--<span>4</span></a>--}}</a>
                            </li>
                            {{--<li><a href="{{url('/cai-dat/thong-ke')}}"><i class="fa fa-bar-chart-o" aria-hidden="true"></i> Thống kê</a>--}}
                            {{--</li>--}}
                            <li><a href="{{url('/cai-dat/cai-dat-chung')}}"><i class="fa fa-cog" aria-hidden="true"></i>
                                    Cài đặt</a></li>
                        </ul>
                    </li>
                    {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<i class="fa fa-paint-brush" aria-hidden="true"></i>Chủ đề</a>--}}
                    {{--<ul class="dropdown-menu list-color">--}}
                    {{--<li><a href="#"><span class="bg_Green"></span></a></li>--}}
                    {{--<li><a href="#"><span class="bg_Red"></span></a></li>--}}
                    {{--<li><a href="#"><span class="bg_Blue"></span></a></li>--}}
                    {{--<li><a href="#"><span class="bg_Orange"></span></a></li>--}}
                    {{--<li><a href="#"><span class="bg_Purple"></span></a></li>--}}
                    {{--<li><a href="#"><span class="bg_Yellow"></span></a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<i class="fa fa-commenting-o" aria-hidden="true"></i>Hỗ trợ</a>--}}
                    {{--<ul class="dropdown-menu box-support">--}}
                    {{--<li><i class="fa fa-fax" aria-hidden="true"></i> 0974745553</li>--}}
                    {{--<li><i class="fa fa-phone" aria-hidden="true"></i> 0974745553</li>--}}
                    {{--<li><i class="fa fa-envelope-o" aria-hidden="true"></i> ngocbich85hd@gmail.com</li>--}}
                    {{--<li><i class="fa fa-skype" aria-hidden="true"></i> ngocbich85hd</li>--}}

                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li><i class="fa fa-map-o" aria-hidden="true"></i> Địa chỉ Tầng 2 - Star Tower, Dương Đình--}}
                    {{--Nghệ, Cầu Giấy--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle true" data-toggle="dropdown">--}}
                    {{--<i class="fa fa-bell" aria-hidden="true"></i>(3)</a>--}}
                    {{--<ul class="dropdown-menu">--}}
                    {{--<!--<div class="arrow-top"></div>-->--}}
                    {{--<div class="lable-n"><h3 class="uiHeaderTitle" aria-hidden="true">Tất cả thông báo</h3>--}}
                    {{--</div>--}}
                    {{--<ul class="list-notifi">--}}
                    {{--<li class=""><a href="#" class="item-notifi">--}}
                    {{--<div class="avatar-acc"><img--}}
                    {{--src="{{ asset('fsale/img-demo/avta.jpg') }}"--}}
                    {{--alt="" ></div>--}}
                    {{--<div class="txt-notifi">--}}
                    {{--<h2><b>Vũ Đình Ngọc</b><span> đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu.</span>--}}
                    {{--</h2>--}}
                    {{--<p>31 phút trước</p>--}}
                    {{--</div>--}}

                    {{--</a></li>--}}
                    {{--<li class=""><a href="#" class="item-notifi">--}}
                    {{--<div class="avatar-acc"><img--}}
                    {{--src="{{ asset('fsale/img-demo/avta.jpg') }}"--}}
                    {{--alt=""></div>--}}
                    {{--<div class="txt-notifi">--}}
                    {{--<h2><b>Vũ Đình Ngọc</b><span> đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu.</span>--}}
                    {{--</h2>--}}
                    {{--<p>31 phút trước</p>--}}
                    {{--</div>--}}

                    {{--</a></li>--}}
                    {{--<li class=""><a href="#" class="item-notifi">--}}
                    {{--<div class="avatar-acc"><img--}}
                    {{--src="{{ asset('fsale/img-demo/avta.jpg') }}"--}}
                    {{--alt=""></div>--}}
                    {{--<div class="txt-notifi">--}}
                    {{--<h2><b>Vũ Đình Ngọc</b><span> đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu.</span>--}}
                    {{--</h2>--}}
                    {{--<p>31 phút trước</p>--}}
                    {{--</div>--}}

                    {{--</a></li>--}}
                    {{--<li class=""><a href="#" class="item-notifi">--}}
                    {{--<div class="avatar-acc"><img--}}
                    {{--src="{{ asset('fsale/img-demo/avta.jpg') }}"--}}
                    {{--alt=""></div>--}}
                    {{--<div class="txt-notifi">--}}
                    {{--<h2><b>Vũ Đình Ngọc</b><span> đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu.</span>--}}
                    {{--</h2>--}}
                    {{--<p>31 phút trước</p>--}}
                    {{--</div>--}}

                    {{--</a></li>--}}
                    {{--<li class=""><a href="#" class="item-notifi">--}}
                    {{--<div class="avatar-acc"><img--}}
                    {{--src="{{ asset('fsale/img-demo/avta.jpg') }}"--}}
                    {{--alt=""></div>--}}
                    {{--<div class="txt-notifi">--}}
                    {{--<h2><b>Vũ Đình Ngọc</b><span> đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu.</span>--}}
                    {{--</h2>--}}
                    {{--<p>31 phút trước</p>--}}
                    {{--</div>--}}

                    {{--</a></li>--}}
                    {{--<li class=""><a href="#" class="item-notifi">--}}
                    {{--<div class="avatar-acc"><img--}}
                    {{--src="{{ asset('fsale/img-demo/avta.jpg') }}"--}}
                    {{--alt=""></div>--}}
                    {{--<div class="txt-notifi">--}}
                    {{--<h2><b>Vũ Đình Ngọc</b><span> đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu.</span>--}}
                    {{--</h2>--}}
                    {{--<p>31 phút trước</p>--}}
                    {{--</div>--}}

                    {{--</a></li>--}}
                    {{--<li class=""><a href="#" class="item-notifi">--}}
                    {{--<div class="avatar-acc"><img--}}
                    {{--src="{{ asset('fsale/img-demo/avta.jpg') }}"--}}
                    {{--alt=""></div>--}}
                    {{--<div class="txt-notifi">--}}
                    {{--<h2><b>Vũ Đình Ngọc</b><span> đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu.</span>--}}
                    {{--</h2>--}}
                    {{--<p>31 phút trước</p>--}}
                    {{--</div>--}}

                    {{--</a></li>--}}
                    {{--<li class=""><a href="#" class="item-notifi">--}}
                    {{--<div class="avatar-acc"><img--}}
                    {{--src="{{ asset('fsale/img-demo/avta.jpg') }}"--}}
                    {{--alt=""></div>--}}
                    {{--<div class="txt-notifi">--}}
                    {{--<h2><b>Vũ Đình Ngọc</b><span> đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu, đã gửi cho bạn một yêu cầu.</span>--}}
                    {{--</h2>--}}
                    {{--<p>31 phút trước</p>--}}
                    {{--</div>--}}

                    {{--</a></li>--}}
                    {{--</ul>--}}
                    {{--<div class="view-more-no"><a class="seeMore" href="#"--}}
                    {{--accesskey="5"><span>Xem tất cả</span></a>--}}
                    {{--</div>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<i class="fa fa-database" aria-hidden="true"></i> Quản lý chung--}}
                    {{--<i class="fa fa-angle-down" aria-hidden="true"></i></a>--}}
                    {{--<ul class="dropdown-menu listACC">--}}
                    {{--<li><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> Quản lý cấu hình</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i> Quản lý mẫu in <span>4</span></a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Quản lý người dùng</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Cài đặt</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Thoát</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="dropdown store-ct">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--Mỹ phẩm 1--}}
                    {{--<div class="avatar-acc-main right"><img src="{{asset('fsale/img-demo/avta.jpg')}}" alt=""></div>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu listACC">--}}


                    {{--<li><a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i> Quản lý trang</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-bell" aria-hidden="true"></i> Thông báo <span>4</span></a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Nhật ký hoạt động</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Cài đặt</a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Thoát</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    @if(\Illuminate\Support\Facades\Session::has('user'))
                        <li class="dropdown store-acc">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{--<div class="avatar-acc-main"><img--}}
                                {{--src="{{ asset('fsale/develop/img/logo-w.png') }}"--}}
                                {{--alt=""></div>--}}
                                {{\Illuminate\Support\Facades\Session::get('user')}}<i class="fa fa-angle-down"
                                                                                       aria-hidden="true"></i></a>
                            <ul class="dropdown-menu listACC">
                                {{--<li><h2> Danh sách của bạn</h2></li>--}}

                                {{--<li><a href="#">--}}
                                {{--<div class="avatar-acc-main"><img--}}
                                {{--src="{{ asset('fsale/develop/img/logo-w.png') }}"--}}
                                {{--alt=""></div>--}}
                                {{--Kinh doanh Mỹ phẩm <span>4</span></a></li>--}}
                                {{--<li><a href="#">--}}
                                {{--<div class="avatar-acc-main"><img--}}
                                {{--src="{{ asset('fsale/develop/img/logo-w.png') }}"--}}
                                {{--alt=""></div>--}}
                                {{--Gian Hàng Ba Đình <span>4</span></a></li>--}}
                                {{--<li><a href="#">--}}
                                {{--<div class="avatar-acc-main"><img--}}
                                {{--src="{{ asset('fsale/develop/img/logo-w.png') }}"--}}
                                {{--alt=""></div>--}}
                                {{--Kinh doanh giầy <span>4</span></a></li>--}}
                                {{--<li><a href="#">--}}
                                {{--<div class="avatar-acc-main"><img--}}
                                {{--src="{{ asset('fsale/develop/img/logo-w.png') }}"--}}
                                {{--alt=""></div>--}}
                                {{--Kinh doanh Quần áo <span>4</span></a></li>--}}
                                {{--<li><a href="#">Xem thêm ...</a></li>--}}
                                {{--<li role="separator" class="divider"></li>--}}
                                {{--<li><a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Tạo cửa hàng</a></li>--}}
                                <li><a href="{{url('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> Thoát</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="clearfix"></div>
</div>