<?php

include_once("dbConnect.php");

$query = "SELECT COUNT(customer_id) FROM customer WHERE store_id = 1";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($result)){
    $StoreOne = $row['COUNT(customer_id)'];
}//end while

$query = "SELECT COUNT(customer_id) FROM customer WHERE store_id = 2";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_assoc($result)){
    $StoreTwo = $row['COUNT(customer_id)'];
}//end while

?>

<html>

    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>

        <script>
            $(function () {
                $('#container').highcharts({
                    chart: {
                        type: 'bar'
                    },
                    title: {
                        text: 'Sakila Database'
                    },
                    xAxis: {
                        categories: ['Active Memberships Per Store']
                    },
                    yAxis: {
                        title: {
                            text: 'Store'
                        }
                    },
                    series: [{
                        name: 'Store One',
                        data: [<?php echo $StoreOne ?>]
                    }, {
                        name: 'Store Two',
                        data: [<?php echo $StoreTwo ?>]
                    }]
                });
            });
        </script>

        <title>HighCharts Tutorial</title>
    </head>

    <body>

        <div id="container" style="width:100%; height:400px;"></div>

    </body>

</html>
