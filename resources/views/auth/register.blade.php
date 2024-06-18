<x-auth-layout>
    <x-slot name="header">
        Register
    </x-slot>
    <x-slot name="slot">
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div>
                <x-label for="default-input">Name</x-label>
                <x-input type="text" id="default-input" name="name"/>
                @error('name')
                    <span class="text-red-500 text sm">{{$message}}</span>
                @enderror
            </div>
            <div>
                <x-label for="default-input">Email</x-label>
                <x-input type="email" id="default-input" name="email"/>
                @error('email')
                    <span class="text-red-500 text sm">{{$message}}</span>
                @enderror
            </div>
            <div>
                <x-label for="default-input">Password</x-label>
                <x-input type="password" id="default-input" name="password"/>
                @error('password')
                    <span class="text-red-500 text sm">{{$message}}</span>
                @enderror
            </div>
            <div>
                <x-label for="default-input">Password Confirmation</x-label>
                <x-input type="password" id="default-input" name="password_confirmation"/>
                @error('password_confirmation')
                    <span class="text-red-500 text sm">{{$message}}</span>
                @enderror
            </div>
            <x-button type="submit">
                SUBMIT
            </x-button>
        </form>
    </x-slot>
    <x-slot name="footer">
        <x-button type="anchor" :href="route('login')">
            Already have an Account?
        </x-button>
    </x-slot>
</x-auth-layout>
