<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Highcharts Example - web-tuts.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body style="border:1px solid red; margin:20px;">
    <h1 class="text-center">Laravel 8 Highcharts Example - web-tuts.com</h1>
    <div id="container"></div>
</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var users = <?php echo json_encode($users); ?>;

    Highcharts.chart('container', {
        title: {
            text: 'New User Records - 2021'
        },
        subtitle: {
            text: 'Source: websolutionstuff.com'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Number of Users'
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Users',
            data: users
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>

</html>
