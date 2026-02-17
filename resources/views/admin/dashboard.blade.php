<x-app-layout>
    <section id="stats_dashboard">
        <div class="container mx-auto px-6 md:px-0 py-12 pb-24">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">

                {{-- Data Brand --}}
                <div class="flex flex-col bg-white border border-black/15 rounded-2xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-lg md:text-xl font-medium text-[#2a2a2a]/60">
                                Total Brand
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-2xl sm:text-4xl font-bold text-[#151515]">
                                    000
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-10 md:size-14 bg-[#607896] text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-6 md:size-8"
                                viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="M7.503 16.267C-.781 19.742 1.808 9.896 5.433 7c-.978 2.667-1.453 7.008 5.067 4.5L22 7s-5.279 5.4-14.497 9.267" />
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-base md:text-lg font-light text-[#2a2a2a]/80 hover:text-[#2a2a2a] transition duration-300 border-t border-gray-200 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 rounded-b-xl"
                        href="#">
                        Lihat Data Brand
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>

                {{-- Data Kategori --}}
                <div class="flex flex-col bg-white border border-black/15 rounded-2xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-lg md:text-xl font-medium text-[#2a2a2a]/60">
                                Total Kategori
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-2xl sm:text-4xl font-bold text-[#151515]">
                                    000
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-10 md:size-14 bg-[#879AA0] text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-6 md:size-8"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1M9 9H5V5h4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1m-1 6h-4V5h4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1m-1 6H5v-4h4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4s4-1.794 4-4s-1.794-4-4-4m0 6c-1.103 0-2-.897-2-2s.897-2 2-2s2 .897 2 2s-.897 2-2 2" />
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-base md:text-lg font-light text-[#2a2a2a]/80 hover:text-[#2a2a2a] transition duration-300 border-t border-gray-200 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 rounded-b-xl"
                        href="#">
                        Lihat Data Kategori
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>

                {{-- Data Produk --}}
                <div class="flex flex-col bg-white border border-black/15 rounded-2xl">
                    <div class="p-4 md:p-5 flex justify-between gap-x-3">
                        <div>
                            <p class="text-lg md:text-xl font-medium text-[#2a2a2a]/60">
                                Total Kategori
                            </p>
                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-2xl sm:text-4xl font-bold text-[#151515]">
                                    000
                                </h3>
                            </div>
                        </div>
                        <div
                            class="shrink-0 flex justify-center items-center size-10 md:size-14 bg-[#795047] text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 size-6 md:size-8"
                                viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor"
                                        d="M18.026 3.902c-.152-.263-.448-.492-.716-.492c-.48 0-1.097.48-1.47.771c-.559.435-1.211.848-1.911.992c-.518.105-1.136.026-1.682-.117c-.09-.023-.864-.294-.864-.294c-1.072-.495-1.548.912-1.971 1.605c-.29.473-.655 1.037-1.07 1.606a1 1 0 0 0-1.04 1.314q-.462.565-.877 1.086A1 1 0 0 0 5.29 11.84c-1.072 1.433-1.81 2.598-2.236 3.635c-.36.88-.514 1.703-.447 2.542c.067.827.342 1.598.727 2.376c.522 1.055 1.802 1.344 2.739.803l14.722-8.5a2 2 0 0 0 .732-2.732zm.268 4.464l-1.419-2.457c-.764.546-1.617 1.033-2.545 1.223c-.954.195-1.919.034-2.587-.14c-.411-.107-.404.057-.625.418c-.252.413-.564.899-.92 1.406l.111.055a1 1 0 1 1-.886 1.793l-.473-.234q-.357.436-.68.84a1 1 0 0 1-.945 1.76l-.312-.154c-1.086 1.437-1.752 2.487-2.11 3.358c-.265.647-.34 1.154-.303 1.623c.037.466.192.964.498 1.592l14.696-8.485l-.5-.866l-4.33 2.5a1 1 0 0 1-1-1.732z" />
                                </g>
                            </svg>
                        </div>
                    </div>

                    <a class="py-3 px-4 md:px-5 inline-flex justify-between items-center text-base md:text-lg font-light text-[#2a2a2a]/80 hover:text-[#2a2a2a] transition duration-300 border-t border-gray-200 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 rounded-b-xl"
                        href="#">
                        Lihat Data Kategori
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card Table -->
            <div class="flex flex-col bg-[#fff] border border-black/10 rounded-2xl p-4 md:p-6 mt-8">
                <div class="flex flex-row items-center gap-4 justify-between mb-6">
                    <div>
                        <h1 class="text-[#151515] font-semibold text-lg md:text-xl md:mb-1">Produk Terbaru</h1>
                        <p class="font-light text-[#151515]/80 text-base md:text-lg">Produk yang baru di tambahkan</p>
                    </div>
                    <a href=""
                        class="px-2 sm:px-5 py-2 text-sm lg:text-base font-semibold text-[#151515] rounded-full sm:rounded-xl bg-[#e5e5e5]/50 hover:bg-[#e5e5e5]  transition duration-300">
                        <span class="hidden sm:block">Lihat Semua</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 block sm:hidden" viewBox="0 0 12 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M10.157 12.711L4.5 18.368l-1.414-1.414l4.95-4.95l-4.95-4.95L4.5 5.64l5.657 5.657a1 1 0 0 1 0 1.414" />
                        </svg>
                    </a>
                </div>

                <!-- Table -->
                <div class="min-w-full">
                    <div
                        class="border border-black/10 rounded-xl overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-none [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                        <table class="min-w-full divide-y divide-black/10">
                            <thead class="bg-[#607896]/10">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-base font-semibold text-[#151515]/80">Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-base font-semibold text-[#151515]/80">Age</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-base font-semibold text-[#151515]/80">Address
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-base font-semibold text-[#151515]/80">Testing
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-black/10">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#151515]/60">John
                                        Brown
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#151515]/60">45</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#151515]/60">New York No. 1
                                        Lake
                                        Park
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#151515]/60">Lorem ipsum dolor
                                        sit
                                        amet.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
