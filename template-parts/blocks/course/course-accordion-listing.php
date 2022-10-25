<?php
/**
 * The default template for displaying testimonial content
 *
 * @package workroom1128 *
 * @since   workroom1128 1.0.0
 */

$classname = 'course-accordion-listing';

if ( ! empty( $block['className'] ) ) {

	$classname .= ' ' . $block['className'];

}

if ( ! empty( $block['align'] ) ) {

	$classname .= ' align' . $block['align'];

}

?>
<div class="<?php echo esc_attr( $classname ); ?>">


	<section class="section-container">

	<?php $rand = wp_rand( 1, 100 ); ?>
		<div class="accordion course-accordion" id="accordion-listing">
			<div class="accordion-item">
			<h2 class="accordion-header" id="<?php echo esc_html( $rand ); ?>">

					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_html( $rand ); ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_html( $rand ); ?>">
					<?php the_field( 'accordion_question' ); ?>
					</button>
				</h2>
				<div id="collapse<?php echo esc_html( $rand ); ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo esc_html( $rand ); ?>" data-bs-parent="#accordion-listing">
					<div class="accordion-body">
					<?php the_field( 'accordion_answer' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
