<?php
/**
 * The template part for displaying Masonry content.
 *
 * @package workroom1128
 * @since workroom1128 1.0.0
 */

?>
<style>
.masonry {
	columns: 4;
	column-gap: 16px;
}
@media (max-width: 1200px) {
	.masonry {
	columns: 3;
	}
}
	@media (max-width: 992px) {
		.masonry {
		columns: 2;
		}
	}
	/* @media (max-width: 768px) {columns: 1;} */
.grid {
	display: inline-block;
	margin-bottom: 16px;
	position: relative;
}
.grid:before {
	border-radius: 5px;
	content:'';
	position:absolute;
	top:0;
	right:0;
	bottom:0;
	left:0;
	background-color:rgba(0,0,0,.2);
}
img {
	width: 100%;
	border-radius: 5px;
}
.grid__title {
	font-size: 28px;
	font-weight:bold;
	margin: 0px 0px 10px 0px;
}
.grid__author {
	font-size: 14px;
	font-weight:300;
}
.grid__link {
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
}
.grid__body {
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	padding: 30px 30px;
	color: #fff;
	display: flex;
	flex-direction: column
}
.grid__tag {
	background-color:rgba(255,255,255,.8);
	color: #333;
	border-radius:5px;
	padding: 5px 15px;
	margin-bottom: 5px;
}

.mt-auto {
	margin-top:auto;
}
</style>

<div class="masonry">
	<div class="grid">
		<img src="https://source.unsplash.com/random/1">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/2">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/3">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/4">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/5">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/6">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/7">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/8">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/9">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/10">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/11">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/12">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/19">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/20">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/13">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div> <div class="grid">
		<img src="https://source.unsplash.com/random/14">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/15">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/16">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/17">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
	<div class="grid">
		<img src="https://source.unsplash.com/random/18">
		<div class="grid__body">
			<div class="relative">
				<a class="grid__link" target="_blank" href="/" ></a>
				<h1 class="grid__title">Title 1</h1>
				<p class="grid__author">Mario Rossi</p>
			</div>
			<div class="mt-auto" >
				<span class="grid__tag">#tag1</span>
			</div>
		</div>
	</div>
</div>
