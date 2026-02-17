<x-app-layout>
    <!-- Main Content Dashboard -->
    <div class="px-6 sm:px-0 pb-24 container mx-auto">
        <div class="flex items-center justify-between mt-6 sm:mt-4">
            <a href="/admin/kelola-kategori"
                class="p-2 font-semibold text-[#151515] rounded-2xl bg-[#eee] hover:bg-[#ddd] border border-black/10 hover:border-black/30 transition duration-300 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 md:size-8 -rotate-90 text-[#2a2a2a]"
                    viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M12.884 5.116a1.253 1.253 0 0 0-1.768 0l-5 5a1.25 1.25 0 0 0 1.768 1.768l2.866-2.866V18a1.25 1.25 0 1 0 2.5 0V9.018l2.866 2.866a1.25 1.25 0 1 0 1.768-1.768z" />
                </svg>
            </a>
            <div class="flex items-center justify-start h-10 md:h-20">
                <h1 class="text-lg md:text-2xl lg:text-2xl font-semibold text-[#1a1a1a]">
                    Edit Data Kategori
                </h1>
            </div>
        </div>

        <hr class="w-full border border-black/5 mt-6 sm:mt-2 mb-8 md:mb-12">
        <div class="flex flex-col">
            <form enctype="multipart/form-data" action="{{ route('admin.kategori.update', $kategori) }}" method="POST"
                class="flex flex-col md:flex-row gap-8 md:gap-12">
                @csrf
                @method('PUT')

                <!-- FORM INPUTS -->
                <div class="w-full md:w-1/2 mx-auto">

                    <div class="mt-6">
                        <x-input-label for="nama" :value="__('Nama Kategori')" />
                        <x-text-input id="nama" class="block mt-1 w-full bg-transparent" type="text"
                            :value="$kategori->nama" name="nama" placeholder="isi Nama Kategori ..." required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <div class="mt-6">
                        <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                        <textarea
                            class="py-2 sm:py-2 px-3 block w-full border-black/20 rounded-xl text-base text-black/80 focus:border-black/10 focus:ring-black/10 disabled:opacity-50 disabled:pointer-events-none mt-1 bg-transparent"
                            required name="deskripsi" rows="4" placeholder="Deskripsi Kategori" data-hs-textarea-auto-height="">{{ $kategori->deskripsi }}</textarea>
                        <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                    </div>

                    <button type="submit"
                        class="mt-6 sm:mt-12 ms-auto w-fit px-4 py-2 text-sm lg:text-base font-semibold text-[#f0f0f0] rounded-xl bg-[#607896] hover:bg-[#506278] transition duration-300 flex items-center justify-center">
                        Simpan
                    </button>

                </div>
            </form>
        </div>

    </div>
</x-app-layout>
