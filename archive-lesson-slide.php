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
<div class="wrapper vh-60" id="archive-wrapper">

<div class="container" id="content" tabindex="-1">

	<div class="row"> 

		<main class="site-main" id="main">
		<?php
		if ( is_user_logged_in() ) {
			if ( have_posts() ) {
				?>
			<div class="container">
				<div class="elearning-archive-courses row justify-content-between">
					<div class="col-sm-12 col-lg-6">
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

					<div class="elearning-courses-bar col-sm-12 col-lg-4 justify-content-flex-end">
					<?php get_search_form(); ?> 

					</div>

				</div>
				<div class="row">			
					<ul id="<?php echo esc_html( get_post_type() ); ?>-list" class="list-unstyled row flex-column gx-5 gy-3 <?php echo esc_html( get_post_type() ); ?>"  >				
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();
						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						if ( has_post_format() ) {
							get_template_part( 'loop-templates/content', get_post_format() );
						} else {
							get_template_part( 'loop-templates/content-archive', get_post_type() );
						}
					}
					?>
					</ul>
				</div>
			</div>

				<?php
			} else {
				get_template_part( 'loop-templates/content', 'none' );
			}
			?>
		<?php } else { ?>
			<h2>You must purchase a course to view this page.</h2>
			<a class="wp-post-link" href="<?php home_url( 'offers/life-skills-course/' ); ?>" title="" rel="bookmark" ><h3 class="h4 mt-5">View more about our Life Skills Course: Overcoming Career Constraints</h3></a>
		<?php  
		} ?> 
		</main><!-- #main -->

		<?php
		// Display the pagination component.
		// workroom1128_pagination();
		?>

	</div><!-- .row -->

</div><!-- #content -->

</div><!-- #archive-wrapper -->


<?php
get_footer();
