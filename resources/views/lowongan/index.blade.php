<section>
    <div class="sm:flex sm:items-center sm:justify-between">
        <div>
            <h2 class="text-lg font-medium text-gray-800">Daftar lowongan</h2>
            <p class="text-sm text-gray-600">Ada {{ $lowongan->count() }} total lowongan</p>
        </div>

        @can('perusahaan')
            <div class="flex items-center mt-4 lg:mt-0 gap-x-3">
                <x-add-button href="{{ route('d.lowongan.create') }}">
                    Buat lowongan baru
                </x-add-button>
            </div>
        @endcan
    </div>

    <x-table>
        <thead class="bg-gray-50">
            <tr>
                <x-th>Nama</x-th>
                <x-th>Lokasi</x-th>
                <x-th>Status</x-th>
                <th scope="col" class="relative px-4 py-2.5">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($lowongan as $loker)
                <tr>
                    <x-td>
                        <a href="{{ route('d.lowongan.show', $loker) }}" class="font-medium text-gray-900 hover:underline">
                            {{ $loker->judul }}
                        </a>
                    </x-td>
                    <x-td>{{ $loker->lokasi }}</x-td>
                    <x-td>
                        <x-badge :isActive="$loker->is_active">{{ $loker->is_active ? 'Aktif' : 'Tidak aktif' }}</x-badge>
                    </x-td>
                    <x-td class="flex items-center justify-center gap-x-6">
                        @can('perusahaan')
                            <form action="{{ route('d.lowongan.destroy', $loker) }}" method="POST" class="flex items-center">
                                @csrf
                                @method('DELETE')
                                <x-trash-button />
                            </form>
                            <x-edit-button href="{{ route('d.lowongan.edit', $loker) }}" />
                        @endcan

                        <x-eye-button href="{{ route('d.lowongan.show', $loker) }}" />
                    </x-td>
                </tr>

            @empty
                <tr>
                    <td class="p-4 text-sm font-medium whitespace-nowrap" colspan="4">
                        <p class="text-gray-600 italic">Anda belum membuat lowongan</p>
                    </td>
                </tr>
            @endforelse

        </tbody>
    </x-table>

    @can('admin')
        <div class="mt-6">
            {{ $lowongan->onEachSide(3)->links() }}
        </div>
    @endcan

</section>
