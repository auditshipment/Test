<?php
include 'header.php'; ?>

 <div id="wrapper">

 <div class="card-authentication2 mx-auto my-3">
	    <div class="card-group">

	    	<div class="card mb-0">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="assets/images/logo-icon.png" alt="logo icon">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Sign Up</div>
					    <form action="register.php" method="post">
					    	<?php if(isset($_GET['error'])){
					    		?>
					    		<div class="alert alert-danger"><h5 class="text-center"><?php echo $_GET['error']; ?></h5> </div>
					    	<?php } ?>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputName" class="sr-only">Name</label>
							  <input type="text" id="exampleInputName" class="form-control" placeholder="Name" name="name">
							  <div class="form-control-position">
								  <i class="icon-user"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
							  <input type="text" id="exampleInputEmailId" class="form-control" placeholder="Email ID" name="email">
							  <div class="form-control-position">
								  <i class="icon-envelope-open"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Password</label>
							  <input type="password" id="exampleInputPassword" class="form-control" placeholder="Password" name="password">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputRetryPassword" class="sr-only">Confirm Password</label>
							  <input type="password" id="exampleInputRetryPassword" class="form-control" placeholder="Confirm Password" name="confirmpassword">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <input type="submit" class="btn btn-light btn-block waves-effect waves-light" value='Sign Up' />
						 <div class="text-center pt-3">

						 <hr>

						 <p class="text-warning">Already have an account? <a href="index.php"> Sign In here</a></p>
						 </div>
					</form>
				 </div>
				</div>
	    	</div>
	     </div>
	    </div>


 </div>

<?php
include 'footer.php'; ?>