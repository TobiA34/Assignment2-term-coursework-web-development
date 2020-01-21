


<html>
<head>
	<!--Link in a stylesheet to CodeIgniter-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/bootstrap.css">
	<title>home Page</title>

</head>
<body id ="login_body">


<! --- Navigation --->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand"><img class="logo" src="<?php echo base_url();?>application/Images/xbox.png">
		</a>
		<button class ="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class ="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class ="nav-link" a href="<?php echo base_url();?>index.php">About</a>
				</li>
				<li class="nav-item">
					<a class ="nav-link"a href="<?php echo base_url();?>index.php/login">Login</a>
				</li>
				<li class="nav-item">
					<a class ="nav-link"a href="<?php echo base_url();?>index.php/register">Register</a>
				</li>
				<li class="nav-item">
					<a class ="nav-link"a href="<?php echo base_url();?>index.php">Account</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<! --- user image --->
<div class="modal-dialog text-center">
	<div class="col-sm-8 main-section">
		<div class="modal-content">
			<div class="col-12 user-img">
				<img class="user_img" src="<?php echo base_url();?>application/Images/user.png"">
			</div>
			<form class="col-12" action="./insert_users" method="post">

				<h1 class="bg-light">Please enter detail to register<h1>


				<input placeholder="Enter telephone" class="form-control" type="text"   name="telephone" required >
				<br>
		        <input placeholder="Enter username" class="form-control" type="text"   name="username" maxlength="32" required>
				<br>
				<div class="form-group">
				<input placeholder="Enter password" class="form-control" type="password" id="password"   name="password" maxlength="32" required> <br>
				</div>

				<div class="form-group">
				<input placeholder="Enter first name" class="form-control" type="text"   name="first_name" maxlength="50" required> <br>
				</div>

				<div class="form-group">
				<input placeholder="Enter last name" class="form-control" type="text"   name="last_name" maxlength="50"  required> <br>
				</div>

				<div class="form-group">
				<input placeholder="Enter dob" class="form-control" type="date"  name="dob"  value="" required> <br>
				</div>

				<div class="form-group">
				<input placeholder="Enter email" class="form-control" type="email"   name="email" maxlength="50" value="" required> <br>
				</div>

				<br>

				<button type="submit" class="btn-small"><i class="fas fa-sign-in-alt"></i>register</button>
			</form>
		</div>
	</div>
</div>



</body>
</html>
