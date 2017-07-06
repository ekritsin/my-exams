
  <?php	
     
	 error_reporting(E_ALL & ~E_NOTICE);
	 session_start();
	  
	 if ($_POST['submit']){
		  include_once("dbconn.php");
		 $username = strip_tags($_POST['username']); /*  safety tags */
		 $password = strip_tags($_POST['password']);
		 $user = strip_tags($_POST['user']);
	      
		
		if($user == 'Student'){
			$sql = "SELECT id,username,password FROM student WHERE username = '$username' " ;
			$query = mysqli_query($conn,$sql) ;
			
		}elseif($user == 'Professor'){
			
			$sql1= "SELECT pid,username,password FROM professor WHERE username = '$username' " ;
			$query = mysqli_query($conn,$sql1) ;
			
		}
		if ($query){
			
			$row = mysqli_fetch_row($query);
			$userId = $row[0];
			
			$dbUsername = $row[1] ; 
			
			$dbPassword = $row[2] ;			 
		 }
		 else {
			 echo  "I dont know anymore " ;
			 
		 }
	
	   	if ($username == $dbUsername && $password == $dbPassword ){
			 $_SESSION['username'] = $username ;
			 $_SESSION['id'] = $userId ;
		     if($user == 'Student'){
				 header('Location: sIndex.php') ;	
			 }else{
				 
				  header('Location: pIndex.php') ;	
			 }
			 	  
		}		
		else {
			
			 echo " Incorrect username OR password !" ;
		 }
	 }
	 
	 
  ?>
 <!DOCTYPE html>
<html>
  
 <head>
	<meta charset="utf-8">
	<title>Online Exams - Sign in</title>
	<link rel="stylesheet" type="text/css" href="myStyle1.css">

 </head>
  

<body >
       <head>
       <nav class='nav-cont' id='menu'>
			  <a id='pic'>
				<img src="https://s-media-cache-ak0.pinimg.com/236x/75/27/34/7527343580a0bc6c001841c943ea1ec5.jpg" alt="BookWorm" style="float:left;width:200px;height:100px;">
			 </a>
			 <ul>
				<li><a class='bigfont' href="homepage.php">Home</a></li>
				<li><a class='bigfont' href="about.php">About</a></li>
				
			 </ul>
	   </nav>
	   <hr>
	   <br>
		</head>

       <head>
	   <section class='backIn'><br><br>
		  <form method="post" action="signUser.php"  id="sign-in" autocomplete="off">
		   <label for="sign-in" ><h1> Sign In</h1></label> <br>
             
			 <div><label for="user" class="formLabel"><b>Select user type: </b></label> 
			<input required list="op" name="user" id="user" placeholder = 'Student'/> 
			 <datalist id='op' >
			 <option>Professor</option>
			 <option>Student</option>
			 </datalist>
			</div>

			<div><label for="username" class="formLabel"><b>Username: </b></label> 
			<input required type="text" name="username" id="username" /> </div>
			
			<div><label for="password" class="formLabel"><b>Password: </b></label>
			<input required type="password" name="password" id="password " placeholder="6 to 9 numbers/letters" /> </div>
			<div >
				  <input name="submit" type="submit" class="signPad"  value="Sign in" />
				</div>
		   </form><br>
	   </section>
	   </head>
      

</body>


</html>