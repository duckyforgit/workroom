<?php
/*
Template Name: Individual Work
*/
 
 get_header(); ?> 

 <?php get_template_part( 'template-parts/featured-image' ); ?>
<!-- <div class="main-container">
  <div class="main-grid">
    <main class="main-content-full-width">
      <?php // while ( have_posts() ) : the_post(); ?>
        <?php // get_template_part( 'template-parts/content', 'page' ); ?>
        
      <?php //endwhile; ?>
    </main>
  </div>
</div> -->
<!-- add contact side tab  -->
<div class="page-content">
 <div class="margin"></div> 
  <div class="full no-padding no-overflow fullscreen-header top-shift bgimg-2 "> <!-- <section class="process hero-full-screen process-background grid-container full custom-padding"> -->
  <div class="overlay"></div>
    
  <div class="header-intro grid-container-max">
    <div class="grid-x grid-margin-x grid-padding-x align-center-middle">
      <div class="small-12 cell">
         <h1 class="our-work-banner-title text-left"><?php the_title(); ?></h1>
         
         <h2 class="our-work-banner-subtitle text-left">Branding and Website Design</h2>
           <p class="our-work-banner-description">STRATEGY DEVELOPMENT + CONSULTING + WEBSITE DESIGN</p>
           
        </div>
      </div>
    </div>
  </div> 
  <div class="margin"></div>
    <div class="grid-container">
      
   
      <section>
      <div class="grid-x">
        <div class="cell small-12 medium-6">
            <h3> About This Project  </h3> 
        </div>
        <div class="cell small-12 medium-6">
            <p> AMP, an Ilinois-based digital and traditional marking company, contacted us here at Comrade to help design and develop a new modernized website as well as reband and update the company's imagery. </p> 
            <a href="" >VISIT WEBSITE --></a>
        </div> 
      </div> 
      <div class="grid-x">
        <div class="cell small-12"><!-- images on laptop, tablet and phone --> 
            <img src="<?php echo get_template_directory_uri();?>/dist/assets/images/laptop-PPC.jpg" alt="" width="" height="">   

        </div>
      </div> 

      <hr>


       <div class="grid-x">
        <div class="cell small-12 medium-4"><!-- images on laptop, tablet and phone --> 
          <h2> Challenges</h2>

        </div>
        <div class="cell small-12 medium-4"><!-- images on laptop, tablet and phone --> 
          <p>AMP is unique in that their coustomer base consists of small and local businesses who use print and online mediums for advertising and marketing  It was important for the new website to be structed in a way that both AMP team members and their customers could navigate and easily identify the best solution for their business.</p>

        </div>
          <div class="cell small-12 medium-4"><!-- images on laptop, tablet and phone --> 
          <p>As a secondary but equally important feature, the site needed to help facilitate understanding for a new employee prospects ont he culture and purpose of AMP.</p>

        </div>
      </div> 
<hr>
         <div class="grid-x">
        <div class="cell small-12 medium-4"><!-- images on laptop, tablet and phone --> 
          <h2> Solutions</h2>

        </div>
        <div class="cell small-12 medium-4"><!-- images on laptop, tablet and phone --> 
          <p>AMP is unique in that their coustomer base consists of small and local businesses who use print and online mediums for advertising and marketing  It was important for the new website to be structed in a way that both AMP team members and their customers could navigate and easily identify the best solution for their business.</p>

        </div>
          <div class="cell small-12 medium-4"><!-- images on laptop, tablet and phone --> 
          <p>As a secondary but equally important feature, the site needed to help facilitate understanding for a new employee prospects ont he culture and purpose of AMP.</p>

        </div>
      </div> 
    </section>
  </div>

      
   
      <section>
        <div class="grid-container full">
           
           <img src="<?php echo get_template_directory_uri();?>/dist/assets/images/Chicago/image5.jpg" alt="" width="" height=""> 



           
        </div>
      </section>
       
  </div>
 
<?php get_footer();

// Corporate - Strategy + Web Development 
// Kruger, Inc.         -->