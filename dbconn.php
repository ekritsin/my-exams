<?php
error_reporting(E_ALL);
$db_host = 'localhost';
$db_username = 'root';
$db_pass = '';
$db_name = 'myexams';


/*$conn = mysql_connect($db_host,$db_username,$db_pass)or die ("Could not connect to Mysql");
 mysql_select_db($db_name ) or die ('No database');*/
//$conn = mysqli_connect($db_host,$db_username,$db_pass,$db_name);
$conn = new mysqli($db_host,$db_username,$db_pass,$db_name);

if($conn->connect_errno){
	echo $conn->connect_error;
	die("Uh oh, couldn't select database $db_name");
	
}/*
if (mysqli_connect_errno()){
	echo " Failed to connect :" . mysqli_connect_error() ;
	
}
if (!mysqli_select_db($conn,$db_name)) {
    die("Uh oh, couldn't select database $db_name");
}*/
?>