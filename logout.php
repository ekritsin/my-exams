 <?php	
		
		error_reporting(E_ALL & ~E_NOTICE);
		session_start(); 
		session_destroy() ;
		header('Location:homepage.php') ;
		
		?>
<!DOCTYPE html>
<html>
<h1>Logged out my friend!!!! </h1>

</html>