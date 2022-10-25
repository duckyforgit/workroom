<?php
/**
 * The template part for displaying Hours Open in Footer and Widgets
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */

?>
<?php

	$separator = ' - ';
	$args      = array(
		'posts_per_page' => -1,
		'post_type'      => 'hour',
	);
	$hours     = new WP_Query( $args );
	$open      = '';
	$close     = '';
	if ( $hours->have_posts() ) {
		?>
	<h2 class="entry-header--hours" >In content hours</h2>
			<div class="business-hours business-hours--dark">
				<div class="content_wrapper">
					<table class="table table-hours">
						<tbody>
							<?php
							while ( $hours->have_posts() ) {

								$hours->the_post();
								echo 'The Day';
								$day  = get_field( 'day' );
								$open = get_field( 'open' );
								if ( ! $open ) {
									$open = 'Closed';
								}
								$close = get_field( 'close' );
								if ( ! $close ) {
									$close = 'Today';
								}
								$hours = $open . $separator . $close;
								?>
								<tr>
									<th scope="row"><?php echo esc_html( $day ); ?></th>
									<td><?php echo esc_html( $hours ); ?>
									</td>
								</tr>
								?>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
</section> 
<?php
wp_reset_postdata();
