@extends('layouts.master')
@section('content')


    <!-- Gallery -->
    @foreach($albums as $album)
        {{--{{dd($album)}}--}}
        <div class="gallery row">
            <div class="gallery__item col-6 col-sm-4">
                <a href="{{route('album.show',$album->id)}}" class="gallery__item-inner card">
                    <figure class="gallery__thumb">
                        <img src="/storage/cover_images/{{$album->cover_image}}" alt="">
                        <span class="btn-fab gallery__btn-fab"></span>
                    </figure>
                    <div class="gallery__content card__content">
                                    <span class="gallery__icon">
                                        <span class="icon-camera"></span>
                                    </span>
                        <div class="gallery__details">
                            <h4 class="gallery__name">{{$album->name}}</h4>
                            <div class="gallery__date">{{$album->created_at}}</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
    <!-- Gallery / End -->

    <!-- Create album -->
    @if (Auth::check())
    <div class="container">
        <div class="album-load-more">
            <a href="{{route('album.create')}}" class="btn btn-default btn-lg btn-block">Dodaj album</a>
        </div>
    </div>
    @endif
    <!-- Create album / End -->

    <!-- Team Pagination -->
    {{--<nav class="team-pagination" aria-label="Team navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><span class="page-link">...</span></li>
            <li class="page-item"><a class="page-link" href="#">16</a></li>
        </ul>
    </nav>--}}
    <!-- Team Pagination / End -->
@endsection