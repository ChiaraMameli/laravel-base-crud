@extends('layouts.main')

@section('title', 'comic')

@section('main-content')

    <div class="card mb-3">
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
                        <div class="col-4">Out: {{$comic->sale_date}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection