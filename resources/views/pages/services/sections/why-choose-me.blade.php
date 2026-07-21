@php
    $expert = $service->section('expert_approach') ;
    $regular= $service->section('regular_approach');
    $sectionHeading = $service->contentSection('why_choose');

@endphp
@if($sectionHeading && $expert && $regular)

    <div class="svc-new-section" style="margin-bottom:3rem">
    <div class="eye"><span class="">{{$sectionHeading->eyebrow}}</span></div>
    <h2 class="sh">
        <span class="">{{$sectionHeading->title}}</span></h2>
    <div class="comp-grid">
        @foreach($expert->cards as $index => $card)
            <div class="comp-card">
                <div class="comp-expert">
                    <div class="comp-badge expert-badge"><i data-lucide="zap"></i> <span
                            class="">{{$expert->title}}</span></div>
                    <div class="comp-ico"><i data-lucide="{{$card->icon}}"></i></div>

                    <p class="">{{$card->title}}</p>
                </div>
                <div class="comp-vs">VS</div>
                <div class="comp-regular">
                    <div class="comp-badge reg-badge"><i data-lucide="x"></i> <span class="">{{$regular->title}}</span></div>
                    <p class="">{{$regular->cards[$index]->title}}</p>
                </div>
            </div>

        @endforeach

    </div>
</div>
@endif
