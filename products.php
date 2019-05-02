<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Kouture</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<link rel="shortcut icon" href="themes/images/logo/favicon.png">
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
	
	</head>

    <body>		

		<div id="top-bar" class="container">
			<?php include 'header.php'; ?>
		</div>

		<div id="wrapper" class="container">
			<?php include 'main_menu.php'; ?>

			<!--<section class="header_text sub">
				<img class="pageBanner" src="themes/images/banner/page_banner02.jpg" alt="New products" >
				<span style="text-align: left;"><h6>Home > Formal Collection</h6></span>
			</section>-->

			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/banner/page_banner02.jpg" alt="" />
							<div class="intro">
								<h1>Formal Collection</h1>
							</div>
						</li>
					</ul>
				</div>			
			</section>

			<section class="main-content">
				<br><br>
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
									<a href="product_detail.php" class="title">Product Name</a><br/>
									<a href="products.php" class="category">Product Description</a>
									<p class="price">$200.25</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
									<a href="product_detail.php" class="title">Product Name</a><br/>
									<a href="products.php" class="category">Product Description</a>
									<p class="price">$200.25</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
									<a href="product_detail.php" class="title">Product Name</a><br/>
									<a href="products.php" class="category">Product Description</a>
									<p class="price">$200.25</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
									<a href="product_detail.php" class="title">Product Name</a><br/>
									<a href="products.php" class="category">Product Description</a>
									<p class="price">$200.25</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>
									<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
									<a href="product_detail.php" class="title">Product Name</a><br/>
									<a href="products.php" class="category">Product Description</a>
									<p class="price">$200.25</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
									<a href="product_detail.php" class="title">Product Name</a><br/>
									<a href="products.php" class="category">Product Description</a>
									<p class="price">$200.25</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
									<a href="product_detail.php" class="title">Product Name</a><br/>
									<a href="products.php" class="category">Product Description</a>
									<p class="price">$200.25</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
									<a href="product_detail.php" class="title">Product Name</a><br/>
									<a href="products.php" class="category">Product Description</a>
									<p class="price">$200.25</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
									<a href="product_detail.php" class="title">Product Name</a><br/>
									<a href="products.php" class="category">Product Description</a>
									<p class="price">$200.25</p>
								</div>
							</li>
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Ball Gowns</a></li>
								<li><a href="products.html">Mermaid Gowns</a></li>
								<li><a href="products.html">Empire Waist Gowns</a></li>
								<li><a href="products.html">A-Line Gowns</a></li>
								<li><a href="products.html">Modified A-Line Gowns</a></li>
								<li><a href="products.html">Trumpet Gowns</a></li>
								<li><a href="products.html">Sheath Gowns</a></li>
							</ul>
						</div>
						<?php include 'quotes.php'; ?>
					</div>
				</div>
			</section>
				<?php include 'footer.php'; ?>	
		</div>
		<script src="themes/js/common.js"></script>	
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>