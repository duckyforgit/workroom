<?php
/**
 * The template for displaying all single beverage posts
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header( 'workroom1128' );
// get the current taxonomy term.
$foodterm = get_queried_object();

// vars.
$byline = get_field( 'category_byline', $foodterm );
if ( 'attic-hardware' === $foodterm->slug ) {
	$menutitle = 'Attic Hardware Food Menu';
	$menucat   = $foodterm->term;
} else {
	$menutitle = 'workroom1128 workroom1128 Food Menu';
	$menucat   = $foodterm->term;
}
$bannertitle    = $menupage;
$bannersubtitle = wp_strip_all_tags( term_description() );
$args           = array(
	'title'    => $menutitle,
	'subtitle' => '',
	'cat'      => $foodterm->term,
);
// get_template_part( 'global-templates/banner', 'banner', $args );
// get the current taxonomy term.
$foodterm       = get_queried_object();
$menutitle      = 'Food Menu';
$bannertitle    = $menupage;
$bannersubtitle = wp_strip_all_tags( term_description() );
$args           = array(
	'title'    => 'workroom1128 Food Menu',
	'subtitle' => 'Food by Pink Catering.',
	'cat'      => 'food-menu',
);
get_template_part( 'global-templates/banner', 'banner', $args );
?>

<div class="wrapper wrapper--page" id="index-wrapper">
	<div class="container-fluid" id="content" tabindex="-1">
		<div class="row"> 
			<main class="site-main" id="main"> 
				<div class="mt-5"></div>  

				<!-- ======= Single Food Menu Section ======= -->
				<section id="food-menu" class="food-menu section-bg">
					<div class="container" data-aos="fade-up"> 
						<div class="mb-5"> 
							<?php echo esc_html( workroom1128_custom_breadcrumbs() ); ?>
						</div> 

						<div class="section-title">
							<h2><?php echo esc_html( $foodtitle ); ?></h2>
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
							get_template_part( 'loop-templates/content', 'single-menu' );
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
