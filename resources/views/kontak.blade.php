@extends('layouts.landing')

@section('content')
    {{-- navbar --}}
    <x-navbar />

    {{-- Hero Kontak --}}
    <section class="min-h-screen flex items-center justify-center pt-24 pb-16" id="kontak">
        <div class="container mx-auto px-6 py-24">
            <h1 class="text-xl font-bold md:text-2xl lg:text-3xl text-[#2a2a2a] text-center mb-1">Hubungi Kami!</h1>
            <p class="text-lg md:text-xl text-black/60 font-light mt-4 md:mt-0 text-center mb-10">
                Hubungi kami jika kamu memiliki pertanyaan atau kendala ya!
            </p>

            <div class="grid grid-cols-1 lg:grid-cols-2 ">
                <!-- Informasi Kontak -->
                <div class="flex items-center justify-center">
                    <img src="/images/mail.png" class="" alt="">
                </div>

                <!-- Form Kontak -->
                <div class="bg-white rounded-xl shadow-sm p-6 md:p-8 border border-gray-200">

                    <h2 class="text-lg md:text-xl lg:text-2xl text-start font-semibold text-[#1a1a1a]">
                        Kirimkan Pesan kepada Kami
                    </h2>

                    <form name="submit-to-google-sheet" action="#" method="POST" class="mt-6 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama" class="text-base font-normal text-[#2a2a2a]">
                                    Nama Lengkap
                                </label>
                                <input type="text" placeholder="Nama Lengkap" name="nama" id="nama"
                                    class="w-full px-4 py-2 border border-black/20 rounded-xl focus:outline-none mt-1">
                            </div>
                            <div>
                                <label for="email" class="text-base font-normal text-[#2a2a2a]">Email</label>
                                <input type="email" placeholder="Email" name="email" id="email"
                                    class="w-full px-4 py-2 border border-black/20 rounded-xl focus:outline-none mt-1">
                            </div>
                        </div>

                        <div>
                            <label for="subjek" class="text-base font-normal text-[#2a2a2a]">Subjek</label>
                            <input type="text" placeholder="Subjek" name="subjek" id="subjek"
                                class="w-full px-4 py-2 border border-black/20 rounded-xl focus:outline-none mt-1">
                        </div>

                        <div>
                            <label for="pesan" class="text-base font-normal text-[#2a2a2a]">Pesan</label>
                            <textarea rows="6" placeholder="Pesan Anda" name="pesan" id="pesan"
                                class="w-full px-4 py-3 border border-black/20 rounded-xl resize-none focus:outline-none mt-1"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full text-base md:text-lg bg-[#607896] hover:bg-[#9bb4d2] text-white font-semibold py-2 rounded-2xl transition duration-300">
                            Kirim
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <x-footer-landing />
@endsection
