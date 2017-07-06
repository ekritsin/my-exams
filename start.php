 <?php 
 
		error_reporting(E_ALL & ~E_NOTICE);
		session_start();
		
		if(isset($_SESSION['id'])){
			$username=$_SESSION['username'] ;
			$userId=$_SESSION['id'] ;
			$subject=$_SESSION['subject'];
		}else {
			header('Location:homepage.php') ;
			die() ;
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
 <form action="" method="post" id="exam" autocomplete="off">
	<?php   
	        include_once("dbconn.php");
			$sql="SELECT qid,quest FROM questions WHERE subject = '$subject'" ;
			$query=mysqli_query($conn, $sql);
			
			if($query){
				
				while($result=mysqli_fetch_array($query)){
					$id=$result[0];
					$question=$result[1];
					$sql1="SELECT ans1,ans2,ans3,ans4 FROM answers WHERE qid = '$id'";
					$query1=mysqli_query($conn,$sql1);
					echo "<legend>".$question."</legend><br>" ;
					echo "<ul>" ;
					if($query1){
						$result1=mysqli_fetch_array($query1);
						$ans1 =$result1[0];
						$ans2 =$result1[1];
						$ans3 =$result1[2];
						$ans4 =$result1[3];
						echo "<input type='checkbox'/> ".$ans1."<br><input type='checkbox'/> ".$ans2."<br><input type='checkbox'/> ".$ans3."<br><input type='checkbox'/> ".$ans4."<br><br> " ;
						
					}
					echo "</ul>";
					
				}
				
			}
	
			?>
		<input type="submit" name="submit" class="signPad" value='Submit Answers' />
	</form>

</body>
</html>