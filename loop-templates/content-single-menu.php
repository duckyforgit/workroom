<?php
/**
 * Single merch post partial template
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="row gx-5 align-items-center mt-5 mb-5 p-3">
		<div class="col-sm-12 col-lg-6">
			<a href="<?php echo esc_url( get_the_post_thumbnail_url( $post->ID, 'large' ) ); ?>" class="glightbox">
				<img src="<?php echo esc_url( get_the_post_thumbnail_url( $post->ID, 'featured-landscape' ) ); ?>" alt="<?php the_title(); ?>" width="600" height="400" >
			</a>		 
		</div> 
		<div class="col-sm-12 col-lg-6">
			<header class="merch-header">
				<h2 class="h3 merch-title mt-5"><?php the_title(); ?></h2>
				<div class="merch-price">
					<p>$<?php esc_html( the_field( 'price' ) ); ?></p>
				</div>
				<div class="merch-description">
					<?php esc_html( the_field( 'description' ) ); ?>
				</div>
				<div class="merch-categories mt-3"> 
					<?php
					$term_list = wp_get_post_terms( $post->ID, 'food-menu-category', array( 'fields' => 'all' ) );
					// Then you can run a foreach loop to show the taxonomy terms infront.
					$length = count( $term_list );
					$count  = 1;
					foreach ( $term_list as $term_single ) {
						if ( $count < $length ) {
							$listing .= $term_single->slug . ' - ';
						} else {
							$listing .= $term_single->slug;
						}
						$count++;
					}
					// taxonomy=food-menu-tag&post_type=food-menu
					// taxonomy=food-menu-category&post_type=food-menu
					// Retrievable items in this: term_id; name; slug; taxonomy; description;.
					?>
					<p class="tags"><span class="pe-3">Tags:</span><?php echo esc_html( $listing ); ?></p>  
				</div>
			</header>

		</div>

	</div>

</article><!-- #post-## -->

