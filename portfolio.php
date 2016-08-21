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
				<h3 class="no-underline">Portfolio</h3>
			</div>
		</div>
	</div>			
</div> <!-- End page-desc -->

<div class="container">
	<h3 class="no-underline">Clients We've Worked With</h3>

	<div class="row img-border-thick img-description">
		<div class="span6">
			<a href="portfolio-nikeredlaces.php"><img src="img/redlaces.jpg" alt="Nike red laces picture" class="opacityHover" /></a>
			<a href="portfolio-nikeredlaces.php"><span>Nike Red Laces</span></a><br><br>
		</div>

		<div class="span6">
			<a href="portfolio-motelblack.php"><img src="img/m.jpg" alt="motel black picture" class="opacityHover" /></a>
			<a href="portfolio-motelblack.php"><span>Motel Black</span></a><br><br>
		</div>      	

		<div class="span6">
			<a href="portfolio-cocacola.php"><img src="img/coke.jpg" alt="coca-cola picture" class="opacityHover" /></a>
			<a href="portfolio-cocacola.php"><span>Coca-Cola</span></a><br><br>
		</div>
		<div class="span6">
			<a href="portfolio-nasa.php"><img src="img/nasa.jpg" alt="nasa picture" class="opacityHover" /></a>
			<a href="portfolio-nasa.php"><span>NASA</span></a><br><br>
		</div>          

	</div> <!-- End main row -->


</div> <!-- End container -->

<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/scripts.php'); ?>