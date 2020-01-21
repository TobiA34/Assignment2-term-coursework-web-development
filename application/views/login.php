
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
			</ul>
		</div>
	</div>
</nav>
<?php echo validation_errors();?>
  <div class="modal-dialog text-center">
	<div class="col-sm-8 main-section">
		<div class="modal-content">
			<div class="col-12 user-img">
				<img class="user_img" src="<?php echo base_url();?>application/Images/user.png"">
			</div>
			<form class="col-12" action="<?php echo base_url('index.php/checkLogin'); ?>" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="username" maxlength="32" placeholder="Enter Username" >
					<span class="text-danger"><?php echo form_error('username')?></span>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" maxlength="32" placeholder="Enter password" >
					<span class="text-danger"><?php echo form_error('password')?></span>

				</div>
				<button type="submit" class="btn-small"><i class="fas fa-sign-in-alt"></i>Login</button>
				<?php
				echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';
				?>
			</form>
			<div class="col-12 forgot">
				<a href="#">forgot password</a>
			</div>
		</div>
	</div>
</div>



</body>
</html>
