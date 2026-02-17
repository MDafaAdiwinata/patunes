<x-app-layout>
    <section id="keloa-brand">
        <div class="container mx-auto px-6 md:px-0 py-6 sm:py-12 pb-24">
            <div
                class="flex flex-col sm:flex-row items-center justify-center sm:justify-between gap-4 sm:gap-0 w-full border">
                <h1 class="text-lg sm:text-xl lg:text-2xl text-[#151515] font-semibold">
                    Kelola Data Brand
                </h1>

                <div class="flex flex-col md:flex-row gap-4 w-full sm:w-auto">
                    <form action="{{ route('admin.kelola-brand') }}" method="GET"
                        class="flex items-center w-full sm:w-[350px] md:w-[420px] lg:w-[500px]">
                        <input type="text" id="voice-search"
                            class="border border-black/10 text-[#2a2a2a] text-sm md:text-base rounded-xl focus:ring-transparent focus:border-black/40 block w-full py-2 px-3 ps-3.5"
                            placeholder="Cari Nama Brand..." name="search" value="{{ request('search') }}" />
                        <button type="submit"
                            class="inline-flex items-center p-2.5 md:p-3 ms-1 text-base font-medium text-white bg-[#607896] rounded-xl hover:bg-[#879AA0] transition duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>
                    </form>
                    <a href="brand/create"
                        class="ms-auto sm:ms-0 px-4 py-2 text-sm lg:text-base font-semibold text-[#f0f0f0] rounded-xl bg-blue-500 hover:bg-blue-600 transition duration-300 flex items-center justify-center">
                        Tambah
                    </a>
                </div>
            </div>

            @if (session()->has('success'))
                <x-alert message="{{ session('success') }}" />
            @endif

            {{-- Table View - Data Brand --}}
            <div class="min-w-full rounded-2xl mt-6">
                <div
                    class="border border-black/10 rounded-xl overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-none [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                    <table class="min-w-full divide-y divide-black/10">
                        <thead class="bg-[#607896]/10">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-base font-semibold text-[#151515]/80">Logo
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-base font-semibold text-[#151515]/80">Nama Brand
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-base font-semibold text-[#151515]/80">Tagline</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-base font-semibold text-[#151515]/80">Deskripsi
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-base font-semibold text-[#151515]/80">Url
                                </th>
                                <th scope="col" class="px-6 py-3 text-base font-semibold text-[#151515]/80">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-black/10 bg-[#fff] transition duration-300">
                            @forelse ($brands as $brand)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-[#151515]/80">
                                        <img src="{{ $brand->logo
                                            ? 'https://res.cloudinary.com/dpur2sebv/image/upload/' . $brand->logo
                                            : 'https://res.cloudinary.com/dpur2sebv/image/upload/v1771304190/noimage_a4ur8u.png' }}"
                                            class="w-28 mx-auto" alt="{{ $brand->nama }}">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#151515]/80">
                                        {{ $brand->nama }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#151515]/80">
                                        {{ $brand->tagline }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#151515]/80">
                                        {{ $brand->deskripsi }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-[#151515]/80">
                                        {{ $brand->url }}
                                    </td>
                                    <td class="px-6 py-4 flex flex-col gap-2 text-end">
                                        <a href="{{ route('admin.brand.edit', $brand) }}"
                                            class="px-4 py-2 text-sm lg:text-base font-semibold text-[#151515] rounded-xl bg-yellow-200 hover:bg-yellow-300 transition duration-300 flex items-center justify-center">
                                            Ubah
                                        </a>
                                        <form action="{{ route('admin.brand.destroy', $brand) }}" method="POST"
                                            onsubmit="return confirm('Yakin mau hapus brand ini?')">

                                            @csrf
                                            @method('DELETE')
                                            <button typ="submit"
                                                class="w-full px-4 py-2 text-sm lg:text-base font-semibold text-[#151515] rounded-xl bg-red-200 hover:bg-red-300 transition duration-300 flex items-center justify-center">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7"
                                        class="px-6 py-8 text-center text-base font-light text-[#151515]/80">
                                        Maaf, data kategori belum tersedia.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
