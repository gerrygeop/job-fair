<x-app-layout>

    <section class="mx-auto">
        <div>
            <h2 class="text-lg font-medium text-gray-800">Daftar Perusahaan</h2>
            <p class="text-sm text-gray-600">Ada {{ $perusahaan_total }} total perusahaan</p>
        </div>

        <x-table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <x-th>Perusahaan</x-th>
                    <x-th>Industri</x-th>
                    <x-th>Lowongan</x-th>
                    <th scope="col" class="relative px-4 py-2.5">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($perusahaan as $item)
                    <tr>
                        <x-td>
                            <div class="flex items-center gap-x-2 lg:pl-2">
                                <img class="object-cover w-10 h-10 rounded-full" src="{{ asset('storage/perusahaan/logo/'. $item->logo_path) }}" alt="{{ $item->nama_perusahaan }}">
                                <div class="flex flex-col">
                                    <a href="{{ route('d.perusahaan.show', $item) }}" class="font-medium text-base text-gray-800 hover:underline">
                                        {{ $item->nama_perusahaan }}
                                    </a>
                                    <a href="{{ $item->url_website }}" target="_blank" rel="noopener noreferrer" class="font-normal text-sm text-gray-600 hover:text-blue-600 hover:underline">
                                        {{ $item->url_website }}
                                    </a>
                                </div>
                            </div>
                        </x-td>
                        <x-td>
                            {{ $item->industri->name }}
                        </x-td>
                        <x-td>
                            Total {{ $item->lowongan->count() }} lowongan
                        </x-td>
                        <x-td class="text-center">
                            <div class="flex justify-center">
                                <x-arright-button href="{{ route('d.perusahaan.show', $item) }}" />
                            </div>
                        </x-td>
                    </tr>

                @empty
                    <tr>
                        <x-td class="font-medium italic" colspan="4">
                            Belum ada daftar perusahaan
                        </x-td>
                    </tr>

                @endforelse
            </tbody>
        </x-table>

        <div class="mt-6">
            {{ $perusahaan->onEachSide(3)->links() }}
        </div>
    </section>

</x-app-layout>
