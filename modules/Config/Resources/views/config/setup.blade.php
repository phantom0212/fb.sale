@extends('layouts.master')
@section('title')
    FB.SALE - Cài đặt
@endsection
@section('header')
    <link href="{{ asset('fsale/dist/css/bootstrap-colorpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('fsale/develop/sweetalert/dist/sweetalert.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('fsale/dist/js/bootstrap-colorpicker.js') }}"></script>
@endsection
@section('content')
    <div class="container main_content">
        <div id="content-setting">
            <!-- content top -->
            <ul id="content-top">
                <li class="active">
                    <a href="">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <p>Cài đặt chung</p>
                    </a>
                </li>

                {{--<li class="li-help">--}}
                {{--<a href="">--}}
                {{--<i class="fa fa-clock-o" aria-hidden="true"></i>--}}
                {{--<p>Hỗ trợ trả lời</p>--}}
                {{--</a>--}}
                {{--</li>--}}
                <li id="li-save">
                    <a href="" type="submit" id="submit">
                        <p>Lưu</p>
                    </a>
                </li>
            </ul>
            <!-- end content top -->

            <div id="content-bottom" class="left w100pt">
                <div class="row">
                    <!-- content left -->
                    <div id="content-left-radio-button" class="left col-lg-6">
                        <h3>Cài đặt các thông tin sau:</h3>
                        <div id="list-detail-radio-button">
                            @if(count($checks)>0)
                                    @foreach($checks as $check)
                                        <?php
                                        $newMess = isset($check->NewMessageNotification) ? $check->NewMessageNotification : '';
                                        $sound = isset($check->NotificationSound) ? $check->NotificationSound : '';
                                        $priority = isset($check->NewMessagePriority) ? $check->NewMessagePriority : '';
                                        $like = isset($check->NewCommentLike) ? $check->NewCommentLike : '';
                                        $order = isset($check->AutoCreateOrder) ? $check->AutoCreateOrder : '';
                                    $comment = isset($check->AutoHideComment) ? $check->AutoHideComment : '';
                                    ?>
                                    <ul>
                                        <li>
                                            <div class="radio-button">
                                                <div class="switch switch1">
                                                    <div class="slide-round fa fa-circle"></div>
                                                    <input type="hidden" name="inbox"
                                                           value="{{$newMess}}">
                                                </div>
                                            </div>
                                            <p>Thông báo tin nhắn mới <i class="fa fa-question-circle"
                                                                         aria-hidden="true"
                                                                         title="Bật tắt thông báo khi có tin nhắn mới đến."></i>
                                            </p>

                                        </li>
                                        <li>
                                            <div class="radio-button">
                                                <div class="switch switch2">
                                                    <div class="slide-round fa fa-circle"></div>
                                                    <input type="hidden" name="sound"
                                                           value="{{$sound}}">
                                                </div>
                                            </div>
                                            <p>Âm thanh thông báo <i class="fa fa-question-circle" aria-hidden="true"
                                                                     title="Bật tắt âm thanh khi có thông báo mới đến."></i>
                                            </p>

                                        </li>
                                        <li>
                                            <div class="radio-button">
                                                <div class="switch switch3">
                                                    <div class="slide-round fa fa-circle"></div>
                                                    <input type="hidden" name="unread"
                                                           value="{{$priority}}">
                                                </div>
                                            </div>
                                            <p>Hiển thị hội thoại chưa đọc trên đầu
                                                <i class="fa fa-question-circle" aria-hidden="true"
                                                   title="Bật tắt chế độ hiển thị hội thoại chưa đọc lên trên đầu."></i>
                                            </p>
                                        </li>
                                        <li>
                                            <div class="radio-button">
                                                <div class="switch switch4">
                                                    <div class="slide-round fa fa-circle"></div>
                                                    <input type="hidden" value="{{$like}}"
                                                           name="like">
                                                </div>
                                            </div>
                                            <p>Tự động nhấn thích khi trả lời comment <i class="fa fa-question-circle"
                                                                                         aria-hidden="true"
                                                                                         title="Bật tắt chế độ tự động nhấn thích khi trả lời comment của khách hàng."></i>
                                            </p>

                                        </li>
                                        <li>
                                            <div class="radio-button">
                                                <div class="switch switch5">
                                                    <div class="slide-round fa fa-circle"></div>
                                                    <input type="hidden" value="{{$order}}"
                                                           name="order">
                                                </div>
                                            </div>
                                            <p>Tự động tạo đơn hàng<i class="fa fa-question-circle" aria-hidden="true"
                                                                      title="Bật tắt chế độ tự động tạo đơn hàng cho khách."></i>
                                            </p>

                                        </li>
                                        <li>
                                            <div class="radio-button">
                                                <div class="switch switch6">
                                                    <div class="slide-round fa fa-circle"></div>
                                                    <input type="hidden" value="{{$comment}}"
                                                           name="comment">
                                                </div>
                                            </div>
                                            <p>Tự động ẩn bình luận <i class="fa fa-question-circle" aria-hidden="true"
                                                                       title="Bật tắt chế độ tự động ẩn các bình luận trên bài viết."></i>
                                            </p>
                                        </li>

                                    </ul>
                                @endforeach

                            @endif

                        </div>
                    </div>
                    <!-- end content left -->
                    <!-- content right -->
                    <div id="content-right" class="col-lg-6">
                        <div id="tag-talk">
                            <div id="tag-talk-left">
                                <p>Thẻ hội thoại</p>
                                <i>({{count($items)}}/12)</i>
                            </div>
                            <div id="add-delete">
                                <ul>
                                    <li>
                                        @if(count($items)>=12)
                                            <button class="btAdd disabled">Thêm</button>
                                        @else
                                            <button class="btAdd " data-toggle="modal" data-target=".cateModal">Thêm
                                            </button>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal fade box-popup cateModal" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{url('/cai-dat/cai-dat-chung/add')}}" method="POST" class="form-submit">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="clip"></div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title"><span cl            ass="fa fa-list-ul"></span>Thêm danh mục
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group row form-pad">
                                                <label for="input">Tên hội thoại</label>
                                                <div>
                                                    <input type="text" class="form-control" id="input" name="label"
                                                           placeholder="Nhập tên hội thoại" required>
                                                </div>
                                            </div>
                                            <div class="form-group row form-pad">
                                                <label for="input">Mã màu</label>
                                                <input name="color" id="cp1" type="text" class="form-control"
                                                       placeholder="Chọn màu: #000000" required/>
                                                <script>
                                                    $(function () {
                                                        $('#cp1').colorpicker();
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><span
                                                        class="fa fa-ban"></span>Hủy
                                            </button>
                                            <button type="submit" class="btn btn-success addSubmit"><span
                                                        class="fa fa-save"></span>Lưu
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="modal fade box-popup editModal" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">

                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="clip"></div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title"><span class="fa fa-list-ul"></span>Sửa danh mục
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row form-pad">
                                            <label for="input">Tên hội thoại</label>
                                            <div>
                                                <input type="text" class="form-control labelEdit"  data-val = "" name="labelEdit"
                                                       placeholder="Nhập tên hội thoại" required>
                                            </div>
                                        </div>
                                        <div class="form-group row form-pad">
                                            <label for="input">Mã màu</label>
                                            <input name="colorEdit"  type="text" class="form-control cp2 colorEdit" data-val = ""
                                                   placeholder="Chọn mã màu" required/>
                                            <script>
                                                $(function () {
                                                    $('.cp2').colorpicker();
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span
                                                    class="fa fa-ban"></span>Hủy
                                        </button>
                                        <button class="btn btn-success" data-val="" id="editSubmit" onclick="javascript:saveItem();"><span class="fa fa-save"></span>Lưu
                                        </button>
                                        <input type="hidden" value="" name="item-update" id="item-update" />
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr id="creature">
                        <div id="infor-color">
                            <div id="color-left">
                                <ul>
                                    @foreach($items as $item)
                                        <li class="color-items" id="del{{$item->LabelId}}">
                                            <i id="xanh-la-cay" style="background:#{{$item->LabelColor}};"></i>
                                            <span hidden>{{$item->LabelColor}}</span>
                                            <input onclick="javascript:submitColor(this);" class="labelInput" value="{{$item->LabelName}}"
                                                   data-toggle="modal" readonly
                                                   data-target=".editModal" data-id="{{$item->LabelId}}">
                                            <input class="hiddenInput" type="hidden" value="{{$item->LabelId}}">
                                            <button class="btnDelete fa fa-remove btn btn-default" value="{{$item->LabelId}}"></button>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content right -->
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        function submitColor(tag){
            var id = $(tag).siblings('input').val();
            var color = '#' + $(tag).siblings('span').text();
            var name = $(tag).val();

            var label_name =  $('.labelEdit').attr('id','label'+ id);
            var color_name =  $('.colorEdit').attr('id','color'+ id);

            var inputname = $(label_name).val(name);
            var inputcolor = $(color_name).val(color);

            $('#item-update').val(id);
        }

        function saveItem() {
            var id_label = $('#item-update').val();
            var name2 = $('#label'+id_label).val();
            var color2 = $('#color'+id_label).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });
            $.ajax({
                type: 'post',
                url: 'cai-dat-chung/edit',
                data: {
                    'id': id_label,
                    'name': name2,
                    'color': color2
                },
                success: function () {
                  // swal("Cập nhật thành công!");
                    window.location.reload();
                }
            });
        }
    </script>
    @endsection