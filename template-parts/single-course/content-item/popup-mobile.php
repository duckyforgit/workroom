<?php
/**
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

defined( 'ABSPATH' ) || exit;

$user = get_current_user();
/*  makes certain course and user exists */

if ( ! $user ) {
	return;
}
?>

<div class="sidebar-wrapper">  
	<div class="align-self-start mb-3 d-flex justify-content-between" >
		<h3 class="d-inline ms-2 mt-5">Course content</h3>     
	</div>

	<form class="search-course" method="get" id="searchform" 
	action="<?php echo esc_url( home_url( '/' ) ); ?>" 
	role="search">
	<label class="sr-only" for="s">
		<?php esc_html_e( 'Search', 'workroom1128' ); ?></label>
		<div class="input-group">
			<input class="field form-control" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Search courses content', 'workroom1128' ); ?>"
			value="<?php the_search_query(); ?>">
			<button type="submit"></button>         
		</div>
	</form>  

		<?php $module_classes = get_field( 'module_classes' ); ?>
		<div class="my-3" id="accordion">
			<div id="accordionClassMobile">
			<?php
			$data_id;
			$i         = 0;
			$accordion = 'accordion-';
			$j         = 0;
			$k         = 0;
			$target    = '#collapse-';
			$collapse  = 'collapse-';
			$heading   = 'heading-';

			if ( have_rows( 'curriculum', get_the_ID() ) ) :
				while ( have_rows( 'curriculum', get_the_ID() ) ) :
					the_row();

					if ( get_row_layout() === 'add_section' ) :
						$i++;
						?>
						<div class="card">
							<!-- <div class="card-header" id="heading-1"> -->
							<div class="card-header" id="<?php echo esc_html( $heading . $i ); ?>"> 
								<button class="list-link card-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo esc_html( $target . $i ); ?>" aria-expanded="false" aria-controls="<?php echo esc_html( $collapse . $i ); ?>"> 
								<!-- Item 1 > 1  -->
								<div><?php echo esc_html( get_sub_field( 'section_name' ) ); ?></div>
								</button>
							</div>
							<!-- <div id="collapse-1" class="collapse" data-bs-parent="#accordion" aria-labelledby="heading-1"> -->
							<div id="<?php echo esc_html( $collapse . $i ); ?>" class="collapse" data-bs-parent="#accordion" aria-labelledby="<?php echo esc_html( $heading . $i ); ?>">
							<?php
							$lesson_posts = get_sub_field( 'related_lesson', get_the_ID() );
							?>
								<div class="card-body">
									<?php
									if ( $lesson_posts ) :
										?>
										<!-- <div id="accordion-1"> -->
										<div id="<?php echo esc_html( $accordion . $i . '-' . $j ); ?>" >
											<div class="card">
											<?php
											foreach ( $lesson_posts as $lesson_post ) :
												$j++;
												$data_id = $lesson_post->ID;
												?>
												<!-- <div class="card-header" id="heading-1-1"> -->
												<div class="card-header" id="<?php echo esc_html( $heading . $i . '-' . $j ); ?>"> 
													<button class="list-link card-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo esc_html( $target . $i . '-' . $j ); ?>" data-id="<?php echo esc_html( $data_id ); ?>" aria-expanded="false" aria-controls="<?php echo esc_html( $collapse . $i . '-' . $j ); ?>"> 
													<!-- Item 1 > 1  -->
													<div><?php echo esc_html( get_the_title( $lesson_post->ID ) ); ?></div>
													</button>
													<!-- </h5> -->
												</div>  <!-- card header -->
												<!-- <div id="collapse-1-1" class="collapse" data-bs-parent="#accordion-1" aria-labelledby="heading-1-1"> -->
												<div id="<?php echo esc_html( $collapse . $i . '-' . $j ); ?>" class="collapse" data-bs-parent="#accordion-1" aria-labelledby="<?php echo esc_html( $heading . $i . '-' . $j ); ?>">
													<div class="card-body accordion-body"> 
														<?php $k++; ?>
														<?php
														$video = get_field( 'class_video_relationship', $data_id );

														if ( $video ) :
															foreach ( $video as $video_post ) :
																$permalink = get_permalink( esc_html( $video_post->ID ) );
																?>
																<a class="section-item--link list-group-item list-group-item-action list-group-item-light p-3 video-link" 
																type="button" role="tab"
																aria-controls="nav-dashboard"
																aria-selected="true"
																href="<?php echo esc_html( $permalink ); ?>"
																data-type="video" data-id="<?php echo esc_html( $video_post->ID ); ?>"
																data-url="<?php echo esc_html( $permalink ); ?>">
																<i class="fab fa-youtube pe-2"></i><?php echo esc_html( $video_post->post_title ); ?>
																</a>
																<?php
															endforeach;
														endif;
														$related_slides = get_field( 'class_slide_relationship', $data_id );
														if ( $related_slides ) :
															foreach ( $related_slides as $slide_post ) :
																$slide_permalink = get_permalink( $slide_post->ID );
																?>
																<!-- attempt to read property ID on string -->

																<a class="section-item--link list-group-item list-group-item-action list-group-item-light p-3 slide-link"
																type="button"
																href="<?php echo esc_url( $slide_permalink ); ?>"
																data-type="slides" data-id="<?php echo esc_html( $slide_post->ID ); ?>"
																data-url="<?php echo esc_url( $slide_permalink ); ?>">
																<i class="fas fa-file-powerpoint pe-2">
																</i><?php echo esc_html( $slide_post->post_title ); ?></a> <!-- data-url -->
																<?php
															endforeach;
														endif;

														$related_pdf = get_field( 'class_pdf_relationship', $data_id );
														if ( $related_pdf ) :
															foreach ( $related_pdf as $pdf_post ) :
																?>
																<a class="section-item--link list-group-item list-group-item-action list-group-item-light p-3 pdf-link" type="button" href="<?php echo esc_url( get_permalink( $pdf_post->ID ) ); ?>" data-type="pdf" data-id="<?php echo esc_html( $pdf_post->ID ); ?>" data-url="<?php echo esc_url( get_permalink( $pdf_post->ID ) ); ?>">
																<i class="fas fa-file-pdf pe-2"></i>
																<?php echo esc_html( $pdf_post->post_title ); ?>
																</a>
																<?php
															endforeach;
														endif;
														?>
													</div> <!-- card body -->
												</div> <!-- collapse -->
												<?php
											endforeach;
											$j = 0;
											?>
											</div>  <!-- card -->
										</div> <!-- id  accordion -->
										<?php
									endif;
									?>
								</div> <!-- card body -->
							</div>
						</div>
						<?php
					endif;
				endwhile;
			endif;
			?>

		</div>

	</div>
</div>  

