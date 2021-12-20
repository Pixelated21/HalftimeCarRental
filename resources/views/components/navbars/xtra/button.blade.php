@props([
'title' => 'Unnamed'
])
<button
   {{$attributes->merge(['class' => 'dark:hover:text-zinc-800 bg-zinc-500 hover:text-zinc-900 hover:bg-gray-300 font-semibold duration-300 rounded px-4 py-2'])}}
    >{{$title}}
</button>
