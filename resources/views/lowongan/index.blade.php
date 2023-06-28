<section>
    <div class="sm:flex sm:items-center sm:justify-between">
        <div>
            <h2 class="text-lg font-medium text-gray-800">Daftar lowongan</h2>
            <p class="text-sm text-gray-600">Ada {{ auth()->user()->perusahaan->lowongan->count() }} total lowongan</p>
        </div>

        <div class="flex items-center mt-4 lg:mt-0 gap-x-3">
            <x-add-button href="{{ route('d.lowongan.create') }}">
                Buat lowongan baru
            </x-add-button>
        </div>
    </div>

    <x-table>
        <thead class="bg-gray-50">
            <tr>
                <x-th>Nama</x-th>
                <x-th>Tanggal dibuat</x-th>
                <x-th>Terakhir diperbarui</x-th>
                <th scope="col" class="relative px-4 py-2.5">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse (auth()->user()->perusahaan->lowongan->sortByDesc('created_at') as $loker)
                <tr>
                    <x-td>
                        <a href="{{ route('d.lowongan.edit', $loker) }}" class="font-medium text-gray-900 hover:underline">
                            {{ $loker->judul }}
                        </a>
                    </x-td>
                    <x-td>{{ $loker->created_at->isoFormat('D MMMM Y') }}</x-td>
                    <x-td>{{ $loker->updated_at->diffForHumans() }}</x-td>
                    <x-td>
                        <div class="flex items-center justify-center gap-x-6">
                            <form action="{{ route('d.lowongan.destroy', $loker) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-trash-button />
                            </form>

                            <x-edit-button href="{{ route('d.lowongan.edit', $loker) }}" />
                        </div>
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

</section>
