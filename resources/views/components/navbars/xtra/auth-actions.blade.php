@auth
    <x-navbars.xtra.button class="hover:bg-red-700 hover:text-gray-200 w-full sm:w-auto" title="Logout"/>
@else
    <div class="flex gap-2 w-full justify-center sm:w-auto">
        <x-navbars.xtra.button class="w-full " title="Login"/>
        <x-navbars.xtra.button class="w-full" title="Register"/>
    </div>
@endauth
