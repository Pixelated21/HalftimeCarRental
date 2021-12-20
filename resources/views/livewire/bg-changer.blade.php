<div class="border h-screen w-full flex flex-col gap-2 justify-center items-center">
    <style>
        .red_slider::-webkit-slider-thumb {
            width: 15px;
            height: 15px;
            background-color: #e80000;
            -webkit-appearance: none;
            appearance: none;
            border: 2px solid white;
        }

        .green_slider::-webkit-slider-thumb {
            width: 15px;
            height: 15px;
            background-color: #22691c;
            -webkit-appearance: none;
            appearance: none;
            border: 2px solid white;
        }

        .blue_slider::-webkit-slider-thumb {
            width: 15px;
            height: 15px;
            background-color: #0000ff;
            -webkit-appearance: none;
            appearance: none;
            border: 2px solid white;
        }
    </style>


    <div style="background-color: rgb({{$red_slider}},{{$green_slider}},{{$blue_slider}})"
         class="h-80  w-96 border border-gray-300 rounded-md flex items-center justify-center">
        <div class="flex flex-col justify-evenly h-full rotate-90 w-10/12 gap-3">
            <input wire:model="blue_slider" wire:change="convert"
                   class="blue_slider outline-none appearance-none bg-gray-300 dark:bg-dark-input  form-range h-2 w-full opacity-50 hover:opacity-100 duration-300 opacity-100 cursor-pointer"
                   min="0" max="255" type="range">
            <input wire:model="green_slider" wire:change="convert"
                   class="green_slider outline-none appearance-none bg-gray-300 dark:bg-dark-input  form-range h-2 w-full opacity-50 hover:opacity-100 duration-300 opacity-100 cursor-pointer"
                   min="0" max="255" type="range">
            <input wire:model="red_slider" wire:change="convert"
                   class="red_slider outline-none appearance-none bg-gray-300 dark:bg-dark-input form-range  h-2 w-full opacity-50 hover:opacity-100 duration-300 cursor-pointer"
                   min="0" max="255" type="range">
        </div>
    </div>


    <div class="flex flex-col items-center justify-center gap-2">
        <form wire:submit.prevent="setColor" class="flex items-center justify-center">
            <x-form.inputs.normal-with-label-error wire:model="hex" class="text-center" :title="false"/>
            <div class="flex items-center gap-2 justify-center">
                <x-form.buttons.button-with-spinner class="mt-0 w-1/2 " title="Save"/>
                <x-form.buttons.button-with-spinner type="button" wire:click="generateRandomColor"
                                                    class="mt-0 w-1/2 bg-pink-600  hover:bg-pink-800 focus:bg-pink-800" title="Random"/>
            </div>
        </form>
    </div>


    <div class="flex gap-x-4">
        @foreach($display_colors as $display_index => $display_color)
            <button wire:click="displaySelect({{$display_index}})" class="h-8 w-8 rounded-full opacity-50 hover:opacity-100 duration-300" style="background-color: {{$display_color}}"></button>
        @endforeach
    </div>
</div>


