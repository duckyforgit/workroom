 
				<section class="section container">
						<div class="row align-items-center" data-aos="fade-in">



							<div class="col-lg-12 col-xl-8">
								<h2 class="h3">Featured Event</h2>
								<hr>
								<?php
								/** 
								 * const DBDATEFORMAT   = 'Y-m-d';.
								 */
								$date  = gmdate( 'Y-m-d' );
								$today = '2022-07-20';
								// Retrieve the next upcoming event.
								$args   = array(
									'post_type'      => 'tribe_events',
									'posts_per_page' => -1,
									'meta_query'     => array( // phpcs:ignore WordPress.DB.SlowDBQuery
										array(
											'key'     => '_EventStartDate',
											'value'   => $today,
											'compare' => '>',
											'type'    => 'DATE',
										),
									),
								);
								$events = new WP_Query( $args );
								if ( $events->have_posts() ) {
									// Start the Loop.
									while ( $events->have_posts() ) {
										$events->the_post();
										echo '<p>';
										the_title();
										echo '</p>';
										// Print out the next event info.
										// print_r( $events[0] );
													// $eventtitle = $events->post_title;.
													// $eventid    = $events[0]->ID;.
													// use ID to get featured image.
													// $img = get_the_post_thumbnail_url( $eventid );.
										$myimage = get_the_post_thumbnail_url();
										?>
										<div class="banner-event" style="background-image: url( <?php echo esc_url( $myimage ); ?> )">

											<?php
												echo do_shortcode( '[events-calendar-countdown id="2259" backgroundcolor="#e86a35" font-color="#000000" show-seconds="yes" size="medium" event-start="Upcoming Event" event-end="" autostart-next-countdown="yes" autostart-text="" autostart-future-countdown="yes" future-events-list="" main-title="Next Event"]' );
											?>
										</div>
										<?php
									}
								}
								?>


						</div><!-- row -->
					</section>
