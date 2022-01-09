@props([
    'title' => false
])
<th
    {{$attributes->merge(['class' => 'px-5 py-3 border-b dark:bg-zinc-900 border-gray-200 bg-gray-100 dark:text-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider text-left '])}}>
    {{$title}}
</th>
