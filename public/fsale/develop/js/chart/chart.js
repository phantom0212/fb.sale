var ctx = document.getElementById("myChart").getContext('2d');
var dt1 = $('.data1').val();
var dt2 = $('.data2').val();
var dt3 = $('.data3').val();
var dt4 = $('.data4').val();

var data = {
    labels: ["22.10", "23.10", "24.10", "25.10"],
    datasets: [
        {
            label: "Khách hàng mới",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#33cc99",
            borderColor: "#33cc99",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "#33cc99",
            pointBackgroundColor: "#fff",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "#33cc99",
            pointHoverBorderColor: "#33cc99",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 5,
            data: [dt1, dt2, dt3, dt4],
            spanGaps: false
        },
        {
            label: "Tin nhắn bởi khách hàng",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#cc99cc",
            borderColor: "#cc99cc",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "#cc99cc",
            pointBackgroundColor: "#cc99cc",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "#cc99cc",
            pointHoverBorderColor: "#cc99cc",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 5,
            data: [7, 20, 25, 20],
            spanGaps: false
        },
        {
            label: "Tin nhắn bởi trang",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#336600",
            borderColor: "#336600",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "#336600",
            pointBackgroundColor: "#336600",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "#336600",
            pointHoverBorderColor: "#336600",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 5,
            data: [17, 25, 20, 22],
            spanGaps: false
        },
        {
            label: "Bình luận bởi trang",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "#ff0000",
            borderColor: "#ff0000",
            borderCapStyle: 'butt',
            borderDash: [],
            borderDashOffset: 0.0,
            borderJoinStyle: 'miter',
            pointBorderColor: "#ff0000",
            pointBackgroundColor: "#ff0000",
            pointBorderWidth: 1,
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "#ff0000",
            pointHoverBorderColor: "#ff0000",
            pointHoverBorderWidth: 2,
            pointRadius: 1,
            pointHitRadius: 5,
            data: [0, 15, 5, 13],
            spanGaps: false
        }
    ]
};
var myChart = new Chart(ctx, {
    type: 'line',
    data: data
});

// biểu đồ hình tròn
var bdht = document.getElementById("circle").getContext('2d');
var circle = new Chart(bdht, {
    type: 'doughnut',
    data: {
        labels: ["Đoàn Hà", "Ngọc Bích", "Người nào đó"],
        datasets: [{
            backgroundColor: [
                "#336600",
                "#ff0000",
                "#66cccc"
            ],
            data: [12, 20, 78]
        }]
    }
});

// biều đồ hình cột
$(function () {
    // Create the chart
    Highcharts.chart('transverse-chart', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Browser market shares. January, 2016 to December, 2016'
        },
        subtitle: {
            text: 'Click the columns to view versions. Source: <a href="#"></a>.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total percent market share'

            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f} s'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Ngọc Bích',
                y: 51,
                drilldown: 'Microsoft Internet Explorer'
            }, {
                name: 'Đoàn Hà',
                y: 81,
                drilldown: 'Chrome'
            }, {
                name: 'Hoàng Hà',
                y: 70,
                drilldown: 'Chrome'
            },{
                name: 'Phantom',
                y: 35,
                drilldown: 'Chrome'
            },

                {
                name: 'Người nào đó',
                y: 31,
                drilldown: 'Firefox'
            }]
        }]
    });
});