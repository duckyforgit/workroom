<?php
/**
 * The template part for displaying Contact Information *
 *
 * @package workroom1128 *
 * @since workroom1128 1.0.0
 */

?>

<?php
if ( has_custom_logo() ) {
	$biz_name = get_bloginfo( 'name' );
	// Use custom logo attachment is availavle $attachment_id = get_theme_mod('custom_logo');.
	$attachment_src = esc_html( get_template_directory_uri() . '/dist/img/logo-new-light.png' );

} else {
	$image = '<h5>' . bloginfo( 'name' ) . '</h5>';
}

?>
<div class="footer-contact me-3">  
<div class="section-title">
	<h2 class="section-subhead mt-3 pb-1">CONTACT US</h2>
	<hr class="section-hr">
</div> 

		<div class="">            
	   
			<div class="logo mb-3">
				<?php
				if ( is_page( 'attic-hardware' ) ) {
					?>
					<a href="<?php echo esc_url( home_url() ) . '/attic-hardware/'; ?>" class="navbar-brand relative" rel="home">
					<img width="100" height="100"
					src="<?php echo esc_url( get_template_directory_uri() ) . '/dist/img/attic-hardware-logo.png'; ?>"
					class="img-fluid" alt="Attic Hardware">
				</a>
					<?php
				} else {
					the_custom_logo();
				}
				?>

			</div>
			<ul class="fa-ul mb-2 ms-0 pe-2 ps-2 pb-2">

				<li class="contact-list">

					<span class="fa-li fa-1x">

						<i class="fas fa-mobile-alt " ></i>
					</span>

					<a class="phone text-decoration-none pe-1" href="tel:317-215-4836" >317-215-4836</a> 

				</li>

				<li class="contact-list">

					<span class="fa-li fa-li fa-1x">

						<i class="fas fa-envelope " ></i>

					</span>

					<a class="ps-1" href="mailto:smocktownworkroom1128.cc@gmail.com" target="_blank"  >smocktownworkroom1128.cc@gmail.com</a>

				</li>

				<li class="social-links mt-3 d-flex align-items-center position-relative">
					<a href="https://www.facebook.com/Smocktown-workroom1128-LLC-101171972322851" class="facebook stretched-link"><i class="bx bxl-facebook"></i></a><span class="ps-1">Follow Us on Facebook</span>
					<!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
					<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a> -->
				</li> 

			</ul>
	</div>

</div>
