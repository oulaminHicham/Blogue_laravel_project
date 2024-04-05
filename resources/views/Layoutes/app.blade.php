<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{url('bootstrap.min.css')}}>
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-white">
    @section('nav')
        <nav class="mb-3">
        <ul class="nav justify-content-between bg-light p-3 m-0">
         <div>
          <li class="nav-item mx-5">
            <a class="nav-link fs-4 text-dark" href="#">hicham blogs</a>
          </li>
         </div>
          <div class="d-flex justify-content-between">
            <li class="nav-item mx-5">
              <a class="nav-link fs-4 text-dark" href="{{route('posts.index')}}">All Posts</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link fs-4 text-dark" href="#">Contact</a>
            </li>
          </div>
        </ul>
      </nav>
    @show
    <div class="contianer">
        @yield('content')
    </div>
</body>
</html>