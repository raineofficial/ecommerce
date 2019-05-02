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

			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/banner/banner-3.jpeg" alt="" />
							<div class="intro">
								<h1>Custom Wear</h1>
								<p><span>Make your own choice</span></p>
								<p><span>Select your own clothing</span></p>
							</div>
						</li>
						<li>
							<img src="themes/images/banner/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/banner/banner-2.jpg" alt="" />
							<div class="intro">
								<h6><span>Takes you to good places</span><h6>
							</div>
						</li>
					</ul>
				</div>			
			</section>

			<?php include 'main_menu.php'; ?>
			
			<!--<section class="header_text">
				Kouture is a South Florida based fashion designer.
				<br/>Women are bold and not shy to accentuate all her lines.
			</section>-->

			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Featured <strong>Products</strong></span></span></span>
									<!--<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>-->
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
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
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
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
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<!--<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>-->
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
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
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/products/product_image.png" alt="" /></a></p>
														<a href="product_detail.php" class="title">Product Name</a><br/>
														<a href="products.php" class="category">Product Description</a>>
														<p class="price">$200.25</p>
													</div>
												</li>																																
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/icons/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Fashion is a distinctive and often constant trend in the style in which a person dresses.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/icons/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Products purchase over $500 is of free shipping worldwide.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/icons/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Our customer support is always online 24 hours a day. Questions are always answered immediately.</p>
									</div>
								</div>
							</div>	
						</div>		
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