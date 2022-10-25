<?php
/**
 * Template Name: Press Release Template
 * Template Post Type: post, page
 *
 * Template for displaying a landing page.
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header( 'workroom1128' );
?>
<div class="wrapper wrapper--page" id="index-wrapper">
	<div class="container-fluid" id="content" tabindex="-1">
		<div class="row"> 
			<main class="site-main" id="main"> 
			<?php
			while ( have_posts() ) {
				the_post();
				?>
				<!-- ======= Page Content Section ======= --> 
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">						
					<section id="experience" class="experience">  
						<div style="position:relative; width:100%; height:50px"></div>
						<div class="entry-title mb-5">
							<h3>Smocktown workroom1128 and Attic Hardware Speakeasy</h3>
						</div>
						<div class="grid-wrapper">
							<div class="wide d-flex justify-content-center flex-column align-items-center  text-white box-shadow grid-padding">
								<div class="text-wrapper text-wrapper--horizontal">
									<h3 class="text-shadow pe-5 ps-5">THE FOUNDERS</h3>
								</div>
								<p class="p-4">The founders and owners of Smocktown workroom1128 and Attic Hardware Speakeasy are Ken Johnson and Mark Sublette. Both grew up on the southside of Indianapolis, IN with Ken Johnson, Greenwood, In and Mark Sublette, Southport, In, attended Greenwood Hs and Southport HS respectively and both graduated from Purdue University&#39s Engineering Technology programs.</p>
							</div>
							<div class="wide height-4 img2-1"> 
							</div>
							<div class="square grid-box-shadow img1"> 
							</div>
							<div class="wide"> 
								<div class="d-flex flex-row justify-content-center align-items-center background-black grid-item--height4 grid-box-shadow">
									<div class="text-wrapper"> 
									<h3 class="h3 text-shadow-black ps-3 pe-3 text-white">Early Beginnings</h3>
									</div>
									<p class="text-white pe-4 ps-4">Ken and Mark met in high school when Mark was courting Ken&#39s sister Theresa and later married. Both spent a great deal of time tinkering, innovating and problem solving over the years in their respective careers in Commercial Construction and Mechanical engineering respectively which afforded both the opportunity travel and live throughout the world and US.</p>
								</div>
							</div>
							<div class="background-purple tall-on-medium wide-on-small">1
							</div>
							<div class="background-white d-none d-md-flex">2
							</div>
							<div class="regular-tall d-none d-sm-none d-md-none d-lg-flex d-xl-flex background-secondary">
								<div class="text-wrapper">
									<h3 class="h3 text-shadow-black ps-3 pe-3 text-white">Mark</h3>
								</div>
								<p class="pe-4">Mark spent many years solving complex mechanical design issues dealing with fluid dynamics, motors, mechanical systems as well as other types of mechanical problems which allowed him to travel throughout Europe and China and spent two years living abroad in charming bedroom community, Marlowe, UK, West of London, a small village with more pubs then stores, these experiences fine-tuned Mark&#39;s sense of what small pub charm and good beer were all about.</p>
							</div>
							<div class="background-purple tall-on-medium d-none d-sm-none d-md-flex d-lg-flex d-xl-flex img5"></div>
							<div class="square"> 
								<div class="background-purple tall-on-medium"><p>(A)Ken likewise spent many years building some the of the world&#39;ss most iconic sports stadiums, airport, hotels, and other types of buildings. Traveling extensively throughout the US and spending nearly 15 years working in Manhattan as well as throughout the world doing business in Rome, Milan, Dubai, Abu Dhabi and spending time in Ireland, UK, as well as the rest of mainland Europe.</p>
								</div>
								<div class="regular-tall"><p>(D)These travels and exploring the local pubs, outdoor beer gardens throughout Europe, speakeasys, breweries and eclectic architecture helped to contribute to the design or the Speakeasy and workroom1128. In 2014 Ken purchased the building, built in 1906, one of first buildings in the city, with the plan to improve it and make it something Greenwood can be proud to have in the historic district.  The City and Ken entered into a GROW agreement to improve the exterior of the building in 2018 with all work being done in spring of 2020. The building was designed for restaurant/workroom1128 concept with the glass roll up door at the front of the building and the decks and walk-up bar on the rear of the building.</p>
								</div>
								<div class="background-purple tall-on-medium"><p class="ps-4 pe-4">(B)Upon returning to the US, twenty years ago, Mark started home brewing he has been honing his skills every day since then which is very evident in the craft beer at Smocktown workroom1128.</p> 
								</div>
								<div class="background-purple tall-on-medium img6">C 
								</div>
							</div>
							<div class="giant grid-box-shadow img3"> 
							</div>
							<div class="square dog">
								<div class="box e">E</div>
								<div class="box f">F</div>
								<div class="box g">G</div>
							</div>
							<!-- <div class="wide d-flex flex-column justify-content-center align-items-center ps-1 pe-1 grid-box-shadow"> 
								<h2 class="text-shadow-black">FORTY-FIVE MINUTE PRESENTATIONS</h2>
								<h3 class="text-shadow-black">Length and content can be adjusted to meet audience needs. If you have a special request, let’s talk about it!</h3>
							</div> -->
							<div class="d-none d-sm-none d-md-flex d-lg-none d-xl-none tall background-brown">5 
							</div>
							<!-- <div class="extra-tall-wide d-flex flex-column justify-content-center background-purple box-shadow">
								<!-- <img class="width-200 d-none d-sm-none d-md-none d-lg-none d-xl-flex" src="<?php // commented out code echo esc_url( get_template_directory_uri() . '/dist/img/noun-talk-1471159-FFFFFF.png' );. ?>" width="200" alt="Let's talk about it"> -->
								<!--<h3 class="h2 text-white ps-3 pe-1 text-shadow ">Interested in a group speaking engagement? Let's talk about it!</h3>
								<a href="#request" class="btn btn-primary ms-2 me-2 mb-0 text-white">REQUEST MORE INFO</a>
							</div> -->
							<!-- <div class="extra-wide tall">
							</div>
							<div class="extra-wide d-flex justify-content-center align-items-center background-white grid-box-shadow">
								<h3 class="h2 text-center ps-3 pe-3">My core messages, listed below,<br>are the most popular from 2021. </h3>
							</div>  -->
						</div> 
						<div class="gridwrapper">
							<div class="box a">A</div>
							<div class="box b">B</div>
							<div class="box c">C</div>
							<div class="box d">
								<div class="box e">E</div>
								<div class="box f">F</div>
								<div class="box g">G</div>
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
			</article>
				<?php
				workroom1128_post_nav();
			}
			?>
		</main>
	</div>

</div>
