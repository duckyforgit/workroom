<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="archive-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
				<div class="container">
					<div class="elearning-archive-courses row justify-content-between">
						<div class="col-sm-6">
							<header class="page-header">
								<?php
								if ( is_post_type_archive( 'event' ) ) {
									echo '<h1 class="entry-title">Upcoming Events</h1>';
								} else {
									the_archive_title( '<h1 class="entry-title">', '</h1>' );
									the_archive_description( '<div class="taxonomy-description">', '</div>' );
								}
								?>

							</header><!-- .page-header -->
					</div>
					<div class="elearning-courses-bar col-sm-4 justify-content-flex-end">
					<?php get_search_form(); ?>
					</div>
					<ul id="<?php echo esc_html( get_post_type() ); ?>-list" class="list-unstyled row flex-column gx-lg-5 gy-3 <?php echo esc_html( get_post_type() ); ?>"  >
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'archive-offer' );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>
				</ul>
			</div>
			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
