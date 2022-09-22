<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

    <title>@yield('title')</title>
</head>
<body>
<header>
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('home') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('comics.index') ? 'active' : ''}}" aria-current="page" href="{{route('comics.index')}}">Comics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('comics.create') ? 'active' : ''}}" aria-current="page" href="{{route('comics.create')}}">Insert new comic</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <div class="container">
            @yield('main-content')
        </div>
    </main>

</body>
</html>