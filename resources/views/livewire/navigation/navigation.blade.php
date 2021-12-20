<x-navbars.nav alphName="menu" class=" bg-white dark:bg-zinc-900 bg-opacity-95  sticky top-0 z-30" :auth="false ">

    <x-slot name="title">
        Proximity UI
    </x-slot>

    <x-slot name="center">
        <x-navbars.xtra.nav-1-link wire:click="triggerAlert" title="Alert Trigger 1"/>
        <x-navbars.xtra.nav-1-link wire:click="triggerAlert2" title="Alert Trigger 2"/>
        <x-navbars.xtra.nav-1-link wire:click="triggerAlert3" title="Alert Trigger 3"/>
        <x-navbars.xtra.nav-1-link wire:click="triggerSidebar" title="Sidebar Trigger"/>
    </x-slot>



</x-navbars.nav>
