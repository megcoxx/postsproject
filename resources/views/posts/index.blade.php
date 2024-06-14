<x-layout>
    <x-header style="float: left">All Posts</x-header>
    <div style="float: right">
        <div class="mt-4">
            <a href="/posts/create" type="button"
                class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                New +</a>
        </div>
    </div>
    <br>
    <br>
    <br>
    @foreach ($posts as $post)
        <div
            class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->name }} -
                    {{ $post->age }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $post->content }}</p><br>
            <a href="/posts/{{ $post->id }}"
                class="inline-flex items-center px-3 py-2 text-sm font-small text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                More
            </a>
        </div>
    @endforeach
</x-layout>
