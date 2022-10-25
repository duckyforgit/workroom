<?php
/**
 * The template for displaying all single beverage posts
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
// get the current taxonomy term.
$merchterm  = get_queried_object();
$merchcat   = $merchterm->term;
$merchtitle = $merchterm->name;
?>

<div class="page-container" id="page-wrapper--merch">

	<div class="container-fluid" id="content" tabindex="-1"> 
		<main class="site-main" id="main">
			<div class="container-fluid banner-background--merch position--relative">
				<div class="banner-background--over">
				</div>

				<div class="banner-background--text position--relativ py-5 my-5 text-center" style="background-color:transparent">
					<header class="page-header">
						<h1 class="page-title display-5 text-white ">workroom1128 Merchandise</h1>
					</header>
					<div class="row">
						<div class="col-lg-6 mx-auto">
							<p class="lead mb-4">Check out our collection of workroom1128 Wearables.</p>
						</div>
					</div>
				</div>
				<div class="mt-5 h-100"></div> 
				<!-- ======= Single Merch Section ======= -->
				<section id="merch" class="merch section-bg">
					<div class="container" data-aos="fade-up"> 
						<div class="mb-5"> 
							<?php echo esc_html( workroom1128_custom_breadcrumbs() ); ?>
						</div> 

						<div class="section-title">
							<h2><?php echo esc_html( $merchtitle ); ?></h2>
							<div class="taxonomy-description">
								<h3></h3>
							</div>
						</div>
					<!-- Post Content
					============================================= -->
					<?php
					if ( have_posts() ) :

						while ( have_posts() ) :
							the_post();

							get_template_part( 'loop-templates/content', 'single-merch' );
							?>
							<div class="mb-5">
								<?php workroom1128_post_nav(); ?>
							</div>
							<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile;
					else :
						get_template_part( 'loop-templates/content', 'none' );
					endif;
						wp_reset_postdata();
					?>
					</div>
				</section>
			</div>

		</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
