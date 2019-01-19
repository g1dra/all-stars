<!-- Header Mobile -->
<div class="header-mobile clearfix" id="header-mobile">
    <div class="header-mobile__logo">
        <a href="/"><img src="/assets/images/logo_no_bg.png" alt="Alchemists" class="header-mobile__logo-img"></a>
    </div>
    <div class="header-mobile__inner">
        <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
        {{--<span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>--}}
    </div>
</div>

<!-- Header Desktop -->
<header class="header">

    <!-- Header Top Bar -->
    <div class="header__top-bar clearfix">
        <div class="container">

            <!-- Account Navigation -->
            <ul class="nav-account">
                {{--<li class="nav-account__item"><a href="#" data-toggle="modal" data-target="#modal-login-register">Your Account</a></li>
                <li class="nav-account__item nav-account__item--wishlist"><a href="shop-wishlist.html">Wishlist <span class="highlight">8</span></a></li>
                <li class="nav-account__item"><a href="#">Currency: <span class="highlight">USD</span></a>
                    <ul class="main-nav__sub">
                        <li><a href="#">USD</a></li>
                        <li><a href="#">EUR</a></li>
                        <li><a href="#">GBP</a></li>
                    </ul>
                </li>--}}
                {{--<li class="nav-account__item"><a href="#">Language: <span class="highlight">ME</span></a>
                    <ul class="main-nav__sub">
                        --}}{{--<li><a href="#">English</a></li>--}}{{--
                    </ul>
                </li>--}}
                @guest
                    <li class="nav-account__item nav-account__item--logout"><a href="{{ route('login') }}">Login</a></li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth
                {{--<li class="nav-account__item nav-account__item--logout"><a href="{{ route('login') }}">Login</a></li>--}}
            </ul>
            <!-- Account Navigation / End -->

        </div>
    </div>
    <!-- Header Top Bar / End -->

    <!-- Header Secondary -->
    <div class="header__secondary">
        <div class="container">

            <!-- Header Search Form -->
        {{--<div class="header-search-form">
            <form action="#" id="mobile-search-form" class="search-form">
                <input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your search here...">
                <button type="submit" class="header-mobile__search-submit"><i class="fa fa-search"></i></button>
            </form>
        </div>--}}
        <!-- Header Search Form / End -->

            <ul class="info-block info-block--header">
                <li class="info-block__item info-block__item--contact-primary">
                    <svg role="img" class="df-icon df-icon--jersey">
                        <use xlink:href="/assets/images/icons-basket.svg#jersey"/>
                    </svg>
                    <h6 class="info-block__heading">Priključi se!</h6>
                    <a class="info-block__link" href="mailto:k.k.allstars02@gmail.com">k.k.allstars02@gmail.com</a>
                </li>
                <li class="info-block__item info-block__item--contact-secondary">
                    <svg role="img" class="df-icon df-icon--basketball">
                        <use xlink:href="/assets/images/icons-basket.svg#basketball"/>
                    </svg>
                    <h6 class="info-block__heading">Kontakt</h6>
                    <a class="info-block__link" href="mailto:k.k.allstars02@gmail.com">k.k.allstars02@gmail.com</a>
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
                    <a href="/"><img src="/assets/images/logo_no_bg.png" alt="All stars" srcset="/assets/images/logo_no_bg.png" class="header-logo__img"></a>
                </div>
                <!-- Header Logo / End -->

                <!-- Main Navigation -->
                <nav class="main-nav clearfix">
                    <ul class="main-nav__list">
                        <li class="{{ Request::is("/") ? 'active': ''}}">
                            <a href="/">Novosti</a>
                           {{-- <ul class="main-nav__sub">
                                <li class=""><a href="/"> Vijesti</a></li>
                                <li class=""><a href="/"> Aktuelno</a></li>
                            </ul>--}}
                        </li>
                        <li class=""><a href="#">Klub</a>
                            <ul class="main-nav__sub">
                                <li class="{{ Request::is("/staff") ? 'active': ''}}">
                                    <a href="{{ route('staff') }}">Uprava</a>
                                </li>
                                <li class="{{ Request::is("/history") ? 'active': ''}}">
                                    <a href="{{ route('history') }}">Istorija</a>
                                </li>
                                <li class="{{ Request::is("/team") ? 'active': ''}}">
                                    <a href="{{ route('team') }}">Roster</a></li>
                                <li><a href="#">Mladje katergorije</a></li>
                                {{--<li><a href="team-last-results.html">Latest Results</a></li>
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
                                <li><a href="staff-single.html">Staff Member</a></li>--}}
                            </ul>
                            {{--<div class="main-nav__megamenu clearfix">
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
                            --}}
                        </li>
                        <li class=""><a href="#">Takmičenja</a>
                            <ul class="main-nav__sub">
                                <li class="{{ Request::is("/mckl") ? 'active': ''}}">
                                    <a href="{{ route('mckl') }}">I B MCKL</a>
                                </li>
                                <li><a href="#">Juniorska liga</a></li>
                                {{--<li><a href="team-standings.html">Standings</a></li>
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
                                <li><a href="staff-single.html">Staff Member</a></li>--}}
                            </ul>
                        </li>
                        <li class="{{ Request::is("/grid") ? 'active': ''}}">
                            <a href="{{ route('teamGrid') }}">Galerija</a>
                            <ul class="main-nav__sub">
                                <li class=""><a href="{{ route('teamGrid') }}">Tim</a></li>
                                <li class=""><a href="{{ route('album.index') }}">Foto Galerija</a></li>
                                <li class=""><a href="{{ route('video-gallery') }}">Video Galerija</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is("contact") ? 'active': ''}}">
                            <a href="{{ route('contact') }}">Kontakt</a>
                            {{--<ul class="main-nav__sub">
                                <li class=""><a href="shop-grid.html">Shop - Grid</a></li>
                                <li class=""><a href="shop-list.html">Shop - List</a></li>
                                <li class=""><a href="shop-fullwidth.html">Shop - Full Width</a></li>
                                <li class=""><a href="shop-product.html">Single Product</a></li>
                                <li class=""><a href="shop-cart.html">Shopping Cart</a></li>
                                <li class=""><a href="shop-checkout.html">Checkout</a></li>
                                <li class=""><a href="shop-wishlist.html">Wishlist</a></li>
                                <li class=""><a href="shop-login.html">Login</a></li>
                                <li class=""><a href="shop-account.html">Account</a></li>
                            </ul>--}}
                        </li>
                    </ul>

                    <!-- Social Links -->
                    <ul class="social-links social-links--inline social-links--main-nav">

                        <li class="social-links__item">
                            <a href="https://www.facebook.com/Kosarkaski-klub-All-Stars-321895358175219/" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa fa-facebook"></i></a>
                        </li>
                        <li class="social-links__item">
                            <a href="https://www.instagram.com/k.k.allstars02/?hl=sr" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa fa-instagram"></i></a>
                        </li>
                        <li class="social-links__item">
                            <a href="https://www.youtube.com/channel/UCmIhgkzIXbw3OvwvRRPZacg?view_as=subscriber" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa fa-youtube-play"></i></a>
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