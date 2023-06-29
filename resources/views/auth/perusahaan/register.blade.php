<x-guest-layout>
    <div class="w-full sm:max-w-6xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{ route('register.perusahaan.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-2 divide-y-2 lg:divide-y-0 lg:divide-x-2">
                <div class="col-span-1 py-6 lg:py-0 lg:px-6">
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Informasi Profile</h4>
                    </div>

                    <!-- Name -->
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Nama Lengkap')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="John Doe" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email Perusahaan')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" placeholder="johndoe@abccompany.com" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>

                <div class="col-span-1 py-6 lg:py-0 lg:px-6">
                    <div>
                        <h4 class="text-lg text-gray-800 font-semibold">Informasi Perusahaan</h4>
                    </div>

                    <!-- Nama Perusahaan -->
                    <div class="mt-4">
                        <x-input-label for="nama_perusahaan" :value="__('Nama Perusahaan')" />
                        <x-text-input id="nama_perusahaan" class="block mt-1 w-full" type="text" name="nama_perusahaan" :value="old('nama_perusahaan')" required autocomplete="nama_perusahaan" placeholder="ABC Company"/>
                        <x-input-error :messages="$errors->get('nama_perusahaan')" class="mt-2" />
                    </div>

                    <!-- Alamat Perusahaan -->
                    <div class="mt-4">
                        <x-input-label for="alamat" :value="__('Alamat Perusahaan')" />
                        <x-text-area id="alamat" class="block mt-1 w-full" name="alamat" required autocomplete="alamat" placeholder="Jl. ABC ...">{{ old('alamat') }}</x-text-area>
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>

                    <!-- Lokasi Perusahaan -->
                    <div class="mt-4">
                        <x-input-label for="lokasi" :value="__('Lokasi')" />
                        <x-text-input id="lokasi" class="block mt-1 w-full" type="text" name="lokasi" :value="old('lokasi')" required autocomplete="lokasi" placeholder="Samarinda" />
                        <x-input-error :messages="$errors->get('lokasi')" class="mt-2" />
                    </div>

                    <!-- No Telpon Perusahaan -->
                    <div class="mt-4">
                        <x-input-label for="telpon" :value="__('No Telepon')" />
                        <x-text-input id="telpon" class="block mt-1 w-full" type="number" name="telpon" :value="old('telpon')" required autocomplete="telpon" placeholder="+62" />
                        <x-input-error :messages="$errors->get('telpon')" class="mt-2" />
                    </div>

                    <!-- Website Perusahaan -->
                    <div class="mt-4">
                        <x-input-label for="url_website" :value="__('Domain Perusahaan')" />
                        <x-text-input id="url_website" class="block mt-1 w-full" type="text" name="url_website" :value="old('url_website')" placeholder="https://" required autocomplete="url_website" />
                        <x-input-error :messages="$errors->get('url_website')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="logo_path" :value="__('Logo Perusahaan')" />
                        <x-text-file id="logo_path" class="block mt-1 w-full" name="logo_path" :value="old('logo_path')" required/>
                        <x-input-error :messages="$errors->get('logo_path')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="file_path" :value="__('Dokumen Perusahaan (SIUP,TDP,AKTE)')" />
                        <x-text-file id="file_path" class="block mt-1 w-full" name="file_path" :value="old('file_path')" required />
                        <p class="text-sm text-gray-600 italic mt-1"><span class="text-red-500">*</span>Jika tidak memiliki salah satunya, silakan menghubungi dinas ketenagakerjaan secara langsung</p>
                        <x-input-error :messages="$errors->get('file_path')" class="mt-2" />
                    </div>

                    <div class="mt-5">
                        <label for="agree_to_terms" class="flex items-start">
                            <input type="checkbox" id="agree_to_terms" name="agree_to_terms" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mr-1.5 my-1" value="1" required/>
                            <span class="font-semibold text-gray-700 leading-tight">Dengan ini maka saya setuju dengan syarat dan ketentuan yang berlaku</span>
                        </label>

                        <x-input-error :messages="$errors->get('agree_to_terms')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-8">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Sudah punya akun?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('daftar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
