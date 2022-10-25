<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?>
<div class="footer" id="wrapper-footer">
	<div class="header-background"></div>
	<div class="grid-wrapper ">
<!-- <div class="container ">
	<div class="row mt-5"> -->
		<div class="widget box-1">
			<div class="grid-wrapper2">
				<?php dynamic_sidebar( 'footer-widgets-left-top' ); ?>
				<?php dynamic_sidebar( 'footer-widgets-left-bottom' ); ?>
			</div>			
		</div>
		<div class="widget box-2">
			<?php dynamic_sidebar( 'footer-widgets-center' ); ?>
		</div>
		<div class="widget box-3">
			<?php dynamic_sidebar( 'footer-widgets-right' ); ?>
		</div>
	<!-- </div> -->

</div> 
<div class="container ">

	<div class="row">

		<div class="col-md-12">

			<footer class="site-footer" id="colophon">

				<div class="site-info">

					<div class="copyright-container">                           
						<hr>
						<p class="copyright">
						<?php $business_start_year = workroom1128_get_option( 'site_options_start_year' ); ?>
							<?php do_action( 'workroom1128_after_copyright', $business_start_year ); ?>
						</p>
					</div>

				</div><!-- .site-info -->

			</footer><!-- #colophon -->

		</div><!--col end -->

	</div><!-- row end -->
</div>	
<div class="container-fluid">

	<div id="cookie-notice" role="banner" class="container-fluid cookie-notice visible">

		<div class="cookie-notice-container container">

			<div class="row p-3 justify-content-center align-items-center">

				<div class="col-sm-10"> 

					<span id="cookie-notice-text">  

					We use cookies to ensure that we give you the best experience on our website. By using our website you consent to our cookies in accordance with our <a class="cookie-notice__privacy-policy" href="<?php echo esc_url( site_url() . '/privacy-policy/' ); ?>" >Privacy Policy</a>.</span>
				</div>
				<div class="col-sm-2">
					<button id="cookie-notice-accept-cookie" data-cookie-set="accept" class="cookie-notice-set-cookie btn btn-primary mt-0 pt-1 pb-1 ps-3 pe-3" >Ok</button>
				</div>
			</div>
		</div>
	</div> 

</div><!-- container end --> 
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
	<i class="fa-solid fa-circle-arrow-up"></i>
</a>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

