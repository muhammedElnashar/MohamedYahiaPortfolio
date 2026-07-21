@php
    $sectionHeading = $service->contentSection('why_invest');
    $sectionHeading2 = $service->contentSection('keywords');
    $section = $service->section('investment');
@endphp
@if($sectionHeading && $section)
    <div class="container">


    <div style="text-align:center;margin-bottom:3rem">
        <div class="eye"><span class="">{{$sectionHeading->eyebrow}}</span></div>
        <h2 style="font-size:1.8rem;font-weight:900;color:var(--txt);margin:.5rem 0">
            <span>{{$sectionHeading->title}}</span>
        </h2>
        <p style="font-size:.95rem;color:var(--mu);max-width:600px;margin:.75rem auto 0">
           <span  class="">{{$sectionHeading->content}}</span>
        </p>
    </div>

    <div
        style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1.5rem;margin-bottom:3rem">
       @foreach($section->stats as $stat)
            <div
                style="background:var(--sur2);border:1px solid var(--brd);border-radius:var(--r);padding:2rem;text-align:center;border-top:3px solid var(--or)">
                <div style="font-size:3rem;font-weight:900;color:var(--or);line-height:1">{{$stat->value}}</div>
                <div style="font-size:.9rem;font-weight:700;color:var(--txt);margin:.5rem 0 .3rem"><span class="">{{$stat->label}}</span></div>
                <div style="font-size:.8rem;color:var(--mu)"><span class="">{{$stat->description}}</span></div>
            </div>

        @endforeach

    </div>
    @endif

    @if( $sectionHeading2 && $service->keywords->isNotEmpty())
    <div style="border-top:1px solid var(--brd);padding-top:2rem">
        <p style="font-size:.8rem;font-weight:700;color:var(--or);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:.75rem;text-align:center">
            <span class="">{{$sectionHeading2->title}}</span></p>
        <div style="display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center"><span
                @foreach($service->keywords as $keyword)
                    <span style="background:var(--sur2);border:1px solid var(--brd);border-radius:var(--rs);padding:.3rem .8rem;font-size:.8rem;color:var(--txt)">{{$keyword->keyword}}</span>
                @endforeach
        </div>
    </div>
    </div>
@endif
