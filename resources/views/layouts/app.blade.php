<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')|{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>
<body>
@include('header')
<div class="container">
    @yield('content')
</div>
@include('footer')
</body>
</html>