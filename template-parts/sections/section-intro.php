<?php
/**
 * Template part for displaying Intro Section
 *
 *@package workroom1128
 */
    /* default */
    $img_url = esc_url(foundationpress_get_option('intro_custom_img'));
    $intro_title_primary  = foundationpress_get_option('intro_custom_title_primary');
    $intro_title_secondary  = foundationpress_get_option('intro_custom_title_secondary');
    $content   = foundationpress_get_option('intro_custom_content');
    // use this method to get different device sizes from customizer image
    // note: media image cannot be edited after upload when using image this way
    // $img_url will not match the url in guid field of post because edited version is not stored in database
    $image_id = foundationpress_get_image_id($img_url);
    // retrieve the various image sizes
     $image_thumb = wp_get_attachment_image_src($image_id[0], 'featured-small');
     $image_med = wp_get_attachment_image_src($image_id[0], 'featured-medium');
   $image_lrg = wp_get_attachment_image_src($image_id[0], 'featured-xlarge');
?> 
 
     
    <div class="main-container-full"  >
      <div class="content-wrapper">
            <header class="grid-x grid-padding-x align-justify align-middle header-wrapper text-center"  >
              <div class="cell small-12">
                <?php if (! empty($intro_title_secondary)) : ?>
                  <h2 class="text-center" style="line-height:1.3;margin-bottom:2rem; font-weight:400; "><?php echo esc_html($intro_title_secondary) ?> 
                <?php endif; ?>
                <?php if (! empty($intro_title_primary)) :
                    ?><br>
                  <span class="h4 text-center" style="font-style:italic"><?php echo esc_html($intro_title_primary) ?></span></h2>
                </div>
                  <!--It’s time to stop living by default as life passes you by.</h2><h2 class="text-center">You deserve to look forward to a brighter, deliberate future.--> 
                <?php endif; ?>
            </header> 
                <?php //print_r($image_thumb);
                if (! empty($image_id)) : ?>
                  <div  class="intro-image" role="banner" data-interchange="[<?php   echo $image_thumb[0]; ?>, small], [<?php   echo $image_med[0]; ?>, medium], [<?php  echo $image_lrg[0]; ?>, large]">
                    </div>  
                      <!-- default for browsers that do not support data-interchange -->
                    <noscript><img src="<?php echo esc_url($img_url); ?>" alt="workroom1128 introduction" ></noscript>
                 
                <?php  endif; ?>
          <?php if (! empty($content)) : ?>
             <header class="grid-x grid-padding-x align-justify align-middle header-wrapper text-center"  >
              <div class="cell small-12">
                <h2 class="text-center" style="font-weight:400; padding-top:2rem">
                  <?php echo wp_kses_post($content); ?>
                </h2>
              </div>
            </header>
          <?php endif; ?>            
        </div>    
      </div>   
