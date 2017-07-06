<!DOCTYPE html>
<?php
include 'C:/xampp/htdocs/dbconn.php ' ; 

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];

$username=$_POST['username'];
$password=$_POST['password'];

 if(!$_POST['submit']){
			
			echo "Please fill out the form ." ;
			header('Location: homepage.php');
		}
		else {
			
			mysqli_query($conn,"INSERT INTO professor (pid, name, surname, email, username, password) 
              VALUES ('NULL','$name','$surname','$email','$username','$password')") or die(mysqli_error($conn));
			echo "User has been added" ;			
			header('Location: memb.php');		
		}
		
		
		
		
?>