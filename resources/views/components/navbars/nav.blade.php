{{--TODO Fix Multiple Center Link Scrolling Issue--}}
{{--TODO Add More Xtra's--}}
@props([
'center' => false,
'end' => false,
'auth' => false,
'title' => false,
'alphName' => false,
])

<nav {{$attributes->merge(['class' => ' shadow-md h-16 lg:h-auto'])}}

     x-data="{ {{$alphName}}:false }">
    <div class=" backdrop-blur  px-2 sm:px-4 lg:px-4">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center px-2 lg:px-0">

                <div class="block lg:ml-6">
                    <div class="flex space-x-4">
                        <div class="dark:text-white text-black font-bold py-0.5 text-xl">{{$title}}</div>
                    </div>
                </div>

            </div>


            @if($center)
                <div class="flex-1 justify-center hidden gap-2 px-6 lg:ml-6 lg:flex lg:justify-end">

                    {{$center}}

                </div>
            @endif


            @if($end)
                <div class="hidden lg:block lg:ml-4">

                    <div class="flex gap-2 items-center">
                        <div class="ml-4 flex gap-2 relative ">
                            {{$end}}
                        </div>

                        @if($auth)
                            <x-navbars.xtra.auth-actions/>
                        @endif
                    </div>
                </div>
            @endif


            <div class="flex lg:hidden  ">
                <!-- Mobile menu button -->
                <button @click="{{$alphName}} = !{{$alphName}}" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-zinc-300 hover:bg-zinc-700 dark:hover:bg-zinc-800 focus:outline-none duration-300"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg :class="{{$alphName}} ? 'hidden' : 'block' " class="block h-6 w-6"
                         xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                    <svg :class="{{$alphName}} ? 'block' : 'hidden'" xmlns="http://www.w3.org/2000/svg"
                         class="block h-6 w-6"
                         viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>

                </button>
            </div>

        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div :class="{{$alphName}} ? 'translate-x-0' : '-translate-x-full ' " class="lg:hidden backdrop-blur shadow-md dark:bg-zinc-900 bg-opacity-30 transform duration-1000"
         id="mobile-menu">
        <div class="px-2 pt-2 pb-3 flex flex-col space-y-1">
            {{$center}}

            @if($end)
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="mt-3 flex flex-col px-2 space-y-1">
                        {{$end}}

                        @if($auth)
                            <x-navbars.xtra.auth-actions/>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</nav>
