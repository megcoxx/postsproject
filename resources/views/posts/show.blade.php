<x-layout>
    <x-header style="float: left">Post by {{ $post->name }}</x-header>
    <div style="float: right">
        <div class="mt-4">
            <div class="flex justify-between">
                <a href="{{ route('posts.edit', $post->id) }}" type="button"
                    class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>

                {{-- ask about button color --}}
                <form action="{{ route('posts.destroy', $post->id) }}" method = "POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->name }} -
                {{ $post->age }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->content }}</p><br>
    </div>
</x-layout>
