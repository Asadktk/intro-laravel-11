<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    <div class="space-y-4">

        @forelse ($jobs as $job)
           
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div>
                        {{ $job->employer->name }}
                    </div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
                </a>

        @empty
            <h1>There is no record found</h1>
        @endforelse
    </div>
    <div>
        {{ $jobs->links();}}
    </div>
  
 
 </x-layout>