@props(['isActive' => true])

<span @class([
    "inline-flex items-center rounded px-2 py-0.5 text-xs font-medium ring-1 ring-inset",
    'bg-green-50 text-green-700 ring-green-600/20' => $isActive,
    'bg-red-50 text-red-700 ring-red-600/10' => ! $isActive,
])>
    {{ $slot }}
</span>
