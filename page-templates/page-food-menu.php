<?php
/**
 * Template Name: Food Menu Not Used Template
 * Template Post Type: post, page,
 *
 * Template for displaying a Food Menu page.
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header( 'workroom1128' );
$container = get_theme_mod( '_workroom1128_container_type' );

?>

<div class=" page-wrapper" id="page-wrapper">

	<div class="container mt-5 mb-5" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main attic-hardware" id="main">

				<?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						$my_new_array = array();
						$categories   = get_terms( 'food_menu_category', 'orderby=count&order=DESC&hide_empty=1' );
						foreach ( $categories as $category ) :
							$list_order                  = get_field( 'list_order', $term );
							$my_new_array[ $list_order ] = $term->name;
						endforeach;


						ksort( $my_new_array, SORT_NUMERIC );

						foreach ( $my_new_array as $list_order => $term_name ) {
							echo esc_html( '<li>' . $term_name . ' ' . $list_order . '</li>' );
							?>

							<div class="mt-5 mb-3">
								<!-- Prints the cat/taxonomy group title -->
								<h2 class="text-center entry-title--category"><?php echo esc_html( $category->name ); ?></h2>

							</div>

							<?php
							$foodposts = get_posts(
								array(
									'post_type' => 'food_menu',
									'taxonomy'  => $category->taxonomy,
									'term'      => $category->slug,
									'nopaging'  => true,
								)
							);

							foreach ( $foodposts as $foodpost ) :

								setup_postdata( $foodpost );
								// enables the_title(), the_content(), etc. without specifying a post ID.

								?>

							<ul id="<?php echo esc_html( get_post_type() ); ?>-list" class="list-unstyled row flex-column gx-5 gy-3 <?php echo esc_html( get_post_type() ); ?>" >

								<?php get_template_part( 'loop-templates/content', 'archive-menu' ); ?>

							</ul>

								<?php
							endforeach;
							?>

								<?php
						}
						?>

						<?php
					}
				}
				?>
			</main>
		</div>
	</div>

</div>

<?php
get_footer();
