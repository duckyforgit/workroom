<?php
/**
 * The default template for displaying testimonial content
 *
 * @package workroom1128
 *
 * @since   workroom1128 1.0.0
 */

$testimonial_title = 'What Our Clients Say';
// The get_query_var doesn't work for custom post type;  $paged = (get_query_var('paged')) ? get_query_var('page') : 1;.
// Setting page to 1 since it is the static front page.


	$args = array( // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key.
		'post_type'     => array( 'testimonial' ),
		'post_per_page' => 2,
		// phpcs:disable
		// 'meta_key'      => 'testimonial_order', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key.
		// 'orderby'       => 'meta_value_num',
		// 'order'         => 'ASC',
		'page'          => 1,
		// phpcs:enable
	);
	$query = new WP_Query( $args );
	?>
<section class="testimonials">
	<div class="container">
		<div class="row gx-3 justify-content-around align-items-center">
			<div class="col-sm-12">
				<header>
				<?php if ( ! empty( $testimonial_title ) ) : ?>
					<h2 class="mt-5 text-center">
					<?php echo esc_html( $testimonial_title ); ?>
					</h2>
				<?php endif; ?>
				</header>
			</div>
		</div>
		<div class="row gx-3">
		<?php
		if ( $query->have_posts() ) :
			$counter = 0;
			while ( $query->have_posts() ) :
				$query->the_post();
				?>
				<div class="col-sm-12 offset-md-1 col-md-5">

				<?php if ( $counter <= 1 ) : ?> 
					<blockquote> 
					<?php
					$excerpt       = wp_trim_words( get_field( 'client_testimonial' ), 49 );
					$excerptcount  = str_word_count( $excerpt );
					$wordcountfull = str_word_count( wp_strip_all_tags( get_field( 'client_testimonial' ) ) );
					if ( $wordcountfull > $excerptcount ) :
						echo '<p>' . esc_html( $excerpt );
						$testimoniallink = get_field( 'testimonial_link' );
						if ( $testimoniallink ) :
							$link_url    = $testimoniallink['url'];
							$link_title  = $testimoniallink['title'];
							$link_target = $testimoniallink['target'] ? $testimoniallink['target'] : '_self';
							?>
						<a class="readmore" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> [Read More]</a>
							<?php
						endif;
						echo '</p>';
						else :
							the_field( 'client_testimonial' );
					endif;
						?>
					<cite class="text-left"><?php the_field( 'client_first_name' ); ?></cite>
				</blockquote>
			<?php endif; ?>
			</div>
				<?php
				$counter++;
		endwhile;
		endif;
		?>
		</div>
	</div>

	<?php wp_reset_postdata(); ?>
		<div class="container"> 
			<div id="testimonialList__results" ></div> 
			<div class="d-flex align-content-center flex-nowrap">
				<div class=""></div>
				<div class="flex-grow-1 text-center">
					<button id="load_more_button" class="col-sm-4 text btn btn-outline-primary btn-outline-primary--banner" data-offset='0'>Load More Testimonials</button>
				</div>
				<div class=""></div>
			</div>			 
		</div>
</section>
<?php
wp_reset_postdata();
