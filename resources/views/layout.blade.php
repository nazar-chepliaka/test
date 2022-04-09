<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('meta')

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        
        @yield('head-customizations')
    </head>
    @yield('body')
</html>
