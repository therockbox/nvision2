<?php
    //Set values for page
$page_title = "nVision";
$thispage="home";
include_once('./includes/header.php');
?>


<div class="intro-photo">
	<div class="container">
		<div class="row">
			<div class="span7">
				<div class="intro-box">
					<h1>We Design Awesome Websites!</h1>
					<p>All we need is a little information from you to get started.</p>
					<a class="btn btn-info" href="about.php"><h4>Learn more</h4></a>
					<a class="btn btn-danger" href="contact.php"><h4>Get a Free Quote</h4></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<section class="web-design">
		<div class="row">
			<div class="span6">
				<h2 class="intro-heading">Web Design</h2>
				<p class="intro-p">Our team of designers produce solutions that meet the unique image and needs of our clients. No templates here. All of our designs are custom-made.</p>
				<a class="btn btn-info" href="services.php"><h4>Learn more</h4></a>
			</div>

			<div class="span6">
				<div id="myCarousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item">
							<img src="img/site1.jpg" alt="Picture of existing site">
						</div>
						<div class="item">
							<img src="img/site2.jpg" alt="Picture of example site">
						</div>
					</div>
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
	</section>

	<section class="web-dev">
		<div class="row">
			<div class="span6">
				<img src="img/web-dev2.jpg" alt="Collage of technology platforms">
			</div>        
			<div class="span6">
				<h2 class="intro-heading">Web Development</h2>
				<p class="intro-p">Looking for an e-commerce or CMS solution? We have you covered. We'll make sure your web application is user-friendly and compatible on various platforms.</p>
				<a class="btn btn-info" href="services.php"><h4>Learn more</h4></a>
			</div>
		</div>
	</section>

	<section class="branding">
		<div class="row">
			<div class="span6">
				<h2 class="intro-heading">Branding</h2>
				<p class="intro-p">First impressions are lasting impressions. We help you create logos and branding materials that communicate the right message to your audience.</p>
				<a class="btn btn-info" href="services.php"><h4>Learn more</h4></a>
			</div>
			<div class="span6">
				<img src="img/branding-collage.jpg" alt="branding picture">
			</div>
		</div>
	</section>
</div>  <!-- End container -->


<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/scripts.php'); ?>
