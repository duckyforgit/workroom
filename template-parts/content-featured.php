<?php
/**
 * The default template for displaying featured content
 *
 *
 * @package workroom1128
 * @since elearning-wp-biz 1.0.0
 */

?>
 
<?php  

 
?> 
 
 <section class="testimonials section-container">  
	 
	 
				<header>
				 
					 <h2 class="text-center"><?php the_title(); ?></h2>
					<?php //endif; ?>				 
			    </header>  
			 <?php //if ( $query->have_posts() ) :  ?>
    	<?php //while ( $query->have_posts() ) : $query->the_post(); ?>
 
			<div id="featured" class="blockquote" >
	 <h3>testing content</h3>
      </div>

       
      
      <?php  //endwhile; ?>
    <?php //else : ?>
    	<!--  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p> -->
		<?php //endif; ?>      
    <?php	//wp_reset_postdata(); ?> 
    
 

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
