<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'La Molisana')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('head-script')
</head>
<body>
    @include('partials.header')
    <main>
        <div class="container">
            @yield('page-content')
        </div>
    </main>
    @include('partials.footer')
</body>
</html>