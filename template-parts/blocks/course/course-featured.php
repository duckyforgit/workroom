<?php 

$className = 'course-featured-testimonial';

if (!empty( $block[ 'className' ] )) {

	$className .= ' ' .$block[ 'className' ];

}

if (!empty( $block[ 'align' ] )) {

	$className .= ' align' .$block[ 'align' ];

}

?>
<div class="<?php echo esc_attr($className); ?>">
 
	<?php $testimonial_title = "Featured Testimonial";
  ?>

	<section class="testimonials testimonials--featured section-container mb-5">  
	 
		<div class="container">

			<div class="row align-center-middle">

				<div class="col-sm-12">

					<header>						
						<?php if ( ! empty( $testimonial_title ) ) : ?>

						<h2 class="text-center mt-4"><?php echo esc_html($testimonial_title) ?></h2>

						<?php endif; ?>	

					</header>  
				
	
				<div id="featured" class="blockquote" >				
				<i class="quote-left fa-solid fa-quote-left fa-5x"></i>
					<div class="blockquote-inner">
						
						<blockquote class="blockquote-caption">
									
							<div class="border-left">

								<p><?php the_field('client_testimonial');?></p>

							</div>

							<cite id="cite" class="cite-caption"><?php the_field('client_first_name'); ?>

							</cite>

						</blockquote>
						
					</div>
				</div>

			</div>

		</div>
	 
	</section>
</div>