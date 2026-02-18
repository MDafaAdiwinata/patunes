<x-app-layout>
    <section id="detail" class="lg:h-screen">
        <div class="container mx-auto px-6 md:px-0 py-6 flex flex-col">
            <div class="grid grid-cols-2 gap-4 sm:mt-4 items-center justify-center mb-6 md:mb-12">
                <div class="flex items-center justify-start mx-auto w-full lg:w-4/5">
                    <a href="/user/user-katalog"
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
                    <img src="{{ $product->gambar
                        ? 'https://res.cloudinary.com/dpur2sebv/image/upload/' . $product->gambar
                        : 'https://res.cloudinary.com/dpur2sebv/image/upload/v1771304190/noimage_a4ur8u.png' }}"
                        class="w-full lg:w-4/5" alt="{{ $product->nama }}">
                </div>
                <div
                    class="flex flex-col items-start justify-start gap-2 h-full py-0 sm:py-8 mt-12 lg:mt-0 px-2 md:px-0">
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
                        {{ $product->deskripsi }}
                    </p>
                    @php
                        $isWishlisted = auth()
                            ->user()
                            ->wishlists()
                            ->where('product_id', $product->id_product)
                            ->exists();
                    @endphp

                    <form action="{{ route('product.wishlist', $product) }}" method="POST" class="ms-auto sm:ms-0">
                        @csrf
                        <button type="submit"
                            class="{{ $isWishlisted ? 'bg-[#d96a6a]' : 'bg-[#6CABDD]' }} text-[#f0f0f0] px-4 py-2 mt-12 font-semibold  rounded-xl">
                            {{ $isWishlisted ? 'Hapus Wishlist' : 'Wishlist' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
