<?php
/**
 * Business Info Widget
 *
 * Display the business information and logo
 *
 * @package workroom1128
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Business Info Widget Class
 */
class Widget_Business_Info_Template extends WP_Widget {
	/**
	 * Widget Constructor
	 *
	 * @uses WP_Widget::__construct() Create Widget
	 * @return void
	 */
	public function __construct() {

		parent::__construct(
			'business_info',
			esc_html__( 'Business Info (workroom1128)', 'workroom1128' ),
			array(
				'classname'                   => 'business-info',
				'description'                 => esc_html__( 'Displays business information and logo.', 'workroom1128' ),
				'customize_selective_refresh' => true,
			)
		);

		// Delete Widget Cache on when saving or deleting a post.
		add_action( 'save_post', array( $this, 'delete_widget_cache' ) );
		add_action( 'deleted_post', array( $this, 'delete_widget_cache' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'business_info_assets' ) );
		add_action( 'switch_theme', array( $this, 'delete_widget_cache' ) );
		add_action( 'comment_post', array( $this, 'delete_widget_cache' ) );
		add_action( 'transition_comment_status', array( $this, 'delete_widget_cache' ) );
	}
	/**
	 * Enqueue media to allow uploads.
	 *
	 * @return void
	 */
	public function business_info_assets() {
		if ( function_exists( 'wp_enqueue_media' ) ) {
			wp_enqueue_media();
		}
		wp_enqueue_script( 'business-info-media-upload', get_template_directory_uri() . '/inc/widgets/business-info-media-upload.js', false, '1.0.0', true );
	}
	/**
	 * Reset widget cache object
	 *
	 * @return void
	 */
	public function delete_widget_cache() {

		wp_cache_delete( 'business-info', 'widget' );
	}
	/**
	 * Main Function to display the widget
	 *
	 * @uses this->render()
	 *
	 * @param array $args Parameters from widget area on front page.
	 * @param array $instance Settings for this widget instance.
	 * @return void
	 */
	public function widget( $args, $instance ) {
		$cache = array();

		// Get Widget Object Cache.
		if ( ! $this->is_preview() ) {
			$cache = wp_cache_get( 'business-info', 'widget' );
		}
		if ( ! is_array( $cache ) ) {
			$cache = array();
		}

		// Display Widget from Cache if exists.
		if ( isset( $cache [ $this->id ] ) ) {
			echo esc_html( $cache[ $this->id ] );
			return;
		}
		// Start Output Buffering.
		ob_start();
		// phpcs:disable.
		extract( $args ); // phpcs:ignoer WordPress.PHP.DontExtract.extract_extract.
		// phpcs:enable.
		$widget_title = apply_filters( 'widget_title', empty( $instance['widget_title'] ) ? '' : $instance['widget_title'], $instance, $this->id_base );

		$business_info_logo     = ! empty( $instance['business_info_logo'] ) ? $instance['business_info_logo'] : '';
		$business_info_email    = ! empty( $instance['business_info_email'] ) ? $instance['business_info_email'] : '';
		$business_info_location = ! empty( $instance['business_info_location'] ) ? $instance['business_info_location'] : '';
		$business_info_search   = ! empty( $instance['business_info_search'] ) ? $instance['business_info_search'] : '';
		$image_url              = ! empty( $instance['image_url'] ) ? $instance['image_url'] : '';
		// Output.
		echo esc_html( $args['before_widget'] );
		// Display Title.
		if ( ! empty( $widget_title ) ) {
			echo esc_html( $args['before_title'] ) . esc_html( $widget_title ) . esc_html( $args['after_title'] );
		}
		?>
			<div class="business-info">

					<?php if ( $image_url ) { ?>
						<img src="<?php echo esc_url( $image_url ); ?>" alt="" >
					<?php } ?>
				<ul>
					<li>
						<?php
						if ( $business_info_email ) {
							echo esc_html( $business_info_email ); }
						?>
					</li>
					<li>
						<?php
						if ( $business_info_location ) {
							echo esc_html( $business_info_location );
						}
						?>
					</li>
					<li>
						<?php
						if ( $business_info_search ) {
							echo esc_html( $business_info_search );
						}
						?>
					</li>
					<li>
						<?php
						echo esc_url( $image_url );
						?>
					</li>
				</ul>
			</div>
		<?php
		echo esc_html( $args['after_widget'] );

		// Set Cache.
		if ( ! $this->is_preview() ) {
			$cache[ $this->id ] = ob_get_flush();
			wp_cache_set( 'business-info', $cache, 'widget' );
		} else {
			ob_end_flush();
		}

	}



	/**
	 * Update Widget Settings
	 *
	 * @param array $new_instance Form Input for this widget instance.
	 * @param array $old_instance Old Settings for this widget instance.
	 * @return array $instance New widget settings
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                           = $old_instance;
		$instance['widget_title']           = sanitize_text_field( $new_instance['widget_title'] );
		$instance['business_info_logo']     = sanitize_text_field( $new_instance['business_info_logo'] );
		$instance['business_info_email']    = sanitize_email( $new_instance['business_info_email'] );
		$instance['business_info_location'] = sanitize_text_field( $new_instance['business_info_location'] );
		$instance['business_info_search']   = sanitize_text_field( $new_instance['business_info_search'] );
		$instance['image_url']              = $new_instance['image_url'];
		$this->delete_widget_cache();

			return $instance;
	}
	/**
	 * Sanitize Image.
	 *
	 * @param string $input Image url from above.
	 * @return string $output
	 */
	public function my_sanitize_image( $input ) {
		/* default output */
		$output = '';

		/* check file type */
		$filetype  = wp_check_filetype( $input );
		$mime_type = $filetype['type'];

		/* only mime type "image" allowed */
		if ( strpos( $mime_type, 'image' ) !== false ) {
			$output = $input;
		}
		return $output;
	}


