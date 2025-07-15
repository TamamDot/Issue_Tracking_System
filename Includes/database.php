<?php 
$dbHost = "localhost";
$dbUser = "root";
$dbpassword = "";
$dbName = "tracking_database";

$conn = mysqli_connect($dbHost,$dbUser,$dbpassword,$dbName);

if(!$conn){
	die("Database connection Failed");
}

?>