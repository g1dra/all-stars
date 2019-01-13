@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="content col-md-8">
            <div class="card card--clean">
                <header class="card__header card__header--has-btn">
                    <h4>Novosti</h4>
                    @auth
                        <a href="/posts" class="btn btn-default btn-outline btn-xs card-header__button">Nazad
                            </a>
                    @endauth
                </header>
                <div class="posts posts--cards posts--cards-thumb-left post-list">
                    <div class="post-list__item">
                        <div class="posts__item posts__item--card posts__item--category-1 card card--block">
                            <figure class="posts__thumb">
                                <a href="#"><img src="/storage/posts/cover_images/{{$post->cover_image}}"
                                                 alt="{{$post->title}}"></a>
                            </figure>
                            <div class="posts__inner">
                                <div class="card__content">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">Tim</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">{{$post->title}}</a>
                                    </h6>
                                    <time datetime="2016-08-17" class="posts__date">{{$post->created_at}}</time>
                                    <div class="posts__excerpt">
                                        {!! $post->body !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('layouts.sidebar')
    </div>
    {{--<main id="page-content">--}}
    {{--<div class="container" style="margin-top: 95px">--}}
    {{--<div class="row">--}}
    {{--<div class="col-xs-12 col-md-8 col-lg-9 post-list">--}}
    {{--<article class="post-list__item format-standart">--}}
    {{--<figure class="thumbnail post-list__thumbnail">--}}
    {{--<a href="#"><img src="/storage/posts/cover_images/{{$post->cover_image}}" alt="image-not-loaded"></a>--}}
    {{--</figure>--}}
    {{--<div class="post-list__item-content">--}}
    {{--<header class="post-list__item-header">--}}
    {{--<div class="post-list__item-meta post-block_meta">--}}
    {{--<span class="date"><i class="icon-clock"></i> {{$post->created_at}}</span>--}}
    {{--</div>--}}
    {{--<h3 class="post-list__item-title">{{$post->title}}</h3>--}}
    {{--<span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>--}}
    {{--</header>--}}
    {{--<div class="post-list__item-desc">--}}
    {{--<p>{!! $post->body !!}</p>--}}
    {{--</div>--}}
    {{--<footer class="post-list__item-footer">--}}
    {{--<a href="single-post.html" class="btn">READ POST</a>--}}

    {{--</footer>--}}
    {{--</div>--}}
    {{--</article>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</main>--}}
@endsection