<?php
/**
 * Declaring widgets
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Add filter to the parameters passed to a widget's display callback.
 * The filter is evaluated on both the front and the back end!
 *
 * @link https://developer.wordpress.org/reference/hooks/dynamic_sidebar_params/
 */
add_filter( 'dynamic_sidebar_params', 'workroom1128_widget_classes' );

if ( ! function_exists( 'workroom1128_widget_classes' ) ) {

	/**
	 * Count number of visible widgets in a sidebar and add classes to widgets accordingly,
	 * so widgets can be displayed one, two, three or four per row.
	 *
	 * @global array $sidebars_widgets
	 *
	 * @param array $params {
	 *     Parameters passed to a widget’s display callback.
	 *
	 *     @type array $args  {
	 *         An array of widget display arguments.
	 *
	 *         @type string $name          Name of the sidebar the widget is assigned to.
	 *         @type string $id            ID of the sidebar the widget is assigned to.
	 *         @type string $description   The sidebar description.
	 *         @type string $class         CSS class applied to the sidebar container.
	 *         @type string $before_widget HTML markup to prepend to each widget in the sidebar.
	 *         @type string $after_widget  HTML markup to append to each widget in the sidebar.
	 *         @type string $before_title  HTML markup to prepend to the widget title when displayed.
	 *         @type string $after_title   HTML markup to append to the widget title when displayed.
	 *         @type string $widget_id     ID of the widget.
	 *         @type string $widget_name   Name of the widget.
	 *     }
	 *     @type array $widget_args {
	 *         An array of multi-widget arguments.
	 *
	 *         @type int $number Number increment used for multiples of the same widget.
	 *     }
	 * }
	 * @return array $params
	 */
	function workroom1128_widget_classes( $params ) {

		global $sidebars_widgets;

		/*
		 * When the corresponding filter is evaluated on the front end
		 * this takes into account that there might have been made other changes.
		 */
		$sidebars_widgets_count = apply_filters( 'sidebars_widgets', $sidebars_widgets );

		// Only apply changes if sidebar ID is set and the widget's classes depend on the number of widgets in the sidebar.
		if ( isset( $params[0]['id'] ) && strpos( $params[0]['before_widget'], 'dynamic-classes' ) ) {
			$sidebar_id   = $params[0]['id'];
			$widget_count = count( $sidebars_widgets_count[ $sidebar_id ] );

			$widget_classes = 'widget-count-' . $widget_count;
			if ( 0 === $widget_count % 4 || $widget_count > 6 ) {
				// Four widgets per row if there are exactly four or more than six widgets.
				$widget_classes .= ' col-md-3';
			} elseif ( 6 === $widget_count ) {
				// If exactly six widgets are published.
				$widget_classes .= ' col-md-2';
			} elseif ( $widget_count >= 3 ) {
				// Three widgets per row if there's three or more widgets.
				$widget_classes .= ' col-md-4';
			} elseif ( 2 === $widget_count ) {
				// If two widgets are published.
				$widget_classes .= ' col-md-6';
			} elseif ( 1 === $widget_count ) {
				// If just on widget is active.
				$widget_classes .= ' col-md-12';
			}

			// Replace the placeholder class 'dynamic-classes' with the classes stored in $widget_classes.
			$params[0]['before_widget'] = str_replace( 'dynamic-classes', $widget_classes, $params[0]['before_widget'] );
		}

		return $params;

	}
} // End of if function_exists( 'workroom1128_widget_classes' ).

add_action( 'widgets_init', 'workroom1128_widgets_init' );

