@props([
    'title' => false
])

<td {{$attributes->merge(['class' => "text-left px-5 py-5 border-b dark:border-gray-400 dark:bg-zinc-700 dark:text-gray-100 border-gray-200 bg-white text-sm"])}}>
    {{$title}}
</td>

