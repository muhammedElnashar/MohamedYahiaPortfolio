@php
    $sectionHeading = $service->contentSection('related_service');
@endphp
@if($sectionHeading && $service->relatedServices->isNotEmpty())

    <section style="padding:3.5rem 0;background:var(--sur2)">
        <div style="max-width:1120px;margin:0 auto;padding:0 1.75rem">
        <span
            style="display:inline-flex;align-items:center;gap:6px;background:rgba(232,106,26,.12);border:1px solid rgba(232,106,26,.3);border-radius:20px;padding:.3rem .85rem;font-size:.72rem;font-weight:700;color:#E86A1A;margin-bottom:1rem"><i
                data-lucide="arrow-right-circle" style="width:12px;height:12px;stroke:#E86A1A"></i><span
                class="">{{$sectionHeading->title}}</span></span>
            <div
                style="display:grid;grid-template-columns:repeat(auto-fill,minmax(170px,1fr));gap:.85rem;margin-top:.5rem">
                @foreach($service->relatedServices as $relatedService) @endforeach
                <a
                    href="{{ route('services.show',[
                    'locale'=>app()->getLocale(),
                    'service'=>$relatedService->slug
                ]) }}"
                    style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--r);padding:1.1rem;text-align:center;cursor:pointer;transition:border-color .2s;display:flex;flex-direction:column;align-items:center;gap:.5rem"
                        onmouseover="this.style.borderColor='#E86A1A'" onmouseout="this.style.borderColor='var(--brd)'">
                    <i data-lucide="{{$relatedService->icon}}" style="width:22px;height:22px;stroke:#E86A1A"></i>
                    <span class="" style="font-size:.76rem;color:#E86A1A;opacity:.8">{{$relatedService->title}}</span>
                </a>

            </div>
        </div>
    </section>
@endif
