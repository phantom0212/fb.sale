@extends('layouts.master')
@section('header')
    <link href="{{ asset('fsale/develop/sweetalert/dist/sweetalert.css') }}" rel="stylesheet">
@endsection
@section('title')
    FB.SALE - Bài viết
@endsection
@section('content')
    {{ csrf_field() }}

    <div id="container" class="box-general main_content"><!--Box tổng quát-->
        <div class="container">
            <div class="title-main">Danh sách bài viết <span> ({{($item_count->item_count)}})</span></div>
            <!-- breadcrumb-main -->
            <div class="breadcrumb-main left w100pt">
                <div id="list-post" class="left w100pt">
                    @foreach($items as $item)
                        <div class="news-item">
                            <a href="{{$item->FacebookPostUrl}}" class="img-item"><img src="{{$item->Image}}" alt=""
                                                                                       width="100%"></a>
                            <p class="title-item">{{$item->Content}}</p>
                            <div class="item-line"></div>
                            <div class="item-details">
                                <div class="item-comment"><i class="fa fa-comments-o"></i> <span> 10 </span> bình luận
                                </div>
                                <div class="item-like"><i class="fa fa-hand-o-right"></i> <span> 30K </span> thích</div>
                                <label class="checkbox-inline">
                                    <input class="cb-comment"
                                           <?php if ($item->ShowComment == 1)
                                           {
                                                echo 'checked';
                                           }
                                                ?>
                                           type="checkbox" data-id = "{{ $item->PostId }}" name="check_comment">Ẩn
                                    comment

                                </label>
                                <div class="item-link"><a class="btn btn-default" href="{{$item->FacebookPostUrl}}">Xem
                                        chi tiết <span>f</span></a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="news-pagging">
                <p class="pagging-count">Tổng {{$pages_sum}} trang</p>
                <ul class="pagination">
                    <li>
                        @if($page>0 && $page!=1)
                            <a href="{{url('chuyen-muc/bai-viet/danh-sach?page='.'1'.'')}}" name="prev"
                               aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        @else
                            <a aria-label="Next" name="prev" class="disabled">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        @endif
                    </li>
                    <li>
                        @if($page>0 && $page!=1)
                            <a href="{{url('chuyen-muc/bai-viet/danh-sach?page='.($page-1).'')}}" name="prev"
                               aria-label="Previous">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        @else
                            <a aria-label="Next" name="next" class="disabled">
                                <span aria-hidden="true">&lsaquo;</span>
                            </a>
                        @endif
                    </li>
                    @if($pages_sum<=5)
                        @for($i=1;$i<=$pages_sum;$i++)
                            @if($i == $page)
                                <li class="active"><a
                                            href="{{url('chuyen-muc/bai-viet/danh-sach?page='.$i.'')}}">{{$i}}</a>
                                </li>
                            @else
                                <li><a href="{{url('chuyen-muc/bai-viet/danh-sach?page='.$i.'')}}">{{$i}}</a></li>
                            @endif
                        @endfor
                    @else

                        @if($page<=3) <?php $start = 1; $stop = 5; ?> @elseif(($pages_sum-$page) <=3) <?php $start = $pages_sum - 4; $stop = $pages_sum; ?> @elseif(($page>3)&&($pages_sum-$page) >3) <?php $start = $page - 2; $stop = $page + 2;  ?> @endif
                        @for($i=$start;$i<=$stop;$i++)
                            @if($i == $page)
                                <li class="active"><a
                                            href="{{url('chuyen-muc/bai-viet/danh-sach?page='.$i.'')}}">{{$i}}</a>
                                </li>
                            @else
                                <li><a href="{{url('chuyen-muc/bai-viet/danh-sach?page='.$i.'')}}">{{$i}}</a></li>
                            @endif
                        @endfor
                    @endif
                    <li>
                        @if($page >= $pages_sum)
                            <a aria-label="Next" name="next" class="disabled">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>
                        @else
                            <a href="{{url('chuyen-muc/bai-viet/danh-sach?page='.($page+1).'')}}" aria-label="Next"
                               name="next">
                                <span aria-hidden="true">&rsaquo;</span>
                            </a>

                        @endif
                    </li>
                    <li>
                        @if($page<$pages_sum && $page !=$pages_sum)
                            <a href="{{url('chuyen-muc/bai-viet/danh-sach?page='.($pages_sum).'')}}" aria-label="Next"
                               name="next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        @else
                            <a aria-label="Next" name="next" class="disabled">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        @endif
                    </li>


                </ul>
            </div>

        </div>
    </div>

    <script>
        $('.cb-comment').on('click', function () {
            var id = $(this).attr('data-id');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            $.ajax({
//                dataType: 'json',
                type: 'POST',
                url: '/chuyen-muc/bai-viet/comment',
                async: false,
                data: {
                    'id' : id
                },
                success: function () {
                    swal("Thành Công!" ,"Đã ẩn/hiện comment!","success");
                },
                error: function (e) {
                    swal("Có lỗi!",'Vui lòng kiểm tra lại!',"error");
                }
            });
        })
    </script>
@endsection