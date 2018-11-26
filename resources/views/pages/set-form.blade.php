@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label" for="select-league">Izaberi takmičenje</label>
                <select name="select-league" id="select-league" class="form-control">
                    <option value="Canada">IMBCK</option>
                    <option value="Canada">Juniorska</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label" for="input-default">Tim I</label>
                <input type="text" class="form-control" id="input-default" placeholder="Domaćin">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label" for="input-default">Tim II</label>
                <input type="text" class="form-control" id="input-default" placeholder="Gost">
            </div>
        </div>
    </div>

@endsection