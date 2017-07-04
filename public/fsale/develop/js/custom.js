/**
 * Created by Phantom on 12/30/2016.
 */
window.onload = function () {

    //Check File API support
    if (window.File && window.FileList && window.FileReader) {
        var filesInput = document.getElementById("files");
        if (filesInput) {
            filesInput.addEventListener("change", function (event) {

                var files = event.target.files; //FileList object
                var output = document.getElementById("result");

                for (var i = 0; i < files.length; i++) {
                    var file = files[i];
                    var index = 1;

                    //Only pics
                    if (!file.type.match('image'))
                        continue;

                    var picReader = new FileReader();

                    picReader.addEventListener("load", function (event) {

                        var picFile = event.target;

                        var div = document.createElement("div");

                        div.innerHTML = "<img onclick='showEditor(" + index + ");' class='thumbnail' src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/>";

                        output.insertBefore(div, null);
                        index++;

                    });

                    //Read the image
                    picReader.readAsDataURL(file);
                }

            });
        }
    }
    else {
        console.log("Your browser does not support File API");
    }
}

function showEditor(index) {
    if (index == 1) {
        $('form').slideToggle(function () {
            $(this).toggleClass('in out');
        });
    } else if (index == 2) {
        $('form').slideToggle(function () {
            $(this).toggleClass('in out');
        });
    } else if (index == 3) {
        $('form').slideToggle(function () {
            $(this).toggleClass('in out');
        });
    } else if (index == 4) {
        $('form').slideToggle(function () {
            $(this).toggleClass('in out');
        });
    } else if (index == 5) {
        $('form').slideToggle(function () {
            $(this).toggleClass('in out');
        });
    }
}

$(document).ready(function () {

    // Gán class active khi giá trị của Label thay đổi (1 hoặc 0)
    if (parseInt($('.switch1').children('input').val()) === 1) {
        $('.switch1').children('div').addClass('active');
    }else{
        $('.switch1').children('input').val('0');
    }
    if (parseInt($('.switch2').children('input').val()) === 1) {
        $('.switch2').children('div').addClass('active');
    }else{
        $('.switch2').children('input').val('0');
    }
    if (parseInt($('.switch3').children('input').val()) === 1) {
        $('.switch3').children('div').addClass('active');
    }else{
        $('.switch3').children('input').val('0');
    }
    if (parseInt($('.switch4').children('input').val()) === 1) {
        $('.switch4').children('div').addClass('active');
    }else{
        $('.switch4').children('input').val('0');
    }
    if (parseInt($('.switch5').children('input').val()) === 1) {
        $('.switch5').children('div').addClass('active');
    }else{
        $('.switch5').children('input').val('0');
    }
    if (parseInt($('.switch6').children('input').val()) === 1) {
        $('.switch6').children('div').addClass('active');
    }else{
        $('.switch6').children('input').val('0');
    }


    // Show class khi click vào button
            $('.btn-show').click(function () {
                $('.btn-show').click(function () {
                    //collapse menu children after click on button
                    $('.btn-show-menu').slideToggle(function () {
                        $(this).toggleClass('in out');
                    });

                    //remove class in and add class out
                    $(this).siblings().find('.btn-show-menu').slideUp(function () {
                        $(this).removeClass('in').addClass('out');
                    });
                });
            });

            // Click vào label switch sẽ chuyển đổi trạng thái active
            $('.switch').on('click', function () {
                if ($(this).children('input').val() == 0) {
                    $(this).children('.slide-round').addClass('active');
                    $(this).children('input').val('1');
                } else {
                    $(this).children('.slide-round').removeClass('active');
                    $(this).children('input').val('0');
        }
    });

//            function delete Label
    $('.btnDelete').on('click', function () {
        var id = $(this).val();
        // alert(id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });
        $.ajax({
            type: 'post',
            url: 'cai-dat-chung/delete',
            data: "id=" + id,
            success: function () {

                // swal("Xóa thành công!");
                // window.location.reload();
                 $('#del'+id).remove();
            }
        });
    });

    // Disable nút Save sau khi submit lên( trường hợp click liên tục )
    $(".form-submit").submit(function () {
        $(".addSubmit").attr("disabled", true);
        return true;
    });



//            function save setting
    $('#submit').on('click', function () {
        var inbox = parseInt($('.switch1').children('input').val());
        var sound = parseInt($('.switch2').children('input').val());
        var unread = parseInt($('.switch3').children('input').val());
        var like = parseInt($('.switch4').children('input').val());
        var order = parseInt($('.switch5').children('input').val());
        var comment = parseInt($('.switch6').children('input').val());

        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            }
        });
        $.ajax({
            dataType: 'json',
            type: 'POST',
            url: 'cai-dat-chung/update',
            async: false,
            data: {
                'inbox': inbox,
                'sound': sound,
                'unread': unread,
                'like': like,
                'order': order,
                'comment': comment
            },
            success: function () {
                swal("Cập nhật thành công!");
                window.location.reload();
            }
        });
    })

});

