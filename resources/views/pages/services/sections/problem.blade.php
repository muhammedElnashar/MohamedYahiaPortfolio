@php
    $sectionHeading = $service->contentSection('problem');
@endphp
@if($sectionHeading && $service->checklists->isNotEmpty())

    <section style="padding:3.5rem 0;background:var(--sur)">
        <div style="max-width:1120px;margin:0 auto;padding:0 1.75rem">
        <span
            style="display:inline-flex;align-items:center;gap:6px;background:rgba(232,106,26,.12);border:1px solid rgba(232,106,26,.3);border-radius:20px;padding:.3rem .85rem;font-size:.72rem;font-weight:700;color:#E86A1A;margin-bottom:1rem"><i
                data-lucide="zap" style="width:12px;height:12px;stroke:#E86A1A"></i>
         <span class="">{{$sectionHeading->eyebrow}}</span></span>
            <h2 style="font-size:1.3rem;font-weight:800;margin:0 0 1.25rem">
             <span class="">{{$sectionHeading->title}}</span></h2>
            <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:.85rem">
                @foreach($service->checklists as $list)
                    <div
                        style="display:flex;gap:.75rem;align-items:flex-start;background:var(--sur2);border:1px solid var(--brd);border-radius:var(--r);padding:.9rem 1rem">
                        <i data-lucide="alert-circle"
                           style="width:18px;height:18px;stroke:#E86A1A;flex-shrink:0;margin-top:2px"></i>
                        <span class="" style="line-height:1.6;font-size:.9rem">{{$list->item}}</span>
                    </div>

                @endforeach

            </div>
        </div>

</section>
@endif
