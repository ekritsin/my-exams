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
	   <h1><a>Welcome <?php echo $username ;?> !! You're logged in !! <a></h1>
	  
	   <head role='TakeAction'>
			<section>
			
				<div class="container" class="btn-group-vertical">
					<h2><a>Students check this out! </a></h2>
					<div >
						<button class="btn btn-default" type="button" ><a href ="lesson.php"><span>Take an exam</span></a>
												
					</div>		
					
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Previous exams and Grades
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Biology</a></li>
							<li><a href="#">Maths</a></li>
							<li><a href="#">Physics</a></li>
						</ul>
					</div>
				
				
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Statistics
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Biology</a></li>
							<li><a href="#">Maths</a></li>
							<li><a href="#">Physics</a></li>
						</ul>
					</div>
					
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Useful e-learning URLs
						<span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="#">Biology</a></li>
							<li><a href="#">Maths</a></li>
							<li><a href="#">Physics</a></li>
						</ul>
					</div>
				</div>
			</section>
			</head>
	   

</body>


</html>