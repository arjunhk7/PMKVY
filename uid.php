<?php


define('DB_HOST', 'localhost');
define('DB_NAME', 'aadhar');
define('DB_USER','root');
define('DB_PASSWORD','');
   $con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;


   $id= $_POST['uuid'];

	$q= "SELECT * FROM aadhar WHERE aadhar.uuid = '$id'";
	$data = mysqli_query($con,$q) or die("Fail17");
	$row = mysqli_fetch_assoc($data);




?>