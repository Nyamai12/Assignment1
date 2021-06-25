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
	<!-- Section: contact -->
	<section id="contact" class="home-section text-center" style="font-size: 18px;">
		<div class="heading-contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="wow bounceInDown" data-wow-delay="300ms">
							<div class="section-heading">
								<h2>Get in touch</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-lg-offset-5">
					<hr class="marginbot-50">
				</div>
			</div>
			<div class="row">

				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<h3>Contact Form</h3>
								<form id="contact-form" action=""  role="form" class="contactForm">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">
												Name</label>
												<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
											</div>
											<div class="form-group">
												<label for="email">
												Email Address</label>
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
												</div>
											</div>
											<div class="form-group">
												<label for="subject">
												Subject</label>
												<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="name">
												Message</label>
												<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
											</div>
											<button type="submit" class="btn btn-skin pull-center" id="btnContactUs">
											Send Message</button>
										</div>
									</div>
								</form>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="widget-contact">

								<h3>Contact Telephone</h3>
								<p><span class="glyphicon glyphicon-phone"></span>+254 (0) 707711265</p>
								<h3>Contact Email</h3>
								<p><span class="glyphicon glyphicon-envelope"></span> helpdesk@chenelasystems.com</p>
								<h3>Follow us on</h3>
								<address>
									<p><span> <i class="fa fa-facebook"></i></span> Facebook</p>
									<p><span> <i class="fa fa-google-plus"></i></span> Google +</p>
									<p><span> <i class="fa fa-linkedin"></i></span> Linked In</p>
								</address>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- /Section: contact -->
</body>