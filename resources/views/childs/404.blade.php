@extends('layouts.master')
@section('title', 'Công thức nấu ăn ngon mỗi ngày, địa điểm ăn uống yêu thích')
@section('description', 'Công thức nấu ăn ngon mỗi ngày, địa điểm ăn uống yêu thích')
@section('image', url()->to('/').'/images/new.png')
@section('content')
    <div id="contentRight">
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
                    <div class="title-404 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2" >
                        <h4>Không tìm thấy trang bạn yêu cầu!</h4>
                        <p>We're sorry, the page you requested cannot be found!</p>
                    </div>
                    <div class="content-child-404 col-sm-9 col-md-9 col-lg-9 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                        <div class="img-404 col-sm-6 col-md-6 col-lg-6">
                            <img src="dist/image/image-404.png">
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
        @include('partials.footer')
    </div>
@stop

