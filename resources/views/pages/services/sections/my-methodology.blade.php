@php
    $headingSection = $service->contentSection('my_methodology');
    $section = $service->section('my_methodology');
@endphp
@if($headingSection && $section)


<div>

    <div class="eye" style="margin-bottom:.75rem"><span class="">{{$headingSection->eyebrow}}</span>
    </div>
    <h2 style="font-size:1.5rem;font-weight:900;color:var(--txt);margin-bottom:1.25rem"><span
            class="">{{$headingSection->title}}</span></h2>
        <div style="display:flex;flex-direction:column;gap:1.25rem">
            @foreach($section->processSteps as $methProcess1)
                <div style="display:flex;gap:1rem;align-items:flex-start">
                    <div
                        style="width:32px;height:32px;border-radius:50%;background:var(--or);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0">
                        {{$methProcess1->number}}
                    </div>
                    <div>
                        <div
                            style="font-size:.9rem;font-weight:700;color:var(--txt);margin-bottom:.2rem">
                            <span class="">{{$methProcess1->title}}</span>
                        </div>
                        <div style="font-size:.82rem;color:var(--mu)"><span
                                class="">{{$methProcess1->description}}</span>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

</div>
@endif
