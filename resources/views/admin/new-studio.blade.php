@extends('layouts.base')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif





    {{--  --}}

    <section class="section-b-space">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-solid-default btn-sm fw-bold filter-btn">القائمة</button>
                    </div>



                    {{-- add Anime --}}

                    <section class="contact-section">
                        <div class="container">
                            <div class="row g-4">
                                {{-- @if (Auth::user()->utype === 'admin') --}}
                                <div class="materialContainer">
                                    <div class="material-details">
                                        <div class="title title1 title-effect mb-1 title-left">

                                            <p class="ms-0 w-100">Your email address will not be published. Required fields
                                                are
                                                marked *</p>
                                        </div>
                                    </div>

                                    <form action="{{ route('studio.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')

                                        <div class="row g-4 mt-md-1 mt-2">
                                            <div class="col-md-6">
                                                <label for="first" class="form-label">العنوان</label>
                                                <input type="text" name="name" class="form-control" id="first"
                                                    placeholder="ما هو اسم الاستوديو؟" required="">
                                            </div>


                                            <div class="col-md-6">
                                                <label for="email2" class="form-label">شعار الاستوديو(اختياري)</label>
                                                <input type="file" name="logo" class="form-control" id="email2"
                                                    >
                                            </div>


                                            <div class="col-auto">
                                                <button class="btn btn-solid-default" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>


                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
