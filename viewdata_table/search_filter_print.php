<?php
 session_start();
 ob_start();
	
	if (isset($_POST['search'])) {
		$valueToSearch = $_POST['valueToSearch'];
		$query = "SELECT * FROM grade WHERE CONCAT(grade_id,coursecode,description,unit,hrtime,day,room,finalgrade,remarks,semester,year,username,professor) LIKE '%" .$valueToSearch."%'";
		$search_result = filterTable($query);

	}else {
		$query = "SELECT * FROM grade";
		$search_result = filterTable($query);
	}

	function filterTable($query) {
		$connect = mysqli_connect("localhost","root","","user");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}





?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Search</title>
	<style>
		table,tr,th,td {
			border: 1px solid black;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src ="js/jquery-3.2.1.min.js"></script>
  <script src = "js/bootstrap.min.js"></script>
  
  <!-- Printing Instruction -->
  <script type="text/javascript">
    function printlayer(layer) 
    {
      var generator=window.open(",'name,");
      var layetext = document.getElementById(layer);
      generator.document.write(layetext.innerHTML.replace("Print Me"));

      generator.document.close();
      generator.print();
      generator.close();
    }
  </script>




</head>
<body>

	<h3>
  <a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Report Print</a>
	</h3>

<div class="container" id="div-id-name">

		<form action="search_filter_print.php" method="POST">
			<input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
			<input type="submit" name="search" value="Filter"><br><br>

			<h1>Data Search</h1>
			<table class="table table-condensed">
			<thead>
				<tr>
					<th>Grade_ID</th>
					<th>Course Code</th>
					<th>Description</th>
					<th>Unit</th>
					<th>Time</th>
					<th>Day</th>
					<th>Room</th>
					<th>Final Grade</th>
					<th>Remarks</th>
					<th>Semester</th>
					<th>Year</th>
					<th>Username</th>
					<th>Professor</th>
				</tr>
			</thead>
				<?php 
					while ($row = mysqli_fetch_array($search_result)) :?>
				 <tbody>
					<tr>
						<td><?php echo $row['grade_id']; ?></td>
						<td><?php echo $row['coursecode']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['unit']; ?></td>
						<td><?php echo $row['hrtime']; ?></td>
						<td><?php echo $row['day']; ?></td>
						<td><?php echo $row['room']; ?></td>
						<td><?php echo $row['finalgrade']; ?></td>
						<td><?php echo $row['remarks']; ?></td>
						<td><?php echo $row['semester']; ?></td>
						<td><?php echo $row['year']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['professor']; ?></td>
					</tr>
				<?php endwhile;?>
				</tbody>
			</table>
		</form>
<br>
<br>

		<a id="atag" href="index.php">Go Back to Home</a>
		<script>
			
		</script>

</div>
</body>
</html>