<?php
/**
 Template Name: Featured Work
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


get_header(); ?>
 
 <div class="page-content">
 		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php
		// Get the Video Fields
		$video_mp4 =  get_field('mp4_video'); // MP4 Field Name
		$video_webm  = get_field('webm_video'); // WEBM Field Name
		$video_flv =  get_field('flv_video'); // FLV Field Name
		$video_poster  = get_field('poster_image'); // Poster Image Field Name
		               
		// Build the  Shortcode
		$attr =  array(
		'mp4'      => $video_mp4,
		'webm'     => $video_webm,
		'flv'      => $video_flv,
		'poster'   => $video_poster,
		'preload'  => 'auto'
		);

		// Display the Shortcode
		//echo wp_video_shortcode(  $attr );
		?>
 
	<section class="other-hero select-work"> 
 		 <!-- https://webkit.org/blog/6784/new-video-policies-for-ios/ -->
	<!-- 	<div class="embed-container">
				   	<video autoplay="" loop="" muted="" playsinline="" class="no-overflow" id="fullscreen-video" poster="" style="position: relative;">  -->
				      <!-- <source src="<?php //echo get_stylesheet_directory_uri().'/dist/assets/images/videos/31512310-preview.mp4' ?>" type="video/mp4">  
				  				<source src="<?php // the_field('mp4_video'); ?>" type="video/mp4" > 
	     					<source src="" type="video/webm"> 
	   						</video>   
 						</div> --> 
	  <div class="overlay"> 
	  	  <div class="marketing">
					    <div class="tagline">
					      <div class="">
					        <h1 class="our-work-banner-title text-left">
				         	<?php the_field( 'client_site_banner_title'); ?>
				         	</h1>			         
				          <p class="our-work-banner-description">
				           	<?php the_field( 'client_site_banner_categories' ); ?>
				          </p>				           
									   </div>
									 </div>
								</div>
							<div class="banner-arrow banner-arrow-bottom banner-arrow-center">    
				 		</div>
						</div>  
	</section>   
	 
	<div class="margin"></div>		 
 
	<section class="select-work-breadcrumbs">  
	  	<div class="grid-container">  
			  <div class="grid-x align-center">
			    <div class="cell small-12">
			      <?php custom_breadcrumbs(); ?>
			    </div>
			  </div>
			</div> 
			<hr>
	</section>

	<section class="select-work-content">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell small-12 medium-6">
					<h2> About This Project  </h2> 

				</div>
				<div class="cell small-12 medium-6">
					<div class="grid-x">
						<div class="cell small-3">
							<h3 class="bold">Business:</h3>
						</div>
						<div class="cell auto">
							<h3 class="client-site-title"><?php the_field('client_site_title'); ?></h3>					        	 
						</div>       	
					</div>
					<div class="grid-x">
						<div class="cell small-3">
								<h3 class="bold">Status:</h3>
						</div>
						<div class="cell auto">
							<h3><?php the_field('client_site_status'); ?> </h3>
						</div>
					</div>
					<div class="grid-x">
						<div class="cell small-3">
								<h3 class="bold">Brand:</h3>
							 
						</div>
						<div class="cell auto">
							 <div class="testimonial-quote">
			            <blockquote>
			                <p><?php the_field('client_site_banner_subtitle'); ?></p>
			            </blockquote> 			        		 
			        	</div>
						</div>
					</div>
				</div>
			</div>
			<div class="margin"></div>
			<div class="grid-x">  
				<div class="small-12 medium-6 cell">
					<p><?php the_field( 'about_this_project'); ?></p> 
					<a href="<?php the_field( 'site_url'); ?>" alt="<?php the_field('client_site_title');?>" target="_blank" >VISIT WEBSITE </a>
				</div>
				<div class="cell small-12 medium-6">
								<!-- <video autoplay="" loop="" muted="" playsinline="" class="no-overflow" id="partscreen-video" poster="" style="position: relative;">  
									<source src="<?php // echo get_stylesheet_directory_uri().'/dist/assets/images/Videos/Desktop-2019.02.12-14.19.45.01.mp4' ?>" type="video/mp4" class="video"> 
									</video> -->
					<img src="<?php echo get_stylesheet_directory_uri();?>/dist/assets/images/perfectionpetcare-featured-new.jpg" alt="" >
				 
				</div> 
			</div> 
	 
			<hr>
			<div class="grid-x">
				<div class="cell small-12">
				  
							<h2> Goals</h2>
					</div>
				</div>
						<div class="grid-x">
									 <div class="cell small-6">
											<ol>
											  <li class="one">Introduce overnight pet care services.</li> 
											 </ol>
											</div>
											<div class="cell small-6">
												<p>Perfection Pet Care is a start-up company. They wish to grow their clientele. They offer a variety of services from pet sitting to pet taxi driving. Their premier service is overnight pet sitting in the client's home. This service is not offered often by competitors.<?php the_field('goal_description-1'); ?></p>
											</div>
						</div>
						<div class="grid-x">
									 <div class="cell small-6">
											<ol>
											  <li class="two">Grow local client base.</li> 
											 </ol>
											</div>
											<div class="cell small-6">
												<p>The primary goal is to reach local customers who desire overnight pet care in their own home. The second goal is to grow the client base for all services offered.<?php the_field('goal_description-1'); ?></p>
											</div>
						</div>
			 
	<!-- 		<div class="margin"></div>
			<div class="grid-x">
				<div class="cell small-12 medium-6">--><!-- images on laptop, tablet and phone --> 
					<!--  <div class="goals-header"> 
							<h2> Challenges</h2>
						</div>

						<ol>
						  <li>Increase online exposure through page ranking.</li> 
						  <li>Create a social media presence from scratch.</li>
						</ol>
				</div>
				<div class="cell small-12 medium-6">images on laptop, tablet and phone 
					<div class="goals-header"> 
								<h2> </h2>
						</div>
					<p>Perfection Pet Care wished to obtain a high search engine ranking in their market and location. They felt it would help them reach potential clients quickly. <br>They began with a low social media profile and few followers. 
						<?php // the_field('challenges_description'); ?></p>
				</div>  
				 
			</div> -->
			<div class="margin"></div>
			<div class="grid-x">
				<div class="cell small-12 medium-6"><!-- images on laptop, tablet and phone --> 
						<div class="goals-header"> 
							<h2> Solutions</h2>
						</div>
					</div>
										<div class="grid-x">
									 <div class="cell small-6">
											<ol>
											  <li class="one">Develop a content-driven website.</li> 
											 </ol>
											</div>
											<div class="cell small-6">
												<p>We chose to create a mobile-friendly website with a content management system to easily publish high-quality, relevant content. We then branded it with a whimsical theme. These steps allow Perfection Pet Care to establish authority in their field, build a caring rapport with clients and potential customers, and increase search engine optimization with searchable content beneficial to their audience.<?php the_field('goal_description-1'); ?></p>
											</div>
						</div>
						<div class="grid-x">
									 <div class="cell small-6">
											<ol>
											  <li class="two">Create relevant social media.</li> 
											 </ol>
											</div>
											<div class="cell small-6">
												<p>We then set up a Facebook business page for a more personal connection. It allows Perfection Pet Care to share related experiences and build trust in their ability to care for their clients' pets.<?php the_field('goal_description-1'); ?></p>
											</div>
						</div>
						 
	 
				  
			 
			 
			</div>
		 
	</section>

	<section>     
	  <div class="grid-container ">           
	     <!-- <img src="<?php // echo get_template_directory_uri();?>/dist/assets/images/laptop-white-PPC.jpg" alt="" width="" height=""> -->
				<!-- <img src="<?php // echo get_template_directory_uri();?>/dist/assets/images/stock-photo-laptop-mobile-phone-and-digital-tablet-pc-isolated-on-white-with-clipping-path-135616019.jpg" alt="" >   --> 
				</div>
	</section>

<?php endwhile; ?>

</div>
<?php  // get_template_part( 'template-parts/sections/content','switch-devices'); ?> 
<?php  // get_sidebar(); ?>
 		 
 
<?php get_footer();