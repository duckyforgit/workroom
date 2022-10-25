<?php
/**
 * The template for displaying consultation form via modal.
 *
 * Used for both single and index/archive/search.
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */
  ?> 

<!-- Modal -->
<div class="modal fade" id="consultation" tabindex="-1" aria-labelledby="consultationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-header--title"> 
          <h5 class="modal-title text-center">Set up a free consultation</h5>
        </div>
        <div> 
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       </div>
        <?php echo do_shortcode('[ninja_form id=9]'); ?>
        <div class="container">
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary modal-dismiss" data-bs-dismiss="modal">Close</button>
             
          </div>
        </div>
    </div>
  </div>
</div>
