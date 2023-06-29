<x-app-layout>
    @can('admin')
        @include('admin.statistik')

        <div class="border-t my-4"></div>

        <x-board>
            <div class="p-6 text-gray-900">
                {{ __("You're logged in! ADMIN") }}
            </div>
        </x-board>
    @endcan

    @can('perusahaan')
        @include('lowongan.index', ['lowongan' => auth()->user()->perusahaan->lowongan])
    @endcan

    @can('pelamar')
        <x-board>
            <div class="p-6 text-gray-900">
                <span class="font-semibold">{{ auth()->user()->name }}</span>, {{ __("You're logged in!") }}
            </div>
        </x-board>
    @endcan
</x-app-layout>
