<?php
/**
 * The default template for displaying clients and their logos *
 *
 * @package workroom1128
 *
 * @since   workroom1128 1.0.0
 */

?>
<style>
.guestcheck	.check {
	width: 350px;
	height: 615px;
	background-color: white;
	box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.34);
	margin: 16px 0;
}

.guestcheck h1 {
	font-family: "Old Standard TT", serif;
	font-variant: small-caps;
	text-align: center;
	font-size: 42px;
	color: #333;
	margin: 10px 0 2px;
	letter-spacing: -1px;
}

.guestcheck .meta {
	margin: 0 16px;
	display: grid;
	grid-template-columns: 1fr 1fr 1fr 1fr 2fr;
}

.guestcheck .guest-receipt-meta {
	margin: 4px 16px 0 16px;
	display: grid;
	grid-template-columns: 1fr 1fr 1fr 2fr;
}

.guestcheck .meta-item {
	border-top: 1px solid #333;
	border-left: 1px solid #333;
	border-bottom: 1px solid #333;
}

.guestcheck .meta-item:nth-last-child(1) {
	border-right: 1px solid #333;
}

.guestcheck .meta-item-label {
	font-size: 10px;
	text-align: center;
	font-family: arial;
	color: #333;
	padding: 2px 0 18px;
}

.guestcheck .check-number {
	color: #ff5d5d;
	font-family: "share tech mono", menlo;
	font-size: 24px;
	text-align: center;
	padding-top: 2px;
	opacity: 0.8;
}

.guestcheck .item-types {
	font-family: arial;
	text-align: center;
	font-weight: bold;
	text-transform: uppercase;
	font-size: 12px;
	color: #333;
	margin: 4px 0 -1px;
}
.guestcheck .order-list {
	display: grid;
	grid-template-columns: 1fr 4fr 1fr 1fr;
	grid-template-rows: repeat(18, 23px);
}

