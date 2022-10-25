<?php
/**
 * Template part for displaying Gallery images in slider Section
 *
 * @package workroom1128
 */

?>
<section>
	<div class="container-xxl">
		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				user-select: none;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 1.5rem;
				}
			}
		</style>
		<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
				<div class="carousel-inner" >
					<div class="carousel-item active">
						<div class="d-flex justify-content-end">
						<div class="d-none d-lg-block" style="background-image: url( <?php echo esc_url( get_template_directory_uri() . '/dist/img/crowd-simple.jpg' ); ?>); background-size:contain; background-position:center center; width:636px; height:350px">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/facebook-crowd.jpg' ); ?>" alt="" width="100%" height="100%" style="background-size:cover; background-position:left center">
							</div>
						</div>
						<div class="container" >
							<div class="carousel-caption d-flex text-start justify-content-start align-items-start">
								<blockquote>
									<p class="fs-4">What a great place to see old friends.</p>
									<cite class="text-left">John C.</cite>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="d-none d-lg-block" style="background-image: url( <?php echo esc_url( get_template_directory_uri() . '/dist/img/beer-glass-wide2.jpg' ); ?> ); background-size: 800px 350px; background-repeat: no-repeat; background-position:80% 40%; height:350px">
						<div class="container">
							<div class="carousel-caption">
								<blockquote>
									<p class="fs-4">Nothing better than good friends and good beverages. Thanks Mark for hosting us at workroom1128!</p>
									<cite class="text-left">John C.</cite>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item"> 
					<div class="d-none d-lg-block" class="border" style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/dist/img/bar-wide-2.jpg' ); ?> ); background-size:800px 350px; background-position:right center; background-repeat: no-repeat;height:350px">
						<div class="container">
							<div class="carousel-caption text-end">
								<blockquote>
									<p class="fs-4 text-white">Look at that busy crew! Have to say they are the nicest in the Greenwood area.</p>
									<cite class="text-left">Dave O.</cite>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</section>
