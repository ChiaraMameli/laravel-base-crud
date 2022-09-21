@extends('layouts.main')

@section('title', 'comics')

@section('main-content')

        <div class="container">
            <div class="row">
                @foreach($comics as $comic)
                <div id="card-container" class="col-3 gy-3">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                        <div class="card-body p-2">
                            <h5 class="card-title">{{$comic->setTitleExtract($comic)}}</h5>
                            <p class="card-text">{{$comic->setDescriptionExtract($comic)}}</p>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">See details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

@endsection