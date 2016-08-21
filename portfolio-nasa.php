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
		<div class="span6"><h3 class="no-underline">NASA</h3></div>
		<div class="span6"><a href="portfolio.php"><h3 class="right  no-underline">&lt;&lt; Back</h3></a></div>

		<div class="span4 aside whitespace">
			<h3 class="underline">Case Study</h3>
			<p>U.S. aerospace research agency NASA reached out to nVision looking for new methods to manage their ever-growing content.</p>
			<p>Our team of developers came up with an easy to use content management solution, allowing for simple editing of content on the site. In addition, we threw on a fresh coat of paint to give them an up-to-date look.</p>
			<h3 class="underline">Technologies</h3>
			<ul>
				<li>Content Management via WordPress</li>
				<li>Multimedia integration, including NASA TV, audio and video podcasts</li>
				<li>NASA RSS feeds that serve up the latest NASA news</li>
			</ul>
			<h5><a href="#">Visit Site &gt;&gt;</a></h5>
		</div>

		<div class="span8 whitespace">
			<img src="img/nasa-display.jpg" alt="nasa image" />
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
			<a href="portfolio-cocacola.php"><img src="img/cocacola-otherproj.jpg" alt="cocacola image" class="opacityHover" /></a>
			<a href="portfolio-cocacola.php"><span>Coca-Cola</span></a><br><br>
		</div>	
		
	</div> <!-- end Other Projects row -->

</div> <!-- End container -->

<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/scripts.php'); ?>