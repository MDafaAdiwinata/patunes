<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-sm font-semibold text-[#f0f0f0] rounded-xl bg-red-600 hover:bg-red-700 transition duration-300 flex items-center justify-center']) }}>
    {{ $slot }}
</button>
