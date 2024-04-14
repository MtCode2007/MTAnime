@extends('layouts.base')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
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

                        <div class="box-head mb-3">
                            <h3>تدوينة جديدة</h3>
                        </div>
                        <section class="contact-section">
                            <div class="container">
                                <div class="row g-4">
                                            {{-- @if (Auth::user()->utype === "admin") --}}
                                            <div class="materialContainer">
                                                <div class="material-details">
                                                    <div class="title title1 title-effect mb-1 title-left">
                                                        
                                                        <p class="ms-0 w-100">Your email address will not be published. Required fields are
                                                            marked *</p>
                                                    </div>
                                                </div>
                                                
                                                <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    
                                                    
                                                    <div class="row g-4 mt-md-1 mt-2">
                                                        <div class="col-md-6">
                                                            <label for="first" class="form-label">العنوان</label>
                                                            <input type="text" name="title" class="form-control" id="first" placeholder="ما هو عنوان التدوينة ؟"
                                                                required="">
                                                        </div>
                                                       
                                                        <div class="col-md-6">
                                                            <label for="offer" class="form-label">حدد صنف</label>
                                                            <select class="form-select" name="category_id" id="orderby">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                       
                                                        <div class="col-md-6">
                                                            <label for="email2" class="form-label">الصورة</label>
                                                            <input type="file" name="image" class="form-control" id="email2" required="">
                                                        </div>
                                                        
                                                        <br><br>
                                                        
                                                        <div class="col-12">
                                                            <label for="comment" class="form-label">النص</label>
                                                            <textarea class="form-control"  name="text" rows="5" required=""></textarea>
                                                        </div>
                        
                                                        <div class="col-auto">
                                                            <button class="btn btn-solid-default" type="submit">نشر</button>
                                                        </div>
                                                    </div>
                                                </form>
                        
                                                
                                            </div>
                                            {{-- @else
                                                <center><h1 class="alert alert-info">Sorry This Service is not avillable</h1></center>
                                                <h3>Please Contact this mail to get the admin panel : mohamedtaofig@gmail.com</h3>
                                            @endif --}}
                                            
                                </div>
                            </div>
                        </section>
            </div>
        </div>
    </div>
    </section>
@endsection

    



