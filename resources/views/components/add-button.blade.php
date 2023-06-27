<a {{ $attributes->merge(['class' => "flex items-center justify-center shadow rounded-md w-auto gap-x-1 px-4 py-2 text-sm tracking-wide text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200"]) }} title="Tambah">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>

    <span>{{ $slot }}</span>
</a>
