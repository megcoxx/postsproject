<x-auth-layout>
    <x-slot name="header">
        Login
    </x-slot>
    <x-slot name="slot">
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <div>
                <x-label for="email">Email</x-label>
                <x-input id="email" name="email" type="email" value="{{ old('email') }}" required max="255" />
            </div>
            <div>
                <x-label for="password">Password</x-label>
                <x-input id="password" name="password" type="password" required />
            </div>
            <x-button type="submit">
                Login
            </x-button>
        </form>
    </x-slot>

    <x-slot name="footer">
        <x-button type="anchor" :href="route('register')">
            Don't have an account
        </x-button>
    </x-slot>

</x-auth-layout>
