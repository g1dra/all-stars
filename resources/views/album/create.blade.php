
@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="content col-md-12">
            <h1>Kreiraj album</h1>
            @include('pages.message')
            <form id="album-form" method="POST" action="/album" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="nam">Ime albuma</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Ime albuma" value="{{old('name')}}">
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
                    <input type="file" id="cover_image" name="cover_image">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p><a href="javascript:{}" class="btn btn-primary-inverse btn-lg"
                              onclick="document.getElementById('album-form').submit();">Submit</a></p>
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

