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

get_footer();?>
 <div class="tcontainer">
        <div class="ticker-wrap1">
            <div class="ticker-move">
                <div class="ticker-item">For a limited time, get 30% off Morpheus 8. </div>
                <div class="ticker-item">Call us to claim your offer   </div>
                
            </div>
        </div>
    </div>
     <div class="tcontainer">
        <div class="ticker-wrap2">
            <div class="ticker-move">
                <div class="ticker-item">20% off All Alumier products and fillers. Limited Period. </div>
                <div class="ticker-item"> Call us on <a href="tel:289.337.2761">289.337.2761</a> to make a purchase</div>
                
            </div>
        </div>
    </div>