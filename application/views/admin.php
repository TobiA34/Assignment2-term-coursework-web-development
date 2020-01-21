
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
					<a class ="nav-link"a href="<?php echo base_url();?>index.php/register">Account</a>
				</li>

				<li class="nav-item">
				<a <?php echo anchor('Login/logout', 'Logout'); ?>Logout</a>
				</li>

			</ul>
		</div>
	</div>
</nav>

<h3>Welcome <?php echo $this->session->userdata('user'); ?> </h3>


</body>
</html>
