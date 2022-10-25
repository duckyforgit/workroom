<?php
/**
 * The default template for displaying content blog
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/*Blog Categories:  Your Identity | Career Expectations | Your Happiness | Your Future | Life Coach Topics

 

Blog 1: Where did you go Wrong is under Your Happiness, Tags are unhappy, career disappointment, engineering major

Blog 2:  Are you going thru the Motions at Work is under Career Expectations, Tags are stuck, bored, unhappy, job searching

Blog 3: Who Are You is under Your Identity, Tags are regrets, mistakes, self-confidence, self-esteem

Blog 4: Are you More capable is under Your Future, Tags are professional development, education, training

 

 

And my first Video Series title will be, “Fundamental Skills for an Efficient Life”
*/
?>
<?php

?>
   
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<?php the_post_thumbnail('fp-post-2'); ?>

	<header>
	<?php
		 if ( is_single() ) {		  
	 
			the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-header">
		<?php foundationpress_entry_meta(); ?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?>
			<p><?php the_tags(' | '); ?></p><?php } ?>
		<?php $category = get_the_category(); 
			if ( $category ) { ?>
			<li>Categories: <?php the_category(' | '); ?></li>
			<?php } ?>
			
       </div>
	</header>
	<div class="entry-content">
	<?php  
    	the_excerpt();
    	// echo foundationpress_excerpt_more(1);   
	 ?>
		 

		<?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'foundationpress' ) ); ?>
		<?php //echo foundationpress_excerpt_more(1); ?>
		<br><p><?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?></p>

	</div>
	<footer>
		<?php
			 wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		
	</footer>
</article>
