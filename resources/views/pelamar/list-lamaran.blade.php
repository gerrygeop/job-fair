<x-welcome-layout>
    <div class="min-h-screen max-w-7xl mx-auto py-10">
        <x-board class="border mb-8">

            <x-board class="p-4">
                <div>
                    <h2 class="text-lg font-medium text-gray-800">Daftar Lamaran</h2>
                    <p class="text-sm text-gray-600">Ada {{ $lowongan->count() }} total lamaran</p>
                </div>

                <x-table>
                    <thead class="bg-gray-50">
                        <tr>
                            <x-th>Nama Pekerjaan</x-th>
                            <x-th>Perusahaan</x-th>
                            <x-th>Lokasi</x-th>
                            <x-th>Waktu dibuat</x-th>
                            <th scope="col" class="relative px-4 py-2.5">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($lowongan as $loker)
                            <tr>
                                <x-td>
                                    <a href="{{ route('lowongan-kerja.detail', $loker) }}" class="font-medium text-base text-gray-800 hover:underline">
                                        {{ $loker->judul }}
                                    </a>
                                </x-td>
                                <x-td>
                                    <a href="{{ route('perusahaan.detail', $loker->perusahaan) }}" class="text-blue-700 hover:text-blue-500 hover:underline">
                                        {{ $loker->perusahaan->nama_perusahaan }}
                                    </a>
                                </x-td>
                                <x-td>{{ $loker->lokasi }}</x-td>
                                <x-td>{{ $loker->pivot->created_at->diffForHumans() }}</x-td>
                                <x-td>
                                    <x-arright-button href="{{ route('lowongan-kerja.detail', $loker) }}" />
                                </x-td>
                            </tr>

                        @empty
                            <tr>
                                <td class="p-4 text-sm font-medium whitespace-nowrap" colspan="5">
                                    <p class="text-center text-gray-600 italic">Anda membuat lamaran</p>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </x-table>

            </x-board>

        </x-board>
    </div>
</x-welcome-layout>
