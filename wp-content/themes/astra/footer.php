<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */



if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>

<style>
	/* Stephen */
	.newsletter-block {
		text-align: center;
		background: #17181d;
	}

	.two-col {
		width: 100%;
		display: -webkit-box;
		display: -moz-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
	}

	.half-col {
		width: 50%;
	}

	.half-col.lrg {
		width: 70%;
	}

	.newsletter-block input {
		width: 100%;
	}

	.social_icons_image {
		height: 30;
		width: 30px;
	}
</style>
<?php astra_content_bottom(); ?>

</div> <!-- ast-container -->
</div><!-- #content -->
<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();

?>
<!-- Newsletter block | Stephen-->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="newletter-block">
				<h2>Subscribe To Our Newsletter</h2>
				<p>Sign up here to get the latest news, updates and special offers delivered directly to your inbox.</p>
				<form>
					<div class="two-col">
						<div class="half-col lrg">
							<input type="text" placeholder="Enter Your Email ID" required>
						</div>
						<div class="half-col">
							<button type="submit">subscribe<button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Social media icons -->
<div class="container">
	<div class="row" style="text-align:center">
		<div class="col-sm-12" style="background-color:#EEEEEE;">
			<div class="social-icon-container">
				<a href="#"><img class="social_icons_image" src="assets/images/twitter.png" alt="Twitter Logo"> </a>

				<a href="#"><img class="social_icons_image" src="assets/images/facebook.png" alt="Facebook Logo"> </a>
				<a href="#"><img class="social_icons_image" src="assets/images/youtube.png" alt="youtube Logo"> </a>
				<a href="#"><img class="social_icons_image" src="assets/images/linkidin.png" alt="linkedin logo"> </a>
				<a href="#"><img class="social_icons_image" src="assets/images/google.png" alt="google logo"> </a>
			</div>
		</div>
	</div>
</div>

<!-- Social media icons end -->

</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>