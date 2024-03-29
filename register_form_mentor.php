
 <?php   
    require_once("loginTitleBar.php");


    ?>

<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px;">Welcome to  Mentor07</h1>
	<hr>
	<div class="row justify-content-md-center">
		<div class="col-md-5">



			<?php
				if(isset($_SESSION['error'])){
					echo "
						<div class='alert alert-danger text-center'>
							<i class='fas fa-exclamation-triangle'></i> ".$_SESSION['error']."
						</div>
					";

					//unset error
					unset($_SESSION['error']);
				}

				if(isset($_SESSION['success'])){
					echo "
						<div class='alert alert-success text-center'>
							<i class='fas fa-check-circle'></i> ".$_SESSION['success']."

						</div>
					";

					//unset success
					unset($_SESSION['success']);
				}
			?>


			<div class="card">
				<div class="card-body">
				    <h5 class="card-title text-center">Mentors Registration Account</h5>
				    <h2><center>Step 1/2</center></h2>
				    <hr>
				    <form method="POST" action="mentor_register.php">

						<div class="form-group row">
						  	<label for="username" class="col-3 col-form-label">Username</label>
						  	<div class="col-9">
						    	<input class="form-control" type="username" id="username" name="username" value="" placeholder="input Username" required>
						  	</div>
						</div>

				    	<div class="form-group row">
						  	<label for="email" class="col-3 col-form-label">Email</label>
						  	<div class="col-9">
						    	<input class="form-control" type="email" id="email" name="email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : ''; unset($_SESSION['email']) ?>" placeholder="input email" required>
						  	</div>
						</div>

						<div class="form-group row">
						  	<label for="password" class="col-3 col-form-label">Password</label>
						  	<div class="col-9">
						    	<input class="form-control" type="password" id="password" name="password" value="<?php echo (isset($_SESSION['password'])) ? $_SESSION['password'] : ''; unset($_SESSION['password']) ?>" placeholder="input password" required>
						  	</div>
						</div>
						<div class="form-group row">
						  	<label for="confirm" class="col-3 col-form-label">Confirm</label>
						  	<div class="col-9">
						    	<input class="form-control" type="password" id="confirm" name="confirm" value="<?php echo (isset($_SESSION['confirm'])) ? $_SESSION['confirm'] : ''; unset($_SESSION['confirm']) ?>" placeholder="re-type password">
						  	</div>
						</div>
				    <hr>
				    <div>
				    	<button type="submit" class="btn btn-success" name="register"><i class="far fa-user"></i> Signup</button>
				    	
				    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>