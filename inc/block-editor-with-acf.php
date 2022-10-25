<?php
/**
 * Block editor (gutenberg) specific functionality
 *
 * @package workroom1128
 */

add_action( 'after_setup_theme', 'workroom1128_block_editor_setup' );

if ( ! function_exists( 'workroom1128_block_editor_setup' ) ) {

	/**
	 * Sets up our default theme support for the WordPress block editor.
	 */
	function workroom1128_block_editor_setup() {

		// Add support for the block editor stylesheet.
		add_theme_support( 'editor-styles' );

		// Add support for wide alignment.
		add_theme_support( 'align-wide' );
		add_theme_support( 'widgets-block-editor' );

		// Register our custom colors as options in the editor.
		$color_palette = workroom1128_generate_color_palette();
		if ( $color_palette ) {
			add_theme_support( 'editor-color-palette', $color_palette );
		}
	}
}

if ( ! function_exists( 'workroom1128_generate_color_palette' ) ) {
	/**
	 * Checks for our JSON file of color values. If exists, creates a color palette array.
	 *
	 * @return array|bool
	 */
	function workroom1128_generate_color_palette() {
		$color_palette = array();

		// Grabs the autogenerated color palette that we're pulling from our compiled bootstrap stylesheets.
		$color_palette_json = file_get_contents( get_theme_file_path( '/inc/editor-color-palette.json' ) ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents

		if ( $color_palette_json ) {
			$color_palette_json = json_decode( $color_palette_json, true );
			foreach ( $color_palette_json as $key => $value ) {
				$key             = str_replace( array( '--bs-', '--' ), '', $key );
				$color_palette[] = array(
					'name'  => $key,
					'slug'  => $key,
					'color' => $value,
				);
			}
		}

		/**
		 * Filters the default bootstrap color palette so it can be overriden by child themes or plugins when we add theme support for editor-color-palette. This array can also be generated via gulp.
		 *
		 * @param array $color_palette An array of color options for the editor-color-palette setting.
		 */
		return apply_filters( 'workroom1128_theme_editor_color_palette', $color_palette );
	}
}



// if ( ! function_exists( 'register_acf_block_old' ) ) :
// 	/**
// 	 * Adds custom acf block types to Gutenberg Editor.
// 	 */
// 	function register_acf_blocks_old() {
// 		register_block_type(array(
// 		    'name'              => 'homepagecontent',
// 		    'title'             => __('Home Page Content'),
// 		    'description'       => __('A custom home page block.'),
// 		    'render_template'   => 'template-parts/blocks/home/home-page-content.php',
// 		    'category'          => 'formatting',
// 		    'icon'              => 'admin-comments',
// 		    'mode'                  => 'preview',
// 		    'keywords'          => array( 'home page content', 'homepage' ),
// 		    'supports'          => [
// 		        'align'             => true,
// 		        'anchor'            => true,
// 		        'customClassName'   => true,
// 		        'jsx'               => true,
// 		    ]
// 		));
// 		 register_block_type(array(
// 		    'name'              => 'coursemoduleoutline',
// 		    'title'             => __('Course Module Outline'),
// 		    'description'       => __('A custom course module outline for offers block.'),
// 		    'render_template'   => 'template-parts/blocks/course/course-module-outline.php',
// 		    'category'          => 'formatting',
// 		    'icon'              => 'admin-comments',
// 		    'mode'                  => 'preview',
// 		    'keywords'          => array( 'course module content', 'offers' ),
// 		    'supports'          => [
// 		        'align'             => true,
// 		        'anchor'            => true,
// 		        'customClassName'   => true,
// 		        'jsx'               => true,
// 		    ]
// 		));
// 		register_block_type(array(
// 		    'name'              => 'footernewsletter',
// 		    'title'             => __('Footer Newsletter Content'),
// 		    'description'       => __('A custom footer block.'),
// 		    'render_template'   => 'template-parts/blocks/footer/footer-newsletter.php',
// 		    'category'          => 'formatting',
// 		    'icon'              => 'admin-comments',
// 		    'mode'                  => 'preview',
// 		    'keywords'          => array( 'footer content', 'footer' ),
// 		    'supports'          => [
// 		        'align'             => true,
// 		        'anchor'            => true,
// 		        'customClassName'   => true,
// 		        'jsx'               => true,
// 		    ]
// 		));

// 		// register a testimonial block.
// 		register_block_type(array(
// 		    'name'              => 'testimonial',
// 		    'title'             => __('Testimonial'),
// 		    'description'       => __('A custom testimonial block.'),
// 		    'render_template'   => 'template-parts/blocks/testimonial/block-testimonial-item.php',
// 		    'category'          => 'formatting',
// 		    'icon'              => 'admin-comments',
// 		    'mode'         			=> 'preview',
// 		    'keywords'          => array( 'testimonial', 'quote' ),
// 		    'supports'          => [
// 		        'align'             => false,
// 		        'anchor'            => true,
// 		        'customClassName'   => true,
// 		        'jsx'               => true,
// 		    ]
// 		));

// 		// register a testimonial block.
// 		register_block_type(array(
// 		    'name'              => 'courseslider',
// 		    'title'             => __('Course Class Slider'),
// 		    'description'       => __('A custom slider block.'),
// 		    'render_template'   => 'template-parts/blocks/course/course-slider.php',
// 		    'category'          => 'formatting',
// 		    'icon'              => 'admin-comments',
// 		    'mode'                  => 'preview',
// 		    'keywords'          => array( 'testimonial', 'quote' ),
// 		    'supports'          => [
// 		        'align'             => false,
// 		        'anchor'            => true,
// 		        'customClassName'   => true,
// 		        'jsx'               => true,
// 		    ]
// 		));


// 		register_block_type(array(
// 		    'name'              => 'speakingothertopics',
// 		    'title'             => __('Speaking Other Topics'),
// 		    'description'       => __('A custom speaking other topics block.'),
// 		    'render_template'   => 'template-parts/blocks/speaking/speaking-other-topics.php',
// 		    'category'          => 'formatting',
// 		    'icon'              => 'editor-paste-text',
// 		    'mode'         			=> 'preview',
// 		    'keywords'          => array( 'speaking other topics', 'other topics' ),
// 		));

// 		register_block_type(array(
// 		    'name'              => 'speakingblock',
// 		    'title'             => __('Speaking Block'),
// 		    'description'       => __('A custom speaking block with image.'),
// 		    'render_template'   => 'template-parts/blocks/speaking/speaking-category.php',
// 		    'category'          => 'formatting',
// 		    'icon'              => 'editor-paste-text',
// 		    'mode'                  => 'preview',
// 		    'keywords'          => array( 'speaking block with image' ),
// 		));

// 		register_block_type(array(
// 		    'name'              => 'speakingintro',
// 		    'title'             => __('Speaking Intro'),
// 		    'description'       => __('A custom speaking intro block.'),
// 		    'render_template'   => 'template-parts/blocks/speaking/speakingintro.php',
// 		    'category'          => 'formatting',
// 		    'icon'              => 'editor-paste-text',
// 		    'mode'                  => 'preview',
// 		    'keywords'          => array( 'speaking intro' ),
// 		));

// 		register_block_type(array(
// 		    'name'              => 'speakinggallery',
// 		    'title'             => __('Speaking Gallery'),
// 		    'description'       => __('A custom speaking gallery block.'),
// 		    'render_template'   => 'template-parts/blocks/speaking/speaking-gallery.php',
// 		    'category'          => 'layout',
// 		    'icon'              => 'editor-paste-text',
// 		    'mode'         			=> 'preview',
// 		    'keywords'          => array( 'speaking gallery', 'gallery' ),
// 		));
// 		register_block_type(array(
// 		    'name'              => 'course-featured',
// 		    'title'             => __('Course Featured Testimonial'),
// 		    'description'       => __('A custom Featured Testimonial block.'),
// 		    'render_template'   => 'template-parts/blocks/course/course-featured.php',
// 		    'category'          => 'layout',
// 		    'icon'              => 'editor-paste-text',
// 		    'mode'                  => 'preview',
// 		    'keywords'          => array( 'course featured testimonial', 'featured testimonial' ),
// 		));

// 		 register_block_type(array(
// 		    'name'              => 'course-testimonial-listing',
// 		    'title'             => __('Course Testimonial Listing'),
// 		    'description'       => __('A custom Course Testimonial Listing block.'),
// 		    'render_template'   => 'template-parts/blocks/course/course-testimonial-listing.php',
// 		    'category'          => 'layout',
// 		    'icon'              => 'editor-paste-text',
// 		    'mode'                  => 'preview',
// 		    'keywords'          => array( 'course testimonial list', 'testimonial list' ),
// 		    'supports'          => [
// 		        'align'             => false,
// 		        'anchor'            => true,
// 		        'customClassName'   => true,
// 		        'jsx'               => true,
// 		    ]
// 		));
// 		register_block_type( __DIR__ . '/blocks/courseaccordionlisting');
		// register_block_type(array(
		//     'name'              => 'course-accordion-listing',
		//     'title'             => __('Course Accordion Listing'),
		//     'description'       => __('A custom Course Accordion Listing block.'),
		//     'render_template'   => 'template-parts/blocks/course/course-accordion-listing.php',
		//     'category'          => 'layout',
		//     'icon'              => 'editor-paste-text',
		//     'mode'                  => 'preview',
		//     'keywords'          => array( 'course accordion list', 'accordion list' ),
		//     'supports'          => [
		//         'align'             => false,
		//         'anchor'            => true,
		//         'customClassName'   => true,
		//         'jsx'               => true,
		//     ]
		// ));
		//  register_block_type(array(
		//             'name'              => 'intro-section',
		//             'title'             => __('Intro Section'),
		//             'description'       => __('An introductory section block.'),
		//             'render_template'   => 'template-parts/blocks/frontpage/section-intro.php',
		//             'category'          => 'layout',
		//             'icon'              => 'editor-paste-text',
		//             //'mode'                    => 'preview',
		//             'keywords'          => array( 'intro section', 'topic' ),
		//         ));

		//     register_block_type(array(
		//             'name'              => 'about-section',
		//             'title'             => __('About Section'),
		//             'description'       => __('An About the Business section block.'),
		//             'render_template'   => 'template-parts/blocks/frontpage/section-about.php',
		//             'category'          => 'layout',
		//             'icon'              => 'editor-paste-text',
		//             //'mode'                    => 'preview',
		//             'keywords'          => array( 'about section', 'topic' ),
		//         ));
		//          // check function exists


		//     // register a hero block
		//     register_block_type(array(
		//         'name'              => 'hero',
		//         'title'             => __('Hero'),
		//         'description'       => __('Image background with text & call to action.'),
		//         'render_callback'   => 'hero_render_callback',
		//         'category'          => 'formatting',
		//         'icon'              => 'format-image',
		//         'mode'              => 'preview',
		//         'keywords'          => array( 'hero', 'image' ),
		//     ));
		//     register_block_type(array(
		//         'name'              => 'portfolio-item',
		//         'title'             => __('Portfolio Item'),
		//         'description'       => __('A custom block for portfolio items.'),
		//         'render_template'   => 'template-parts/blocks/portfolio-item/block-portfolio-item.php',
		//         'category'          => 'layout',
		//         'icon'              => 'excerpt-view',
		//         'keywords'          => array( 'portfolio' ),
		//     ));

		// 	register_block_type( __DIR__ . '/blocks/homepagecontent');
				// array(
				// 	'name'            => 'homepagecontent',
				// 	'title'           => __( 'Home Page Content' ),
				// 	'description'     => __( 'A custom home page block.' ),
				// 	'render_template' => 'template-parts/blocks/home/home-page-content.php',
				// 	'category'        => 'formatting',
				// 	'icon'            => 'admin-comments',
				// 	'mode'            => 'preview',
				// 	'keywords'        => array( 'home page content', 'homepage' ),
				// 	'supports'        => array(
				// 		'align'           => true,
				// 		'anchor'          => true,
				// 		'customClassName' => true,
				// 		'jsx'             => true,
				// 	),
				// )
				// );			 

	}
