@props([
    'href' => '#',
    'target' => '_self',
    'type' => 'button',
])

@php
    $classes =
        'px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800';
@endphp

@if ($type === 'anchor')
    <a class="{{ $classes }}" href="{{ $href }}" target={{ $target }}>
        {{ $slot }}
    </a>
@else
    <button class="{{ $classes }}" target={{ $target }}>
        {{ $slot }}
    </button>
@endif
