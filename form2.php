<!DOCTYPE html>
<html>
 <?php//	include 'C:/xampp/htdocs/dbconn.php ' ;
        require 'C:/xampp/htdocs/dbconn.php ' ;
		 //include_once("dbconn.php");
 ?>
 <head>
	<meta charset="utf-8">
	<title>Online Exams</title>
	<link rel="stylesheet" type="text/css" href="myStyle1.css">
  
 </head>
 
 <body>
<h3>Welcome Professor. Fill in your information please :</h3>

<form action="addin2.php" method="post" id="form2" autocomplete="off">
	<fieldset form="form2"><legend>Personal info</legend>

	
			<div>
			<label for="name" class="formLabel">Name: </label>
			<input required type="text" name="name" id="name" value=""/>
			</div>
			<div>
			<label for="surname" class="formLabel">Surname: </label>
			<input required type="text" name="surname" id="surname" value=""/>
			</div>
			<div>
			<label for="email" class="formLabel">Email: </label>
			<input required type="email" name="email" id="email" value=""/>
			
	</fieldset>

	<fieldset form="form2">
	<legend>Create username and password</legend>

		<div><label for="username" class="formLabel">Username: </label> 
		<input required type="text" name="username" id="username" value=""/> *</div>
		
		<div><label for="password" class="formLabel">Password: </label>
		<input required type="password" name="password" id="password " value="" placeholder="6 to 9 numbers/letters" /> *</div>
		

	</fieldset>
	<input type="submit" name="submit" />
</form>

</body>
</html>