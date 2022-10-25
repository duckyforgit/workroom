<?php
/**
 * Template for displaying course currciulum in center of page
 *
 * PHP version 8.0.8
 *
 * @category Course
 *
 * @package workroom1128
 * @author  1128 Workroom, LLC <support@1128workroom.com>
 * @license GNU General Public License v3 or later
 * @version GIT: <1.0.0>
 * @link    http://www.gnu.org/licenses/gpl-3.0.html
 * @since   1.0.0
 */

$user = get_current_user();
/* makes certain course and user exists */

if ( ! $user ) {
	return;
}
?>
<?php
if ( have_rows( 'course_duration_group' ) ) :
	while ( have_rows( 'course_duration_group' ) ) :
		the_row();
		?>
		<?php $hours = get_sub_field( 'duration_number' ); ?>
		<?php $time = get_sub_field( 'duration_time' ); ?>
		<?php $level = get_sub_field( 'course_level' ); ?>
		<?php $cert = get_sub_field( 'course_certificate' ); ?>
		<?php endwhile; ?>
		<?php endif; ?>

<div id="popup-content" class="col flex-column mt-md-2  ">

	<div id="ajax-content"> 

		<div class="d-flex flex-column justify-content-center m-3">

			<h2 class="mt-3 mb-3 ms-5 text-white">Welcome to this course!</h2>

			<p class="course-description mb-5 ms-5 text-white">
			Use the course content sidebar to open Module 1: Career Stagnation 
			to begin Class 1: Why You are Held Back.
			</p>

		</div>
	</div>

	<footer id="popup-footer" class="border main-content mt-auto py-3 bg-light">

		<div class="container">

			<ul class="nav nav-pills nav-fill mb-5 border-bottom" id="pills-tab" role="tablist">
				<li class="nav-item" role="presentation">

				<button class="nav-link active" 
				id="pills-overview-tab" 
				data-bs-toggle="tab" 
				data-bs-target="#pills-overview" type="button" role="tab" 
				aria-controls="pills-overview" aria-selected="false">Overview</button>
				</li>
				<li class="nav-item mobile-only" role="presentation">
				<button class="nav-link" 
				id="pills-content-tab" 
				data-bs-toggle="tab" 
				data-bs-target="#pills-content" type="button" role="tab" 
				aria-controls="pills-content" aria-selected="false">Course Content</button>
				</li> 

				<!-- <li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-QA-tab" data-bs-toggle="tab" 
				data-bs-target="#pills-QA" type="button" role="tab" 
				aria-controls="pills-QA" aria-selected="false"  >Q & A</button>
				</li> -->
				<!-- <li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-notes-tab" data-bs-toggle="tab" 
				data-bs-target="#pills-notes" type="button" role="tab" 
				aria-controls="pills-notes" aria-selected="false"  >Notes</button>
				</li> -->

				<li class="nav-item" role="presentation">
				<button class="nav-link"  
				id="pills-announcements-tab" 
				data-bs-toggle="tab" 
				data-bs-target="#pills-announcements" 
				type="button" role="tab" 
				aria-controls="pills-announcements" 
				aria-selected="false">
				Announcements
				</button>

				</li>

			</ul>

			<div class="tab-content" id="pills-tabContent">

				<div class="tab-pane fade active show" 
				id="pills-overview" 
				role="tabpanel" 
				aria-labelledby="pills-overview">

					<h3>About this course</h3>

					<p class="course-description"><?php the_field( 'course_description' ); ?></p>

					<hr>

					<div class="row "> 

						<div class="col">

							<ul class="list-group">

								<li class="list-group-item">

									Skill level: <?php echo esc_html( $level ); ?>

								</li>

								<!-- <li class="list-group-item">Students: 74190</li> -->
								<li class="list-group-item">Languages: English</li>

								<!-- <li class="list-group-item">Captions: Yes</li> -->
							</ul>

						</div>

						<div class="col">

							<ul class="list-group">

								<li class="list-group-item">

									Lectures: <?php the_field( 'course_classes' ); ?>

								</li>
								<li class="list-group-item">

									Video: <?php echo esc_html( $hours ); ?> total <?php echo esc_html( $time ); ?>
								</li>

							</ul>

						</div>

					</div>

					<hr>
					<?php if ( 'Yes' === $cert ) { ?>		
					<div class="row ">

						<div class="col">Certificates</div>

							<div class="col">

								<div class="course-certificate">

									<p>Get Course certificate by completing entire course</p>
									<a aria-disabled="true" 
										target="_blank" 
										data-purpose="get-certificate" 
										class="btn btn-primary btn-disabled " 
										tabindex="-1">
									<span>Course certificate</span></a>
								</div>
							</div>
							<div class="col"></div>
					</div>
					<?php } ?>

				</div>
				<div class="tab-pane fade mobile-only" 
				id="pills-content" 
				role="tabpanel" 
				aria-labelledby="pills-content">
					<div id="popup-mobile">
						<?php get_template_part( 'templates/single-course/content-item/popup-mobile' ); ?>
					</div>
				</div>


				<div class="tab-pane fade" 
				id="pills-announcements" 
				role="tabpanel" 
				aria-labelledby="pills-announcements-tab">

					<p>No announcements at this time. Please check back later.</p>  

				</div>
				<!-- <div class="tab-pane fade" 
				id="pills-QA" 
				role="tabpanel" 
				aria-labelledby="pills-QA-tab">
				<p>Q & A data</p>
				</div> -->
				<!-- <div class="tab-pane fade" 
				id="pills-notes" 
				role="tabpanel" 
				aria-labelledby="pills-notes-tab">
				<p>notes</p>
				</div> -->     
			</div>

		</div>

	</footer> 

</div> 
