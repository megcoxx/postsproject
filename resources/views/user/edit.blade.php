<x-layout>
    <x-header style="float: left">Profile Information</x-header>
    <br>
    <br>
    <br>
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <form method="POST" action="{{ route('login.update') }}">
            @csrf {{-- token for protection --}}
            @method('PUT')>
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Update Name</label>
            <input type="text" id="default-input" name="name" value="{{ old('name', $user->name) }}" />
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Update Email</label>
            <input type="email" id="default-input" name="email" value="{{ old('email', $user->email) }}" />
            <br>
            <button type="submit"
                class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
        </form>
    </div>
</x-layout>
