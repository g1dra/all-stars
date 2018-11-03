@extends('layouts.master')
@section('content')

    <!-- Content -->
    <div class="content col-md-8">

        <!-- Featured News -->
        <div class="card card--clean">
            <header class="card__header card__header--has-filter">
                <h4 style="text-align: center">Novosti</h4>
               {{-- <ul class="category-filter category-filter--featured">
                    <li class="category-filter__item"><a href="#" class="category-filter__link category-filter__link--reset category-filter__link--active">All</a></li>
                    <li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-1">The Team</a></li>
                    <li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-3">Playoffs</a></li>
                    <li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-2">Injuries</a></li>
                </ul>--}}
            </header>
            <div class="card__content">

                <!-- Slider -->
                <div class="slick posts posts--slider-featured">

                    <div class="posts__item posts__item--category-1">
                        <a href="#" class="posts__link-wrapper">
                            <figure class="posts__thumb">
                                <img src="assets/images/samples/post-slide1.jpg" alt="">
                            </figure>
                            <div class="posts__inner">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <h3 class="posts__title">The Planettroters will <span class="posts__title-higlight">perform this May 4th</span> at Madison Cube</h3>
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-4.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">Jesse Stevens</h4>
                                        <time datetime="2017-08-28" class="posts__date">August 28th, 2018</time>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="posts__item posts__item--category-3">
                        <a href="#" class="posts__link-wrapper">
                            <figure class="posts__thumb">
                                <img src="assets/images/samples/post-slide2.jpg" alt="">
                            </figure>
                            <div class="posts__inner">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">Playoffs</span>
                                </div>
                                <h3 class="posts__title">New York is preparing all <span class="posts__title-higlight">for the Playoffs Final</span> next December</h3>
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">James Spiegel</h4>
                                        <time datetime="2017-08-28" class="posts__date">June 28th, 2018</time>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="posts__item posts__item--category-1">
                        <a href="#" class="posts__link-wrapper">
                            <figure class="posts__thumb">
                                <img src="assets/images/samples/post-slide3.jpg" alt="">
                            </figure>
                            <div class="posts__inner">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <h3 class="posts__title">The new eco friendly <span class="posts__title-higlight">stadium won a Leafy</span> Award in 2016</h3>
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">James Spiegel</h4>
                                        <time datetime="2017-08-28" class="posts__date">June 28th, 2018</time>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="posts__item posts__item--category-3">
                        <a href="#" class="posts__link-wrapper">
                            <figure class="posts__thumb">
                                <img src="assets/images/samples/post-slide4.jpg" alt="">
                            </figure>
                            <div class="posts__inner">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">Playoffs</span>
                                </div>
                                <h3 class="posts__title">New York Islanders are <span class="posts__title-higlight">now flying to California</span> for the big game</h3>
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">James Spiegel</h4>
                                        <time datetime="2017-08-28" class="posts__date">June 28th, 2018</time>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="posts__item posts__item--category-3">
                        <a href="#" class="posts__link-wrapper">
                            <figure class="posts__thumb">
                                <img src="assets/images/samples/post-slide6.jpg" alt="">
                            </figure>
                            <div class="posts__inner">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">Playoffs</span>
                                </div>
                                <h3 class="posts__title">Jeremy Rittersen was <span class="posts__title-higlight">called to be</span> in the National Team</h3>
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">Jessica Hoops</h4>
                                        <time datetime="2017-08-28" class="posts__date">May 24th, 2018</time>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="posts__item posts__item--category-2">
                        <a href="#" class="posts__link-wrapper">
                            <figure class="posts__thumb">
                                <img src="assets/images/samples/post-slide5.jpg" alt="">
                            </figure>
                            <div class="posts__inner">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">Injuries</span>
                                </div>
                                <h3 class="posts__title">Jessica Valentine has a <span class="posts__title-higlight">sprained ankle</span> and won't be in the Final</h3>
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-4.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">Jesse Stevens</h4>
                                        <time datetime="2017-08-28" class="posts__date">April 12th, 2018</time>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Slider / End -->

            </div>
        </div>
        <!-- Featured News / End -->


        <!-- Post Area 1 -->
        <div class="posts posts--cards post-grid row">

            <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                    <figure class="posts__thumb">
                        <div class="posts__cat">
                            <span class="label posts__cat-label">The Team</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img6.jpg" alt=""></a>
                    </figure>
                    <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
                        <h6 class="posts__title"><a href="#">Michael Bryan was chosen again as best player with 45 points</a></h6>
                        <div class="posts__excerpt">
                            Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                        </div>
                    </div>
                    <footer class="posts__footer card__footer">
                        <div class="post-author">
                            <figure class="post-author__avatar">
                                <img src="assets/images/samples/avatar-4.jpg" alt="Post Author Avatar">
                            </figure>
                            <div class="post-author__info">
                                <h4 class="post-author__name">Jesse Stevens</h4>
                            </div>
                        </div>
                        <ul class="post__meta meta">
                            <li class="meta__item meta__item--views">2369</li>
                            <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                    </footer>
                </div>
            </div>
            <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                    <figure class="posts__thumb">
                        <div class="posts__cat">
                            <span class="label posts__cat-label">The Team</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img3.jpg" alt=""></a>
                    </figure>
                    <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
                        <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
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
                            <li class="meta__item meta__item--views">2369</li>
                            <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                    </footer>
                </div>
            </div>

        </div>
        <!-- Post Area 1 / End -->


        <!-- Post Area 2 -->
        <div class="posts posts--cards post-grid row">

            <div class="col-sm-6">
                <div class="posts posts--cards post-grid">
                    <div class="post-grid__item">
                        <div class="posts__item posts__item--card posts__item--category-1 card">
                            <figure class="posts__thumb">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <a href="#"><img src="assets/images/samples/post-img5.jpg" alt=""></a>
                            </figure>
                            <div class="posts__inner card__content">
                                <a href="#" class="posts__cta"></a>
                                <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                <h6 class="posts__title"><a href="#">The Alchemists team is appearing in L.A. Beach for charity</a></h6>
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
                                    <li class="meta__item meta__item--views">2369</li>
                                    <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                    <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                </ul>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card__content">
                        <ul class="posts posts--simple-list posts--simple-list--lg">

                            <li class="posts__item posts__item--category-1">
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">Trainings are getting really hard reaching the final</a></h6>
                                    <time datetime="2017-08-23" class="posts__date">August 23rd, 2018</time>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore...
                                    </div>
                                </div>
                            </li>
                            <li class="posts__item posts__item--category-3">
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">Playoffs</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The victory againts The Sharks brings us closer to the Final</a></h6>
                                    <time datetime="2017-08-23" class="posts__date">February 2nd, 2018</time>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore...
                                    </div>
                                </div>
                            </li>
                            <li class="posts__item posts__item--category-3">
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">Playoffs</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The next match against The Clovers will be this Friday</a></h6>
                                    <time datetime="2017-08-23" class="posts__date">November 27th, 2017</time>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore...
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- Post Area 2 / End -->


        <!-- Main News Banner -->
        <div class="main-news-banner main-news-banner--img-left">
            <figure class="main-news-banner__img">
                <img src="assets/images/samples/main-news-banner__img.png" alt="">
            </figure>
            <div class="main-news-banner__inner">
                <div class="posts posts--simple-list posts--simple-list--xlg">
                    <div class="posts__item posts__item--category-1">
                        <div class="posts__inner">
                            <div class="posts__cat">
                                <span class="label posts__cat-label">The Team</span>
                            </div>
                            <h6 class="posts__title"><a href="#">Take a look at the brand <span class="text-primary">New Uniforms</span> for next season</a></h6>
                            <time datetime="2017-08-23" class="posts__date">August 23rd, 2017</time>
                            <div class="posts__excerpt">
                                Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor.
                            </div>
                            <div class="posts__more">
                                <a href="#" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed">Read More <i class="fa fa-plus text-primary"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Main News Banner / End -->


        <!-- Post Area 3 -->
        <div class="posts posts--cards post-grid row">

            <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-2 card">
                    <figure class="posts__thumb">
                        <div class="posts__cat">
                            <span class="label posts__cat-label">Injuries</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img1.jpg" alt=""></a>
                    </figure>
                    <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">August 23rd, 2018</time>
                        <h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
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
                            <li class="meta__item meta__item--views">2369</li>
                            <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                    </footer>
                </div>
            </div>
            <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                    <figure class="posts__thumb">
                        <div class="posts__cat">
                            <span class="label posts__cat-label">The Team</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img7.jpg" alt=""></a>
                    </figure>
                    <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">July 12th, 2018</time>
                        <h6 class="posts__title"><a href="#">Jay Rorks is only 24 points away from breaking the record</a></h6>
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
                            <li class="meta__item meta__item--views">2369</li>
                            <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                    </footer>
                </div>
            </div>

            <div class="clearfix hidden-md hidden-lg"></div>

            <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                    <figure class="posts__thumb">
                        <div class="posts__cat">
                            <span class="label posts__cat-label">The Team</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img8.jpg" alt=""></a>
                    </figure>
                    <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">February 24th, 2018</time>
                        <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
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
                            <li class="meta__item meta__item--views">2369</li>
                            <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                    </footer>
                </div>
            </div>
            <div class="post-grid__item col-sm-6">
                <div class="posts__item posts__item--card posts__item--category-1 card">
                    <figure class="posts__thumb">
                        <div class="posts__cat">
                            <span class="label posts__cat-label">The Team</span>
                        </div>
                        <a href="#"><img src="assets/images/samples/post-img2.jpg" alt=""></a>
                    </figure>
                    <div class="posts__inner card__content">
                        <a href="#" class="posts__cta"></a>
                        <time datetime="2016-08-23" class="posts__date">January 2nd, 2018</time>
                        <h6 class="posts__title"><a href="#">Cheerleader tryouts will start next Friday at 5pm</a></h6>
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
                            <li class="meta__item meta__item--views">2369</li>
                            <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                        </ul>
                    </footer>
                </div>
            </div>

        </div>
        <!-- Post Area 3 / End -->


        <!-- Lates News -->
        <div class="card card--clean">
            <header class="card__header card__header--has-btn">
                <h4>Latest News</h4>
                <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See All Posts</a>
            </header>
            <div class="card__content">
                <!-- Posts List -->
                <div class="posts posts--cards posts--cards-thumb-left post-list">

                    <div class="post-list__item">
                        <div class="posts__item posts__item--card posts__item--category-1 card card--block">
                            <figure class="posts__thumb">
                                <a href="#"><img src="assets/images/samples/post-img9-m.jpg" alt=""></a>
                                <a href="#" class="posts__cta"></a>
                            </figure>
                            <div class="posts__inner">
                                <div class="card__content">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The team is taking a summer vacation on Woody Valley</a></h6>
                                    <time datetime="2016-08-17" class="posts__date">August 17th, 2018</time>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                        <li class="meta__item meta__item--views">2369</li>
                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                    </ul>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="post-list__item">
                        <div class="posts__item posts__item--card posts__item--category-1 card card--block">
                            <figure class="posts__thumb">
                                <a href="#"><img src="assets/images/samples/post-img10-m.jpg" alt=""></a>
                                <a href="#" class="posts__cta"></a>
                            </figure>
                            <div class="posts__inner">
                                <div class="card__content">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">Jeremy Rittersen was called to be in the National Team</a></h6>
                                    <time datetime="2016-08-17" class="posts__date">August 12th, 2018</time>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                        <li class="meta__item meta__item--views">2369</li>
                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                    </ul>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="post-list__item">
                        <div class="posts__item posts__item--card posts__item--category-1 card card--block">
                            <figure class="posts__thumb">
                                <a href="#"><img src="assets/images/samples/post-img11-m.jpg" alt=""></a>
                                <a href="#" class="posts__cta"></a>
                            </figure>
                            <div class="posts__inner">
                                <div class="card__content">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">Alchemists New Stadium is gonna be ready in September 2017</a></h6>
                                    <time datetime="2016-08-17" class="posts__date">July 14th, 2018</time>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                        <li class="meta__item meta__item--views">2369</li>
                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                    </ul>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="post-list__item">
                        <div class="posts__item posts__item--card posts__item--category-1 card card--block">
                            <figure class="posts__thumb">
                                <a href="#"><img src="assets/images/samples/post-img14-m.jpg" alt=""></a>
                                <a href="#" class="posts__cta"></a>
                            </figure>
                            <div class="posts__inner">
                                <div class="card__content">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The Championship Final will be be played in San Francisco</a></h6>
                                    <time datetime="2016-08-17" class="posts__date">June 2nd, 2018</time>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                        <li class="meta__item meta__item--views">2369</li>
                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                    </ul>
                                </footer>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Posts List / End -->
            </div>
        </div>
        <!-- Lates News / End -->


    </div>
    <!-- Content / End -->

    <!-- Sidebar -->

    <!-- Sidebar / End -->

@endsection