<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Informasi Profile') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Perbarui data diri anda.") }}
        </p>
    </header>

    <form method="post" action="{{ route('d.pelamar.update', $pelamar) }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="photo_path" :value="__('Foto Profile')" />
            <x-text-file id="photo_path" class="block mt-1 w-full" name="photo_path" :value="old('photo_path')" />
            <x-input-error :messages="$errors->get('photo_path')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="resume_path" :value="__('Resume')" />
            <x-text-file id="resume_path" class="block mt-1 w-full" name="resume_path" :value="old('resume_path')" />
            <x-input-error :messages="$errors->get('resume_path')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="telpon" :value="__('No Telepon')" />
            <x-text-input id="telpon" class="block mt-1 w-full" type="text" name="telpon" :value="old('telpon', $pelamar->telpon)" required autocomplete="telpon" placeholder="+62" />
            <x-input-error :messages="$errors->get('telpon')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-area id="alamat" class="block mt-1 w-full" name="alamat" required autocomplete="alamat" placeholder="Jl. Alamat ...">{{ old('alamat', $pelamar->alamat) }}</x-text-area>
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>

        <div class="lg:grid lg:grid-cols-2 lg:gap-x-2">
            <div>
                <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir', $pelamar->tanggal_lahir)" required />
                <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('tempat_lahir', $pelamar->tempat_lahir)" required autocomplete="tempat_lahir" placeholder="..." />
                <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
            </div>
        </div>

        <div class="lg:grid lg:grid-cols-2 lg:gap-x-2">
            <div>
                <x-input-label for="jk" :value="__('Jenis Kelamin')" />
                <x-select id="jk" class="block mt-1 w-full" name="jk" required>
                    <option value="Laki-laki" @selected($pelamar->jk == 'Laki-laki')>Laki-laki</option>
                    <option value="Perempuan" @selected($pelamar->jk == 'Perempuan')>Perempuan</option>
                </x-select>
                <x-input-error :messages="$errors->get('jk')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="status_kawin" :value="__('Status')" />
                <x-select id="status_kawin" class="block mt-1 w-full" name="status_kawin" required>
                    <option value="Belum Menikah" @selected($pelamar->status_kawin == 'Belum Menikah')>Belum Menikah</option>
                    <option value="Menikah" @selected($pelamar->status_kawin == 'Menikah')>Menikah</option>
                </x-select>
                <x-input-error :messages="$errors->get('status_kawin')" class="mt-2" />
            </div>
        </div>

        <div>
            <x-input-label for="pendidikan_terakhir" :value="__('Pendidikan Terakhir')" />
            <x-text-input id="pendidikan_terakhir" class="block mt-1 w-full" type="text" name="pendidikan_terakhir" :value="old('pendidikan_terakhir', $pelamar->pendidikan_terakhir)" placeholder="..." required autocomplete="pendidikan_terakhir" />
            <x-input-error :messages="$errors->get('pendidikan_terakhir')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Simpan') }}</x-primary-button>

            @if (session('status') === 'pelamar-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Tersimpan.') }}</p>
            @endif
        </div>
    </form>
</section>
