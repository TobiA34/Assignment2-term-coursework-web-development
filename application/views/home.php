
<html>
<head>
	<!--Link in a stylesheet to CodeIgniter-->
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/bootstrap.css">
	<title>home Page</title>

</head>
<body>


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


<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4"> Game review website</h1>
		</div>
		<hr>
		<div class="col-12">
			<h1 class="lead">On this website you will be able to see the latest game reviews for playstation, Xbox and Nintendo games.</h1>
		</div>
	</div>
</div>


<!--- container2 --->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<img src="<?php echo base_url();?>application/Images/ps4.png">
			<h3>Ps4</h3>
			<p>This console was made by Sony</p>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<img src="<?php echo base_url();?>application/Images/xbox-one.png">
			<h3>Xbox one</h3>
			<p>This console was made by Mircosoft </p>
		</div>
		<div class="col-xs-12 col-md-4">
			<img src="<?php echo base_url();?>application/Images/nintendo.png">
 			<h3>Nintendo Switch</h3>
			<p>This was made by Nintendo </p>
		</div>

	</div>

</div>

<hr>
<!--- container3 --->

<!--- Latest game reviews -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 display="display-4">Latest game reviews</h1>
			<hr>

		</div>
	</div>
</div>

<!--- Cards -->
<div class="container-fluid padding ">
	<div class="row padding">
		<div class="col-md-4">
			<div class="card">
				<img class="imd-top" src="<?php echo base_url();?>application/Images/xbox.png">
				<div class="card-body">
					<h4 class="card-title">Review1</h4>
					<p class="card-text">Get text from database</p>
					<a href="#" class="btn btn-outline-secondary">See review</a>
				</div>
			</div>


		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="imd-top" src="<?php echo base_url();?>application/Images/xbox.png">
				<div class="card-body">
					<h4 class="card-title">Review2</h4>
					<p class="card-text">Get text from database</p>
					<a href="#" class="btn btn-outline-secondary">See review</a>
				</div>
			</div>


		</div>
		<div class="col-md-4">
			<div class="card">
				<img class="imd-top" src="<?php echo base_url();?>application/Images/xbox.png">
				<div class="card-body">
					<h4 class="card-title">Review3</h4>
					<p class="card-text">Get text from database</p>
					<a href="#" class="btn btn-outline-secondary">See review</a>
				</div>
			</div>
		</div>

		<! --- chat room--->
		<hr>
 		<div container-fluid>
			<div class="row jumbotron">
				<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
					<p class="lead">To chat about the latest upcoming games in a chat room
					click on the chat button on the right hand side which will automatically
					take you to the directed page,
					 where you can  go and  talk about the latest game and give an honest review about the game</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2" class="btn btn-outline-secondary btn-lg">
					<a href="#"><button type="button" class="btn btn-outline-secondary btn-lg">Chat room</button></a>
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


