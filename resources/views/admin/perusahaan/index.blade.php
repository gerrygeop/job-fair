<x-app-layout>

    <section class="px-4 mx-auto">
        <h2 class="text-lg font-medium text-gray-800">Daftar Perusahaan</h2>

        <p class="mt-1 text-sm text-gray-500">Ada 1 total perusahaan</p>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">

                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Company
                                    </th>
                                    <th scope="col" class="px-6 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Status
                                    </th>
                                    <th scope="col" class="relative px-6 py-3.5">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            <h2 class="font-medium text-lg text-gray-800">Catalog</h2>
                                            <p class="font-normal text-sm text-gray-600">catalogapp.io</p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                        <div class="inline px-3 py-1 text-sm font-normal rounded-md text-emerald-500 gap-x-2 bg-emerald-100/30 border border-emerald-600/40">
                                            Verified
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-end whitespace-nowrap">
                                        <button class="px-4 py-1.5 text-gray-500 transition-colors duration-200 rounded-md hover:bg-gray-100">
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>

                <span>
                    previous
                </span>
            </a>

            <div class="items-center hidden md:flex gap-x-3">
                <a href="#" class="px-2 py-1 text-sm text-gray-700 rounded-md bg-white border ">1</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">2</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">3</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">...</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">12</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">13</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">14</a>
            </div>

            <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
                <span>
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </section>

</x-app-layout>
