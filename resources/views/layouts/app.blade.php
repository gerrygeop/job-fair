@extends('layouts.main')

@section('content')
    <div class="min-h-screen bg-gray-100">
        <div class="flex">
            @include('layouts.sidebar')

            <div class="md:ml-64 w-full">
                @include('layouts.navigation')

                <main class="p-4 sm:p-6 lg:p-10">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
@endsection
