<!DOCTYPE html>
<html lang="zxx">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<title>Alchemists Basketball Club &amp; Sports News HTML Template - Roster V1</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sports Club, League and News HTML Template">
	<meta name="author" content="Dan Fisher">
	<meta name="keywords" content="sports club news HTML template">

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="assets/images/basketball/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/images/basketball/favicons/favicon-120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/basketball/favicons/favicon-152.png">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

	<!-- Google Web Fonts
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,700" rel="stylesheet">

	<!-- CSS
	================================================== -->
	<!-- Vendor CSS -->
	<link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/fonts/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	<link href="assets/vendor/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
	<link href="assets/vendor/slick/slick.css" rel="stylesheet">

	<!-- Template CSS-->
	<link href="assets/css/style-basketball.css" rel="stylesheet">

	<!-- Custom CSS-->
	<link href="assets/css/custom.css" rel="stylesheet">

</head>
<body class="template-basketball">

	<div class="site-wrapper clearfix">
		<div class="site-overlay"></div>

		<!-- Header
		================================================== -->
		
		<!-- Header Mobile -->
		<div class="header-mobile clearfix" id="header-mobile">
			<div class="header-mobile__logo">
				<a href="index.html"><img src="assets/images/logo.png" srcset="assets/images/logo@2x.png 2x" alt="Alchemists" class="header-mobile__logo-img"></a>
			</div>
			<div class="header-mobile__inner">
				<a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
				<span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
			</div>
		</div>
		
		<!-- Header Desktop -->
		<header class="header">
		
			<!-- Header Top Bar -->
			<div class="header__top-bar clearfix">
				<div class="container">
		
					<!-- Account Navigation -->
					<ul class="nav-account">
						<li class="nav-account__item"><a href="#" data-toggle="modal" data-target="#modal-login-register">Your Account</a></li>
						<li class="nav-account__item nav-account__item--wishlist"><a href="shop-wishlist.html">Wishlist <span class="highlight">8</span></a></li>
						<li class="nav-account__item"><a href="#">Currency: <span class="highlight">USD</span></a>
							<ul class="main-nav__sub">
								<li><a href="#">USD</a></li>
								<li><a href="#">EUR</a></li>
								<li><a href="#">GBP</a></li>
							</ul>
						</li>
						<li class="nav-account__item"><a href="#">Language: <span class="highlight">EN</span></a>
							<ul class="main-nav__sub">
								<li><a href="#">English</a></li>
								<li><a href="#">Spanish</a></li>
								<li><a href="#">French</a></li>
								<li><a href="#">German</a></li>
							</ul>
						</li>
						<li class="nav-account__item nav-account__item--logout"><a href="#">Logout</a></li>
					</ul>
					<!-- Account Navigation / End -->
		
				</div>
			</div>
			<!-- Header Top Bar / End -->
		
			<!-- Header Secondary -->
			<div class="header__secondary">
				<div class="container">
		
					<!-- Header Search Form -->
					<div class="header-search-form">
						<form action="#" id="mobile-search-form" class="search-form">
							<input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your search here...">
							<button type="submit" class="header-mobile__search-submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- Header Search Form / End -->
		
					<ul class="info-block info-block--header">
						<li class="info-block__item info-block__item--contact-primary">
							<svg role="img" class="df-icon df-icon--jersey">
								<use xlink:href="assets/images/icons-basket.svg#jersey"/>
							</svg>
							<h6 class="info-block__heading">Join Our Team!</h6>
							<a class="info-block__link" href="mailto:tryouts@alchemists.com">tryouts@alchemists.com</a>
						</li>
						<li class="info-block__item info-block__item--contact-secondary">
							<svg role="img" class="df-icon df-icon--basketball">
								<use xlink:href="assets/images/icons-basket.svg#basketball"/>
							</svg>
							<h6 class="info-block__heading">Contact Us</h6>
							<a class="info-block__link" href="mailto:info@alchemists.com">info@alchemists.com</a>
						</li>
						<li class="info-block__item info-block__item--shopping-cart">
							<a href="#" class="info-block__link-wrapper">
								<div class="df-icon-stack df-icon-stack--bag">
									<svg role="img" class="df-icon df-icon--bag">
										<use xlink:href="assets/images/icons-basket.svg#bag"/>
									</svg>
									<svg role="img" class="df-icon df-icon--bag-handle">
										<use xlink:href="assets/images/icons-basket.svg#bag-handle"/>
									</svg>
								</div>
								<h6 class="info-block__heading">Your Bag (8 items)</h6>
								<span class="info-block__cart-sum">$256,30</span>
							</a>
		
							<!-- Dropdown Shopping Cart -->
							<ul class="header-cart">
		
								<li class="header-cart__item">
									<figure class="header-cart__product-thumb">
										<a href="shop-product.html">
											<img src="assets/images/samples/cart-sm-1.jpg" alt="">
										</a>
									</figure>
									<div class="header-cart__inner">
										<span class="header-cart__product-cat">Sneakers</span>
										<h5 class="header-cart__product-name"><a href="shop-product.html">Sundown Sneaker</a></h5>
										<div class="header-cart__product-ratings">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star empty"></i>
										</div>
										<div class="header-cart__product-sum">
											<span class="header-cart__product-price">$28.00</span> x <span class="header-cart__product-count">2</span>
										</div>
										<div class="fa fa-times header-cart__close"></div>
									</div>
								</li>
								<li class="header-cart__item">
									<figure class="header-cart__product-thumb">
										<a href="shop-product.html">
											<img src="assets/images/samples/cart-sm-2.jpg" alt="">
										</a>
									</figure>
									<div class="header-cart__inner">
										<span class="header-cart__product-cat">Sneakers</span>
										<h5 class="header-cart__product-name"><a href="shop-product.html">Atlantik Sneaker</a></h5>
										<div class="header-cart__product-ratings">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="header-cart__product-sum">
											<span class="header-cart__product-price">$30.00</span> x <span class="header-cart__product-count">4</span>
										</div>
										<div class="fa fa-times header-cart__close"></div>
									</div>
								</li>
								<li class="header-cart__item">
									<figure class="header-cart__product-thumb">
										<a href="shop-product.html">
											<img src="assets/images/samples/cart-sm-3.jpg" alt="">
										</a>
									</figure>
									<div class="header-cart__inner">
										<span class="header-cart__product-cat">Sneakers</span>
										<h5 class="header-cart__product-name"><a href="shop-product.html">Aquarium Sneaker</a></h5>
										<div class="header-cart__product-ratings">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star empty"></i>
											<i class="fa fa-star empty"></i>
										</div>
										<div class="header-cart__product-sum">
											<span class="header-cart__product-price">$28.00</span> x <span class="header-cart__product-count">1</span>
										</div>
										<div class="fa fa-times header-cart__close"></div>
									</div>
								</li>
		
								<li class="header-cart__item header-cart__item--subtotal">
									<span class="header-cart__subtotal">Cart Subtotal</span>
									<span class="header-cart__subtotal-sum">$282.00</span>
								</li>
								<li class="header-cart__item header-cart__item--action">
									<a href="shop-cart.html" class="btn btn-default btn-block">Go to Cart</a>
									<a href="shop-checkout.html" class="btn btn-primary-inverse btn-block">Checkout</a>
								</li>
							</ul>
							<!-- Dropdown Shopping Cart / End -->
		
						</li>
					</ul>
				</div>
			</div>
			<!-- Header Secondary / End -->
		
			<!-- Header Primary -->
			<div class="header__primary">
				<div class="container">
					<div class="header__primary-inner">
						<!-- Header Logo -->
						<div class="header-logo">
							<a href="index.html"><img src="assets/images/logo.png" alt="Alchemists" srcset="assets/images/logo@2x.png 2x" class="header-logo__img"></a>
						</div>
						<!-- Header Logo / End -->
		
						<!-- Main Navigation -->
						<nav class="main-nav clearfix">
							<ul class="main-nav__list">
								<li class=""><a href="index.html">Home</a>
									<ul class="main-nav__sub">
										<li class=""><a href="index.html">Home - version 1</a></li>
										<li class=""><a href="index-2.html">Home - version 2</a></li>
										<li class=""><a href="index-3.html">Home - version 3</a></li>
									</ul>
								</li>
								<li class=""><a href="#">Features</a>
									<div class="main-nav__megamenu clearfix">
										<ul class="col-lg-2 col-md-3 col-12 main-nav__ul">
											<li class="main-nav__title">Features</li>
											<li><a href="features-shortcodes.html">Shortcodes</a></li>
											<li><a href="features-typography.html">Typography</a></li>
											<li><a href="features-widgets-blog.html">Widgets - Blog</a></li>
											<li><a href="features-widgets-shop.html">Widgets - Shop</a></li>
											<li><a href="features-widgets-sports.html">Widgets - Sports</a></li>
											<li><a href="features-404.html">404 Error Page</a></li>
											<li><a href="features-search-results.html">Search Results</a></li>
											<li><a href="page-contacts.html">Contact Us</a></li>
										</ul>
										<ul class="col-lg-2 col-md-3 col-12 main-nav__ul">
											<li class="main-nav__title">Main Features</li>
											<li><a href="team-overview.html">Team Overview</a></li>
											<li><a href="team-roster-2.html">Team Roster</a></li>
											<li><a href="staff-single.html">Staff Member</a></li>
											<li><a href="shop-list.html">Shop Page V1</a></li>
											<li><a href="shop-grid.html">Shop Page V2</a></li>
											<li><a href="shop-cart.html">Shopping Cart</a></li>
											<li><a href="shop-wishlist.html">Wishlist</a></li>
											<li><a href="shop-checkout.html">Checkout</a></li>
										</ul>
										<div class="col-lg-4 col-md-3 col-12">
		
											<div class="posts posts--simple-list posts--simple-list--lg">
												<div class="posts__item posts__item--category-1">
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
														<time datetime="2017-08-23" class="posts__date">August 23rd, 2017</time>
														<div class="posts__excerpt">
															Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
														</div>
													</div>
													<div class="posts__footer card__footer">
														<div class="post-author">
															<figure class="post-author__avatar">
																<img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
															</figure>
															<div class="post-author__info">
																<h4 class="post-author__name">James Spiegel</h4>
															</div>
														</div>
														<ul class="post__meta meta">
															<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
															<li class="meta__item meta__item--comments"><a href="#">18</a></li>
														</ul>
													</div>
												</div>
											</div>
		
										</div>
										<div class="col-lg-4 col-md-3 col-12">
											<ul class="posts posts--simple-list">
												<li class="posts__item posts__item--category-1">
													<figure class="posts__thumb">
														<a href="#"><img src="assets/images/samples/post-img3-xs.jpg" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
														<time datetime="2016-08-21" class="posts__date">August 21st, 2016</time>
													</div>
												</li>
												<li class="posts__item posts__item--category-2">
													<figure class="posts__thumb">
														<a href="#"><img src="assets/images/samples/post-img1-xs.jpg" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">Injuries</span>
														</div>
														<h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
														<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
													</div>
												</li>
												<li class="posts__item posts__item--category-1">
													<figure class="posts__thumb">
														<a href="#"><img src="assets/images/samples/post-img4-xs.jpg" alt=""></a>
													</figure>
													<div class="posts__inner">
														<div class="posts__cat">
															<span class="label posts__cat-label">The Team</span>
														</div>
														<h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
														<time datetime="2016-08-21" class="posts__date">August 21st, 2016</time>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="active"><a href="#">The Team</a>
									<ul class="main-nav__sub">
										<li><a href="team-overview.html">Overview</a></li>
										<li><a href="team-roster-2.html">Roster</a>
											<ul class="main-nav__sub-2">
												<li><a href="team-roster-1.html">Roster - 1</a></li>
												<li><a href="team-roster-2.html">Roster - 2</a></li>
												<li><a href="team-roster-3.html">Roster - 3 &nbsp; <span class="label label-danger">New</span></a></li>
											</ul>
										</li>
										<li><a href="team-standings.html">Standings</a></li>
										<li><a href="team-last-results.html">Latest Results</a></li>
										<li><a href="team-schedule.html">Schedule</a></li>
										<li><a href="team-gallery.html">Gallery</a>
											<ul class="main-nav__sub-2">
												<li><a href="team-gallery-album.html">Single Album</a></li>
											</ul>
										</li>
										<li><a href="player-overview.html">Player Pages</a>
											<ul class="main-nav__sub-2">
												<li><a href="player-overview.html">Overview</a></li>
												<li><a href="player-stats.html">Full Statistics</a></li>
												<li><a href="player-bio.html">Biography</a></li>
												<li><a href="player-news.html">Related News</a></li>
												<li><a href="player-gallery.html">Gallery</a></li>
											</ul>
										</li>
										<li><a href="staff-single.html">Staff Member</a></li>
									</ul>
								</li>
								<li class=""><a href="#">News</a>
									<ul class="main-nav__sub">
										<li class=""><a href="blog-1.html">News - version 1</a></li>
										<li class=""><a href="blog-2.html">News - version 2</a></li>
										<li class=""><a href="blog-3.html">News - version 3</a></li>
										<li class=""><a href="blog-4.html">News - version 4</a></li>
										<li><a href="#">Post</a>
											<ul class="main-nav__sub-2">
												<li><a href="blog-post-1.html">Single Post - version 1</a></li>
												<li><a href="blog-post-2.html">Single Post - version 2</a></li>
												<li><a href="blog-post-3.html">Single Post - version 3</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class=""><a href="shop-grid.html">Shop</a>
									<ul class="main-nav__sub">
										<li class=""><a href="shop-grid.html">Shop - Grid</a></li>
										<li class=""><a href="shop-list.html">Shop - List</a></li>
										<li class=""><a href="shop-fullwidth.html">Shop - Full Width</a></li>
										<li class=""><a href="shop-product.html">Single Product</a></li>
										<li class=""><a href="shop-cart.html">Shopping Cart</a></li>
										<li class=""><a href="shop-checkout.html">Checkout</a></li>
										<li class=""><a href="shop-wishlist.html">Wishlist</a></li>
										<li class=""><a href="shop-login.html">Login</a></li>
										<li class=""><a href="shop-account.html">Account</a></li>
									</ul>
								</li>
							</ul>
		
							<!-- Social Links -->
							<ul class="social-links social-links--inline social-links--main-nav">
		
								<li class="social-links__item">
									<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa fa-facebook"></i></a>
								</li>
								<li class="social-links__item">
									<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa fa-twitter"></i></a>
								</li>
								<li class="social-links__item">
									<a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa fa-google-plus"></i></a>
								</li>
		
							</ul>
							<!-- Social Links / End -->
		
							<!-- Pushy Panel Toggle -->
							<a href="#" class="pushy-panel__toggle">
								<span class="pushy-panel__line"></span>
							</a>
							<!-- Pushy Panel Toggle / Eng -->
						</nav>
						<!-- Main Navigation / End -->
					</div>
				</div>
			</div>
			<!-- Header Primary / End -->
		
		</header>
		<!-- Header / End -->
		
		<!-- Pushy Panel -->
		<aside class="pushy-panel ">
			<div class="pushy-panel__inner">
				<header class="pushy-panel__header">
					<div class="pushy-panel__logo">
						<a href="index.html"><img src="assets/images/logo.png" srcset="assets/images/logo@2x.png 2x" alt="Alchemists"></a>
					</div>
				</header>
				<div class="pushy-panel__content">
		
					<!-- Widget: Posts -->
					<aside class="widget widget--side-panel">
						<div class="widget__content">
							<ul class="posts posts--simple-list posts--simple-list--lg">
								<li class="posts__item posts__item--category-1">
									<div class="posts__inner">
										<div class="posts__cat">
											<span class="label posts__cat-label">The Team</span>
										</div>
										<h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
										<time datetime="2017-08-23" class="posts__date">August 23rd, 2018</time>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">James Spiegel</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</li>
								<li class="posts__item posts__item--category-2">
									<div class="posts__inner">
										<div class="posts__cat">
											<span class="label posts__cat-label">Injuries</span>
										</div>
										<h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
										<time datetime="2017-08-23" class="posts__date">August 23rd, 2018</time>
										<div class="posts__excerpt">
											Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
										</div>
									</div>
									<footer class="posts__footer card__footer">
										<div class="post-author">
											<figure class="post-author__avatar">
												<img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
											</figure>
											<div class="post-author__info">
												<h4 class="post-author__name">Jessica Hoops</h4>
											</div>
										</div>
										<ul class="post__meta meta">
											<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
											<li class="meta__item meta__item--comments"><a href="#">18</a></li>
										</ul>
									</footer>
								</li>
							</ul>
						</div>
					</aside>
					<!-- Widget: Posts / End -->
		
					<!-- Widget: Tag Cloud -->
					<aside class="widget widget--side-panel widget-tagcloud">
						<div class="widget__title">
							<h4>Tag Cloud</h4>
						</div>
						<div class="widget__content">
							<div class="tagcloud">
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYOFFS</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">ALCHEMISTS</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INJURIES</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">TEAM</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INCORPORATIONS</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">UNIFORMS</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">CHAMPIONS</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PROFESSIONAL</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">COACH</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">STADIUM</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">NEWS</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYERS</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">WOMEN DIVISION</a>
								<a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">AWARDS</a>
							</div>
						</div>
					</aside>
					<!-- Widget: Tag Cloud / End -->
		
					<!-- Widget: Banner -->
					<aside class="widget widget--side-panel widget-banner">
						<div class="widget__content">
							<figure class="widget-banner__img">
								<a href="#"><img src="assets/images/samples/banner.jpg" alt="Banner"></a>
							</figure>
						</div>
					</aside>
					<!-- Widget: Banner / End -->
		
				</div>
				<a href="#" class="pushy-panel__back-btn"></a>
			</div>
		</aside>
		<!-- Pushy Panel / End -->

		<!-- Page Heading
		================================================== -->
		<div class="page-heading">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<h1 class="page-heading__title">Roster <span class="highlight">V1</span></h1>
						<ol class="page-heading__breadcrumb breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item"><a href="team-overview.html">Team</a></li>
							<li class="breadcrumb-item active" aria-current="page">Roster V1</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Page Heading / End -->
		

		
		<!-- Team Pages Filter -->
		<nav class="content-filter">
			<div class="container">
				<a href="#" class="content-filter__toggle"></a>
				<ul class="content-filter__list">
					<li class="content-filter__item "><a href="team-overview.html" class="content-filter__link"><small>The Team</small>Overview</a></li>
					<li class="content-filter__item content-filter__item--active"><a href="team-roster-1.html" class="content-filter__link"><small>The Team</small>Roster</a></li>
					<li class="content-filter__item "><a href="team-standings.html" class="content-filter__link"><small>The Team</small>Standings</a></li>
					<li class="content-filter__item "><a href="team-last-results.html" class="content-filter__link"><small>The Team</small>Latest Results</a></li>
					<li class="content-filter__item "><a href="team-schedule.html" class="content-filter__link"><small>The Team</small>Schedule</a></li>
					<li class="content-filter__item "><a href="team-gallery.html" class="content-filter__link"><small>The Team</small>Gallery</a></li>
				</ul>
			</div>
		</nav>
		<!-- Team Pages Filter / End -->
		
		<!-- Content
		================================================== -->
		<div class="site-content">
			<div class="container">
		
				<!-- Team Roster: Grid -->
				<div class="team-roster team-roster--grid row">
					<div class="team-roster__item col-6 col-sm-4">
						<div class="team-roster__holder">
							<figure class="team-roster__img">
								<img src="assets/images/samples/aleksa_kojovic.jpg" alt="" style="max-width:100%;max-height:100%;">
							</figure>
							<div class="team-roster__content">
								<div class="team-roster__content-inner">
									<div class="team-roster__member-number">38</div>
									<div class="team-roster__member-info">
										<h2 class="team-roster__member-name">
											<span class="team-roster__member-first-name">James</span>
											<span class="team-roster__member-last-name">Girobili</span>
										</h2>
										<span class="team-roster__member-position">1st Shooting Guard</span>
									</div>
								</div>
							</div>
							<a href="player-overview.html" class="btn-fab"></a>
						</div>
					</div>
					<div class="team-roster__item col-6 col-sm-4">
						<div class="team-roster__holder">
							<figure class="team-roster__img">
								<img src="assets/images/samples/rsz_aleksa_kojovic.jpg" alt="">
							</figure>
							<div class="team-roster__content">
								<div class="team-roster__content-inner">
									<div class="team-roster__member-number">24</div>
									<div class="team-roster__member-info">
										<h2 class="team-roster__member-name">
											<span class="team-roster__member-first-name">Mark</span>
											<span class="team-roster__member-last-name">Stevens</span>
										</h2>
										<span class="team-roster__member-position">1st Power Forward</span>
									</div>
								</div>
							</div>
							<a href="player-overview.html" class="btn-fab"></a>
						</div>
					</div>
					<div class="team-roster__item col-6 col-sm-4">
						<div class="team-roster__holder">
							<figure class="team-roster__img">
								<img src="assets/images/samples/DSC_0395.jpg" alt="">
							</figure>
							<div class="team-roster__content">
								<div class="team-roster__content-inner">
									<div class="team-roster__member-number">07</div>
									<div class="team-roster__member-info">
										<h2 class="team-roster__member-name">
											<span class="team-roster__member-first-name">Jenny</span>
											<span class="team-roster__member-last-name">Valentine</span>
										</h2>
										<span class="team-roster__member-position">1st Small Forward</span>
									</div>
								</div>
							</div>
							<a href="player-overview.html" class="btn-fab"></a>
						</div>
					</div>
					<div class="team-roster__item col-6 col-sm-4">
						<div class="team-roster__holder">
							<figure class="team-roster__img">
								<img src="assets/images/samples/DSC_0391.jpg" alt="">
							</figure>
							<div class="team-roster__content">
								<div class="team-roster__content-inner">
									<div class="team-roster__member-number">11</div>
									<div class="team-roster__member-info">
										<h2 class="team-roster__member-name">
											<span class="team-roster__member-first-name">Marian</span>
											<span class="team-roster__member-last-name">Diamond</span>
										</h2>
										<span class="team-roster__member-position">1st Center</span>
									</div>
								</div>
							</div>
							<a href="player-overview.html" class="btn-fab"></a>
						</div>
					</div>
					<div class="team-roster__item col-6 col-sm-4">
						<div class="team-roster__holder">
							<figure class="team-roster__img">
								<img src="assets/images/samples/predrag_lazarevic.jpg" alt="">
							</figure>
							<div class="team-roster__content">
								<div class="team-roster__content-inner">
									<div class="team-roster__member-number">15</div>
									<div class="team-roster__member-info">
										<h2 class="team-roster__member-name">
											<span class="team-roster__member-first-name">Nick</span>
											<span class="team-roster__member-last-name">Rodgers</span>
										</h2>
										<span class="team-roster__member-position">1st Point Guard</span>
									</div>
								</div>
							</div>
							<a href="player-overview.html" class="btn-fab"></a>
						</div>
					</div>
		
					<div class="team-roster__item col-6 col-sm-4">
						<div class="team-roster__holder">
							<figure class="team-roster__img">
								<img src="assets/images/samples/roster_player_06.jpg" alt="">
							</figure>
							<div class="team-roster__content">
								<div class="team-roster__content-inner">
									<div class="team-roster__member-number">CH</div>
									<div class="team-roster__member-info">
										<h2 class="team-roster__member-name">
											<span class="team-roster__member-first-name">Robert</span>
											<span class="team-roster__member-last-name">Frankson</span>
										</h2>
										<span class="team-roster__member-position">Team Coach</span>
									</div>
								</div>
							</div>
							<a href="staff-single.html" class="btn-fab"></a>
						</div>
					</div>
		
				</div>
				<!-- Team Roster: Grid / End -->
		
		
				<div class="row">
					<!-- Team Roster: Table -->
					<div class="col-md-8">
						<div class="card card--has-table">
							<div class="card__header">
								<h4>Complete Roster</h4>
							</div>
							<div class="card__content">
								<div class="table-responsive">
									<table class="table table--lg team-roster-table">
										<thead>
											<tr>
												<th class="team-roster-table__number">NBR</th>
												<th class="team-roster-table__name">Player Name</th>
												<th class="team-roster-table__position hidden-xs hidden-sm">Position</th>
												<th class="team-roster-table__age">Age</th>
												<th class="team-roster-table__height">Height</th>
												<th class="team-roster-table__weight">Weight</th>
												<th class="team-roster-table__college hidden-xs hidden-sm">College</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="team-roster-table__number">38</td>
												<td class="team-roster-table__name">Games Girobili</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">1st Shooting Guard</td>
												<td class="team-roster-table__age">18</td>
												<td class="team-roster-table__height">6&#x27;6&quot;</td>
												<td class="team-roster-table__weight">205 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">South Beach College</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">24</td>
												<td class="team-roster-table__name">Mark Stevens</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">1st Power Forward</td>
												<td class="team-roster-table__age">20</td>
												<td class="team-roster-table__height">6&#x27;8&quot;</td>
												<td class="team-roster-table__weight">220 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">Green Palm College</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">06</td>
												<td class="team-roster-table__name">Jay T.Roks</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">1st Small Forward</td>
												<td class="team-roster-table__age">17</td>
												<td class="team-roster-table__height">6&#x27;10&quot;</td>
												<td class="team-roster-table__weight">234 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">The Sandy Coast Institute</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">15</td>
												<td class="team-roster-table__name">Nick Rodgers</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">1st Point Guard</td>
												<td class="team-roster-table__age">18</td>
												<td class="team-roster-table__height">6&#x27;9&quot;</td>
												<td class="team-roster-table__weight">226 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">South Beach College</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">12</td>
												<td class="team-roster-table__name">Tony Ironson</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">1st Center</td>
												<td class="team-roster-table__age">19</td>
												<td class="team-roster-table__height">6&#x27;7&quot;</td>
												<td class="team-roster-table__weight">240 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">Green Palm College</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">26</td>
												<td class="team-roster-table__name">Thomas Black</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">2nd Shooting Guard</td>
												<td class="team-roster-table__age">18</td>
												<td class="team-roster-table__height">6&#x27;5&quot;</td>
												<td class="team-roster-table__weight">238 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">The Sandy Coast Institute</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">32</td>
												<td class="team-roster-table__name">Spike Arrowhead</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">2nd Power Forward</td>
												<td class="team-roster-table__age">18</td>
												<td class="team-roster-table__height">6&#x27;8&quot;</td>
												<td class="team-roster-table__weight">252 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">The Sandy Coast Institute</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">39</td>
												<td class="team-roster-table__name">Tim Robertson</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">2nd Small Forward</td>
												<td class="team-roster-table__age">20</td>
												<td class="team-roster-table__height">6&#x27;7&quot;</td>
												<td class="team-roster-table__weight">242 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">Green Palm College</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">09</td>
												<td class="team-roster-table__name">Jake Dogmich</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">2nd Point Guard</td>
												<td class="team-roster-table__age">20</td>
												<td class="team-roster-table__height">6&#x27;10&quot;</td>
												<td class="team-roster-table__weight">213 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">Green Palm Beach</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">02</td>
												<td class="team-roster-table__name">Griffin Peterson</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">2nd Center</td>
												<td class="team-roster-table__age">19</td>
												<td class="team-roster-table__height">6&#x27;8&quot;</td>
												<td class="team-roster-table__weight">217 lbs</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">South Beach College</td>
											</tr>
											<tr>
												<td class="team-roster-table__number">CH</td>
												<td class="team-roster-table__name">Robert Frankson</td>
												<td class="team-roster-table__position hidden-xs hidden-sm">Team Coach</td>
												<td class="team-roster-table__age">52</td>
												<td class="team-roster-table__height">-</td>
												<td class="team-roster-table__weight">-</td>
												<td class="team-roster-table__college hidden-xs hidden-sm">Green Palm College</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- Team Roster: Table / End -->
		
					<!-- Featured Player -->
					<div class="col-md-4">
		
						<!-- Widget: Featured Player - Alternative Extended -->
						<aside class="widget card widget--sidebar widget-player widget-player--alt">
							<div class="widget__title card__header">
								<h4>Featured Player</h4>
							</div>
							<div class="widget__content card__content">
								<div class="widget-player__team-logo">
									<img src="assets/images/logo.png" alt="">
								</div>
								<figure class="widget-player__photo">
									<img src="assets/images/samples/widget-featured-player.png" alt="">
								</figure>
								<header class="widget-player__header clearfix">
									<div class="widget-player__number">38</div>
									<h4 class="widget-player__name">
										<span class="widget-player__first-name">James</span>
										<span class="widget-player__last-name">Girobili</span>
									</h4>
								</header>
								<div class="widget-player__content">
									<div class="widget-player__content-inner">
										<div class="widget-player__stat widget-player__assists">
											<h6 class="widget-player__stat-label">Assists</h6>
											<div class="widget-player__stat-number">16.9</div>
											<div class="widget-player__stat-legend">AVG</div>
										</div>
										<div class="widget-player__stat widget-player__steals">
											<h6 class="widget-player__stat-label">Steals</h6>
											<div class="widget-player__stat-number">7.2</div>
											<div class="widget-player__stat-legend">AVG</div>
										</div>
										<div class="widget-player__stat widget-player__blocks">
											<h6 class="widget-player__stat-label">Blocks</h6>
											<div class="widget-player__stat-number">12.4</div>
											<div class="widget-player__stat-legend">AVG</div>
										</div>
									</div>
								</div>
								<footer class="widget-player__footer">
									<span class="widget-player__footer-txt">
										1st Shooting Guard
									</span>
								</footer>
							</div>
							<div class="widget__content-secondary">
						
								<!-- Player Details -->
								<div class="widget-player__details">
						
									<div class="widget-player__details-row">
										<div class="widget-player__details__item">
											<div class="widget-player__details-desc-wrapper">
												<span class="widget-player__details-holder">
													<span class="widget-player__details-label">2 Points</span>
													<span class="widget-player__details-desc">In his career</span>
												</span>
												<span class="widget-player__details-value">1250</span>
											</div>
										</div>
										<div class="widget-player__details__item">
											<div class="widget-player__details-desc-wrapper">
												<span class="widget-player__details-holder">
													<span class="widget-player__details-label">3 Points</span>
													<span class="widget-player__details-desc">In his career</span>
												</span>
												<span class="widget-player__details-value">680</span>
											</div>
										</div>
									</div>
						
									<div class="widget-player__details-row">
										<div class="widget-player__details__item">
											<div class="widget-player__details-desc-wrapper">
												<span class="widget-player__details-holder">
													<span class="widget-player__details-label">Rebounds</span>
													<span class="widget-player__details-desc">In his career</span>
												</span>
												<span class="widget-player__details-value">234</span>
											</div>
										</div>
										<div class="widget-player__details__item">
											<div class="widget-player__details-desc-wrapper">
												<span class="widget-player__details-holder">
													<span class="widget-player__details-label">Assists</span>
													<span class="widget-player__details-desc">In his career</span>
												</span>
												<span class="widget-player__details-value">751</span>
											</div>
										</div>
									</div>
						
									<div class="widget-player__details-row">
										<div class="widget-player__details__item">
											<div class="widget-player__details-desc-wrapper">
												<span class="widget-player__details-holder">
													<span class="widget-player__details-label">Steals</span>
													<span class="widget-player__details-desc">In his career</span>
												</span>
												<span class="widget-player__details-value">472</span>
											</div>
										</div>
										<div class="widget-player__details__item">
											<div class="widget-player__details-desc-wrapper">
												<span class="widget-player__details-holder">
													<span class="widget-player__details-label">Blocks</span>
													<span class="widget-player__details-desc">In his career</span>
												</span>
												<span class="widget-player__details-value">565</span>
											</div>
										</div>
									</div>
						
									<div class="widget-player__details-row">
										<div class="widget-player__details__item">
											<div class="widget-player__details-desc-wrapper">
												<span class="widget-player__details-holder">
													<span class="widget-player__details-label">Fouls</span>
													<span class="widget-player__details-desc">In his career</span>
												</span>
												<span class="widget-player__details-value">97</span>
											</div>
										</div>
										<div class="widget-player__details__item">
											<div class="widget-player__details-desc-wrapper">
												<span class="widget-player__details-holder">
													<span class="widget-player__details-label">Game Played</span>
													<span class="widget-player__details-desc">In his career</span>
												</span>
												<span class="widget-player__details-value">104</span>
											</div>
										</div>
									</div>
						
								</div>
								<!-- Player Details / End -->
						
							</div>
						
							<div class="widget__content-tertiary widget__content--bottom-decor">
								<div class="widget__content-inner">
									<div class="widget-player__stats row">
										<div class="col-4">
											<div class="widget-player__stat-item">
												<div class="widget-player__stat-circular circular">
													<div class="circular__bar" data-percent="88">
														<span class="circular__percents">88<small>%</small></span>
													</div>
													<span class="circular__label">Shot<br> Accuracy</span>
												</div>
											</div>
										</div>
										<div class="col-4">
											<div class="widget-player__stat-item">
												<div class="widget-player__stat-circular circular">
													<div class="circular__bar" data-percent="63">
														<span class="circular__percents">63<small>%</small></span>
													</div>
													<span class="circular__label">Pass<br> Accuracy</span>
												</div>
											</div>
										</div>
										<div class="col-4">
											<div class="widget-player__stat-item">
												<div class="widget-player__stat-circular circular">
													<div class="circular__bar" data-percent="75.5">
														<span class="circular__percents">75.5<small>%</small></span>
													</div>
													<span class="circular__label">Total<br> Efficiency</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<!-- Widget: Featured Player - Alternative Extended / End -->
		
					</div>
					<!-- Featured Player / End -->
				</div>
			</div>
		</div>
		
		<!-- Content / End -->
		

		<!-- Footer
		================================================== -->
		<footer id="footer" class="footer">
		
			<!-- Footer Widgets -->
			<div class="footer-widgets">
				<div class="footer-widgets__inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-3">
								<div class="footer-col-inner">
		
									<!-- Footer Logo -->
									<div class="footer-logo">
										<a href="index.html"><img src="assets/images/logo.png" srcset="assets/images/logo@2x.png 2x" alt="Alchemists" class="footer-logo__img"></a>
									</div>
									<!-- Footer Logo / End -->
		
								</div>
							</div>
							<div class="col-sm-4 col-md-3">
								<div class="footer-col-inner">
									<!-- Widget: Contact Info -->
									<div class="widget widget--footer widget-contact-info">
										<h4 class="widget__title">Contact Info</h4>
										<div class="widget__content">
											<div class="widget-contact-info__desc">
												<p>Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
											</div>
											<div class="widget-contact-info__body info-block">
												<div class="info-block__item">
													<svg role="img" class="df-icon df-icon--basketball">
														<use xlink:href="assets/images/icons-basket.svg#basketball"/>
													</svg>
													<h6 class="info-block__heading">Contact Us</h6>
													<a class="info-block__link" href="mailto:tryouts@alchemists.com">tryouts@alchemists.com</a>
												</div>
												<div class="info-block__item">
													<svg role="img" class="df-icon df-icon--jersey">
														<use xlink:href="assets/images/icons-basket.svg#jersey"/>
													</svg>
													<h6 class="info-block__heading">Join Our Team!</h6>
													<a class="info-block__link" href="mailto:info@alchemists.com">info@alchemists.com</a>
												</div>
												<div class="info-block__item info-block__item--nopadding">
													<ul class="social-links">
		
														<li class="social-links__item">
															<a href="#" class="social-links__link"><i class="fa fa-facebook"></i> Facebook</a>
														</li>
														<li class="social-links__item">
															<a href="#" class="social-links__link"><i class="fa fa-twitter"></i> Twitter</a>
														</li>
														<li class="social-links__item">
															<a href="#" class="social-links__link"><i class="fa fa-google-plus"></i> Google+</a>
														</li>
		
													</ul>
												</div>
											</div>
										</div>
									</div>
									<!-- Widget: Contact Info / End -->
								</div>
							</div>
							<div class="col-sm-4 col-md-3">
								<div class="footer-col-inner">
									<!-- Widget: Popular Posts / End -->
									<div class="widget widget--footer widget-popular-posts">
										<h4 class="widget__title">Popular News</h4>
										<div class="widget__content">
											<ul class="posts posts--simple-list">
		
												<li class="posts__item posts__item--category-2">
													<div class="posts__cat">
														<span class="label posts__cat-label">Injuries</span>
													</div>
													<h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
													<time datetime="2017-08-23" class="posts__date">August 23rd, 2018</time>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__cat">
														<span class="label posts__cat-label">The Team</span>
													</div>
													<h6 class="posts__title"><a href="#">Jay Rorks is only 24 points away from breaking the record</a></h6>
													<time datetime="2017-08-23" class="posts__date">August 22nd, 2018</time>
												</li>
												<li class="posts__item posts__item--category-1">
													<div class="posts__cat">
														<span class="label posts__cat-label">The Team</span>
													</div>
													<h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
													<time datetime="2017-08-23" class="posts__date">June 8th, 2018</time>
												</li>
		
											</ul>
										</div>
									</div>
									<!-- Widget: Popular Posts / End -->
								</div>
							</div>
							<div class="col-sm-4 col-md-3">
								<div class="footer-col-inner">
		
									<!-- Widget: Instagram -->
									<div class="widget widget--footer widget-instagram">
										<h4 class="widget__title">Instagram Widget</h4>
										<div class="widget__content">
											<ul id="instagram-feed" class="widget-instagram__list"></ul>
											<a href="https://www.instagram.com/dan.fisher.dev" class="btn btn-sm btn-instagram btn-icon-right">Follow Our Instagram <i class="icon-arrow-right"></i></a>
										</div>
									</div>
									<!-- Widget: Instagram / End -->
		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Widgets / End -->
		
			<!-- Footer Secondary -->
			<div class="footer-secondary footer-secondary--has-decor">
				<div class="container">
					<div class="footer-secondary__inner">
						<div class="row">
							<div class="col-md-10 offset-md-1">
								<ul class="footer-nav">
		
									<li class="footer-nav__item"><a href="index.html">Home</a></li>
									<li class="footer-nav__item"><a href="features-shortcodes.html">Features</a></li>
									<li class="footer-nav__item"><a href="team-standings.html">Statistics</a></li>
									<li class="footer-nav__item"><a href="team-overview.html">The Team</a></li>
									<li class="footer-nav__item"><a href="blog-3.html">News</a></li>
									<li class="footer-nav__item"><a href="shop-grid.html">Shop</a></li>
		
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Secondary / End -->
		</footer>
		<!-- Footer / End -->
		
		<!-- Login/Register Modal -->
		<div class="modal fade" id="modal-login-register" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg modal--login" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
		
						<div class="modal-account-holder">
							<div class="modal-account__item">
		
								<!-- Register Form -->
								<form action="#" class="modal-form">
									<h5>Register Now!</h5>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter your email address...">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Enter your password...">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Repeat your password...">
									</div>
									<div class="form-group form-group--submit">
										<a href="shop-account.html" class="btn btn-primary btn-block">Create Your Account</a>
									</div>
									<div class="modal-form--note">You’ll receive a confirmation email in your inbox with a link to activate your account. </div>
								</form>
								<!-- Register Form / End -->
		
							</div>
							<div class="modal-account__item">
		
								<!-- Login Form -->
								<form action="#" class="modal-form">
									<h5>Login to your account</h5>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Enter your email address...">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="Enter your password...">
									</div>
									<div class="form-group form-group--pass-reminder">
										<label class="checkbox checkbox-inline">
											<input type="checkbox" id="inlineCheckbox1" value="option1" checked> Remember Me
											<span class="checkbox-indicator"></span>
										</label>
										<a href="#">Forgot your password?</a>
									</div>
									<div class="form-group form-group--submit">
										<a href="shop-account.html" class="btn btn-primary-inverse btn-block">Enter to your account</a>
									</div>
									<div class="modal-form--social">
										<h6>or Login with your social profile:</h6>
										<ul class="social-links social-links--btn text-center">
											<li class="social-links__item">
												<a href="#" class="social-links__link social-links__link--lg social-links__link--fb"><i class="fa fa-facebook"></i></a>
											</li>
											<li class="social-links__item">
												<a href="#" class="social-links__link social-links__link--lg social-links__link--twitter"><i class="fa fa-twitter"></i></a>
											</li>
											<li class="social-links__item">
												<a href="#" class="social-links__link social-links__link--lg social-links__link--gplus"><i class="fa fa-google-plus"></i></a>
											</li>
										</ul>
									</div>
								</form>
								<!-- Login Form / End -->
		
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Login/Register Modal / End -->

	</div>

	<!-- Javascript Files
	================================================== -->
	<!-- Core JS -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="assets/js/core.js"></script>
	
	<!-- Vendor JS -->
	<script src="assets/vendor/twitter/jquery.twitter.js"></script>
	
	<!-- Template JS -->
	<script src="assets/js/init.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>
