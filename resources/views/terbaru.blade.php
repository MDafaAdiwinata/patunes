@extends('layouts.landing')

@section('content')
    {{-- navbar --}}
    <x-navbar />

    {{-- Card Produk Terbaru --}}
    <x-card-produk-terbaru />

    {{-- Cta --}}
    <x-cta />

    {{-- Footer --}}
    <x-footer-landing />
@endsection
