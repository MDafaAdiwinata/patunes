<x-app-layout>
    <section id="wishlist">
        <div class="container mx-auto px-6 md:px-0 py-12 pb-24">
            <h1 class="text-xl font-bold md:text-2xl lg:text-3xl text-[#2a2a2a] text-center">Wishlist Kamu 😯
            </h1>

            {{-- Filter --}}
            <div class="flex flex-col lg:flex-row items-center justify-center gap-3 mt-10">
                <div class="grid grid-cols-2 gap-2 md:gap-4 w-full">
                    <div class="w-full">
                        <select id="countries"
                            class="border border-black/10 text-[#2a2a2a]/80 focus:outline-none text-sm md:text-base rounded-xl block w-full py-2 px-3">
                            <option selected>Choose a country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <select id="countries"
                            class="border border-black/10 text-[#2a2a2a]/80 focus:outline-none text-sm md:text-base rounded-xl block w-full py-2 px-3">
                            <option selected>Choose a country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                </div>
                <div class="w-full ms-0 lg:ms-32 flex items-center justify-center">
                    <input type="text" id="voice-search"
                        class="border border-black/10 text-[#2a2a2a] text-sm md:text-base rounded-xl focus:ring-transparent focus:border-black/40 block w-full py-2 px-3 ps-3.5"
                        placeholder="Cari Produk/Sepatu..." required />
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

            {{-- Produk Card - Wishlist --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6 lg:gap-8 mt-12">
                <div class="group flex flex-col h-full bg-white border border-black/10 shadow-2xs rounded-xl">
                    <img src="https://images.unsplash.com/photo-1595309849731-f7ce86eda9fc?q=80&w=1583&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="w-full h-40 md:h-60 object-cover flex flex-col justify-center items-center rounded-t-xl" />
                    <div class="p-4 md:p-6">
                        <span class="block mb-1 text-base md:text-lg font-semibold text-[#3977db]">
                            Kategori Product
                        </span>
                        <h3 class="text-xl md:text-2xl font-bold text-[#1a1a1a]">
                            Nama Product
                        </h3>
                        <p class="mt-3 text-[#2a2a2a]/80 font-light">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum odio velit nisi pariatur,
                            ad iure blanditiis rem accusantium rerum illum!
                        </p>
                    </div>
                    {{-- <div class="mt-auto flex border-t border-[#2a2a2a]/10">
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm md:text-base font-medium rounded-b-xl bg-white text-gray-800 shadow-2xs hover:bg-[#ebf7ff] transition duration-300 focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none"
                            href="#">
                            Hapus
                        </a>
                    </div> --}}
                    <div class="mt-auto flex border-t border-line-2 divide-x divide-line-2">
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm md:text-base font-medium rounded-bl-xl bg-white text-gray-800 shadow-2xs hover:bg-[#ebf7ff] transition duration-300 focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none"
                            href="#">
                            Lihat
                        </a>
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm md:text-base font-medium rounded-br-xl bg-white text-gray-800 shadow-2xs hover:bg-[#ffebeb] transition duration-300 focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none"
                            href="#">
                            Hapus
                        </a>
                    </div>
                </div>
            </div>

            {{-- Not Available Card/Alert --}}
            {{-- <div class="flex flex-col w-full items-center justify-center border border-black/10 rounded-2xl">
            <div class="py-20">
                <p class="text-black/60 text-base md:text-lg">
                    Maaf produk belum tersedia
                </p>
            </div>
        </div> --}}
        </div>
    </section>
</x-app-layout>
