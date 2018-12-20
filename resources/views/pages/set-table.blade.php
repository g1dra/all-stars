@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="content col-md-8">
            <h1>Podesi tabelu</h1>
            <form id="table-form" method="POST" action="/set-table">
                @csrf
                @foreach($clubs as $club)
                    <div class="row">
                        <div class="form-group mb-2">
                            <label for="staticEmail2" class="sr-only">Club name</label>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="{{$club->name}}" style="color:white">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" id="wins" name="wins[]" placeholder="Unijeti broj pobjeda">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" id="losses" name="losses[]" placeholder="Unijeti broj poraza">
                        </div>
                    </div>
                @endforeach
                <br>
                <div class="row">

                    <div class="col-md-3">
                        <p><a href="javascript:{}" class="btn btn-primary-inverse btn-lg"
                              onclick="document.getElementById('table-form').submit();">Submit</a></p>
                    </div>
                </div>
            </form>
        </div>
        <div id="sidebar" class="sidebar col-md-4">

            <!-- Widget: Standings -->
            <aside class="widget card widget--sidebar widget-standings">
                <div class="widget__title card__header card__header--has-btn">
                    <h4>Rezultati</h4>
                    <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">Vidi rezultate</a>
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

                            <tr>
                                <td>
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="assets/images/clubs/all-stars.png" alt="All Stars">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">All Stars</h6>
                                            {{--<span class="team-meta__place">Bebop Institute</span>--}}
                                        </div>
                                    </div>
                                </td>
                                <td>2</td>
                                <td>0</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="assets/images/clubs/teodo.png" alt="Teodo">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">Teodo</h6>
                                            {{--<span class="team-meta__place">Marine College</span>--}}
                                        </div>
                                    </div>
                                </td>
                                <td>2</td>
                                <td>0</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="assets/images/clubs/rudar.png" alt="Rudar">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">Rudar</h6>
                                            {{--<span class="team-meta__place">Eric Bros School</span>--}}
                                        </div>
                                    </div>
                                </td>
                                <td>1</td>
                                <td>1</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="assets/images/clubs/kotor.png" alt="Kotor">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">Kotor</h6>
                                            {{--<span class="team-meta__place">Bay College</span>--}}
                                        </div>
                                    </div>
                                </td>
                                <td>1</td>
                                <td>1</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="assets/images/clubs/lim.png" alt="Lim">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">Lim</h6>
                                            {{--<span class="team-meta__place">Icarus College</span>--}}
                                        </div>
                                    </div>
                                </td>
                                <td>0</td>
                                <td>0</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="team-meta">
                                        <figure class="team-meta__logo">
                                            <img src="assets/images/clubs/strsljen.png" alt="Stršljen">
                                        </figure>
                                        <div class="team-meta__info">
                                            <h6 class="team-meta__name">Stršljen</h6>
                                            {{--<span class="team-meta__place">St. Patrick’s Institute</span>--}}
                                        </div>
                                    </div>
                                </td>
                                <td>0</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <!-- Widget: Standings / End -->

        </div>
    </div>
@endsection
