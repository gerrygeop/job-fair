@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-3 py-2 transition-colors duration-300 transform rounded-lg text-blue-50 bg-blue-700 hover:bg-blue-800'
            : 'flex items-center px-3 py-2 transition-colors duration-300 transform rounded-lg text-gray-200 hover:bg-gray-800 hover:text-gray-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
