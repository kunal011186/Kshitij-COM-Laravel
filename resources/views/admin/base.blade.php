<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link media="all" type="text/css" rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <script src="{{URL::asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <title>admin : {{ config('app.name') }}</title>
</head>

<body>
<div class="container">
<a href="{{route('admin-home')}}"><h3>admin home</h3></a>
<h2>@yield('title-bar')</h2>
<div>@yield('sub-menu')</div>
@yield('content')
</div>
</body>
</html>