@extends('user::layouts.master')

@section('title')
    FB.SALE - Đăng nhập
    @endsection
@section('content')

    <div class="mainLogin main_content">
        <div class="boxLogin">
            <header class="txtC txtB">
                <div class="clip"></div>
                <div class="clipLine"></div>
            </header>
            <div class="col-lg-7 info-PM">
                <a class="logo dpib ovh" tabindex="-1">
                    <img src="{{ asset('fsale/develop/img/logo-fb.sale.png') }}" alt="Salesmanager" title="Sales Manager">
                </a>
                <h1>Để quản lý bán hàng mọi lúc, mọi nơi, trên mọi thiết bị.</h1>
                <p>Giải pháp bán hàng qua SalesManager toàn diện, hiệu quả. Quản lý danh sách khách hàng, tin nhắn, bình
                    luận, tình trạng đơn hàng, gửi hàng nhanh chóng trên web và di động</p>
            </div>
            <form class="col-lg-5" action="{{url('/login')}}" method="POST" class="form-submit">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                <section class="loginFr ovh vi-VN">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                                      data-toggle="tab">Đăng Nhập</a></li>
                            {{--<li role="presentation"><a href="#profile" aria-controls="profile" role="tab"--}}
                                                       {{--data-toggle="tab">Đăng--}}
                                    {{--Ký</a></li>--}}
                        </ul>

                        <!-- Tab panes -->
                        @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                        <div class="tab-content import-Info">
                            <div role="tabpanel" class="tab-pane active" id="home">

                                <div class="form-group">
                                    <div class="w100pt input-group">
                                        <div class="label">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <input type="email" class="form-control" name="username"
                                               placeholder="Email: ngocbich85hd@gmail.com" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="w100pt input-group">
                                        <div class="label">
                                            <i class="fa fa-key" aria-hidden="true"></i>
                                        </div>
                                        <input type="password" class="form-control" name="password"
                                               placeholder="Enter your password" required>
                                    </div>
                                    @if (Session::has('message'))
                                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                                    @endif
                                </div>

                                {{--<div class="checkbox left w100pt">--}}
                                    {{--<input id="checkbox1" class="styled" type="checkbox">--}}
                                    {{--<label for="checkbox1">Ghi nhớ mật khẩu</label>--}}
                                {{--</div>--}}

                                <div class="form-group boxBt">
                                    <button type="submit" class="btn bt-login bg-green clfff">Đăng nhập
                                    </button>
                                    {{--<a href="#" class="left cl-green bt-foget">Quên mật khẩu ?</a>--}}
                                    {{--<a href="#" class="right cl-green bt-resgiter">Đăng ký tại đây !</a>--}}

                                    {{--<div class="left w100pt logigFacebook">--}}
                                        {{--<h3>Hoặc đăng nhập bằng tài khoản sau:</h3>--}}
                                        {{--<button type="submit" class="btn bt-login-face">Đăng nhập Facebook--}}
                                        {{--</button>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <div class="w100pt input-group">
                                            <div class="label">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control"
                                                   placeholder="Tên đăng nhập"> <span> *</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="w100pt input-group">
                                            <div class="label">
                                                <i class="fa fa-key" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control"
                                                   placeholder="Nhập mật khẩu"><span> *</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="w100pt input-group">
                                            <div class="label">
                                                <i class="fa fa-key" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control"
                                                   placeholder="Nhập lại mật khẩu"><span> *</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="w100pt input-group">
                                            <div class="label">
                                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control"
                                                   placeholder="Tên cửa hàng"><span> *</span>

                                        </div>
                                        <p>https://quanao.salesmanager.com</p>
                                    </div>
                                    <div class="form-group">
                                        <div class="w100pt input-group">
                                            <div class="label">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control"
                                                   placeholder="Điện thoại"><span> *</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="w100pt input-group">
                                            <div class="label">
                                                <i class="fa fa-map-o" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control"
                                                   placeholder="Địa chỉ gian hàng của bạn "><span> *</span>

                                        </div>
                                    </div>


                                    <div class="form-group boxBt">
                                        <button type="submit" class="btn bt-login bg-green clfff">Đăng ký
                                        </button>


                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </section>
            </form>
        </div>
    </div>
@endsection