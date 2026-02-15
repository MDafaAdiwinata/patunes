@extends('layouts.landing')

@section('content')
    <x-navbar />

    {{-- Slider Banner --}}
    <x-slider-banner />

    {{-- Galeries --}}
    <x-galeri-product />

    {{-- Card Brand --}}
    <x-card-brand />
@endsection
