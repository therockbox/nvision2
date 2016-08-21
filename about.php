<?php
  	//Set values for page
$page_title = "nVision: About";
$thispage="about us";
$thissection="about";
include_once('./includes/header.php');
?>


<div id="page-desc">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="no-underline">About Us</h3>
			</div>
		</div>
	</div>			
</div> <!-- End header-bottom -->

<div class="container">
	<div class="row">
				<?php include_once('./includes/nav-sidebar.php'); ?>

		<div class="span9 push-down"> <!-- NEST -->
			<h3 class="no-underline">Our Philosophy</h3>

			<div class="row img-border-thick tile">

				<div class="span3">
					<img src="img/aboutus-image.jpg" alt="office photo" />
				</div>
				<div class="span5">
					<h4><strong>"We provide solutions that meet our clients' expectactions while adhering to industry best practices." -<em>nVision</em></strong></h4>
					<p>Founded in 2005, nVision is a group of web designers seeking to provide their clients with stellar end results and excellent service. We specialize in web design, web development, mobile development, and branding. We have worked with businesses ranging from the smallest startups to the largest corporations, so we have experience working with different types of clients and their respective needs.</p>
					<p>We are constantly updating our skills to expand our knowledge set and stay ahead of the competition. Because of this, our clients always receive fresh and breathtaking results.</p>
				</div>	
			</div>

			<!-- Meet the Team section -->
			<h3 class="no-underline whitespace">Meet the Team</h3>
			<div class="row img-border-thick tile">

				<div class="span3">
					<img src="img/bradpitt.jpg" alt="project manager photo" /><!-- http://www.flickr.com/photos/erprofe/4724823996/ -->
				</div>
				<div class="span5">
					<span>Brad Pitt</span><br><strong>Founder/Project Manager</strong><br><br>
					<p>Brad is the founder and project manager at nVision. Having worked with numerous clients, Brad has gained a deep understanding of the industry and knows what it takes to deliver the right solution for the project at hand.</p>
					<p>Over the past several years he has helped nVision grow from just a tiny idea to a mighty contender in its field.</p>
				</div>
				<div class="span3 whitespace">
					<img src="img/halle.jpg" alt="cms expert photo" /><!-- http://www.flickr.com/photos/69810591@N07/6354691457/ -->
				</div>
				<div class="span5 whitespace">
					<span>Halle Berry</span><br><strong>CMS/E-commerce</strong><br><br>
					<p>Halle is known in the office as the CMS and E-commerce expert. She has honed her skills in a variety of platforms, including Wordpress, Drupal, ZenCart, and Magento.</p>
					<p>She is a vital asset to the team, allowing nVision to provide scalable management and billing solutions that meet the needs of our clients.</p>
				</div>
				<div class="span3 whitespace">
					<img src="img/scarlett.jpg" alt="web designer photo" /><!-- http://www.flickr.com/photos/scarlettijohansson/4252993228/ -->
				</div>
				<div class="span5 whitespace">
					<span>Scarlett Johansson</span><br><strong>UX/Mobile/Web Designer</strong><br><br>
					<p>Scarlett specializes in web design, creating clean and crisp interfaces that are user-friendly and that will keep your viewers coming back.</p>
					<p>Her design skills extend to the mobile world as well, adapting to the myriad of screen displays to ensure a pleasurable experience on both iOS and Android platforms.</p>
				</div>
				<div class="span3 whitespace">
					<img src="img/mjw.jpg" alt="front-end developer photo" /><!-- http://www.flickr.com/photos/51360509@N06/5681996653/ -->
				</div>
				<div class="span5 whitespace">
					<span>Michael Jai White</span><br><strong>Front-End Developer</strong><br><br>
					<p>Michael has an extensive background in web development and programming languages, including Javascript, jQuery, PHP, HTML5/CSS3, as well as SEO basics.</p>
					<p>A stickler for persistent experiences, Michael makes sure his code functions as intended and does not fall victim to cross-browser bugs and inconsistencies.</p>
				</div>		 				 		
			</div>      	
		</div> <!-- End Nest -->


	</div> <!-- End main row -->


</div> <!-- End container -->

<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/scripts.php'); ?>