<?php
/**
 * The default template for displaying clients and their logos
 *
 *
 * @package workroom1128
 * @since   workroom1128 1.0.0
 */

?>
   
   <?php 
/* see https://sampsoncoachingandconsulting.com/ *
https://codepen.io/ramenhog/pen/MpORPa */
 // $clients_title  = workroom1128_get_option( 'clients_custom_title_one');
// the example on codepen uses grid not flex  
   $args = array (
    'post_type'     => array('client'),
    'post_per_page' => -1,    
    'meta_key'      => 'client_order',
    'orderby'       => 'meta_value_num',
    'order'         => 'ASC'
  );         
            
  $query = new WP_Query($args); 
  
  ?>
 
 <section class="clients-section-container container mt-5"> 
    
  <div class="content-wrapper">  

    <div class="clients mt-5 mb-5">
      <?php if ( $query->have_posts() ) : ?>
        <div class="row g-0 row-cols-4 clients-wrap" >
          <?php while ( $query->have_posts() ) : $query->the_post(); ?>       
          <?php if ( get_field( 'client_include_on_front' ) ): ?> 
            <div class="col ">

              <div class="client-logo">
              <?php $client_logo = get_field( 'client_logo' ); ?>
              <?php if ( $client_logo ) : ?> 
                  <img width="252" height="88" class="img-fluid" src="<?php echo esc_url( $client_logo ); ?>" alt="Clients"  > 
              <?php endif; ?>
              </div>

            </div>
            <?php endif; ?>                
          <?php endwhile;?>
        </div>     
        <?php endif; wp_reset_postdata();?> 
    </div> 
    
  </div> 
 
</section>
