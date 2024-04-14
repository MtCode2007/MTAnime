@extends('layouts.base')

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
                    <h3>Admin Dashboard</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- user dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light active" id="tab" data-bs-toggle="tab"
                                data-bs-target="#new-anime" type="button"><i class="fas fa-angle-right"></i>Add Anime</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#new-episoide"
                                type="button"><i class="fas fa-angle-right"></i>Add Episoide</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab"
                                data-bs-target="#new-blog" type="button"><i
                                    class="fas fa-angle-right"></i>Add a blogger</button>
                        </li>
                        
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab"
                                data-bs-target="#new-category" type="button"><i
                                    class="fas fa-angle-right"></i>blogger category</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab" data-bs-target="#save"
                                type="button"><i class="fas fa-angle-right"></i>Saved
                                Address</button>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Show Menu</button>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="new-anime">
                            <div class="dashboard-right">
                                <div class="dashboard">
                                    <div class="page-title title title1 title-effect">
                                        <h2>New Anime</h2>
                                    </div>

                                    <iframe height="500px" width="100%" src="{{route('animes.create')}}" frameborder="0"></iframe>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="new-episoide">
                            <div class="box-head mb-3">
                                <h3>My Order</h3>
                            </div>
                            <div class="table-responsive">
                                <iframe height="400px" width="100%" src="{{route('episoides.create')}}" frameborder="0"></iframe>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="new-blog">
                            <div class="box-head mb-3">
                                <h3>My Wishlish</h3>
                            </div>
                            <div class="table-responsive">
                                <iframe height="400px" width="100%" src="{{route('blog.create')}}" frameborder="0"></iframe>
                            </div>
                        </div>

                        <div class="tab-pane fade dashboard" id="new-category">
                            <div class="box-head">
                                <h3>Create category </h3>
                                
                            </div>
                            <div class="save-details-box">
                                <iframe height="450px" width="100%" src="{{route('category.create')}}" frameborder="0"></iframe>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade dashboard" id="save">
                            <div class="box-head">
                                <h3>Create slider </h3>
                                
                            </div>
                            <div class="save-details-box">
                                <iframe height="450px" width="100%" src="{{route('slider.create')}}" frameborder="0"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->
@endsection
