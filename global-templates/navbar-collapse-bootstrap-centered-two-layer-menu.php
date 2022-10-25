<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package workroom1128
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'workroom1128_container_type' );
?>
<style>
.top-bar .nav-item {
	display: inline-block;
}

nav {
	padding: 0px;
}

nav.top-bar-wrap {
	background: #ffb66c;
}

.top-bar-wrap {
height: 40px;
line-height: 40px;
}

.main-nav-wrap {
height: 80px;
line-height: 80px;
}

nav.main-nav-wrap {
background: #7c2222;
font-size: 1.25rem
}

nav.top-bar-wrap ul,
nav.main-nav-wrap ul {
margin-bottom: 0px;
margin-top: 0px;
display:flex;
justify-content:center;
list-style-type:none;
}

a.nav-link:hover {
background: rgba(0, 0, 0, 0.2);
color: #fff;
border-left: 12px solid rgba(0, 0, 0, 0.3);
}

a.nav-link {
border-left: 12px solid transparent;
border-right: 12px solid transparent;
color: #f9f9f9;
text-transform: uppercase;
font-family: '
Rubik'
,
sans-serif;
transform: skew(-25deg);
transition: all 400ms ease-out
}

a .inner-link {
display: inline-block;
transform: skew(25deg)
}

.nav-link {
padding: 0px;
}

.top-bar-wrap a {
padding-left: 12px;
}

.main-nav-wrap a {
padding-left: 18px;
}

.brand-logo img {
height: 40px;
transform: skew(25deg)
}

.brand-phone a {
display: block;
font-size: 1.25em;
text-decoration: none;
color: #000000;
letter-spacing: 2px;
height: 40px;
line-height: 1.5em;
transform: skew(25deg)
}

.brand-phone,
.brand-logo {
padding: 40px;
position: absolute;
top: 0;
height: 120px;

transform: skewX(-25deg);
}

.brand-logo {
left: -30px;
padding-left: 70px;
background: #621616;
border-right: 2px solid #ffb66c;

}

.brand-phone {
right: 0;
right: -30px;
padding-right: 70px;
background: #ffb66c;
border-left: 3px solid #6c4013;
}
	</style>
	<div role="navigation">
	<div class="">
		<div class="brand-logo">
			<?php the_custom_logo(); ?>
		</div>
		<div class="brand-phone">
			<a href="#"><i class="fa fa-phone me-3"></i>900 234-1234</a>
		</div>
		<div class="text-center">
			<nav class="top-bar-wrap">
				<ul class="top-bar">
					<li class="nav-item">
						<a href="#" class="nav-link"><span class="inner-link">Home</span></a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><span class="inner-link">About</span></a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><span class="inner-link">Contact</span></a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><span class="inner-link">Support</span></a>
					</li>
				</ul>
			</nav>
			<nav class="main-nav-wrap">
				<ul class="main-nav">
					<li class="nav-item">
						<a href="#" class="nav-link"><span class="inner-link">Services</span></a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><span class="inner-link">Career</span></a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><span class="inner-link">Features</span></a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><span class="inner-link">Gallery</span></a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
