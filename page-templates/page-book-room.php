<?php
/**
 * Template Name: Book a Room Template
 * Template Post Type: post, page
 *
 * Template for displaying a landing page.
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header( 'workroom1128' );

?>
<div class="wrapper wrapper--page book-a-room" id="page-wrapper">

	<div class="container mt-5 mb-5" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main"> 
				<!-- ======= Page Content Section ======= -->
				<section class="page section-bg">
					<div class="container" data-aos="fade-left">
						<div class="mb-5">
							<?php echo esc_html( workroom1128_custom_breadcrumbs() ); ?>
						</div>
					<!-- Post Content
					============================================= -->
					<?php
					if ( have_posts() ) {
						// Start the Loop.
						while ( have_posts() ) {
							the_post();
							the_content();

						} // end of the loop.
					} else {
						get_template_part( 'loop-templates/content', 'page' );
					}
					?>
					</div>
				</section>
			</main>
		</div>

	</div>
</div>

<?php
get_footer();
