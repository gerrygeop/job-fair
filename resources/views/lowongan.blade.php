<x-hero-layout>
    <section class="bg-[url('/public/image/jigsaw.svg')] bg-blue-800">
        <div class="max-w-7xl mx-auto px-5 py-14">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="text-2xl sm:text-4xl font-semibold text-white">Cari Lowongan Kerja</h1>
            </div>

            <div class="flex w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                <div class="relative flex-grow w-full">
                    <label for="full-name" class="leading-7 text-sm text-gray-50">Jabatan</label>
                    <input type="text" id="full-name" name="full-name" class="w-full bg-gray-100 focus:bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative flex-grow w-full">
                    <label for="email" class="leading-7 text-sm text-gray-50">Sektor/Bidang</label>
                    <input type="text" id="email" name="email" class="w-full bg-gray-100 focus:bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <div class="relative flex-grow w-full">
                    <label for="email" class="leading-7 text-sm text-gray-50">Perusahaan</label>
                    <input type="text" id="email" name="email" class="w-full bg-gray-100 focus:bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <button class="text-white bg-rose-500 border-0 py-2 px-8 focus:outline-none hover:bg-rose-600 rounded text-lg">Cari</button>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto text-gray-600">
        <div class="px-5 py-14 mx-auto">
            <div class="flex flex-wrap -m-2">
                @foreach ($lowongan as $data)
                    <x-card-lowongan :lowongan="$data" />
                @endforeach
            </div>
        </div>
    </section>
</x-hero-layout>
