<?php
  	//Set values for page
$page_title = "nVision: Portfolio";
$thispage="portfolio";
include_once('./includes/header.php');
?>


<div id="page-desc">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="no-underline">Portfolio - Project Display</h3>
			</div>
		</div>
	</div>			
</div> <!-- End page-desc -->

<div class="container">

	<div class="row img-border-thick img-description">
		<div class="span6"><h3 class="no-underline">Motel Black</h3></div>
		<div class="span6"><a href="portfolio.php"><h3 class="right  no-underline">&lt;&lt; Back</h3></a></div>

		<div class="span4 aside whitespace">
			<h3 class="underline">Case Study</h3>
			<p>Motel Black is a popular budget motel chain throughout the eastern U.S. with properties soon opening in the U.K. </p>
			<p>We delivered a solution that expanded their business footprint while maintaining the likeness of their brand.</p>
			<h3 class="underline">Technologies</h3>
			<ul>
				<li>Real-time room reservations with 3D camera virtual tour.</li>
				<li>Integrated mobile application with real-time updating of available rooms and ability to reserve on the go.</li>
			</ul>
			<h5><a href="#">Visit Site &gt;&gt;</a></h5>
		</div>

		<div class="span8 whitespace">
			<img src="img/motelblack-display.jpg" alt="motel black picture" />
		</div>  
	</div> <!-- End main row -->

	<div class="row img-border-thick img-description whitespace">
		<div class="span12"><h3 class="underline">Other Projects</h3></div>

		<div class="span4">
			<a href="portfolio-nikeredlaces.php"><img src="img/redlaces-otherproj.jpg" alt="nike red laces picture" class="opacityHover" /></a>
			<a href="portfolio-nikeredlaces.php"><span>Nike Red Laces</span></a><br><br>
		</div>
		<div class="span4">
			<a href="portfolio-cocacola.php"><img src="img/cocacola-otherproj.jpg" alt="cocacola picture" class="opacityHover" /></a>
			<a href="portfolio-cocacola.php"><span>Coca-Cola</span></a><br><br>
		</div>
		<div class="span4">
			<a href="portfolio-nasa.php"><img src="img/nasa-otherproj.jpg" alt="nasa image" class="opacityHover" /></a>
			<a href="portfolio-nasa.php"><span>NASA</span></a><br><br>
		</div>	
		
	</div> <!-- end Other Projects row -->

</div> <!-- End container -->


<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/scripts.php'); ?>