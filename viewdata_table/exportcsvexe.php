<?php
session_start();
include 'conn2.php';

	if (isset($_POST['export'])) {

	 	//$connect = mysqli_connect("localhost", "root", "", "sfac_als");
	 	header('Content-Type: text/csv; charset=utf-8');
	 	header('Content-Disposition: attachment; filename=data.csv');
	 	$output = fopen("php://output", "w");
	 	fputcsv($output, array('Call_Numbers','Authors','Title','Date_Of_Publ','Subject'));
	 	$query = "SELECT Call_Numbers,Authors,Title,Date_Of_Publ,Subject FROM add_book_records_copy";
	 	$result = mysqli_query($conn, $query);
	 	while ($row = mysqli_fetch_assoc($result)) {
	 		fputcsv($output, $row);
	 	}
	 	fclose($output);
	 } 


 ?>