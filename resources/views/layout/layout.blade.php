<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        {{-- App CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- Custom CSS --}}
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <title>{{ config('app.name') }}</title>

    </head>
    <body>
        <div class="container">
            @yield('contents')
        </div>
    </body>
</html>
