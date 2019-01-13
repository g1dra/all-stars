@extends('layouts.master')
@section('content')
    <div class="row">
        <!-- Content -->
        <div class="content col-md-8">
            <!-- Lates News -->
            <div class="card card--clean">
                <header class="card__header card__header--has-btn">
                    <h4>Novosti</h4>
                    @auth
                        <a href="/posts/create" class="btn btn-default btn-outline btn-xs card-header__button">Dodaj novi članak</a>
                    @endauth
                </header>
                <div class="card__content">
                    <!-- Posts List -->
                    <div class="posts posts--cards posts--cards-thumb-left post-list">
                        @foreach($posts as $post)
                            <div class="post-list__item">
                                <div class="posts__item posts__item--card posts__item--category-1 card card--block">
                                    <figure class="posts__thumb">
                                        <a href="/posts/{{$post->id}}"><img src="/storage/posts/cover_images/{{$post->cover_image}}"
                                                         alt="{{$post->title}}"></a>
                                        @auth
                                            <a href="#" onclick="deletePost(event,{{$post->id}})" class="posts__cta" style="right:20px !important; left: unset!important; background-color: red;"></a>
                                        @endauth
                                    </figure>
                                    <div class="posts__inner">
                                        <div class="card__content">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">Tim</span>
                                            </div>
                                            <h6 class="posts__title"><a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                            </h6>
                                            <time datetime="2016-08-17" class="posts__date">{{$post->created_at}}</time>
                                            <div class="posts__excerpt">
                                                {!! $post->body !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Posts List / End -->
                </div>
            </div>
            <!-- Lates News / End -->


        </div>
        @include('layouts.sidebar')
    </div>
    <!-- Content / End -->

    <!-- Sidebar -->

    <!-- Sidebar / End -->
    <script>
        function deletePost(e,post_id) {
            e.preventDefault();
            if(confirm("Izbriši članak?")) {
                $.ajax({
                    url: '/posts/' + post_id,
                    type: 'DELETE',
                    data: {"_token": "{{csrf_token()}}"},
                    success: function (result) {
                        location.href="/";
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
@endsection
