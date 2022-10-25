
$className = 'hours'; // phpcs:ignore WordPress.NamingConventions.ValidVariableName

if ( ! empty( $block['className'] ) ) { // phpcs:ignore WordPress.NamingConventions.ValidVariableName

	$className .= ' ' . $block['className']; // phpcs:ignore WordPress.NamingConventions.ValidVariableName

}

if ( ! empty( $block['align'] ) ) {

	$className .= ' align' . $block['align']; // phpcs:ignore WordPress.NamingConventions.ValidVariableName

}
$separator = ' - ';
$anchor    = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor  = ' id="' . sanitize_title( $block['anchor'] ) . '"';
	$classes = $className . ' ' . $anchor; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
}
if ( get_field( 'monday' ) ) {
	$hours_monday = get_field( 'monday' );
} else {
	$hours_monday = 'Closed';
}
if ( get_field( 'monday' ) === 'true' ) {
	$open_hours_monday  = get_field( 'open_hours_monday' );
	$close_hours_monday = get_field( 'close_hours_monday' );
	$hours_monday       = $open_hours_monday . $separator . $close_hours_monday;
} else {
	$open_hours_monday = 'Closed';
}
$hours_tuesday = get_field( 'tuesday' );
if ( get_field( 'tuesday' ) === 'true' ) {
	$open_hours_tuesday  = get_field( 'open_hours_tuesday' );
	$close_hours_tuesday = get_field( 'close_hours_tuesday' );
	$hours_tuesday       = $open_hours_tuesday . $separator + $close_hours_tuesday;
} else {
	$hours_tuesday = 'Closed';
}

$hours_wednesday = get_field( 'wednesday' );
if ( get_field( 'wednesday' ) === 'true' ) {
	$open_hours_wednesday  = get_field( 'open_hours_wednesday' );
	$close_hours_wednesday = get_field( 'close_hours_wednesday' );
	$hours_wednesday       = $open_hours_wednesday . $separator . $close_hours_wednesday;
} else {
	$hours_wednesday = 'Closed';
}

$hours_thursday = get_field( 'thursday' );
if ( get_field( 'thursday' ) === 'true' ) {
	$open_hours_thursday  = get_field( 'open_hours_thursday' );
	$close_hours_thursday = get_field( 'close_hours_thursday' );
	$hours_thursday       = $open_hours_thursday . $separator . $close_hours_thursday;
} else {
	$hours_thursday = 'Closed';
}

$hours_friday = get_field( 'friday' );
if ( get_field( 'friday' ) === 'true' ) {
	$open_hours_friday  = get_field( 'open_hours_friday' );
	$close_hours_friday = get_field( 'close_hours_friday' );
	$hours_friday       = $open_hours_friday . $separator . $close_hours_friday;
} else {
	$hours_thursday = 'Closed';
}

$hours_saturday = get_field( 'saturday' );
if ( get_field( 'saturday' ) === 'true' ) {
	$open_hours_saturday  = get_field( 'open_hours_saturday' );
	$close_hours_saturday = get_field( 'close_hours_saturday' );
	$hours_saturday       = $open_hours_saturday . $separator . $close_hours_saturday;
} else {
	$hours_saturday = 'Closed';
}

$hours_sunday = get_field( 'sunday' );
if ( get_field( 'sunday' ) === 'true' ) {
	$open_hours_sunday  = get_field( 'open_hours_sunday' );
	$close_hours_sunday = get_field( 'close_hours_sunday' );
	$hours_sunday       = $open_hours_sunday . $separator . $close_hours_sunday;
} else {
	$hours_sunday = 'Closed';
}


// Create id attribute allowing for custom "anchor" value.
$hourid = 'hours-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$hourid = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hours'; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
if ( ! empty( $block['className'] ) ) { // phpcs:ignore WordPress.NamingConventions.ValidVariableName
	$className .= ' ' . $block['className']; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align']; // phpcs:ignore WordPress.NamingConventions.ValidVariableName
}
?>

<div id="<?php echo esc_attr( $hourid ); ?>" class="<?php echo esc_attr( $className ); // phpcs:ignore WordPress.NamingConventions.ValidVariableName ?> ">
		<h2 class="entry-header--hours " ><?php the_field( 'hour_location' ); ?></h2>
			<div class="business-hours">
				<div class="content_wrapper">
					<table class="table table-hours">
						<tbody>
						<tr>
							<th scope="row">Monday</th>
							<td><?php echo esc_html( $hours_monday ); ?></td>
						</tr>
						<tr>
							<th scope="row">Tuesday</th>
							<td><?php echo esc_html( $hours_tuesday ); ?></td>
						</tr>
						<tr>
							<th scope="row">Wednesday</th>
							<td><?php echo esc_html( $hours_wednesday ); ?></td>
						</tr>
						<tr>
							<th scope="row">Thursday</th>
							<td><?php echo esc_html( $hours_thursday ); ?></td>
						</tr>
						<tr>
							<th scope="row">Friday</th>
							<td><?php echo esc_html( $hours_friday ); ?></td>
						</tr>
						<tr>
							<th scope="row">Saturday</th>
							<td><?php echo esc_html( $hours_saturday ); ?></td>
						</tr>
						<tr>
							<th scope="row">Sunday</th>
							<td><?php echo esc_html( $hours_sunday ); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
</div>
