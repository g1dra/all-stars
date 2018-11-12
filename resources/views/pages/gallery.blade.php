@extends('layouts.master')
@section('team-pages-filter')
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
@endsection
@section('content')


            <!-- Gallery -->
            <div class="gallery row">
                <div class="gallery__item col-6 col-sm-4">
                    <a href="team-gallery-album.html" class="gallery__item-inner card">
                        <figure class="gallery__thumb">
                            <img src="assets/images/samples/post-img4.jpg" alt="">
                            <span class="btn-fab gallery__btn-fab"></span>
                        </figure>
                        <div class="gallery__content card__content">
								<span class="gallery__icon">
									<span class="icon-camera"></span>
								</span>
                            <div class="gallery__details">
                                <h4 class="gallery__name">Photoshoot for 2017</h4>
                                <div class="gallery__date">December 17th, 2016</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery__item col-6 col-sm-4">
                    <a href="team-gallery-album.html" class="gallery__item-inner card">
                        <figure class="gallery__thumb">
                            <img src="assets/images/samples/post-img6.jpg" alt="">
                            <span class="btn-fab gallery__btn-fab"></span>
                        </figure>
                        <div class="gallery__content card__content">
								<span class="gallery__icon">
									<span class="icon-camera"></span>
								</span>
                            <div class="gallery__details">
                                <h4 class="gallery__name">California Playoffs 2016</h4>
                                <div class="gallery__date">January 24th, 2016</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery__item col-6 col-sm-4">
                    <a href="team-gallery-album.html" class="gallery__item-inner card">
                        <figure class="gallery__thumb">
                            <img src="assets/images/samples/post-img16.jpg" alt="">
                            <span class="btn-fab gallery__btn-fab"></span>
                        </figure>
                        <div class="gallery__content card__content">
								<span class="gallery__icon">
									<span class="icon-camera"></span>
								</span>
                            <div class="gallery__details">
                                <h4 class="gallery__name">Player Portraits 2016</h4>
                                <div class="gallery__date">January 14th, 2016</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery__item col-6 col-sm-4">
                    <a href="team-gallery-album.html" class="gallery__item-inner card">
                        <figure class="gallery__thumb">
                            <img src="assets/images/samples/post-img3.jpg" alt="">
                            <span class="btn-fab gallery__btn-fab"></span>
                        </figure>
                        <div class="gallery__content card__content">
								<span class="gallery__icon">
									<span class="icon-camera"></span>
								</span>
                            <div class="gallery__details">
                                <h4 class="gallery__name">The Alchemists Stadium</h4>
                                <div class="gallery__date">December 17th, 2016</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery__item col-6 col-sm-4">
                    <a href="team-gallery-album.html" class="gallery__item-inner card">
                        <figure class="gallery__thumb">
                            <img src="assets/images/samples/post-img1.jpg" alt="">
                            <span class="btn-fab gallery__btn-fab"></span>
                        </figure>
                        <div class="gallery__content card__content">
								<span class="gallery__icon">
									<span class="icon-camera"></span>
								</span>
                            <div class="gallery__details">
                                <h4 class="gallery__name">Player Photoshoot</h4>
                                <div class="gallery__date">January 24th, 2016</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery__item col-6 col-sm-4">
                    <a href="team-gallery-album.html" class="gallery__item-inner card">
                        <figure class="gallery__thumb">
                            <img src="assets/images/samples/post-img17.jpg" alt="">
                            <span class="btn-fab gallery__btn-fab"></span>
                        </figure>
                        <div class="gallery__content card__content">
								<span class="gallery__icon">
									<span class="icon-camera"></span>
								</span>
                            <div class="gallery__details">
                                <h4 class="gallery__name">The National Team</h4>
                                <div class="gallery__date">January 14th, 2016</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery__item col-6 col-sm-4">
                    <a href="team-gallery-album.html" class="gallery__item-inner card">
                        <figure class="gallery__thumb">
                            <img src="assets/images/samples/post-img5.jpg" alt="">
                            <span class="btn-fab gallery__btn-fab"></span>
                        </figure>
                        <div class="gallery__content card__content">
								<span class="gallery__icon">
									<span class="icon-camera"></span>
								</span>
                            <div class="gallery__details">
                                <h4 class="gallery__name">Charity Activities</h4>
                                <div class="gallery__date">December 17th, 2016</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery__item col-6 col-sm-4">
                    <a href="team-gallery-album.html" class="gallery__item-inner card">
                        <figure class="gallery__thumb">
                            <img src="assets/images/samples/post-img2.jpg" alt="">
                            <span class="btn-fab gallery__btn-fab"></span>
                        </figure>
                        <div class="gallery__content card__content">
								<span class="gallery__icon">
									<span class="icon-camera"></span>
								</span>
                            <div class="gallery__details">
                                <h4 class="gallery__name">Cheerleader Squad</h4>
                                <div class="gallery__date">January 24th, 2016</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery__item col-6 col-sm-4">
                    <a href="team-gallery-album.html" class="gallery__item-inner card">
                        <figure class="gallery__thumb">
                            <img src="assets/images/samples/post-img13.jpg" alt="">
                            <span class="btn-fab gallery__btn-fab"></span>
                        </figure>
                        <div class="gallery__content card__content">
								<span class="gallery__icon">
									<span class="icon-camera"></span>
								</span>
                            <div class="gallery__details">
                                <h4 class="gallery__name">Meal Plan 2015</h4>
                                <div class="gallery__date">January 14th, 2016</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Gallery / End -->


            <!-- Team Pagination -->
            <nav class="team-pagination" aria-label="Team navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><span class="page-link">...</span></li>
                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                </ul>
            </nav>
            <!-- Team Pagination / End -->
@endsection