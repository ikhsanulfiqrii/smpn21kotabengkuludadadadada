@extends('layouts.frontend.app')

@section('title')
    Struktur
@endsection

@section('content')
    @section('about')
        <div class="container">
            @if ($struktur)
                <div style="margin-top: 5%; margin-bottom:3%"><center>
                    <img src="{{asset('storage/images/struktur/' .$struktur->image)}}" class="img-responsive" style="height:60%; width:60%; object-fit:cover"></center>
                </div>
            @else
                <img src="{{asset('Assets/Frontend/img/empty.svg')}}" class="img-responsive" style="object-fit:cover; margin-top:5% !important; display: block;
            margin: 0 auto;">
            @endif
        </div>
    @endsection

    {{-- Guru --}}
    @section('guru')
        @include('frontend.content.guru')
    @endsection
@endsection