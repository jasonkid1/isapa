<?php

include  'conn2.php';

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "sfac_als" ;

// // Check Connection

// $conn = new mysqli($servername, $username, $password, $dbname);
// if (!$conn) {
// 	die("Error on the connection!" . $conn->connect_error);
// }

$record_per_page = 998;
$page ='';
$output = '';

	if (isset($_POST["page"])) {
		$page = $_POST["page"];
	
	}else
	{
		$page = 1;
	}

	$start_from = ($page - 1) * $record_per_page;

	$sql = "SELECT * FROM add_book_records_copy LIMIT $start_from, $record_per_page";
		
		 $result = mysqli_query($conn, $sql);

	?>

	
				
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

	<?php

		$page_query = "SELECT * FROM add_book_records_copy";
		$page_result = mysqli_query($conn, $page_query);
		$total_records = mysqli_num_rows($page_result);
		$total_pages = ceil($total_records/$record_per_page); 

?> <label style="color: green;font-size: 10px;">Pages</label> <?php

		for ($i=1; $i <=$total_pages; $i++) 
		{ 
			
			$output .="<span class = 'pagination_link' style ='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";

		}

		echo $output;
			
			

		 

?>