if ( ! function_exists( 'workroom1128_widgets_init' ) ) {
	/**
	 * Initializes themes widgets.
	 */
	function workroom1128_widgets_init() {
		register_sidebar(
			array(
				'name'          => __( 'Right Sidebar', 'workroom1128' ),
				'id'            => 'right-sidebar',
				'description'   => __( 'Right sidebar widget area', 'workroom1128' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Left Sidebar', 'workroom1128' ),
				'id'            => 'left-sidebar',
				'description'   => __( 'Left sidebar widget area', 'workroom1128' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Hero Slider', 'workroom1128' ),
				'id'            => 'hero',
				'description'   => __( 'Hero slider area. Place two or more widgets here and they will slide!', 'workroom1128' ),
				'before_widget' => '<div class="carousel-item">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Hero Canvas', 'workroom1128' ),
				'id'            => 'herocanvas',
				'description'   => __( 'Full size canvas hero area for Bootstrap and other custom HTML markup', 'workroom1128' ),
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Top Full', 'workroom1128' ),
				'id'            => 'statichero',
				'description'   => __( 'Full top widget with dynamic grid', 'workroom1128' ),
				'before_widget' => '<div id="%1$s" class="static-hero-widget %2$s dynamic-classes">',
				'after_widget'  => '</div><!-- .static-hero-widget -->',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Footer Full', 'workroom1128' ),
				'id'            => 'footerfull',
				'description'   => __( 'Full sized footer widget with dynamic grid', 'workroom1128' ),
				'before_widget' => '<div id="%1$s" class="footer-widget %2$s dynamic-classes">',
				'after_widget'  => '</div><!-- .footer-widget -->',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Upcoming Events', 'workroom1128' ),
				'id'            => 'upcomingevents',
				'description'   => __( 'Event List widget for events with category of upcoming', 'workroom1128' ),
				'before_widget' => '<div id="%1$s" class="event-widget %2$s dynamic-classes">',
				'after_widget'  => '</div><!-- .event-widget -->',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer widgets left top', 'workroom1128' ),
				'id'            => 'footer-widgets-left-top',
				'description'   => __( 'Drag widgets to this footer container', 'workroom1128' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-header"><h5 class="widget-title">',
				'after_title'   => '</h5></div>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer widgets left bottom', 'workroom1128' ),
				'id'            => 'footer-widgets-left-bottom',
				'description'   => __( 'Drag widgets to this footer container', 'workroom1128' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-header"><h5 class="widget-title">',
				'after_title'   => '</h5></div>',
			)
		);

		register_sidebar(
			array(
				'name'          => __( 'Footer widgets center', 'workroom1128' ),
				'id'            => 'footer-widgets-center',
				'description'   => __( 'Drag widgets to this footer container', 'workroom1128' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-header"><h5 class="widget-title">',
				'after_title'   => '</h5></div>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer widgets right', 'workroom1128' ),
				'id'            => 'footer-widgets-right',
				'description'   => __( 'Drag widgets to this footer container', 'workroom1128' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<div class="widget-header"><h5 class="widget-title">',
				'after_title'   => '</h5></div>',
			)
		);

		register_sidebar(
			array(
				'name'          => esc_html__( 'Home Main Content Area', 'workroom1128' ),
				'id'            => 'widget-home',
				'description'   => __( 'Home Content', 'workroom1128' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h2 data-aos="fade-up" class="widget-title" ><span>',
				'after_title'   => '</span></h2><hr>',
			),
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'What I Do Widget', 'workroom1128' ),
				'id'            => 'about-widgets-what-i-do',
				'description'   => __( 'Drag widgets to this about container', 'workroom1128' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'About What You Learn', 'workroom1128' ),
				'id'            => 'about-widgets-what-you-learn',
				'description'   => __( 'Drag widgets to this about container', 'workroom1128' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);
		register_sidebar(
			array(
				'name'          => esc_html__( 'About Is This You', 'workroom1128' ),
				'id'            => 'about-widgets-is-this-you',
				'description'   => __( 'Drag widgets to this about container', 'workroom1128' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2>',
				'after_title'   => '</h2>',
			)
		);
		$workroom1128_inc_dir = get_template_directory() . '/inc';
		require_once $workroom1128_inc_dir . '/widgets/class-widget-recent-posts-template.php';  // Recent posts widget.
		require_once $workroom1128_inc_dir . '/widgets/class-widget-gallery.php';   // Custom widget.
		require_once $workroom1128_inc_dir . '/widgets/class-widget-tabbed-content-template.php';   // Custom widget.
		require_once $workroom1128_inc_dir . '/widgets/class-widget-business-info-template.php';   // Custom widget.
		register_widget( 'Recent_Posts_Sidebar_Widget' );
		register_widget( 'Widget_Gallery' );
		register_widget( 'Widget_Tabbed_Content_Template' );
	}
} // End of function_exists( 'workroom1128_widgets_init' ).
