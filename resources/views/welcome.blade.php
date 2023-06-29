<x-welcome-layout>
    <x-search-lowongan />

    <section class="max-w-7xl mx-auto text-gray-600">
        <div class="px-5 py-14 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="text-3xl font-medium text-gray-900">Daftar Lowongan</h1>
            </div>
            <div class="flex flex-wrap -m-2">
                @foreach ($lowongan as $data)
                    <x-card-lowongan :lowongan="$data" />
                @endforeach
            </div>
            <div class="mt-10 flex justify-center">
                <a href="{{ route('lowongan-kerja') }}" class="flex items-center px-5 py-2 bg-blue-700 border border-transparent rounded font-medium text text-white capitalize tracking-wide hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Lihat semua lowongan</a>
            </div>
        </div>
    </section>

    <div class="border-t"></div>

    <section class="max-w-7xl mx-auto text-gray-600">
        <div class="px-5 py-14 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="text-3xl font-medium text-gray-900">Perusahaan</h1>
            </div>
            <div class="flex flex-wrap -m-2">
                @foreach ($perusahaan as $data)
                    <x-card-perusahaan :perusahaan="$data" />
                @endforeach
            </div>

            <div class="mt-10 flex justify-center">
                <a href="{{ route('perusahaan') }}" class="flex items-center px-5 py-2 bg-blue-700 border border-transparent rounded font-medium text text-white capitalize tracking-wide hover:bg-blue-600 focus:bg-blue-600 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Lihat semua perusahaan</a>
            </div>
        </div>
    </section>

    <section class="mx-auto bg-blue-600">
        <div class="max-w-7xl mx-auto px-5 py-14">
            <div class="text-center w-full">
                <h1 class="text-3xl font-semibold text-gray-50 uppercase">Mulai bangun
                    KARIER IMPIANMU</h1>
                <div class="mt-8 flex justify-center">
                    <a href="#" class="flex items-center px-5 py-2 bg-white border border-transparent rounded font-semibold text text-blue-600 tracking-wider uppercase focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </section>
</x-welcome-layout>
