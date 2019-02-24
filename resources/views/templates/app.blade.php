<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<body>
<header>
    @include('partials.header')
</header>
<main class="container-fluid">
    <section class="d-flex">
        @include('partials.sidebar')
        <div class="container col-9">
            @yield('content')
        </div>
    </section>
</main>
<footer>
    @include('partials.footer')
</footer>
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/custom.js")}}"></script>
</body>
</html>
