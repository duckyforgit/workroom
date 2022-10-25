<?php
/**
 * Template Name: Food Menu Template
 * Template Post Type: post, page, archive, food_menu
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header( 'workroom1128' );
?>

<div class="page-container" id="page-wrapper--food-menu">

	<main class="site-main" id="main">

		<div class="container-fluid banner-background--food-menu">

			<div class="banner-background--over"></div>

			<div class="px-4 py-5 my-5 text-center">
				<h1 class="display-5 fw-bold">workroom1128 Menu</h1>
				<div class="col-lg-6 mx-auto">
				<p class="lead mb-4">Our delicious starters, sandwiches and salads are created by Pink Catering to enhance your pub experience.</p>
				</div>
			</div>
		</div>
		<div class="container mt-5">
			<?php workroom1128_custom_breadcrumbs(); ?>
		</div>
		<div class="background-menu--header background-menu--header4">
		<?php

		if ( have_posts() ) {
			// Start the Loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'loop-templates/content', 'small-bites' );
				get_template_part( 'loop-templates/content', 'salads' );
				get_template_part( 'loop-templates/content', 'sandwiches' );
				get_template_part( 'loop-templates/content', 'desserts' );
			}
		}
		?>
		</div>
	</main>

</div>

<?php
get_footer();
