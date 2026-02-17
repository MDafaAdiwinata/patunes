@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm md:text-base text-black/80']) }}>
    {{ $value ?? $slot }}
</label>
