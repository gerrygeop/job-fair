<section class="bg-[url('/public/image/jigsaw.svg')] bg-blue-800">
    <div class="max-w-7xl mx-auto px-5 py-14">
        <div class="flex flex-col text-center w-full mb-10">
            <h1 class="text-2xl sm:text-4xl font-semibold text-white">Cari Lowongan Kerja</h1>
        </div>

        <form action="{{ route('lowongan-kerja') }}" method="GET">
            <div class="flex w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                <div class="relative flex-grow w-full">
                    <label for="query" class="leading-7 text-sm text-gray-50">Lowongan</label>
                    <x-text-input type="text" id="query" name="query" class="w-full" value="{{ isset($_GET['query']) ? $_GET['query'] : '' }}" placeholder="Cari Profesi, Perusahaan, Industri, Lokasi, Kota ..." />
                </div>

                <button class="flex items-center text-white font-semibold tracking-wide capitalize bg-rose-500 py-2 pl-4 pr-6 rounded hover:bg-rose-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    Cari
                </button>
            </div>
        </form>
    </div>
</section>
