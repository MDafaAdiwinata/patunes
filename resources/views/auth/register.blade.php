<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nama -->
        <div>
            <x-input-label for="nama" :value="__('Nama')" />
            <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')"
                autofocus autocomplete="nama" placeholder="Masukkan nama lengkap anda.." />
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
             autocomplete="username" placeholder="Masukkan email anda.." />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="block mb-2 text-sm" :value="__('Password')" />
            <div class="relative">
                <input id="hs-toggle-password" type="password"
                    class="mt-1 block w-full px-3 py-2 border border-black/20 rounded-xl placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-black/10 focus:border-black/10 transition duration-200"
                    name="password" autocomplete="current-password" placeholder="Masukkan Password"
                    placeholder="Enter password">
                <button type="button" data-hs-toggle-password='{
        "target": "#hs-toggle-password"
      }'
                    class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-muted-foreground rounded-e-md focus:outline-hidden focus:text-primary-focus">
                    <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24" />
                        <path class="hs-password-active:hidden"
                            d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68" />
                        <path class="hs-password-active:hidden"
                            d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61" />
                        <line class="hs-password-active:hidden" x1="2" x2="22" y1="2"
                            y2="22" />
                        <path class="hidden hs-password-active:block"
                            d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                        <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3" />
                    </svg>
                </button>
                </input>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" class="block mb-2 text-sm" :value="__('Konfirmasi Password')" />
            <div class="relative">
                <input id="hs-toggle-password_confirm" type="password"
                    class="mt-1 block w-full px-3 py-2 border border-black/20 rounded-xl placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-black/10 focus:border-black/10 transition duration-200"
                    autocomplete="current-password" placeholder="Konfirmasi password" name="password_confirmation"
                    placeholder="Enter password">
                <button type="button"
                    data-hs-toggle-password='{
        "target": "#hs-toggle-password_confirm"
      }'
                    class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-muted-foreground rounded-e-md focus:outline-hidden focus:text-primary-focus">
                    <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24" />
                        <path class="hs-password-active:hidden"
                            d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68" />
                        <path class="hs-password-active:hidden"
                            d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61" />
                        <line class="hs-password-active:hidden" x1="2" x2="22" y1="2"
                            y2="22" />
                        <path class="hidden hs-password-active:block"
                            d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                        <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3" />
                    </svg>
                </button>
                </input>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

         <div class="grid gap-4 mt-4">
            <x-primary-button class="w-full text-center flex items-center justify-center rounded-xl mt-6 mb-2">
                {{ __('Daftar') }}
            </x-primary-button>
            <hr class="border border-black/10 w-full">
            <div class="flex gap-2 items-center justify-center">
                <span class="text-black/80 text-base">Sudah Punya Akun?</span>
                <a class="underline text-base text-black/60 hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-transparent text-center my-2"
                    href="/login">
                    {{ __('Masuk') }}
                </a>
            </div>

        </div>
    </form>
</x-guest-layout>
