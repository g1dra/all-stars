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
                            <input type="text" class="form-control" id="home" name="home" placeholder="Domaćin">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="away">Tim II</label>
                            <input type="text" class="form-control" id="away" name="away" placeholder="Gost">
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
        @include('layouts.sidebar')
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