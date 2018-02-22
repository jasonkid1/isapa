<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>

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
</head>
<body>



<h1 style="color: #ef3453; background-color: #34eace; text-align: center;">List of Collection</h1>


			
		<form action="search.php" method="POST" style="float: left;" ><br><br>
			<input style="height: 40px; width: 800px; background-color: lightgreen;" type="text" name="valueToSearch" placeholder="Type here to find what you are looking for...?"><br><br>
			<button style="font-size:20px; background-color: lightblue;" type="submit" name="search">SUBMIT&nbsp&nbsp<i class="fa fa-plane"></i></button><br><br>
			<!-- <input style="height: 40px; width: 65px;" type="submit" name="search" value="Search"> --> 
			<!-- <button style="font-size:24px" type="submit" name="search">SUBMIT&nbsp&nbsp<i class="fa fa-plane"></i></button> -->
		
	


<?php

$conn2 = mysqli_connect('localhost','root','');
mysqli_select_db($conn2, 'sfac_als');


//you can use either of this code either way they return the same output
//$result = $conn->query($sql);
$result_per_page = 300;
//Select Database
$sql = "SELECT * FROM add_book_records_copy";
$result = mysqli_query($conn2, $sql);
$number_of_results = mysqli_num_rows($result);



 

		
		 $number_of_pages = ceil($number_of_results/$result_per_page) + 1;

		 if (!isset($_GET['page'])) {
		 	$page = 1;
		 } else {
		 	$page = $_GET['page'];
		 }
		 //starting_limit_number = (page_number-1)*results_per_page
		 $this_page_first_result = ($page-1)*$result_per_page;

		 $sql = "SELECT * FROM add_book_records_copy LIMIT " .$this_page_first_result. ',' .$result_per_page;
		 $result = mysqli_query($conn2, $sql); 

	?> 

			<label style="color: green;font-size: 10px;">Pages</label>
	<?php		

		for ($page=1; $page < $number_of_pages ; $page++) { 
			echo '<a href="pagination_search.php?page='.$page.'">' .$page. '</a>&nbsp';
			# code...
		}

		?>

<div style="background-color: yellowgreen;">	
				
		  <table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Call_Numbers</th>
			<th>Authors</th>
			<th>Title</th>
			<th>Editor</th>
			<th>Edition</th>
			<th>Place_Of_Publ</th>
			<th>Publisher</th>
			<th>Date_Of_Publ</th>
			<th>Page_No</th>
			<th>Series</th>
			<th>Notation1</th>
			<th>Notation2</th>
			<th>ISBN_No</th>
			<th>ISSN_No</th>
			<th>Accession_No</th>
			<th>Subject</th>
			<th>Quantities</th>
			<th>Total_remaining_books</th>
			<th>Abstractt</th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)): ?>
			<tr>
				<td><?php echo $row['ID']; ?></td>
				<td><?php echo $row['Call_Numbers']; ?></td>
				<td><?php echo $row['Authors']; ?></td>
				<td><?php echo $row['Title']; ?></td>
				<td><?php echo $row['Editor']; ?></td>
				<td><?php echo $row['Edition']; ?></td>
				<td><?php echo $row['Place_Of_Publ']; ?></td>
				<td><?php echo $row['Publisher']; ?></td>
				<td><?php echo $row['Date_Of_Publ']; ?></td>
				<td><?php echo $row['Page_No']; ?></td>
				<td><?php echo $row['Series']; ?></td>
				<td><?php echo $row['Notation1']; ?></td>
				<td><?php echo $row['Notation2']; ?></td>
				<td><?php echo $row['ISBN_No']; ?></td>
				<td><?php echo $row['ISSN_No']; ?></td>
				<td><?php echo $row['Accession_No']; ?></td>
				<td><?php echo $row['Subject']; ?></td>
				<td><?php echo $row['Quantities']; ?></td>
				<td><?php echo $row['Total_remaining_books']; ?></td>
				<td><?php echo $row['Abstractt']; ?></td>
			</tr>
		<?php endwhile; ?>
	
	</table>  <br><br>

		

	</div>	



</body>
</html>