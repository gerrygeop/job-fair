<x-app-layout>
    <section>
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <h2 class="text-lg font-medium text-gray-800">Daftar Kategori</h2>
                <p class="text-sm text-gray-600">Ada {{ $categories->count() }} total kategori</p>
            </div>

            <div class="flex items-center mt-4 lg:mt-0 gap-x-3">
                <x-add-button href="{{ route('d.categories.create') }}">
                    Kategori baru
                </x-add-button>
            </div>
        </div>

        <x-table>
            <thead class="bg-gray-50">
                <tr>
                    <x-th>Nama Kategori</x-th>
                    <th scope="col" class="relative px-4 py-2.5">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($categories->sortByDesc('created_at') as $category)
                    <tr>
                        <x-td class="font-medium text-gray-900">
                            {{ $category->name }}
                        </x-td>
                        <x-td class="flex items-center justify-end gap-x-8 lg:px-8">
                            <form action="{{ route('d.categories.destroy', $category) }}" method="POST" class="flex items-center">
                                @csrf
                                @method('DELETE')
                                <x-trash-button />
                            </form>

                            <x-edit-button href="{{ route('d.categories.edit', $category) }}" />
                        </x-td>
                    </tr>

                @empty
                    <tr>
                        <x-td class="font-medium text-center italic" colspan="2">
                            Belum ada daftar kategori
                        </x-td>
                    </tr>
                @endforelse

            </tbody>
        </x-table>

    </section>
</x-app-layout>
