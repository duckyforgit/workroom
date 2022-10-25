<?php
/**
 * The template part for displaying Hours Open
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */

$location = strtolower( $args['location'] );

?>
<table class="table table-hours">
	<tbody>
	<?php
	$hours    = array(
		'post_type'      => 'hour',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
		'meta_key'       => 'list_order', // phpcs:ignore WordPress.DB.SlowDBQuery
		'orderby'        => 'meta_value',
		'order'          => 'ASC',
		'meta_query'     => array(// phpcs:ignore WordPress.DB.SlowDBQuery
			array(
				'key'     => 'location',
				'value'   => $location,
				'compare' => 'LIKE',
			),
		),
	);
	$bizhours = new WP_Query( $hours );

	$separator = ' - ';
	if ( $bizhours->have_posts() ) {
		while ( $bizhours->have_posts() ) {

			$bizhours->the_post();
			$current = get_field( 'day' );
			$open    = get_field( 'open' );
			if ( ! $open ) {
				$open = 'Closed';
			}
			$close = get_field( 'close' );
			if ( ! $close ) {
				$close = '';
				$line  = $open;
			} else {
				$line = $open . $separator . $close;
			}
			?>
			<tr>
				<th scope="row"><?php the_field( 'day' ); ?></th>
				<td><?php echo esc_html( $line ); ?>
				</td>
			</tr>
			<?php
		}
	}
	wp_reset_postdata();
	?>
	</body>
</table>
