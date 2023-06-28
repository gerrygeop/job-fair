<x-app-layout>
    <section>
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h2 class="text-lg font-medium text-gray-800">Daftar Industri</h2>
                <p class="text-sm text-gray-600">Ada {{ $industries->count() }} total industri</p>
            </div>

            <div class="flex items-center mt-4 lg:mt-0 gap-x-3">
                <x-add-button href="{{ route('d.industri.create') }}">
                    Industri baru
                </x-add-button>
            </div>
        </div>

        <x-table>
            <thead class="bg-gray-50">
                <tr>
                    <x-th>Nama Industri</x-th>
                    <th scope="col" class="relative px-4 py-2.5">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($industries->sortByDesc('created_at') as $industri)
                    <tr>
                        <x-td class="font-medium text-gray-900">
                            {{ $industri->name }}
                        </x-td>
                        <x-td class="flex items-center justify-end gap-x-8 lg:px-8">
                            <form action="{{ route('d.industri.destroy', $industri) }}" method="POST" class="flex items-center">
                                @csrf
                                @method('DELETE')
                                <x-trash-button />
                            </form>

                            <x-edit-button href="{{ route('d.industri.edit', $industri) }}" />
                        </x-td>
                    </tr>

                @empty
                    <tr>
                        <x-td class="italic font-medium" colspan="4">
                            Belum ada daftar industri
                        </x-td>
                    </tr>
                @endforelse

            </tbody>
        </x-table>

    </section>
</x-app-layout>
