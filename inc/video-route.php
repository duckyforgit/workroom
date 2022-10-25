<?php
/**
 * [workroom1128RegisterLesson description]
 * @param  [type]   [description]
 * @return [type]       [description]
 */
add_action('rest_api_init', 'workroom1128RegisterVideo');
/**
 * [workroom1128RegisterVideo description]
 * Route does not have to be a custom post type name. It is custom choice.
 * namespace: wp-json/coaching/v1/
 * route: search
 *
 * @args:  Either an array of options for the endpoint,
 * or an array of arrays for multiple methods.
 * method: CRUD is Read here Use WP_REST_SERVER instead of Get to avoid any errors
 * Namespace must not start or end with a slash
 * This does NOT substitute for search.js module.
 * This adds custom post types to search in a custom rest route.
 * @return [type] [description]
 */

function workroom1128RegisterVideo()
{
    register_rest_route(
        'coaching/v1',
        'lesson_video',
        array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'workroom1128VideoResults',
        'permission_callback' => '__return_true'
        ) 
    );
   
    register_rest_route(
        'coaching/v1',      
        'lesson_video/(?P<id>\d+)', 
       array(
            'methods'             => \WP_REST_Server::READABLE,
            'callback'            => 'workroom1128VideoResultsID',
            'permission_callback' => '__return_true' 
       )           
    );
}
function get_project( $params ) {
    $project = get_post( $params['id'] );
    $project->title = get_the_title( $project->ID );
    return $project;
  }
/**
 * [workroom1128RegisterLesson description]
 * WP will automatically convert JSON data in PHP
 *
 * @param [type] $data [description]
 *  // $data['id'] [description] will be used on url
 * http://localhost/deliberatedoing/wp-json/coaching/v1/lesson?id=meowsalot
 *                      
 *
 * @return [type] [description]
 */
function workroom1128VideoResultsID($data) {
   
 //print_r($data['id']);
$videoQuery = new WP_Query(
  array(
  'post_type' => 'lesson_video',
  //'posts_per_page' => 1, 
  'p' => $data['id'], 
  )
);


$results = array(
  'video' => array(),
  
  );
        // Initialize the array that will receive the posts' data. 
        while ($videoQuery->have_posts()) {
          $videoQuery->the_post();
         
          $file = get_field('video_file',get_the_ID() );

          if (get_post_type() == 'lesson_video') {
            array_push(
                $results['video'],
                array(                
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'permalink' => get_the_permalink(get_the_ID()),
                'video_file' => $file,
                'video_url' => $file['url'],                
                )
            );
          }

           
         
    
        // if ( ! $post = get_post( $data['id'] ) ) {
        //   return new WP_Error( 'invalid_id', 'Please define a valid post ID.' );
        // }
    
  


            // $title = $post->post_title;
            // $order_in_series = get_field('class_order_in_series');
            // $class_video = get_field('class_video');
            // $class_pdf_resource = get_field('class_pdf_resource');
            // get slides
          // if( have_rows('class_slides') ):  
          //   $class_slides = '<ul class="slides">';
          //    while( have_rows('slides') ): the_row(); 
          //       $image = get_sub_field('slide_image');
                
          //       $class_slides .= '<li>';
          //       $class_slides .=  wp_get_attachment_image( $image, 'full' ); 
          //       $class_slides .=     '<p>';
          //       $class_slides .=  the_sub_field('caption');
          //       $class_slides .= '</p></li>';
          //    endwhile; 
          //   $class_slides .= '</ul>';
          // endif; 
          // $items[] = array(
          //   'id' =>  $id,
          // );
          // $response['title'] = $title;      
          // $response['order_in_series'] = $order_in_series;
          // $response['class_video'] = $class_video;
          // $response['class_pdf_resource'] = $class_pdf_resource;
          // $response['class_slides'] = $class_slides;
        }
        //print_r($results);
        wp_reset_postdata();
    
       return $results;           
   
}
function workroom1128VideoResults($request)
{

    // $args = array(
    //   'numberposts' => -1,
    //   'post_type'   => 'lesson_video'
    // );
    // $projects =  get_posts( $args );
    //$response = array();
   // foreach( $projects as &$p ) {
    //  foreach( $projects as $post ) {
       // setup_postdata( $post ); 
        // $videoID = $p->ID;
        // $videoTitle = get_the_title( $p->ID );
        // array_push( $response,
        //   $response['id']  = $p->ID,
        //   $response['title'] = get_the_title( $p->ID ),
        // );
     //   $videoTitle = get_the_title();
      //  $videoID = get_the_ID();
      //  $response['id'] =  get_the_ID();
      //  $response['title'] = $videoTitle; 
    //  }
    //  wp_reset_postdata();
    //  return $response;
    $videoQuery = new WP_Query(
        array(
        'post_type' => 'lesson_video',
        'posts_per_page' => -1,  
        )
    );
    
    $videoResults = array(
      'videos' => array(),
      
      );

    while ($videoQuery->have_posts()) {
        $videoQuery->the_post();
         
        $file = get_field('video_file',get_the_ID());
        array_push(
          $videoResults['videos'],
          array(                
          'id' => get_the_ID(),
          'title' => get_the_title(),
          'permalink' => get_the_permalink(get_the_ID()),
          'video_file' => $file                 
          )
      );
        
      
     
     } // end of while loop

    wp_reset_postdata();

    return $videoResults;
    //return rest_ensure_response( $results );     
}
