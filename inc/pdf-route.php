<?php
/**
 * [workroom1128RegisterPDF description]
 * @param  [type]   [description]
 * @return [type]       [description]
 */
add_action('rest_api_init', 'workroom1128RegisterPDF');
/**
 * [workroom1128RegisterPDF description]
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

function workroom1128RegisterPDF()
{
    register_rest_route(
        'coaching/v1',
        'lesson_pdf',
        array(
        'methods' => WP_REST_SERVER::READABLE,
        'callback' => 'workroom1128PdfResults',
        'permission_callback' => '__return_true'
        ) 
    );
   
    register_rest_route(
        'coaching/v1',      
        'lesson_pdf/(?P<id>\d+)', 
       array(
            'methods'             => \WP_REST_Server::READABLE,
            'callback'            => 'workroom1128PdfResultsID',
            'permission_callback' => '__return_true' 
       )           
    );
}
 
/**
 * [workroom1128RegisterPDF description]
 * WP will automatically convert JSON data in PHP
 *
 * @param [type] $data [description]
 * // $data['id'] [description] will be used on url
 * http://localhost/deliberatedoing/wp-json/coaching/v1/lesson?id=522
 *                      
 *
 * @return [type] [description]
 */
function workroom1128PdfResultsID($data) {
    $pdfQuery = new WP_Query(
        array(
        'post_type' => 'lesson_pdf',        
        'p' => $data['id'], 
        )
      );
      
      
      $results = array(
        'pdf' => array(),
        
        );
              // Initialize the array that will receive the posts' data. 
              while ($pdfQuery->have_posts()) {
                $pdfQuery->the_post();
               
                $file = get_field('pdf_file',get_the_ID() );
      
                if (get_post_type() == 'lesson_pdf') {
                  array_push(
                      $results['pdf'],
                      array(                
                      'id' => get_the_ID(),
                      'title' => get_the_title(),
                      'permalink' => get_the_permalink(get_the_ID()),
                      'pdf_file' => $file,
                      'pdf_url' => $file['url'],                
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
function workroom1128PdfResults($request)
{
    $pdfQuery = new WP_Query(
        array(
        'post_type' => 'lesson_pdf',
        'posts_per_page' => -1,  
        )
    );
    
    $pdfResults = array(
      'pdf' => array(),
      
      );

    while ($pdfQuery->have_posts()) {
        $pdfQuery->the_post();
         
        $file = get_field('pdf_file',get_the_ID());
        array_push(
          $pdfResults['pdf'],
          array(                
          'id' => get_the_ID(),
          'title' => get_the_title(),
          'permalink' => get_the_permalink(get_the_ID()),
          'pdf_file' => $file,
          'pdf_url' => $file['url']                     
          )
      );
     
     } // end of while loop

    wp_reset_postdata();

    return $pdfResults;
    //return rest_ensure_response( $results );     
}
