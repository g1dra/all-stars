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
    <!-- Team Roster: Grid -->
    <div class="team-roster team-roster--grid row">
        @foreach($players as $player)
        <div class="team-roster__item col-6 col-sm-4">
            <div class="team-roster__holder">
                <figure class="team-roster__img">
                    <img src="assets/images/players2/{{$player->img}}" alt="">
                </figure>
                <div class="team-roster__content">
                    <div class="team-roster__content-inner">
                        <div class="team-roster__member-number">{{$player->number}}</div>
                        <div class="team-roster__member-info">
                            <h2 class="team-roster__member-name">
                                <span class="team-roster__member-first-name">{{$player->name}}</span>
                                {{--<span class="team-roster__member-last-name">Girobili</span>--}}
                            </h2>
                            {{--<span class="team-roster__member-position">1st Shooting Guard</span>--}}
                        </div>
                    </div>
                </div>
                {{--<a href="player-overview.html" class="btn-fab"></a>--}}
            </div>
        </div>
        @endforeach
        {{--<div class="team-roster__item col-6 col-sm-4">
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
        </div>--}}

    </div>
    <!-- Team Roster: Grid / End -->
@endsection