<?php
/**
 * The template for displaying all single merchandise posts
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
// get the current taxonomy term.
$merchterm      = get_queried_object();
$merchtitle     = $merchterm->name;
$bannertitle    = $menupage;
$bannersubtitle = wp_strip_all_tags( term_description() );
$args           = array(
	'title'    => 'workroom1128 Merchandise',
	'subtitle' => 'Check out our collection of workroom1128 Wearables and Accessories.',
	'cat'      => 'merchandise',
);
get_template_part( 'global-templates/banner', 'banner', $args );
?>

<div class="wrapper wrapper--page" id="index-wrapper">
	<div class="container-fluid" id="content" tabindex="-1">
		<div class="row"> 
			<main class="site-main" id="main"> 
				<div class="mt-5"></div> 
				<!-- ======= Single Merch Section ======= -->
				<section id="merch" class="merch section-bg">
					<div class="container" data-aos="fade-up"> 
						<div class="mb-5"> 
							<?php echo esc_html( workroom1128_custom_breadcrumbs() ); ?>
						</div> 

						<div class="section-title">
							<h2><?php echo esc_html( $merchtitle ); ?></h2>
							<div class="taxonomy-description">
								<h3><?php echo term_description(); ?></h3>
							</div>
						</div>
					<!-- Post Content
					============================================= -->
					<?php
					if ( have_posts() ) :

						while ( have_posts() ) :
							the_post();

							get_template_part( 'loop-templates/content', 'single-merch' );
							?>
							<div class="mb-5">
								<?php workroom1128_post_nav(); ?>
							</div>
							<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile;
					else :
						get_template_part( 'loop-templates/content', 'none' );
					endif;
						wp_reset_postdata();
					?>
					<?php edit_post_link(); ?>
					</div>
				</section>

			</main><!-- #main -->
		</div>

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
