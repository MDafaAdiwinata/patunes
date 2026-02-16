<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-sm font-semibold text-[#f0f0f0] rounded-xl bg-[#2a2a2a] hover:bg-black transition duration-300 flex items-center justify-center']) }}>
    {{ $slot }}
</button>
