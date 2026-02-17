<button {{ $attributes->merge(['type' => 'button', 'class' => 'px-4 py-2 text-sm font-semibold text-[#151515] rounded-xl bg-gray-200 hover:bg-gray-300 transition duration-300 flex items-center justify-center']) }}>
    {{ $slot }}
</button>
