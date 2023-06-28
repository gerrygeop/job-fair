<x-app-layout>
    <x-board>
        <div class="max-w-4xl mx-auto p-6">

            <div>
                <div class="flex justify-between px-4 sm:px-0">
                    <div>
                        <h3 class="text-lg md:text-xl font-semibold leading-7 text-gray-800">{{ $loker->judul }}</h3>
                        <span class="text-xs text-gray-500">
                            {{ $loker->category->name }}
                        </span>
                        <div class="flex items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>

                            <p class="text-gray-800 ml-1">{{ $loker->lokasi }}</p>
                        </div>
                    </div>

                    <div class="flex flex-col justify-between">
                        <p class="text-sm text-gray-600">
                            Dilihat: <span class="text-gray-800">0</span>
                        </p>
                        <p class="text-sm text-gray-600">
                            Status: <x-badge :isActive="$loker->is_active">{{ $loker->is_active ? 'Aktif' : 'Tidak aktif' }}</x-badge>
                        </p>
                    </div>
                </div>

                <div class="mt-4 border-t border-gray-100">
                    <div class="py-2 flex items-center justify-between">
                        <p class="text-xs text-gray-500 italic">Tanggal dibuat: {{ $loker->created_at->isoFormat('D MMMM Y') }}</p>
                        <p class="text-xs text-gray-500 italic">Terakhir diperbarui: {{ $loker->created_at->diffForHumans() }}</p>
                    </div>
                    <div class="py-4">
                        <h6 class="text-sm font-medium leading-6 text-gray-900">Deskripsi</h6>
                        <p class="mt-1 text-sm leading-6 text-gray-700 whitespace-pre-wrap">
                            {!! $loker->deskripsi !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between mt-8">
                <x-link-button href="{{ route('dashboard') }}">
                    {{ __('Kembali') }}
                </x-link-button>
            </div>

        </div>
    </x-board>
</x-app-layout>
