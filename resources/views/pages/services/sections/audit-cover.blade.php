@php
    $sectionHeading = $service->contentSection('audit_cover');
    $section = $service->section('audit_covers')
@endphp
@if($sectionHeading && $section)

    <section class="svc-extra" style="padding:3rem 0;border-top:1px solid var(--brd)">

    <div class="container">
        <h2 style="font-size:1.6rem;margin-bottom:1.5rem;font-weight:700">
            <span class="">{{ $sectionHeading->title }}</span>
        </h2>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem">
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
