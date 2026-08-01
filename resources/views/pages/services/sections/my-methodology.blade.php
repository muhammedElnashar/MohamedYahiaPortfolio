@php
    $headingSection = $service->contentSection('my_methodology');
    $section = $service->section('my_methodology');
@endphp

@if($headingSection && $section)

    <div class="svc-methodology">

        <div class="eye">
            {{ $headingSection->eyebrow }}
        </div>

        <h2 class="svc-methodology-title">
            {{ $headingSection->title }}
        </h2>

        <div class="svc-methodology-list">

            @foreach($section->processSteps as $methProcess1)

                <div class="svc-methodology-item">

                    <div class="svc-methodology-number">
                        {{ $methProcess1->number }}
                    </div>

                    <div class="svc-methodology-content">

                        <h3>{{ $methProcess1->title }}</h3>

                        <p>{{ $methProcess1->description }}</p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

@endif
