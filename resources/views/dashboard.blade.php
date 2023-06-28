<x-app-layout>
    @can('admin')
        <x-board>
            <div class="p-6 text-gray-900">
                {{ __("You're logged in! ADMIN") }}
            </div>
        </x-board>
    @endcan

    @can('perusahaan')
        @include('lowongan.index')
    @endcan
</x-app-layout>
