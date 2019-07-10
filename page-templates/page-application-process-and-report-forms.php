<?php
/*
Template Name: Application Process
*/
get_header('inner-page'); ?>
 
<?php
$image = get_field('parallax_image_url');//name your custom fields 
$size = 'full'; // (thumbnail, medium, large, full or custom size)


$image_2 = get_field('parallax_image_2');
wp_get_attachment_image( $image_2, $size );

if( !empty($image) ): 
	// vars
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];
	// thumbnail
	$size = 'full';	 
	?>	 
<?php endif; ?>
<div class="grid-container fluid">
  <!-- thank you to  a pen by Jacob Stone Design  - hover effects with CSS# for the hower ides -->
  <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $image['url'];  ?>" srcset="<?php echo $image['url'].'-640x200.jpg 400w,'?><?php echo $image['url'].'-1200x881.jpg 800w,'  ?>" sizes="100vw"></div> 
   
</div> 
 
 
<?php// do_action( 'foundationpress_before_content' ); ?>
 
 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="grid-container" >
		<div class="grid-x align-center">

    <div class="cell small-12 floating-title-container">
      
     <h1 class="about-us-title logo-3 text-center"><?php the_title(); ?> </h1>
 </div>
 <div class="grid-x grid-margin-x align-spaced">
 	<!-- <div class="cell small-12 medium-6">
 		<p class="about-us-story-content"><?php// the_content(); ?></p>
  -->
   		
                <div class="cell small-12 medium-5">
                  <div class="grantseekers-title">
                  	  <a href=""> 
                     <h3>Online Application Process</h3></a>
                  </div>
                  <div class="grantseekers-content">                   
                       <ul class="limitations">
				 

						  <li>Read the <a href="<?php echo get_home_url().'/Grantseekers/Guidelines/' ?>">guidelines</a> to determine eligibility and instructions for a Proposal</li>

						<li>Visit our <a href="<?php echo get_home_url().'/Resources/FAQ/' ?>">FAQ</a> page for additional information on our application and grantmaking processes.</li>

						 <li>Use only our online application system to submit your request online.</li>

						 <li>If this is your organization's first time using the Arthur Jordan Foundation online submission process, then you must register your organization. Select the Apply button and follow the instructions.</li>

						 <li>Then log in using a username and password of your own choosing. If your organization has previously submitted an application via our online application process, then use your organization's existing login credentials. Save your username and password to update your application and submit reports.</li>

						 <li>Upon login, you can enter data, update previously saved information and upload attachments.ctions for which can be found in the guidelines.</li>

						 <li>Proposals are due March xx, <?php $stringdate = date("Y"); echo $nextyear = (int)$stringdate + 1; ?>. The Application portal opens January 1st each year. Staff are available for technical support from 9:00 AM to 4:30 PM (Eastern) during the application process period by e-mailing msallee@arthurjordanfoundation.org or calling 317-635-1378. 
						 </li>

						 
						</ul> 
                  </div>
                </div> 
                
                <div class="cell small-12 medium-5">
                   <div class="grantseekers-title">
                     <h3>Report Forms Submission</h3>
                  </div>
                  <div class="grantseekers-content">                   
                      <p>The online application process is outlined to provide instructions and report forms.</p>
                  </div>
                </div>
 
             
                 
    	
    	 

			 
		</div> 
     
 
    </div>
    </div>
 
</article>
  
<div class="grid-container">
	<div class="grid-x">
		<div class="cell small-12"> 
 		<?php  custom_breadcrumbs(); ?>
		</div>
	</div>
</div>
 
 
 	<?php get_footer();  