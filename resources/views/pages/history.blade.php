@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="content col-md-8">
        {{--<div class="spacer"></div>--}}
        <!-- Lates News -->
            <div class="card card--clean">
                <header class="card__header card__header--has-btn">
                    {{--<h4>Latest News</h4>
                    <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See All Posts</a>--}}
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
                                            <span class="label posts__cat-label">Istorija</span>
                                        </div>
                                        <h6 class="posts__title"><a href="{{ route('history') }}">Istorija tima</a></h6>
                                        <time datetime="05/11/2018" class="posts__date">05/11/2018</time>
                                        <div class="posts__excerpt">
                                            Kosarkaski klub ALL-STARS je nastao 2002 godine. Klub je osnovao i obavljao
                                            trenerski posao Srdjan Mandić
                                            koji je tada okupio kadetsku generaciju koja je izvedena do zavrsne godine
                                            juniora.Zbog nedostatka finansija
                                            2008 godine klub prestaje sa radom sve do septembra 2014 godine kada klub
                                            preuzima Pavicevic Danilo i krece
                                            iznova sa radom sa mladjim kategorijama u Oš Njegos u Spuzu. Klub je otisao
                                            korak naprijed i od sezone
                                            2018/2019 pored mladjih kategorija takmiciti i u seniorskoj Prvoj B ligi a
                                            utakmice ce se odigravati u
                                            danilovgradskoj sali.
                                        </div>
                                    </div>
                                    <footer class="posts__footer card__footer">
                                        <div class="post-author">
                                            <figure class="post-author__avatar">
                                                <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                            </figure>
                                            <div class="post-author__info">
                                                <h4 class="post-author__name">Darko Vučetić</h4>
                                            </div>
                                        </div>
                                        {{-- <ul class="post__meta meta">
                                             <li class="meta__item meta__item--views">2369</li>
                                             <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                             <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                         </ul>--}}
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


@endsection