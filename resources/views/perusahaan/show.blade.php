<x-app-layout>
    <x-board class="mb-8">
        <div class="max-w-4xl mx-auto p-6 lg:py-8">

            <div class="flex flex-col md:flex-row justify-between">
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('storage/perusahaan/logo/'.$perusahaan->logo_path) }}" alt="{{ $perusahaan->nama_perusahaan }}" class="h-16 w-16 object-cover rounded-full mr-3">
                        <h3 class="text-lg md:text-2xl font-semibold leading-7 text-gray-800">{{ $perusahaan->nama_perusahaan }}</h3>
                    </div>

                    <div class="space-y-2">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>

                            <p class="text-sm text-gray-800 ml-1">{{ $perusahaan->lokasi }}</p>
                        </div>

                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                            </svg>

                            <p class="text-sm text-gray-800 ml-1">{{ $perusahaan->industri->name }}</p>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>

                            <p class="text-sm text-gray-800 ml-1">{{ $perusahaan->telpon ?? '-' }}</p>
                        </div>

                        @if ($perusahaan->url_website)
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                </svg>

                                <a href="{{ $perusahaan->url_website }}" target="_blank" rel="noopener noreferrer" class="text-sm underline text-blue-700 hover:text-blue-500 ml-1">
                                    {{ $perusahaan->url_website ?? '-' }}
                                </a>
                            </div>
                        @endif

                        <div class="flex items-center pt-2">
                            <p class="text-xs text-gray-500">Bergabung sejak: {{ $perusahaan->created_at->isoFormat('D MMMM Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 md:mt-0">
                    <a href="{{ route('d.perusahaan.edit', $perusahaan) }}" class="w-full">
                        <x-secondary-button class="w-full md:w-auto">
                            Edit
                        </x-secondary-button>
                    </a>
                </div>
            </div>

            <div class="mt-4 border-t border-gray-100">
                <div class="py-4">
                    <h6 class="text-sm font-medium text-gray-900">Deskripsi</h6>
                    <p class="mt-1 text-sm leading-6 text-gray-700 whitespace-pre-wrap">
                        {!! $perusahaan->deskripsi !!}
                    </p>
                </div>

                <div class="py-4">
                    <h6 class="text-sm font-medium text-gray-900">Lampiran</h6>

                    <div class="mt-2 text-sm text-gray-900">
                        @if ($perusahaan->file_path)
                            <ul class="rounded-md border border-gray-200">
                                <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm">
                                    <div class="flex w-0 flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                        </svg>

                                        <div class="ml-2 flex min-w-0 flex-1 gap-2">
                                            <span class="truncate font-medium">{{ $perusahaan->file_path }}</span>
                                        </div>
                                    </div>

                                    <div class="ml-4 flex items-center space-x-3">
                                        <a href="{{ route('d.perusahaan.download', $perusahaan) }}" target="_black" rel="noopener noreferrer" class="font-medium text-gray-600 hover:text-indigo-500" title="Download">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                        </a>

                                        @can('perusahaan')
                                            <form action="{{ route('d.perusahaan.delete-file', $perusahaan) }}" method="POST" class="flex items-center">
                                                @csrf
                                                @method('DELETE')
                                                <x-trash-button />
                                            </form>
                                        @endcan
                                    </div>
                                </li>
                            </ul>
                        @else
                            <p class="text-sm text-gray-500 italic">
                                -Tidak ada lampiran
                            </p>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </x-board>
</x-app-layout>
