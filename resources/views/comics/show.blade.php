@extends('layouts.main')

@section('title', 'comic')

@section('main-content')

@if(session('add'))
    <div class="alert alert-success">
        {{session('add')}}
    </div>
@endif

    <div class="card position-absolute top-50 start-50 translate-middle mb-3 _width">
        <div class="row g-0">
            <div class="col-2">
                <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="{{$comic->title}}">
            </div>
            <div class="col-10">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <div class="row">
                        <div class="col-4">${{$comic->price}}</div>
                        <div class="col-4">Serie: {{$comic->series}}</div>
                        <div class="col-4 mb-4">Out: {{$comic->sale_date}}</div>
                        <div class="btn-group" role="group">
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{route('comics.index')}}" class="btn btn-primary">See all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection