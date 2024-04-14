@extends('layouts.base')

@section('content')

<form action="{{route('about-us.update')}}" method="post">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="form-group">
            <label for="title1">Title1</label>
            <input type="text" class="form-control" value="{{$about->title1}}" name="title1" id="title1" aria-describedby="helpId"
                placeholder="set title1 here">
        </div>
        <br>
        <div class="form-group">
            <label for="title2">Title2</label>
            <input type="text" class="form-control" value="{{$about->title2}}" name="title2" id="title2" aria-describedby="helpId"
                placeholder="set title2 here">
        </div>

        <br>

        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" name="text" id="text" rows="3">{{$about->text}}</textarea>
        </div>
        <br>

        <div class="form-group">
            <label for="image1">Image1</label>
            <input type="file" class="form-control" name="image1" id="image1" aria-describedby="helpId"
                placeholder="set image1 here">
        </div>

        <br>
        <div class="form-group">
            <label for="image2">Image2</label>
            <input type="file" class="form-control" name="image2" id="image2" aria-describedby="helpId"
                placeholder="set image2 here">
        </div>

        <br>
        <div class="form-group">
            <label for="image3">Image3</label>
            <input type="file" class="form-control" name="image3" id="image3" aria-describedby="helpId"
                placeholder="set image3 here">
        </div>
        <br>
        <button class="btn btn-success" type="submit">Submit</button>

    </div>
</form>
@endsection