endif;
add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/testimonial' );
} 
// add_action( 'acf/init', 'register_acf_blocks');


/* can use when not defining template part */
function my_acf_block_render_callback( $block, $content = '', $is_preview = false ) {

		// create id attribute for specific styling
	$id = $block['id'];

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['render_template']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/{$slug}") ) ) {
		include( get_theme_file_path("/{$slug}") );
	}
}

function course_featured_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/blocks/course/course-featured.php") ) ) {
		include( get_theme_file_path("/template-parts/blocks/course/course-featured.php") );
	}
}


/**
 *  This is the callback that displays the hero block
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block content (emtpy string).
 * @param   bool $is_preview True during AJAX preview.
 */
// function hero_render_callback( $block, $content = '', $is_preview = false ) {

// 	// create id attribute for specific styling
// 	$id = 'hero-' . $block['id'];

// 	// create align class ("alignwide") from block setting ("wide")
// 	$align_class = $block['align'] ? 'align' . $block['align'] : '';

// 	// ACF field variables
// 	$image = get_field('image');
// 	$headline = get_field('headline');
// 	$paragraph = get_field('paragraph');
// 	$cta = get_field('cta');

// 	?>
<!-- // 	<section id="<?php echo $id; ?>" class="hero <?php echo $align_class; ?>" style="background-image: url(<?php echo $image; ?>);">
// 		<?php if ( $headline ): ?>
// 			<h2><?php echo $headline; ?></h2>
// 		<?php endif; ?>
// 		<?php if ( $paragraph ): ?>
// 			<p><?php echo $paragraph; ?></p>
// 		<?php endif; ?>
// 		<?php if ( $cta ): ?>
// 		<a class="button" href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>"><?php echo $cta['title']; ?></a>
// 		<?php endif; ?>
// 	</section>
// 	<?php -->
// }
