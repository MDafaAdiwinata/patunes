@extends('layouts.landing')

@section('content')
    <x-navbar />

    {{-- Slider Banner --}}
    <x-slider-banner />

    {{-- Galeries --}}
    <x-galeri-product />

    {{-- Card Brand --}}
    <x-card-brand />

    {{-- Card Product --}}
    <x-card-product />

    {{-- Keunggulan --}}
    <x-keunggulan />
    
    {{-- Testimoni --}}
    <x-testimoni />
@endsection
