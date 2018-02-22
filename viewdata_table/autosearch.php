<?php
session_start();
include 'conn2.php';

	$sql = "SELECT * FROM add_book_records_copy"; //not yet finish
	$result = mysqli_query($conn, $sql);
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>AutoSearch</title>

	<script src ="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src = "js/bootstrap.min.js"></script>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

</head>

<body>
<br><br>
	<div class="container" style="width: 1360px;">
	  <h2 align="center">AUTO SEARCH</h2>
	  <h3 align="cneter">Books Record</h3>
		<br><br>
		  <div align="center">
		  	<input type="text" name="search" placeholder="search here..." id="search" class="form-control"/>
		  </div>
		 <br><br>  
		 <div class="table-responsive">
		 	


		 	<table class="table table-bordered" id="books_table">
		 		<tr>
		 			
		 			<th width="25%">Call Number</th>
		 			<th width="15%">Author</th>
		 			<th width="35%">Title</th>
		 			<th width="5%">Date of Publication</th>
		 			<th width="20%">Subject</th> 
		 		</tr>

		 		<?php 
		 		while($row = mysqli_fetch_array($result)) 
		 		{ 
		 		?>
			<tr>
				
				<td><?php echo $row['Call_Numbers']; ?></td>
				<td><?php echo $row['Authors']; ?></td>
				<td><?php echo $row['Title']; ?></td>
				<td><?php echo $row['Date_Of_Publ']; ?></td>
				<td><?php echo $row['Subject']; ?></td>
			</tr>
			<?php
			}
			?>
		 	</table>
		 </div>


	</div>
</body>
</html>

<script>
	$(document).ready(function(){
		$('#search').keyup(function(){
			search_table($(this).val());
		});

		function search_table(value){
			$('#books_table tr').each(function(){
				var found = 'false';
				$(this).each(function(){
					if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
						found = 'true';
					}
				});
				if (found == 'true') {
					$(this).show();
				} else {
					$(this).hide();
				}
			});
		}

	});

</script>