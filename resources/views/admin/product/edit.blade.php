<x-app-layout>
    <!-- Main Content Dashboard -->
    <div class="px-6 sm:px-0 pb-24 container mx-auto">
        <div class="flex items-center justify-between mt-6 sm:mt-4">
            <a href="/admin/kelola-product"
                class="p-2 font-semibold text-[#151515] rounded-2xl bg-[#eee] hover:bg-[#ddd] border border-black/10 hover:border-black/30 transition duration-300 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 md:size-8 -rotate-90 text-[#2a2a2a]"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12.884 5.116a1.253 1.253 0 0 0-1.768 0l-5 5a1.25 1.25 0 0 0 1.768 1.768l2.866-2.866V18a1.25 1.25 0 1 0 2.5 0V9.018l2.866 2.866a1.25 1.25 0 1 0 1.768-1.768z" />
                </svg>
            </a>
            <div class="flex items-center justify-start h-10 md:h-20">
                <h1 class="text-lg md:text-2xl lg:text-2xl font-semibold text-[#1a1a1a]">
                    Edit Data Produk
                </h1>
            </div>
        </div>

        <hr class="w-full border border-black/5 mt-6 sm:mt-2 mb-8 md:mb-12">
        <div class="flex flex-col" x-data="{
            imageUrl: '{{ $product->gambar
                ? $product->gambar
                : asset('/images/noimage.png') }}'
        }">
            <form enctype="multipart/form-data" action="{{ route('admin.product.update', $product) }}" method="POST"
                class="flex flex-col md:flex-row gap-8 md:gap-12">
                @csrf
                @method('PUT')

                <!-- IMAGE PREVIEW -->
                <div class="w-full md:w-1/2 rounded-2xl">
                    <img :src="imageUrl" class="rounded-xl w-full h-full object-cover" alt="Gambar Uploaded">
                </div>

                <!-- FORM INPUTS -->
                <div class="w-full md:w-1/2">

                    <div class="mt-2">
                        <label class="block mb-1 text-base font-medium text-[#1a1a1a]" for="gambar">
                            Unggah Gambar Produk
                        </label>
                        <input type="file" id="gambar"
                            @change="imageUrl = URL.createObjectURL($event.target.files[0])" name="gambar"
                            accept="image/*"
                            class="block w-full bg-transparent border border-black/20 rounded-xl text-basetex text-[#151515] placeholder:text-black/60 focus:z-10 focus:outline-none focus:ring-2 focus:ring-black/40 focus:border-black/40 disabled:opacity-50 disabled:pointer-events-none file:bg-white/60 file:border-0 file:me-4 file:py-2 file:px-4">
                        <p class="mt-1 text-sm font-light text-black/60">PNG, JPG or JPEG (MAX. 300x300px).</p>
                        <x-input-error :messages="$errors->get('gambar')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-input-label for="nama" :value="__('Nama Produk (Sepatu)')" />
                        <x-text-input id="nama" class="block mt-1 w-full bg-transparent" type="text"
                            name="nama" :value="$product->nama" placeholder="contoh: Piero Jogger, ..." required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-input-label for="harga" :value="__('Harga')" />

                        <input id="harga" type="text" inputmode="numeric"
                            value="{{ old('harga', number_format($product->harga, 2, ',', '.')) }}" name="harga"
                            placeholder="0"
                            class="block mt-1 w-full bg-transparent border-black/20 focus:border-black/40 focus:ring-black/40 rounded-xl"
                            required>

                        <input type="hidden" name="harga" id="harga_real"
                            value="{{ old('harga', $product->harga) }}">

                        <x-input-error :messages="$errors->get('harga')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                        <textarea
                            class="py-2 sm:py-2 px-3 block w-full border-black/20 rounded-xl text-base text-black/80 focus:border-black/40 focus:ring-black/40 disabled:opacity-50 disabled:pointer-events-none mt-1 bg-transparent"
                            required name="deskripsi" rows="4" placeholder="Deskripsi Brand" data-hs-textarea-auto-height="">{{ $product->deskripsi }}</textarea>
                        <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-input-label for="brand" :value="__('Brand')" />
                        <select id="brand" name="id_brand"
                            class="text-md cursor-pointer mt-1 bg-transparent border border-[#000]/30 text-[#000]/80 text-md rounded-xl focus:ring-black/40 focus:border-black/40 block w-full px-3 py-2">
                            @forelse ($brands as $brand)
                                <option value="{{ $brand->id_brand }}"
                                    {{ old('id_brand', $product->id_brand) == $brand->id_brand ? 'selected' : '' }}>
                                    {{ $brand->nama }}
                                </option>
                            @empty
                                <option disabled selected>Belum tersedia</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="mt-6">
                        <x-input-label for="kategori" :value="__('Kategori')" />
                        <select id="kategori" name="id_kategori"
                            class="text-md cursor-pointer mt-1 bg-transparent border border-[#000]/30 text-[#000]/80 text-md rounded-xl focus:ring-black/40 focus:border-black/40 block w-full px-3 py-2">
                            @forelse ($kategoris as $kategori)
                                <option value="{{ $kategori->id_kategori }}"
                                    {{ old('id_kategori', $product->id_kategori) == $kategori->id_kategori ? 'selected' : '' }}>
                                    {{ $kategori->nama }}
                                </option>
                            @empty
                                <option disabled selected>Belum tersedia</option>
                            @endforelse
                        </select>
                    </div>

                    <button type="submit"
                        class="mt-6 sm:mt-12 ms-auto w-fit px-4 py-2 text-sm lg:text-base font-semibold text-[#f0f0f0] rounded-xl bg-[#607896] hover:bg-[#506278] transition duration-300 flex items-center justify-center">
                        Simpan
                    </button>

                </div>
            </form>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const input = document.getElementById("harga");
            const hidden = document.getElementById("harga_real");

            function formatNumber(value) {
                let number = value.replace(/\D/g, "");
                if (!number) return "";

                let formatted = (number / 100).toLocaleString("id-ID", {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });

                return formatted;
            }

            input.addEventListener("input", function() {
                let raw = this.value.replace(/\D/g, "");
                hidden.value = raw / 100;
                this.value = formatNumber(this.value);
            });
        });
    </script>
</x-app-layout>
