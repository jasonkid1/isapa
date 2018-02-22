<?php
ob_start();
session_start();
include 'conn.php';

$sql = "SELECT student.first_name,
       student.last_name,
       exam.exam_name,
       exam.date,
       grades.grade_value
  FROM grades
 INNER JOIN student ON student.student_id = grades.student_id
 INNER JOIN exam ON exam.exam_id = grades.exam_id
 ORDER BY exam.date";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inner  Join 3 Table</title>
</head>
<body>
<h1 align="center">Inner Join 3 Tables</h1>
	<table border="2" align="center" style="line-height: 30px;">
		<tr bgcolor="#eeefff">
			<th>First Name</th>
			<th>Last Name</th>
			<th>Exam Name</th>
			<th>Date</th>
			<th>Grade Value</th>
		</tr>
		<?php  
			if (mysqli_num_rows($result) > 0) 
			{
				
						while ($row = mysqli_fetch_array($result)) 
						{
							?>
							<tr>
								<td><?php echo $row["first_name"]; ?></td>
								<td><?php echo $row["last_name"]; ?></td>
								<td><?php echo $row["exam_name"]; ?></td>
								<td><?php echo $row["date"]; ?></td>
								<td><?php echo $row["grade_value"]; ?></td>
								
							</tr>

							<?php	
						}
			}
		?>
	</table>

		<a href="index2.php">Insert Data Here</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="search_filter_print.php">Search Data Here</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="update.php">Update Data Here</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="index.php">Go to Home</a>&nbsp;&nbsp;&nbsp;&nbsp;

</body>
</html>