<?php
  	//Set values for page
$page_title = "nVision: Services";
$thispage="about us";
$thissection="services";
include_once('./includes/header.php');
?>


<div id="page-desc">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="no-underline">Services</h3>
			</div>
		</div>
	</div>			
</div> <!-- End page-desc -->

<div class="container">
	<div class="row">
		<?php include_once('./includes/nav-sidebar.php'); ?>

		<div class="span9 push-down"> <!-- NEST -->
			<h3 class="no-underline">What We Do</h3>

			<div class="row img-border-thick tile">

				<div class="span8">
					<h4><strong>"We build websites that make you stand out from the crowd."</strong></h4>
					<p>nVision provides you with web solutions that gets you noticed, increasing your online presence to get traffic rolling through your site. Whether it be a redesign of a current website, a web application, or issues creating an identity through branding, nVision has got you covered.</p>
					<p>Take a look below to read a brief description of our services. If you are interested in a service not listed below, please feel free to contact us.</p>
					<br>
					<div id="tabs">
						<ul id="tab-list">
							<li><a href="#tab-1">Web Design</a></li>
							<li><a href="#tab-2">Web Development</a></li>
							<li><a href="#tab-3">Logo/Branding</a></li>		 			
						</ul>
						<br />
						<div id="tab-1">
							<p>Exceptional user experiences and the lasting impressions that follow are the result of careful planning and understanding in the consultation phase of your project.</p>
							<p>Our team of designers will help take your vision from a mere concept to a fully functional website, complete with valid code and the latest design trends. Already have your vision outlined? No problem. We'll take your feedback and produce a site mockup so that we understand what you're looking for.</p>
						</div>
						<div id="tab-2">
							<p>We build web-based solutions that are easy to use and that follow best practices of validated code and usability. No matter whether your growing business is in need of a content managament system, an e-commerce solution, or a custom web application, we can produce results that meet your needs.</p>
							<p>Our team will meet with you throughout the lifecycle of the project to ensure that everyone is engaged and working towards the same goals.</p>
						</div>
						<div id="tab-3">
							<p>Is your business having an identity crisis? nVision provides logo and branding services that help capture the essence of your brand, helping to communicate who you are and what you represent to your target audience.</p>
							<p>We also extend these services to marketing and promotional materials that will distinguish you from the crowd and evoke interest.</p>
						</div>		 				 		
					</div> <!-- End tabs -->

					<div class="getStarted">
						<a class="btn btn-danger" href="contact.php"><h4>Get Started!</h4></a>
					</div>

				</div>	
			</div>

			<!-- Project phases -->
			<a id="projectphases"></a>
			<h3 class="no-underline whitespace">Our Process</h3>
			<div class="row img-border-thick tile">


				<div class="span8 whitespace">
					<div class="number-heading blue">1</div>
					<div class="heading"><h4>Consultation</h4></div>

					<div class="desc">
						<p>First things first. Our consultation meetings will help us have a better understanding of your business so that an effective direction is formed.</p>
						<h5>Consider this:</h5>
						<ul>
							<li>What are your business objectives?</li>
							<li>Are there any goals or success criteria that can be measured to indicate a proper return on investment?</li>
							<li>Who is your target audience?</li>
							<li>What is your budget range?</li>
							<li>What goals do you have for the users of this website?</li>
						</ul>
					</div>	
				</div>

				<div class="span8 whitespace">
					<div class="number-heading blue">2</div>
					<div class="heading"><h4>Design &amp; Development</h4></div>

					<div class="desc">
						<p>This is where we discuss the look and feel of your website, including its content, site structure, and the underlying technology that will run it.</p>
						<h5>Consider this:</h5>
						<ul>
							<li>Do you have ideas on what content and features the site will have?</li>
							<li>Will your site have any features that need to integrate with another database or system?</li>
							<li>Are there any older browser compatibilities that must be adhered to? If you're unsure we will help explain this area.</li>
							<li>Assets will be discussed, including logos, color palettes, use of imagery and typography.</li>
							<li>We'll need to discuss any possible platform restraints on part of the hosting provider.</li>
						</ul>		 			
					</div>	
				</div>

				<div class="span8 whitespace">
					<div class="number-heading blue">3</div>
					<div class="heading"><h4>Project Management</h4></div>

					<div class="desc">
						<p>In the final phase of our process we will establish the who, what and how of the project. Once this is established, everyone should be on the same page and have confidence in the project moving forward.</p>
						<h5>Consider this:</h5>
						<ul>
							<li>Timescales for project deliverables will be discussed based upon the information gathered in the previous phases and what is reasonably doable given a timeframe.</li>
							<li>Who do we need to speak to in your business? Is there anyone we need to impress?</li>
							<li>Within your organization, who will have the authority to sign-off on the project?</li>
							<li>Any possible risks and dependencies that may be encountered moving forward will be discussed.</li>
						</ul>
					</div>	
				</div>

				
			</div>    <!-- End Row -->  	
		</div> <!-- End Nest -->

	</div> <!-- End main row -->


</div> <!-- End container -->

<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/scripts.php'); ?>

