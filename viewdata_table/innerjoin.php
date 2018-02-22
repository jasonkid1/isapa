<?php
ob_start();
session_start();
include 'conn.php';

$sql = "SELECT * FROM brand INNER JOIN product ON brand.brand_id = product.brand_id";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inner Join Table</title>
</head>
<body>
<h1 align="center">Inner Join Tables</h1>
	<table border="2" align="center" style="line-height: 30px;">
		<tr bgcolor="#eeefff">
			<th>Brand Name</th>
			<th>Product Name</th>
		</tr>
		<?php  
			if (mysqli_num_rows($result) > 0) {
				
				while ($row = mysqli_fetch_array($result)) 
				{
		?>
		<tr>
			<td><?php echo $row["brand_name"]; ?></td>
			<td><?php echo $row["product_name"]; ?></td>
		</tr>

		<?php	
				}
			}
		?>
	</table>

		<a href="index2.php">Insert Data Here</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="search_filter.php">Search Data Here</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="update.php">Update Data Here</a>&nbsp;&nbsp;&nbsp;&nbsp;

</body>
</html>