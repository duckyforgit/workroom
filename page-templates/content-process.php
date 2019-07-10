<?php wp_reset_query(); 
// sort by priority - custom field
 $args = array(
 	'post_type' => 'process',
	  'meta_key' => 'priority',
     'orderby'   => 'meta_value',
   // 'meta_value' => '1'
    'order' => 'ASC', 	 
 ); 
 $query = new WP_Query( $args );?> 
<section class="process">  
  <div class="grid-container">
    <div class="grid-x align-center">
      <div class="cell ">
        <div class="text-center">
          <h2 class="marketing-site-headline text-center">OUR PROCESS</h2>       
          <hr>        
  		    <h3 class="marketing-site-headline text-center text">We create a positive target user experience by <span id="ghost"></span>.
          </h3> 
        </div>
      </div>
    </div>
   
	  <div class="grid-x align-spaced ">
        <p class="cell small-12 medium-8 text-center" itemprop="description">Our detailed process inspires trust by assuring an engaging and functional design. We thoroughly testing each component, set up an HTTPS certificate and provide server side encryption of your data. Quality relationships are then built by providing meaningful dynamic content and connections to social media.</p>
        <h3>Let us do the work so you can focus on your business.</h3>
    </div>
     <!--assuring providing -->
       
	 
  <?php if ( $query->have_posts() ) : ?>
    <div class="grid-x grid-margin-x grid-padding-x small-up-2 medium-up-2 large-up-4 align-center wrapper" >

  <?php  while ( $query->have_posts() ) : $query->the_post(); ?> 

      <div class="cell text-center margin-bottom">    
        <div class="service-icon">
          <?php the_field('prepend'); the_field("icon"); the_field('append');?> 
        </div>
        <h4 class="process-listing-title"><?php the_title(); ?></h4>
        <div data-equalizer-watch>
          <p class="marketing-site-three-up-desc" data-equalizer data-options="equalizeByRow:true;equalizeOnStack:true"><?php echo the_field('description'); ?></p>
        </div>      
      </div>

    <?php endwhile; ?>
     
  </div>   
  <?php endif;  wp_reset_postdata();  ?>
  </div>
</section> 