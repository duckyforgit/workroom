<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area" id="comments">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>

		<h2 class="comments-title">

			<?php
			$comments_number = get_comments_number();
			if ( 1 === (int) $comments_number ) {
				printf(
					/* translators: %s: post title */
					esc_html_x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'workroom1128' ),
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					esc_html(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'workroom1128'
						)
					),
					number_format_i18n( $comments_number ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . esc_html( get_the_title() ) . '</span>'
				);
			}
			?>

		</h2><!-- .comments-title -->

		<?php workroom1128_comment_navigation( 'comment-nav-above' ); ?>

		<ol class="comment-list">

			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>

		</ol><!-- .comment-list -->

		<?php workroom1128_comment_navigation( 'comment-nav-below' ); ?>

	<?php endif; // End of if have_comments(). ?>

	<?php comment_form(); // Render comments form. ?>

</div><!-- #comments -->
