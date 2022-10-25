<?php 

$className = 'courseslider';

if (!empty( $block[ 'className' ] )) {

    $className .= ' ' .$block[ 'className' ];

}

if (!empty( $block[ 'align' ] )) {

    $className .= ' align' .$block[ 'align' ];

}

?>
<div class="<?php echo esc_attr($className); ?>">

    <section class="slider section-container" style="margin-top:100px">  
     
    <div class="container">
        <div class="grid-x align-center-middle">
            <div class="cell small-12">
                 
<!--  count of totla speaking topics / 2  -->
    <?php  
    //$counter = 0; ?>
<?php if( have_rows('slides') ):   ?>
    <ul class="slides">
       
    <?php while( have_rows('slides') ): the_row(); 
      
        $image = get_sub_field('image');
      //  print_r($image['url']);
        

        ?>
        <li>
       <img src="<?php echo $image['url'] ?>" alt="<?php echo get_sub_field('caption')?>">
            <?php //echo wp_get_attachment_image( $image, 'medium' ); ?>
            
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>

     
 
            
     
      

    </div>
  </div>
</div>
</section>
</div>