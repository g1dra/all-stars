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

    <div class="team-roster team-roster--slider">
        <!-- Player #0-->
        <div class="team-roster__item">
            <!-- Player Photo -->
            <figure class="team-roster__img">
                <img src="assets/images/rs/aleksandar_cepic.jpg" alt="">
                <div class="team-roster__img-ring-top"></div>
                <div class="team-roster__img-ring-bottom"></div>
            </figure>
            <!-- Player Photo / End-->
            <!-- Player Details -->
            <div class="team-roster__player-details">
                <div class="team-roster__player-number">9</div>
                <div class="team-roster__player-info">
                    <h3 class="team-roster__player-name">
                        <span class="team-roster__player-first-name">Aleksanar</span>
                        <span class="team-roster__player-last-name">Cepić</span>
                    </h3>
                    <div class="team-roster__player-position">1st Shooting Guard</div>
                </div>
            </div>
            <!-- Player Details / End -->
            <!-- FAB (More Info)-->
        {{-- <div class="team-roster__player-fab">
            <a href="player-overview.html" class="team-roster__player-more">
                <span class="btn-fab btn-fab--sm"></span>
                <span class="team-roster__player-fab-txt">Check the<br>Player's Bio</span>
            </a>
        </div> --}}
        <!-- FAB (More Info) / End -->
        </div>
        <!-- Player #0 / End -->
        <!-- Player #1-->
        <div class="team-roster__item">
            <!-- Player Photo -->
            <figure class="team-roster__img">
                <img src="assets/images/rs/aleksandar_rankovic.jpg" alt="">
                <div class="team-roster__img-ring-top"></div>
                <div class="team-roster__img-ring-bottom"></div>
            </figure>
            <!-- Player Photo / End-->
            <!-- Player Details -->
            <div class="team-roster__player-details">
                <div class="team-roster__player-number">24</div>
                <div class="team-roster__player-info">
                    <h3 class="team-roster__player-name">
                        <span class="team-roster__player-first-name">Aleksandar</span>
                        <span class="team-roster__player-last-name">Ranković</span>
                    </h3>
                    <div class="team-roster__player-position">1st Power Forward</div>
                </div>
            </div>
            <!-- Player Details / End -->
            <!-- FAB (More Info)-->
            <div class="team-roster__player-fab">
                <a href="player-overview.html" class="team-roster__player-more">
                    <span class="btn-fab btn-fab--sm"></span>
                    <span class="team-roster__player-fab-txt">Check the<br>Player's Bio</span>
                </a>
            </div>
            <!-- FAB (More Info) / End -->
        </div>
        <!-- Player #1 / End -->
        <!-- Player #2-->
        <div class="team-roster__item">
            <!-- Player Photo -->
            <figure class="team-roster__img">
                <img src="assets/images/rs/danilo_pavicevic.jpg" alt="">
                <div class="team-roster__img-ring-top"></div>
                <div class="team-roster__img-ring-bottom"></div>
            </figure>
            <!-- Player Photo / End-->
            <!-- Player Details -->
            <div class="team-roster__player-details">
                <div class="team-roster__player-number">11</div>
                <div class="team-roster__player-info">
                    <h3 class="team-roster__player-name">
                        <span class="team-roster__player-first-name">Danilo</span>
                        <span class="team-roster__player-last-name">Pavicević</span>
                    </h3>
                    <div class="team-roster__player-position">1st Center</div>
                </div>
            </div>
            <!-- Player Details / End -->
            <!-- FAB (More Info)-->
            <div class="team-roster__player-fab">
                <a href="player-overview.html" class="team-roster__player-more">
                    <span class="btn-fab btn-fab--sm"></span>
                    <span class="team-roster__player-fab-txt">Check the<br>Player's Bio</span>
                </a>
            </div>
            <!-- FAB (More Info) / End -->
        </div>
        <!-- Player #2 / End -->
        <!-- Player #3-->
        <div class="team-roster__item">
            <!-- Player Photo -->
            <figure class="team-roster__img">
                <img src="assets/images/samples/rosterv2_player_02.png" alt="">
                <div class="team-roster__img-ring-top"></div>
                <div class="team-roster__img-ring-bottom"></div>
            </figure>
            <!-- Player Photo / End-->
            <!-- Player Details -->
            <div class="team-roster__player-details">
                <div class="team-roster__player-number">15</div>
                <div class="team-roster__player-info">
                    <h3 class="team-roster__player-name">
                        <span class="team-roster__player-first-name">Nick</span>
                        <span class="team-roster__player-last-name">Rodgers</span>
                    </h3>
                    <div class="team-roster__player-position">1st Point Guard</div>
                </div>
            </div>
            <!-- Player Details / End -->
            <!-- FAB (More Info)-->
            <div class="team-roster__player-fab">
                <a href="player-overview.html" class="team-roster__player-more">
                    <span class="btn-fab btn-fab--sm"></span>
                    <span class="team-roster__player-fab-txt">Check the<br>Player's Bio</span>
                </a>
            </div>
            <!-- FAB (More Info) / End -->
        </div>
        <!-- Player #3 / End -->
        <!-- Player #4-->
        <div class="team-roster__item">
            <!-- Player Photo -->
            <figure class="team-roster__img">
                <img src="assets/images/samples/rosterv2_player_01.png" alt="">
                <div class="team-roster__img-ring-top"></div>
                <div class="team-roster__img-ring-bottom"></div>
            </figure>
            <!-- Player Photo / End-->
            <!-- Player Details -->
            <div class="team-roster__player-details">
                <div class="team-roster__player-number">26</div>
                <div class="team-roster__player-info">
                    <h3 class="team-roster__player-name">
                        <span class="team-roster__player-first-name">Thomas</span>
                        <span class="team-roster__player-last-name">Black</span>
                    </h3>
                    <div class="team-roster__player-position">2nd Shooting Guard</div>
                </div>
            </div>
            <!-- Player Details / End -->
            <!-- FAB (More Info)-->
            <div class="team-roster__player-fab">
                <a href="player-overview.html" class="team-roster__player-more">
                    <span class="btn-fab btn-fab--sm"></span>
                    <span class="team-roster__player-fab-txt">Check the<br>Player's Bio</span>
                </a>
            </div>
            <!-- FAB (More Info) / End -->
        </div>
        <!-- Player #4 / End -->
        <!-- Player #5-->
        <div class="team-roster__item">
            <!-- Player Photo -->
            <figure class="team-roster__img">
                <img src="assets/images/samples/rosterv2_player_02.png" alt="">
                <div class="team-roster__img-ring-top"></div>
                <div class="team-roster__img-ring-bottom"></div>
            </figure>
            <!-- Player Photo / End-->
            <!-- Player Details -->
            <div class="team-roster__player-details">
                <div class="team-roster__player-number">32</div>
                <div class="team-roster__player-info">
                    <h3 class="team-roster__player-name">
                        <span class="team-roster__player-first-name">Spike</span>
                        <span class="team-roster__player-last-name">Arrowhead</span>
                    </h3>
                    <div class="team-roster__player-position">2nd Power Forward</div>
                </div>
            </div>
            <!-- Player Details / End -->
            <!-- FAB (More Info)-->
            <div class="team-roster__player-fab">
                <a href="player-overview.html" class="team-roster__player-more">
                    <span class="btn-fab btn-fab--sm"></span>
                    <span class="team-roster__player-fab-txt">Check the<br>Player's Bio</span>
                </a>
            </div>
            <!-- FAB (More Info) / End -->
        </div>
        <!-- Player #5 / End -->
    </div>
@endsection