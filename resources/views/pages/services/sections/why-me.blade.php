@if($section = $service->section('why_me'))
    @php
        $sectionHeading = $service->contentSection('why_me');
 @endphp
    <section style="padding:3.5rem 0;background:var(--sur2)">

    <div style="max-width:1120px;margin:0 auto;padding:0 1.75rem">
        <span
            style="display:inline-flex;align-items:center;gap:6px;background:rgba(232,106,26,.12);border:1px solid rgba(232,106,26,.3);border-radius:20px;padding:.3rem .85rem;font-size:.72rem;font-weight:700;color:#E86A1A;margin-bottom:1rem"><i
                data-lucide="star" style="width:12px;height:12px;stroke:#E86A1A"></i>
            <span class="">{{$sectionHeading->eyebrow}}</span></span>
        <h2 style="font-size:1.3rem;font-weight:800;margin:0 0 1.5rem"><span
                class="">{{$sectionHeading->title}}</span></h2>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:1rem">
            @foreach($section->cards as $card)
                <div style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--r);padding:1.5rem">
                    <div style="color:var(--or);margin-bottom:.75rem"><i data-lucide="{{$card->icon}}"></i></div>
                    <h3 style="font-size:1rem;font-weight:700;margin-bottom:.5rem">
                        <span class="">{{$card->title}}</span></h3>
                    <p style="font-size:.9rem;color:var(--mu);line-height:1.7">
                        <span class="">{{$card->description}}</span>
                    </p>
                </div>

            @endforeach
        </div>
    </div>
</section>
@endif
