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

<nav id="navbar" class="navbar navbar-expand-md w-100 bg-light" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'workroom1128' ); ?>
	</h2>


	<div class="container">
			<!-- Your site title as branding in the attic hardware menu -->
			<a href="<?php echo esc_url( home_url() ) . '/attic-hardware/'; ?>" class="navbar-brand relative" rel="home">
				<img width="125" height="125"
				src="<?php echo esc_url( get_template_directory_uri() ) . '/dist/img/attic-hardware-logo.png'; ?>"
				class="img-fluid" alt="Attic Hardware">
			</a>
			<!-- end custom logo -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'workroom1128' ); ?>">
			<span class="navbar-toggler-icon menu-open"></span>
		</button>
		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'attic-hardware-nav',
				'container_class' => 'collapse navbar-collapse navbar-transparent',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ms-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 0,
				'walker'          => new WP_Bootstrap(),
			),
		);
		?>
		<a href="<?php echo esc_url( home_url() . '/reserve-private-room/' ); ?>" class="btn-book-a-room d-none d-lg-flex ms-3">Book a party room</a>

	</div><!-- .container(-fluid) --> 
</nav> <!-- .site-navigation -->
