@php
    $heading = $sections->get(\App\Enums\HomeSectionKey::PHILOSOPHY->value);
@endphp
<section id="section-philosophy" style="padding:4.5rem 0;border-top:1px solid var(--brd);background:var(--bg)">
    <div class="si" style="max-width:760px">
        <div class="eye"><span class="">{{$heading?->eyebrow}}</span></div>
        <h2 class="sh">{{$heading?->title}}</h2>
        @if($beliefs->isNotEmpty())
            <div style="margin-top:2.5rem;display:grid;gap:1.25rem">
                @foreach($beliefs as $belief )
                    <div style="background:var(--sur);border:1px solid var(--brd);border-radius:16px;padding:1.75rem;border-right:4px solid var(--or)">
                        <div style="font-size:.75rem;font-weight:700;color:var(--or);letter-spacing:2px;margin-bottom:.6rem">
                            {{  'BELIEF #' . str_pad(
                                    $belief->number,
                                    2,
                                    '0',
                                    STR_PAD_LEFT
                                )}}</div>
                        <h3 style="font-size:1.05rem;font-weight:700;color:var(--txt);margin-bottom:.5rem">{{$belief->title}}</h3>
                        <p style="font-size:.88rem;color:var(--mu);line-height:1.8;margin:0">
                            {{$belief->description}}</p>
                    </div>

                @endforeach


            </div>
        @endif
    </div>
</section>
