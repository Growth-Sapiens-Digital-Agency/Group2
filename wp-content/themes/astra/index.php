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
<!-- Newsletter block -->
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
<?php 
if ( astra_page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;


get_footer();
