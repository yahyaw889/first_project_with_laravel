<x-layout>
    <x-slot:heading> Login</x-slot:heading>


    <form class="max-w-sm mx-auto" method="POST" action="/login">
        @csrf
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

            <hr>
        <x-form-button>Log In</x-form-button>
    </form>

</x-layout>
