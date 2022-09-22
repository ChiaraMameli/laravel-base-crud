@extends('layouts.main')

@section('title', 'Insert new comic')

@section('main-content')
<div class="form-container position-absolute top-50 start-50 translate-middle _width">

<form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Title" name="title">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Type" name="type">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Thumb" name="thumb">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Price" name="price">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Series" name="series">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Sale Date" name="sale_date">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Description" name="description">
                </div>
                
                <div class="col-auto">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            </div>
        </form>
</div>
@endsection