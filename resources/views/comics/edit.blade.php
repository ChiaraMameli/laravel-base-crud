@extends('layouts.main')

@section('title', 'Edit a comic')

@section('main-content')

        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{$comic->title}}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Type" name="type" value="{{$comic->type}}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Thumb" name="thumb" value="{{$comic->thumb}}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Price" name="price" value="{{$comic->price}}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Series" name="series" value="{{$comic->series}}">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Sale Date" name="sale_date" value="{{$comic->sale_date}}">
                </div>
                <div class="col-12">
                    <textarea class="form-control" name="description" rows="4">{{$comic->description}}</textarea>
                </div>
                
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>


@endsection