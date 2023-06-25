@props(['lowongan'])

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
    <div class="h-full border-gray-200 border p-4 rounded-lg">
        <div class="flex items-start mb-3">
            <img alt="team" class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded mr-4" src="{{ asset('storage/'.$lowongan->perusahaan->logo_path) }}">
            <div class="flex-grow">
                <h2 class="text-gray-900 text-lg font-semibold">{{ $lowongan->judul }}</h2>
                <p class="text-indigo-600 font-medium">{{ $lowongan->perusahaan->nama_perusahaan }}</p>
            </div>
        </div>

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>

            <p class="text-gray-800 ml-1">{{ $lowongan->lokasi }}</p>
        </div>

        <div class="flex items-center mt-3 text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <p class="text-xs ml-1">{{ $lowongan->created_at->diffForHumans() }}</p>
        </div>
    </div>
</div>
