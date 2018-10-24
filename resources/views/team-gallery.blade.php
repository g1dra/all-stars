<!DOCTYPE html>
<html lang="zxx">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<title>Alchemists Basketball Club &amp; Sports News HTML Template - Album</title>
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
						<h1 class="page-heading__title">Single <span class="highlight">Album</span></h1>
						<ol class="page-heading__breadcrumb breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item"><a href="team-overview.html">Team</a></li>
							<li class="breadcrumb-item"><a href="team-gallery.html">Gallery</a></li>
							<li class="breadcrumb-item active" aria-current="page">Album</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Page Heading / End -->
		

		
		<!-- Content
		================================================== -->
		<div class="site-content">
		
			<div class="container">
				<div class="content-title">
					<h2 class="content-title__h">Photoshoot for 2017</h2>
					<a href="team-gallery.html" class="btn btn-xs btn-default btn-outline">Go Back to the Albums</a>
				</div>
			</div>
		
			<!-- Album -->
			<div class="album album--condensed container-fluid">
				<div class="row">
					<div class="album__item col-xs-6 col-sm-4">
						<div class="album__item-holder">
							<a href="assets/images/samples/album-img1.jpg" class="album__item-link mp_gallery">
								<figure class="album__thumb">
									<img src="assets/images/samples/album-img1.jpg" alt="">
								</figure>
								<div class="album__item-desc">
									<h4 class="album__item-title">The team is taking a summer vacation on Woody Valley</h4>
									<time class="album__item-date" datetime="2016-08-23">August 23rd, 2016</time>
									<span class="album__item-btn-fab btn-fab btn-fab--clean"></span>
								</div>
							</a>
							<ul class="album__item-meta meta">
								<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
							</ul>
						</div>
					</div>
					<div class="album__item col-xs-6 col-sm-4">
						<div class="album__item-holder">
							<a href="assets/images/samples/album-img2.jpg" class="album__item-link mp_gallery">
								<figure class="album__thumb">
									<img src="assets/images/samples/album-img2.jpg" alt="">
								</figure>
								<div class="album__item-desc">
									<h4 class="album__item-title">Mark Johnson has a Tibia Fracture and is gonna be out</h4>
									<time class="album__item-date" datetime="2016-08-23">August 23rd, 2016</time>
									<span class="album__item-btn-fab btn-fab btn-fab--clean"></span>
								</div>
							</a>
							<ul class="album__item-meta meta">
								<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
							</ul>
						</div>
					</div>
					<div class="album__item col-xs-6 col-sm-4">
						<div class="album__item-holder">
							<a href="assets/images/samples/album-img5.jpg" class="album__item-link mp_gallery">
								<figure class="album__thumb">
									<img src="assets/images/samples/album-img5.jpg" alt="">
								</figure>
								<div class="album__item-desc">
									<h4 class="album__item-title">Cheerleader tryouts will start next Friday at 5pm</h4>
									<time class="album__item-date" datetime="2016-08-23">August 23rd, 2016</time>
									<span class="album__item-btn-fab btn-fab btn-fab--clean"></span>
								</div>
							</a>
							<ul class="album__item-meta meta">
								<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
							</ul>
						</div>
					</div>
					<div class="album__item col-xs-6 col-sm-4">
						<div class="album__item-holder">
							<a href="assets/images/samples/album-img3.jpg" class="album__item-link mp_gallery">
								<figure class="album__thumb">
									<img src="assets/images/samples/album-img3.jpg" alt="">
								</figure>
								<div class="album__item-desc">
									<h4 class="album__item-title">The new eco friendly stadium won a Leafy Award in 2016</h4>
									<time class="album__item-date" datetime="2016-08-23">August 23rd, 2016</time>
									<span class="album__item-btn-fab btn-fab btn-fab--clean"></span>
								</div>
							</a>
							<ul class="album__item-meta meta">
								<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
							</ul>
						</div>
					</div>
					<div class="album__item col-xs-6 col-sm-4">
						<div class="album__item-holder">
							<a href="assets/images/samples/album-img4.jpg" class="album__item-link mp_gallery">
								<figure class="album__thumb">
									<img src="assets/images/samples/album-img4.jpg" alt="">
								</figure>
								<div class="album__item-desc">
									<h4 class="album__item-title">James Girobilli in the charity event in L.A. Beach</h4>
									<time class="album__item-date" datetime="2016-08-23">August 23rd, 2016</time>
									<span class="album__item-btn-fab btn-fab btn-fab--clean"></span>
								</div>
							</a>
							<ul class="album__item-meta meta">
								<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
							</ul>
						</div>
					</div>
					<div class="album__item col-md-8">
						<div class="album__item-holder">
							<a href="assets/images/samples/album-img6.jpg" class="album__item-link mp_gallery">
								<figure class="album__thumb">
									<img src="assets/images/samples/album-img6.jpg" alt="">
								</figure>
								<div class="album__item-desc">
									<h4 class="album__item-title">The Planetrotters will perform this May 4th at Madison Cube</h4>
									<time class="album__item-date" datetime="2016-08-23">August 23rd, 2016</time>
									<span class="album__item-btn-fab btn-fab btn-fab--clean"></span>
								</div>
							</a>
							<ul class="album__item-meta meta">
								<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
							</ul>
						</div>
					</div>
					<div class="album__item col-xs-6 col-sm-4">
						<div class="album__item-holder">
							<a href="assets/images/samples/album-img7.jpg" class="album__item-link mp_gallery">
								<figure class="album__thumb">
									<img src="assets/images/samples/album-img7.jpg" alt="">
								</figure>
								<div class="album__item-desc">
									<h4 class="album__item-title">Jeremy Rittersen was called to be in the National Team</h4>
									<time class="album__item-date" datetime="2016-08-23">August 23rd, 2016</time>
									<span class="album__item-btn-fab btn-fab btn-fab--clean"></span>
								</div>
							</a>
							<ul class="album__item-meta meta">
								<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
							</ul>
						</div>
					</div>
					<div class="album__item col-xs-6 col-sm-4">
						<div class="album__item-holder">
							<a href="assets/images/samples/album-img8.jpg" class="album__item-link mp_gallery">
								<figure class="album__thumb">
									<img src="assets/images/samples/album-img8.jpg" alt="">
								</figure>
								<div class="album__item-desc">
									<h4 class="album__item-title">The team is taking a summer vacation on Woody Valley</h4>
									<time class="album__item-date" datetime="2016-08-23">August 23rd, 2016</time>
									<span class="album__item-btn-fab btn-fab btn-fab--clean"></span>
								</div>
							</a>
							<ul class="album__item-meta meta">
								<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Gallery Album / End -->
		
			<!-- Load More -->
			<div class="container">
				<div class="album-load-more">
					<a href="#" class="btn btn-default btn-lg btn-block">Load More Photos...</a>
				</div>
			</div>
			<!-- Load More / End -->
		
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
