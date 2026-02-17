<x-app-layout>
    <section id="keloa-produk">
        <div class="container mx-auto px-6 md:px-0 py-6 sm:py-12 pb-24">
            <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-between gap-4 sm:gap-0">
                <h1 class="text-lg sm:text-xl lg:text-2xl text-[#151515] font-semibold">
                    Kelola Data Produk
                </h1>

                <div class="flex items-center w-full sm:w-[350px] md:w-[420px] lg:w-[500px]">
                    <input type="text" id="voice-search"
                        class="border border-black/10 text-[#2a2a2a] text-sm md:text-base rounded-xl focus:ring-transparent focus:border-black/40 block w-full py-2 px-3 ps-3.5"
                        placeholder="Cari Nama Produk/Sepatu..." required />
                    <button type="submit"
                        class="inline-flex items-center p-2.5 md:p-3 ms-1 text-base font-medium text-white bg-[#607896] rounded-xl hover:bg-[#879AA0] transition duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Table View - Data Produk --}}
            <div class="min-w-full rounded-2xl mt-6">
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
                                <th scope="col" class="px-6 py-3 text-base font-semibold text-[#151515]/80 text-end">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-black/10 bg-[#fff] hover:bg-[#fff]/50 transition duration-300">
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
                                <td class="px-6 py-4 flex flex-col justify-end lg:flex-row gap-2 text-end">
                                    <a href=""
                                        class="px-4 py-2 text-sm lg:text-base font-semibold text-[#151515] rounded-xl bg-yellow-200 hover:bg-yellow-300 transition duration-300 flex items-center justify-center">
                                        Ubah
                                    </a>
                                    <a href=""
                                        class="px-4 py-2 text-sm lg:text-base font-semibold text-[#151515] rounded-xl bg-red-200 hover:bg-red-300 transition duration-300 flex items-center justify-center">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
