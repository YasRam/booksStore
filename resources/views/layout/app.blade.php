<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <title>@yield('title')</title>
</head>

<body>

    @include('layout.navbar')

    <div class="container my-3">

        @yield('content')

    </div>

    <script src="{{asset('js/bootstrap.min.css')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>

</html>