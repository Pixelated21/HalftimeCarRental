@props([
    'type' => 'success',
    'title' => 'Unnamed Alert',
    'alphName' => false,
    'alert' => false
])

@php
    $color;
    $title_color;

    if ($type === 'success'){
        $color = 'bg-green-500';
        $title_color = 'text-green-500';
    }
    if ($type === 'info'){
        $color = 'bg-blue-500';
        $title_color = 'text-blue-500';
    }
    if ($type === 'warning'){
        $color = 'bg-yellow-400';
        $title_color = 'text-yellow-500';

    }
    if ($type === 'error'){
        $color = 'bg-red-500';
        $title_color = 'text-red-500';
    }

@endphp

@if($alert === 1)

    <div
        x-cloak
        :class="{{$alphName}} ? 'translate-x-0' : 'translate-x-full'"
        {{$attributes->merge(['class' => 'flex transform border  fixed  duration-1000  md:w-2/4 sm:w-3/4 w-2/3 max-w-sm overflow-hidden bg-white rounded-l-lg backdrop-blur bg-opacity-30 shadow-md dark:bg-dark-mode'])}}>
        <div class="flex items-center justify-center w-12 {{$color}}">
            @if($type === 'success')
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                </svg>
            @elseif($type === 'info')
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
                </svg>
            @elseif($type === 'warning')
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
                </svg>
            @elseif($type === 'error')
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"/>
                </svg>
            @endif

        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold {{$title_color}}">{{ucfirst($type)}}</span>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-200">{{$title}}</p>
            </div>
        </div>

    </div>
@elseif($alert === 2)

    @php
        $class = 'flex items-center fixed backdrop-blur bg-opacity-90  duration-1000 transform  md:w-1/4 w-1/2 p-4 text-white ';
        $class .= $color;
    @endphp

    <div :class="{{$alphName}} ? 'translate-x-0' : 'translate-x-full'"
        {{$attributes->merge(['class' => $class])}}>

        @if($type === 'success')
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
            </svg>
        @elseif($type === 'info')
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
            </svg>
        @elseif($type === 'warning')
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"/>
            </svg>
        @elseif($type === 'error')
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"/>
            </svg>
        @endif

        <p class="ml-3 font-bold">{{$title}}</p>
    </div>

@elseif($alert === 3)


    @php
        $class = 'border-4 lg:w-1/4 transform duration-1000  md:w-2/4 sm:w-3/4 w-2/3  fixed ';

        if ($type === 'success'){
        $color = 'bg-green-500';
        $class .= 'border-green-500';
    }
    if ($type === 'info'){
        $color = 'bg-blue-500';
        $class .= 'border-blue-500';
    }
    if ($type === 'warning'){
        $color = 'bg-yellow-500';
        $class .= 'border-yellow-500';

    }
    if ($type === 'error'){
        $color = 'bg-red-500';
        $class .= 'border-red-500';
    }
    @endphp

    <div
        :class="{{$alphName}} ? 'translate-x-0' : 'translate-x-full'"
        {{$attributes->merge(['class' => $class])}}>
        <div class="px-4 py-2 {{$color}}">
            <p class="text-sm font-bold text-white dark:text-gray-200">{{ucfirst($type)}}</p>
        </div>

        <div class="p-4 backdrop-blur bg-opacity-30">
            <p class="text-lg font-bold text-black dark:text-gray-300">{{$title}}</p>
        </div>
    </div>

@endif
