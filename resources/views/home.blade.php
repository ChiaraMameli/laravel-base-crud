@extends('layouts.main')

@section('title', 'home')

@section('main-content')

    <table class="table table-light table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">Thumb</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Sales Date</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($comics as $comic)
            <tr>
                <td scope="row"><img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid"></td>
                <td scope="row">{{$comic->title}}</td>
                <td scope="row">{{$comic->price}}</td>
             <td scope="row">{{$comic->sale_date}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>

@endsection
