<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

    <title>Create</title>
</head>
<body>
    <div class="container">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>
</body>
</html>