@extends('layouts.app')
@section('schema')
    <script type="application/ld+json">
        {!! file_get_contents(resource_path('schema/home.json')) !!}
    </script>
@endsection
@section('content')

    @include('sections.hero')

    @include('sections.stats')
    @include('sections.facts')

    @include('sections.services')

    @livewire('case-studies')

    @include('sections.tools')

    @include('sections.faq')

    @include('sections.contact')

@endsection
