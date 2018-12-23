@extends('layouts.master')
@section('content')
    <div class="row">
        <form action="/posts" method="POST" enctype="multipart/form-data" id="post-form">
            @csrf
            <div class="container">
                <h1 style="margin-top: 25px ">Create Post</h1>
                @include('pages.message')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea id="article-ckeditor" rows=="5" class="form-control" placeholder="Insert Text" name="body"></textarea>
                </div>
                <div class="form-group">
                    <input type="file"  class="form-control-file" id="cover_image" name="cover_image">
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p><a href="javascript:{}" class="btn btn-primary-inverse btn-lg"
                              onclick="document.getElementById('post-form').submit();">Submit</a></p>
                    </div>
                </div>
            </div>
        </form>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>

    </div>


@endsection