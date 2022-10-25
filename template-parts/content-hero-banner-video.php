<?php
/**
 * The default template for displaying header banner content
 *
 * @package workroom1128
 * @since   workroom1128 1.0.0
 */

?>
<section role="banner">

	<header class="container-fluid sticky-header-wrapper p-0 m-0">

		<div class=""  style="background: linear-gradient(to right,rgba(40,40,40,.24),#fff);"> 

			<div class="container video-covid-19 pt-4" role="banner"> 

				<h1 class="text-center">Exclusive coaching for the STEM community</h1>               
				<h2 class="mb-5 text-center fst-italic text-muted">Transforming your career from status quo to excellence!</h2>

				<?php
				$args = array(
					'posts_per_page' => 1,
					'post_type'      => array(
						'videos',
					),
					'tax_query'      => array( // phpcs:ignore WordPress.DB.SlowDBQuery
						array(
							'taxonomy' => 'video_categories',
							'field'    => 'slug',
							'terms'    => 'hero-banner-video',
						),
					),
				);

				$video_post = new WP_Query( $args )
				?>

				<?php
				if ( $video_post->have_posts() ) :
					while ( $video_post->have_posts() ) :
						$video_post->the_post();

						$videoterms = get_the_terms( $video_post->ID, 'series' );

						if ( ! empty( $videoterms ) ) {
							// get the first term; there should only be one.
							$videoterms  = array_shift( $videoterms );
							$series_slug = $videoterms->slug;
							$series_name = $videoterms->name;
						}
						?>

				<div class="border p-4 mt-5 mb-2">
					<div class="row align-content-between justify-content-center h-100" >
						<div class="col-sm-12 col-lg-6 order-sm-1 order-md-1 order-lg-1">
							<div class="video-wrapper">
								<?php the_field( 'video_embed' ); ?>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6 order-sm-2 order-md-2 order-lg-2  ">

							<div class="content-wrapper ps-3 pc-3 d-flex flex-column align-items-start justify-content-center h-100">
								<h2 class="video-title text-center">
									<?php the_field( 'video_title' ); ?>
								</h2>

								<?php the_field( 'video_description' ); ?>

							<?php
							/* get the series url.  */
							$series_url = '/series/' . $series_slug . '/';
							?>

								<div class="row flex-row w-100"> 

									<div class="col-sm-6 col-md-8 offset-md-3 mx-auto mt-1">
										<a href="<?php echo esc_url( home_url() . '/resources' . $series_url ); ?>" role="button" class="float-end btn btn-outline-primary btn-outline-primary--banner-link text-center m-0">Click HERE for webinar videos!</a>
									</div> 

								</div>  

							</div>

						</div>

					</div>
				</div>  
						<?php
				endwhile;
				endif;
				wp_reset_postdata();
				?>



				<div class="border p-4 video-border mt-4 mb-2">

					<div class="row align-content-between justify-content-center h-100" >
						<div class="col-sm-12 col-lg-6 order-2 order-sm-2 order-md-2 order-lg-1">
							<div class="content-wrapper d-flex flex-column align-items-start justify-content-center h-100">
								<h3 class="video-title">Are you disappointed in your professional life and unsure what to do next?</h3>
								<p>Click on the video for expert guidance from an engineering life coach.</p>
								<div class="button-wrapper__left">
									<button class="btn btn--consultation" data-bs-toggle="modal" data-bs-target="#consultation" aria-controls="consultation" tabindex="0">Click here for a free consultation</button> 
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6 order-sm-1 order-md-1 order-lg-2">
							<div class="video-wrapper">                           
								<iframe
								width="100%"    
								height="100%"
								src="https://www.youtube-nocookie.com/embed/6yAF8osztnE?rel=0&autoplay=0&autohide=1"
								frameborder="0" 
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
								allowfullscreen 
								class="youtube-video" style="max-width: 100%; max-height: 627px;">
								</iframe> 
							</div>
						</div>
					</div>
				</div> 
			</div>   
		</div>   
	</header> 
</section>
