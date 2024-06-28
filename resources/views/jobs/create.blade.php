<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    <div class="space-y-4">

        <form action="/jobs" method="POST">
            @csrf
            <div class="space-y-12">


                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Create job</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form-field>
                            <x-form-label for="title">Title</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="title" id="title" placeholder="CEO" />

                            </div>

                            <x-form-error name="title" />
                        </x-form-field>


                        <x-form-field>
                            <x-form-label for="salary">Salary</x-form-label>
                            <div class="mt-2">
                                <x-form-input name="salary" id="salary" placeholder="$USD per year" />

                            </div>

                            <x-form-error name="salary" />
                        </x-form-field>

                    </div>
                </div>


            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>    
            </div>
        </form>


    </div>


</x-layout>
