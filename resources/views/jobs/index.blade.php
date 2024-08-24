<x-layout>
    <x-slot:heading> Jobs Page</x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="{{route('jobs.show' , $job->id)}}" class="block px-4 py-6 border border-gray-200 rounded-lg ">
                <div class="font-bold text-blue-500">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>This is {{ $job['name'] }} </strong> and The Sallery is
                    {{ $job['sallery'] }}
                </div>
            </a>
            <div>
            </div>
        @endforeach
        {{ $jobs->links() }}

    </div>
</x-layout>
