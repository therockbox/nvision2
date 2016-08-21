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
		<div class="span6"><h3 class="no-underline">Coca-Cola</h3></div>
		<div class="span6"><a href="portfolio.php"><h3 class="right  no-underline">&lt;&lt; Back</h3></a></div>

		<div class="span4 aside whitespace">
			<h3 class="underline">Case Study</h3>
			<p>One of the world's most recognized brands, Coca-Cola contacted us for a redesign of their website.</p>
			<p>The result was a fresh look fitting for modern times that appeals to their audience and also their stakeholders, satisfying business objectives.</p>
			<h3 class="underline">Technologies</h3>
			<ul>
				<li>Activity and press event tracking via multiple social media plug-ins</li>
				<li>Nearest Coca-cola vending machine locator</li>
				<li>Custom Adobe Flash animations</li>
			</ul>
			<h5><a href="#">Visit Site &gt;&gt;</a></h5>
		</div>

		<div class="span8 whitespace">
			<img src="img/cocacola-display.jpg" alt="cocacola image" />
		</div>  
	</div> <!-- End main row -->

	<div class="row img-border-thick img-description whitespace">
		<div class="span12"><h3 class="underline">Other Projects</h3></div>

		<div class="span4">
			<a href="portfolio-nikeredlaces.php"><img src="img/redlaces-otherproj.jpg" alt="nike red laces image" class="opacityHover" /></a>
			<a href="portfolio-nikeredlaces.php"><span>Nike Red Laces</span></a><br><br>
		</div>
		<div class="span4">
			<a href="portfolio-motelblack.php"><img src="img/motelblack-otherproj.jpg" alt="motel black image" class="opacityHover" /></a>
			<a href="portfolio-motelblack.php"><span>Motel Black</span></a><br><br>
		</div>
		<div class="span4">
			<a href="portfolio-nasa.php"><img src="img/nasa-otherproj.jpg" alt="nasa image" class="opacityHover" /></a>
			<a href="portfolio-nasa.php"><span>NASA</span></a><br><br>
		</div>	
		
	</div> <!-- end Other Projects row -->

</div> <!-- End container -->

<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/scripts.php'); ?>