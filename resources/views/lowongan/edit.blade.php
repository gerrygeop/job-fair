<x-app-layout>
    <x-board class="mb-8">
        <div class="max-w-3xl mx-auto p-6 lg:py-8 text-gray-900">

            <form action="{{ route('d.lowongan.update', $loker) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <x-input-label for="judul" :value="__('Nama Pekerjaan')" />
                    <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul" :value="old('judul', $loker->judul)" required autofocus autocomplete="judul" placeholder="Sales" />
                    <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="category_id" :value="__('Kategori')" />
                    <x-select id="category_id" class="block mt-1 w-full" name="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected($loker->category_id == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </x-select>

                    <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="lokasi" :value="__('Lokasi')" />
                    <x-text-input id="lokasi" class="block mt-1 w-full" type="text" name="lokasi" :value="old('lokasi', $loker->lokasi)" required autocomplete="lokasi" placeholder="Jakarta" />
                    <x-input-error :messages="$errors->get('lokasi')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                    <x-text-area id="deskripsi" class="block mt-1 w-full" name="deskripsi" rows="10" placeholder="Tambahkan deskripsi tentang pekerjaan" required>{{ old('deskripsi', $loker->deskripsi) }}</x-text-area>
                    <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-8">
                    <x-link-button href="{{ route('dashboard') }}">
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
