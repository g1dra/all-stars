
@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="content col-md-12">
            <h1>Dodaj sliku</h1>
            @include('pages.message')
            <form id="image-form" method="POST" action="/image/create/{{$album_id}}" enctype="multipart/form-data">
                @csrf
                {{--<div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="album_id">Ime slike</label>
                            <select name="album_id" id="select-album" class="form-control">
                                @foreach($albums as $album)
                                <option value="{{$album->id}}}">{{$album->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>--}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="name">Ime slike</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Ime slike" value="{{old('name')}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="body">Opis:</label>
                            <textarea id="article-ckeditor" rows=="5" class="form-control" placeholder="Insert Text" name="description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="images[]" multiple />
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p><a href="javascript:{}" class="btn btn-primary-inverse btn-lg"
                              onclick="document.getElementById('image-form').submit();">Submit</a></p>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection

