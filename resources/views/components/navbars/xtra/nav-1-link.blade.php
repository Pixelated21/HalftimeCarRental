@props([
    'title' => false,
    'javo' => 'Learning Components'
])
<a {{$attributes->merge(['class' => ' dark:text-zinc-200 text-black hover:bg-zinc-700 cursor-pointer hover:text-white px-3 py-2 rounded-md text-sm font-medium duration-300 '])}}>
    {{$title}}
</a>
