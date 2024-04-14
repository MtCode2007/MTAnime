@extends('layouts.basic')

@section('content')
    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="{{ asset('img/normal-breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Our Blog</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">

            <div class="product__page__title">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6">
                        <div class="section-title">
                            <h4>Blog</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="product__page__filter">
                            <p>Category:</p>
                            <form action="" method="get">
                                <select name="category">
                                    <option value="null">الكل</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                    
                                    
                                </select>
                                <button class="btn btn-primary" type="submit">▶</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="row">
                @foreach ($blogs as $blog)
                    @if ($blog->category_id == $request->category || $request->category == 'all')
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="blog__item small__item set-bg"
                            data-setbg="{{ URL::Asset('blogImages/' . $blog->image) }}">
                            <div class="blog__item__text">
                                <p {{-- class=" bg-dark" --}}><span class="icon_calendar"></span>
                                    {{ $blog->created_at->diffForhumans() }}</p>
                                <h4 {{-- style="background-color: #808080" --}}><a
                                        href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h4>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>
            {{ $blogs->links() }}
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
