<?php include 'inc/tophead.php';
	include 'inc/navbar.php';
 ?>

<div class="container mr-auto ml-auto py-5 my-3">
	<div class="col-sm-6 offset-md-3">
		<div class="card">
			<div class="card-header">
				<h3 class="text-left text-danger">
					Enter the following details to sign up
				</h3>
			</div>
			<div class="card-body">
				<form action="" method="post">
				  <div class="form-group">
				  	
				  	<div class="row">
					  	<div class="col-sm-6">
					  		<input type="text" name="first_name" class="form-control form-control-sm" placeholder="Your First Name Here">
					  	</div>
					  	<div class="col-sm-6">
					  		<input type="text" name="last_name" class="form-control form-control-sm" placeholder="Your Last Name Here">
					  	</div>
				    </div>
				  </div>

				  <div class="form-group">
				    <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter Your Email Here">
				    <small class="text-muted">Your Email will be used as your username.</small>
				  </div>

				  <div class="form-group">
				  	<div class="row">
					  	<div class="col-sm-6">
					  		<input type="date" name="dob" class="form-control form-control-sm" placeholder="Your Date Of Birth">
					  	</div>

					  	<div class="col-sm-6">
								<select class="form-control-sm" name="gender">
								    <option value="" disabled selected>Select your gender</option>
								    <option value="m">Male</option>
								    <option value="f">Female</option>
								    <option value="o">Others</option>
								 </select>
							</div> 
					  	</div>
				    </div>

				   <div class="form-group">
				    <input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Password">
				  </div>

				  <div class="form-group">
				    <input type="password" name="c_password" class="form-control form-control-sm" id="exampleInputPassword1" placeholder="Confirm Password">
				  </div>

				  <button type="submit" name="reg_btn" class="btn btn-success btn-block">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>








 <?php include 'inc/pre-footer.php';
 		include 'inc/footer.php'; 
 ?>
