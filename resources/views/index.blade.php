@extends('layouts.landing')

@section('content')
    <x-navbar />

    {{-- Slider Banner --}}
    <x-slider-banner />

    {{-- Galeries --}}
    <x-galeri-product />

    {{-- Card Brand --}}
    <div class="container px-6 py-10 sm:px-6 pb-20 lg:px-8 mx-auto">
        <div class="max-w-2xl mx-auto text-center mb-6 md:mb-14">
            <h2 class="text-xl font-bold md:text-2xl lg:text-3xl text-[#2a2a2a]">Brand Kami</h2>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @forelse ($brands as $brand)
                <div class="flex flex-col rounded-2xl p-4 md:p-6 bg-[#fff] border border-black/10">
                    <div class="flex items-center gap-x-4">
                        <img class="rounded-full size-16" src="{{ $brand->logo }}" alt="Avatar">
                        <div class="grow">
                            <a href="{{ $brand->url }}"
                                class="hover:underline font-semibold text-lg md:text-xl text-[#000]" target="_blank">
                                {{ $brand->nama }}
                            </a>
                            <p class="text-base md:text-lg text-[#2a2a2a]/80">
                                {{ $brand->tagline }}
                            </p>
                        </div>
                    </div>

                    <p class="mt-4 text-[#2a2a2a]/60 text-base md:text-lg">
                        {{ Str::words($brand->deskripsi, 20, '...') }}
                    </p>
                </div>

            @empty
        </div>
        <p class="text-center text-lg font-light">
            Tidak ada brand yang tersedia saat ini.
        </p>
        @endforelse
    </div>

    {{-- Card Product --}}
    <div class="container px-6 py-10 sm:px-6 lg:px-8 lg:py-20 mx-auto">
        <h2 class="text-xl font-bold md:text-2xl lg:text-3xl text-[#2a2a2a] text-center mb-6 md:mb-14">Produk Terbaru</h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
                            {{ Str::words($product->deskripsi, 20, '...') }}
                        </p>
                    </div>
                    <div class="mt-auto flex border-t border-[#2a2a2a]/10">
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm md:text-base font-medium rounded-b-xl bg-white text-gray-800 shadow-2xs hover:bg-[#ebf7ff] transition duration-300 focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none"
                            href="{{ route('katalog.detail', $product) }}">
                            Lihat
                        </a>
                    </div>
                </div>

            @empty
        </div>
        <p class="text-center text-lg font-light">
            Tidak ada Produk yang tersedia saat ini.
        </p>
        @endforelse
    </div>

    {{-- Keunggulan --}}
    <x-keunggulan />

    {{-- Testimoni --}}
    <x-testimoni />

    {{-- FAQ --}}
    <div class="container px-6 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight text-[#2a2a2a] text-center mb-10">Frequently Asked
            Questions</h2>

        <div class="max-w-5xl mx-auto">
            <!-- Accordion -->
            <div class="hs-accordion-group">
                <div class="hs-accordion hs-accordion-active:bg-[#e5f0f7] rounded-xl p-6 active"
                    id="hs-basic-with-title-and-arrow-stretched-heading-one">
                    <button
                        class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-[#2a2a2a]/80 focus:outline-hidden"
                        aria-expanded="true" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                        Apa itu Patunes?
                        <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-[#2a2a2a]/80"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                        <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-[#2a2a2a]/80"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region"
                        aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                        <p class="text-[#2a2a2a]/80">
                            Patunes adalah katalog digital yang mengumpulkan berbagai brand sepatu lokal Indonesia. Di sini,
                            kamu bisa mencari dan membandingkan sepatu terbaik di satu tempat.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:bg-[#e5f0f7] rounded-xl p-6"
                    id="hs-basic-with-title-and-arrow-stretched-heading-two">
                    <button
                        class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-hidden"
                        aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                        Apakah layanan Patunes Berbayar?
                        <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                        <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                        role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                        <p class="text-gray-800">
                            Tidak, layanan ini sepenuhnya gratis. Kamu bisa bebas melihat koleksi dan mencari referensi
                            sepatu lokal sepuasnya tanpa biaya.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:bg-[#e5f0f7] rounded-xl p-6"
                    id="hs-basic-with-title-and-arrow-stretched-heading-three">
                    <button
                        class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-hidden"
                        aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                        Seberapa akurat info produk di Patunes?
                        <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                        <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                        role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                        <p class="text-gray-800">
                            Kami selalu berusaha memberikan data terbaru. Info mengenai harga, bahan, dan model kami ambil
                            langsung dari data resmi masing-masing brand.
                        </p>
                    </div>
                </div>

                <div class="hs-accordion hs-accordion-active:bg-[#e5f0f7] rounded-xl p-6"
                    id="hs-basic-with-title-and-arrow-stretched-heading-four">
                    <button
                        class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-hidden"
                        aria-expanded="false" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
                        Bagaimana cara mendapatkan produk yang ada di katalog?
                        <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                        <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </button>
                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-four"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                        role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
                        <p class="text-gray-800">
                            Kami fokus menyajikan katalog model dan spesifikasi terbaru. Untuk ketersediaan stok atau
                            pemesanan, kamu bisa langsung menuju tautan brand yang tersedia, karena Patunes berperan sebagai
                            jendela informasi untuk mempermudah pencarianmu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Cta --}}
    <x-cta />

    {{-- Footer --}}
    <x-footer-landing />
@endsection
