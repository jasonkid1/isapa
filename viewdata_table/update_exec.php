<?php 
	ob_start();
	session_start();
	//Connection for the database
    include 'conn.php';

//Select Query 
	$sql = "UPDATE grade 
		SET	coursecode = '$_POST[coursecode]',
		description = '$_POST[description]',
		unit = '$_POST[unit]',
		hrtime = '$_POST[hrtime]',
		day = '$_POST[day]',
		room = '$_POST[room]',
		finalgrade = '$_POST[finalgrade]',
		remarks = '$_POST[remarks]',
		semester = '$_POST[semester]',
		year = '$_POST[year]',
		username = '$_POST[username]',
		professor = '$_POST[professor]' 
		WHERE 
		grade_id = $_POST[id]";

	// Execute the query
	if (mysqli_query($conn,$sql)) {
		header("refresh:1; url=update.php");
		
	 	# code...
	 } else{
	 	echo "Nothing is Updated...";
	 } ;