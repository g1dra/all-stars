
@extends('layouts.master')
@section('content')
    <!-- Content
		================================================== -->
    </div>
    <div class="site-content">

        <div class="container">
            <div class="content-title">
                <h2 class="content-title__h">Photoshoot for 2017</h2>
                <a href="{{route('album.index')}}" class="btn btn-xs btn-default btn-outline">Svi Albumi</a>
                @if (Auth::check())
                    <a href="{{route('image.create',$album->id)}}" class="btn btn-xs btn-default btn-outline">Dodaj sliku</a>
                @endif
            </div>
        </div>

        <!-- Album -->
        <div class="album album--condensed container-fluid js-album-masonry">
            <div class="row">
                @foreach($album->photos as $photo)
                    <div class="album__item col-xs-6 col-sm-4">
                        <div class="album__item-holder">
                            <a href="/storage/gallery/{{$photo->image}}" class="album__item-link mp_gallery">
                                <figure class="album__thumb">
                                    <img src="/storage/gallery/{{$photo->image}}" alt="">
                                </figure>
                                <div class="album__item-desc">
                                    <h4 class="album__item-title">{{$photo->image}}</h4>
                                    <time class="album__item-date" datetime="2016-08-23">{{$photo->created_at}}</time>
                                    <span class="album__item-btn-fab btn-fab btn-fab--clean"></span>
                                    @if (Auth::check())
                                    <span class="album__item-btn-fab btn-fab all-stars-red" onclick="myFunction({{$photo->id.",".$album->id}});"></span>
                                    @endif
                                </div>
                            </a>
                           {{-- <ul class="album__item-meta meta">--}}
                                {{--<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>--}}
                            {{--</ul>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Gallery Album / End -->

        <!-- Add image -->
        @if (Auth::check())
        <div class="container">
            <div class="album-load-more">
                <a href="{{route('image.create',$album->id)}}" class="btn btn-default btn-lg btn-block">Dodaj sliku</a>
            </div>
        </div>
        @endif
        <!-- Add image / End -->

    </div>
    <script>
        function myFunction(id,album_id) {
            if(confirm("Izbrisati sliku?")) {
                $.ajax({
                    url: '/image/'+id,
                    type: 'DELETE',
                    data: {"_token": "{{csrf_token()}}"},
                    success: function (result) {
                        location.href="/album/"+album_id;
                    },
                    error: function (request, mgs, error) {
                        console.log("error");
                    }
                });
            }
            else {
                return '';
            }
        }
    </script>
    <!-- Content / End -->
@endsection

