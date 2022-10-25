<?php
/**
 * The template for displaying featured work in special design on front page
 *
 * Used for both single and index/archive/search.
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */
?>
 
<section id="survey" class="survey section-container reveal" data-reveal >
  
   
  <div class="container-xxl"> 
   
    <h3 class="lead text-center">Take the survey!</h3>   
    <button class="close-button" data-close aria-label="Close reveal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
 
    <div class="row align-middle align-spaced">           
      <div class="col-sm-12" >
        <p> If you’re suffering in your professional career, fill out this survey and click submit.  After reviewing your results, I will personally contact you via email within 48 hours. Based upon your survey answers, I will reply with how I can help and what my personal recommendations are.</p> 
       
        <?php echo do_shortcode('[ninja_form id=3]'); ?>
              
      </div> 
    </div>
  </div>  
</section>
