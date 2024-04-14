@extends('layouts.base')

@section('content')


    @if($errors->any())
        <div class="alert alert-danger container" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif


<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="container pt-5">
            <label for="name">الاسم:</label>
            <input type="text" id="name" value="{{old('name')}}" name="name" class="form-control" aria-label="Text input with checkbox">
            
            <br>
            <button class="btn btn-success" type="submit">انشاء</button>
        </div>

</form>
@endsection
