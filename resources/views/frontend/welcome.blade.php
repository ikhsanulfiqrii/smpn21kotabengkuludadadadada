@extends('layouts.Frontend.app')
@section('title')
    SMPN 21 KOTA BENGKULU
@endsection

@section('content')

    {{-- Slider --}}
    @section('slider')
        @include('frontend.content.slider')
    @endsection

    {{-- About --}}
    @section('about')
        @include('frontend.content.about')
    @endsection

    {{-- Video --}}
    @section('video')
        @include('frontend.content.video')
    @endsection

    {{-- Guru --}}
    @section('guru')
        @include('frontend.content.guru')
    @endsection

     {{-- Berita & Event --}}
     @section('beritaEvent')
        @include('frontend.content.beritaEvent')
    @endsection
@endsection
