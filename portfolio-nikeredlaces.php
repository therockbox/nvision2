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
		<div class="span6"><h3 class="no-underline">Nike Red Laces</h3></div>
		<div class="span6"><a href="portfolio.php"><h3 class="right  no-underline">&lt;&lt; Back</h3></a></div>

		<div class="span4 aside whitespace">
			<h3 class="underline">Case Study</h3>
			<p>Nike Red Laces operates under the Product Red brand, which serves to sell products whose profits are given to help prevent and treat infectious diseases in Africa.</p>
			<p>The launch of their website created a direct destination for consumers to shop for Nike products whose proceeds would go to this cause.</p>
			<h3 class="underline">Technologies</h3>
			<ul>
				<li>E-commerce solution with accompanying mobile app.</li>
				<li>Account sign-in feature that lets user track how much their spending has contributed to the cause.</li>
			</ul>
			<h5><a href="#">Visit Site &gt;&gt;</a></h5>
		</div>

		<div class="span8 whitespace">
			<img src="img/redlaces-display.jpg" alt="nike red laces image" />
		</div>  
	</div> <!-- End main row -->

	<div class="row img-border-thick img-description whitespace">
		<div class="span12"><h3 class="underline">Other Projects</h3></div>

		<div class="span4">
			<a href="portfolio-motelblack.php"><img src="img/motelblack-otherproj.jpg" alt="motel black image" class="opacityHover" /></a>
			<a href="portfolio-motelblack.php"><span>Motel Black</span></a><br><br>
		</div>
		<div class="span4">
			<a href="portfolio-cocacola.php"><img src="img/cocacola-otherproj.jpg" alt="cocacola image" class="opacityHover" /></a>
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