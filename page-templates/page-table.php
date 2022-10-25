<?php
/**
 * Template Name: Table Page
 * Template Post Type: page, offer
 * Template for displaying a page like a table
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php
			while ( have_posts() ) {
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header>

						<h1 class="h2 entry-title"><?php the_title(); ?></h1>

					</header> 
					<!-- ======= The Grid Speaking to Your Organization Section ======= -->
					<section id="experience" class="experience">
						<div style="position:relative; width:100%; height:50px">
						</div>
						<div class="grid-wrapper">
							<div class="box-1 background-secondary-dark d-flex justify-content-center flex-column align-items-center text-white box-shadow grid-padding">
								<h2 class="display-3 text-shadow pe-5 ps-5 ">ENGAGE THROUGH A VIRTUAL WEBINAR</h2>
							</div>
							<div class="box-2 d-none d-xl-flex"></div>
							<div class="box-3 box-3--clock align-items-start flex-column grid-box-shadow ps-2 pe-2">
								<h3 class="text-shadow-black " >FORTY-FIVE MINUTE PRESENTATIONS.</h3>
								<h4 class="text-shadow-black ">Additional time for live Q&A TBD.</h4>
							</div>
							<div class="box-4 grid-box-shadow img20">
							</div>

							<div class="box-5 justify-content-center align-items-center grid-box-shadow">
								<div class="d-flex justify-content-center align-items-center grid-item--height4 ">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/icons/noun-e-learning-2575634-52A8A4.svg' ); ?>" class="icon ms-2 me-2" width="75" height="75" alt=""><h4 class="h3 text-shadow-black pe-2">Virtual Platform to be arranged on an organizational basis.</h4>
								</div>
							</div>
							<div class="box-6 background-antiquewhite">
							</div>
							<div class="box-7 giant grid-box-shadow img21">
							</div>
							<div class="box-8 tall-on-medium d-flex d-lg-flex d-xl-flex flex-column grid-box-shadow background-secondary-light">
								<h3 class="h2 ps-4 pe-1 text-shadow-black">Themes are flexible and will integrate organization objectives.</h3>								
							</div>
							<div class="box-9 d-none d-sm-none d-md-flex d-lg-none d-xl-none tall background-brown">
							</div>
							<div class="box-10 tall wide d-flex flex-column justify-content-center background-secondary-radial-gradient box-shadow">
								<img class="width-200 d-none d-sm-none d-md-none d-lg-none d-xl-flex" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/noun-talk-1471159-FFFFFF.png' ); ?>" width="200" alt="Let's talk about it">
								<h3 class="h2 text-white ps-3 pe-1 text-shadow ">Interested in the virtual self development series? Let's talk about it!</h3>
								<a href="#request" class="btn btn-primary ms-2 me-2 mb-0 text-white">REQUEST MORE INFO</a>								
							</div>
						</div>
						<div class="entry-content mt-5">
							<?php
							the_content();
							workroom1128_link_pages();
							?>
						</div>
						<footer class="entry-footer">
							<!-- edit button which is only visible if logged in -->
							<?php workroom1128_entry_footer(); ?>
						</footer>
					</section> 
					<!-- <div class="vertical-section">
						<div class="vertical-wrapper">
							<h3>Header One</h3>
							<div class="content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat aliquam deserunt harum rem earum assumenda perspiciatis expedita. Aliquid distinctio tenetur fugiat qui recusandae obcaecati voluptates.</p>
							</div>
						</div>
						<div class="vertical-wrapper">
							<h3>Header Two</h3>
							<div class="content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat aliquam deserunt harum rem earum assumenda perspiciatis expedita. Aliquid distinctio tenetur fugiat qui recusandae obcaecati voluptates.</p>
							</div>
						</div>
					</div> -->

					<table class="table responsive-card-table">
						<thead>
							<tr>
								<th scope="col">Series Title</th>
								<th scope="col">Series Takeaway</th>
								<th scope="col">Webinar 1</th>
								<th scope="col">Webinar 2</th>
								<th scope="col">Webinar 3</th>
							</tr>
						</thead>
						<tbody>
							<tr class="secondary-color">
								<td data-label="Series Title">
									<p class="width-200">I. Upgrade Your Life and Elevate Your Profession</p>
								</td>
								<td data-label="Series Takeaway">
									<p class="width-200">Your career will only ever be as great as you are.</p>
								</td>
								<td data-label="Webinar 1">
									<ul>
										<li class="title">Title: Career Stagnation</li>
										<li class="theme">Theme - Propel Career Forward</li>
										<li>Fear</li>
										<li>Indecision</li>
										<li>Goal Setting</li>
										<li>Self-Awareness</li>
									</ul>
								</td>
								<td data-label="Webinar 2">
									<ul>
										<li class="title">Title: Career Dependency</li>
										<li class="theme">Theme - Establish Personal Autonomy</li>
										<li>Career Outcomes</li>
										<li>Self-Identity</li>
										<li>Self-Confidence</li>
										<li>Tools for Self-Autonomy</li>
									</ul>
								</td>
								<td data-label="Webinar 3">
									<ul>
										<li class="title">Title: Career Unfulfillment</li>
										<li class="theme">Theme - Create Career Purpose</li>
										<li>Leadership</li>
										<li>Success</li>
										<li>Failure</li>
										<li>Happiness</li>
										<li>Career Purpose</li>
									</ul>
								</td>
							</tr>
							<tr class="grapefruit-light">
								<td data-label="Series Title">
									<p class="width-200">II. Career Status: Why Your Approach to Work Isn't Working</p>
								</td>
								<td data-label="Series Takeaway">
									<p class="width-200">People miss the profound impact of a career when their goals are to obtain status, money or benefits.</p>
								</td>
								<td data-label="Webinar 1">
									<ul>
										<li class="title">Title: Career Attachment</li>
										<li class="theme">Theme - Why Are You Held Back</li>
										<li>The Motivational Triad</li>
										<li>Job and Self-Identity</li>
										<li>The Job Scavenger Hunt</li>
									</ul>
								</td>
								<td data-label="Webinar 2">
									<ul>
										<li class="title">Title: Becoming Self Aware</li>
										<li class="theme">Theme - Tools for a Happier Life</li>
										<li>Fact or Fiction</li>
										<li>Energetic Framework for Life</li>
										<li>Instruction Guide for Others</li>
									</ul>
								</td>
								<td data-label="Webinar 3">
									<ul>
										<li class="title">Title: Craft Your Future</li>
										<li class="theme">Theme - Optimize Your Work Approach</li>
										<li>Goal Setting</li>
										<li>Failure/Imposter</li>
										<li>Career & Life Purpose</li>
									</ul>
								</td>
							</tr>
							<tr class="gray">
								<td data-label="Series Title">
									<p class="width-200">III. Defeat Indecision and Enhance Your Self-Confidence</p>
								</td>
								<td data-label="Series Takeaway">
									<p class="width-200">Falling forward and beating obstacles remove barriers from knowing how great you are.</p>
								</td>
								<td data-label="Webinar 1">
									<ul>
										<li class="title">Title: Indecision is the Enemy</li>
										<li class="theme">Theme - Why We Choose Indecision</li>
										<li>Your Brain</li>
										<li>Indecision</li>
										<li>Decision-Making Tools</li>
										<li>Purpose of Goals</li>
									</ul>
								</td>
								<td data-label="Webinar 2">
									<ul>
										<li class="title">Title: Get Comfortable with Discomfort</li>
										<li class="theme">Theme - Nothing is Guaranteed</li>
										<li>Uncertainty</li>
										<li>Vulnerability</li>
										<li>Authenticity</li>
										<li>Self-Sabotage</li>
									</ul>
								</td>
								<td data-label="Webinar 3">
									<ul>
										<li class="title">Title: Upgrade Your Self-Confidence</li>
										<li class="theme" style="font-style:italic">Theme - Your Duty to the World</li>
										<li>Leadership</li>
										<li>Self-Confidence</li>
										<li>Career & Life Purpose</li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>

					<?php the_content(); ?>

					<?php edit_post_link( __( '(Edit)', 'workroom1128' ), '<span class="edit-link">', '</span>' ); ?>

					<footer>
						<?php
							wp_link_pages(
								array(
									'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'workroom1128' ),
									'after'  => '</p></nav>',
								)
							);
						?>
						<?php
						$navtags = get_the_tags();
						if ( $navtags ) {
							?>
							<p><?php the_tags(); ?></p>
						<?php } ?>

					</footer>

				</article>

				<?php
			}
			?>

		</main><!-- #content -->

	</div><!-- container full width -->

</div>

<?php
get_footer();