.guestcheck .grid-item:nth-child(1),
.guestcheck .grid-item:nth-child(2),
.guestcheck .grid-item:nth-child(3),
.guestcheck .grid-item:nth-child(4) {
	border-top: 2px solid #333;
}
.guestcheck .grid-item:nth-child(4n + 1) {
	border-bottom: 1px solid #333;
	border-right: 1px solid #333;
}
.guestcheck .grid-item:nth-child(4n + 2) {
	border-bottom: 1px solid #333;
	border-right: 1px solid #333;
}
.guestcheck .grid-item:nth-child(4n + 3) {
	border-bottom: 1px solid #333;
	border-right: 1px solid #333;
}
.guestcheck .grid-item:nth-child(4n) {
	border-bottom: 1px solid #333;
}
.guestcheck .grid-item:nth-last-child(1),
.guestcheck .grid-item:nth-last-child(2),
.guestcheck .grid-item:nth-last-child(3),
.guestcheck .grid-item:nth-last-child(4) {
	border-bottom: 2px solid #333;
}
.guestcheck .company-info {
	display: flex;
	justify-content: space-between;
	font-size: 11px;
	padding: 2px 16px;
}
.guestcheck .small-caps {
	font-variant: small-caps;
}
.guestcheck .usa {
	font-family: arial;
	font-weight: bold;
	font-style: italic;
	color: #333;
}
.guestcheck .perforation {
	border-top: 1px dashed #b0b5b8;
	margin: 8px 0;
}
.guestcheck .guest-receipt {
	font-family: arial;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
	color: #333;
	margin: 12px 16px 0 16px;
}
.guestcheck .order-list-container {
	background-color: #e3faf0;
	position: relative;
	padding: 4px 16px 2px 16px;
}
.guestcheck .writing {
	position: absolute;
	z-index: 2;
	width: 318px;
	font-family: arial;
	color: #333;
	opacity: 0.8;
}
.guestcheck .tax {
	grid-column: 2/3;
	grid-row: 17/18;
	text-align: right;
	font-size: 12px;
	align-self: end;
	padding: 4px 6px;
}
.guestcheck .total {
	grid-column: 2/3;
	grid-row: 18/19;
	text-align: right;
	font-size: 13px;
	align-self: end;
	font-weight: bold;
	padding: 4px 6px;
}
.guestcheck .thank-you {
	grid-column: 2/3;
	grid-row: 18/19;
	text-align: left;
	font-size: 13px;
	align-self: end;
	font-weight: bold;
	padding: 4px 6px;
}
.guestcheck .ordered-item {
	font-family: "homemade apple";
	font-size: 24px;
}
.guestcheck .c {
	grid-column: 3/4;
	padding-top: 10px;
	transform: scale(1.02);
}
.c-price {
	grid-column: 4/5;
	padding-top: 6px;
	transform: scale(1.3) skewy(-3deg);
}
.guestcheck .smgf {
	grid-row: 3/4;
	grid-column: 2/4;
	text-align: right;
	padding-right: 18px;
	transform: skew(-5deg) scale(1.1);
}
.guestcheck .smgf-price {
	grid-row: 3/4;
	grid-column: 4/5;
	transform: scale(1.08) skewy(-3deg);
}
.guestcheck .tea {
	grid-row: 4/5;
	grid-column: 2/4;
	text-align: right;
	padding-right: 27px;
	padding-top: 9px;
}
.guestcheck .tea-price {
	grid-row: 4/5;
	grid-column: 4/5;
	padding-top: 10px;
	transform: scale(1.1) skewy(-2deg);
}
.guestcheck .relleno {
	grid-column: 2/3;
	grid-row: 6/7;
	padding-top: 4px;
	padding-left: 12px;
	transform: scale(1.2) skewy(-2deg) skewx(8deg) translatey(2px);
}
.guestcheck .relleno-price {
	grid-column: 3/5;
	grid-row: 6/7;
	padding-top: 4px;
	text-align: right;
	padding-right: 7px;
}
.guestcheck .green-ranch {
	grid-column: 2/4;
	grid-row: 8/9;
	padding-top: 4px;
	padding-left: 6px;
	transform: scale(1.08) skewy(-3deg);
}
.guestcheck .green-price {
	grid-column: 4/5;
	grid-row: 8/9;
	transform: scale(1.2) skewy(-7deg) skewx(-5deg);
}
.guestcheck .bisc {
	grid-column: 2/3;
	grid-row: 11/12;
	padding-top: 7px;
	padding-right: 3px;
	text-align: right;
}
.guestcheck .bisc-price {
	grid-column: 4/5;
	grid-row: 11/12;
	padding-top: 9px;
}
.guestcheck .tax-writing {
	grid-column: 4/5;
	grid-row: 17/18;
	transform: scale(1.3) skewy(-6deg) translateY(-5px);
}
.guestcheck .total-writing {
	grid-column: 4/5;
	grid-row: 18/19;
	transform: scale(1.5) skewy(-4deg) translateX(-12px);
}
</style>
<section class="clients-section-container container mt-5">

	<div class="content-wrapper">
	<!-- Commented out code for now link "https://fonts.googleapis.com/css?family=Homemade+Apple|Old+Standard+TT:700|Share+Tech+Mono" . -->
					<div class="guestcheck">
						<div class="check">
							<h1>GuestCheck™</h1>
							<div class="meta">
							<div class="meta-item">
								<h2 class="meta-item-label" h2>Date</h2>
							</div>
							<div class="meta-item">
								<h2 class="meta-item-label" 2>Table</h2>
							</div>
							<div class="meta-item">
								<h2 class="meta-item-label">Guests</h2>
							</div>
							<div class="meta-item">
								<h2 class="meta-item-label">Server</h2>
							</div>
							<div class="meta-item">
								<h2 class="check-number">46126</h2>
							</div>
							</div>
							<h3 class="item-types">
							appt-soup/sal-entree-veg/pot-dessert-bev
							</h3>
							<div class="order-list-container">
							<div class="order-list writing">
								<h3 class="tax">Tax</h3>
								<h3 class="total">Total</h3>
								<h3 class="thank-you">Thank you</h3>
								<h3 class="ordered-item c">C</h3>
								<h3 class="ordered-item c-price">2.99</h3>
								<h3 class="ordered-item smgf">sm gf</h3>
								<h3 class="ordered-item smgf-price">2.19</h3>
								<h3 class="ordered-item tea">tea</h3>
								<h3 class="ordered-item tea-price">3.09</h3>
								<h3 class="ordered-item relleno">1 relleno</h3>
								<h3 class="ordered-item relleno-price">12.75</h3>
								<h3 class="ordered-item green-ranch">1 green ranch</h3>
								<h3 class="ordered-item green-price">11.35</h3>
								<h3 class="ordered-item bisc">bisc</h3>
								<h3 class="ordered-item bisc-price">2.99</h3>
								<h3 class="ordered-item tax-writing">2.48</h3>
								<h3 class="ordered-item total-writing">37.84</h3>
							</div>

							<div class="order-list grid-lines">
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
								<div class="grid-item"></div>
							</div>

							</div>
							<div class="company-info">
							<h4 class="small">525</h4>
							<h4 class="small small-caps">GuestCheck™</h4>
							<h4 class="small">nationalchecking.com</h4>
							<h4 class="small small-caps usa">made in the USA</h4>
							</div>
							<div class="perforation"></div>
							<h4 class="guest-receipt">Guest Receipt</h4>
							<div class="guest-receipt-meta">
							<div class="meta-item">
								<h2 class="meta-item-label">Date</h2>
							</div>
							<div class="meta-item">
								<h2 class="meta-item-label">Amount</h2>
							</div>
							<div class="meta-item">
								<h2 class="meta-item-label">Guests</h2>
							</div>
							<div class="meta-item">
								<h2 class="check-number">46126</h2>
							</div>
							</div>
						</div>
					</div>
				</div>
	</div>

</section>
