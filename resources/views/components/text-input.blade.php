@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'mt-1 block w-full px-3 py-2 border border-black/20 rounded-xl placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-black/10 focus:border-black/10 transition duration-200']) }}>