<x-app-layout>
    <x-board class="mb-8">
        <div class="max-w-3xl mx-auto p-6 lg:py-8 text-gray-900">

            <form action="{{ route('d.perusahaan.update', $perusahaan) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="flex items-center">
                    <img src="{{ asset('storage/perusahaan/logo/'.$perusahaan->logo_path) }}" alt="{{ $perusahaan->nama_perusahaan }}" class="h-20 w-20 object-cover rounded-full">
                    <div class="mt-4 md:mt-0 md:ml-4">
                        <x-input-label for="logo_path" :value="__('Logo Perusahaan')" />
                        <x-text-file id="logo_path" class="block mt-1 w-full" name="logo_path" :value="old('logo_path')"/>
                        <x-input-error :messages="$errors->get('logo_path')" class="mt-2" />
                    </div>
                </div>

                <div class="mt-6">
                    <x-input-label for="nama_perusahaan" :value="__('Nama Perusahaan')" />
                    <x-text-input id="nama_perusahaan" class="block mt-1 w-full" type="text" name="nama_perusahaan" :value="old('nama_perusahaan', $perusahaan->nama_perusahaan)" required autofocus autocomplete="nama_perusahaan" placeholder="ABC Company" />
                    <x-input-error :messages="$errors->get('nama_perusahaan')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="industri_id" :value="__('Industri')" />
                    <x-select id="industri_id" class="block mt-1 w-full" name="industri_id" required>
                        @foreach ($industries as $industri)
                            <option value="{{ $industri->id }}" @selected($perusahaan->industri_id == $industri->id)>
                                {{ $industri->name }}
                            </option>
                        @endforeach
                    </x-select>
                    <x-input-error :messages="$errors->get('industri_id')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="lokasi" :value="__('Lokasi')" />
                    <x-text-input id="lokasi" class="block mt-1 w-full" type="text" name="lokasi" :value="old('lokasi', $perusahaan->lokasi)" required autocomplete="lokasi" placeholder="Jakarta" />
                    <x-input-error :messages="$errors->get('lokasi')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="alamat" :value="__('Alamat')" />
                    <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat', $perusahaan->alamat)" required autocomplete="alamat" placeholder="Jakarta" />
                    <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="telpon" :value="__('No Telepon')" />
                    <x-text-input id="telpon" class="block mt-1 w-full" type="text" name="telpon" :value="old('telpon', $perusahaan->telpon)" required autocomplete="telpon" placeholder="+62" />
                    <x-input-error :messages="$errors->get('telpon')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="url_website" :value="__('Website')" />
                    <x-text-input id="url_website" class="block mt-1 w-full" type="text" name="url_website" :value="old('url_website', $perusahaan->url_website)" required autocomplete="url_website" placeholder="Jakarta" />
                    <x-input-error :messages="$errors->get('url_website')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="file_path" :value="__('Dokumen Perusahaan (SIUP,TDP,AKTE)')" />
                    <x-text-file id="file_path" class="block mt-1 w-full" name="file_path" :value="old('file_path')"/>
                    <p class="text-sm text-gray-600 italic mt-1"><span class="text-red-500">*</span>Jika tidak memiliki salah satunya, silakan menghubungi dinas ketenagakerjaan secara langsung</p>
                    <x-input-error :messages="$errors->get('file_path')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                    <x-text-area id="deskripsi" class="block mt-1 w-full" name="deskripsi" rows="10" placeholder="Tambahkan deskripsi tentang pekerjaan" required>{{ old('deskripsi', $perusahaan->deskripsi) }}</x-text-area>
                    <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-8">
                    <x-link-button href="{{ route('d.perusahaan.show', $perusahaan) }}">
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
