<?php 
	ob_start();
	session_start();
	$username = "admin";
	$password = "kaai123";
	if(isset($_POST) && !empty($_POST)){
		$form_user = $_POST['username'];
		$form_pass = $_POST['password'];

		if($username == $form_user){
			//username valid
			if($password == $form_pass){
				//password matched
				$_SESSION['is_logged_in'] = true;
				$_SESSION['success'] = "Welcome! You have successfully logged in.....";
				if(isset($_POST['remember']) && $_POST['remember'] == 1){
					setcookie("is_logged_in",1,time()+86400,"/broadway");
				}

				header("Location: profile.php");
				exit;
			}else{
				//password incorrect
				$_SESSION['error'] = "Password incorrect";
				header("Location: ./");
				exit;
			}
		}else{
			//username invalid
			$_SESSION['error'] = "Username incorrect";
			header("Location: ./");
			exit;
		}
	}else{
		//unauthorized
		$_SESSION['error'] = "Unauthorized access";
		header("Location: ./");
		exit;
	}


	ob_flush(); 
 ?>