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

$container = get_theme_mod( 'workroom1128_container_type' );
?>
<?php
// start by fetching the terms for the food_menu_category taxonomy.
// $terms = get_terms( 'food_menu_category', array(.
// 'orderby'    => 'count', //leaving blank allows sort by name.
// 'hide_empty' => 0.
// ) );.
if ( is_post_type_archive( 'food-menu' ) ) {
	$menupage = 'workroom1128 workroom1128 Food Menu';
	$menucat  = 'attic-hardware';
} else {
	$menupage = 'Attic Hardware Food Menu';
	$menucat  = 'workroom1128';
}

?>

<div class="page-container" id="page-wrapper--food-menu">
	<main class="site-main" id="main">

		<div class="container-fluid banner-background--food-menu position--relative"> 
			<div class="banner-background--over">
			</div>

			<div class="banner-background--text position--relative px-4 py-5 my-5 text-center" style="background-color:transparent"> 
					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title display-5 text-white">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header --> 
					<div class="row">
						<div class="col-lg-6 mx-auto">
							<p class="lead mb-4">Our delicious starters, sandwiches and salads are created by Pink Catering to enhance your pub experience.</p>
						</div>
					</div>
			</div>
			<!-- <div class="background-menu--header background-menu--header4"> -->
			<div class="mt-5 h-100"></div>
		<!-- ======= Menu Section ======= -->
			<section id="food-menu" class="food-menu section-bg">
				<div class="container" data-aos="fade-up"> 
					<div class="mb-5"> 
						<?php echo esc_html( workroom1128_custom_breadcrumbs() ); ?>
					</div> 

					<div class="section-title">
						<h2><?php echo esc_html( $menupage ); ?></h2>
						<div class="taxonomy-description">
							<p><?php echo esc_html( the_archive_description() ); ?></p>
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
						// search for space and replace with hyphen.
						?>
						<div class="d-flex flex-row blog-selectors button-group filters-button-group flex-wrap align-items-center">

							<button class="button is-checked" data-filter="*">All</button>

							<?php foreach ( $foods as $food ) : ?> 
								<?php
								if ( ( 'workroom1128' !== $food->slug ) && ( 'attic-hardware' !== $food->slug ) && ( 'smocktown' !== $food->slug ) ) :
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
								<li id="post-<?php the_ID(); ?>" class="col col-lg-6 mt-2 mb-2 grid-item menu-item align-items-center  <?php echo esc_html( $string ); ?>" data-category="<?php echo esc_html( $string ); ?>"> 
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

	</main>
</div>

<?php
get_footer();
