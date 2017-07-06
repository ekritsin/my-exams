 <?php 
 
		error_reporting(E_ALL & ~E_NOTICE);
		session_start();
		
		if(isset($_SESSION['id'])){
			$username=$_SESSION['username'] ;
			$userId=$_SESSION['id'] ;
		}else {
			header('Location:homepage.php') ;
			die() ;
		}
		
        function mySubject($subject){
			
			include_once("dbconn.php");
			$sql = "SELECT subject, title FROM exam WHERE subject = '$subject'" ;
			$query = mysqli_query($conn ,$sql)  or die(mysqli_error($conn));
			if($query){
				while($row=mysqli_fetch_array($query)) {
					$subject = $row[0] ;
					$title = $row[1];
					echo "<h3><li><a href='start.php'>".$subject." | ".$title. "</a></li></h3><br>";
				}
				$_SESSION['subject'] = $subject ;
			}else {
				echo "Prob";
			}
			
		}
 ?>
 
 
<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<title>Online Exams</title>
	<link rel="stylesheet" type="text/css" href="myStyle1.css">
	
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
 </head> 

  
<body>
        <nav class='nav-cont' id='menu'>
			  <a id='pic'>
				<img src="https://s-media-cache-ak0.pinimg.com/236x/75/27/34/7527343580a0bc6c001841c943ea1ec5.jpg" alt="BookWorm" style="float:left;width:200px;height:100px;">
			 </a>
			 <ul>
				<li><a class='bigfont' href="homepage.php">Home</a></li>
				<li><a class='bigfont' href="about.php">About</a></li>
				<li><a class='bigfont' href="logout.php">Log Out</a></li>
			 </ul>
			</nav>
			  <hr>
			<form action='lesson.php' method='post' id='lesson'>
		    <h2><a>Select a Subject :</a></h2>
        	<label for="subject" class="formLabel" ></label>
					  <input list = 'subs' name='subject' id='subject' placeholder='Choose Subject...' />
					  <datalist id = 'subs'>
						    <option>Maths</option>
						    <option>Physics</option> 
						    <option>Biology</option>
							<option>Science</option>
							<option>History</option>
					  </datalist>
				<input type="submit" name="submit" />
				</form>
		<div>
		<ul><br>
			<?php
			
			echo "<legend>".$_POST['subject']."</legend>" ;
			if($_POST['submit']){
				echo "<h2>Choose an exam to start </h2>" ;
				  mySubject($_POST['subject']) ;
			}
					 
			?>
      </ul>
  	</div>
		<!-- Comments !! Page to choose available course exams !!
		
		-->  
		
		
		
		
		
</body>
</html>