<?php
/**
 * The template part for displaying Hours Open *
 *
 * @package workroom1128
 *
 * @since workroom1128 1.0.0
 */

?>
<section class="hours-of-operation">

<?php
// Get today's day name like Monday; will be in "Monday" format.
$d     = gmdate( 'l' );
$args  = array(
	'post_type'      => 'hour',
	'posts_per_page' => 1,
	'meta_query'     => array( // phpcs:ignore WordPress.DB.SlowDBQuery
		array(
			'key'     => 'day',
			'value'   => $d,
			'compare' => 'LIKE',
		),
	),
);
$hours = new WP_Query( $args );

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
		?>
	<div class="pb-4">
		<h5><i class="pe-1 far fa-clock"></i>Today:
			<?php echo esc_html( $open ); ?>
			<?php echo esc_html( $close ); ?>
		</h5>
	</div>
		<?php
	}
}
wp_reset_postdata();
?>

<table class="table table-hours">
<thead class="">
	<tr>
		<th scope="col"></th>
		<th scope="col"></th>
		<th scope="col"></th>
	</tr>
</thead>
<tbody>

<?php
$args = array(
	'post_type' => 'hour',
	'meta_key'  => 'order', // phpcs:ignore WordPress.DB.SlowDBQuery
	'orderby'   => 'meta_value_num',
	'order'     => 'ASC',
);

$myhour = new WP_Query( $args );

if ( $myhour->have_posts() ) {
	while ( $myhour->have_posts() ) {
		$myhour->the_post();
		$open = get_field( 'open' );
		if ( ! $open ) {
			$open = 'Closed';
		}
		$close = get_field( 'close' );
		if ( ! $close ) {
			$close = '&nbsp;&nbsp;&nbsp;&nbsp;';
		}
		?>

	<tr>
		<th scope="row"><?php the_field( 'day' ); ?></th>

		<td><?php echo esc_html( $open ); ?></td>
		<td><?php echo esc_html( $close ); ?></td>
	</tr>
		<?php
	}
}
wp_reset_postdata();
?>

</tbody>
</table>
</section>
