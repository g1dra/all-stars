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
        <!-- Players -->
        @foreach($players as $player)
            <div class="team-roster__item">
                <!-- Player Photo -->
                <figure class="team-roster__img">
                    <img src="assets/images/players/{{$player->img}}" alt="{{$player->name}}">
                    <div class="team-roster__img-ring-top"></div>
                    <div class="team-roster__img-ring-bottom"></div>
                </figure>
                <!-- Player Photo / End-->
                <!-- Player Details -->
                <div class="team-roster__player-details">
                    <div class="team-roster__player-number">{{$player->number}}</div>
                    <div class="team-roster__player-info">
                        <h3 class="team-roster__player-name">
                            <span class="team-roster__player-first-name">{{$player->name}}</span>

                        </h3>
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
        @endforeach
        <!-- Players / End -->


    </div>
@endsection