@props([
    'title' => 'Unnamed Input',
    'label' => true,
    'id' => false,
    'error' => false,
])

@if ($label !== false)
    <label

        @if($id !== false)
        for="{{$id}}"
        @endif

        class="block text-sm mb-0.5 font-medium text-gray-700 dark:text-gray-300"> {{$title}}

    </label>
@endif

@php

    $class = 'w-full px-4 py-3 rounded-lg caret-black dark:caret-white dark:text-gray-200  dark:bg-dark-input  bg-gray-200 ring-transparent focus:ring-2 outline-none duration-500';


    if ($error) {
        $class .='focus:ring-red-700';
        }
    else{
        $class .='focus:ring-gray-400';
    }
@endphp

<input
    {{$attributes->merge(['class' => $class])}}>

<span class="text-xs text-red-700 ml-2 font-semibold @if($error) visible @else invisible @endif">{{$error}}</span>
