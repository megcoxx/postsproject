<x-layout>
    <x-header>Edit Post</x-header>
    <div class="max-w-2xl mx-auto p-4">
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf {{-- token for protection --}}
            @method('PUT')
            <div class="mb-6">
                <label for="default-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" id="default-input" name="name" value="{{ old('name', $post->name) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('name')
                    <span style="color: red; font-size:small"">{{ $message }}</span><br>
                @enderror
            </div><br>

            <div class="mb-6">
                <label for="default-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                <input type="text" id="default-input" name="age" value="{{ old('age', $post->age) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('age')
                    <span style="color: red; font-size:small"">{{ $message }}</span><br>
                @enderror
            </div><br>

            <div class="mb-6">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    message</label>
                <textarea id="message" rows="4" name="content"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <span style="color: red; font-size:small"">{{ $message }}</span><br>
                @enderror
            </div><br>

            <div class="mb-6">
                <button type="submit"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">UPDATE</button>
            </div>

        </form>
    </div>
</x-layout>
