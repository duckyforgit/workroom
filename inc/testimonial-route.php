<?php
/**
 * [workroom1128RegisterTestimonial description]
 *
 * Route does not have to be a custom post type name. It is custom choice.
 * namespace: wp-json/coaching/v1/
 * route: search
 *
 * @args:  Either an array of options for the endpoint,
 * or an array of arrays for multiple methods.
 * method: CRUD is Read here Use WP_REST_SERVER instead of Get to avoid any errors
 * Namespace must not start or end with a slash
 *  //http://localhost:3000/deliberatedoing2020/?rest_route=/coaching/v1/testimonial
 * @param  [custom post type]   testimonial
 * @return [text]               'clientFirstName'
 *         [text]               'clientTestimonial'
 *
 * returns first 2 client testimonials
 */
 
add_action('rest_api_init', 'workroom1128RegisterTestimonial');
function workroom1128RegisterTestimonial()
{
    register_rest_route(
        'coaching/v1',
        'testimonials',
        array(
        'methods'               => WP_REST_SERVER::READABLE,
        'callback'              => 'loadMoreTestimonials',
        'permission_callback'   => '__return_true'
        )
    );
}
function loadMoreTestimonials($data)
{
 
    $paged =  $data->get_param('current_page');
     
    $paged++;
    $args = array(
      'post_type'       => 'testimonial',
      'post_status'     => 'publish',
      'posts_per_page'  =>  2,
      'meta_key'        => 'testimonial_order',
      'orderby'         => 'meta_value_num',
      'order'           => 'ASC',
      'paged'           =>  $paged
       
    );
    $mainQuery = new WP_Query($args);
                            
    $results = array(
      'testimonials' => array(),
      'current_page' => array(),
      'max_page'     => array()
    );
   
   
    $results['current_page'] = $paged;
    $results['max_page'] = $mainQuery->max_num_pages;
   
    while ($mainQuery->have_posts()) {
        $mainQuery->the_post();
        /* make it 50 words or less
        then count the actual words in the full testimonial
        if actual words are greater than 50 make read more button visible
        $message = $wordCountFull . " " . $excerptCount;
        echo "<script type='text/javascript'>alert('$message');</script>";
        $addReadMore = true; */
  
        $excerpt = wp_trim_words(get_field('client_testimonial'), 49);
        $excerptCount = str_word_count($excerpt);
        $wordCountFull = str_word_count(strip_tags(get_field('client_testimonial')));
        $testimonial = '<p>' . $excerpt;
        if ($wordCountFull > $excerptCount) {
            $addReadMore = true;
            $testimonial_link = get_field('testimonial_link');
            if ($testimonial_link) :
                $link_url = $testimonial_link['url'];
                $link_title = $testimonial_link['title'];
                $link_target = $testimonial_link['target'] ? $testimonial_link['target'] : '_self';
               
                $testimonial_link = get_field('testimonial_link');
                $testimonial .= '<a class="readmore" href="'.$link_url.'" target="'.esc_attr($link_target) .'" >
                [Read More]</a>';
            endif;
            $testimonial .= '</p>';
        } else {
            $addReadMore = false;
            $testimonial .= '</p>';
        }
         array_push($results['testimonials'], array(
          'clientFirstName'   => get_field('client_first_name'),
          'clientTestimonial' => $testimonial ));
                      
      
      /* return new WP_REST_Response($results, 200);  */
    }
       return $results;
}
