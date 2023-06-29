@props(['perusahaan'])

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
    <div class="h-full border-gray-200 border p-4 rounded-lg">
        <div class="flex items-start mb-3">
            <img alt="team" class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded mr-4" src="{{ asset('storage/perusahaan/logo/'.$perusahaan->logo_path) }}">

            <div class="flex-grow">
                <a href="{{ route('perusahaan.detail', $perusahaan) }}" class="text-gray-800 text-lg font-semibold hover:underline">{{ $perusahaan->nama_perusahaan }}</a>
                <p class="text-indigo-600">{{ $perusahaan->lokasi }}</p>
            </div>
        </div>

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
            </svg>

            <p class="text-sm text-gray-800 ml-1">
                {{ $perusahaan->industri->name }}
            </p>
        </div>

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
            </svg>

            <p class="text-sm text-blue-600 ml-1">{{ $perusahaan->lowongan_count }} Lowongan</p>
        </div>
    </div>
</div>
