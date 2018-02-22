<?php
session_start();
include 'conn.php';

$coursecode = $_POST['coursecode'];
$description = $_POST['description'];
$unit = $_POST['unit'];
$time = $_POST['time'];
$day = $_POST['day'];
$room = $_POST['room'];
$finalgrade = $_POST['finalgrade'];
$remarks = $_POST['remarks'];
$semester = $_POST['semester'];
$year = $_POST['year'];
$username = $_POST['username'];
$professor = $_POST['professor'];

	$sql = "INSERT INTO grade (coursecode,description,unit,hrtime,day,room,finalgrade,remarks,semester,year,username,professor) VALUES ('$coursecode','$description','$unit','$time','$day','$room','$finalgrade','$remarks','$semester','$year','$username','$professor')";
	$result = $conn->query($sql);

	// header('Location: index2.php');
	 header('Location: insertdata.php');