	/**
	 * Display Widget Settings Form in the Backend
	 *
	 * @param array $instance Settings for this widget instance.
	 * @return void
	 */
	public function form( $instance ) {

		$instance = wp_parse_args(
			(array) $instance,
			array(
				'image_url' => '',
			),
		);

		// Get Widget Settings.
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'widget_title'           => '',
				'business_info_logo'     => '',
				'business_info_email'    => '',
				'business_info_location' => '',
				'business_info_search'   => '',
				'image_url'              => '',

			),
		);

		$image = ( ! empty( $instance['image_url'] ) ? $instance['image_url'] : '' );

		$filter       = isset( $instance['filter'] ) ? $instance['filter'] : 0;
		$widget_title = sanitize_text_field( $instance['widget_title'] );

		$business_info_logo     = sanitize_text_field( $instance['business_info_logo'] );
		$business_info_email    = sanitize_text_field( $instance['business_info_email'] );
		$business_info_location = sanitize_text_field( $instance['business_info_location'] );
		$business_info_search   = sanitize_text_field( $instance['business_info_search'] );
		$business_info_image    = wp_strip_all_tags(
			stripslashes(
				filter_var( $instance['image_url'], FILTER_VALIDATE_URL )
			),
		);
		$sanitized_image        = $this->my_sanitize_image( $business_info_image );

		?>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'widget_title' ) ); ?>"><?php esc_html_e( 'Title:', 'workroom1128' ); ?>
				<input class="widefat" id="<?php echo esc_html( $this->get_field_id( 'widget_title' ) ); ?>-title" name="<?php echo esc_html( $this->get_field_name( 'widget_title' ) ); ?>" type="text" value="<?php echo esc_attr( $widget_title ); ?>" >
			</label>
		</p>
		<p>
			<label for="<?php echo esc_html( $this->get_field_id( 'business_info_logo' ) ); ?>" >
			<?php esc_html_e( 'Enter business_info_logo' ); ?></label>
			<input class="widefat" rows="16" cols="20" id="<?php echo esc_html( $this->get_field_id( 'business_info_logo' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'business_info_logo' ) ); ?>"type="text" value="<?php echo esc_attr( $business_info_logo ); ?>" >
				</p>
				<p>
					<label for="<?php echo esc_html( $this->get_field_id( 'business_info_email' ) ); ?>"><?php esc_html_e( 'Enter business info email' ); ?></label>
					<input class="widefat"   id="<?php echo esc_html( $this->get_field_id( 'business_info_email' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'business_info_email' ) ); ?>" type="text" value="<?php echo esc_attr( $business_info_email ); ?>" >
				</p>
				<p>
					<label for="<?php echo esc_html( $this->get_field_id( 'business_info_location' ) ); ?>"><?php esc_html_e( 'Enter business info location' ); ?></label>
					<input class="widefat"   id="<?php echo esc_html( $this->get_field_id( 'business_info_location' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'business_info_location' ) ); ?>" type="text" value="<?php echo esc_html( $business_info_location ); ?>" >
				</p>
				<p>
					<label for="<?php echo esc_html( $this->get_field_id( 'business_info_search' ) ); ?>"><?php esc_html_e( 'Enter business info search' ); ?></label>
					<input class="widefat"   id="<?php echo esc_html( $this->get_field_id( 'business_info_search' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'business_info_search' ) ); ?>" type="text" value="<?php echo esc_attr( $business_info_search ); ?>" >
				</p>

			<!-- Image -->
			<h4><?php esc_attr_e( 'Choose your image', 'workroom1128' ); ?></h4>
			<p>
				<img class="biz-image-media" src="<?php echo esc_url( $sanitized_image ); ?>" style="display: block; width: 100%;" />
			</p>
			<p>
				<input type="text" class="biz-image-hidden-input widefat" name="<?php echo esc_html( $this->get_field_name( 'business_info_image' ) ); ?>" id="<?php echo esc_url( $this->get_field_id( 'image_url' ) ); ?>" value="<?php echo esc_url( $sanitized_image ); ?>" />
				<input type="button" class="biz-image-upload-button button button-primary" value="<?php esc_attr_e( 'Choose Image', 'workroom1128' ); ?>" >
				<input type="button" class="biz-image-delete-button button" value="<?php esc_attr_e( 'Remove Image', 'workroom1128' ); ?>">
			</p>
			<!-- check and see if this works below. -->
			<p>
				<label for="<?php echo esc_html( $this->get_field_id( 'business_info_image' ) ); ?>"><?php esc_html_e( 'Enter business info image' ); ?></label>
				<img class="<?php echo esc_html( $this->get_field_id( 'business_info_image' ) ); ?>-img" src="<?php echo esc_url( $business_info_image ); ?>" style="margin:0;padding:0;max-width:100%;display:block"/>
				<input class="widefat" id="<?php echo esc_html( $this->get_field_id( 'business_info_image' ) ); ?>" name="<?php echo esc_html( $this->get_field_name( 'business_info_image' ) ); ?>" type="text" value="<?php echo esc_url( $business_info_image ); ?>" >
					<input type="button" id="<?php echo esc_html( $this->get_field_id( 'business_info_image' ) ); ?>-btn" class="button button-primary js_custom_upload_media" value="Upload Image" style="margin-top:5px;" />
			</p>


		<?php
	}

} // end of class  registered in widget-areas.php
