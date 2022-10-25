<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'workroom1128_container_type' );
?>
<nav id="main-nav" class="navbar navbar-expand-md navbar-dark justify-content-between py-2" aria-labelledby="main-nav-label">

		<h2 id="main-nav-label" class="sr-only">

				<?php esc_html_e( 'Main Navigation', 'workroom1128' ); ?>

		</h2>


		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-md-between" id="navbarsLeft">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => '',
					'fallback_cb'    => '__return_false',
					'items_wrap'     => '<ul id="%1$s" class="navbar-nav  %2$s">%3$s</ul>',
					'depth'          => 0,
					'walker'         => new Bootstrap_5_WP_Nav_Menu_Walker(),
				),
			);
			?>
			</div>
		</div>
	</nav>
	<div class="container-fluid header-background" >
	<div class="container-xxl" >
		<div class="row flex-wrap justify-content-between align-items-center">

			<div class="col-sm-12 col-lg-4"> 

				<ul class="list-unstyled text-center mt-3 d-sm-none d-lg-block">

					<li class="light-brown">223 West Main Street</li>

					<li class="light-brown">Greenwood, IN 46142</li>

				</ul>

			</div>

		<div class="col-sm-12 col-lg-4 text-center">

				<?php
				if ( ! has_custom_logo() ) {
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php
					endif;
					?>

						<?php
				} else {
							the_custom_logo();
				}
				?>

		</div>

		<div class="col-sm-12 col-lg-4 ">

				<ul class="list-inline text-center mt-3  d-sm-none d-lg-block">

					<li class="list-inline-item">
					<?php $social_media_fb = workroom1128_get_option( 'social_media_facebook_url' ); ?>

						<!-- <a href="https://www.facebook.com/workroom1128-workroom1128-LLC-101171972322851" alt="Facebook - workroom1128 workroom1128" target="_blank" ><i class="fab fa-facebook-f circle-icon"></i></a> -->
						<a href="<?php echo esc_url( $social_media_fb ); ?>" alt="Facebook - workroom1128 workroom1128" target="_blank" ><i class="fab fa-facebook-f circle-icon"></i></a>

					</li>
				</ul>

			</div>

		</div>

	</div>
</div>


