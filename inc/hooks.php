<?php
/*
* Custom Hooks
*
* @package workroom1128
*/

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (! function_exists('workroom1128_site_info')) {
/**
 * Add site info hook to WP hook library.
 */
	function workroom1128_site_info()
	{
		do_action('workroom1128_site_info');
	}
}

add_action('workroom1128_site_info', 'workroom1128_add_site_info');
if (! function_exists('workroom1128_add_site_info')) {
/**
 * Add site info content.
 *  2019 - 2022 Deliberate Doing, LLC. All Rights Reserved
 */
	function workroom1128_add_site_info()
	{
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url(__('https://wordpress.org/', 'workroom1128')),
			sprintf(
			/* translators: WordPress */
				esc_html__('Proudly powered by %s', 'workroom1128'),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
			/* translators: 1: Theme name, 2: Theme author */
				esc_html__('Theme: %1$s by %2$s.', 'workroom1128'),
				$the_theme->get('Name'),
				'<a href="' . esc_url(__('https://workroom1128.com', 'workroom1128')) . '">workroom1128.com</a>'
			),
			sprintf( // WPCS: XSS ok.
			/* translators: Theme version */
				esc_html__('Version: %1$s', 'workroom1128'),
				$the_theme->get('Version')
			)
		);

		// Check if customizer site info has value.
		if (get_theme_mod('workroom1128_site_info_override')) {
			$site_info = get_theme_mod('workroom1128_site_info_override');
		}

		echo apply_filters('workroom1128_site_info_content', $site_info);
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

if (! function_exists('workroom1128_site_info')) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function workroom1128_site_info()
	{
		do_action('workroom1128_site_info');
	}
}

