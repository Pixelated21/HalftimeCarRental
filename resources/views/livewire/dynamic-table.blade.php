<div class=" justify-center flex flex-col items-center">

    <div class="h-screen w-full">
{{--        {{dd($countryStatus)}}--}}

        <x-table.table title="Covid Cases">

            <x-slot name="search">
                <div class="block relative">
                    <span class="h-full absolute mt-0.5 inset-y-0 left-0 flex items-center pl-2">
                        <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                            <path
                                d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                            </path>
                        </svg>
                    </span>
                    <x-form.inputs.normal-with-label-error type="search"
                                                           class="pl-8 duration-300 dark:placeholder:text-gray-300 text-sm"
                                                           :title="false"
                                                           placeholder="Search"
                                                           wire:model="countryCode"
                    />
                </div>
            </x-slot>

            <x-slot name="thead">
                <x-table.table-head title="Country"/>
                <x-table.table-head title="Country Code"/>
                <x-table.table-head title="Confirmed Cases"/>
                <x-table.table-head title="Recovered Cases"/>
                <x-table.table-head title="Critical Cases"/>
                <x-table.table-head title="Deaths"/>
            </x-slot>

            <x-slot name="tbody">
                @if(!empty($countryStatus))
                <x-table.table-row>
                    <x-table.table-cell :title="$countryStatus[0]->country"/>
                    <x-table.table-cell :title="$countryStatus[0]->code"/>
                    <x-table.table-cell :title="$countryStatus[0]->confirmed"/>
                    <x-table.table-cell :title="$countryStatus[0]->recovered"/>
                    <x-table.table-cell :title="$countryStatus[0]->critical"/>
                    <x-table.table-cell :title="$countryStatus[0]->deaths"/>
                </x-table.table-row>
                    @endif
            </x-slot>

        </x-table.table>
    </div>

    <div class="h-screen w-full">
        <x-table.table class="w-1/2">


            <x-slot name="thead">
                <x-table.table-head class="font-bold" title="Accounts"/>
            </x-slot>

            <x-slot name="tbody">
                @foreach($usernames as $platform => $platform_username)
                    <x-table.table-row>
                        <x-table.table-cell class="bg-blue-400 text-center font-semibold text-lg" :title="$platform"/>
                    </x-table.table-row>
                    @foreach($platform_username as $username)
                        <x-table.table-row>
                            <x-table.table-cell class="text-center" :title="$username"/>
                        </x-table.table-row>
                    @endforeach
                @endforeach
            </x-slot>
        </x-table.table>
    </div>


    <div class="h-screen w-full">
        <x-table.table title="Accounts" class="w-full">

            <x-slot name="button">
                <x-form.buttons.button-with-spinner wire:click="$emit('alert',1,'success','Account Added Successfully')" title="Add Account"/>
            </x-slot>

            <x-slot name="pagination">
                <x-form.buttons.button-with-spinner title="Pagination"/>
            </x-slot>

            <x-slot name="thead">
                <x-table.table-head class="font-bold" title="Platform"/>
                <x-table.table-head class="font-bold" title="Accounts"/>
            </x-slot>

            <x-slot name="tbody">
                @foreach($usernames as $platform => $platform_username)
                    @foreach($platform_username as $username)
                        <x-table.table-row>
                            <x-table.table-cell class="text-left font-semibold text-lg" :title="$platform"/>
                            <x-table.table-cell class="text-left font-semibold text-lg" :title="$username"/>
                        </x-table.table-row>
                    @endforeach
                @endforeach
            </x-slot>
        </x-table.table>
    </div>


</div>
