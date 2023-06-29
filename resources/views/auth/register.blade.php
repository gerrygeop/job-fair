<x-guest-layout>
    <div class="w-full sm:max-w-6xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('register.pencari-kerja.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-8 divide-y-2 lg:divide-y-0 lg:divide-x-2">
                <div class="col-span-1 lg:col-span-3 py-6 lg:py-0 lg:px-6">
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Register</h4>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Nama Lengkap')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="John Doe" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="johndoe@example.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div class="col-span-1 lg:col-span-5 py-6 lg:py-0 lg:px-6">
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Informasi Profile</h4>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="telpon" :value="__('No Telepon')" />
                        <x-text-input id="telpon" class="block mt-1 w-full" type="text" name="telpon" :value="old('telpon')" required autocomplete="telpon" placeholder="+62" />
                        <x-input-error :messages="$errors->get('telpon')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="alamat" :value="__('Alamat')" />
                        <x-text-area id="alamat" class="block mt-1 w-full" name="alamat" required autocomplete="alamat" placeholder="Jl. Alamat ...">{{ old('alamat') }}</x-text-area>
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>

                    <div class="lg:grid lg:grid-cols-2 lg:gap-x-2">
                        <div class="mt-4">
                            <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />
                            <x-text-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required autocomplete="tanggal_lahir" />
                            <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="tempat_lahir" :value="__('Tempat Lahir')" />
                            <x-text-input id="tempat_lahir" class="block mt-1 w-full" type="text" name="tempat_lahir" :value="old('tempat_lahir')" required autocomplete="tempat_lahir" placeholder="..." />
                            <x-input-error :messages="$errors->get('tempat_lahir')" class="mt-2" />
                        </div>
                    </div>

                    <div class="lg:grid lg:grid-cols-2 lg:gap-x-2">
                        <div class="mt-4">
                            <x-input-label for="jk" :value="__('Jenis Kelamin')" />
                            <x-select id="jk" class="block mt-1 w-full" name="jk" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </x-select>
                            <x-input-error :messages="$errors->get('jk')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="status_kawin" :value="__('Status')" />
                            <x-select id="status_kawin" class="block mt-1 w-full" name="status_kawin" required>
                                <option value="Laki-laki">Belum Menikah</option>
                                <option value="Perempuan">Menikah</option>
                            </x-select>
                            <x-input-error :messages="$errors->get('status_kawin')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="pendidikan_terakhir" :value="__('Pendidikan Terakhir')" />
                        <x-text-input id="pendidikan_terakhir" class="block mt-1 w-full" type="text" name="pendidikan_terakhir" :value="old('pendidikan_terakhir')" placeholder="..." required autocomplete="pendidikan_terakhir" />
                        <x-input-error :messages="$errors->get('pendidikan_terakhir')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="photo_path" :value="__('Foto Profile')" />
                        <x-text-file id="photo_path" class="block mt-1 w-full" name="photo_path" :value="old('photo_path')" required/>
                        <x-input-error :messages="$errors->get('photo_path')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="resume_path" :value="__('Resume')" />
                        <x-text-file id="resume_path" class="block mt-1 w-full" name="resume_path" :value="old('resume_path')" required />
                        <x-input-error :messages="$errors->get('resume_path')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Sudah punya akun?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Daftar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
