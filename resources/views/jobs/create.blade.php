<x-layout>
    <x-slot:heading> Create Job Page</x-slot:heading>







    <form class="max-w-sm mx-auto" method="POST" action="/jobs">
        @csrf


        <div class="mb-5">
            <x-form-label name='title'>Here Title</x-form-label>
            <x-form-input type="title" id="title"
                required placeholder="CEO" name="name" />
                <x-form-error name='name'/>
        </div>
        <div class="mb-5">
            <x-form-label name='sallery'>Here sallery</x-form-label>
            <x-form-input type="sallery" id="sallery"
                required placeholder="50,000 Per Year" name="sallery" />
                <x-form-error name='sallery'/>
        </div>



            <hr>
        <x-form-button>Save</x-form-button>
    </form>





</x-layout>
