<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light shadow">
    <div class="container">
        <a href="" class="navbar-brand">Laravel App</a>
        <ul class="navbar-nav">
            <li><a class="nav-link" href="{{route('home')}}">Home</a></li>
            <li><a class="nav-link" href="{{route('about')}}" >About</a></li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" >Blog Module</a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{route('blog.add-blog')}}">Add Blog</a>
                        <a class="dropdown-item" href="{{route('blog.manage-blog')}}">Manage Blog</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                @if(Session::get('user_id'))
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{route('login')}}">{{Session::get('user_name')}}</a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="" class="dropdown-item">Profile</a>
                        <a href="{{route("logout")}}" class="dropdown-item">Log Out</a>
                    </li>
                </ul>
                @else
                    <a href="" class="nav-link">Log In</a>
                @endif
            </li>
        </ul>
    </div>
</nav>
@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>
