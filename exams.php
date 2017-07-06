<?php 
	  error_reporting(E_ALL& ~E_NOTICE);
	  session_start();
	  
		 
	if(isset($_POST['submit'])){
		include_once("dbconn.php");
		$subject= $_POST['subject'] ;
		$title = $_POST['title'] ;
		$day = $_POST['day'] ;
	
		$query = "INSERT INTO exam (id ,subject ,title, day) VALUES ('NULL','$subject','$title','$day')"  ;
		$sql = mysqli_query($conn,$query) or die(mysqli_error($conn));
		

		if($sql){
			echo "exam has been created !" ;
	
			
		}
        else {
			
			echo "error" ;	
		}	
		
	}
		
?>

 <!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<title>Online Exams</title>
	<link rel="stylesheet" type="text/css" href="myStyle1.css">
	
 </head>
<body>
			<form action="exams.php" method='post' id = 'exam'>  
			<fieldset>
				<label for = 'exam'>Create Exam:</label><br>
			
				<label for="subject" class="formLabel" >Subject :</label>
					  <input list='subs' name='subject' id='subject' placeholder='Choose Subject...' />
					  <datalist id = 'subs'>
						    <option>Maths</option>
						    <option>Physics</option> 
						    <option>Biology</option>
							<option>Science</option>
							<option>History</option>
					  </datalist><br>
					  
					  
				<label for="title" class="formLabel" >Title:</label>
				   <textarea name="title" form="exam" id="title" placeholder="Exam title..."></textarea><br>
					  
				<label for="day" class="formLabel" >Date of Exam :</label>
					  <input type="date" name="day" id="day" placeholder='Please select a date...'/><br>
			
			    
			</fieldset>
			<input name="submit" type="submit" for='exam' value="Create Exam" />
			</form>  
</body>
</html>