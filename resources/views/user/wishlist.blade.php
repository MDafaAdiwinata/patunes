<x-app-layout>
    <section id="wishlist">
        <div class="container mx-auto px-6 md:px-0 py-12 pb-24">
            <h1 class="text-xl font-bold md:text-2xl lg:text-3xl text-[#2a2a2a] text-center">Wishlist Kamu 😯
            </h1>

            {{-- Filter --}}
            <form action="{{ route('user.wishlist') }}" method="GET"
                class="flex flex-col lg:flex-row items-center justify-center gap-3 mt-10">
                <div class="grid grid-cols-2 gap-2 md:gap-4 w-full">
                    <div class="w-full">
                        <select name="kategori" onchange="this.form.submit()"
                            class="border border-black/10 rounded-xl w-full py-2 px-3">

                            @if ($kategoris->count() > 0)
                                <option value="" selected>Semua Kategori</option>

                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id_kategori }}"
                                        {{ request('kategori') == $kategori->id_kategori ? 'selected' : '' }}>
                                        {{ $kategori->nama }}
                                    </option>
                                @endforeach
                            @else
                                <option disabled selected>Maaf kategori belum ada</option>
                            @endif
                        </select>
                    </div>
                    <div class="w-full">
                        <select name="brand" onchange="this.form.submit()"
                            class="border border-black/10 rounded-xl w-full py-2 px-3">

                            @if ($brands->count() > 0)
                                <option value="" selected>Semua Brand</option>

                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id_brand }}"
                                        {{ request('brand') == $brand->id_brand ? 'selected' : '' }}>
                                        {{ $brand->nama }}
                                    </option>
                                @endforeach
                            @else
                                <option disabled selected>Maaf kategori belum ada</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="w-full ms-0 lg:ms-32 flex items-center justify-center">
                    <form action="{{ route('user.wishlist') }}" method="GET"
                        class="flex items-center w-full sm:w-[350px] md:w-[420px] lg:w-[500px]">
                        <input type="text" id="voice-search"
                            class="border border-black/10 text-[#2a2a2a] text-sm md:text-base rounded-xl focus:ring-transparent focus:border-black/40 block w-full py-2 px-3 ps-3.5"
                            placeholder="Cari Sepatu..." name="search" value="{{ request('search') }}" />
                        <button type="submit"
                            class="inline-flex items-center p-2.5 md:p-3 ms-1 text-base font-medium text-white bg-[#607896] rounded-xl hover:bg-[#879AA0] transition duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </form>

            {{-- Produk Card - Wishlist --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6 lg:gap-8 mt-12">
                @forelse ($products as $product)
                    <div class="group flex flex-col h-full bg-white border border-black/10 shadow-2xs rounded-xl">
                        <img src="{{ $product->gambar }}"
                            class="w-full h-40 md:h-60 object-cover flex flex-col justify-center items-center rounded-t-xl" />
                        <div class="p-4 md:p-6">
                            <span class="block mb-1 text-base md:text-lg font-semibold text-[#3977db]">
                                {{ $product->kategori->nama }}
                            </span>
                            <h3 class="text-xl md:text-2xl font-bold text-[#1a1a1a]">
                                {{ $product->nama }}
                            </h3>
                            <p class="mt-3 text-[#2a2a2a]/80 font-light">
                                {{ Str::words($product->deskripsi, 5, '...') }}   
                            </p>
                        </div>
                        <div class="mt-auto flex border-t border-line-2 divide-x divide-line-2">
                            <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm md:text-base font-medium rounded-b-xl bg-white text-gray-800 shadow-2xs hover:bg-[#ebf7ff] transition duration-300 focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('product.detail', $product) }}">
                                Lihat
                            </a>
                        </div>
                    </div>
                @empty
            </div>
            {{-- Not Available Card/Alert --}}
            <div class="flex flex-col w-full items-center justify-center border border-black/20 rounded-2xl">
                <div class="py-20">
                    <p class="text-black/80 text-base md:text-lg">
                        Kamu belum menambahkan wishlist, tambahin yukk
                    </p>
                    <a href="/user/user-katalog"
                        class="w-fit mx-auto px-4 py-2 text-sm lg:text-base font-semibold text-[#f0f0f0] rounded-xl bg-[#5483aa] hover:bg-[#457499] transition duration-300 flex items-center justify-center mt-4">
                        Wishlist
                    </a>
                </div>
            </div>
            @endforelse

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
