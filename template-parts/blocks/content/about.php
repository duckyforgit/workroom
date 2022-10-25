<?php
/**
 * About Content block
 *
 * @package      workroom1128
 * @author       Maureen Mladucky
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

$classname = 'about';

if ( ! empty( $block['classname'] ) ) {

	$classname .= ' ' . $block['classname'];

}

if ( ! empty( $block['align'] ) ) {

	$classname .= ' align' . $block['align'];

}
?>
<?php
$about_content_image = wp_get_attachment_image( get_field( 'image' ), 'medium' );
$anchor              = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';
}
$classes = $classname . ' ' . $anchor;
?>
<div class="
<?php
echo esc_attr( $classes );
?>
">

	<div class="container content-wrapper">
		<div class="row gx-4 align-items-center justify-content-center">
			<div class="col-sm-12 col-lg-6">
				<h2>My header</h2>
				<div class="block-about__inner">
					<div class="block-about__content">
						<InnerBlocks />
					</div>
					<div class="block-about__image">
						<?php echo esc_html( $about_content_image ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
