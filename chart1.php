<!DOCTYPE HTML>
<html>
	<head>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/10/highcharts.js"></script>
    <script src="/js/highcharts.js"></script>
    <script src="/js/modules/stock.js"></script>
    <script src="/js/modules/map.js"></script>
    <script src="/js/modules/gantt.js"></script>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 360px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

		</style>
<?php include 'nav.php' ?>
	</head>
    <br>
    <br>
	<body>
<script src="highcharts/highcharts.js"></script>
<script src="highcharts/modules/series-label.js"></script>
<script src="highcharts/modules/exporting.js"></script>
<script src="highcharts/modules/export-data.js"></script>
<script src="highcharts/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"> </div>
    
</figure>

<?php
//เชื่อมต่อฐานข้อมูล
$conn=mysqli_connect("db","root","MYSQL_ROOT_PASSWORD","lertluck");  
//ให้แสดงผลภาษาไทยได้ โดยกำหนด charset เป็น utf-8
mysqli_set_charset($conn,"utf8");

$sql = "SELECT re, if_v1 FROM db_op";
$result = mysqli_query($conn,$sql);

    $Name = array();
    $Num = array();
    while($row=mysqli_fetch_assoc($result)) {
        $Name[] = $row['id'];
        $Num[] =$row['if_v1'];
    }
?>


<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type:'column'
    },
    title: {
        text: 'รายงานยอดสินค้า'
    },

    yAxis: {
        title: {
            text: 'จำนวนสินค้า'
        }
    },

    xAxis: {
        categories: [<?php echo "'" . implode("','", $Name) . "'"; ?>]
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

   

    series: [{
        name: 'จำนวนสินค้าในวันนี้',
        data: [<?php echo implode(",",$Num); ?>]
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
	</body>
</html>