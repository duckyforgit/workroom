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
$foodterm = get_queried_object();
// vars.
$byline = get_field( 'category_byline', $foodterm ); 
if ( 'attic-hardware' === $foodterm->slug ) {
	$menupage = 'Attic Hardware Food Menu';
	$menucat  = $foodterm->slug;
} else {
	$menupage = 'Smocktown Food Menu';
	$menucat  = $foodterm->taxonomy;
} 
?>

<?php
$bannertitle    = $menupage;
$bannersubtitle = wp_strip_all_tags( term_description() );
$bannerimg      = get_field('banner_image', $foodterm );
$args           = array(
	'title'    => $menupage,
	'subtitle' => '',
	'cat'      => 'food-menu',
	'image'    => $bannerimg,
);
// Commented out code get_template_part( 'global-templates/banner', 'banner', $args );.
?>

<div class="wrapper wrapper--page" id="index-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row"> 
			<main class="site-main" id="main"> 
					<div class="mt-5"></div> 
				<!-- ======= Menu Section ======= -->
					<section id="food-menu" class="food-menu section-bg">
						<div class="container" data-aos="fade-up"> 
							<div class="mb-5"> 
								<?php echo esc_html( workroom1128_custom_breadcrumbs() ); ?>
							</div> 

							<div class="section-title">
							<h2 class="display-3"><?php echo esc_html( $menupage ); ?></h2>
								<div class="taxonomy-description">
									<h3><?php echo esc_html( $byline ); ?></h3>
								</div>
							</div>
							<div id="filters" class="container">  
								<?php
								$cats = array(
									'taxonomy'   => 'food-menu-category',
									'orderby'    => 'parent',
									'show_count' => $show_count,
									'pad_counts' => $pad_counts,
									'childless'  => 0,
									'child_of'   => 0,
									'title_li'   => $title,
									'hide_empty' => $empty,
									'parent'     => 0,
								);

								$foods = get_terms(
									array(
										'taxonomy'   => 'food-menu-category',
										'hide_empty' => false,
										'parent'     => 0,
									),
								);
								?>
									<div class="d-flex flex-row blog-selectors button-group filters-button-group flex-wrap align-items-center">

										<button class="button is-checked" data-filter="*">All</button>

										<?php foreach ( $foods as $food ) : ?> 									
											<?php 
											if ( ( 'workroom1128' !== $food->slug ) && ( 'attic-hardware' !== $food->slug && 'smocktown' !== $food->slug )	) :
											?>
												<button class="button" data-filter=".<?php echo esc_attr( $food->slug ); ?>"><?php echo esc_html( $food->name ); ?>
												</button>
											<?php endif; ?>
											<?php
										endforeach;
										wp_reset_postdata();
										?>

									</div> 

							</div> 
						<!-- Post Content
						============================================= -->
						<?php

						if ( have_posts() ) :
							?>

							<div class="container p-0 mt-5"> 

								<ul id="blog-list"  class="row gy-3 gridlayout list-unstyled align-items-center aos-init aos-animate" data-layout="grid" data-aos="fade-up" data-aos-delay="200"> 

									<?php
									while ( have_posts() ) :
										the_post();
										?>

										<?php
										$blogterms = get_the_terms( get_the_ID(), 'food-menu-category' );

										if ( $blogterms && ! is_wp_error( $blogterms ) ) :
											$tslugs_arr = array();
											$string     = '';
											foreach ( $blogterms as $blogterm ) {
												$string .= $blogterm->slug;
												$string .= ' ';
											}
										endif;
										?>

										<!-- Posts
										============================================= -->
										<li id="post-<?php the_ID(); ?>" class="col col-lg-6 mt-2 mb-2 grid-item menu-item align-items-center <?php echo esc_html( $string ); ?>" data-category="<?php echo esc_html( $string ); ?>"> 
											<div class="d-flex align-items-center">
												<img class="d-none d-md-inline float-start menu-img" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="<?php the_title(); ?>">
												<div class=" w-100"> 
													<div class="menu-content">
														<a href="<?php echo esc_url( the_permalink() ); ?>"><?php the_title(); ?></a><span><?php the_field( 'price' ); ?></span>
													</div>
													<div class="menu-ingredients">
														<?php the_field( 'description' ); ?>
													</div>
												</div>
											</div>
										</li> 

										<?php
									endwhile;
									else :
										?>

										<div class="item align-center text-center">

											<h2>No food menu items to show</h2>

										</div> 
										<!-- show 404 error here -->
								</ul> 

							</div>

										<?php
						endif;
									wp_reset_postdata();
									?>
						</div> 
					</section><!-- End Menu Section --> 

					<?php edit_post_link(); ?>
				<!-- </div> -->

			</main><!-- #main -->

			<?php
			// Display the pagination component.
			workroom1128_pagination();
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
