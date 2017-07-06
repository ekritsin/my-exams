<!DOCTYPE html>





<html>
 <?php	include 'C:/xampp/htdocs/dbconn.php ' ; ?>
 <head>
	<meta charset="utf-8">
	<title>Online Exams</title>
	<link rel="stylesheet" type="text/css" href="myStyle1.css">
  
 </head>
 
 <body>
<h3>Welcome Student. Fill in your information please :</h3>

<form action="addin.php" method="post" id="form1" autocomplete="off">
	<fieldset form="form1"><legend>Personal info</legend>

	
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
	
	<div>
	<label for="bdate" class="formLabel">Birth-date: </label>
	<input required type="date" name="bdate" id="bdate" value=""/>
    </div>

	</fieldset>
<!--This is a comment. Comments are not displayed in the browser-->
	<fieldset form="form1">
	<legend>Create username and password</legend>

		<div><label for="username" class="formLabel">Username: </label> 
		<input required type="text" name="username" id="username" value=""/> *</div>
		
		<div><label for="password" class="formLabel">Password: </label>
		<input required type="password" name="password" id="password " value="" placeholder="6 to 9 numbers/letters" /> *</div>
		

	</fieldset>

	<fieldset form="form1"><legend>Survey info</legend>
    <div>
	<label for="region" class="formLabel">Region: </label>
	<input list="nomos" name="region" id="region" value=""/>
	<datalist id="nomos">
		<option value="Attiki">
		<option value="Thessalonikis">
		<option value="Iwanninwn">
		<option value="Larisas">		
		<option value="Hrakleioy">
		<option value="Aigaioy">
	</datalist>
	</div>
	<div>
	<label for="city" class="formLabel">City: </label>
	<input list="town" name="city" id="city" value=""/>
	<datalist id="town">
		<option value="Athina">
		<option value="Larisa">
		<option value="Iwannina">
		<option value="Thessaloniki">		
		<option value="Hrakleio">
		<option value="Patra">
	</datalist>
	</div>
	<div>
	<label for="school"class="formLabel">School: </label>
	<input type="text" name="school" id="school" value=""/>
	</div>
	<div>
	<label for="dep" class="formLabel" >Class: </label>
	<input type="text" name="dep" id="dep" value=""/>
	</div>
	
    
	</fieldset>
	<input type="submit" name="submit" />
	</form>
	
</body>
</head>