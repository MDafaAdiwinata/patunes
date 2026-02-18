<x-app-layout>
    <section id="dashboard">
        <div class="container mx-auto px-6 md:px-0 py-12 pb-24">
            <div id="hs-carousel" class="relative rounded-2xl"
                data-hs-carousel='{"loadingClasses": "opacity-0", "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer", "isAutoPlay": true, "isInfiniteLoop": true}'>
                <div class="hs-carousel relative w-full min-h-80 md:min-h-[500px] overflow-hidden">
                    <!-- Carousel Body -->
                    <div
                        class="hs-carousel-body flex flex-nowrap absolute top-0 bottom-0 start-0 transition-transform duration-700 opacity-0">
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full">
                                <img src="/images/iklan3.png" class="w-full h-full object-cover rounded-2xl"
                                    alt="Iklan">
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full">
                                <img src="/images/iklan2.png" class="w-full h-full object-cover rounded-2xl"
                                    alt="Iklan">
                            </div>
                        </div>
                        <div class="hs-carousel-slide">
                            <div class="flex justify-center h-full">
                                <img src="/images/iklan1.png" class="w-full h-full object-cover rounded-2xl"
                                    alt="Iklan">
                            </div>
                        </div>
                    </div>
                    <!-- End Carousel Body -->
                </div>

                <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 gap-x-2"></div>
            </div>

            <div class="flex flex-col gap-4 mt-20">
                <h2 class="text-xl font-bold md:text-2xl text-[#2a2a2a] text-start">Wishlist
                    saya</h2>

                {{-- Wishlist Overview --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6 items-center justify-center mt-4">
                    @forelse ($products as $product)
                        <div class="group flex flex-col h-full bg-white border border-black/10 shadow-2xs rounded-xl">
                            <img src="{{ $product->gambar
                            ? 'https://res.cloudinary.com/dpur2sebv/image/upload/' . $product->gambar
                            : 'https://res.cloudinary.com/dpur2sebv/image/upload/v1771304190/noimage_a4ur8u.png' }}"
                                class="w-full h-40 md:h-60 object-cover flex flex-col justify-center items-center rounded-t-xl" />
                            <div class="p-4 md:p-6">
                                <span class="block mb-1 text-base md:text-lg font-semibold text-[#3977db]">
                                    {{ $product->kategori->nama }}
                                </span>
                                <h3 class="text-xl md:text-2xl font-bold text-[#1a1a1a]">
                                    {{ $product->nama }}
                                </h3>
                                <p class="mt-3 text-[#2a2a2a]/80 font-light">
                                    {{ $product->deskripsi }}
                                </p>
                            </div>
                        </div>
                    @empty
                </div>

                {{-- Not Available Card/Alert --}}
                <div class="flex flex-col w-full items-center justify-center border border-black/20 rounded-2xl">
                    <div class="py-20">
                        <p class="text-black/80 text-base md:text-lg">
                            Maaf produk belum tersedia
                        </p>
                    </div>
                </div>
                @endforelse
            </div>
            <a href="/user/wishlist"
                class="text-[#151515]/80 text-base hover:underline font-light text-center mt-6">Lihat lebih
                banyak..</a>
        </div>
    </section>
</x-app-layout>
