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
			  
		 <h1>Welcome <?php echo $username ;?> !! You're logged in !! </h1>
		<head role='TakeAction'>
				<section>
					<article>
						<h2>Professors. Do your best! </h2>
						<nav  class='choose' id='users'>
						<ul>
						<li><a  href="exams.php"><b>Make an exam . Select a subject </a></li>
						<li><a  href="">Exam material </a></li>
						<li><a  href="ins.php">Insert Question  </a></li>
						<li><a  href=""> Evaluate Question  </a></b></li>
						</ul>
						</nav>
					</article>
				</section>
		</head>
		
		
</body>


</html>