@php
    $sectionHeading = $service->contentSection('our_process');
    $section = $service->section('our_process');
@endphp

@if($sectionHeading && $section)

    <div>
    <div class="spage-st"><span class="">{{$sectionHeading->title}}</span></div>
    <div class="steps">

            @foreach($section->processSteps as $processStep)
                <div class="step-i">
                    <div class="step-n">{{$processStep->number}}</div>
                    <div class="step-body">
                        <div class="step-t"><span class="">{{$processStep->title}}</span></div>
                        <div class="step-d"><span class="">{{$processStep->description}}</span></div>
                    </div>
                </div>
            @endforeach
    </div>
</div>
@endif
