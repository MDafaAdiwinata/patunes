@extends('layouts.landing')

@section('content')
    {{-- navbar --}}
    <x-navbar />

    <x-katalog />

    {{-- Cta --}}
    <x-cta />

    {{-- Footer --}}
    <x-footer-landing />
@endsection
