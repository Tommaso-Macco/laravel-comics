<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title>@yield('titlePage')</title>
</head>
<body>
    <header>
        @include('header')
    </header>


    <main>
        @yield('content')
    </main>


    <footer>
        @include('footer')
    </footer>
</body>
</html>