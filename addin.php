<!DOCTYPE html>
<?php
include 'C:/xampp/htdocs/dbconn.php ' ; 

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$bdate=$_POST['bdate'];
$username=$_POST['username'];
$password=$_POST['password'];
$region=$_POST['region'];
$city=$_POST['city'];
$school=$_POST['school'];
$dep=$_POST['dep'];
$sql = "INSERT INTO student (id, name, surname, email, bdate, username, password, region, city, school, dep) 
              VALUES ('NULL','$name','$surname','$email','$bdate','$username','$password','$region','$city','$school','$dep')" ;


    if($_POST['submit']){
		
		
		$sql1 = "SELECT email FROM student WHERE email = '$email'" ;
		$query = mysqli_query($conn,$sql1) ;
		
		if($query) {
			$row  = mysqli_fetch_row($query);
			$db_mail = $row[0] ;
			
		}
		if($mail = $db_mail){
			
			echo " Ooops , sorry . User already taken ! "  ;
			header('Location:register.php') ;
		}else{
			mysqli_query($conn,$sql) or die(mysqli_error($conn));
			echo "User has been added" ;			
		    header('Location: homepage.php');
		}
			
    }else {
			
			
		echo "Registration Problem !" ;
		header('Location: memb.php');
	}
		
 
 
 
?>