<?php 
	session_start();
	if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == 1){
		$_SESSION['success'] = "You are already logged in...";
		header("Location: profile.php");
		exit;
	}

	if(isset($_COOKIE,$_COOKIE['is_logged_in']) && $_COOKIE['is_logged_in'] == 1){
		$_SESSION['is_logged_in'] = true;
		$_SESSION['success'] = "You are already logged in...";
		header("Location: profile.php");
		exit;

	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center" style="color: red;">User Login</h3>
				<?php 
					if(isset($_SESSION,$_SESSION['error'])){
						echo "<p class='alert alert-danger'>".$_SESSION['error']."</p>";
						unset($_SESSION['error']);
					}
				 ?>
				<hr>
				<form action="loginverify.php" class="form" method="post">
					<div class="form-group row">
						<label for="" class="col-sm-3">
							Username:
						</label>
						<input type="text" name="username" class="col-sm-9 form-control form-control-sm" placeholder="Enter your username" required>
					</div>
					<div class="form-group row">
						<label for="" class="col-sm-3">
							Password:
						</label>
						<input type="text" name="password" class="col-sm-9 form-control form-control-sm" placeholder="Enter your password" required>
					</div>
					<div class="row">
						<div class="col-3"></div>
						<input type="checkbox" name="remember" value="1">&nbsp; Remember me
					</div>
					<br>
					<div class="row">
						<div class="col-3"></div>
						<div>
							<button class="btn btn-sm btn-success"> Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>