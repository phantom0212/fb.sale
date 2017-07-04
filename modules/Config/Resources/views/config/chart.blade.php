@extends('layouts.master')
@section('header')
<link href="{{ asset('fsale/dist/css/bootstrap-colorpicker.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('fsale/dist/js/bootstrap-colorpicker.js') }}"></script>
@endsection
@section('content')
<div class="container main_content">
    {{ csrf_field() }}
    <div id="content-setting">
        <ul id="content-top">
            <li class="active">
                <a href="javascript:void(0);">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <p>Top 20 Shop mới nhất: </p>
                </a>
            </li>
            <select id="slShopChart">
                @if(!empty($shops))
                @foreach($shops as $shop)
                <option value="{{$shop->ShopId}}">{{$shop->PageName}}</option>
                @endforeach
                @endif
            </select>
        </ul>


        <ul id="content-top">
            <li class="active">
                <a href="javascript:void(0);">
                    <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                    <p>Thống kê số tin nhắn và trả lời (tin nhắn, bình luận)</p>
                </a>
            </li>
            <label>Ngày bắt đầu: </label>
            <input type="text" class="in_datepicker" name="in-start-date-message" id="start_date_message" value="" />
            <label>Ngày kết thúc: </label>
            <input type="text" class="in_datepicker" name="in-end-date-message" id="end_date_message" value="" />
            <button type="button" id="btn-chart-message" onclick="javascript:chart('message');">Thống kê</button>
        </ul>

        <div id="content-bottom" class="left w100pt">
            <div class="row">
                <div style="width: 90%;margin: 0px auto;">
                    <canvas id="myChart-1"></canvas>
                    <p class="test"></p>
                </div>
                <div id="js-legend" class="chart-legend"></div>
            </div>
        </div>
        <!-- end content right -->

        <ul id="content-top">
            <li class="active">
                <a href="javascript:void(0);">
                    <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                    <p>Thống kê đơn hàng</p>
                </a>
            </li>
            <label>Ngày bắt đầu: </label>
            <input type="text" class="in_datepicker" name="in-start-date-order" id="start_date_order" value="" />
            <label>Ngày kết thúc: </label>
            <input type="text" class="in_datepicker" name="in-end-date-order" id="end_date_order" value="" />
            <button type="button" id="btn-chart-order" onclick="javascript:chart('order');">Thống kê</button>
        </ul>
        <div id="content-bottom" class="left w100pt">
            <div class="row">
                <div style="width: 90%;margin: 0px auto;">
                    <canvas id="myChart-2"></canvas>
                    <p class="test"></p>
                </div>
                <div id="js-legend" class="chart-legend"></div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .in_datepicker{border: 1px solid #ddd;padding: 5px;border-radius: 4px;margin:0px 10px;-webkit-border-radius: 4px;-moz-border-radius: 4px;}
    #btn-chart-message,#btn-chart-order{background: #2a6e05;border: 1px solid #2a6e05;padding: 4px 10px;color: #fff;border-radius: 2px;-webkit-border-radius: 2px;-moz-border-radius: 2px;}
    #slShopChart{width: 20%;}
</style>
<link rel="stylesheet" href="{{ asset('dist/css/jquery.datetimepicker.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/select2.min.css') }}">
<script type="text/javascript" src="{{ asset('dist/js/jquery.datetimepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/js/chartjs.js?v=1.1') }}"></script>
<script type="text/javascript" src="{{ asset('dist/js/select2.min.js?v=1.0') }}"></script>
<script type="text/javascript" src="{{ asset('dist/js/config.js?v=1.3') }}"></script>
@endsection