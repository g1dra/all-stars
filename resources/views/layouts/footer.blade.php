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
                                <a href="/"><img src="/assets/images/logo_no_bg.png" srcset="/assets/images/logo@2x.png 2x" alt="Alchemists" class="footer-logo__img"></a>
                            </div>
                            <!-- Footer Logo / End -->

                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="footer-col-inner">
                            <!-- Widget: Contact Info -->
                            <div class="widget widget--footer widget-contact-info">
                                <h4 class="widget__title">Kontakt info </h4>
                                <div class="widget__content">
                                    <div class="widget-contact-info__desc">
                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>--}}
                                    </div>
                                    <div class="widget-contact-info__body info-block">
                                        <div class="info-block__item">
                                            <svg role="img" class="df-icon df-icon--basketball">
                                                <use xlink:href="/assets/images/icons-basket.svg#basketball"/>
                                            </svg>
                                            <h6 class="info-block__heading">Kontakt</h6>
                                            <a class="info-block__link" href="mailto:k.k.allstars02@gmail.com">k.k.allstars02@gmail.com</a>
                                        </div>
                                        <div class="info-block__item">
                                            <svg role="img" class="df-icon df-icon--jersey">
                                                <use xlink:href="/assets/images/icons-basket.svg#jersey"/>
                                            </svg>
                                            <h6 class="info-block__heading">Prikljucite se timu!</h6>
                                            <a class="info-block__link" href="mailto:k.k.allstars02@gmail.com">k.k.allstars02@gmail.com</a>
                                        </div>
                                        <div class="info-block__item info-block__item--nopadding">
                                            <ul class="social-links">

                                                <li class="social-links__item">
                                                    <a href="https://www.facebook.com/Kosarkaski-klub-All-Stars-321895358175219/" class="social-links__link"><i class="fa fa-facebook"></i> Facebook</a>
                                                </li>
                                                <li class="social-links__item">
                                                    <a href="https://www.instagram.com/k.k.allstars02/?hl=sr" class="social-links__link"><i class="fa fa-instagram"></i> Instagram</a>
                                                </li>
                                                <li class="social-links__item">
                                                    <a href="https://www.youtube.com/channel/UCmIhgkzIXbw3OvwvRRPZacg?view_as=subscriber" class="social-links__link"><i class="fa fa-youtube-play"></i> Youtube</a>
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
                                        @foreach($posts as $post)
                                            <li class="posts__item posts__item--category-2">
                                                {{--<div class="posts__cat">--}}
                                                    {{--<span class="label posts__cat-label">Injuries</span>--}}
                                                {{--</div>--}}
                                                <h6 class="posts__title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h6>
                                                <time datetime="2017-08-23" class="posts__date">{!! $post->body !!}</time>
                                            </li>
                                        @endforeach


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

                            <li class="footer-nav__item"><a href="/">Početna</a></li>
                            <li class="footer-nav__item"><a href="/team">Roster</a></li>
                            <li class="footer-nav__item"><a href="/mckl">I B MCKL</a></li>
                            <li class="footer-nav__item"><a href="/album">Galerija</a></li>
                            <li class="footer-nav__item"><a href="/contact">Kontakt</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Secondary / End -->
</footer>