<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
	<div id="primary" <?php astra_primary_class(); ?>>
		<?php 
		astra_primary_content_top();
		
		astra_content_loop();

		astra_pagination();

		astra_primary_content_bottom(); 
		?>
	</div><!-- #primary -->
<?php 
if ( astra_page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;
?>
<div class="footer-menu-section">
<ul>
<li><a href="#">Allergens & Colors</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms of Use</a></li>
<li><a href="#">Return Policy</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Accessibility Standards</a></li>
<li><a href="#">Accessibility for customers with a disability</a></li>
</ul>
</div>
<?php
get_footer();
?>