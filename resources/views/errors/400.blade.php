@extends('layouts.master')
@section('content')
    <div id="contentRight" class="open" style="overflow-x: hidden; position: relative; margin-left: 800px;">
        <!--videoDetail-->
        <div id="videoDetail" class="contentRight videoDetail">
            <div class="col-lg-12">
                <div class="boxBreadcrumb left w100pt ">
                    <ul class="breadcrumb clearfix inline">
                        <li>
                            <a class="breadcrumbitem"> Trang chủ</a>
                        </li>
                        <li>
                            <span itemprop="name"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                        <li>
                            <a class="breadcrumbitem">Lỗi 404</a>
                        </li>
                    </ul>


                </div>
                <div class="content-404 col-sm-12 col-md-12 col-lg-12">
                    <div class="title-404 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                        <h4>Không tìm thấy trang bạn yêu cầu!</h4>
                        <p>We're sorry, the page you requested cannot be found!</p>
                    </div>
                    <div class="content-child-404 col-sm-9 col-md-9 col-lg-9 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                        <div class="img-404 col-sm-6 col-md-6 col-lg-6">
                            <img src="/dist/image/image-404.png">
                        </div>
                        <div class="tit-content-child-404 col-sm-6 col-md-6 col-lg-6">
                            <h4>Please try the following:</h4>
                            <p>Go back to&nbsp;<a href="#">home page</a></p>
                            <p>Go back to&nbsp;<a href="#">previous page</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <div id="footer" class="footer">
            <div class="contentRight">
                <div class="col-lg-12">
                    <div class="col-lg-7 ungdung">
                        <div class="col-md-5">
                            <h1>Ứng dụng trên Mobile</h1>
                            <p>
                                Ứng dụng được cài đặt trên cả IOS và Android, Windows phone ( miễn phí )
                            </p>
                        </div>
                        <div class="col-md-7 downloadAppBox">
                            <a href="#" class="downloadApp">Tải miễn phí <i class="fa fa-download"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-5 menu">
                        <ul>
                            <li><a href="#">Bảng giá quảng cáo</a></li>
                            <li><a href="#">Liên hệ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#"> Điều khoản</a></li>
                            <li><a href="#"> Thông tin phản hồi</a></li>
                            <li><a href="#"> Hỗ trợ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="w100pt" style="padding-left: 240px; line-height: 50px">
                    <div class="col-lg-12 ">
                        <div class="col-lg-5"><p class="copy left w100pt"> @ 2016 eyePlus</p></div>
                        <div class="col-lg-7">
                            <div class="col-lg-6 ">
                                <ul class="share">
                                    <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> </a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i> </a></li>

                                </ul>
                            </div>
                            <div class="col-lg-6 sendmailALl">
                                <div class="sendmail">
                                    <input type="text" value="Nhập Email của bạn" class="txt">
                                    <button class="bt"></button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@include('article::partials.script')