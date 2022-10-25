<?php
/**
 * Testimonial block
 *
 * @package      workroom1128
 * @author       Maureen Mladucky
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

$className = 'testimonial-listing'; // phpcs:ignore WordPress.NamingConventions.ValidVariableName

if ( ! empty( $block['className'] ) ) { // phpcs:ignore WordPress.NamingConventions.ValidVariableName

	$className .= ' ' . $block['className']; // phpcs:ignore WordPress.NamingConventions.ValidVariableName

}

if ( ! empty( $block['align'] ) ) { // phpcs:ignore WordPress.NamingConventions.ValidVariableName

	$className .= ' align' . $block['align']; // phpcs:ignore WordPress.NamingConventions.ValidVariableName

}

?>
<div class="<?php echo esc_attr( $className ); // phpcs:ignore WordPress.NamingConventions.ValidVariableName ?>">

	<section class="section-container">
		<div id="testimonial-block_6126540e5e5e2" class="testimonial testimonial-list wp-block-acf-testimonial">
		<!-- <div id="testimonial-listing" class="testimonial-list"> -->
			<div class="card">

				<blockquote>

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
