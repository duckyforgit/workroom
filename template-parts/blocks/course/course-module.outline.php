<?php 

$className = 'coursemoduleoutline';

if (!empty( $block[ 'className' ] )) {

  $className .= ' ' .$block[ 'className' ];

}

if (!empty( $block[ 'align' ] )) {

  $className .= ' align' .$block[ 'align' ];

}

?>
<div class="<?php echo esc_attr($className); ?>">  
  <div class="elearning-wp-biz-course--modules">

    <h3 class="m-5 text-center">This course constitutes my absolute best and relevant career resources all in one place!</h3>
    <a href="<?php the_permalink(); ?>"><?php the_field('course-module-description'); ?></a>
 
      <div class="row gx-4">

<h2>in my course module</h2>
 <?php $course_modules = get_field( 'course_modules' ); 
   $b = " "; 
   ?>
<?php if ( $course_modules ) : ?>
  <?php foreach ( $course_modules as $post ) : ?>
    <?php setup_postdata ( $post ); 


    $id = $post->ID;
   $moduleTitle = get_field('module_title', $id); 
   echo $moduleTitle;
   //wp_reset_postdata($post);  
// get the classes
$module_classes = get_field( 'module_classes' ); 
  
  $a = " "; 
 if ( $module_classes ) : 
 foreach ( $module_classes as $postClass ) : 
setup_postdata ( $postClass ); 
$idClass = $postClass->ID;
$classTitle = get_field('class_title', $idClass); 
 
$a .= "<p>";
$a .= $classTitle;  $a .= "</p>";
echo $a;
$a ='';
?>
 
 <?php endforeach; ?>
  <?php wp_reset_postdata($postClass); ?>
<?php endif; ?> 

<?php endforeach; ?>
  <?php wp_reset_postdata($post); ?>
<?php endif; ?> 
 

     <div> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </div>
    <?php  //$title = get_field('module_title', $post->ID); ?>
        <div class="col is-vertically-aligned-top module-height"> 
        
          <div class="pt-4 ps-2 pe-1 border-light-gray gray-background module-height"> 
            <h3 class="text-center"><?php //echo $title;  ?></h3>

            <h4 class="mt-3 mb-4 text-center"><em><?php the_field('module_subtitle'); ?></em></h4>

            <table class="table ">
              <tbody>
                <tr>            
                  <td>Class 1:</td><td>Why You are Held Back</td>
                </tr>
                <tr>
                   <td>Class 2:</td><td>STEAR Energetic Framework, Emotional Substitution</td>
                </tr>
                <tr> 
                  <td>Class 3:</td><td>Life Curriculum, Emotional Adulthood</td>
                </tr>
                <tr>
                  <td>Class 4:</td><td>Purpose of Goals, Career Investment</td> 

                </tr>
              </tbody>
            </table>
 
          <div class="elearning-wp-biz-course--list"> 
          <h4 class="mt-4 mb-45 text-center has-alert-color">Module I Topics:</h4> 

            <ul class="text-center">
              <li>Goals</li>
              <li>Failure</li>
              <li>Career Indecision</li>
              <li>Work Relationships</li>
              <li>Imposter</li>
            </ul>
          </div>
          </div>
        </div> <!-- end of col -->

<!-- <div class="col is-vertically-aligned-top">
  <div class="pt-4 ps-2 pe-1 border-light-gray orange-background module-height"> 
      <h3 class="text-center">Module II: Career Dependency</h3> 
      <h4 class="mt-3 mb-4 text-center"><em>Establish personal autonomy</em></h4> 

      <table class="table ">
        <tbody>
          <tr>            
            <td>Class 1:</td><td>Career Attachment and Self-Identity</td>
          </tr>
          <tr>
             <td>Class 2:</td><td>Self-Confidence and Self-Sabotage</td>
          </tr>
          <tr> 
            <td>Class 3:</td><td>Autonomous Tools for Independent Life</td>
          </tr>
          <tr>
            <td>Class 4:</td><td>Authenticity and Vulnerability</td> 

          </tr>
        </tbody>
      </table> 
      <div class="elearning-wp-biz-course--list"> 
      <h4 class="mt-45 mb-4 text-center has-alert-color">Module II Topics:</h4>
        <ul class="text-center">
            <li>Self-Identity</li>
            <li>Boundaries</li>
            <li>Career Outcomes</li>
            <li>Accountability</li>
            <li>Self-Confidence</li>
          </ul>
        </div>
       </div>
    </div>

    <div class="col is-vertically-aligned-top ">
        <div class="pt-4 ps-2 pe-1 border-light-gray periwinkle-background module-height"> 
        <h3 class="text-center" >Module III: Career Unfulfillment</h3>



        <h4 class="mt-3 mb-4 text-center"><em>Create career purpose</em></h4>
            <table class="table ">
          <tbody>
            <tr>            
              <td>Class 1:</td><td>Authenticity, Leadership, Influence</td>
            </tr>
            <tr>
               <td>Class 2:</td><td>Where is Your Dream Job?</td>
            </tr>
            <tr> 
              <td>Class 3:</td><td>Happiness, Success and Failure</td>
            </tr>
            <tr>
              <td>Class 4:</td><td>Career Purpose and Your Future</td> 

            </tr>
          </tbody>
        </table> 

         
        <div class="elearning-wp-biz-course--list"> 
            <h4 class="mt-45 mb-4 text-center has-alert-color">Module III Topics:</h4>

              <ul class="text-center">
                  <li>Happiness</li>
                  <li>Fulfillment</li>
                  <li>Success</li>
                  <li>Self-Development</li>
                  <li>Legacy</li>
                </ul>
             
            </div>
          </div>
         </div>-->
       
 <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>
       
      </div><!-- end of modules -->
    </div>
  </div>