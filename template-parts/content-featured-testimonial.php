<?php
/**
 * The default template for displaying testimonial content
 *
 *
 * @package workroom1128
 * @since elearning-wp-biz 1.0.0
 */

?>
 
<?php  

$testimonial_title = "Featured Testimonial";
// get_query_var doesn't work for custom post type;  $paged = (get_query_var('paged')) ? get_query_var('page') : 1; 
// setting page to 1 since it is the static front page
   $args = array (       
      'posts_per_page'  => 1,          
      'post_type'   => 'testimonial',  
      'meta_key'    => 'featured',     
      'meta_value'  => 'yes' 
  );           

  $query = new WP_Query($args); 
?> 
 
 <section class="testimonials section-container">  
	 
	 
				<header>
					<?php if ( ! empty( $testimonial_title ) ) : ?>
					 <h2 class="text-center"><?php echo esc_html($testimonial_title) ?></h2>
					<?php endif; ?>				 
			    </header>  
			 <?php if ( $query->have_posts() ) :  ?>
    	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
 
			<div id="featured" class="blockquote" >
				<i class="quote-left fas fa-quote-left fa-5x"></i>
        <div class="blockquote-inner">
             
          <blockquote class="blockquote-caption">
                     
            <div class="border-left"><?php the_field('client_testimonial');?>
            </div>
            <cite id="cite" class="cite-caption"><?php the_field('client_first_name'); ?>              
            </cite>
          </blockquote>
             
        </div>
      </div>

       
      
      <?php  endwhile; ?>
    <?php else : ?>
    	 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>      
    <?php	wp_reset_postdata(); ?> 
    
 

</section>

<?php // $excerpt = wp_trim_words( get_field('client_testimonial'), 49 );
          //  $excerptCount = str_word_count($excerpt); 
           // $wordCountFull = str_word_count( strip_tags(  get_field('client_testimonial' ) ));
           // if ( $wordCountFull > $excerptCount ) :

            //    echo  '<div class="border-left"><p>' . $excerpt;
            //    $link = get_field('testimonial_link');
             //     if ( $link ): 
             //       $link_url = $link['url'];
            //       $link_title = $link['title'];
             //       $link_target = $link['target'] ? $link['target'] : '_self';
            ?>      
           <!--  <a class="readmore" href="<?php //echo esc_url( $link_url ); ?>" target="<?php //echo esc_attr( $link_target ); ?>"> [Read More]</a>  -->
            <?php //endif;

           // echo '</p></div>';          

           // else :
          	  //   $client_testimonial = get_field('client_testimonial');
              //  echo '<div class="border-left">'. $client_testimonial .'</div>';

           // endif; ?> 
                          
         <!--  <cite class="text-left"><?php //the_field('client_first_name'); ?></cite> -->
