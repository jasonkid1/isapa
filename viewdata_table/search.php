<?php
	session_start();
	ob_start();

	if(isset($_POST['search']))
	{
		$valueToSearch = $_POST['valueToSearch'];
		$query = "SELECT * FROM add_book_records_copy WHERE CONCAT(ID, Call_Numbers, Authors, Title, Editor, Edition, Place_Of_Publ, Publisher, Date_Of_Publ, Page_No, Series, Notation1, Notation2, ISBN_No, ISSN_No, Accession_No, Subject, Quantities, Total_remaining_books, Abstractt) LIKE '%".$valueToSearch."%'";
		$search_result = filterTable($query);
	}

	else {
		$query = "SELECT * FROM add_book_records_copy";
		$search_result = filterTable ($query);
	}

	function filterTable($query)
	{

		$connect = mysqli_connect("localhost", "root", "", "sfac_als");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SEARCH</title>
	<style>
	table, tr, th, td
	{
		border: 1px solid black;
	}
	</style>
</head>
<body>

	<form action="search.php" method="POST">
	
	<input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
	<input type="submit" name="search" value="Filter"><br><br>

		<table>
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
		<?php while($row = mysqli_fetch_array($search_result)): ?>
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
	</table>
	

		
	</form>

	<button><a href="pagination_search.php">Go Back to Pagination</a></button>

</body>
</html>