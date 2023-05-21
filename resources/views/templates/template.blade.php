<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="css/style.css" type="text/css" > --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

        <title>@yield('title_main')</title>
 
       
    </head>
    <body >
        <div class="container">
          @yield('content')
        </div>
    </body>
</html>
