<x-layout>
    <x-slot:heading> Edit Job Page : {{$job->employer->name}}</x-slot:heading>







    <form class="max-w-sm mx-auto" method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title Name</label>
            <input type="title" id="title"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Shift Leader" name="name" value="{{$job->name}}" required />
                @error('name')
                <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
                @enderror
        </div>
        <div class="mb-5">
            <label for="sallery" class="block mb-2 text-sm font-medium text-gray-900">Here Sallery</label>
            <input type="sallery" id="sallery"
                class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required placeholder="50,000 Per Year"  value="{{$job->sallery}}"  name="sallery" />
                @error('sallery')
                <p class="text-red-500 text-xs font-semibold">{{$message}}</p>
                @enderror
        </div>
            <hr>
        <button type="submit"
            class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
    </form>





</x-layout>
