
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
					<a class ="nav-link" a href="<?php echo base_url();?>index.php/review">Review</a>
				</li>
				<li class="nav-item">
					<a class ="nav-link"a href="<?php echo base_url();?>index.php/account">Account</a>
				</li>

				<li class="nav-item">
					<a <?php echo $this->session->userdata('username'); ?></a>
				</li>
				<li class="nav-item">
				<a  <?php echo anchor('Login/logout', 'Logout'); ?>Logout</a>
				</li>


			</ul>
		</div>
	</div>
</nav>

<h3 class="text-center mt-5 ml-5 text-light display-5">Welcome <?php echo $this->session->userdata('username'); ?> </h3>
<hr class="my-4">

<div class="modal-dialog text-center">
	<div class="col-sm-8 main-section">
		<div class="modal-content">
			<div class="col-12 user-img">
				<img class="user_img" src="<?php echo base_url();?>application/Images/user.png"">
			</div>
			<p class="text-light">Username: <?php echo $this->session->userdata('username'); ?>  <br></p>
 			<p class="text-light">Email:<?php echo $this->session->userdata('email'); ?> <br></p>
			<p class="text-light">first name: <?php echo $this->session->userdata('firstname'); ?>   <br></p>
			<p class="text-light">lastname:<?php echo $this->session->userdata('lastname'); ?>   <br></p>
			<p class="text-light">Telephone:<?php echo $this->session->userdata('telephone'); ?>  <br></p>
			<p class="text-light">Dob:<?php echo $this->session->userdata('dob'); ?>    <br></p>
			<p class="text-light"><br>You can <a href="<?php echo base_url();?>index.php/updateAccount">update</a> your account details here.<br></p>
		</div>
	</div>
</div>
<!-- footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-md-left">
				<div class="py-0">
					<h3 class="my-4 white"><span class="mx-2 font-italic text-warning"</span></h3>
					<p class="footer-links font-weight-bold">
						<a class="text-white" href="#"></a>
						<a class="text-white" href="#"></a>
						<a class="text-white" href="#"></a>
						<a class="text-white" href="#"></a>
						<a class="text-white" href="#"></a>
					</p>
					<p class="text-light py-4"></p>
				</div>
			</div>
			<div class="py-2 my-4">
				<div>
					<p><i class="fa fa-phone mx-2 "></i>&copy;6G5Z2107 - Tobi Adegoroye - 18011328 - 2019/20</p>
				</div>

			</div>
		</div>

</footer>

</body>
</html>
