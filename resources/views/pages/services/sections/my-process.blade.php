@php
    $sectionHeading = $service->contentSection('my_process');
    $section = $service->section('my_process');
@endphp

@if($sectionHeading && $section)

    <section class="svc-process">

        <div class="container">

            <div class="svc-process-badge">
                <i data-lucide="list-checks"></i>
                {{ $sectionHeading->eyebrow }}
            </div>

            <h2 class="svc-process-title">
                {{ $sectionHeading->title }}
            </h2>

            <div class="svc-process-list">

                @foreach($section->processSteps as $processStep)

                    <div class="svc-process-item">

                        <div class="svc-process-number">
                            {{ $processStep->number }}
                        </div>

                        <div class="svc-process-content">

                            <div class="svc-process-heading">
                                {{ $processStep->title }}
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

@endif
