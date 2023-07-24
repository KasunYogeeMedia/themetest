<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amigo
 */

get_header();
?>

<div class="center-content">
	<div class="my-3" id="header-wrapper">
		<img id="logo-image" src="<?php echo get_template_directory_uri(); ?>/inc/images/logo.png" alt="logo-image" />
	</div><!--header-wrapper end-->

	<div id="content-wrapper">
		<div id="green-color-line"></div>
		<div id="text-wrapper">
			<h3 class="my-3 mx-auto">Amigo, We are launching Soon</h3>
			<p class="p-1 p-md-3">We are currently working on an awesome new site,
				won't be long. Please don't forget to check out our
				tweets and to subscribe to be notified!</p>
		</div>
		<div id="counter">

		</div>
		<div id="search-box-wrapper">
			<div id="search-box">
				<form method="post" action="subscribe_newsletter.php">
					<div class="input-group mb-3">
						<div class="row m-0 w-100">
							<div class="col">
								<input type="email" name="email-address" placeholder="Please enter your email for latest updates ..." id="email-hear" required>
							</div>
							<div class="col-auto my-auto">
								<button type="submit" class="btn btn-primary" id="subscribe-button">
									<img src="<?php echo get_template_directory_uri(); ?>/inc/images/plus-icon.png" alt="Plus Icon" />
								</button>
							</div>
						</div>
					</div>
				</form>

			</div>
		</div>
		<div id="contact-us" class="mb-4">
			<!-- Contact Button trigger modal -->
			<a type="button" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
				<p>CONTACT US</p>
				<img id="contact-icon" src="<?php echo get_template_directory_uri(); ?>/inc/images/contact-icon.png" alt="contact-icon" />
			</a>

		</div>
	</div><!--content-wrapper end-->
</div>

<div id="footer-wrapper">
	<div id="footer-left">
		<p>Amigo Coming Soon Template COPYRIGHT &copy;
			<script>
				document.write(new Date().getFullYear())
			</script> | Amigo
		</p>
	</div>

	<div id="footer-right">
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/inc/images/facebook-icon.png" alt="facebook-icon" /></a>
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/inc/images/twitter-icon.png" alt="twitter-icon" /></a>
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/inc/images/google-icon.png" alt="google-icon" /></a>
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/inc/images/linkdin-icon.png" alt="linkedin-icon" /></a>
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/inc/images/youtube-icon.png" alt="youtube-icon" /></a>
	</div>
</div><!--footer-wrapper end-->
<!-- Contact Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content rounded-3">
			<div class="modal-header bg-lgreen text-white">
				<h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="contactForm" action="/submit_contact_form.php" method="post">
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="mb-3">
						<label for="message" class="form-label">Message</label>
						<textarea class="form-control" id="message" name="message" rows="4" required></textarea>
					</div>
					<div class="d-grid gap-2">
						<button type="submit" form="contactForm" class="btn btn-lgreen btn-block">Send
							Message</button>
					</div>
				</form>
			</div>
			<div class="modal-footer bg-light">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
