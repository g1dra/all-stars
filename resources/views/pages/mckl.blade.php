@extends('layouts.master')
@section('content')
    <div class="card card--has-table">
        <div class="card__header card__header--has-btn">
            <h4>Rezultati</h4>
            <!-- Result Filter -->
            {{--<ul class="team-result-filter">
                <li class="team-result-filter__item">
                    <select class="form-control input-xs">
                        <option>Playoffs 2016</option>
                        <option>Playoffs 2015</option>
                        <option>Playoffs 2014</option>
                    </select>
                </li>
                <li class="team-result-filter__item">
                    <select class="form-control input-xs">
                        <option>December 2016</option>
                        <option>November 2016</option>
                        <option>October 2016</option>
                        <option>September 2016</option>
                        <option>August 2016</option>
                        <option>July 2016</option>
                        <option>June 2016</option>
                        <option>May 2016</option>
                        <option>April 2016</option>
                        <option>March 2016</option>
                        <option>February 2016</option>
                        <option>January 2016</option>
                    </select>
                </li>
                <li class="team-result-filter__item">
                    <select class="form-control input-xs">
                        <option>Ascending</option>
                        <option>Descending</option>
                    </select>
                </li>
                <li class="team-result-filter__item">
                    <button type="submit" class="btn btn-default btn-outline btn-xs card-header__button">Filter Latest Results</button>
                </li>
            </ul>--}}
            <!-- Result Filter / End -->
        </div>
        <div class="card__content">
            <div class="table-responsive">
                <table class="table table-hover team-result">
                    <thead>
                    <tr>
                        <th class="team-result__date">Datum</th>
                        <th class="team-result__vs">Protivnik</th>
                        <th class="team-result__score">Score</th>
                        <th class="team-result__status">Status</th>
                        <th class="team-result__points">Asistencije</th>
                        <th class="team-result__rebounds">Skokovi</th>
                        <th class="team-result__assists">Ukradene lopte</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($latestResults as $res)
                        <tr>
                            @if($res->home == "All Stars")
                                <td class="team-result__date">{{$res->date}}</td>
                                <td class="team-result__vs">
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="{{$logos[$res->guest]}}" alt="{{$res->guest}}">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">{{$res->guest}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-result__score"><span class="team-result__game">{{$res->home_points > $res->guest_points? "W" : "L"}}
                                    </span> {{$res->home_points}}-{{$res->guest_points}}
                                </td>
                                <td class="team-result__status">Domaćin</td>
                                <td class="team-result__points">{{$res->home_assists}}</td>
                                <td class="team-result__rebounds">{{$res->home_rebounds}}</td>
                                <td class="team-result__assists">{{$res->home_steals}}</td>
                            @else
                                <td class="team-result__date">{{$res->date}}</td>
                                <td class="team-result__vs">
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="{{$logos[$res->home]}}" alt="{{$res->home}}">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">{{$res->home}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="team-result__score"><span class="team-result__game">{{$res->home_points > $res->guest_points? "L" : "W"}}
                                    </span> {{$res->guest_points}}-{{$res->home_points}}
                                </td>
                                <td class="team-result__status">Domaćin</td>
                                <td class="team-result__points">{{$res->guest_assists}}</td>
                                <td class="team-result__rebounds">{{$res->guest_rebounds}}</td>
                                <td class="team-result__assists">{{$res->guest_steals}}</td>
                            @endif
                        </tr>
                   @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection