<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Specific Stylesheet : --}}
    @yield('css')
</head>

<body>

    @section('header')
    <header>
        <div class="header-bloc">
            <div class="header">
                <h1>@yield('page_title')</h1>
            </div>
        </div>
    </header>
    @show

    @yield('content')


</body>

</html>
