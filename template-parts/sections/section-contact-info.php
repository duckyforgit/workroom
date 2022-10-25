<?php
/**
 * The template part for displaying Contact Information
 *
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */
?>

<?php
if (has_custom_logo()) {
    $biz_name = get_bloginfo('name');
    $attachment_id = get_theme_mod('custom_logo');
           
    $image_attributes = wp_get_attachment_image_src($attachment_id, 'medium');

    if ($image_attributes) :
        $image = '<img src="'.  $image_attributes[0] . '" width="' .  $image_attributes[1] . '" height="'  . $image_attributes[2] . '" alt="' . $biz_name .'" >';
    endif;
} else {
    $image = '<h3>'. bloginfo('name') . '</h3>';
}

?>
<section class="footer-contact">  

    <p class="fancy"><span>CONTACT</span></p>
   
    
        <div class="ms-3 me-3">
            
       
       <div class="logo mb-3 text-center" >

        <?php

        if ($image) {
            echo $image;
        }
        ?>

       </div>
    <ul class="text-white fa-ul m-5 ps-5">
        
        <li class="mb-3">

            <span class="fa-li">

                <i class="text-white fas fa-mobile-alt fa-2x" ></i>

                <a class="text-decoration-none ps-2" href="tel:317-215-4836" ></a>

            </span>&nbsp;1-317-215-4836

        </li>
      
        <li class="mb-3">

            <span class="fa-li">

                <i class="text-white fas fa-envelope fa-2x" ></i>

            </span>

            <a class="text-white text-decoration-none ps-2" href="mailto:smocktownworkroom1128.cc@gmail.com" target="_blank"  >Email Us</a>

        </li>

        <li class="mb-3">

            <span class="fa-li">

                <i class="text-white fab fa-facebook fa-2x"></i>

            </span>

            <a class="text-white text-decoration-none ps-2" href="https://www.facebook.com/workroom1128-workroom1128-LLC-101171972322851" target="_blank">Find Us on Facebook</a>

        </li> 

    </ul>
     </div>
</section>
