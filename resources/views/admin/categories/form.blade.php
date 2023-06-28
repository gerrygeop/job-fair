<x-app-layout>
    <x-board class="mb-8">
        <div class="max-w-3xl mx-auto p-6 lg:py-8 text-gray-900">

            <form action="{{ $category->id ? route('d.categories.update', $category) : route('d.categories.store') }}" method="POST">
                @csrf
                @if ($category->id)
                    @method('PUT')
                @endif

                <div>
                    <x-input-label for="name" :value="__('Nama Kategori')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $category->name)" required autofocus autocomplete="name" placeholder="Teknologi Informasi" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-8">
                    <x-link-button href="{{ route('d.categories.index') }}">
                        {{ __('Batal') }}
                    </x-link-button>

                    <x-primary-button>
                        {{ __('Simpan') }}
                    </x-primary-button>
                </div>
            </form>

        </div>
    </x-board>
</x-app-layout>
