<?php
/**
 * PHP version 8.0.8
 *
 * @category Course
 *
 * @package workroom1128
 * @author  1128 Workroom, LLC <support@1128workroom.com>
 * @license GNU General Public License v3 or later
 * @version GIT: <1.0.0>
 * @link    http://www.gnu.org/licenses/gpl-3.0.html
 * @since   1.0.0
 */

defined( 'ABSPATH' ) || exit();

$user = get_current_user();
/* makes certain course and user exists */

if ( ! $user ) {
	return;
}

?>
<div id="popup-header" class="pt-3 pb-3" >

	<div class="d-flex flex-wrap popup-header__inner justify-content-around">

		<div class="m-2">

			<a href="<?php echo esc_url( site_url() ); ?>" >
			<img src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/course-logo.jpg' ); ?>" 
			alt="Deliberate Doing, LLC" height="60" width="300">
			</a>

		</div>

		<div class="flex-1">

			<h2 class="h6 course-title">            
			<?php echo esc_html( get_the_title() ); ?>
			</h2>

		</div>
		<div class="d-flex align-items-center justify-content-sm-end justify-content-xl-center"> 

		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Elearning Dashboard' ) ) ); ?>" 
		class="back-course">
			<span class="desktop-only"><i class="fa-solid fa-rotate-left pe-1"></i>
			Dashboard</span>
			<span class="mobile-only">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/icons/noun-home-2817045-212529.svg' ); ?>" alt="logout" width="30" height="30" style="width:30px" >
			</span>
		</a> 

		<?php if ( is_user_logged_in() ) { ?>               
		<a href="<?php echo esc_url( wp_logout_url() ); ?>" 
		class="btn btn--small float-left btn--with-photo m-0">
			<span class="site-header__avatar">
				<?php
				echo get_avatar( get_current_user_id(), 60 );
				?>
			</span>
			<span class="desktop-only btn__text">Log Out</span>
			<span class="mobile-only">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/icons/noun-logout-1045048-212529.svg' ); ?>" alt="logout" width="30" height="30" style="width:30px" >
			</span>
		</a> 

			<?php
		} else {
			?>
		<a href="<?php echo esc_url( wp_login_url() ); ?>" 
		class="btn btn--small btn--teal float-left push-right">
		Login</a>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/icons/noun-login-1123251-212529.svg' ); ?>" alt="login" width="30" height="30" style="width:30px">
			<?php
		}
		?>
		</div>
	</div> 
</div>
