<x-app-layout>
    <!-- Main Content Dashboard -->
    <div class="px-6 sm:px-0 pb-24 container mx-auto">
        <div class="flex items-center justify-between mt-6 sm:mt-4">
            <a href="/admin/kelola-brand"
                class="p-2 font-semibold text-[#151515] rounded-2xl bg-[#eee] hover:bg-[#ddd] border border-black/10 hover:border-black/30 transition duration-300 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 md:size-8 -rotate-90 text-[#2a2a2a]"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12.884 5.116a1.253 1.253 0 0 0-1.768 0l-5 5a1.25 1.25 0 0 0 1.768 1.768l2.866-2.866V18a1.25 1.25 0 1 0 2.5 0V9.018l2.866 2.866a1.25 1.25 0 1 0 1.768-1.768z" />
                </svg>
            </a>
            <div class="flex items-center justify-start h-10 md:h-20">
                <h1 class="text-lg md:text-2xl lg:text-2xl font-semibold text-[#1a1a1a]">
                    Tambah Brand
                </h1>
            </div>
        </div>

        <hr class="w-full border border-black/5 mt-6 sm:mt-2 mb-8 md:mb-12">
        <div class="flex flex-col" x-data="{ imageUrl: '/images/noimage.png' }">
            <form enctype="multipart/form-data" action="{{ route('brand.store') }}" method="POST"
                class="flex flex-col md:flex-row gap-8 md:gap-12">
                @csrf

                <!-- IMAGE PREVIEW -->
                <div class="w-full md:w-1/2 rounded-2xl">
                    <img :src="imageUrl" class="rounded-xl w-full h-full object-cover" alt="Gambar Uploaded">
                </div>

                <!-- FORM INPUTS -->
                <div class="w-full md:w-1/2">

                    <div class="mt-2">
                        <label class="block mb-1 text-base font-medium text-[#1a1a1a]" for="logo">
                            Unggah Logo Brand
                        </label>
                        <input type="file" id="logo"
                            @change="imageUrl = URL.createObjectURL($event.target.files[0])" name="logo"
                            accept="image/*"
                            class="block w-full bg-transparent border border-black/20 rounded-xl text-basetex text-[#151515] placeholder:text-black/60 focus:z-10 focus:outline-none focus:ring-2 focus:ring-black/10 focus:border-black/10 disabled:opacity-50 disabled:pointer-events-none file:bg-white/60 file:border-0 file:me-4 file:py-2 file:px-4">
                        <p class="mt-1 text-sm font-light text-black/60">PNG, JPG or JPEG (MAX. 300x300px).</p>
                        <x-input-error :messages="$errors->get('gambar')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-input-label for="nama" :value="__('Nama Brand')" />
                        <x-text-input id="nama" class="block mt-1 w-full bg-transparent" type="text"
                            name="nama" :value="old('nama')" placeholder="contoh: Ventela, Compass ..." required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-input-label for="tagline" :value="__('Tagline')" />
                        <x-text-input id="tagline" class="block mt-1 w-full bg-transparent" type="text"
                            name="tagline" :value="old('tagline')" placeholder="Contoh: Toko Sepatu Indonesia ..." required />
                        <x-input-error :messages="$errors->get('tagline')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-input-label for="url" :value="__('Url')" />
                        <x-text-input id="url" class="block mt-1 w-full bg-transparent" type="text"
                            name="url" :value="old('url')" placeholder="https://..." required />
                        <x-input-error :messages="$errors->get('url')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                        <textarea
                            class="py-2 sm:py-2 px-3 block w-full border-black/20 rounded-xl text-base text-black/80 focus:border-black/10 focus:ring-black/10 disabled:opacity-50 disabled:pointer-events-none mt-1 bg-transparent"
                            required name="deskripsi" rows="4" placeholder="Deskripsi Brand" data-hs-textarea-auto-height="">{{ old('deskripsi') }}</textarea>
                        <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                    </div>

                    <button type="submit"
                        class="mt-6 sm:mt-12 ms-auto w-fit px-4 py-2 text-sm lg:text-base font-semibold text-[#f0f0f0] rounded-xl bg-[#607896] hover:bg-[#506278] transition duration-300 flex items-center justify-center">
                        Tambah
                    </button>

                </div>
            </form>
        </div>

    </div>
</x-app-layout>
