
<html>
<head>
	<!--Link in a stylesheet to CodeIgniter-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/css/bootstrap.css">
	<title>home Page</title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

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
					<a class ="nav-link" a href="<?php echo base_url();?>index.php/review">Review</a>
				</li>
				<li class="nav-item">
					<a class ="nav-link"a href="<?php echo base_url();?>index.php/account">Account</a>
				</li>

				<li class="nav-item">
					<a <?php echo anchor('Login/logout', 'Logout'); ?>Logout</a>
				</li>
				<li>
					<div id="search bar">
					<form> <label class="bg-dark">search</label> <input type="text"  v-model="search" placeholder="Search games"> <input type="submit"></form>
					</div>
				</li>


				<li>

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

<!-- <div id="app">-->
<!-- 		<div class="container-fluid padding ">-->
<!--				<div class="row padding">-->
<!--				<div class="col-md-4 mb-5" v-for="(games, index) in gameReviews" :key="index">-->
<!---->
<!--					<div class="card text-center ml-9">-->
<!--						<img class="card-img-top" :src="games.image" alt="" width="100%">-->
<!--						<div class="card-block">-->
<!--							//get name from the database-->
<!--							<h4 class="card-title mt-5">{{ games.name }}</h4>-->
<!--							//get information for the database-->
<!--							<p class="card-text p-3">{{ games.information }}</p>-->
<!--							//get game console from the database-->
<!--							<p class="card-text p-3">{{ games.console }}</p>-->
<!---->
<!--							<a class="btn mb-3 bg-light" href="#">See Review</a>-->
<!--						</div>-->
<!--					</div>-->
<!---->
<!--				</div>-->
<!--			</div>-->
<!-- 	</div>-->



      <?php


	  $base_url = 'base_url';

	  foreach ($result as $row) {

		  $image = $row->image;



		  echo <<<_END
<div class="container">
    <div class="row mt-5 justify-content-center">
        				<div class="card card-custom mx-2 mb-3 bg-light">
 							<img class="mt-2" width="850px" src="{$base_url('application/' . $row->image)}"/>
   							<h4   class="card-title mt-5 text-center display-4"> $row->title</h4>
  							<p class="card-text p-3 text-center display-4">$row->review </p>
 							<p class="card-text p-3 text-center display-4">$row->console</p>
							<a class="btn mb-3 bg-secondary" href="#">See Review</a>
						</div>
					</div>
			</div>

_END;

	  }
	?>


<?php

function displayCards(){

 }

?>



<!---->
<!--	 --><?php
//			  echo "Information From Database <br> <br>";
//
//	 foreach ($result as $row){
//		 ?>
<!--		 <tr>-->
<!---->
<!--			 <td>--><?php //echo $row->review_id . "."?><!--</td>-->
<!--			 <td>--><?php //echo $row->review . ","?><!--</td>-->
<!--			 <img src="--><?php //echo base_url('application/' . $row->image)?><!--" alt=""/>-->
<!--			 <td>--><?php //echo $row->title. ","?><!--</td>-->
<!--			 <td>--><?php //echo $row->console?><!--</td>-->
<!--		 </tr><br>-->
<!--		 --><?php
//	 }
//
//	 ?>



	 <!--- footer -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-md-left">
					<div class="py-0">
						<h3 class="my-4 white"></h3>
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

<script src="<?php echo  base_url('application/scripts/CustomVue.js')?>"></script>

</html>

