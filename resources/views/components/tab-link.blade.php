@props(['active'])

@php
$classes = ($active ?? false)
            ? 'py-2 text-center text-white bg-blue-500 text-sm hover:bg-blue-600 transition duration-150'
            : 'py-2 text-center text-gray-500 text-sm hover:bg-blue-50 hover:text-gray-800 transition duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
