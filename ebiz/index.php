<?php

?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<?php require "includes/header.php";?>
</head>
<body>
	<div class="row navigation-part">
		<?php require "includes/menu.php";?>
	</div>
	<div class="courosel-part">
		<div id="myCarousel" class="carousel slide" ><!--data-ride="carousel"-->
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="resources/images/home_courosel1.jpg" alt="Los Angeles" style="width:100%; height: 600px;">
				</div>

				<div class="item">
					<img src="resources/images/home_caurosel2.jpg" alt="Chicago" style="width:100%;height: 600px;">
				</div>

				<div class="item">
					<img src="resources/images/home_caurosel3.jpg" alt="New york" style="width:100%;height: 600px;">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="content-part-one" style="min-height: 420px;background-color: #03A9F4;padding: 50px;">
		<div class="col-sm-6">
			<div class="header" style="color: white; font-size: 30px;">SOME OF OUR SERVICES</div>
			<div class="content-body" style="color: white; font-size: 20px; margin-left: 30px;" >
				<ul>
					<li> Design</li>
					<li> Marketing</li>
					<li> Social Media</li>
					<li>Consultancy</li>
					
				</ul>
			</div>
			<div class="content-more-btn button">
				<button type="button" class="btn btn-primary-outline" style=" background-color: transparent;border-color: white;margin-left: 100px;">MORE INFO </button>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="content-part-one-carousel">
				<div id="myCarousel1" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="resources/images/home_courosel1.jpg" alt="Los Angeles" style="width:100%; height: 300px;">
						</div>

						<div class="item">
							<img src="resources/images/home_caurosel2.jpg" alt="Chicago" style="width:100%;height: 300px;">
						</div>

						<div class="item">
							<img src="resources/images/home_caurosel3.jpg" alt="New york" style="width:100%;height: 300px;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-part-two" style="min-height: 420px;background-color: #3F51B5; padding:50px;">
		<div class="col-sm-6">
			<div class="content-part-two-carousel">
				<div id="myCarousel2" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="resources/images/home_courosel1.jpg" alt="Los Angeles" style="width:100%; height: 300px;">
						</div>

						<div class="item">
							<img src="resources/images/home_caurosel2.jpg" alt="Chicago" style="width:100%;height: 300px;">
						</div>

						<div class="item">
							<img src="resources/images/home_caurosel3.jpg" alt="New york" style="width:100%;height: 300px;">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="header" style="color: white; font-size: 30px;">WE ALSO OFFER</div>
			<div class="content-body" style="color: white; font-size: 20px;" >
				<ul>
					<li>Expert Trainging</li>
					<li> Outsourcing</li>
					<li> Team Intergration </li>
					<li> Support and Maintainance </li>
				</ul>
			</div>
			<div class="content-more-btn button">
				<button type="button" class="btn btn-primary-outline" style=" background-color: transparent;border-color: white;margin-left: 100px;">MORE INFO </button>
			</div>
		</div>
	</div>
	<div class="content-client-ratings" style="background-color: #0099ff;min-height: 420px; padding: 50px; color: white;">
		<!-- Skills Section -->
		<div class="container">
			<div class="w3-row-padding">
				<div class="w3-col m6">
					<div class="header" style="color: white; font-size: 30px;">OUR RATINGS</div>
					<p>From the past services that we have offered to our clients and by working with our patners,
					we have recieved good ratings which keeps getting better with every contract that we recieve.</p>
					<p>Many clients are happy to work with us in projects such as enterprise, web, mobile and custom software development.
					Our clients are also happy with other services we offer such as counsultancy, biometric integration, resource outsourcing and the support service that we offer for our systems</p>
				</div>
			</div>
		</div>
	</div>
	<div class="content-about" style="background-color: #673AB7;min-height: 420px; padding: 50px; color: white;>
	<div class="w3-container" style="padding:40px 16px" id="about">
		<h3 class="w3-center">OUR DIFFERENCE</h3>
		<p class="w3-center w3-large">Key features of our company</p>
		<div class="w3-row-padding w3-center" style="margin-top:34px">
			<div class="w3-quarter">
				<i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
				<p class="w3-large">Responsive</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="w3-quarter">
				<i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
				<p class="w3-large">Passion</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="w3-quarter">
				<i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
				<p class="w3-large">Design</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
			<div class="w3-quarter">
				<i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
				<p class="w3-large">Support</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
			</div>
		</div>
	</div>
	<div class="content-statistics" style="background-color: #9C27B0;min-height: 420px; padding: 50px; color: white;>
	<!-- Promo Section "Statistics" -->
	<div class="w3-container w3-row w3-center w3-padding-64">
		<div class="w3-quarter">
			<span class="w3-xxlarge">14+</span>
			<br>Partners
		</div>
		<div class="w3-quarter">
			<span class="w3-xxlarge">55+</span>
			<br>Projects Done
		</div>
		<div class="w3-quarter">
			<span class="w3-xxlarge">89+</span>
			<br>Happy Clients
		</div>
		<div class="w3-quarter">
			<span class="w3-xxlarge">150+</span>
			<br>Meetings
		</div>
	</div>
</div>
</body>
</html>