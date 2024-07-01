<x-layout>
    <x-slot:heading>
        Jobs Details
    </x-slot:heading>




    <h1>
        {{ $job->employer->name }}
    </h1>


    <strong>{{ $job->title }}:</strong>
    <p>
        {{ $job->salary }} per year.
    </p>

    @can('edit', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit"> Edit </x-button>
        </p>
    @endcan





</x-layout>
