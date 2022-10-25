<?php
/**
 * Template part for displaying About Section
 *
 * @package workroom1128
 */

		$img_url            = workroom1128_get_option( 'about_custom_img' );
		$about_title_one    = workroom1128_get_option( 'about_custom_title_one' );
		$content_one        = workroom1128_get_option( 'about_custom_content_one' );
		$about_title_two    = workroom1128_get_option( 'about_custom_title_two' );
		$content_two        = workroom1128_get_option( 'about_custom_content_two' );
		$about_button_label = workroom1128_get_option( 'about_button_label' );
		$about_button_url   = workroom1128_get_option( 'about_button_url' );
?>

	<div class="header-overlay header-overlay__grey"></div>
	<div class="content-wrapper">
		<div class="container">
			<div class="row grid-padding-x align-justify align-middle">
				<div class="col-sm-12 col-lg-6">
					<div class="header-wrapper">
						<?php if ( ! empty( $img_url ) ) : ?>
								<img class="featured-image-large" src="<?php echo esc_url( $img_url ); ?>" alt="workroom1128 How We Help Our Clients"  >
						<?php endif; ?>
					</div>
				</div>
				<div class="col-sm-12  large-5 ">
					<div class="header-wrapper">
						<?php if ( ! empty( $about_title_one ) ) : ?>
							<h2><?php echo esc_html( $about_title_one ); ?></h2>
						<?php endif; ?>
						<?php if ( ! empty( $content_one ) ) : ?>
							<p><?php echo esc_html( $content_one ); ?></p>
						<?php endif; ?>

						<?php if ( ! empty( $about_title_two ) ) : ?>
							<h2><?php echo esc_html( $about_title_two ); ?>
							</h2>
						<?php endif; ?>
						<?php if ( ! empty( $content_two ) ) : ?>
							<p><?php echo esc_html( $content_two ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row grid-padding-x align-top align-spaced"  >
				<div class="col-sm-12 col-md-6 col-lg-6"  >
					<?php dynamic_sidebar( 'about-widgets-what-i-do' ); ?>
					<?php dynamic_sidebar( 'about-widgets-what-you-learn' ); ?>
				</div>
				<div class="title-contrast col-sm-12 col-md-6 col-lg-6">
					<?php dynamic_sidebar( 'about-widgets-is-this-you' ); ?>
						<div class="row align-center">
							<div class="col-sm-12 small-7">
								<?php
								if ( ! empty( $about_button_label ) ) :
									$stripped = trim( $about_button_label );
									$stripped = esc_html( $stripped );
								endif;
								?>
								<button  class="consultation assessment" data-open="survey"><?php echo esc_html( $stripped ); ?>
								</button>
							</div>
						</div>
				</div><!-- col-sm-12 -->
			</div><!--grid -->
		</div><!-- container -->
	</div>
