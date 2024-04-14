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
                

                <div class="tab-content" id="myTabContent">


                        <div class="box-head">
                            <h3>اضافة حلقة</h3>
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#resetEmail">Edit</a>
                        </div>

                        <section class="contact-section">
                            <div class="container">
                                <div class="row g-4">
                                            {{-- @if (Auth::user()->utype === "admin") --}}
                                            <div class="materialContainer">
                                                <div class="material-details">
                                                    <div class="title title1 title-effect mb-1 title-left">
                                                        <h2>اضافة حلفة</h2>
                                                        <p class="ms-0 w-100">Your email address will not be published. Required fields are
                                                            marked *</p>
                                                    </div>
                                                </div>
                                                
                                                <form action="{{route('episoides.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('POST')
                                                    
                                                    
                                                    <div class="row g-4 mt-md-1 mt-2">
                                                        <div class="col-md-6">
                                                            <label for="first" class="form-label">رقم الحلقة</label>
                                                            <input type="number" name="num" class="form-control" id="first" placeholder="رقم الحلقة"
                                                                required="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="last" class="form-label">تاريخ نشر الحلقة</label>
                                                            <input type="date" class="form-control" name="date" id="last" placeholder="متى اطلق الاستويو هذه الحلقة؟"
                                                                required="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="offer" class="form-label">الحالة</label>
                                                            <select class="form-select" name="status" id="orderby">
                                                                <option value="فلر">فلر</option>
                                                                <option value="تابع للانمي">تابع للانمي</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="email2" class="form-label">رابط الحلقة</label>
                                                            <input type="url" name="link" placeholder="أدخل رابط حلقة الانمي" class="form-control" id="email2" required="">
                                                        </div>

                                                        <label for="anime_id" class="form-label">الانمي</label>
                                                            <select class="form-select" name="anime_id" id="anime_id">
                                                                @foreach ($animes as $anime)
                                                                    <option value="{{$anime->id}}">{{$anime->title}}</option>
                                                                @endforeach
                                                            </select>
                        
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
    </div>
    </section>
@endsection

    



