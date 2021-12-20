@props([
    'title' => false,
    'id' => false,

])

<div class="flex items-center">

<input {{$attributes->merge(['class' => 'dark:bg-dark-mode border rounded'])}}
       id="{{$id}}"
       type="checkbox">

<label for="{{$id}}" class="ml-2  block text-sm text-gray-900 dark:text-gray-200">
    {{$title}}
</label>
</div>
