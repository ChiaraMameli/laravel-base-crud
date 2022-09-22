@extends('layouts.main')

@section('title', 'comics')

@section('main-content')

@if(session('delete'))
    <div class="alert alert-success">
        {{session('delete')}}
    </div>
@endif

    <div class="row">
        @foreach($comics as $comic)
        <div id="card-container" class="col-3 gy-3">
            <div class="card h-100" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                <div class="card-body p-2">
                    <h5 class="card-title">{{$comic->setTitleExtract($comic)}}</h5>
                    <p class="card-text">{{$comic->setDescriptionExtract($comic)}}</p>

                    <div class="d-flex justify-content-between">
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">See details</a>
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection