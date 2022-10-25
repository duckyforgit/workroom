<?php
/**
 * The template part for displaying Hours Open
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */

?>
	<?php
	// get today's day name like Monday.
	$d = gmdate( 'l' );
	// phpcs:disable
	$args = array(
		'post_type'      => 'hour',
		'posts_per_page' => 1,
		'meta_query'     => array( 
			array(
				'key'     => 'day',
				'value'   => $d,
				'compare' => 'LIKE',
			),
		),
	); // phpcs:enable

	$time = localtime();

	$hours = new WP_Query( $args );
	$today = '';

	if ( $hours->have_posts() ) {
		while ( $hours->have_posts() ) {

			$hours->the_post();
			$current = get_field( 'day' );
			$open    = get_field( 'open' );
			if ( ! $open ) {
				$open = 'Closed';
			}
			$close = get_field( 'close' );
			if ( ! $close ) {
				$close = 'Today';
			}
			$openlink = home_url() . '/hours-of-operation/';
			?>

			<span class="hours">
				<?php echo '<a href="' . esc_url( $openlink ) . '" alt="" class="stretched-link" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click for Hours of Operation"></a>'; ?>
				<i class="pe-1 far fa-clock fa-1x"></i>

				<?php
				if ( 'Closed' === $open ) {
					echo 'Closed Today';
				} else {
					echo 'Open Today<span class="larger ps-2" >' . esc_html( $open ) . ' - ' . esc_html( $close ) . '</span>';
				}
				?>
			</span>
			<?php
		}
	}
	wp_reset_postdata();
	?>
