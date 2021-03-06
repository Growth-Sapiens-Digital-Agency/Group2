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

	.newsletter-outer {
		padding: 60px 0;
		background: gray;
		text-align: center;
	}

	.newletter-block {
		width: 100%;
		max-width: 600px;
		margin: 0 auto;
		padding: 0 15px;
	}

	.newletter-block input,
	.newletter-block button {
		width: 100%;
		text-transform: uppercase;

	}

	.newletter-block h2,
	.newletter-block p {
		color: white;
	}
	/*Keerthi*/
	
	.footer-menu-section ul {
    list-style-type: none;
    width: 63%;
    margin: 0 auto;
}
.footer-menu-section ul li {
    display: block;
    width: auto;
    float: left;
    padding-right: 7px;
}
section.footer-menu-section {
    float: left;
    width: 100%;
    display: block;
    padding-top: 40px;
    padding-bottom: 40px;
    background: #000;
}
.footer-menu-section ul li a {
    color: #fff;
	padding-right: 8px;
    font-size: 13px;
}
.footer-menu-section ul li:not(:last-child):after{
	content: "/";
    color: #fff;
    font-size: 20px;
}
.footer-menu-section ul li:last-child {
    line-height: 42px;
}
</style>
<?php astra_content_bottom(); ?>

</div> <!-- ast-container -->
</div><!-- #content -->

<!--Footer Menu Section -->
<section class="footer-menu-section">
<div class="container">
<div class="row">
    
	<?php
                                if ( has_nav_menu( 'footer' ) ) {
                            $foot = array(
                                'theme_location' => 'footer',
                                'container' => FALSE,
                                'menu_class' => '',
                                'echo' => true,
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                                
                            );
                            wp_nav_menu($foot);
                                }
                            ?> 
	</div>
</div>
</section>
<!--Footer Menu Section -->

<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();

?>
<!-- Social media icons -->
<div class="container">
	<div class="row" style="text-align:center">
		<div class="col-sm-12" style="background-color:#EEEEEE;">
			<div class="social-icon-container">
				<a href="#"><img style="width:30px;height:30px;" class="icon-images" src="wp-content/themes/astra/assets/images/twitter.png" alt="Twitter Logo"> </a>

				<a href="#"><img style="width:30px;height:30px;" class="icon-images" src="wp-content/themes/astra/assets/images/facebook.png" alt="Facebook Logo"> </a>
				<a href="#"><img style="width:30px;height:30px;" class="icon-images" src="wp-content/themes/astra/assets/images/youtube.png" alt="youtube Logo"> </a>
				<a href="#"><img style="width:30px;height:30px;" class="icon-images" src="wp-content/themes/astra/assets/images/linkedin.png" alt="linkedin logo"> </a>
				<a href="#"><img style="width:30px;height:30px;" class="icon-images" src="wp-content/themes/astra/assets/images/google.png" alt="google logo"> </a>
			</div>
		</div>
	</div>
</div>

<!-- Social media icons end -->


<!-- Newsletter block | Stephen-->
<div class="container newsletter-outer">
	<div class="row">
		<div class="col-md-12">
			<div class="newletter-block">
				<h2>Subscribe To Our Newsletter</h2>
				<p>Sign up here to get the latest news, updates and special offers delivered directly to your inbox.</p>
				<form>
					<div class="two-col">
						<div class="half-col lrg">
							<input type="email" placeholder="Enter Your Email ID" required>
						</div>
						<div class="half-col">
							<button type="submit">subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>