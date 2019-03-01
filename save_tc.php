<?php
	require_once 'conn.php';
	
	$reg = $_POST['reg'];
    $name = $_POST['name'];
	$fname = $_POST['fname'];
    $mname = $_POST['mname'];
	$dob = $_POST['dob'];
	
	mysqli_query($conn, "INSERT INTO `tc` VALUES('', '$reg', '$name', '$fname', '$mname', '$dob')") or die(mysqli_error());
	
	header("location: index.php");
?>