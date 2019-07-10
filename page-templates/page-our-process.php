<?php
/*
Template Name: OUR PROCESS
*/
 
?>
  <?php get_header(); ?>

 <!-- have contact form pop up after scroll to a certain point -->
  
  
 <?php wp_reset_query(); 
// sort by priority - custom field
 $args = array(
  'post_type' => 'process',
    'meta_key' => 'sort_order',
     'orderby'   => 'meta_value',
   // 'meta_value' => '1'
    'order' => 'ASC',    
 ); 
 $query = new WP_Query( $args ); ?>
 <div class="main-content ">
<!-- <div class="main-content"> -->
<div class="full no-padding video-bg no-overflow fullscreen-header top-shift bgimg-2"> <!-- <section class="process hero-full-screen process-background grid-container full custom-padding"> -->
  <div class="overlay"></div>
    
  <div class="header-intro grid-container-max">
    <div class="grid-x grid-margin-x grid-padding-x align-center-middle">
      <div class="small-12 cell">
        <h1>Building quality relationships<br>by inspiring trust.</h1>
         
         <h2 class="sub-title h4">Together we develop honest and meaningful content<br>and convert visitors to customers.</h2>
          
      
    
    </div>
     </div>
  </div> <!-- header intro -->
</div>
 
<?php if ( $query->have_posts() ) : ?>
 
<section class="process hero-full-screen grid-container full custom-padding process-background">
   
    
    <div class="top-layer">
      <div class="grid-container">
    
        <div class="grid-x align-center-middle">
          <div class="small-12 cell text-center">             
               <h3 class="h6">OUR PROCESS</h3>            
          </div>
          <div class="small-12 large-10 cell text-center">
            <div class="margin">
              <h2 class="process-title"><!-- superior  select exceptional / small-scale-->Following a plan to ensure success
              </h2>
            </div>
            <div class="margin">
              <p class=" sub-title">
              Our detailed process inspires trust by assuring an engaging and functional design. We thoroughly testing each component, set up an HTTPS certificate and provide server side encryption of your data. Quality relationships are then built by providing meaningful dynamic content and connections to social media.
              </p>
            </div>          
          </div>
        </div>

          <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-4" >
            <?php  while ( $query->have_posts() ) : $query->the_post(); ?> 
            <div class="cell services-listing "   >
              <div class="grid-x" >
                <div class="cell shrink">
                  <div class="listing-icon">
                    <?php the_field("icon"); ?>
                    <!-- <i class="far fa-check-square fa-2x service-listing-icon"aria-hidden="true"></i> -->
                  </div>
                </div>
                <div class="cell auto" data-equalizer-watch>
                  <h4><?php the_title();?></h4>
                  <p data-equalizer data-options="equalizeByRow:true;equalizeOnStack:true"><?php echo the_field('description'); ?></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?> 
        </div> 
        <div class="margin">
        <div class="grid-x align-center-middle">
            <!-- <div class="cell small-6 text-center">            
              <button class="button cta large align-right" >Let's get started</button>
            </div> -->
             <div class="advancing-buttons">
          <a href="<?php echo home_url().'/work' ?>" class="button medium hollow">Learn More</a>
          <a href="<?php echo home_url().'/contact' ?>" class="button medium nebulus-blue" target="_blank">Set Up A Consultation</a>
        </div>
           </div>
         </div>
      </div> 
    </div>
  </section>
<?php endif;   
wp_reset_postdata();  ?>  
</div>  
 
<?php get_footer();?> 