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
                                    

                                    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    
                                        <div class="row g-4 mt-md-1 mt-2">
                                            <div class="col-md-6">
                                                <label for="first" class="form-label">العنوان</label>
                                                <input type="text" name="title" class="form-control" id="first"
                                                    placeholder="أدخل العنوان" required="">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="image" class="form-label">صورة</label>
                                                <input type="file" name="image"
                                                  class="form-control"
                                                    id="image" required="">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="email2" class="form-label">ال URL</label>
                                                <input type="url" name="url"
                                                    placeholder="رابط تصفح خارجي" class="form-control"
                                                    id="email2" >
                                            </div>
                                            <br>

                                            <div class="col-12">
                                                <label for="comment" class="form-label">caption </label>
                                                <textarea class="form-control" placeholder="..." name="caption" rows="5"
                                                    required=""></textarea>
                                            </div>

                                            <div class="page-view-filter">
                                                <div class="dropdown select-featured">
                                                    <label for="orderby" class="form-label">هل يملك زر؟</label>
                                                    <select class="form-select" name="show_btn" id="orderby">
                                                        <option value="1">نعم</option>
                                                        <option value="0">لا</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="email2" class="form-label">نص الزر</label>
                                                <input type="text" name="btn_text"
                                                    placeholder="ادخل النص الذي تريد عرضه على الزر" class="form-control"
                                                    id="email2" >
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
