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
                            <h3>انمي جديد</h3>
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
                                                
                                                <form action="{{route('animes.store')}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="page-view-filter">
                                                        <div class="dropdown select-featured">
                                                            <select class="form-select" name="status" id="orderby">
                                                                <option value="مكتمل">مكتمل</option>
                                                                <option value="مستمر">مستمر</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="page-view-filter">
                                                        <div class="dropdown select-featured">
                                                            <select class="form-select" name="type" id="orderby">
                                                                <option value="1">الحديثة</option>
                                                                <option value="2">المشهورة</option>
                                                                <option value="3">مميزة</option>
                                                                <option value="4">افضلها شخصيا</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row g-4 mt-md-1 mt-2">
                                                        <div class="col-md-6">
                                                            <label for="first" class="form-label">العنوان</label>
                                                            <input type="text" name="title" class="form-control" id="first" placeholder="ما هو اسم الانمي؟"
                                                                required="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="last" class="form-label">عدد الحلقات</label>
                                                            <input type="number" class="form-control" name="episoide_count" id="last" placeholder="كم عدد حلقات الانمي؟"
                                                                required="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="offer" class="form-label">الاستوديو</label>
                                                            <select class="form-select" name="studio_id" id="orderby">
                                                                @foreach ($studios as $studio)
                                                                    <option value="{{$studio->id}}">{{$studio->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="email2" class="form-label">التقييم</label>
                                                            <input type="number" value="1" name="rating" max="10" min="1" class="form-control" id="email2"
                                                                placeholder="حاليا يتم ادخال التقييم يدويا لحين التعديل القادم..."  required="">
                                                        </div>
                        
                                                        <div class="col-md-6">
                                                            <label for="email2" class="form-label">صورة غلاف الانمي</label>
                                                            <input type="file" name="image" placeholder="يفضل ان تكون صورة الغلاف الرسمية" class="form-control" id="email2" required="">
                                                        </div>
                                                        
                                                        <div class="col-md-6">
                                                            <label for="email2" class="form-label">ال Trailer</label>
                                                            <input type="url" name="trailer" placeholder="يفضل ان يكون الرابط من اليوتيوب" class="form-control" id="email2" required="">
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            
                                                            <div class="form-check col">
                                                                <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="tags" id="" value="رياضي" >
                                                                رياضي
                                                                </label>
                                                            </div>
                        
                                                            <div class="form-check col">
                                                                <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="tags" id="" value="مدرسي" >
                                                                مدرسي
                                                                </label>
                                                            </div>
                        
                                                            <div class="form-check col">
                                                                <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="tags" id="" value="قتال" >
                                                                قتال
                                                                </label>
                                                            </div>
                        
                                                            <div class="form-check col">
                                                                <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="tags" id="" value="علوم" >
                                                                علوم
                                                                </label>
                                                            </div>
                        
                                                            <div class="form-check col">
                                                                <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="tags" id="" value="كوميدي" >
                                                                كوميدي
                                                                </label>
                                                            </div>
                        
                                                            <div class="form-check col">
                                                                <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="tags" id="" value="ألعاب" >
                                                                ألعاب
                                                                </label>
                                                            </div>
                                                            
                                                            <div class="form-check col">
                                                                <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" name="tags" id="" value="فنون" >
                                                                فنون
                                                                </label>
                                                            </div>
                        
                                                        </div>
                                                        
                                                        
                        
                                                        <div class="col-12">
                                                            <label for="comment" class="form-label">الوصف</label>
                                                            <textarea class="form-control" placeholder="تفاصيل شاملة تروي احداث الانمي" name="details" rows="5" required=""></textarea>
                                                        </div>
                        
                                                        <div class="col-auto">
                                                            <button class="btn btn-solid-default" type="submit">Submit</button>
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

    