if (! function_exists('workroom1128_add_site_info')) {
	/**
	 * Add site info content.
	 */
	function workroom1128_add_site_info()
	{
		$the_theme = wp_get_theme();
		$currentYear = date("Y");
		
		$startyear = workroom1128_get_option('site_options_start_year');
		$sitename = get_bloginfo('name');
	   // $themeURI = esc_html__($the_theme->get( 'AuthorURI' ));
		$site_info = sprintf(
			'<div class="d-flex justify-content-between"><div class="flex-grow-1">
			<p><span>&copy;&nbsp;%1$s&#8211;%2$s</span><span class="sep"> | </span>%3$s</p></div><div class="">
			<a href="%4$s">Privacy Policy</a></div></div>',
			//esc_html(__( '2022', 'workroom1128' )),
			sprintf(
				esc_html(__($startyear, 'workroom1128')),
			),
			sprintf(
				esc_html(__($currentYear, 'workroom1128')),
			),
			sprintf(
				esc_html__($sitename, 'workroom1128'),
				// $the_theme->get( 'Name' ),
			),
			sprintf(
				esc_html__('%s', 'workroom1128'),
				get_permalink(get_page_by_title('Privacy Policy')),
			),
			// sprintf( // WPCS: XSS ok.
			//     /* translators: 1: Theme name, 2: Theme author */
			//     esc_html__('By: %1$s %2$s', 'workroom1128'),
			//     '<a href="' . esc_url(__($the_theme->get('AuthorURI'))) . '">',
			//    ,
			// ),
			/*sprintf(
			esc_html__('Theme: %s', 'workroom1128'),
			$the_theme->get('Name'),
			),
			sprintf( // WPCS: XSS ok.
			/* translators: 1: Theme name, 2: Theme author */
			/* esc_html__('By: %1$s %2$s', 'workroom1128'),
			'<a href="' . esc_url(__($the_theme->get('AuthorURI'))) . '">',
			esc_html__($the_theme->get('Author')),
			),*/ /*
			sprintf( // WPCS: XSS ok.
			/* translators: Theme version */
			/* esc_html__( 'Version: %1$s', 'workroom1128' ),
			$the_theme->get( 'Version' )
			)*/
		);

		// Check if customizer site info has value.
		if (get_theme_mod('workroom1128_site_info_override')) {
			$site_info = get_theme_mod('workroom1128_site_info_override');
		}

		echo apply_filters('workroom1128_site_info_content', $site_info);
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
	//function workroom1128_add_site_info() {
	/*  $the_theme = wp_get_theme();


	  //  echo esc_html( $the_theme->get( 'AuthorURI' ) );
		$startyear = workroom1128_get_option( 'site_options_start_year');
	// echo '&copy;&nbsp;' . $startyear .'-' . date("Y");

		$site_info = sprintf(
			 '<p><span>&copy;&nbsp;%1$s&#8211;%2$s</span><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( site_url('/') , 'workroom1128' ) ),
			//'<span class="sep"> | </span>%3$s(%4$s)</p>',

			sprintf(
				/* translators: WordPress */
			/*  esc_html__( 'Proudly powered by %s', 'workroom1128' ),
				'1128 Workroom, LLC'
			),
		sprintf( // WPCS: XSS ok.
				/* translators: 1: Theme name, 2: Theme author */
				/*esc_html__( 'Theme: %1$s by %2$s.', 'workroom1128' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'https://workroom1128.com', 'workroom1128' ) ) . '">workroom1128.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators: Theme version */
			/*  esc_html__( 'Version: %1$s', 'workroom1128' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'workroom1128_site_info_content', $site_info );
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped*/
   // }
//}

/* customize LOGIN screen */
// modify header link to be site URL
//
if (! function_exists('workroom1128_headerurl')) {

	function workroom1128_headerurl()
	{
	 
		 return esc_url(site_url('/'));
	}
}
// modify login title to be name of site
if (! function_exists('workroom1128_login_title')) {

	function workroom1128_login_title()
	{
		return get_option('blogname');
	}
}
// modify styles using admin.css
if (! function_exists('workroom1128_loginCSS')) {

	function workroom1128_loginCSS()
	{
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get('Version');

		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/dist/css/admin.css');
		if (is_admin()) {
			wp_enqueue_style(
				'_workroom1128-stylesheet',
				get_template_directory_uri() . '/dist/css/admin.css',
				array(),
				$css_version
			);
		}
	}
}
 
//   Display avatar in menu
//   add_filter( 'wp_nav_menu_objects', 'my_dynamic_menu_items', 10 );
function my_dynamic_menu_items($menu_items)
{
	foreach ($menu_items as $menu_item) {
		if (strpos($menu_item->title, '#profile_name#') !== false) {
			$menu_item->title =  str_replace(
				"#profile_name#",
				wp_get_current_user()->user_login .' '. get_avatar(wp_get_current_user()->user_email, 50),
				$menu_item->title
			);
		}
	}
	return $menu_items;
}


//add_filter('wp_nav_menu_items', 'login_logout_menu_items', 10, 2);
function login_logout_menu_items($items, $args)
{

	if (is_user_logged_in() && $args->theme_location == 'secondary') {
		$items .= '<li class="d-flex align-items-center me-3"><a href="'.
		wp_logout_url() . '" class="btn  btn--login btn--with-photo" ><span class="site-header__avatar">'
		.get_avatar(get_current_user_id(), 60) .
		'</span><span class="btn__text">Log Out</span></a>';
	} else {
		$items .= '<li class="d-flex align-items-center me-3">
		<a href="'. wp_login_url(). '" class="btn btn--login" >
		<span class="btn__text">Login</span></a></li>';
		//$items .= '<li><a href="'. wp_logout_url( $logout_redirect ) .
		'" title="'. esc_attr($text) .
		'" class="wpex-logout"><span class="link-inner">' .
		 strip_tags( $text ) .'</span></a>';
		 //<a href="<?php //echo wp_login_url(); "
		 // class="btn btn--small btn--orange float-left push-right">Login</a></li>';'
	}
	return $items;
}
 
 
 
  
//add_filter( 'posts_orderby', 'workroom1128_sort_questions_in_topic', 99, 2 );
function workroom1128_sort_questions_in_topic($orderby, $query)
{
	if (! workroom1128_is_topic_tax_query($query)) {
		return;
	}
	global $wpdb;
	return "{$wpdb->term_relationships}.term_order ASC";
}
 

if (! function_exists('workroom1128_entry_meta_categories')) :
	function workroom1128_entry_meta_categories()
	{
	 
		$category = get_the_category();
		echo "Categories: ";
		if ($category) {
			echo  the_category(' | ');
		}
	}
endif;

  
/**
 * Redirect non-admins to the homepage after logging into the site.
 *
 * @since   1.0
 */

function workroom1128_login_redirect($redirect_to, $request, $user)
{
	return (is_array($user->roles) && in_array('administrator', $user->roles)) ? admin_url() : site_url();
}
  
//add_filter( 'login_redirect', 'workroom1128_login_redirect', 99, 3 );
	
/**
 * WordPress function for redirecting users on login based on user role
 */
   
function user_login_redirect($url, $request, $user)
{
	if ($user && is_object($user) && is_a($user, 'WP_User')) {
		if ($user->has_cap('manage_options')) {
			$url = admin_url();
		} elseif ($user->has_cap('student')) {
			$url = home_url('/elearning-dashboard/');
		} else {
			$url = home_url();
		}
	}
	return $url;
}
add_filter('login_redirect', 'user_login_redirect', 10, 3);

if( !function_exists('workroom1128_restrict_access_without_login') ):
 
  add_action( 'template_redirect', 'workroom1128_restrict_access_without_login' );
 
	function workroom1128_restrict_access_without_login(){
		// Get global post
		global $post;
 
		/* get current page or post ID */
		$page_id = get_queried_object_id();
 
		/* add lists of page or post IDs for restriction 
		development-courses, elearning-dashboard, */
		 $behind_login_pages2 = [ 627, 656, 629, 401 ];
		 if ( ( !empty($behind_login_pages2 ) && in_array( $page_id, $behind_login_pages2 ) ) && !is_user_logged_in() ) {
			wp_redirect( esc_url( home_url() ) );
			 exit();
		}
		$behind_login_pages = [ 7062, 5369 ]; // live site
		if ( ( !empty($behind_login_pages ) && in_array( $page_id, $behind_login_pages ) ) && !is_user_logged_in() ) {
			 wp_redirect( esc_url( home_url() ) );
			  exit();
		 }
		if (is_user_logged_in()) {
		//     if (!current_user_can('student') OR (!current_user_can('manage_options') )) {
		//         wp_redirect( esc_url( home_url() ) );
		//         exit();
		//     }
		 } 
	}
 
endif;
/**
* Function to decide if the user can view the content
* @return boolean
*/
function workroom1128_can_user_view() {
  
	$ret = false;
	
	if( is_user_logged_in() ) {
		$ret = true;
	}
	
	return apply_filters( 'workroom1128_can_user_view', $ret );
  }
/**
* Shortcode
* @param array $atts
* @param string $content
* @return boolean
*/
function workroom1128_content( $atts, $content = "" ) {
  
	if( $content && workroom1128_can_user_view() ) {
	  return $content;
	}
	
	$message = '<div class="message">';
	  $message .= __( 'You need to register to view the rest of the content.', 'workroom1128' );
	$message .='</div>';
	
	return apply_filters( 'workroom1128_content', $message );
	
  }
  add_shortcode( 'hide_content', 'workroom1128_content' );
 


//add_shortcode( 'extensible_plugin_demo', 'wpshout_output_extensible_plugin' );
 
function wpshout_output_extensible_plugin() {
	ob_start();

	// Action hook before any output!
	do_action( 'wpshout_before_get_qod_text' );

	$qod_data = wpshout_get_qod_data();
	if( is_array( $qod_data ) ) {
		echo '<blockquote><small>';

		$qod_text = $qod_data[ 'text' ];
		$qod_author = $qod_data[ 'author' ];

		// Filter content!
		$qod_text = apply_filters( 'wpshout_qod_text', $qod_text );
		$qod_author = apply_filters( 'wpshout_qod_author', $qod_author );
		
		echo $qod_text;
		echo '<br><br>';
		echo $qod_author;
		echo '<small></blockquote>';
	}

	// Action hook after rest of output!
	do_action( 'wpshout_after_get_qod_text' );

	return ob_get_clean();
}

//add_filter( 'wpshout_qod_text', 'wpshout_filter_qod_text' );
// Filter: Replace specific words in quote text with Carl Saganspeak
function wpshout_filter_qod_text( $text ) {
	$text = str_replace( 
		array( ' I ', ' me ', ' the ', ' is ', ' am ', ' are ' ),
		array( ' I, a descendent of savannah-dwelling hominids that somehow evolved an astounding capacity for self-reflection, ', ' the cooled-off stellar matter I call "me" ', ' the trillions of atoms that make up the ', ' seems, without the mind-boggling perspective of quantum physics, to be ', ' cannot, due to the Heisenberg Uncertainty Principle, be determined not to be ', ' appear to our best scientific instruments to be ' ),
		$text
	);
	return $text;
}

// Filter: Strikethrough old author and add "Carl Sagan" after
////add_filter( 'wpshout_qod_author', 'wpshout_filter_qod_author' );
function wpshout_filter_qod_author( $text ) {
	$text = '<strike>' . $text . '</strike> Carl Sagan';
	return $text;
}

// Action: Add title before quote
//add_action( 'wpshout_before_get_qod_text', 'wpshout_set_up_quote' );
function wpshout_set_up_quote() {
	echo '<h4>Carl Sagan Quote of the Day for ' . date( 'F j, Y') . ':</h4>';
}

// Action: add "mind blown" image
//add_action( 'wpshout_after_get_qod_text', 'wpshout_add_carl_boom' );
function wpshout_add_carl_boom() {

	echo '<div><img class="aligncenter" src="' . plugin_dir_url( __FILE__ ) . 'carl_sagan_mind_blown.gif"></div>';
}


/* customize STUDENT login process */
// Redirect student accounts out of admin and onto homepage
 
 
	 


// redirect to dashboard page
// if (! function_exists('workroom1128_redirectStudents')) {

//     function workroom1128_redirectStudents()
//     {

//         $currentUser = wp_get_current_user();

//         $count = count($currentUser->roles);

//         if (count($currentUser->roles) == 1 and $currentUser->roles[0] == 'student') {
//             wp_redirect(home_url('/elearning-dashboard'));

//             exit;
//         }
//     }
// }
// do NOT show admin bar for STUDENT
if (! function_exists('workroom1128_noStudentsAdminBar')) {

	function workroom1128_noStudentsAdminBar()
	{
	 
		$currentUser = wp_get_current_user();
 
		 $count = count($currentUser->roles);

		if (count($currentUser->roles) == 1 and $currentUser->roles[0] == 'student') {
			show_admin_bar(false);
		}
	}
   // add_action('wp_loaded', 'workroom1128_noStudentsAdminBar');
}

// Example 2: Restrict access to specific pages
//add_action( 'template_redirect', 'workroom1128_custom_redirects' );
//if ( ! function_exists( 'workroom1128_custom_redirects' ) ) {
//  function workroom1128_custom_redirects() {

			// if ( is_front_page() ) {
	   //      wp_redirect( home_url( '/dashboard/' ) );
	   //      die;
	   //  }
	 
	   //  if ( is_page('contact') ) {
	   //      wp_redirect( home_url( '/new-contact/' ) );
	   //      die;
	   //  }

		// Get global post
	//  global $post;

		// Prevent access to page with ID of 2 and all children of this page
		//$page_id = 170;
		// if ( is_page() && ( $post->post_parent == $page_id || is_page( $page_id ) ) ) {
//  if ( is_page('elearning-dashboard') ||
// is_post_type_archive(array('course','module','class', 'student'))
// || is_singular( array('course','module','class', 'student'))   ) {
				// Set redirect to true by default
		 // $redirect = true;

			// If logged in do not redirect
			// You can/should place additional checks here based on user roles or user meta
			//if ( is_user_logged_in() ) {
		//      $redirect = false;
		//  }

			// Redirect people without access to login page
		//  if ( $redirect ) {
				//wp_redirect( esc_url( wp_login_url() ), 307 );
				//exit; //die;
		//  }


		//}

	//}
//}
if ( !function_exists('tf_after_login_redirection_by_user_roles') ):
 
   // add_filter( 'login_redirect', 'tf_after_login_redirection_by_user_roles', 10, 3 );    
	function tf_after_login_redirection_by_user_roles( $redirect_to, $request, $user ) {
		 
		global $user;
 
		if ( isset( $user->roles ) && is_array( $user->roles ) ) :
 
			if ( in_array( 'student', $user->roles ) ) :
 
				$page_id = 627;
				 
				return get_permalink($page_id);
 
			elseif ( in_array( 'administrator', $user->roles ) ) :
								   
				return admin_url();
 
			elseif ( in_array( 'super-user', $user->roles ) ) :
 
				return admin_url();
 
			else:
				return home_url();
			endif;
			 
		else:
			return $redirect_to;
		endif;
	}
endif;
