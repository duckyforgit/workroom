<?php
/**
 * Template Name: Hours Template
 * Template Post Type: post, page, hour
 *
 * Template for displaying a landing page.
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header( 'workroom1128' );

$bannertitle    = $menupage;
$bannersubtitle = wp_strip_all_tags( term_description() );
$bannerimg      = get_field( 'image', $foodterm );
$args           = array(
	'title'    => 'Hours of Operation',
	'subtitle' => '',
	'cat'      => 'hours',
	'image'    => $bannerimg,
);
get_template_part( 'global-templates/banner', 'banner', $args );

?>
<div class="wrapper wrapper--page" id="index-wrapper">
	<div class="container-fluid" id="content" tabindex="-1">
		<div class="row"> 
			<main class="site-main" id="main"> 
				<div class="mt-5"></div>

					<!-- ======= Page Content Section ======= -->
					<section id="hours" class="hours section-bg">
						<div class="container" data-aos="fade-up">
							<div class="mb-5">
								<?php echo esc_html( workroom1128_custom_breadcrumbs() ); ?>
							</div>
						</div>

							<div class="section-title mt-5">
								<h1 class="display-3 text-white"><span class="primary-color">SmockTown </span>&amp; <span class="primary-color">Attic Hardware</span></h1>				 
							</div>
						<!-- Post Content 
						============================================= --> 
							<?php
							if ( have_posts() ) {
								// Start the Loop.
								while ( have_posts() ) {
									the_post();
									get_template_part( 'loop-templates/content', 'page' );

								} // end of the loop.
							} else {
								get_template_part( 'loop-templates/content', 'none' );
							}
							?>
						</div>
					</section>
				</div>
		</main>
	</div>

</div>

<?php
get_footer();
