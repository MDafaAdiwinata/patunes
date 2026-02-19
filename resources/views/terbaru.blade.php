@extends('layouts.landing')

@section('content')
    {{-- navbar --}}
    <x-navbar />

    {{-- Card Produk Terbaru --}}
    <section class="">
        <div class="container mx-auto px-6 md:px-0 py-24 md:py-32 flex flex-col items-center justify-center">
            <h1 class="text-xl font-bold md:text-2xl lg:text-3xl text-[#2a2a2a] text-center">Jelajahi Produk Terbaru</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 lg:gap-12 mt-6 sm:mt-10">

                @forelse ($products as $product)
                    <!-- Card -->
                    <div class="relative bg-white border border-black/10 rounded-xl md:rounded-2xl w-full xl:w-[600px]">
                        <img class="w-full h-96 object-cover rounded-xl md:rounded-2xl" src="{{ $product->gambar }}">
                        <div class="absolute top-0 start-0 end-0">
                            <div class="p-6">
                                <h3 class="font-semibold text-[#2a2a2a] text-lg md:text-xl">
                                    {{ $product->nama }}
                                </h3>
                                <p class="font-light text-[#2a2a2a]/80 text-base">
                                    {{ $product->kategori->nama }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
            </div>
            <p class="text-center text-lg font-light py-2">
                Tidak ada Data Produk Terbaru yang tersedia saat ini.
            </p>
            @endforelse
        </div>
    </section>

    {{-- Cta --}}
    <x-cta />

    {{-- Footer --}}
    <x-footer-landing />
@endsection
