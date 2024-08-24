<x-layout>
    <x-slot:heading> Job Page</x-slot:heading>
    <div class="mb-5">
        <h1 class="font-blod mb-3">{{ $job['name'] }}</h1>
        <span> This is Sallery is {{ $job['sallery'] }}</span>
    </div>
    <hr>
    <div class="sm:flex mt-5">

        @can('edit', $job)
            <a href="/jobs/{{ $job->id }}/edit" class="sm:block">
                <button type="button"
                    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Edit
                    This Job</button>
            </a>
            <form action="/jobs/{{ $job->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit"
                    class="focus:outline-none text-white  bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
            </form>
        @endcan


    </div>
</x-layout>
