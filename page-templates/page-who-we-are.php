<?php
/**
 * Template Name: Who we are 
 *
 * This is the template that displays the contact page.  
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?> 

<div class=" page-content">

	 
		<header class="other-hero full no-padding no-overflow fullscreen-header top-shift" role="banner">  
  <div class="overlay"></div> 
    <div class="marketing">
      <div class="tagline">
        <h1>Driven, budget-minded,<br>
					goal-oriented, passionate,<br>focused?</h1> 
       <h2 class="sub-title  "><small>We are too.</small></h2>
      </div>
    </div>
  <div class="banner-arrow banner-arrow-bottom banner-arrow-center">    
  </div>
  
</header>

<!-- 	<div class="full no-padding no-overflow fullscreen-header top-shift bgimg-2 "> 
		<div class="overlay"></div>
		<div class="header-intro">
			<div class="grid-x grid-margin-x grid-padding-x align-center-middle">
				<div class="small-12 cell">
					<h1>Driven, budget-minded,<br>
					goal-oriented, passionate, focused?</h1> 
					<h2 class="sub-title h4">We are too.</h2>           
				</div>
			</div>
		</div>
	</div> -->
	<div class="margin"></div>
	<div class="who-we-are grid-container">
		<div class="grid-x grid-padding-x align-bottom">
			<div class="cell small-12 medium-12 large-6 ">
				<h2 class="text-left">About</h2>
				<hr class="contact-line">	 
				<p>1128 WORKROOM is a creative and affordable name in the web development field. Our clients are innovative and hard working but have little time for web marketing. Let us take your goals, infuse your passion and create a genuine brand to reach your customers. We listen and create, work out the details and help you become web famous.</p>
				<div class="call-to-action">
          <a role="button" href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button cta align-center" >Let's collaborate</a>          
        </div>
			</div>
			<div class="cell small-12 medium-12 large-6 text-right show-for-large">
				<?php get_template_part( 'template-parts/featured-side-image'); ?>			 
				<img src="<?php echo get_stylesheet_directory_uri();?>/dist/assets/images/shutterstock_141675481@0,75x.jpg" alt="" >
			</div>
		</div>
	</div>	 
	</div>   

<?php get_footer();