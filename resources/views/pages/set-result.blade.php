@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="content col-md-8">
            <h1>Rezultati meča</h1>
            <form id="schedule-form"method="POST" action="/schedule-match">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="select-league">Izaberi takmičenje</label>
                            <select name="league" id="select-league" class="form-control">
                                <option value="IMBCK">IMBCK</option>
                                <option value="Juniorska">Juniorska</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="round">Kolo</label>
                            <input type="text" class="form-control" id="round" name="round" placeholder="Unijete kolo">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="location">Mjesto</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Mjesto" value="Podgorica">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="home">Tim I</label>
                            <select name="home" id="select-home" class="form-control">
                                <option value="" disabled selected>Izaberi domaći tim</option>
                                @foreach($clubs as $club)
                                    <option value="{{$club->name}}">{{$club->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="select-road">Tim II</label>
                            <select name="guest" id="select-guest" class="form-control">
                                <option value="" disabled selected>Izaberi gostujući tim</option>
                                @foreach($clubs as $club)
                                    <option value="{{$club->name}}">{{$club->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="home_points">Tim I</label>
                            <input type="text" class="form-control" id="home_points" name="home_points" placeholder="Broj poena">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="guest_points">Tim II</label>
                            <input type="text" class="form-control" id="guest_points" name="guest_points" placeholder="Broj poena">
                        </div>
                    </div>
                </div>
                <br>
                    <div>
                        <h4>Domaći tim</h4>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label" for="away">Broj poena po cetvrtinama</label>
                                    <input type="text" class="form-control" id="home_quarter_points" name="home_quarter_points" placeholder="Broj poena po četvtinama razdvojen zarezom naprimer 31,30,22,24">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="away">Asistencije</label>
                                    <input type="text" class="form-control" id="home_assists" name="home_assists" placeholder="Broj asistencija">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label" for="away">Skokovi</label>
                                    <input type="text" class="form-control" id="home_rebounds" name="home_rebounds" placeholder="Broj skokova">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="away">Ukradene lopte</label>
                                    <input type="text" class="form-control" id="home_steals" name="home_steals" placeholder="Ukradene lopte">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4>Gostujući tim</h4>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label" for="away">Broj poena po cetvrtinama</label>
                                    <input type="text" class="form-control" id="guest_quarter_points" name="guest_quarter_points" placeholder="Broj poena po četvtinama razdvojen zarezom naprimer 31,30,22,24">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="guest_assists">Asistencije</label>
                                    <input type="text" class="form-control" id="guest_assists" name="guest_assists" placeholder="Broj asistencija">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label" for="guest_rebounds">Skokovi</label>
                                    <input type="text" class="form-control" id="guest_rebounds" name="guest_rebounds" placeholder="Broj skokova">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label" for="guest_steals">Ukradene lopte</label>
                                    <input type="text" class="form-control" id="guest_steals" name="guest_steals" placeholder="Ukradene lopte">
                                </div>
                            </div>
                        </div>
                    </div>

                <br>
                <h4></h4>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-md-4">
                        <label class="control-label" for="datepicker">Datum meča</label>
                        <input type="text" name="datepicker" class="form-control" id="datepicker" placeholder="Izaberi datum">
                    </div>
                    <div class="col-md-4">
                        <label class="control-label" for="datepicker">Vrijeme meča</label>
                        <input type="text" name="timepicker" class="timepicker form-control"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p><a href="javascript:{}" class="btn btn-primary-inverse btn-lg"
                              onclick="document.getElementById('schedule-form').submit();">Submit</a></p>
                    </div>
                </div>
            </form>
        </div>
        <div id="sidebar" class="sidebar col-md-4">

            <!-- Widget: Game Result -->
            <aside class="widget card widget--sidebar widget-game-result">
                <div class="widget__title card__header card__header--has-btn">
                    <h4>Poslednji rezultati</h4>
                    {{--<button class="btn btn-default btn-outline btn-xs card-header__button js-switch-toggle"><span--}}
                    {{--class="js-switch-txt" data-text-expand="Expand Stats" data-text-shrink="Shrink Stats">Expand Stats</span>--}}
                    {{--</button>--}}
                </div>
                <div class="widget__content card__content">
                    <!-- Game Score -->
                    <div class="widget-game-result__section">
                        <div class="widget-game-result__section-inner">
                            <header class="widget-game-result__header">
                                <h3 class="widget-game-result__title">Drugo kolo</h3>
                                <time class="widget-game-result__date" datetime="2016-03-24">4/11/2018</time>
                            </header>

                            <div class="widget-game-result__main">
                                <!-- 1st Team -->
                                <div class="widget-game-result__team widget-game-result__team--first">
                                    <figure class="widget-game-result__team-logo">
                                        <a href="#"><img
                                                    src="assets/images/clubs/all-stars.png"
                                                    alt=""></a>
                                    </figure>
                                    <div class="widget-game-result__team-info">
                                        <h5 class="widget-game-result__team-name">All stars</h5>
                                        {{--<div class="widget-game-result__team-desc">Elric Bros School</div>--}}
                                    </div>
                                </div>
                                <!-- 1st Team / End -->

                                <div class="widget-game-result__score-wrap">
                                    <div class="widget-game-result__score">
                                        <span class="widget-game-result__score-result widget-game-result__score-result--winner">67</span>
                                        <span class="widget-game-result__score-dash">-</span> <span
                                                class="widget-game-result__score-result widget-game-result__score-result--loser">46</span>
                                    </div>
                                    <div class="widget-game-result__score-label">Rezultat</div>
                                </div>

                                <!-- 2nd Team -->
                                <div class="widget-game-result__team widget-game-result__team--second">
                                    <figure class="widget-game-result__team-logo">
                                        <a href="#"><img src="assets/images/clubs/strsljen.png"
                                                         alt=""></a>
                                    </figure>
                                    <div class="widget-game-result__team-info">
                                        <h5 class="widget-game-result__team-name">Stršljen</h5>
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
                                        <th>All Stars</th>
                                        <td>30</td>
                                        <td>31</td>
                                        <td>22</td>
                                        <td>24</td>
                                        <td>67</td>
                                    </tr>
                                    <tr>
                                        <th>Stršljen</th>
                                        <td>22</td>
                                        <td>34</td>
                                        <td>20</td>
                                        <td>26</td>
                                        <td>46</td>
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
                                    <div class="progress__digit progress__digit--left">22</div>
                                    <div class="progress__double">
                                        <div class="progress">
                                            <div class="progress__bar progress__bar-width-60" role="progressbar"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress__bar progress__bar--info progress__bar-width-80"
                                                 role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress__digit progress__digit--right progress__digit--highlight">36</div>
                                </div>
                            </div>
                            <!-- Progress: Assists / End -->

                            <!-- Progress: Rebounds -->
                            <div class="progress-double-wrapper">
                                <h6 class="progress-title">Skokovi</h6>
                                <div class="progress-inner-holder">
                                    <div class="progress__digit progress__digit--left progress__digit--highlight">35</div>
                                    <div class="progress__double">
                                        <div class="progress">
                                            <div class="progress__bar progress__bar-width-90" role="progressbar"
                                                 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress__bar progress__bar--info progress__bar-width-40"
                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress__digit progress__digit--right">18</div>
                                </div>
                            </div>
                            <!-- Progress: Rebounds / End -->

                            <!-- Progress: Steals -->
                            <div class="progress-double-wrapper">
                                <h6 class="progress-title">Ukradene lopte</h6>
                                <div class="progress-inner-holder">
                                    <div class="progress__digit progress__digit--left">14</div>
                                    <div class="progress__double">
                                        <div class="progress">
                                            <div class="progress__bar progress__bar-width-30" role="progressbar"
                                                 aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress__bar progress__bar--info progress__bar-width-70"
                                                 role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress__digit progress__digit--right progress__digit--highlight">24</div>
                                </div>
                            </div>
                            <!-- Progress: Steals / End -->
                        </div>
                    </div>
                    <!-- Game Statistics / End -->

                    <div class="widget-game-result__extra-stats">

                        <!-- Game MVP -->
                        <div class="widget-game-result__section">
                            <header class="widget-game-result__subheader card__subheader card__subheader--sm card__subheader--nomargins">
                                <h5 class="widget-game-result__subtitle">Game MVP</h5>
                            </header>
                            <div class="widget-game-result__section-inner">
                                <div class="player-details">
                                    <div class="player-details__info">
                                        <figure class="player-details__photo">
                                            <a href="#"><img src="assets/images/samples/stats_player_02.jpg" alt=""></a>
                                        </figure>
                                        <div class="player-details__info-holder">
                                            <h5 class="player-details__name"><a href="#">Mark Stevens</a></h5>
                                            <span class="player-details__position">1st Power Forward</span>
                                        </div>
                                    </div>
                                    <div class="player-details__stats">
                                        <div class="player-details__circular circular">
                                            <div class="circular__bar" data-percent="80">
                                                <span class="circular__percents">36<small>Pts</small></span>
                                            </div>
                                        </div>
                                        <div class="player-details__circular circular">
                                            <div class="circular__bar" data-percent="60">
                                                <span class="circular__percents">18<small>Reb</small></span>
                                            </div>
                                        </div>
                                        <div class="player-details__circular circular">
                                            <div class="circular__bar" data-percent="70">
                                                <span class="circular__percents">29<small>Ast</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Game MVP / End -->

                    </div>
                </div>
            </aside>
            <!-- Widget: Game Result / End -->

        </div>
    </div>
@endsection
@section('script-extras')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="/assets/js/wickedpicker.min.js"></script>
    <script>
        $("#datepicker").datepicker();
        let options = {
            twentyFour: true,
            title: 'Game time'
        };
        $('.timepicker').wickedpicker(options);
    </script>

@endsection