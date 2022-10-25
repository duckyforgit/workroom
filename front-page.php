<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper p-0" id="index-wrapper">

	<div class="container-fluid p-0" id="content" tabindex="-1">

			<main class="site-main" id="main">
			<?php
			if ( have_posts() ) {
				// Start the Loop.
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'clients' );
					?>
					<?php
					the_content();
					get_template_part( 'template-parts/content', 'testimonial-ajax' );
					get_template_part( 'template-parts/content', 'consultation' );
					/**
					 * Commented out code get_template_part( 'template-parts/content', 'masonry' );.
					 */
					/* use the get template part  ( 'template-parts/sections/section', 'exit-intent');.  */
					?>
					<?php
				}
			} else {
				get_template_part( 'loop-templates/content', 'none' );
			}
			?>

		</main><!-- #main --> 

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
