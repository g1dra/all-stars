@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="content col-md-8">
            <h1>Naredni meč</h1>
            <form id="schedule-form"method="POST" action="/schedule-match">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="select-league">Izaberi takmičenje</label>
                            <select name="select-league" id="select-league" class="form-control">
                                <option value="IMBCK">IMBCK</option>
                                <option value="Juniorska">Juniorska</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="location">Mjesto</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Mjesto">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="home">Tim I</label>
                            <select name="select-home" id="select-league" class="form-control">
                               @foreach($clubs as $club)
                                    <option value="" disabled selected>Izaberi domaći klub</option>
                                    <option value="{{$club->name}}">{{$club->name}}</option>
                               @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="away">Tim II</label>
                            <select name="select-road" id="select-league" class="form-control">
                                @foreach($clubs as $club)
                                    <option value="" disabled selected>Izaberi gostujući klub</option>
                                    <option value="{{$club->name}}">{{$club->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
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

            <!-- Widget: Match Announcement -->
            <aside class="widget widget--sidebar card widget-preview">
                <div class="widget__title card__header">
                    <h4 style="text-align: center">Naredni meč</h4>
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