<x-app-layout>
    @include('lowongan.tabs')

    <x-board class="p-4">
        <div>
            <h2 class="text-lg font-medium text-gray-800">Daftar Pelamar</h2>
            <p class="text-sm text-gray-600">Ada {{ $lowongan->pelamar->count() }} total pelamar</p>
        </div>

        <x-table>
            <thead class="bg-gray-50">
                <tr>
                    <x-th>Nama</x-th>
                    <x-th>Telp</x-th>
                    <x-th>Jenis Kelamin</x-th>
                    <x-th>Waktu</x-th>
                    <th scope="col" class="relative px-4 py-2.5">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($lowongan->pelamar as $pelamar)
                    <tr>
                        <x-td>
                            <div class="flex items-center gap-x-2 lg:pl-2">
                                <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('storage/pelamar/photo/'. $pelamar->photo_path) }}" alt="{{ $pelamar->user->name }}">
                                <div class="flex flex-col">
                                    <a href="{{ route('d.pelamar.show', $pelamar) }}" class="font-medium text-base text-gray-800 hover:underline">
                                        {{ $pelamar->user->name }}
                                    </a>
                                    <p class="font-normal text-sm text-gray-600">
                                        {{ $pelamar->user->email }}
                                    </p>
                                </div>
                            </div>
                        </x-td>
                        <x-td>{{ $pelamar->telpon }}</x-td>
                        <x-td>{{ $pelamar->jk }}</x-td>
                        <x-td>{{ $pelamar->pelamar->created_at->diffForHumans() }}</x-td>
                        <x-td class="flex items-center justify-center gap-x-6">
                            <x-arright-button href="{{ route('d.pelamar.show', $pelamar) }}" />
                        </x-td>
                    </tr>

                @empty
                    <tr>
                        <td class="p-4 text-sm font-medium whitespace-nowrap" colspan="5">
                            <p class="text-center text-gray-600 italic">Belum ada pelamar</p>
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </x-table>

    </x-board>
</x-app-layout>
