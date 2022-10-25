<?php
/**
 * The template for displaying modal survey.
 * Used for both single and index/archive/search.
 * php version 8.0.8
 *
 * @category Description
 * @package  Workroom1128
 * @author   Name <email@email.com>
 * @license  http://url.com MIT
 * @version  GIT: 1.0.0
 * @link     http://url.com
 * @since    1.0.0
 */

?> 
<!-- Modal -->
<div class="modal fade" id="survey" tabindex="-1" 
aria-labelledby="surveyModal" aria-hidden="true">
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header ">
				<div class="modal-header--title"> 
				<h5 class="modal-title text-center" 
				id="surveyModal">Complete Your Free Assessment!</h5>
			</div>
			<div> 
				<button type="button" class="btn-close" 
				data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			</div>
			<div class="modal-body">
					<p>Within 3 business days, you will receive a 
						personalized summary based on your answers.
						Your summary may include suggestions, 
						additional questions and relevant feedback.</p> 
					<div id="container"> 
						<?php echo do_shortcode( '[ninja_form id=2]' ); ?>
					</div>   
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary call-to-action"
				data-bs-dismiss="modal">Close</button>
				<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			</div>
		</div>
	</div>
</div>
