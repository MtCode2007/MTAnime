@extends('layouts.basic')

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <a href="#">Romance</a>
                        <span>{{$anime->title}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   @foreach ($episoides as $episoide)
                   <div class="anime__video__player">
                    {{-- <h1>{{$episoide->num}}</h1> --}}
                    {{-- <video id="player" playsinline controls data-poster="{{ asset('anime-watch.jpg') }}">
                        <source src="{{ asset('1.mp4') }}" type="video/mp4" />
                        <!-- Captions are optional -->
                        <track kind="captions" label="English captions" src="#" srclang="en" default />
                    </video> --}}
                    <iframe height="500px" width="100%" src="{{$episoide->link}}" frameborder="0">
                        not allowed
                    </iframe>
                    @endforeach
                </div>
                   

                    <h2></h2>

                    <div class="anime__details__episodes">
                        <div class="section-title">
                            <h5>List Name</h5>
                        </div>
                        {{-- {{$episoides->links()}} --}}
                        @foreach ($anime->episoides as $episoide)
                            <a href="?page={{ $episoide->num }}">Ep {{ $episoide->num }}</a>
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reviews</h5>
                        </div>
                        @foreach ($anime->comments as $comment)
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-1.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Your Comment</h5>
                        </div>
                        <form action="{{route('comments.store')}}">
                            @csrf
                            <textarea name="text" placeholder="Your Comment"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->
@endsection
