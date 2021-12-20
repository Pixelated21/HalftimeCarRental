<div class=" justify-center flex flex-col items-center">

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
