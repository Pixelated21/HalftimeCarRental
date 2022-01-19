<div class="bg-white dark:bg-dark-mode w-full overflow-y-auto  lg:max-w-full md:mx-auto md:mx-0 md:w-full xl:w-1/3 h-screen px-2 lg:px-16 xl:px-12
        flex items-center justify-center">

    <div class="w-full h-auto ">


        <h1 class="text-xl md:text-4xl font-bold dark:text-gray-200 leading-tight my-5">Create a new account</h1>

        <form class="mt-6 space-y-4" action="#" method="POST">


            <div class="flex flex-col">
                <x-form.inputs.normal-with-label-error placeholder="Email" :label="true" title="Email"/>
            </div>

                <div class="flex flex-col">
                    <x-form.inputs.normal-with-label-error placeholder="Password" :label="true" title="Password"/>
                </div>

                <div class="flex flex-col">
                    <x-form.inputs.normal-with-label-error placeholder="Verify Password" :label="true"
                                                           title="Verify Password"/>
                </div>


            <div>
                <x-form.buttons.button-with-spinner title="Register">

                    <x-slot name="spinner">
                        <i class="gg-spinner-two-alt"></i>
                    </x-slot>

                </x-form.buttons.button-with-spinner>
            </div>


        </form>

        <hr class="my-6 border-gray-300 w-full">


        <p class="text-center mt-8 dark:text-gray-200">Already Have an account?<br>
            <a href="{{url('login')}}"
               class="text-purple-500 dark:text-gray-200  duration-300 dark:hover:text-purple-500 hover:text-purple-700  font-semibold">
                Log Into Your Account
            </a>
        </p>


    </div>
</div>

