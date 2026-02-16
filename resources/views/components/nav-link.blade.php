@props(['active' => false])

@php
$base = 'inline-flex items-center px-3 pt-1 text-sm transition duration-150 ease-in-out';

$classes = $active
    ? $base . ' font-semibold text-black'
    : $base . ' font-normal text-gray-500 hover:text-black';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>