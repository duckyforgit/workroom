<?php 
function workroom1128_change_posttypes_per_page( $query ) {
  
    if ( ! is_admin() && $query->is_main_query() ) {
         
    if ( is_post_type_archive('testimonial') ) {
        $query->set( 'posts_per_page', -1 );         
        $query->set('meta_key', 'testimonial_order');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        return $query;
    } 
   
   // $post_type = $query->query['post_type'];

    if (  'testimonial' == get_post_type() ) {

      $query->set('meta_key', 'testimonial_order');
      $query->set('orderby', 'meta_value_num');
      $query->set('orderby', 'ASC');

      if ( $query->is_front_page() && ! is_archive() ) {

        $page = $query->query_vars['paged'];
      
        $nums = 9;

        $diff = get_option( 'posts_per_page' ) - $nums; 
        /* $offs = ( $query->query_vars['paged'] - 1 ) * $nums + $diff;    offset to correct for diference */
        $offs = ( $page - 1 ) * $nums + $diff;  /* offset to correct for diference */
        
        $query->set( 'posts_per_page', $nums );

        $query->set( 'offset', $offs ); 
      }
      
      if ( is_archive() ) {
        $query->set( 'posts_per_page', -1 );
        $query->set('meta_key', 'testimonial_order');
        $query->set('orderby', 'meta_value_num');
        $query->set('orderby', 'ASC');
      } 
    }  
  } 
    return $query;

};
add_action( 'pre_get_posts', 'workroom1128_change_posttypes_per_page', 1 ); 
  

function access_to_users($result, \WP_REST_Server $srv, \WP_REST_Request $request) {
  // global $current_user;  echo "current user:";  print_r($current_user);
  // if ( ( current_user_can( 'edit_posts', $current_user->id )) ) { 
  //   echo "can edit";
  // }
//  $method = $request->get_method();
  //  $path   = $request->get_route();
   // print_r(wp_get_current_user());
  // if (! is_user_logged_in() && true !== stripos( $_SERVER['REQUEST_URI'], 'wp/v2/users' )  ) {
    if ( ! ( current_user_can( 'edit_posts' ) || false !== stripos( $_SERVER['REQUEST_URI'], 'wp/v2/pages' ) ) ) {
    return new \WP_Error('rest_user_cannot_view', 'Sorry, you are not allowed to use this API.', ['status' => rest_authorization_required_code()]);
   }
  //  if (('GET' === $method || 'HEAD' === $method) && preg_match('!^/wp/v2/users(?:$|/)!', $path)) {
     // if (('GET' === $method || 'HEAD' === $method) && preg_match('!^/wp/v2/users(?:$|/)!', $path)) {
    //  echo "current user:" .$current_user;
      
      //  if (! ( current_user_can( 'edit_posts' )) ) {
            // return new \WP_Error('rest_user_cannot_view', 'Sorry, you are not allowed to use this API.', ['status' => rest_authorization_required_code()]);
     //   }
    // }
    return $request;
}

//add_filter( 'rest_pre_dispatch', 'access_to_users', 10, 3);
