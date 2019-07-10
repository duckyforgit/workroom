<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays the contact page.  
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?> 

<div class="contact page-content"> 
	<!-- <div class="full no-padding no-overflow fullscreen-header top-shift bgimg-3 "> -->
	<header class="front-hero" role="banner">  
	  <div class="overlay"> 
	  <div class="marketing">
      <div class="tagline"> 
       <h1 class="transition-grow ">Grow your brand with us.</h1>
       <!--   <h1>We help clients design their future.</h1> -->
        <h2 class="animated fadeInRight animateBanner-2 sub-title">We do the heavy lifting. You have a business to run.</h2>  
        <!--  <h2 class="sub-title">Converting visitors to customers through exceptional web experience.</h2>   -->
        <!--<h1>Growing your brand with you.</h1><h2 class="subtitle">We do the heavy lifting. You have a business to run.</h2> Captivating and appealing website design   Grow your brand with us. 
        Custom & affordable website design.  -->
 
         
     
        <div class="call-to-action align-right">
          <span style="font-size:1.75rem;color:white; ">Custom and affordable web design and branding</span> 
          <a role="button" href="<?php echo home_url().'/contact' ?>" class="button cta align-center" >Get a free audit today</a>
        </div><!-- get a free mockup     consultation   audit let's get started-->
        
      </div>
    </div>
   </div>
  <div class="banner-arrow banner-arrow-bottom banner-arrow-center">       
<!-- 	  	<div class="header-intro grid-container-max">
	    	<div class="grid-x grid-padding-x align-center-middle">
	      	<div class="small-12 medium-8 cell">
		        <h1>Let's design your future.</h1>          
		         <h2 class="sub-title">Contact us today for a free website audit.</h2>   
		   		 </div> 
		   		 <div class="small-12 medium-4 cell">
		   		 	<div class="call-to-action" itemprop="telephone"> 
		   		 		<a role="button" href="tel:+13177327300" class="button cta text-center not-active"rel="nofollow">1-317-732-7300</a>
		   		 	</div>
		        
		   		 </div> 
	    	</div>
	    </div> -->
	     <div class="banner-arrow banner-arrow-bottom banner-arrow-center">    
  </div>
	  </div> 
	  <div class="margin"></div>
	  <div class="grid-container">
	  	<div class="grid-x align-center-middle">
	  		<div class="cell small-12">
	  				<h2 class="h1 text-center">Contact Us Today</h2>
	  				<p class="text-center">We respect your privacy. Information you provide will be used for consultation only. It will not be shared with any Third Party.</p>
	  			</div>
	  		</div>
	   
	  	<div class="grid-x align-center-middle">
	      <div class="cell small-12 medium-12 large-8 text-center ">

	       
							<?php echo do_shortcode('[ninja_form id=4]'); ?>
							<!-- work with us or get a free audit -->
		    </div>
		    
		 </div>
	</div>
</div>
<?php get_footer();