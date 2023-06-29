<x-welcome-layout>
    <x-search-lowongan />

    <section class="max-w-7xl mx-auto text-gray-600">
        <div class="px-5 py-14 mx-auto">
            <div class="flex flex-wrap -m-2">
                @foreach ($perusahaan as $data)
                    <x-card-perusahaan :perusahaan="$data" />
                @endforeach
            </div>
        </div>
    </section>
</x-welcome-layout>
