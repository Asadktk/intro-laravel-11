<x-layout>

    <x-slot:heading>
        Login User
    </x-slot:heading>

    <div class="space-y-4">

        <form action="/login" method="POST">
            @csrf
            <div class="space-y-12">


                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                       

                        <x-form-field>
                            <x-form-label for="email">Email</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="email" id="email" type="email" />

                            </div>

                            <x-form-error name="email" />
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="password">Password</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="password" id="password" type="password" required />

                            </div>

                            <x-form-error name="password" />
                        </x-form-field>


                        
                    </div>
                </div>


            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <x-form-button>Login </x-form-button>
            </div>
        </form>


    </div>


</x-layout>