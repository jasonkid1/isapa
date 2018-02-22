<?php
session_start();
include 'conn.php';

//Select Database
$sql = "SELECT * FROM grade ORDER BY grade_id DESC";
//you can use either of this code either way they return the same output
//$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Grading System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src ="js/jquery-3.2.1.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
</head>

<body>

		

<h2>Insert Data Here</h2>

	<form action="insertdataexe.php" method="POST">
		<input type="text" name="course_code" placeholder="Course Code">  <br>
		<input type="text" name="description" placeholder="Description"><br>
		<input type="text" name="unit" placeholder="Unit"><br>
		<input type="text" name="time" placeholder="Time"><br>
		<input type="text" name="day" placeholder="Day"><br>
		<input type="text" name="room" placeholder="Room"><br>
		<input type="text" name="finalgrade" placeholder="Final Grade"><br>
		<input type="text" name="remarks" placeholder="Remarks"><br>
		<input type="text" name="semester" placeholder="Semester"><br>
		<input type="text" name="year" placeholder="Year"><br>
		<input type="text" name="username" placeholder="Username"><br>
		<input type="text" name="professor" placeholder="Professor"><br><br>

		<button style="font-size:24px" type="submit" name="submit">SUBMIT&nbsp&nbsp<i class="fa fa-plane"></i></button>
	</form>



<h1>Grade Details</h1>
	<table class="table table-condensed">
	<thead>
	<tr>
		<th>ID</th>
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
	//Fetch Data from database
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			?>
			<tbody>
			<tr>
				<th><?php echo $row['grade_id']; ?></th>
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
			</tbody>
			<?php
		}
	} else
	{
		?>
		<tr>
			<th colspan="12">There's no data found</th>
		</tr>
		<?php
	}

	?>

</table>


	<a href="delete.php">Go Here to Delete Record</a>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>