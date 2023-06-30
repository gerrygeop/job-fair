<x-app-layout>
    @include('lowongan.tabs')

    <x-board>
        <div class="max-w-4xl mx-auto p-4 sm:p-6">

            <div>
                <div class="flex justify-between">
                    <div>
                        <h3 class="text-xl lg:text-2xl font-semibold leading-7 text-gray-800">{{ $lowongan->judul }}</h3>

                        <div class="space-y-1 mt-2">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>

                                <p class="text-sm text-gray-800 ml-1">{{ $lowongan->lokasi }}</p>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>

                                <p class="text-sm text-gray-800 ml-1">{{ $lowongan->category->name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col justify-between">
                        <p class="text-sm text-gray-600">
                            Dilihat: <span class="text-gray-800">{{ $lowongan->clicks->count() }}</span>
                        </p>
                        <p class="text-sm text-gray-600">
                            Status: <x-badge :isActive="$lowongan->is_active">{{ $lowongan->is_active ? 'Aktif' : 'Tidak aktif' }}</x-badge>
                        </p>
                    </div>
                </div>

                <div class="mt-4 border-t border-gray-100">
                    <div class="py-2 flex flex-col md:flex-row md:items-center justify-between">
                        <p class="text-xs text-gray-500 italic">Tanggal dibuat: {{ $lowongan->created_at->isoFormat('D MMMM Y') }}</p>
                        <p class="text-xs text-gray-500 italic">Terakhir diperbarui: {{ $lowongan->created_at->diffForHumans() }}</p>
                    </div>

                    <div class="py-4">
                        <h6 class="text-sm font-medium text-gray-900">Deskripsi</h6>
                        <p class="text-sm leading-6 text-gray-700 whitespace-pre-wrap">
                            {!! $lowongan->deskripsi !!}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </x-board>
</x-app-layout>
