<?php
/*
Template Name: Mobile
*/
 
?>
  <!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta name="theme-color" content="#6EB104"> 
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
 <a class="back-to-top" >
	   <i class="fa fa-chevron-circle-up filter-shadow" aria-hidden="true"></i>
	 </a>
	<div class="page">
    	 
	 
	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>
	<div class="grid-y grid-frame"> 
	<header  id="navbar" class=" BoxShadowHelper-2" role="banner">
 
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="flex-item title-bar-left">
				
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>


			</div>
			<div class="flex-item title-bar-right">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button"  ></button>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> 
            <img width="400" height="100" src="<?php echo get_template_directory_uri();?>/dist/assets/images/logo-1128-version-7.png" class="topbar-logo" alt="1128 WORKROOM" itemprop="logo"  srcset="" sizes="(max-width: 400px) 100vw, 400px"> <?php // bloginfo( 'name' ); ?></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>

			</div>
		</nav>

	</header>

		 
	<div class="main-content">
	<div class="intro aligner flex-container flex-column relative"> 
           
      <div class="sp-container">
        <div class="sp-content">
           <div class="sp-wrap sp-left">
            <h2> <!-- what if you could get custom web design on a budget?-->
              <span class="sp-top">What if you could get</span> 
              <span class="sp-mid">custom<br>web design</span> 
              <span class="sp-bottom">on a budget?</span> 
            </h2><!-- small business price -->
          </div>
        <div class="sp-wrap sp-right">
            <h2>
              <span class="sp-top">And convert</span> 
              <span class="sp-mid">visitors to customers<i>!</i><i>?</i></span> 
              <span class="sp-bottom">Absolutely!</span> 
            </h2>
          </div> 
        </div>
        <div class="sp-full">
          <h2>request a free quote!</h2>
          <!-- <div class="button-call">
            <a href="tel:630-251-5660" class="button call">CALL NOW</a>
       </div> -->
          <a href="tel:630-251-5660" class="button call">CALL NOW</a> 
       </div>  
      </div>
  </div>
	</div> 
    	<div class="footer"><h3>footer</h3></div>
	</div>
  <!-- <div class="grid-container"> -->
