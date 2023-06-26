@extends('layouts.main')

@section('content')
        <div class="min-h-screen flex flex-col sm:justify-center items-center py-6 bg-gray-100 text-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-auto h-10" />
                </a>
            </div>

            {{ $slot }}
        </div>
@endsection
