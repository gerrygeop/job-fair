@can('admin')
    <x-app-layout>
        @include('admin.statistik')

        <div class="border-t my-4"></div>

        <x-board>
            <div class="p-6 text-gray-900">
                {{ __("You're logged in! ADMIN") }}
            </div>
        </x-board>
    </x-app-layout>
@endcan

@can('perusahaan')
    <x-app-layout>
        @include('lowongan.index', ['lowongan' => auth()->user()->perusahaan->lowongan])
    </x-app-layout>
@endcan

@can('pelamar')
    <x-welcome-layout>
        <div class="min-h-screen max-w-7xl mx-auto py-10">
            <x-board class="border mb-8">
                @include('pelamar.detail-pelamar', ['pelamar' => auth()->user()->pelamar])
            </x-board>
        </div>
    </x-welcome-layout>
@endcan
