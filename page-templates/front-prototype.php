<?php
/*
Template Name: Front Prototype April
* see https://www.gadgetdaily.xyz/swipe-gestures/  for featured work on mobile
*/ 
?>
<?php 
	if (!defined('ABSPATH')) exit;
	get_header(); 
?>
   
 <!-- have contact form pop up after scroll to a certain point -->
 <div class="main-content" >
 <?php get_template_part( 'template-parts/sections/content', 'hero-designed'); ?>
 <?php get_template_part( 'template-parts/sections/content', 'perfect-solution'); ?>
  <?php// get_template_part( 'template-parts/sections/content', 'super-solution'); ?>
    <?php get_template_part( 'template-parts/sections/content', 'pricing-table'); ?>
 <?php // get_template_part( 'template-parts/sections/content', 'perfect-example-from-servicenow'); ?>
 <?php //get_template_part( 'template-parts/sections/content', 'services-on-image'); ?>
 <?php get_template_part( 'template-parts/sections/content', 'case-studies-front'); ?>
 <?php // get_template_part( 'template-parts/sections/content', 'location-planning-guide'); ?>
  
 </div> 
<?php get_footer(); ?>


<!-- note Missing Strict-Transport-Security security header. Affected pages:
https://1128workroom.com/wp-includes/css/ -->