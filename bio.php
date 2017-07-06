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
		<h2><a>Select a lesson : </a></h2>  
		<div>
		<ul> 
		<?php 
		
			include_once("dbconn.php");
			$sql = "SELECT subject, title FROM exam WHERE subject = 'Biology'" ;
			$query = mysqli_query($conn ,$sql)  or die(mysqli_error($conn));
			if($query){
				while($row=mysqli_fetch_array($query)) {
					$subject = $row[0] ;
					$title = $row[1];
					echo "<h3><li>".$subject." | ".$title. "</li></h3><br>";
				}
				
			}else {
				echo "Prob";
			}
		
		
		?>
        </ul>		
		</div>	  
		
		
		
		
		
</body>
</html>