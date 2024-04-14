@extends('layouts.basic')

@section('content')
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
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
                    <h3>User Dashboard</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->
    <div class="container">
        <center> <img style="border-radius: 50%" width="250px" height="250px" src="{{URL::Asset('anime-watch.jpg')}}" alt="">
            <hr>
            <h5 class="text-light">{{Auth::user()->name}}</h5>
            <br><br>
        </center>

        <div style="background-color: rgba(0, 40, 70, 99)">
            <p>caption and cv </p>
            
        </div>

    </div>
@endsection