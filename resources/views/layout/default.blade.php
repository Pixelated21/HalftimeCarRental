<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <link href='https://css.gg/css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    @stack('styles')
    @livewireStyles
</head>
<body>
<x-navbars.nav :auth="true" class="bg-black" alph-name="navigation" title="HALFTIME CAR RENTAL">
    <x-slot name="end">
        <x-navbars.xtra.nav-1-link title="Home"/>
        <x-navbars.xtra.nav-1-link title="Contact Us"/>
        <x-navbars.xtra.nav-1-link title="About Us"/>
    </x-slot>
</x-navbars.nav>
@stack('alert')



@stack('scripts')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@livewireScripts
</body>
</html>
