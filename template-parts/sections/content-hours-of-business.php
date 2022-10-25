<?php
/**
 * The template part for displaying Hours of Business in widgets or sections *
 *
 * @package workroom1128
 *
 * @since workroom1128 1.0.0
 */

?>
<section class="hours-of-business">
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
$args   = array(
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
