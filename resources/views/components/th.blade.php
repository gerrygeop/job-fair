<th {!! $attributes->merge([
    'class' => 'px-4 py-2.5 text-xs font-semibold text-left uppercase tracking-wide text-gray-500',
    'scope' => 'col'
]) !!}>
    {{ $slot }}
</th>
