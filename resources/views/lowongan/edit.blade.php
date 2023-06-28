<x-app-layout>
    <x-board class="max-w-2xl">
        <div class="p-6 text-gray-900">

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
                    <x-input-label for="kota" :value="__('Kota')" />
                    <x-text-input id="kota" class="block mt-1 w-full" type="text" name="kota" :value="old('kota', $loker->kota)" required autocomplete="kota" placeholder="Jakarta" />
                    <x-input-error :messages="$errors->get('kota')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="deadline" :value="__('Batas Waktu')" />
                    <x-text-input id="deadline" class="block mt-1 w-full" type="date" name="deadline" :value="old('deadline', $loker->deadline)" required />
                    <x-input-error :messages="$errors->get('deadline')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                    <x-text-area id="deskripsi" class="block mt-1 w-full" name="deskripsi" rows="5" placeholder="Tambahkan deskripsi tentang pekerjaan" required>{{ old('deskripsi', $loker->deskripsi) }}</x-text-area>
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
