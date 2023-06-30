<x-app-layout>

    <section class="mx-auto">
        <div>
            <h2 class="text-lg font-medium text-gray-800">Daftar Pencari Kerja</h2>
            <p class="text-sm text-gray-600">Ada {{ $pelamar_total }} total pencari kerja</p>
        </div>

        <x-table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <x-th>Nama</x-th>
                    <x-th>Email</x-th>
                    <th scope="col" class="relative px-4 py-2.5">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($pelamar as $item)
                    <tr>
                        <x-td>
                            <div class="flex items-center gap-x-2 lg:pl-2">
                                <img class="object-cover w-12 h-12 rounded-full border" src="{{ asset('storage/pelamar/photo/'. $item->photo_path) }}" alt="{{ $item->user->name }}">
                                <a href="{{ route('d.pelamar.show', $item) }}" class="font-medium text-base text-gray-800 hover:underline">
                                    {{ $item->user->name }}
                                </a>
                            </div>
                        </x-td>
                        <x-td>
                            {{ $item->user->email }}
                        </x-td>
                        <x-td>
                            <div class="flex justify-center">
                                <x-eye-button href="{{ route('d.pelamar.show', $item) }}" />
                            </div>
                        </x-td>
                    </tr>

                @empty
                    <tr>
                        <x-td class="font-medium text-center italic" colspan="3">
                            Belum ada daftar pencari kerja
                        </x-td>
                    </tr>

                @endforelse
            </tbody>
        </x-table>

        <div class="mt-6">
            {{ $pelamar->onEachSide(3)->links() }}
        </div>
    </section>

</x-app-layout>
