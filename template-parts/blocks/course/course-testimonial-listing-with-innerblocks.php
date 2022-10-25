<?php 

$className = 'course-testimonial-listing';

if (!empty( $block[ 'className' ] )) {

	$className .= ' ' .$block[ 'className' ];

}

if (!empty( $block[ 'align' ] )) {

	$className .= ' align' .$block[ 'align' ];

}

?>
<div class="<?php echo esc_attr($className); ?>">
 

	<section class="section-container">
		 
    <div id="testimonial-listing" class="testimonial-list">
        <div class="card"> 
			 
			<blockquote>
				<div class="border-left">
					<p><?php the_field('client_testimonial' ); ?>
          </p>
        </div>          
          <cite class="text-left"><?php the_field('client_first_name'); ?></cite>
        </blockquote> 
      </div>  

    </div>

    <div class="block-about__inner"> 
		 <div class="block-about__content"> 
			 <InnerBlocks /> 
		 </div> 
		 <div class="block-about__image">
			<?php echo wp_get_attachment_image( get_field( 'image' ), 'elearning-wp-biz_thumbnail_l' ); ?>
		 </div> 
	 </div> 
  </section>
</div> 