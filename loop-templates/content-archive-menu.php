<?php
/**
 * The template for displaying course archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?> 

<li class="col">

	<div class="card mb-5">

		<a href="<?php the_permalink(); ?>" class="stretched-link"></a>

		<div class="row g-0"> 

			<div class="col-sm-12">

				<div class="card-body">

					<h3 class="card-title entry-title"><?php the_title(); ?></h3> 

					<p><?php echo esc_html( wp_trim_words( get_the_content(), 25 ) ); ?></p>
					<?php esc_html( the_field( 'list_order' ) ); ?>

				</div>

			</div>

		</div>

	</div> 

</li>  
