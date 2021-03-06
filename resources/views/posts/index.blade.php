@extends('layouts.master')
@section('content')
    <div class="row">
        <!-- Content -->
        <div class="content col-md-8">

            <!-- Lates News -->
            <div class="card card--clean">
                <header class="card__header card__header--has-btn">
                    <h4>Novosti</h4>
                    <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See All Posts</a>
                </header>
                <div class="card__content">
                    <!-- Posts List -->
                    <div class="posts posts--cards posts--cards-thumb-left post-list">
                        <div class="post-list__item">
                            <div class="posts__item posts__item--card posts__item--category-1 card card--block">
                                <figure class="posts__thumb">
                                    <a href="#"><img src="assets/images/posts/drugo_kolo_small.jpg" alt=""></a>
                                    <a href="#" class="posts__cta"></a>
                                </figure>
                                <div class="posts__inner">
                                    <div class="card__content">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Tim</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Nova pobjeda za All-stars protiv Teoda</a>
                                        </h6>
                                        <time datetime="2016-08-17" class="posts__date">10/11/2018</time>
                                        <div class="posts__excerpt">
                                            Košarkaši All Starsa iz Spuža zabilježili su treću pobjedu u debitanskom
                                            nastupu u Prvoj B ligi. Izabranici Danila Pavićevića pobijedili su u Tivtu
                                            Teodo rezultatom 63:58.
                                        </div>
                                    </div>
                                    <footer class="posts__footer card__footer">
                                        <div class="post-author">
                                            <figure class="post-author__avatar">
                                                <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                            </figure>
                                            <div class="post-author__info">
                                                <h4 class="post-author__name">Darko V.</h4>
                                            </div>
                                        </div>
                                        <ul class="post__meta meta">
                                            <li class="meta__item meta__item--views">2369</li>
                                            {{--<li class="meta__item meta__item--likes"><a href="#"><i
                                                            class="meta-like icon-heart"></i> 530</a></li>
                                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>--}}
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        <div class="post-list__item">
                            <div class="posts__item posts__item--card posts__item--category-1 card card--block">
                                <figure class="posts__thumb">
                                    <a href="#"><img src="assets/images/posts/drugo_kolo.jpg" alt=""></a>
                                    <a href="#" class="posts__cta"></a>
                                </figure>
                                <div class="posts__inner">
                                    <div class="card__content">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Tim</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Drugo kolo</a></h6>
                                        <time datetime="2016-08-17" class="posts__date">4/11/2018</time>
                                        <div class="posts__excerpt">
                                            U derbiju drugom kolu Prve B crnogorske lige košarkaši All Starsa savladali
                                            su u Danilovgradu ekipu Stršljena rezultatom 67:46.
                                        </div>
                                    </div>
                                    <footer class="posts__footer card__footer">
                                        <div class="post-author">
                                            <figure class="post-author__avatar">
                                                <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                            </figure>
                                            <div class="post-author__info">
                                                <h4 class="post-author__name">Darko.V</h4>
                                            </div>
                                        </div>
                                        <ul class="post__meta meta">
                                            <li class="meta__item meta__item--views">2369</li>
                                            <li class="meta__item meta__item--likes"><a href="#"><i
                                                            class="meta-like icon-heart"></i> 530</a></li>
                                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        <div class="post-list__item">
                            <div class="posts__item posts__item--card posts__item--category-1 card card--block">
                                <figure class="posts__thumb">
                                    <a href="{{ route('team') }}"><img src="assets/images/posts/meat_the_team.jpg"
                                                                       alt=""></a>
                                    <a href="{{ route('team') }}" class="posts__cta"></a>
                                </figure>
                                <div class="posts__inner">
                                    <div class="card__content">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Tim</span>
                                        </div>
                                        <h6 class="posts__title"><a href="{{ route('team') }}">Upoznajte tim</a></h6>
                                        <time datetime="2016-08-17" class="posts__date">4/11/2018</time>
                                        <div class="posts__excerpt">
                                            Upoznajte tim
                                        </div>
                                    </div>
                                    <footer class="posts__footer card__footer">
                                        <div class="post-author">
                                            <figure class="post-author__avatar">
                                                <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                            </figure>
                                            <div class="post-author__info">
                                                <h4 class="post-author__name">Darko.V</h4>
                                            </div>
                                        </div>
                                        <ul class="post__meta meta">
                                            <li class="meta__item meta__item--views">2369</li>
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
        @include('layouts.sidebar')
    </div>
    <!-- Content / End -->

    <!-- Sidebar -->

    <!-- Sidebar / End -->

@endsection
