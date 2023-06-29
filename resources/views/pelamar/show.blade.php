<x-app-layout>
    <x-board>
        <div class="max-w-4xl mx-auto p-6">

            <div class="flex items-center gap-x-4 px-4 sm:px-0">
                <img class="object-cover w-20 h-20 rounded-full border" src="{{ asset('storage/pelamar/photo/'. $pelamar->photo_path) }}" alt="{{ $pelamar->user->name }}">
                <div>
                    <h3 class="text-base font-semibold leading-7 text-gray-900">{{ $pelamar->user->name }}</h3>
                    <p class=" max-w-2xl text-sm leading-6 text-gray-500">{{ $pelamar->user->email }}</p>
                </div>
            </div>

            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Nama Lengkap</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $pelamar->user->name }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Email</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $pelamar->user->email }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">No Telepon</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $pelamar->telpon }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Jenis Kelamin</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $pelamar->jk }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Tempat, Tanggal Lahir</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $pelamar->tempat_lahir }}, {{ $pelamar->tanggal_lahir->isoFormat('D MMMM Y') }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Status</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $pelamar->status_kawin }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Pendidikan Terakhir</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $pelamar->pendidikan_terakhir }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Resume</dt>
                        <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            @if ($pelamar->resume_path)
                                <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                            </svg>

                                            <div class="ml-2 flex min-w-0 flex-1">
                                                <span class="truncate font-medium">{{ $pelamar->resume_path }}</span>
                                            </div>
                                        </div>

                                        <div class="ml-4 flex-shrink-0 flex items-center space-x-3">
                                            <a href="{{ route('d.pelamar.download', $pelamar) }}" target="_black" rel="noopener noreferrer" class="font-medium text-indigo-600 hover:text-indigo-500" title="Download">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                </svg>
                                            </a>

                                            @can('pelamar')
                                                <form action="{{ route('d.pelamar.delete-resume', $pelamar) }}" method="POST" class="flex items-center">
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
                                    -Tidak ada resume
                                </p>
                            @endif
                        </dd>
                    </div>
                </dl>
            </div>

        </div>
    </x-board>
</x-app-layout>
