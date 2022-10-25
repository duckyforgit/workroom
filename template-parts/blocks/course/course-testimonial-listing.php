<?php
/**
 * The default template for displaying testimonial list
 *
 * @package workroom1128 *
 * @since   workroom1128 1.0.0
 */

$classname = 'course-testimonial-listing';

if ( ! empty( $block['$classname'] ) ) {

	$classname .= ' ' . $block['$classname'];

}

if ( ! empty( $block['align'] ) ) {

	$classname .= ' align' . $block['align'];

}

?>
<div class="<?php echo esc_attr( $classname ); ?>">


	<section class="section-container">

		<div id="testimonial-listing" class="testimonial-list">
				<div class="card">

			<blockquote class="icon">
				<div class="border-left">
					<p><?php the_field( 'client_testimonial' ); ?>
					</p>
				</div>
					<cite class="text-left"><?php the_field( 'client_first_name' ); ?></cite>
				</blockquote>
			</div>

		</div>
	</section>
</div>
