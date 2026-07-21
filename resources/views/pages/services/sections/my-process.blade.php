@php
    $sectionHeading = $service->contentSection('my_process');
    $section = $service->section('my_process')
@endphp
@if($sectionHeading && $section)
    <section style="padding:3.5rem 0;background:var(--sur2)">

    <div style="max-width:1120px;margin:0 auto;padding:0 1.75rem">
        <span
            style="display:inline-flex;align-items:center;gap:6px;background:rgba(232,106,26,.12);border:1px solid rgba(232,106,26,.3);border-radius:20px;padding:.3rem .85rem;font-size:.72rem;font-weight:700;color:#E86A1A;margin-bottom:1rem"><i
                data-lucide="list-checks" style="width:12px;height:12px;stroke:#E86A1A"></i>
        <span class="">{{$sectionHeading->eyebrow}}</span>
        </span>
        <h2 style="font-size:1.3rem;font-weight:800;margin:0 0 1.5rem"><span class="">{{$sectionHeading->title}}</span>
        </h2>
        <div style="display:flex;flex-direction:column;gap:.85rem">
            @foreach($section->processSteps as $processStep)

            <div style="display:flex;gap:.85rem;align-items:flex-start">
                <div style="min-width:32px;height:32px;border-radius:50%;background:#E86A1A;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:.8rem;flex-shrink:0">
                    {{$processStep->number}}
                </div>
                <div style="padding-top:.3rem">
                    <span class="" style="font-weight:600;display:block;margin-bottom:.2rem">
                        {{$processStep->title}}
                    </span>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
@endif
