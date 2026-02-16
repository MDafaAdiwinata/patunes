@extends('layouts.landing')

@section('content')
    <x-navbar />

    {{-- Slider Banner --}}
    <x-slider-banner />

    {{-- Galeries --}}
    <x-galeri-product />

    {{-- Card Brand --}}
    <x-card-brand />

    {{-- Card Product --}}
    <x-card-product />

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
