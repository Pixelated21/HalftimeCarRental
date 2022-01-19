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

@stack('alert')

<section class="flex bg-white dark:bg-dark-mode flex-col md:flex-row h-screen items-center">

    <div class="hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
        <img src="@yield('wallpaper')" alt="" class="w-full h-full object-cover">
    </div>

    @yield('content')
</section>

@stack('scripts')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@livewireScripts
</body>
</html>
