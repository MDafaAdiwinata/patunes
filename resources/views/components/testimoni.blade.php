<section class="bg-[#F3F3F6] flex items-center justify-center py-20 text-center">
    <div class="container mx-auto px-6">
        <h1 class="text-center text-2xl md:text-3xl font-bold text-[#1a1a1a]">
            Apa Kata Mereka?
        </h1>
        <div class="mt-6 md:mt-14 grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
            <!-- CARD 1 (PUTIH) -->
            <div class="bg-[#1a1a1a] rounded-xl md:rounded-2xl p-6 md:p-8 border border-black/10 flex flex-col h-full">
                <p class="text-[#ccc] text-md md:text-lg text-start leading-relaxed flex-grow">
                    "Saya suka banget pakai Patunes, karena memudahkan saya membandingkan model dan kualitas antar brand lokal! Semoga Patunes makin sukses dan terus jadi referensi utama!."
                </p>

                <div class="flex flex-col md:flex-row items-center gap-2 md:gap-3 pt-8">
                    <img src="{{ asset('images/pelanggan-1.png') }}" alt="" class="w-10 md:w-12 rounded-full">
                    <span class="font-semibold text-lg md:text-xl text-[#F6F6F8]">
                        Alba Maps
                    </span>
                </div>
            </div>


            <!-- CARD 2 -->
            <div class="bg-[#F6F6F8] border border-black/10 rounded-xl md:rounded-2xl p-6 md:p-8 flex flex-col h-full">
                <p class="text-[#1a1a1a]/80 text-start text-md md:text-lg leading-relaxed flex-grow">
                    “Patunes benar-benar bantu saya cari sepatu yang pas tanpa harus buka banyak tab. Tampilannya simpel, detail sepatunya jelas, dan navigasinya cepat. Semoga Patunes makin sukses!.
                </p>

                <div class="flex flex-col md:flex-row items-center gap-2 md:gap-3 pt-8">
                    <img src=""{{ asset('images/pelanggan-2.png') }}"" alt="" class="w-10 md:w-12 rounded-full">
                    <span class="font-semibold text-lg md:text-xl text-[#1a1a1a]">
                        Darell IEM
                    </span>
                </div>
            </div>
        </div>

        <div
            class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] xl:grid-cols-[2fr_0.5fr] gap-8 justify-center mt-6 md:mt-8">
            <div class="bg-[#F6F6F8] border border-black/10 rounded-xl md:rounded-2xl p-6 md:p-8 flex flex-col h-full">
                <p class="text-[#000]/80 text-md md:text-lg text-start leading-relaxed flex-grow">
                    “Sebagai orang yang baru mulai koleksi brand lokal, Patunes sangat membantu saya membandingkan bahan dan model dari berbagai brand dengan cepat. Informasinya lengkap banget, jadi saya makin pede pilih sepatu yang tepat. Semoga terus berkembang dan menghadirkan fitur baru yang makin keren!”
                </p>

                <div class="flex flex-col md:flex-row items-center gap-2 md:gap-3 pt-8">
                    <img src="{{ asset('images/pelanggan-3.png') }}" alt="" class="w-10 md:w-12 rounded-full">
                    <span class="font-semibold text-lg md:text-xl text-[#1a1a1a]">
                        Oppa Nabil
                    </span>
                </div>
            </div>
            <div class="w-full mx-auto flex items-center justify-center text-center">
                <img src="/images/img-rating.webp" class="hidden lg:block"
                    alt="Image Rating - Section REVIEW">
            </div>
        </div>
    </div>
</section>
