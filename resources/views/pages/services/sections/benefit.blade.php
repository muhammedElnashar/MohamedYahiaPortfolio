@php
    $sectionHeading = $service->contentSection('why_service');
@endphp
@if($sectionHeading && $service->benefits->isNotEmpty())
    <div>

        <div class="eye" style="margin-bottom:.75rem">
            <span class="">{{$sectionHeading->eyebrow}}</span></div>
        <h2 style="font-size:1.5rem;font-weight:900;color:var(--txt);margin-bottom:.75rem"><span
                class="">{{$sectionHeading->title }}</span>

        </h2>
        <p style="font-size:.9rem;color:var(--mu);line-height:1.8;margin-bottom:1.5rem">
            <span class="">{{$sectionHeading->description}}</span>
        </p>
        @foreach($service->Benefits as $benefit)
            <div
                style="display:flex;gap:.75rem;align-items:flex-start;padding:.85rem 0;border-bottom:1px solid var(--brd)">
                <div
                    style="width:22px;height:22px;border-radius:50%;background:rgba(232,106,26,.15);display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px">
                    <i data-lucide="{{$benefit->icon}}"
                       style="width:12px;height:12px;color:var(--or)"></i></div>
                <div>
                    <div
                        style="font-size:.9rem;font-weight:600;color:var(--txt);margin-bottom:.25rem">
                        <span class="">{{$benefit->title}}</span></div>
                    <div style="font-size:.82rem;color:var(--mu)"><span
                            class="">{{$benefit->description}}</span>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endif
