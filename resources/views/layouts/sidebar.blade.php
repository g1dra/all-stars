<!-- Sidebar -->
<div id="sidebar" class="sidebar col-md-4">

    <!-- Widget: Match Announcement -->
    <aside class="widget widget--sidebar card widget-preview">
        <div class="widget__title card__header" style="text-align: center">
            <h4 style="display: inline">Naredni meč</h4>
            @auth
                <a href="{{ route('setCountdown') }}" class="btn btn-default btn-outline btn-xs card-header__button"> Podesi </a>
            @endauth
        </div>
        <div class="widget__content card__content">

            <!-- Match Preview -->
            <div class="match-preview">
                <section class="match-preview__body">
                    <header class="match-preview__header">
                        <h3 class="match-preview__title">{{ $lastMatch->league }}</h3>
                        <time class="match-preview__date" datetime="{{ $lastMatch->date }}">{{ $lastMatch->date }}</time>
                    </header>
                    <div class="match-preview__content">

                        <!-- 1st Team -->
                        <div class="match-preview__team match-preview__team--first">
                            <figure class="match-preview__team-logo">
                                <img src="{{  $homeTeam->img }}" alt="{{  $homeTeam->name }}">
                            </figure>
                            <h5 class="match-preview__team-name">{{  $homeTeam->name }}</h5>
                            {{--<div class="match-preview__team-info">Elric Bros School</div>--}}
                        </div>
                        <!-- 1st Team / End -->
                        <div class="match-preview__vs">
                            <div class="match-preview__conj">VS</div>
                            <div class="match-preview__match-info">
                                <time class="match-preview__match-time" datetime="{{ $lastMatch->date . $lastMatch->time }}">{{ substr($lastMatch->time, 0, -3) }} </time>
                                <div class="match-preview__match-place">{{ $lastMatch->location }}</div>
                            </div>
                        </div>

                        <!-- 2nd Team -->
                        <div class="match-preview__team match-preview__team--second">
                            <figure class="match-preview__team-logo">
                                <img src="{{ $guestTeam->img }}" alt="{{ $guestTeam->name }}">
                            </figure>
                            <h5 class="match-preview__team-name">{{ $guestTeam->name }}</h5>
                            {{--<div class="match-preview__team-info">ST Paddy's Institute</div>--}}
                        </div>
                        <!-- 2nd Team / End -->

                    </div>
                    <div class="match-preview__action">
                        {{--<a href="#" class="btn btn-default btn-block">Buy Tickets Now</a>--}}
                    </div>
                </section>
                <section class="match-preview__countdown countdown">
                    <h4 class="countdown__title">Game Countdown</h4>
                    <div class="countdown__content">
                        <div class="countdown-counter" data-date="{{ $lastMatch->date . ' ' . $lastMatch->time }}"></div>
                    </div>
                </section>
            </div>
            <!-- Match Preview / End -->

        </div>
    </aside>
    <!-- Widget: Match Announcement / End -->

    <!-- Widget: Standings -->
    <aside class="widget card widget--sidebar widget-standings">
        <div class="widget__title card__header card__header--has-btn" style="text-align:center">
            <h4 >Rezultati</h4>
            @auth
                <a href="{{ route('setTable') }}" class="btn btn-default btn-outline btn-xs card-header__button">Podesi</a>
            @endauth
        </div>
        <div class="widget__content card__content">
            <div class="table-responsive">
                <table class="table table-hover table-standings">
                    <thead>
                    <tr>
                        <th>Pos.</th>
                        <th>W</th>
                        <th>L</th>
                        <th>P</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>
                                <div class="team-meta">
                                    <figure class="team-meta__logo">
                                        <img src="{{$logos[$row->name]}}" alt="All Stars">
                                    </figure>
                                    <div class="team-meta__info">
                                        <h6 class="team-meta__name">{{$row->name}}</h6>
                                        {{--<span class="team-meta__place">Bebop Institute</span>--}}
                                    </div>
                                </div>
                            </td>
                            <td>{{$row->wins}}</td>
                            <td>{{$row->losses}}</td>
                            <td>{{$row->points}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </aside>
    <!-- Widget: Standings / End -->

    <!-- Widget: Social Buttons -->
    <aside class="widget widget--sidebar widget-social">
        <a href="https://www.facebook.com/Kosarkaski-klub-All-Stars-321895358175219/" class="btn-social-counter btn-social-counter--fb" target="_blank">
            <div class="btn-social-counter__icon">
                <i class="fa fa-facebook"></i>
            </div>
            <h6 class="btn-social-counter__title">Like Our Facebook Page</h6>
            {{--<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Likes</span>--}}
            <span class="btn-social-counter__add-icon"></span>
        </a>
        <a href="https://www.instagram.com/k.k.allstars02/?hl=en" class="btn-social-counter btn-social-counter--instagram" target="_blank">
            <div class="btn-social-counter__icon">
                <i class="fa fa-instagram"></i>
            </div>
            <h6 class="btn-social-counter__title">Follow Us on Instagram</h6>
            {{--<span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>--}}
            <span class="btn-social-counter__add-icon"></span>
        </a>
        <a href="https://www.youtube.com/channel/UCmIhgkzIXbw3OvwvRRPZacg?view_as=subscriber" class="btn-social-counter btn-social-counter btn-social-counter--youtube" target="_blank">
            <div class="btn-social-counter__icon">
                <i class="fa fa-youtube-play"></i>
            </div>
            <h6 class="btn-social-counter__title">Subscribe to Our Youtube</h6>
            {{--<span class="btn-social-counter__count"><span--}}
                        {{--class="btn-social-counter__count-num">840</span> Subscribers</span>--}}
            <span class="btn-social-counter__add-icon"></span>
        </a>
    </aside>
    <!-- Widget: Social Buttons / End -->

    <!-- Widget: Popular News -->

<!-- Widget: Popular News / End -->

    <!-- Widget: Featured Player -->

<!-- Widget: Featured Player / End -->

    <!-- Widget: Game Result -->
    <aside class="widget card widget--sidebar widget-game-result">
        <div class="widget__title card__header card__header--has-btn" style="text-align: center">
            <h4>Poslednji rezultati</h4>
            @auth
                <a href="{{route('setResult')}}" class="btn btn-default btn-outline btn-xs card-header__button">Podesi</a>
            @endauth
            {{--<button class="btn btn-default btn-outline btn-xs card-header__button js-switch-toggle"><span--}}
                        {{--class="js-switch-txt" data-text-expand="Expand Stats" data-text-shrink="Shrink Stats">Expand Stats</span>--}}
            {{--</button>--}}
        </div>
        <div class="widget__content card__content">
            <!-- Game Score -->
            <div class="widget-game-result__section">
                <div class="widget-game-result__section-inner">
                    <header class="widget-game-result__header">
                        <h3 class="widget-game-result__title">{{$latestResult->round}}. Kolo</h3>
                        <time class="widget-game-result__date" datetime="2016-03-24">{{$latestResult->date}}</time>
                    </header>

                    <div class="widget-game-result__main">
                        <!-- 1st Team -->
                        <div class="widget-game-result__team widget-game-result__team--first">
                            <figure class="widget-game-result__team-logo">
                                <a href="#"><img src="{{$logos[$latestResult->home]}}" alt=""></a>
                            </figure>
                            <div class="widget-game-result__team-info">
                                <h5 class="widget-game-result__team-name">{{$latestResult->home}}</h5>
                                {{--<div class="widget-game-result__team-desc">Elric Bros School</div>--}}
                            </div>
                        </div>
                        <!-- 1st Team / End -->

                        <div class="widget-game-result__score-wrap">
                            <div class="widget-game-result__score">
                                @if($latestResult->home_points > $latestResult->guest_points)
                                <span class="widget-game-result__score-result widget-game-result__score-result--winner">{{$latestResult->home_points}}</span>
                                <span class="widget-game-result__score-dash">-</span> <span
                                        class="widget-game-result__score-result widget-game-result__score-result--loser">{{$latestResult->guest_points}}</span>
                                @elseif($latestResult->home_points < $latestResult->guest_points)
                                    <span class="widget-game-result__score-result widget-game-result__score-result--winner">{{$latestResult->home_points}}</span>
                                    <span class="widget-game-result__score-dash">-</span>
                                    <span class="widget-game-result__score-result widget-game-result__score-result--loser">{{$latestResult->guest_points}}</span>
                                @else
                                    <span class="widget-game-result__score-result widget-game-result__score-result--loser">{{$latestResult->home_points}}</span>
                                    <span class="widget-game-result__score-dash">-</span>
                                    <span class="widget-game-result__score-result widget-game-result__score-result--loser">{{$latestResult->guest_points}}</span>
                                @endif
                            </div>
                            <div class="widget-game-result__score-label">Rezultat</div>
                        </div>

                        <!-- 2nd Team -->
                        <div class="widget-game-result__team widget-game-result__team--second">
                            <figure class="widget-game-result__team-logo">
                                <a href="#"><img src="{{$logos[$latestResult->guest]}}" alt=""></a>
                            </figure>
                            <div class="widget-game-result__team-info">
                                <h5 class="widget-game-result__team-name">{{$latestResult->guest}}</h5>
                                {{--<div class="widget-game-result__team-desc">Marine College</div>--}}
                            </div>
                        </div>
                        <!-- 2nd Team / End -->
                    </div>
                </div>
            </div>
            <!-- Game Score / End -->

            <!-- Scoreboard -->
            <div class="widget-game-result__section">
                <div class="widget-game-result__table-stats">
                    <div class="table-responsive">
                        <table class="table table__cell-center table-thead-color">
                            <thead>
                            <tr>
                                <th>Scoreboard</th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>T</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>{{$latestResult->home}}</th>
                                @foreach(explode(',', $latestResult->home_quarter_points) as $points)
                                    <td>{{$points}}</td>
                                @endforeach
                                    <td>{{$latestResult->home_points}}</td>
                            </tr>
                            <tr>
                                <th>{{$latestResult->guest}}</th>
                                @foreach(explode(',', $latestResult->guest_quarter_points) as $points)
                                    <td>{{$points}}</td>
                                @endforeach
                                <td>{{$latestResult->guest_points}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Scoreboard / End -->

            <!-- Game Statistics -->
            <div class="widget-game-result__section">
                <header class="widget-game-result__subheader card__subheader card__subheader--sm card__subheader--nomargins">
                    <h5 class="widget-game-result__subtitle">Statistika</h5>
                </header>
                <div class="widget-game-result__section-inner">
                    <!-- Progress: Assists -->
                    <div class="progress-double-wrapper">
                        <h6 class="progress-title">Asistencija</h6>
                        <div class="progress-inner-holder">
                            <div class="progress__digit progress__digit--left progress__digit{{$latestResult->home_assists > $latestResult->guest_assists ?"--highlight":""}}">
                                {{$latestResult->home_assists}}</div>
                            <div class="progress__double">
                                <div class="progress">
                                    <div class="progress__bar progress__bar-width-{{round($latestResult->home_assists/10)*10*2}}" role="progressbar"
                                         aria-valuenow="{{round($latestResult->home_assists/10)*10*2}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress__bar progress__bar--info progress__bar-width-{{round($latestResult->guest_assists/10)*10*2}}"
                                         role="progressbar" aria-valuenow="{{round($latestResult->guest_assists/10)*10*2}}" aria-valuemin="0"
                                         aria-valuemax="100">{{$latestResult->guest_assists}}</div>
                                </div>
                            </div>
                            <div class="progress__digit progress__digit--right progress__digit{{$latestResult->home_assists < $latestResult->guest_assists ?"--highlight":""}}">
                                        {{$latestResult->guest_assists}}</div>
                        </div>
                    </div>
                    <!-- Progress: Assists / End -->

                    <!-- Progress: Rebounds -->
                    <div class="progress-double-wrapper">
                        <h6 class="progress-title">Skokovi</h6>
                        <div class="progress-inner-holder">
                            <div class="progress__digit progress__digit--left progress__digit{{$latestResult->home_rebounds > $latestResult->guest_rebounds ? "--highlight":""}}">
                                {{$latestResult->home_rebounds}}</div>
                            <div class="progress__double">
                                <div class="progress">
                                    <div class="progress__bar progress__bar-width-{{round($latestResult->home_rebounds/10)*10*2}}" role="progressbar"
                                         aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress__bar progress__bar--info progress__bar-width-{{round($latestResult->guest_rebounds/10)*10*2}}"
                                         role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress__digit progress__digit--right progress__digit{{$latestResult->home_rebounds < $latestResult->guest_rebounds ? "--highlight":""}}">
                                {{$latestResult->guest_rebounds}}</div>
                        </div>
                    </div>
                    <!-- Progress: Rebounds / End -->

                    <!-- Progress: Steals -->
                    <div class="progress-double-wrapper">
                        <h6 class="progress-title">Ukradene lopte</h6>
                        <div class="progress-inner-holder">
                            <div class="progress__digit progress__digit--left progress__digit{{$latestResult->home_steals > $latestResult->guest_steals ? "--highlight":""}}">
                                {{$latestResult->home_steals}}</div>
                            <div class="progress__double">
                                <div class="progress">
                                    <div class="progress__bar progress__bar-width-{{round($latestResult->home_steals/10)*10*2}}" role="progressbar"
                                         aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="progress">
                                    <div class="progress__bar progress__bar--info progress__bar-width-{{round($latestResult->guest_steals/10)*10*2}}"
                                         role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress__digit progress__digit--right progress__digit{{$latestResult->home_steals < $latestResult->guest_steals ? "--highlight":""}}">{{$latestResult->guest_steals}}</div>
                        </div>
                    </div>
                    <!-- Progress: Steals / End -->
                </div>
            </div>
            <!-- Game Statistics / End -->
            </div>
    </aside>

    <!-- Widget: Game Result / End -->









</div>
<!-- Sidebar / End -->