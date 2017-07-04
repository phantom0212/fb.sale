@extends('layouts.master')
@section('header')
    <script type="text/javascript" src="{{ asset('fsale/develop/js/chart/chart.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fsale/develop/js/chart/hightchart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fsale/develop/js/chart/data.js') }}"></script>
    <link href="{{ asset('fsale/develop/clock/daterangepicker.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('fsale/develop/clock/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fsale/develop/clock/daterangepicker.js') }}"></script>

@endsection
@section('content')
    <div class="container main_content">
        <div id="content-statistics">
            <div id="button-top">
                <div class="button-left">
                    <a href="">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <p>Thống kê thổng quát</p>
                    </a>
                </div>
                <div class="button-left">
                    <a href="">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <p>Chi tiết theo giờ</p>
                    </a>
                </div>
                <div class="button-left">
                    <a href="">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <p>Tải về</p>
                    </a>
                </div>
                <input type="text" name="daterange" value="01/01/2017 1:30 PM - 01/01/2017 2:00 PM" />
            </div>
            <!-- biểu đồ hình cột -->
            <h3>Thống kê số lượng trả lời</h3>
            <div id="column-chart">
                <div id="column-chart-left">
                    <div class="info_count">Số lượng</div>
                    <canvas id="myChart"></canvas>
                    <div class="info_count info_day">Ngày</div>
                </div>
                <div id="note-chart">
                    <input type="hidden" class="data1" value="5">
                    <input type="hidden" class="data2" value="9">
                    <input type="hidden" class="data3" value="10">
                    <input type="hidden" class="data4" value="26">
                </div>
            </div>
            <!-- end biểu đồ cột -->
            <div>
                <!-- biểu đồ hình tròn -->
                <div id="circle-chart">
                    <h3>Tỉ lệ trả lời theo nhân viên</h3>
                    <canvas id="circle"></canvas>
                    <input type="hidden" name="user" value="50">
                    <input type="hidden" name="user" value="50">
                    <input type="hidden" name="user" value="50">
                </div>
                <!-- end biểu đồ hình tròn -->

                <!-- biểu đồ cột ngang -->
                <div id="transverse">
                    <h3>Thời gian trả lời trung bình</h3>
                    <div id="transverse-chart"></div>
                </div>
                <!-- end biểu đồ cột ngang -->

            </div>
        </div>
    </div>
    <!-- end content -->
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('fsale/develop/js/chart/chart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fsale/develop/js/chart/clock.js') }}"></script>
@endsection