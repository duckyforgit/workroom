<?php
/**
 * The default template for displaying ACF front page content
 *
 * @package workroom1128
 * @since   workroom1128 1.0.0
 */

$classname = 'homepagecontent';

if ( ! empty( $block['className'] ) ) {

	$classname .= ' ' . $block['className'];

}

if ( ! empty( $block['align'] ) ) {

	$classname .= ' align' . $block['align'];

}

?>
<div class="<?php echo esc_attr( $classname ); ?>">

	<?php

	$intro_primary_heading   = get_field( 'intro_primary_heading' );
	$intro_secondary_heading = get_field( 'intro_secondary_heading' );
	$intro_tertiary_heading  = get_field( 'intro_tertiary_heading' );
	$intro_image_url         = get_field( 'intro_image' );
	?>

	<section class="intro-section-container container-fluid" >

		<div class="content-wrapper">

			<header class="row align-content-middle justify-content-center header-wrapper text-center">

				<div class="col">

					<?php if ( ! empty( $intro_primary_heading ) ) : ?>


						<h2 class="text-center" ><?php echo esc_html( $intro_primary_heading ); ?></h2>

					<?php endif; ?>

					<?php if ( ! empty( $intro_secondary_heading ) ) : ?>

						<h3 class="h4 subtitle-margin text-center fst-italic" ><?php echo esc_html( $intro_secondary_heading ); ?>

						</h3>

						<!--It’s time to stop living by default as life passes you by.</h2><h2 class="text-center">You deserve to look forward to a brighter, deliberate future.-->
					<?php endif; ?>

				</div>

			</header>

			<?php if ( ! empty( $intro_image_url ) ) : ?>

				<div  class="intro-image wp-block-cover alignfull is-cropping" style="min-height:275px" >
					<img class="cover wp-block-cover__image-background" src="<?php echo esc_url( $intro_image_url ); ?>" alt="" style="object-position:49% 100%" data-object-fit="cover" data-object-position="49% 100%">
				</div>

			<?php endif; ?>


			<?php if ( ! empty( $intro_tertiary_heading ) ) : ?>

				<header class="row align-content-middle justify-content-center header-wrapper text-center mb-5">
					<div class="col">
						<h2 class=""><?php echo esc_html( $intro_tertiary_heading ); ?> </h2>
					</div>
				</header>

			<?php endif; ?>

		</div>

	</section>

	<?php
	/**
	 * Template part for displaying About Section on home page
	 *
	 * ACF about_content_section    - repeater
	 *
	 * ACF about_secondary_heading  - subfield
	 *
	 * ACF  about_content_image     - subfield
	 * ACF  about_content_section   - subfield
	 * ACF  about_title             - subfield
	 * ACF  about_paragraph         - subfield
	 * ACF  about_list_heading      - subfield
	 *
	 * ACF  about_content_list      - repeater
	 *
	 * ACF  about_list_heading      - subfield
	 *
	 * ACF  about_list_item_repeater- repeater
	 *
	 * ACF  about_list_item         - subfield
	 *
	 * ACF  about_assessment_heading- field
	 *
	 * ACF  about_assessment_list   - repeater
	 *
	 * ACF about_assessment_item   - subfield
	 */

	$about_cta_label = get_field( 'about_cta_label' );
	$about_cta_link  = get_field( 'about_cta_link' );
	?>
	<?php

	// Check rows exists.
	if ( have_rows( 'about_content_section' ) ) :

		// Loop through rows.
		while ( have_rows( 'about_content_section' ) ) :
			the_row();

			// Load sub field value.
			$about_secondary_heading = get_sub_field( 'about_secondary_heading' );
			$about_paragraph         = get_sub_field( 'about_paragraph' );
			// End loop.
			endwhile;
	endif;
	$about_content_image = get_field( 'about_content_image' );
	?>
	<section class="about pb-5 mt-2" style="background: linear-gradient(to right,rgba(40,40,40,.24),#fff);"> 
		<div class="container">
			<div class="row gx-4 align-items-center justify-content-between">
				<div class="col-sm-12 col-lg-6">
					<div class="header-wrapper">

						<?php

						$about_content_image = get_field( 'about_content_image' );

						if ( ! empty( $about_content_image ) ) :
							?>
							<img class="featured-image-large" src="<?php echo esc_url( $about_content_image ); ?>" alt="Deliberate Doing How We Help Our Clients"  >

							<?php
						endif;
						?>
					</div>
				</div>
				<div class="col-sm-12 col-lg-5 ">
					<div class="header-wrapper--about d-flex flex-column align-items-stretch">

						<?php
						// Check rows exists.
						if ( have_rows( 'about_content_section' ) ) :
							// Loop through rows.
							while ( have_rows( 'about_content_section' ) ) :
								the_row();
								// Load sub field value.
								$about_title     = get_sub_field( 'about_title' );
								$about_paragraph = get_sub_field( 'about_paragraph' );
								?>

								<h2><?php echo esc_html( $about_title ); ?></h2>
								<p><?php echo esc_html( $about_paragraph ); ?></p>

								<?php
								// End loop.
							endwhile;
						endif;
						?>
					</div>
				</div>
			</div>

			<div class="row gx-5 align-items-stretch justify-content-center"  >

				<div class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center">

					<?php
					// Check rows exists.
					if ( have_rows( 'about_content_list' ) ) :
						// Loop through rows.
						while ( have_rows( 'about_content_list' ) ) :
							the_row();
							// Load sub field value.
							$about_title = get_sub_field( 'about_list_heading' );
							?>

							<h2 class="mt-3 "><?php the_sub_field( 'about_list_heading' ); ?></h2>

							<ol class="list-group what-i-can-do-list">

							<?php

							if ( have_rows( 'about_list_item_repeater' ) ) :
								while ( have_rows( 'about_list_item_repeater' ) ) :
									the_row();
									// Get sub value.
									$about_list_item = get_sub_field( 'about_list_item' );
									?>
									<li class="list-group-item"><?php echo esc_html( $about_list_item ); ?></li>
									<?php
								endwhile;
							endif;
							?>
							</ol>

							<?php
							// End loop.
						endwhile;
						// No value.
					endif;

					?>

				</div>

				<div class="title-contrast col-sm-12 col-lg-6 d-flex flex-column align-items-center justify-content-center">
					<div class="header-wrapper ">
						<h2 class="mb-5"><?php the_field( 'about_assessment_heading' ); ?></h2>
						<?php
						// Check rows exists.
						if ( have_rows( 'about_assessment_list' ) ) :
							// Loop through rows.
							while ( have_rows( 'about_assessment_list' ) ) :
								the_row();
								?>
								<h3 class="h5 mb-4"><?php the_sub_field( 'about_assessment_item' ); ?></h3>
								<?php
								// End loop.
								endwhile;
						endif;
						?>
						<button class="btn btn--consultation mt-5"  data-bs-toggle="modal" data-bs-target="#<?php echo esc_url( $about_cta_link ); ?>" aria-controls="<?php echo esc_url( $about_cta_link ); ?>" aria-haspopup="true" tabindex="0"><?php echo esc_html( $about_cta_label ); ?>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
