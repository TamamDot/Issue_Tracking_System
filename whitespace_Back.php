<?php 
session_start();
$stringSet =  "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
$charSet = str_split($stringSet);
$randomString = "";
$_SESSION['randomString'] = "";
for ($i = 1; $i <= 15; $i++) {

	$charNum = rand(0,61);	
	$randomString = $charSet[$charNum];
	$_SESSION['randomString'] = $_SESSION['randomString'].$randomString;
	//echo $randomString;
}
echo $_SESSION['randomString'];
?>