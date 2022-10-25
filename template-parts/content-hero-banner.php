<?php
/**
 * The default template for displaying header banner content
 *
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */

?>

<?php $banner_image = get_header_image(); ?>

<?php if ( $banner_image ) : ?>

  <section class="d-flex justify-content-center align-items-center jumbotron relative text-white jumbotron-image shadow" role="banner" 
        style="background-image:url(<?php if($banner_image) { echo $banner_image; } else { echo get_header_image(); } ?>); background-position:bottom center; background-repeat:no-repeat;">
 
        <div class="jumbotron-backdrop p-4" >
         
          <div class="container-subtitle">

            <h1 class="h2 banner-text" style="margin-bottom:3rem;">MADE FROM THE LOVE OF BEER &amp; FRIENDSHIP</h1>

            <p class="container-subtitle--fancy fancy"><span>TRADITIONAL workroom1128 &amp; PUB</span></p> 

             <div class="">

                <h2 class="h5 banner-text text-left"><b>workroom1128 workroom1128</b> crafts their own beer in downtown Greenwood, IN.</h2>
                <p class="h5 banner-text text-left d-sm-none d-md-block">Sample a flight of beers. Enjoy the deck, the patio TV or the big screen inside our relaxing taproom!</p>

              </div>

           </div>
          
        </div>
    
  </section> 

<?php endif; 
