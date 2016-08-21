<?php
  	//Set values for page
$page_title = "nVision: Contact";
$thispage="contact";
include_once('./includes/header.php');
?>


<div id="page-desc">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="no-underline">Contact</h3>
			</div>
		</div>
	</div>			
</div> <!-- End page-desc -->

<div class="container">
	<h3 class="no-underline">We want to do business with you!</h3>

	<div class="row">
		<div class="span6">
			<p>Don't hesitate to contact us by phone, email, or via our form below. Once your form is submitted, a representative of nVision will get in touch with you regarding your goals and objectives so that we may begin our process of establishing your project.</p>
			<div class="row">
				<div class="contact-form">
					<form action="" method="POST" name="contact" novalidate="novalidate">

						<div class="span3">
							<label id="name-label">*Name</label>
							<input type="text" name="name" id="name" size="30" value="" />		   		
						</div>

						<div class="span3">
							<label id="company-label">Company Name</label>
							<input type="text" name="companyname" id="companyname" size="30" value="" />		   		
						</div>		   	


						<div class="span3">
							<label id="email-label">*Email</label>
							<input type="email" name="email" id="email" size="40" value="" />   		
						</div>

						<div class="span3">
							<label id="phone-label">*Phone</label>
							<input type="tel" name="phone" id="phone" size="40" value="" maxlength="10" />   		
						</div>	

						<div class="span3">
							<label id="weburl-label">Current Web URL</label>
							<input type="url" name="url" id="url" size="30" value="" />		   		
						</div>

						<div class="span3">
							<label id="budget-label">Budget</label>
							<select>
								<option value=""></option>
								<option value="$3,000 - $6,000">$3,000 - $6,000</option>
								<option value="$6,000 - $9,000">$6,000 - $9,000</option>
								<option value="$9,000 - $10k+">$9,000 - $10k+</option>		 				 		
							</select>		 	
						</div>		   	


						<div class="span3">
							<label id="pages-label">Estimated pages</label>
							<select>
								<option value=""></option>		 		
								<option value="1-5">1-5</option>
								<option value="5-10">5-10</option>
								<option value="10-15">10-15</option>
								<option value="15+">15+</option>		 				 						 		
							</select> 		
						</div>

						<div class="span3">
							<label id="date-label">Estimated start date</label>
							<input type="text" name="date" id="datepicker" readonly="readonly" />   		
						</div>


						<div class="span6">
							<label id="inquiry-label">Brief description of your company and your goals for this website, including any ideas you have in mind.</label>		   	
							<textarea name="inquiry" id="inquiry"></textarea>


							<input type="submit" name="submit" class="btn btn-info" value="Send Message" />
						</div>
					</form>
				</div> <!-- End contact-form -->
			</div> <!-- End row nest -->
		</div> <!-- End span6 -->

		<div class="span5 offset1">
			<div class="contact-box">
				<h3 class="underline">Contact Info</h3><br>
				<ul class="contact-info">
					<li><span>Address: </span>12345 N. Orange Blossom Trail, Orlando, FL 32801</li>
					<li><span>Phone: </span>407-456-7890</li>
					<li><span>Email: </span><a href="#" class="link">sales@nvision.com</a></li>
				</ul>
			</div>
			<a href="http://maps.google.com/maps?q=n+orange+blossom+trail+orlando+fl&amp;hl=en&amp;sll=27.698638,-83.804601&amp;sspn=16.782368,33.815918&amp;hnear=N+Orange+Blossom+Trail,+Orlando,+Florida&amp;t=m&amp;z=13"><img class="contact-box" src="img/googlemap.png" alt="Map of nVision"></a>
		</div>

	</div> <!-- End main row -->


</div> <!-- End container -->

<?php include_once('./includes/footer.php'); ?>
<?php include_once('./includes/scripts.php'); ?>