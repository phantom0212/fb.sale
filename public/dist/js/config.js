$(document).ready(function () {
    $("#start_date_message").datetimepicker({
        timepicker: false,
        format: "Y-m-d"
    });
    $("#end_date_message").datetimepicker({
        timepicker: false,
        format: "Y-m-d"
    });
    $("#start_date_order").datetimepicker({
        timepicker: false,
        format: "Y-m-d"
    });
    $("#end_date_order").datetimepicker({
        timepicker: false,
        format: "Y-m-d"
    });

    $("select[id=slShopChart]").select2();
});
function chart(type) {
    var path = '';
    var start_date = '';
    var end_date = '';
    var lables = [];
    var shopID = $('#slShopChart').val();
    if (shopID == null) {
        alert('Bạn chưa chọn Shop để thống kê !');
        return false;
    }
    if (type == 'order') {
        path = 'thong-ke/order';
        start_date = $('#start_date_order').val();
        end_date = $('#end_date_order').val();
        lables = ['Tổng', 'Xử lí đơn hàng', 'Hoàn thành', 'Tổng tiền', 'Tổng số tiền nhận', 'Tiền phí'];
    } else {
        path = 'thong-ke/message';
        start_date = $('#start_date_message').val();
        end_date = $('#end_date_message').val();
        lables = ['Tổng', 'Bình luận', 'Tin nhắn', 'Bài viết', 'Bài viết có bình luận', 'Bài viết có trả lời', 'Tin nhắn nhận', 'Tin nhắn gửi'];
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('input[name="_token"]').val()
        }
    });
    $.ajax({
        type: 'post',
        url: path,
        data: {
            'id': shopID,
            'start_date': start_date,
            'end_date': end_date
        },
        success: function (obj) {
            if (obj !== null) {
                var dataValue = [];
                obj = jQuery.parseJSON(obj);
                $.each(obj, function (index, value) {
                    dataValue.push(value);
                });
                if (type == 'order') {
                    loadChart(lables, dataValue, 'order');
                } else {
                    loadChart(lables, dataValue, 'message');
                }
            } else {
                //{"total":58,"comment":44,"mess":14,"post":5,"postHaveComment":33,"postHaveReply":16,"messReceive":15,"messReply":1}
            }
        }
    });
}

function loadChart(lables, dataValue, type) {
    var data = {
        labels: lables,
        datasets: [
            {
                label: "My Second dataset",
                fillColor: "rgba(151, 187, 205, 0.5)",
                strokeColor: "rgba(151, 187, 205, 0.8)",
                highlightFill: "rgba(151, 187, 205, 0.75)",
                highlightStroke: "rgba(151, 187, 205, 1)",
                data: dataValue
            }
        ]
    };
    if (type == 'message') {
        var ctx_1 = document.getElementById("myChart-1").getContext("2d");
        ctx_1.canvas.width = 900;
        ctx_1.canvas.height = 400;
        var myChart = new Chart(ctx_1).Bar(data);
    } else {
        var ctx_2 = document.getElementById("myChart-2").getContext("2d");
        ctx_2.canvas.width = 800;
        ctx_2.canvas.height = 400;
        var myChart = new Chart(ctx_2).Bar(data);
    }
}