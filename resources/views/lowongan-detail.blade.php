<x-welcome-layout>
    <section class="max-w-7xl mx-auto py-6 sm:px-6 sm:py-8">

        @if (session('status') == 'resume-null')
            <div class="w-full text-white bg-red-500">
                <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                        </svg>

                        <p class="mx-3">Anda belum mengunggah resume. Silahkan mengunggah resume anda terlebih dahulu</p>
                    </div>
                </div>
            </div>
        @endif

        <x-board class="min-h-screen border p-4 sm:p-6 lg:py-8">

            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col sm:flex-row justify-between gap-y-4 sm:gap-y-0">
                    <div>
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('storage/perusahaan/logo/'.$lowongan->perusahaan->logo_path) }}" alt="{{ $lowongan->perusahaan->nama_perusahaan }}" class="h-16 w-16 object-cover rounded-full mr-3">
                            <div>
                                <h3 class="text-lg md:text-xl font-semibold leading-7 text-gray-800">{{ $lowongan->judul }}</h3>

                                <a href="{{ route('perusahaan.detail', $lowongan->perusahaan) }}" class="text-sm font-semibold text-indigo-500 hover:text-indigo-600 hover:underline">
                                    {{ $lowongan->perusahaan->nama_perusahaan }}
                                </a>
                            </div>
                        </div>

                        <div class="space-y-1">
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

                    @if ($lowongan->pelamar->contains('user_id', auth()->id()))
                        <div>
                            <p class="text-xs text-gray-600 italic border px-1.5 py-0.5 rounded text-center">Anda telah melamar pada lowongan ini</p>
                        </div>
                    @else
                        <div>
                            <a href="{{ route('lowongan.apply', $lowongan) }}" class="flex items-center justify-center w-full sm:w-auto px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium rounded tracking-wide">
                                Lamar Sekarang
                            </a>
                        </div>
                    @endif
                </div>

                <div class="flex items-center justify-between mt-4">
                    <p class="text-xs text-gray-500">Dibuat sejak: {{ $lowongan->created_at->isoFormat('D MMMM Y') }}</p>
                    <p class="text-xs text-gray-500">Terakhir diperbarui: {{ $lowongan->created_at->diffForHumans() }}</p>
                </div>

                <div class="border-t my-6"></div>

                <div>
                    <p class="text-sm text-gray-700 whitespace-pre-wrap">
                        {!! $lowongan->deskripsi !!}
                    </p>
                </div>
            </div>

        </x-board>
    </section>
</x-welcome-layout>
