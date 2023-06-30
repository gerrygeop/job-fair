@extends('layouts.main')

@section('content')
        <div class="min-h-screen bg-slate-50 selection:bg-red-500 selection:text-white">

            <nav x-data="{ open: false }" class="bg-white border-b border-gray-200 shadow-sm">
                <!-- Primary Navigation Menu -->
                <div class="mx-auto px-4 lg:px-6">
                    <div class="flex justify-between h-20">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="/">
                                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" alt="LogoIpsum" />
                                </a>
                            </div>

                            <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                                <x-nav-link href="{{ route('lowongan-kerja') }}">
                                    {{ __('Lowongan Kerja') }}
                                </x-nav-link>

                                <x-nav-link href="{{ route('perusahaan') }}">
                                    {{ __('Perusahaan') }}
                                </x-nav-link>
                            </div>
                        </div>

                        <!-- Settings Dropdown -->
                        <div class="hidden md:flex md:items-center md:space-x-4 md:ml-6">
                            @auth
                                @can('pelamar')
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>

                                                <div class="ml-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('dashboard')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Pengaturan Akun') }}
                                            </x-dropdown-link>

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                @endcan

                                @canany(['perusahaan', 'admin'])
                                    <a class="block px-5 py-2 text-sm text-center text-white capitalize bg-blue-600 rounded lg:mt-0 hover:bg-blue-500 lg:w-auto" href="{{ route('dashboard') }}">
                                        Dashboard
                                    </a>
                                @endcanany
                            @endauth

                            @guest
                                <a class="block px-5 py-2 text-sm text-center text-white capitalize bg-blue-600 rounded lg:mt-0 hover:bg-blue-500 lg:w-auto" href="{{ route('login') }}">
                                    Login
                                </a>
                                <a class="block px-5 py-2 text-sm text-center text-white capitalize bg-blue-600 rounded lg:mt-0 hover:bg-blue-500 lg:w-auto" href="{{ route('registering') }}">
                                    Register
                                </a>
                            @endguest
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center md:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link href="{{ route('lowongan-kerja') }}">
                            {{ __('Lowongan Kerja') }}
                        </x-responsive-nav-link>

                        <x-responsive-nav-link href="{{ route('perusahaan') }}">
                            {{ __('Perusahaan') }}
                        </x-responsive-nav-link>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="py-6 px-4 border-t space-y-4 border-gray-200">

                        @auth
                            @can('pelamar')
                                <div class="space-y-1">
                                    <x-responsive-nav-link :href="route('profile.edit')">
                                        {{ __('Pengaturan Akun') }}
                                    </x-responsive-nav-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link class="text-red-600" :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Keluar') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                            @endcan

                            @canany(['perusahaan', 'admin'])
                                <a class="block px-5 py-2 text-sm text-center text-white capitalize bg-blue-600 rounded lg:mt-0 hover:bg-blue-500 lg:w-auto" href="#">
                                    Dashboard
                                </a>
                            @endcanany
                        @endauth

                        @guest
                            <a class="block px-5 py-2 text-sm text-center text-white capitalize bg-blue-600 rounded lg:mt-0 hover:bg-blue-500 lg:w-auto" href="#">
                                Login
                            </a>
                            <a class="block px-5 py-2 text-sm text-center text-white capitalize bg-blue-600 rounded lg:mt-0 hover:bg-blue-500 lg:w-auto" href="{{ route('registering') }}">
                                Register
                            </a>
                        @endguest
                    </div>
                </div>
            </nav>

            {{ $slot }}

            <x-footer />
        </div>
@endsection
