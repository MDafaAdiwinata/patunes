@extends('layouts.landing')

@section('content')
    {{-- navbar --}}
    <x-navbar />

    {{-- Katalog --}}
    <section class="" id="katalog">
        <div class="container mx-auto px-6 py-24 md:py-32">
            <h1 class="text-xl font-bold md:text-2xl lg:text-3xl text-[#2a2a2a] text-center">Lihat Semua Produk</h1>

            {{-- Filter --}}
            <form action="{{ route('katalog') }}" method="GET"
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
                    <input type="text" id="voice-search"
                        class="border border-black/10 text-[#2a2a2a] text-sm md:text-base rounded-xl focus:ring-transparent focus:border-black/40 block w-full py-2 px-3 ps-3.5"
                        placeholder="Cari Produk/Sepatu..." value="{{ request('search') }}" name="search" />
                    <button type="submit"
                        class="inline-flex items-center p-2.5 md:p-3 ms-1 text-base font-medium text-white bg-[#607896] rounded-xl hover:bg-[#879AA0] transition duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </button>
                </div>
            </form>

            {{-- Produk Card --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6 lg:gap-8 mt-12">

                @forelse ($products as $product)
                    <div
                        class="flex flex-col p-3 sm:p-5 border border-black/10 bg-[#879AA0]/5 hover:bg-[#879AA0]/0 hover:border-black/40 transition duration-300 hover:scale-105 backdrop-blur-md rounded-2xl sm:rounded-3xl cursor-pointer">
                        <div class="aspect-4/4 overflow-hidden rounded-2xl">
                            <img class="size-full object-cover rounded-2xl h-60"
                                src="{{ $product->gambar }}"
                                alt="Product Image">
                        </div>
                        <div class="pt-4">
                            <h3 class="font-semibold text-lg md:text-xl text-[#2a2a2a]/80">
                                {{ $product->nama }}
                            </h3>
                            <p class="mt-1 text-xl md:text-2xl font-bold text-[#151515]">
                                Rp {{ number_format($product->harga, 0, ',', '.') }}
                            </p>
                            <p class="mt-2 font-normal text-sm md:text-base text-black/60">
                                {{ $product->kategori->nama }}
                            </p>
                        </div>
                        <div class="mt-12">
                            <a class="py-2 px-3 w-full inline-flex justify-center items-center gap-x-2 text-base md:text-lg font-bold text-nowrap rounded-xl md:rounded-2xl bg-[#4f95ce] border border-transparent text-[#f0f0f0] hover:bg-[#795047] focus:outline-hidden focus:bg-blue-700 transition duration-300 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('katalog.detail', $product->id_product) }}">
                                Lihat Produk
                            </a>
                        </div>
                    </div>
                @empty

            </div>
            {{-- Not Available Card/Alert --}}
            <div class="flex flex-col w-full items-center justify-center border border-black/10 rounded-2xl">
                <div class="py-20">
                    <p class="text-black/60 text-base md:text-lg">
                        Maaf produk belum tersedia
                    </p>
                </div>
            </div>
            @endforelse
        </div>
    </section>

    {{-- Cta --}}
    <x-cta />

    {{-- Footer --}}
    <x-footer-landing />
@endsection
