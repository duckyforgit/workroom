<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<li id="post-<?php the_ID(); ?>" class="col-12 col-xl-6 mt-2 mb-2 menu-item align-items-center"> 
	<div class="d-flex align-items-center"> 
		<img width="300" class="d-none d-md-inline float-start menu-img--single" src="<?php echo esc_url( get_the_post_thumbnail_url( $post->ID, 'large' ) ); ?>" alt="<?php the_title(); ?>">
		<div class=" w-100"> 
			<div class="merch-content">	
				<a href="<?php echo esc_url( the_permalink() ); ?>"><?php the_title(); ?></a><span><?php the_field( 'price' ); ?></span>
			</div>
			<div class="merch-description">
				<?php the_field( 'description' ); ?>
			</div>
		</div> 
	</div>		
</li>
