<?php 
	session_start();
	echo $_SESSION['success'];
	if(!isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] != 1){
		$_SESSION['error'] = "You must log in first.....";
		header("Location: ./");
		exit;
	}

	echo "<br>";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>`</title>
 	<link rel="stylesheet" href="../css/bootstrap.min.css">
 </head>
 <body>
 	<a href="logout.php" class="btn btn-danger">
 		Logout
 	</a>
 </body>
 </html>