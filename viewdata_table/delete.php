<?php 
	ob_start();
	session_start();
	//Connection for the database
include 'conn.php';

 $result = mysqli_query($conn, "SELECT * FROM grade");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Grading System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<h1 align="center">Grade Details</h1>
<table border="2" align="center" style="line-height: 30px;">
	<tr bgcolor="#eeefff">
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
		<th>Action</th>
	</tr>

	<?php 

		$i = 1;

		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$id = $row['grade_id'];
			$coursecode = $row['coursecode'];
			$description = $row['description'];
			$unit = $row['unit'];
			$time = $row['hrtime'];
			$day = $row['day'];
			$room = $row['room'];
			$finalgrade = $row['finalgrade'];
			$remarks = $row['remarks'];
			$semester = $row['semester'];
			$year = $row['year'];
			$username = $row['username'];
			$professor = $row['professor'];
		?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $coursecode; ?></td>
				<td><?php echo $description; ?></td>
				<td><?php echo $unit; ?></td>
				<td><?php echo $time; ?></td>
				<td><?php echo $day; ?></td>
				<td><?php echo $room; ?></td>
				<td><?php echo $finalgrade; ?></td>
				<td><?php echo $remarks; ?></td>
				<td><?php echo $semester; ?></td>
				<td><?php echo $year; ?></td>
				<td><?php echo $username; ?></td>
				<td><?php echo $professor; ?></td>

				<td>
					<a href="index.php?delete= <?php echo $id; ?>" onclick = "return confirm('Are you sure talaga? Wala na baiwan etetch!');">Delete</a>

				</td>
			</tr>

		<?php

			$i++;
		}

		if (isset($_GET['delete'])) {
			$delete_id = $_GET['delete'];

			mysqli_query($conn, "DELETE FROM grade WHERE grade_id = '$delete_id'");
			header("Location: index.php");
			//header('Location: index.php');
		}

	
		?>

		</table>
		<br><br>
		<a href="index2.php">Insert Data Here</a>&nbsp&nbsp&nbsp&nbsp
		<a href="search_filter.php">Search Data Here</a>&nbsp&nbsp&nbsp&nbsp
		<a href="update.php">Update Data Here</a>&nbsp&nbsp&nbsp&nbsp
		<a href="innerjoin.php">How to Inner Join Here</a>&nbsp&nbsp&nbsp&nbsp