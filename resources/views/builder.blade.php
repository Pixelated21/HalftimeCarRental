<!doctype html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link href="https://css.gg/css" rel="stylesheet">

    @livewireStyles
    <title>@yield('page_title')</title>
</head>
<body>

@yield('nav_bar')

@stack('toasts')

@yield('table')

@yield('bg-range')

@yield('table2')

@yield('liveClock')


@livewireScripts
@stack('scripts')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
