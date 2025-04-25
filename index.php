<?php $page = "home"; ?>
<!DOCTYPE html>
<html lang="en">

<head itemscope itemtype="http://www.schema.org/website">
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="">
	<meta property="og:url" content="https://.com">
	<meta property="og:image" content="https://.com/images/android-icon-192x192.png">
	<meta name="keywords" content="">
	<meta property="og:description" name="description" content="">
	<meta name="robots" content="all">
	<meta name="revisit-after" content="10 Days">
	<meta name="copyright" content="">
	<meta name="language" content="English">
	<meta name="distribution" content="Global">
	<meta name="web_author" content="srisoftwarez.com">
	<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
	<link rel="icon" sizes="192x192" href="images/android-icon-192x192.png">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/hover-min.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body itemscope itemtype="http://schema.org/WebPage">
	<?php include_once "header.php"; ?>
	<!--index carousel -->
	<section class="home-carousel">
		<div class="swiper home-carousel-swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="images/slide-1.webp" alt="Fireworks Slide 1" />
				</div>
				<div class="swiper-slide">
					<img src="images/slide-2.webp" alt="Fireworks Slide 2" />
				</div>
			</div>
		</div>
	</section>

	<!-- hero section -->
	<section class="hero-content p-3 position-relative text-dark d-flex align-items-center wow fadeInUp"
		data-wow-delay="1.5s">
		<div class="hero-content-overlay"></div>
		<div class="container">
			<div class="row align-items-center">
				<!-- Text & CTAs -->
				<div class="col-12 col-md-6 col-lg-6">
					<span class="hero-content-badge mb-3 d-inline-block">🔥 Best Deals of the Season</span>
					<h1 class="hero-content-title mb-3">Ignite Your Celebrations</h1>
					<p class="hero-content-subtitle mb-4">
						Premium Fireworks for Every Occasion — Retail & Wholesale Available!
					</p>
					<div class="hero-content-buttons mb-4">
						<a href="contact.php" class="btn bg-purple text-white btn-lg mr-2">Shop Now</a>
						<a href="products.php" class="btn btn-warning btn-lg">View Catalog</a>
					</div>
					<ul class="hero-content-features list-unstyled">
						<li class="bg-yellow rounded-pill p-2 mb-2 hvr-bob d-block"><i
								class="bi bi-patch-check-fill h5 mr-2 text-dark"></i>
							Certified Quality
						</li>
						<li class="bg-yellow rounded-pill p-2 my-4 hvr-bob d-block"><i
								class="bi bi-truck-front-fill text-dark h5 mr-2"></i>
							Fast
							Delivery
							Nationwide</li>
						<li class="bg-yellow rounded-pill p-2 hvr-bob d-block"><i
								class="bi bi-tags-fill mr-2 text-dark h5"></i>
							Wholesale
							Discounts</li>
					</ul>
				</div>

				<!-- Image / Visual -->
				<div class="col-12 col-md-6 col-lg-6 text-center position-relative hvr-grow">
					<img src="images/hero-img.webp" alt="Fireworks Display" class="hero-content-image img-fluid">
					<div class="hero-content-animation">

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- our products -->
	<section class="products-content py-5 productsbg bg-black wow fadeInDown">
		<div class="container">
			<div class="row text-center mb-4">
				<div class="col-12">
					<h1 class="heading6 arial badge custom-badge">✨Our Products</h1>
					<h2 class="heading1 text-yellow">Choose from our wide range of fireworks</h2>
				</div>
			</div>

			<div class="row">
				<!-- Product 1 -->
				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<div class="product-card">
						<img src="images/product-4.webp" alt="Ground Chakkar" class="img-fluid">
						<div class="overlay">
							<h5>Ground Chakkar</h5>
							<p>Bright, Safe, Fun</p>
							<a href="products.php" class="btn btn-sm btn-light">Buy Now</a>
						</div>
					</div>
				</div>

				<!-- Product 2 -->
				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<div class="product-card">
						<img src="images/product-2.webp" alt="Single Sound" class="img-fluid">
						<div class="overlay">
							<h5>Single Sound</h5>
							<p>Loud, Sharp, Clean</p>
							<a href="products.php" class="btn btn-sm btn-light">Buy Now</a>
						</div>
					</div>
				</div>

				<!-- Product 3 -->
				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<div class="product-card">
						<img src="images/product-1.webp" alt="Flower Pots" class="img-fluid">
						<div class="overlay">
							<h5>Flower Pots</h5>
							<p>Colorful, Bright, Joyful</p>
							<a href="products.php" class="btn btn-sm btn-light">Buy Now</a>
						</div>
					</div>
				</div>

				<!-- Product 4 -->
				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<div class="product-card">
						<img src="images/product-6.webp" alt="Sky Shots" class="img-fluid">
						<div class="overlay">
							<h5>Sky Shots</h5>
							<p>High, Loud, Flash</p>
							<a href="products.php" class="btn btn-sm btn-light">Buy Now</a>
						</div>
					</div>
				</div>

				<!-- Product 5 -->
				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<div class="product-card">
						<img src="images/product-3.webp" alt="Rockets" class="img-fluid">
						<div class="overlay">
							<h5>Rockets</h5>
							<p>Fast, Bright, Boom</p>
							<a href="products.php" class="btn btn-sm btn-light">Buy Now</a>
						</div>
					</div>
				</div>

				<!-- Product 6 -->
				<div class="col-lg-4 col-md-6 col-12 mb-4">
					<div class="product-card">
						<img src="images/product-5.webp" alt="Sparklers" class="img-fluid">
						<div class="overlay">
							<h5>Sparklers</h5>
							<p>Shiny, Safe, Kids</p>
							<a href="products.php" class="btn btn-sm btn-light">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- index brands -->
	<section class="brands-content py-5">
		<div class="container">
			<div class="text-center mb-4">
				<h2 class="heading1 arial brands-heading">Our Brands</h2>
			</div>
			<div class="swiper brands-swiper">
				<div class="swiper-wrapper">
					<!-- Repeat this block for each brand -->
					<div class="swiper-slide ">
						<div class="brand-slide">
							<img src="images/brand-1.webp" class="img-fluid" alt="Brand 1">
						</div>
					</div>
					<div class="swiper-slide ">
						<div class="brand-slide">
							<img src="images/brand-2.webp" class="img-fluid" alt="Brand 2">
						</div>
					</div>
					<div class="swiper-slide ">
						<div class="brand-slide">
							<img src="images/brand-3.webp" class="img-fluid" alt="Brand 3">
						</div>
					</div>
					<div class="swiper-slide ">
						<div class="brand-slide">
							<img src="images/brand-4.webp" class="img-fluid" alt="Brand 4">
						</div>
					</div>
					<div class="swiper-slide ">
						<div class="brand-slide">
							<img src="images/brand-5.webp" class="img-fluid" alt="Brand 5">
						</div>
					</div>
					<div class="swiper-slide ">
						<div class="brand-slide">
							<img src="images/brand-6.webp" class="img-fluid" alt="Brand 6">
						</div>
					</div>
					<div class="swiper-slide ">
						<div class="brand-slide">
							<img src="images/brand-7.webp" class="img-fluid" alt="Brand 7">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- parallax -->
	<section class="parallax-section wow fadeInUp overflow-hidden" data-wow-delay="1.5s">
		<div class="parallax1">
			<div class="container pad">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="parallax-text wow zoomIn mix-font">
							<p>
								<i class="bi bi-quote"></i> Celebrate the Festival of Lights with our finest range of
								fireworks from Demo Traders. <i class="bi bi-quote"></i>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- specialities -->
	<section class="specialities-content py-5 bg-white wow fadeInUp overflow-hidden" data-wow-delay="1.5s">
		<div class="container pad">
			<div class="row">
				<div class="col-12 text-center mb-4">
					<h2 class="heading1 arial specialities-heading text-danger">Why Choose Us</h2>
					<p class="helvetica text-muted">
						Fireworks that are crafted with care, innovation, and your celebration in mind.
					</p>
				</div>

				<div class="col-lg-4 col-md-6 col-12 my-2">
					<div class="card card1 hvr-glow">
						<div class="card-body text-center">
							<div class="icon-box mb-3">
								<i class="bi bi-exclamation-triangle-fill text-pink display-4"></i>
							</div>
							<h3 class="arial mb-2">Unmatched Safety</h3>
							<p class="helvetica">We strictly follow safety protocols so you can enjoy with peace of
								mind.</p>
							<a href="#" class="theme-btn hvr-shutter-out-horizontal mt-3">Learn More</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-12 my-2">
					<div class="card card1 hvr-glow">
						<div class="card-body text-center">
							<div class="icon-box mb-3">
								<i class="bi bi-rocket-takeoff-fill display-4 text-pink"></i>
							</div>
							<h3 class="arial mb-2">Innovative Designs</h3>
							<p class="helvetica">Creative patterns and effects that light up every celebration.</p>
							<a href="#" class="theme-btn hvr-shutter-out-horizontal mt-3">Learn More</a>
						</div>
					</div>
				</div>

				<div class="col-md-3 d-block d-lg-none"></div>

				<div class="col-lg-4 col-md-6 col-12 my-2">
					<div class="card card1 hvr-glow">
						<div class="card-body text-center">
							<div class="icon-box mb-3">
								<i class="bi bi-award-fill text-pink display-4"></i>
							</div>
							<h3 class="arial mb-2">Exceptional Service</h3>
							<p class="helvetica">We're here for you with a smile, from order to delivery and beyond.</p>
							<a href="#" class="theme-btn hvr-shutter-out-horizontal mt-3">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- index cta -->
	<section class="index-cta-section wow fadeInUp">
		<div class="container text-center">
			<h2 class="cta-heading">Ready to Light Up Your Diwali?</h2>
			<p class="cta-subheading">Grab the best fireworks deals from Demo Trader's crackers now!</p>
			<a href="products.php" class="cta-button">Shop Now</a>
		</div>
	</section>
	<!-- last white section -->
	<!-- Seasonal Packages Section -->
	<!-- Seasonal Packages Section -->
	<section class="seasonal-section py-5">
		<div class="container">
			<div class="section-header text-center mb-5">
				<h2 class="section-title">Seasonal Packages</h2>
				<p class="section-subtitle">Specially curated fireworks collections for every celebration</p>
			</div>

			<div class="row">
				<!-- Wedding Package -->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="package-card">
						<div class="card-image">
							<img src="images/wedding.webp" alt="Wedding Celebration Package">
						</div>
						<div class="card-overlay"></div>
						<div class="card-content">
							<div class="card-header">
								<h3 class="card-title">Wedding Pack</h3>
								<p class="card-subtitle">Celebrate Love</p>
							</div>
							<div class="card-body">
								<p>Make your special day magical with elegant fountains, sparklers, and quiet aerial
									displays.</p>
								<ul class="package-features">
									<li>25 Heart Sparklers</li>
									<li>3 Silver Fountains</li>
									<li>1 Multi-shot Cake</li>
									<li>10 Color Smoke Bombs</li>
								</ul>
							</div>
							<div class="card-footer">
								<a href="products.php" class="btn-view">View Package</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Birthday Package -->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="package-card">
						<div class="card-image">
							<img src="images/birthday.webp" alt="Birthday Celebration Package">
						</div>
						<div class="card-overlay"></div>
						<div class="card-content">
							<div class="card-header">
								<h3 class="card-title">Birthday Pack</h3>
								<p class="card-subtitle">Birthday Blaze</p>
							</div>
							<div class="card-body">
								<p>Perfect for birthday celebrations with colorful, child-friendly options.</p>
								<ul class="package-features">
									<li>40 Colored Sparklers</li>
									<li>2 Fountain Cones</li>
									<li>5 Small Aerial Shells</li>
									<li>3 Novelty Items</li>
								</ul>
							</div>
							<div class="card-footer">
								<a href="products.php" class="btn-view">View Package</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Festival Package -->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="package-card">
						<div class="card-image">
							<img src="images/festival.webp" alt="Festival Package">
						</div>
						<div class="card-overlay"></div>
						<div class="card-content">
							<div class="card-header">
								<h3 class="card-title">Festival Pack</h3>
								<p class="card-subtitle">Festive Lights</p>
							</div>
							<div class="card-body">
								<p>Ring in the new year with this spectacular collection of premium displays.</p>
								<ul class="package-features">
									<li>1 Professional Finale Box</li>
									<li>3 Multi-shot Cakes</li>
									<li>24 Rockets Assortment</li>
									<li>50 Premium Sparklers</li>
								</ul>
							</div>
							<div class="card-footer">
								<a href="products.php" class="btn-view">View Package</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Custom Package -->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="package-card">
						<div class="card-image">
							<img src="images/custom.webp" alt="Custom Package">
						</div>
						<div class="card-overlay"></div>
						<div class="card-content">
							<div class="card-header">
								<h3 class="card-title">Custom Pack</h3>
								<p class="card-subtitle">Make Your wish</p>
							</div>
							<div class="card-body">
								<p>Create your own perfect package tailored to your event.</p>
								<ul class="package-features">
									<li>Pick your favorites</li>
									<li>Set your budget</li>
									<li>Choose effects</li>
									<li>Professional advice</li>
								</ul>
							</div>
							<div class="card-footer">
								<a href="products.php" class="btn-view">View Package</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="text-center mt-5">
				<a href="contact.php" class="btn-contact">Contact Us For Special Requirements</a>
			</div>
		</div>
	</section>






	<?php include_once "footer.php"; ?>
	<div class="fixed point w0">
		<a href="https://api.whatsapp.com/send?phone=91">
			<img src="images/whatsappicon.png" class="priceicn float-left" alt="" title="">
		</a>
	</div>
	<div class="fixed point1 w0 d-none d-lg-block">
		<span class="time-of-year">
			<img src="images/callicon.png" class="priceicn float-left" alt="" title="">
			<div class="tooltip text-white carter text-center"> For More Details Call <br>
				<i class="fa fa-phone text-white"></i> +91
			</div>
		</span>
	</div>
	<div class="fixed point1 w0 d-lg-none">
		<a href="tel:+91">
			<img src="images/callicon.png" class="priceicn float-left" alt="" title="">
		</a>
	</div>
	<div class="fixed point2">
		<a href="products.php">
			<img src="images/quickpurchase.png" class="priceicn2 float-right blink" alt="" title="">
		</a>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/swiper-bundle.min.js"></script>
	<script src="js/wow.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="js/script.js"></script>
</body>

</html>