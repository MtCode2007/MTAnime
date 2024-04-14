@extends('layouts.base')
@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>About Us</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.htm">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- team leader section Start -->
<section class="overflow-hidden">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-5 offset-xl-1">
                <div class="row g-3">
                    <div class="col-md-6">
                        <img src="{{URL::Asset('icons/'.'a.jpeg')}}"
                            class="img-fluid rounded-3 about-image" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="{{URL::Asset('icons/'.'b.jpeg')}}"
                            class="img-fluid rounded-3 about-image" alt="">
                    </div>
                    <div class="col-12 ratio_40">
                        <div>
                            <img src="{{URL::Asset('icons/'.'c.jpeg')}}"
                                class="img-fluid rounded-3 team-image bg-img" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="about-details">
                    <div>
                        <h2>{{$about->title1}}</h2>
                        <h3>{{$about->title2}}</h3>
                        <p>{{$about->text}}</p>
                        <button onclick="location.href = '{{route('animes.index')}}';" type="button"
                            class="btn btn-solid-default">Start now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team leader section End -->

@endsection