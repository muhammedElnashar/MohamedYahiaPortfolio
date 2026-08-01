@extends('layouts.app')
    @push('css')
        @vite(['resources/css/pages/services/service-main.css'])
    @endpush

    @section('content')
        <div class="spage">

        @include('pages.services.sections.hero')
        </div>



    @endsection
