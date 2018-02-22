<?php
session_start();
$connect = mysqli_connect("localhost","root","","sfac_als");

	$query = "SELECT * FROM category ORDER BY category_name ASC"; //not yet finish
	$result = mysqli_query($connect, $query);
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>DataTables Plugin</title>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src = "js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">
	<script src = "js/bootstrap.min.js"></script>
	
	
	
	
	
</head>
  <body>
	<div class="container">
		<h2 align="center">Datatables Individual Column Searching using PHP Ajax Jquery</h2>
		<br>

		<div class="table-responsive">
		<table id="product_data" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Sr. Number</th>
		 			<th>Product Name</th>
		 			<th>
		 			   <select name="category" id="category" class="form-control">
		 			     <option value="">Category Search</option>
		 		<?php 
		 		while($row = mysqli_fetch_array($result)) {
		 			echo '<option value = "'.$row["category_id"].'">'.$row["category_name"].'</option>';
		 		}		 		 
		 		?> 
		 			   </select>
		 			</th>
		 			<th>Product Price</th>
				</tr>
			</thead>
			
		</table>
			
		</div>
	</div>

  </body>
</html>

<script>
$(document).ready(function(){
	load_data();

	function load_data(is_category){
		var dataTable = $('#product_data').DataTable({
			"processing":true,
			"ServerSide":true,
			"order":[],
			"ajax":{
				url:"fetch.php",
				type:"POST",
				data:{is_category:is_category}
			},
			"columnDefs" :[
				{
					"targets":[2],
					"orderable":false,
				},
			],
		});
	}
	$(document).on('change', '#category', function(){
		var category = $(this).val();
		$('#product_data').DataTable().destroy();
		if (category != '') {
			load_data(category);
		} else {
			load_data();
		}
	});
});
	
</script>