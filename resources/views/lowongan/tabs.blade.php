<div class="bg-white overflow-hidden border shadow-sm sm:rounded-lg mb-3">
    <div class="grid grid-cols-2 divide-x">
        <x-tab-link href="{{ route('d.lowongan.show', $lowongan) }}" active="{{ request()->routeIs('d.lowongan.show') }}">
            Detail Lowongan
        </x-tab-link>
        <x-tab-link href="{{ route('d.lowongan-pelamar.index', $lowongan) }}" active="{{ request()->routeIs('d.lowongan-pelamar.index') }}">
            Pelamar
        </x-tab-link>
    </div>
</div>
