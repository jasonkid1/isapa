<?php 
 include 'conn.php';

 $query = "SELECT * FROM account";
 $result = mysqli_query($conn, $query);

 $chart_data ='';
 while ($row = mysqli_fetch_array($result)) {
 	$chart_data .= " {year:".$row["year"].", 
			 		  profit:".$row["profit"].", 
			 		  purchase:".$row["purchase"].", 
			 		  sale:".$row["sale"]."}, " ;
 }

 $chart_data = substr($chart_data, 0, -2);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Morris Chart</title>
	<link rel="stylesheet" type="text/css" href="misc/morris/morris.css">
	
	
</head>
<body>
	<br><br>
	<div class="container" style="width: 800px;">

		<h2 align="center">PHP MYSQL MORRIS CHART</h2>
		<h3 align="center">Last 3 years profit, purchase and sale data</h3>
	<br><br>
		<div id="chart">
			
		</div>	

	</div>

	<script src ="js/jquery-3.2.1.min.js"></script>
	<script src ="misc/raphael/raphael-min.js"></script>
	<script src ="misc/morris/morris.min.js"></script>

</body>
</html>

<script>
	Morris.Bar({
		element : 'chart',
		data: [<?php  echo $chart_data;  ?>],
		xkey: 'year',
		ykeys: ['profit', 'purchase', 'sale'],
		labels: ['profit', 'purchase', 'sale'],
		hideHover: 'auto',


	});
</script>