@props([
    'spinner' => false,
    'title' => false,
])
@props([
    'spinner' => false,
    'title' => false,
])
<button {{$attributes->merge(['class' => 'w-full block bg-indigo-500 hover:bg-indigo-400 duration-300 focus:bg-indigo-400 text-white font-semibold rounded-lg
              px-4 py-3'])}}>
    <div class="flex items-center justify-center gap-4">
        @if($spinner)
            {{$spinner}}
        @endif
        {{$title}}
    </div>

</button>

