{{--TODO Fix Search--}}

{{--Search Input--}}
{{--<div class="block relative">--}}
{{--                    <span class="h-full absolute mt-0.5 inset-y-0 left-0 flex items-center pl-2">--}}
{{--                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">--}}
{{--                            <path--}}
{{--                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">--}}
{{--                            </path>--}}
{{--                        </svg>--}}
{{--                    </span>--}}
{{--    <x-form.inputs.normal-with-label-error type="search"--}}
{{--                                           class="pl-8 duration-300 dark:placeholder:text-gray-300 text-sm"--}}
{{--                                           :title="false"--}}
{{--                                           placeholder="Search"--}}
{{--    />--}}
{{--</div>--}}

@props([
    'title' => false,
    'pagination' => false,
    'button' => false,
    'select' => false,
    'search' => false
])

<div {{$attributes->merge(['class' => 'container mx-auto px-4 sm:px-8'])}}>
    <div class="mt-4">
        @if ($title)
            <div class=" flex sm:flex-row flex-col  items-center justify-between">
                <div>
                    <h2 class="text-2xl font-semibold  leading-tight">{{$title}}</h2>
                </div>

                <div class=" flex sm:flex-row flex-col">

                    <div class="flex flex-row mb-1 sm:mb-0">
                        @if($select)
                            {{$select}}
                        @endif
                    </div>

                    @if($search)
                        {{$search}}
                    @endif
                </div>

            </div>
        @endif

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="w-full shadow rounded-lg overflow-hidden">
                <table class="w-full leading-normal">

                    <thead>

                    <x-Table.table-row>
                        {{$thead}}
                    </x-Table.table-row>

                    </thead>

                    <tbody>
                    {{$tbody}}
                    </tbody>
                </table>
            </div>
            <div class="relative gap-3 flex items-center justify-between mt-2">


                @if ($button)
                    <div class="gap-2 flex">
                        {{$button}}
                    </div>
                @endif

                @if($pagination)
                    <div>
                        {{$pagination}}
                    </div>
                @endif

            </div>


        </div>
    </div>
</div>
