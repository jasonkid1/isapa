<?php 
	ob_start();
	session_start();
	//Connection for the database
    include 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

<?php  
		

	//Select Query 
	$sql = "SELECT * FROM grade";

	// Execute the query
	$records = mysqli_query($conn,$sql);
?>
	<table>
		<tr>
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

		<?php 
		while($row = mysqli_fetch_array($records)) 
		{
			echo "<tr><form action=update_exec.php method=POST>";
			echo "<td><input type=text name=coursecode value='".$row['coursecode']."'</td>";
			echo "<td><input type=text name=description value='".$row['description']."'</td>";
			echo "<td><input type=text name=unit value='".$row['unit']."'</td>";
			echo "<td><input type=text name=hrtime value='".$row['hrtime']."'</td>";
			echo "<td><input type=text name=day value='".$row['day']."'</td>";
			echo "<td><input type=text name=room value='".$row['room']."'</td>";
			echo "<td><input type=text name=finalgrade value='".$row['finalgrade']."'</td>";
			echo "<td><input type=text name=remarks value='".$row['remarks']."'</td>";
			echo "<td><input type=text name=semester value='".$row['semester']."'</td>";
			echo "<td><input type=text name=year value='".$row['year']."'</td>";
			echo "<td><input type=text name=username value='".$row['username']."'</td>";
			echo "<td><input type=text name=professor value='".$row['professor']."'</td>";
			echo "<input type=hidden name=id value='".$row['grade_id']."'>";
			echo "<td><input type=submit value=Update>";
			echo "</form></tr>";
		}
		?>
	</table>

		<br><br>
		<a href="insertdata.php">Insert Data Here</a>&nbsp&nbsp&nbsp&nbsp
		<a href="search_filter.php">Search Data Here</a>&nbsp&nbsp&nbsp&nbsp
		<a href="update.php">Update Data Here</a>&nbsp&nbsp&nbsp&nbsp
</body>
</html>
