<?php
$host = "localhost";
$username = "root";
$password = "";
$database_name = "icampus";
$connect = mysql_connect($host, $username, $password);
if (!$connect) {
	echo "could not connect to database";
	return false;
}
$selectdb = mysql_select_db($database_name, $connect);
$queryStudent = "SELECT * FROM students;";
$resultStudent = mysql_query($queryStudent);
?>
<html>
	<head>
		<title>Fusion Charts</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="http://code.highcharts.com/highcharts.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#container').highcharts({
					chart : {
						type : 'bar'
					},
					title : {
						text : 'Fruit Consumption'
					},
					subtitle : {
						text : 'My custom subtitle'
					},
					xAxis : {
						categories : ['Apples', 'Bananas', 'Oranges']
					},
					yAxis : {
						title : {
							text : 'Fruit eaten'
						}
					},
					series : [{
						name : 'Jane',
						data : [1, 0, 4]
					}, {
						name : 'John',
						data : [5, 7, 3]
					}]
				});
			});
		</script>
	</head>
	<body>
		<div id="container" style="width:100%; height:400px;"></div>
	</body>
</html>