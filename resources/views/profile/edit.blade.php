<x-app-layout>
    <div class="container mx-auto px-6 sm:px-0 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-6 lg:gap-6 items-start">
            <div class="p-6 lg:p-8 bg-white rounded-xl lg:rounded-2xl border border-black/10">
                <div class="w-full">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-6 lg:p-8 bg-white rounded-xl lg:rounded-2xl border border-black/10">
                <div class="w-full">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-6 lg:p-8 bg-white rounded-xl lg:rounded-2xl border border-black/10">
                <div class="w-full">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
