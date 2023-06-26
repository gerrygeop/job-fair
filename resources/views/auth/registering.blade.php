<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="mb-6">
            <h3 class="text-xl text-gray-700 text-center font-medium">Mendaftar - Pilih jenis akun anda</h3>
        </div>
        <div class="mb-4">
            <a href="{{ route('register.pencari-kerja') }}" class="flex items-center justify-center px-5 py-2 bg-blue-600/10 border border-blue-700 rounded font-medium text text-blue-800 hover:text-white capitalize tracking-wide hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Pencari kerja</a>
        </div>
        <div>
            <a href="{{ route('register.perusahaan') }}" class="flex items-center justify-center px-5 py-2 bg-blue-600/10 border border-blue-700 rounded font-medium text text-blue-800 hover:text-white capitalize tracking-wide hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Perusahaan</a>
        </div>
    </div>
</x-guest-layout>
