@extends('layouts.master')


@section('content')
    <!-- Team Roster: Grid Slider -->
    <div class="team-roster team-roster--grid-sm js-team-roster--grid-sm row">
        @foreach($pairs as $pair)
            <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Member #1 -->
                {{--{{dd($pair[0]->img)}}--}}
            @foreach($pair as $player)
                <div class="team-roster__item">
                <div class="team-roster__holder">
                    <figure class="team-roster__img">
                        <a href="#">
                            <img src="assets/images/players_small/{{$player->img}}" alt="">
                            <span class="btn-fab"></span>
                        </a>
                    </figure>
                    <div class="team-roster__content">
                        <header class="team-roster__member-header">
                            <div class="team-roster__member-number">{{$player->number}}</div>
                            <h2 class="team-roster__member-name">
                                <span class="team-roster__member-first-name">{{explode(' ',$player->name)[0]}}</span>
                                <span class="team-roster__member-last-name">{{explode(' ',$player->name)[1]}}</span>
                            </h2>
                        </header>
                        <div class="team-roster__member-subheader">
                            {{--<div class="team-roster__member-position">1st Shooting Guard</div>--}}
                        </div>
                        <ul class="team-roster__member-details list-unstyled">
                            <li class="team-roster__member-details-item"><span class="item-title">Born:</span> <span class="item-desc">{{$player->date_of_birth}}</span></li>
                            <li class="team-roster__member-details-item"><span class="item-title">Height:</span> <span class="item-desc">{{$player->height}} cm</span></li>
                            {{--<li class="team-roster__member-details-item"><span class="item-title">Weight:</span> <span class="item-desc">250lbs</span></li>--}}
                            <li class="team-roster__member-details-item"><span class="item-title">Age:</span> <span class="item-desc">{{$player->age}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Team Member #1 / End -->

            <!-- Team Member #4 -->

            <!-- Team Member #4 / End -->
        </div>
        @endforeach


    </div>
    <!-- Team Roster: Grid Slider / End -->
@endsection