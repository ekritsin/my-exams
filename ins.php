<?php
error_reporting(E_ALL & ~E_NOTICE);
	 session_start();
if($_POST['submit']){
	 include_once("dbconn.php");
				$que=$_POST['que'];
				$sub=$_POST['sub'] ;
				$ra=$_POST['ra'];
				$ans=$_POST['ans']; 
				$ans1=$_POST['ans1'];
				$ans2=$_POST['ans2'];
				$ans3=$_POST['ans3'];
				$ans4=$_POST['ans4'];
				
			$sql = mysqli_query($conn,"INSERT INTO questions (qid,subject, quest, dif_rate) 
              VALUES ('NULL','$sub','$que','$ra')") or die(mysqli_error($conn));
			$sql2 = mysqli_query($conn,"INSERT INTO answers (qid, ans1, ans2,ans3,ans4,cor_ans) 
              VALUES ('NULL','$ans1','$ans2','$ans3','$ans4','$ans')") or die(mysqli_error($conn));
			
			if($sql && $sql2){
				
				echo "Question has been added" ;
			}else{
				
				echo "Something went wrong !! " ;
			}
						
}
		
?>



<!DOCTYPE html>
<html>
  
  <?php	include 'C:/xampp/htdocs/dbconn.php ' ; ?>
  
 <head>
	<meta charset="utf-8">
	<title>Online Exams</title>
	<link rel="stylesheet" type="text/css" href="myStyle1.css">
 </head>
  
<body>
    <form action="ins.php" method="post" id="add" autocomplete="off">

		<fieldset>
				<label for="sub" class="formLabel" >Select :</label>
					  <input list = 'subs' name='sub' id='sub' placeholder='Choose Subject...' />
					  <datalist id = 'subs'>
						    <option>Maths</option>
						    <option>Physics</option> 
						    <option>Biology</option>
							<option>Science</option>
							<option>History</option>
					  </datalist><br><br>
				
				<label for="que" class="formLabel" >Question :</label>
				   <textarea name="que" form="add" id="que" placeholder="Enter text here..."></textarea> 
				     <label for="ra" > Difficulty Rate : </label> <input type="number" name="ra" placeholder="From 1 to 10..."/><br>
	            
				<label for="ans1" class="formLabel" >Answer a :</label>
				   <textarea name="ans1" form="add" id="ans1" placeholder="Enter text here..."></textarea><br>
				<label for="ans2" class="formLabel" >Answer b :</label>
				   <textarea name="ans2" form="add" id="ans2" placeholder="Enter text here..."></textarea><br>
				<label for="ans3" class="formLabel" >Answer c :</label>
				   <textarea name="ans3" form="add" id="ans3" placeholder="Enter text here..."></textarea><br>
				<label for="ans4" class="formLabel" >Answer d :</label>
				   <textarea name="ans4" form="add" id="ans4" placeholder="Enter text here..."></textarea><br><br>
				   
				<label for="ans" class="formLabel" >Correct Answer :<br>
					  <input type="checkbox" name="ans" value="a"> a<br>
					  <input type="checkbox" name="ans" value="b"> b<br>
					  <input type="checkbox" name="ans" value="c"> c<br>
					  <input type="checkbox" name="ans" value="d"> d<br></label>
		</fieldset>
	
		<input type="submit" name="submit" />
	</form>
	



</body>


</html>