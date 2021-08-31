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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
        
	</div> <!-- ast-container -->
	</div><!-- #content -->
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
<a href="#"><img style="width:30px;height:30px;"  class="icon-images" src="wp-content/themes/astra/assets/images/youtube.png" alt="youtube Logo"> </a>
<a href="#"><img style="width:30px;height:30px;"  class="icon-images" src="wp-content/themes/astra/assets/images/linkedin.png" alt="linkedin logo"> </a>
<a href="#"><img  style="width:30px;height:30px;" class="icon-images" src="wp-content/themes/astra/assets/images/google.png" alt="google logo"> </a>
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
