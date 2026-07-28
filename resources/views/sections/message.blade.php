    @php
        $waPages = $messages->chunk(6);
        $heading = $sections->get(\App\Enums\HomeSectionKey::MESSAGE->value);

    @endphp
@if($waPages->isNotEmpty())
    <section id="section-wa-reviews" style="padding:4rem 1.25rem;background:var(--bg)">
        <div style="max-width:1100px;margin:0 auto">

            <p style="text-align:center;font-size:.78rem;letter-spacing:.12em;font-weight:700;color:var(--or);text-transform:uppercase;margin-bottom:.5rem">
                {{$heading?->eyebrow}}
            </p>

            <h2 style="text-align:center;font-size:clamp(1.5rem,3vw,2.2rem);font-weight:800;color:var(--txt);margin:0 0 2.5rem">
                <span class="">{{$heading?->title}}</span>
            </h2>

            <div id="wa-slider" style="position:relative;overflow:hidden">

                @foreach($waPages as $pageIndex => $messages)

                    <div
                        class="wa-page"
                        style="
                            display:{{ $pageIndex === 0 ? 'grid' : 'none' }};
                            grid-template-columns:repeat(auto-fill,minmax(300px,1fr));
                            gap:16px
                        "
                    >

                        @foreach($messages as $clientMessage)

                            <div style="
                                background:var(--sur);
                                border:1px solid var(--brd);
                                border-radius:14px;
                                overflow:hidden
                            ">

                                {{-- HEADER --}}
                                <div style="
                                    background:#075E54;
                                    padding:.55rem 1rem;
                                    display:flex;
                                    align-items:center;
                                    gap:.6rem
                                ">

                                    <div style="
                                        width:30px;
                                        height:30px;
                                        border-radius:50%;
                                        background:rgba(255,255,255,.18);
                                        display:flex;
                                        align-items:center;
                                        justify-content:center;
                                        flex-shrink:0
                                    ">

                                        <svg
                                            width="16"
                                            height="16"
                                            viewBox="0 0 24 24"
                                            fill="rgba(255,255,255,.85)"
                                            style="flex-shrink:0"
                                        >
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                            <circle cx="12" cy="7" r="4"/>
                                        </svg>

                                    </div>


                                    <div style="flex:1">

                                        <div style="
                                            font-size:.8rem;
                                            font-weight:700;
                                            color:#fff
                                        ">
                                            {{ $clientMessage->client_name }}

                                            @if($clientMessage->client_label)
                                                · {{ $clientMessage->client_label }}
                                            @endif
                                        </div>

                                    </div>


                                    <svg
                                        width="15"
                                        height="15"
                                        viewBox="0 0 24 24"
                                        fill="white"
                                        opacity=".6"
                                    >
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8l-1.68 7.92c-.12.58-.46.72-.93.45l-2.57-1.89-1.24 1.19c-.14.14-.26.26-.52.26l.18-2.61 4.74-4.28c.21-.18-.05-.28-.32-.1L7.6 14.47l-2.52-.79c-.55-.17-.56-.55.12-.81l9.84-3.8c.46-.17.86.11.71.73z"/>
                                    </svg>

                                </div>


                                {{-- SCREENSHOT --}}
                                @if($clientMessage->image)

                                    <div style="padding:.75rem 1rem">

                                        <img
                                            src="{{ asset('storage/' . $clientMessage->image) }}"
                                            alt="{{ $clientMessage->client_name }}"
                                            style="
                width:100%;
                border-radius:8px;
                display:block
            "
                                            loading="lazy"
                                        >

                                    </div>

                                @else

                                    {{-- CHAT --}}
                                    @if($clientMessage->message || $clientMessage->my_reply)

                                        <div style="
            padding:1rem;
            display:flex;
            flex-direction:column;
            gap:.65rem;
            background:var(--sur)
        ">

                                            {{-- =========================
                                                 رسالة العميل
                                            ========================== --}}
                                            @if($clientMessage->message)

                                                <div style="
                    align-self:flex-start;
                    max-width:85%
                ">

                                                    <div style="
                        background:#1f3a1f;
                        border-radius:0 10px 10px 10px;
                        padding:.65rem .85rem
                    ">

                                                        <p style="
                            font-size:.83rem;
                            color:#d4edda;
                            line-height:1.75;
                            margin:0;
                            white-space:pre-line
                        ">{{ $clientMessage->message }}</p>

                                                        <div style="
                            font-size:.62rem;
                            color:#6b9966;
                            margin-top:.3rem;
                            text-align:left;
                        ">
                                                            ✓✓
                                                        </div>

                                                    </div>

                                                </div>

                                            @endif


                                            {{-- =========================
                                                 رسالتي
                                            ========================== --}}
                                            @if($clientMessage->my_reply)

                                                <div style="
                    align-self:flex-end;
                    max-width:85%
                ">

                                                    <div style="
                        background:var(--sur2);
                        border-radius:10px 0 10px 10px;
                        padding:.65rem .85rem
                    ">

                                                        <p style="
                            font-size:.83rem;
                            color:var(--txt);
                            line-height:1.75;
                            margin:0;
                            white-space:pre-line
                        ">{{ $clientMessage->my_reply }}</p>

                                                        <div style="
                            font-size:.62rem;
                            color:var(--mu);
                            margin-top:.3rem;
                            text-align:right
                        ">
                                                            ✓✓
                                                        </div>

                                                    </div>

                                                </div>

                                            @endif

                                        </div>

                                    @endif

                                @endif
                            </div>

                        @endforeach

                    </div>

                @endforeach

            </div>


            @if($waPages->count() > 1)

                <div style="
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    gap:10px;
                    margin-top:1.5rem
                ">

                    <button
                        onclick="waGo(-1)"
                        style="
                            background:var(--sur);
                            border:1px solid var(--brd);
                            color:var(--txt);
                            width:34px;
                            height:34px;
                            border-radius:50%;
                            cursor:pointer;
                            font-size:1.1rem;
                            line-height:1
                        "
                    >
                        &#8594;
                    </button>


                    <div id="wa-dots" style="display:flex;gap:5px">

                        @foreach($waPages as $index => $page)

                            <span
                                class="wad"
                                style="
                                    width:{{ $index === 0 ? '22px' : '7px' }};
                                    height:4px;
                                    border-radius:2px;
                                    background:{{ $index === 0 ? 'var(--or)' : 'var(--brd)' }};
                                    cursor:pointer;
                                    transition:all .3s
                                "
                                onclick="waSet({{ $index }})"
                            ></span>

                        @endforeach

                    </div>


                    <button
                        onclick="waGo(1)"
                        style="
                            background:var(--sur);
                            border:1px solid var(--brd);
                            color:var(--txt);
                            width:34px;
                            height:34px;
                            border-radius:50%;
                            cursor:pointer;
                            font-size:1.1rem;
                            line-height:1
                        "
                    >
                        &#8592;
                    </button>

                </div>

            @endif


            <script>
                (function(){

                    var waCur = 0;

                    var waPages = document.querySelectorAll(
                        '#section-wa-reviews .wa-page'
                    );

                    var waDots = document.querySelectorAll(
                        '#section-wa-reviews .wad'
                    );


                    function waSet(i){

                        if (!waPages.length) return;

                        i = (i + waPages.length) % waPages.length;

                        waPages.forEach(function(p, idx){

                            p.style.display =
                                idx === i
                                    ? 'grid'
                                    : 'none';

                        });


                        waDots.forEach(function(d, idx){

                            d.style.width =
                                idx === i
                                    ? '22px'
                                    : '7px';

                            d.style.background =
                                idx === i
                                    ? 'var(--or)'
                                    : 'var(--brd)';

                        });


                        waCur = i;
                    }


                    window.waGo = function(dir){

                        waSet(
                            (waCur + dir + waPages.length)
                            % waPages.length
                        );

                    };


                    window.waSet = waSet;


                    if (waPages.length > 1) {

                        setInterval(function(){

                            waSet(
                                (waCur + 1) % waPages.length
                            );

                        }, 7000);

                    }

                })();
            </script>

        </div>
    </section>

@endif
