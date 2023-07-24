<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amigo
 */

?>


</div><!-- #main-wrapper -->

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Your custom scripts here -->
<script src="<?php echo get_template_directory_uri(); ?>/inc/jqfloat/jqfloat.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/countdown-page/js/modernizr.custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/countdown-page/js/jquery.countdown.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/countdown-page/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/inc/jquery-backstretch-master/src/jquery.backstretch.js"></script>
<script>
	$.backstretch([
		"<?php echo get_template_directory_uri(); ?>/inc/images/banner1.jpg",
		"<?php echo get_template_directory_uri(); ?>/inc/images/banner2.jpg",
		"<?php echo get_template_directory_uri(); ?>/inc/images/banner1.jpg"
	], {
		fade: 750,
		duration: 4000
	});

	$(document).ready(function() {
		function widthx() {
			var wx = $(window).width();
			alert(wx);
		}

		$('.countDays, .countHours, .countMinutes, .countSeconds').jqFloat({
			width: 0,
			height: 60,
			speed: 2000
		});

	});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>

</html>