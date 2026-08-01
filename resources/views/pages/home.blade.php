@extends('layouts.app')
@push('css')
        @vite(['resources/css/pages/home/home-main.css'])
@endpush
@push('schema')

@endpush
@section('content')

    @include('sections.hero')

    @include('sections.facts')

    @include('sections.services')

    @livewire('case-studies')

    @include('sections.tools')
    @include('sections.certification')
    @include('sections.philosophy')
    @include('sections.review')
    @include('sections.message')



    @include('sections.faq')

    @include('sections.contact')

@endsection
