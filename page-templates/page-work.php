<?php
/**
 * Template Name: Work
 *
 * This is the template that displays the contact page.  
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?> 

<div class="page-content">
<!-- <div class="main-content"> -->
<div class="full no-padding no-overflow fullscreen-header top-shift bgimg-3 "> <!-- <section class="process hero-full-screen process-background grid-container full custom-padding"> -->
  <div class="overlay"></div>
    
  <div class="header-intro grid-container-max">
    <div class="grid-x grid-margin-x grid-padding-x align-center-middle">
      <div class="small-12 cell">
        <h1>Let's work together.</h1> 
         
        <p class="sub-title">Request a free quote!</p>           
	      
	   		</div> 
    
    	</div>
    </div>
  </div> <!-- header intro -->
  <div class="margin"></div>

   <?php 
 
wp_reset_query(); ?>
  
<?php
$args = array(
  'post_type' => 'client_sites',
   'meta_key' => 'priority',
    'orderby'   => 'menu_order',
    'order' => 'ASC',    
 );

// $args = array(
//   'post_type' => 'portfolio',
//    'meta_key' => 'priority',
//     'sort'   => 'meta_value',
//     'order' => 'ASC',    
//  );
 $query = new WP_Query( $args );?>
 

<div id="client-sites" class="hero-full-screen full-screen-container yellow">
 <div class="item text-center   " > 
  <div class="grid-x ">
     <div class="small-12 cell veil ">
      <div class="item align-center text-center">
        <h2>Select Work 
        	<span class="small">
        	<?php get_template_part( 'template-parts/content-edit' ); ?>
        	</span>
        </h2> 
      </div>
       
        <div class="expanded button-group filters-button-group">
          <button class="BoxShadowHelper-6 button is-checked" data-filter="*">all</button> 
          <button class="BoxShadowHelper-6 button" data-filter=".design">design</button>
          <button class="BoxShadowHelper-6 button"  data-filter=".scripts">scripts</button>
          <button class="BoxShadowHelper-6 button" data-filter=".wordpress">wordpress</button>
          <button class="BoxShadowHelper-6 button" data-filter=".cms">cms</button>
          <button class="BoxShadowHelper-6 button"  data-filter=".php">php</button>
          <button class="BoxShadowHelper-6 button " data-filter=".video">video</button>
        </div>  

<div class="grid">
  <div class="grid-sizer"></div>
<?php if ( $query->have_posts() ) : ?>
<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
<?php $terms = get_the_terms(get_the_ID(), 'components');   
    if ($terms && ! is_wp_error($terms)) :
       $tslugs_arr = array();
       $string = "";
        foreach ($terms as $term) {      
          $string .= $term->slug;
          $string .= " "; 
        }     
    endif; ?>
  <div class="grid-item <?php echo $string; ?>" data-category="<?php echo $string; ?>">
   <!--  <div class="BoxShadowHelper-6 ">
    <div class="card-user-profile">-->
<div class="image-hover-wrapper"> 
  <!-- <span class="image-hover-wrapper-banner"></span>  -->
  <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'FP Medium', array('class'=>'client-image') ); ?> 
    <span class="image-hover-wrapper-reveal">
    <p><?php the_field('site_url'); ?><br>
      <i class="fas fa-link" aria-hidden="true"></i><br>More Info</p>
    </span> 
  </a>
</div>
</div>
      
    
  
<?php endwhile;   ?>
 
 <!-- show pagination here -->
 <?php else : ?>
    <div class="item align-center text-center">
   <h2>No Portfolio Projects to show</h2>
   </div> 
     <!-- show 404 error here -->
 <?php endif;   
wp_reset_postdata();  ?>
 
  </div><!-- end of grid -->
  </div> 
  
<?php //do_action( 'foundationpress_after_content' ); ?>
 
  
 <!--  <div class="grid-container">
  	<div class="grid-x">
      <div class="cell small-6 text-center">
      	<h2 class="text-left">Select Work</h2>
      		<hr class="contact-line">	 
						 <p>More information is coming. Please check back shortly
	    </div>

	    <div class="cell small-6 text-center">      
	       	<h2 class="text-left">Call</h2>
	       	<hr class="contact-line">	 
	 			<div itemprop="telephone">
		     	<a href="tel:+16302515660" class="button text-shadow cta large text-center not-active" rel="nofollow">1-630-251-5660</a>
		    </div>
		  
	     </div>
	   </div>
 </div> -->
	 
		<?php // while ( have_posts() ) : the_post(); ?>
		<?php // get_template_part( 'template-parts/sections/content', 'contact' ); ?>
		<?php // endwhile; ?>		 
 
</div></div></div></div>
<?php get_footer();