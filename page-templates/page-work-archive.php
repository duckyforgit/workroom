<?php
/**
 Template Name: Work Archive
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php wp_reset_query(); 
// sort by priority - custom field
 $args = array(
 	'post_type' => 'work',
	//  'meta_key' => 'title',
   // 'orderby'   => 'meta_value',
   // 'meta_value' => '1'
  //  'order' => 'ASC', 	 
 ); 
 $query = new WP_Query( $args );?> 
 
	 
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<h2>Select Work</h2>
			<div class="margin"></div>
		<?php if ( $query->have_posts() ) : ?>

		 <!-- Start the Loop -->
			 
    <!--  work we do Selected Work 
Responsive, creative and custom ecommerce designs that convert.-->
         
    
			<?php while ( have_posts() ) : the_post(); ?>
			<!-- get_template_part( 'template-parts/content', get_post_format() ); -->
				<!-- get_template_part( 'template-parts/content', 'clientsites'); -->
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif;  // End have_posts() check. ?>

		 
		</main>
		<!-- // get_sidebar(); -->

	</div>
</div>

<?php get_footer();
