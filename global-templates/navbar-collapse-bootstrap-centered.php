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
	<button class="navbar-toggler" type="button"
		data-bs-toggle="collapse" data-bs-target="#primary-menu"
		aria-controls="primary-menu" aria-expanded="false"
		aria-label="<?php esc_attr_e( 'Toggle primary navigation', 'workroom1128' ); ?>">
		<span class="navbar-toggler-icon icon menu-open"></span>
	</button>
	<div id="primary-menu" class="collapse navbar-collapse">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => '',
			'fallback_cb'    => '__return_false',
			'items_wrap'     => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 p-2 p-lg-0 %2$s">%3$s</ul>',
			'depth'          => 4,
			'walker'         => new Bootstrap_5_WP_Nav_Menu_Walker(),
		)
	);
	wp_nav_menu(
		array(
			'theme_location' => 'secondary',
			'container'      => false,
			'menu_class'     => '',
			'fallback_cb'    => '__return_false',
			'items_wrap'     => '<ul id="%1$s" class="navbar-nav  %2$s">%3$s</ul>',
			'depth'          => 0,
			'walker'         => new Bootstrap_5_WP_Nav_Menu_Walker(),
		)
	);
	?>
	</div>

</nav>
						</div>

				</div>

		</div>
	</div>

