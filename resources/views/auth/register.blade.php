<x-layout>
    <x-slot:heading> Register</x-slot:heading>


    <form class="max-w-sm mx-auto" method="POST" action="/register">
        @csrf


        <div class="mb-5">
            <x-form-label name='name'>Your Name</x-form-label>
            <x-form-input type="name" id="name"
                required placeholder="Yahya..." :value="old('name')" name="name" />
                <x-form-error name='name'/>
        </div>
        <div class="mb-5">
            <x-form-label name='email'>Your Email</x-form-label>
            <x-form-input type="email" id="email"
                required placeholder="Yahya@gmail.com..." name="email" :value="old('email')" />
                <x-form-error name='email'/>
        </div>
        <div class="mb-5">
            <x-form-label name='password'>Your Password</x-form-label>
            <x-form-input type="password" id="password"
                required placeholder="Your Password ..." name="password" />
                <x-form-error name='password'/>
        </div>
        <div class="mb-5">
            <x-form-label name='password_confirmation'>Confirm Password</x-form-label>
            <x-form-input type="password" id="password_confirmation"
                required placeholder="Confirm Password..." name="password_confirmation" />
                <x-form-error name='password_confirmation'/>
        </div>



            <hr>
        <x-form-button>Register</x-form-button>
    </form>





</x-layout>
