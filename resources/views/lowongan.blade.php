<x-welcome-layout>
    <x-search-lowongan />

    <section class="max-w-7xl mx-auto text-gray-600">
        <div class="px-5 py-14 mx-auto">
            <div class="flex flex-wrap -m-2">
                @forelse ( $lowongan as $data )
                    <x-card-lowongan :lowongan="$data" />
                @empty
                    <div class="flex justify-center w-full h-96">
                        <p class="text-gray-600 italic">Lowongan {{ isset($_GET['query']) ? "'".$_GET['query']."'" : '' }} tidak ditemukan</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-welcome-layout>
