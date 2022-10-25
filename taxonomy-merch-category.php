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

get_header( 'workroom1128' );
// get the current taxonomy term.
$merchterm      = get_queried_object();
$merchtitle     = $merchterm->name;
$bannersubtitle = wp_strip_all_tags( term_description() );
$bannerimg      = get_field( 'banner_image', $merchterm );
$args           = array(
	'title'    => 'workroom1128 Merchandise',
	'subtitle' => 'Check out our collection of workroom1128 Wearables and Accessories.',
	'cat'      => 'merchandise',
	'image'    => $bannerimg,
);
// Commented out code get_template_part( 'global-templates/banner', 'banner', $args );.
?>
<div class="wrapper wrapper--page" id="index-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row"> 
			<main class="site-main" id="main"> 
				<div class="mt-5"></div>
				<!-- ======= Merch Section ======= -->
				<section id="merch" class="merch section-bg">
					<div class="container" data-aos="fade-up"> 
						<div class="mb-5"> 
							<?php echo esc_html( workroom1128_custom_breadcrumbs() ); ?>
						</div> 

						<div class="section-title">
							<h2 class="display-3">workroom1128 <?php echo esc_html( $merchtitle ); ?></h2>
							<div class="taxonomy-description">								 
								<h3><?php esc_attr( the_archive_description() ); ?></h3>
							</div>
						</div>
					</div>
					<!-- Post Content
					============================================= -->
					<?php
					if ( have_posts() ) :
						?>
						<div class="container p-0 mt-5">
							<ul id="merch-list"  class="row gy-3 list-unstyled align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">  
							<?php
							// Start the loop.
							while ( have_posts() ) :
								the_post();
								get_template_part( 'loop-templates/content', 'merch' );
							endwhile;
							else :
								get_template_part( 'loop-templates/content', 'none' );
						endif;
							wp_reset_postdata();
							?>
							</ul>
				</section><!-- End Menu Section --> 

				<?php edit_post_link(); ?>
			</main><!-- #main -->
		</div>

	</div><!-- #content -->

</div><!-- #archive-wrapper -->


<?php
get_footer();
