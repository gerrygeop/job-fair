<x-app-layout>
    <x-board class="mb-8">
        <div class="max-w-3xl mx-auto p-6 lg:py-8 text-gray-900">

            <form action="{{ $industri->id ? route('d.industri.update', $industri) : route('d.industri.store') }}" method="POST">
                @csrf
                @if ($industri->id)
                    @method('PUT')
                @endif

                <div>
                    <x-input-label for="name" :value="__('Nama Industri')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $industri->name)" required autofocus autocomplete="name" placeholder="Kreatif" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-8">
                    <x-link-button href="{{ route('d.industri.index') }}">
                        {{ __('Batal') }}
                    </x-link-button>

                    <x-primary-button>
                        {{ __('Simpan') }}
                    </x-primary-button>
                </div>
            </form>

        </div>
    </x-board>
</x-app-layout>
