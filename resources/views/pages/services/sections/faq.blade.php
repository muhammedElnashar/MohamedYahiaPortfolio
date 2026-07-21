@php
    $sectionHeading = $service->contentSection('faq');
@endphp
@if( $sectionHeading && $service->faqs->isNotEmpty())

    <section style="padding:3.5rem 0;background:var(--sur)">
        <div style="max-width:1120px;margin:0 auto;padding:0 1.75rem">
        <span
            style="display:inline-flex;align-items:center;gap:6px;background:rgba(232,106,26,.12);border:1px solid rgba(232,106,26,.3);border-radius:20px;padding:.3rem .85rem;font-size:.72rem;font-weight:700;color:#E86A1A;margin-bottom:1rem"><i
                data-lucide="help-circle" style="width:12px;height:12px;stroke:#E86A1A"></i>
            <span class="">{{$sectionHeading->eyebrow}}</span>
        </span>
            <h2 style="font-size:1.3rem;font-weight:800;margin:0 0 1.25rem">
                <span class="">{{ $sectionHeading->title }}</span></h2>
            <div style="display:flex;flex-direction:column;gap:.65rem">
                @foreach($service->faqs as $faq)
                <details style="border:1px solid var(--brd);border-radius:var(--r);overflow:hidden">
                    <summary
                        style="padding:1rem 1.2rem;cursor:pointer;font-weight:600;display:flex;justify-content:space-between;align-items:center;list-style:none;gap:.75rem;font-size:.9rem">
                        <span><span class="">{{ $faq->question }}</span></span>
                        <i data-lucide="chevron-down"
                           style="width:15px;height:15px;stroke:#E86A1A;flex-shrink:0;transition:transform .2s"></i>
                    </summary>
                    <div
                        style="padding:.8rem 1.2rem 1.1rem;color:var(--mu);font-size:.87rem;border-top:1px solid var(--brd);line-height:1.75">
                        <span
                            class="">{{ $faq->answer }}</span>
                    </div>
                </details>
                @endforeach
            </div>
        </div>

</section>
@endif
