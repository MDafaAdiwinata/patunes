@extends('layouts.landing')

@section('content')
    {{-- navbar --}}
    <x-navbar />

    <section id="detail" class="lg:h-screen">
        <div class="container mx-auto px-6 md:px-0 py-24 md:py-20 flex flex-col">
            <div class="grid grid-cols-2 gap-4 sm:mt-4 items-center justify-center mb-6 md:mb-12">
                <div class="flex items-center justify-start mx-auto w-full lg:w-4/5">
                    <a href="/katalog"
                        class="p-2 font-semibold text-[#151515] rounded-2xl bg-[#eee] hover:bg-[#ddd] border border-black/10 hover:border-black/30 transition duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 md:size-8 -rotate-90 text-[#2a2a2a]"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12.884 5.116a1.253 1.253 0 0 0-1.768 0l-5 5a1.25 1.25 0 0 0 1.768 1.768l2.866-2.866V18a1.25 1.25 0 1 0 2.5 0V9.018l2.866 2.866a1.25 1.25 0 1 0 1.768-1.768z" />
                        </svg>
                    </a>
                </div>
                <div class="flex items-center justify-end h-10 md:h-20">
                    <h1 class="text-lg md:text-2xl lg:text-2xl font-semibold text-black">
                        Detail Produk
                    </h1>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:gap-4 items-center justify-center">
                <div class="flex items-center justify-center mx-auto w-full">
                    <img src="{{ $product->gambar }}"
                        class="w-full lg:w-4/5" alt="">
                </div>
                <div class="flex flex-col items-start justify-start gap-2 h-full py-0 sm:py-8 mt-12 lg:mt-0 px-2 md:px-0">
                    <div class="flex flex-row items-center justify-between w-full">
                        <div>
                            <h1 class="text-[#151515] text-lg md:text-xl lg:text-2xl font-bold">
                                {{ $product->nama }}
                            </h1>
                            <p class="text-[#2a2a2a] font-semibold text-lg md:text-xl italic mt-1">
                                {{ $product->kategori->nama }}
                            </p>
                        </div>
                        <p class="text-sm sm:text-base px-4 py-2 bg-[#EFE7E2] text-[#795047] font-bold rounded-full">
                            {{ $product->brand->nama }}
                        </p>
                    </div>

                    <h1
                        class="text-[#151515] text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold mt-4 px-5 md:px-6 py-3 md:py-4 w-full bg-gradient-to-r from-[#6CABDD]/20 via-[#6CABDD]/5 to-transparent rounded-xl">
                        Rp {{ number_format($product->harga, 0, ',', '.') }}
                    </h1>
                    <p
                        class="text-[#2a2a2a] font-light text-base mt-2 md:mt-4 px-4 md:px-5 py-4  w-full border border-black/10 rounded-xl">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima magnam mollitia ipsum velit sunt id
                        amet itaque accusantium tempora sapient
                    </p>
                    <div class="col-start-2 text-center ms-auto lg:ms-0">
                        <div class="hs-tooltip [--placement:auto] inline-block">
                            <button type="button"
                                class="hs-tooltip-toggle ms-auto lg:ms-0 px-4 py-2 text-sm lg:text-base font-semibold text-[#f0f0f0] rounded-xl bg-[#5483aa] hover:bg-[#457499] transition duration-300 flex items-center justify-center mt-12">
                                Wishlist
                                <span
                                    class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-[#f0f0f0] border border-black/20 text-base font-medium text-black/80 rounded-lg shadow-2xs"
                                    role="tooltip">
                                    Login untuk simpan
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Footer --}}
    <x-footer-landing />
@endsection