<!-- <div class="grid-y medium-grid-frame">
  <div class="cell shrink header medium-cell-block-container">
    <h1>Grid Frame Header</h1>
    <div class="grid-x grid-padding-x">
      <div class="cell medium-4">
        A medium 4 cell
      </div>
      <div class="cell medium-4 medium-cell-block">
        <p style="width:80vw;">A medium 4 cell block... on medium this content should overflow and let you horizontally scroll across... one might use this for an array of options</p>
      </div>
      <div class="cell medium-4">
        A medium 4 cell
      </div>
    </div>
  </div>
  <div class="cell medium-auto medium-cell-block-container">
    <div class="grid-x grid-padding-x">
      <div class="cell medium-4 medium-cell-block-y">
        <h2>Independent scrolling sidebar</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus odio, accumsan id ullamcorper eget, varius nec erat. Nulla facilisi. Donec dui felis, euismod nec finibus vitae, dapibus quis arcu. Maecenas tempor et ipsum quis venenatis. Ut posuere sed augue sit amet efficitur. Sed imperdiet, justo id tempus rhoncus, est est viverra turpis, non vulputate magna lectus et nisl. Pellentesque ultrices porttitor vehicula. Ut aliquet efficitur ligula, a consectetur felis. Proin tristique ut augue nec luctus. Curabitur a sapien pretium, auctor elit a, efficitur erat. Donec tincidunt dui vel velit bibendum euismod. Cras vitae nibh dui. Aliquam erat volutpat. Etiam sit amet arcu a erat efficitur facilisis. Ut viverra dapibus turpis, et ornare justo. Integer in dui cursus, dignissim tortor a, hendrerit risus.</p>

        <p>Suspendisse pulvinar, massa iaculis feugiat lobortis, dolor sapien vestibulum nulla, vel cursus tellus leo in lorem. Aliquam eu placerat urna. Suspendisse sed viverra orci, ut mattis neque. Fusce non ultrices nisi. In sagittis varius mollis. Quisque dolor quam, consectetur eu lacinia ac, ullamcorper vel arcu. Nullam mattis imperdiet nulla sed ornare. Praesent tristique, est id eleifend vestibulum, neque nibh condimentum ex, nec lobortis purus justo a libero. Phasellus id ex ac nunc hendrerit hendrerit. Nullam urna ipsum, rutrum at fringilla vel, venenatis non purus. Maecenas egestas ex vitae venenatis molestie. Ut et odio egestas, accumsan neque et, viverra nisl. Sed faucibus nec nulla sed imperdiet. Fusce quis sem ac urna semper tempor a id elit. Nulla fringilla vitae sapien a vehicula.</p>

      </div>
      <div class="cell medium-8 medium-cell-block-y">
        <h2>Independent scrolling body</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacus odio, accumsan id ullamcorper eget, varius nec erat. Nulla facilisi. Donec dui felis, euismod nec finibus vitae, dapibus quis arcu. Maecenas tempor et ipsum quis venenatis. Ut posuere sed augue sit amet efficitur. Sed imperdiet, justo id tempus rhoncus, est est viverra turpis, non vulputate magna lectus et nisl. Pellentesque ultrices porttitor vehicula. Ut aliquet efficitur ligula, a consectetur felis. Proin tristique ut augue nec luctus. Curabitur a sapien pretium, auctor elit a, efficitur erat. Donec tincidunt dui vel velit bibendum euismod. Cras vitae nibh dui. Aliquam erat volutpat. Etiam sit amet arcu a erat efficitur facilisis. Ut viverra dapibus turpis, et ornare justo. Integer in dui cursus, dignissim tortor a, hendrerit risus.</p>
        <p>Suspendisse pulvinar, massa iaculis feugiat lobortis, dolor sapien vestibulum nulla, vel cursus tellus leo in lorem. Aliquam eu placerat urna. Suspendisse sed viverra orci, ut mattis neque. Fusce non ultrices nisi. In sagittis varius mollis. Quisque dolor quam, consectetur eu lacinia ac, ullamcorper vel arcu. Nullam mattis imperdiet nulla sed ornare. Praesent tristique, est id eleifend vestibulum, neque nibh condimentum ex, nec lobortis purus justo a libero. Phasellus id ex ac nunc hendrerit hendrerit. Nullam urna ipsum, rutrum at fringilla vel, venenatis non purus. Maecenas egestas ex vitae venenatis molestie. Ut et odio egestas, accumsan neque et, viverra nisl. Sed faucibus nec nulla sed imperdiet. Fusce quis sem ac urna semper tempor a id elit. Nulla fringilla vitae sapien a vehicula.</p>
        <p>Nullam vestibulum lorem nec lectus egestas, nec ullamcorper diam maximus. Maecenas condimentum, nibh at blandit semper, ex erat tempus magna, id maximus neque velit accumsan nibh. Aenean dignissim lorem eu nisl laoreet vestibulum. Vivamus efficitur et augue vitae tincidunt. Etiam et magna felis. Integer mattis, nisi aliquet scelerisque blandit, ex mi sodales ante, eget accumsan quam magna et ligula. Curabitur id tristique leo. Proin rutrum mi vitae enim rhoncus, at cursus neque eleifend. Integer ultrices volutpat tellus ac porta. Fusce sollicitudin venenatis lacinia. Fusce ante lorem, gravida semper varius non, pharetra non erat. Sed dapibus arcu turpis, ac sollicitudin nibh lacinia vel. Nullam at enim porta, luctus metus sit amet, rutrum odio. Cras tempor enim vel pellentesque sollicitudin. Maecenas ullamcorper, sem non accumsan volutpat, neque tortor pulvinar orci, ut ultrices ligula lorem ut risus.</p>
        <p>Aliquam facilisis, nibh eget posuere suscipit, arcu sapien iaculis odio, in molestie dolor lectus vitae sem. Cras id nunc mollis mi rutrum dapibus. Quisque rutrum a augue at scelerisque. Praesent faucibus ac enim vitae gravida. Sed et sodales elit. Duis magna lectus, interdum sit amet metus a, sagittis varius magna. Proin nibh lectus, egestas a luctus ut, dapibus et enim. Curabitur fringilla ipsum vitae nunc imperdiet consectetur eget non neque. Suspendisse ultricies odio quis lorem vulputate, ac vulputate turpis feugiat. Maecenas posuere rhoncus orci, in ornare velit suscipit tempor. Curabitur pretium nisl id lorem placerat consequat. In quis quam eros. Nam mattis elit eu quam sagittis, in varius erat tempor.</p>
        <p>Fusce felis magna, pellentesque eget mollis a, rutrum id eros. Curabitur auctor varius arcu a consequat. Phasellus quis pulvinar enim, eu ultricies justo. Pellentesque risus libero, dapibus at erat ultricies, gravida varius erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla tempus, justo ut laoreet mollis, nunc tellus convallis urna, vel pretium dui velit eget ligula. Aliquam semper sed nulla a molestie. Maecenas at egestas massa, vitae aliquam mi. Fusce nec sem egestas, pretium lacus non, tincidunt sapien. Sed tristique odio at ultricies vulputate. Integer et convallis augue, eu aliquam enim. Mauris ut faucibus diam. Donec vulputate nunc sed congue accumsan. Etiam lobortis nisi quis lacinia pharetra.</p>
      </div>
    </div>
  </div>
  <div class="cell shrink footer">
    <h3>Here's my footer</h3>
  </div>
</div> -->
 
<?php wp_footer(); ?>
</body>
</html>