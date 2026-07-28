@php
    $reviewPages = $reviews->chunk(3);
        $heading = $sections->get(\App\Enums\HomeSectionKey::REVIEWS->value);
@endphp

@if($reviews->isNotEmpty())

    <section id="section-reviews"
             style="padding:4.5rem 0;border-top:1px solid var(--brd);background:var(--bg) ; text-align: center">

        <div class="si">

            <div class="eye">
                <span class="">{{$heading?->eyebrow}}</span>
            </div>

            <h2 class="sh">
          {{$heading?->title}}
            </h2>


            <p style="
            text-align:center;
            color:var(--mu);
            font-size:.85rem;
            margin-bottom:2rem;
            max-width:520px;
            margin-inline:auto;
        ">
                {{$heading?->subtitle}}
            </p>


            {{-- ============================
                REVIEWS SLIDER
            ============================ --}}

            <div id="rv-slider" style="position:relative;overflow:hidden">

                @foreach($reviewPages as $pageIndex => $reviewsPage)
                    <div
                        class="rv-page"
                        style="
                        display:{{ $pageIndex === 0 ? 'grid' : 'none' }};
                        grid-template-columns:repeat(auto-fill,minmax(280px,1fr));
                        gap:18px;
                    "
                    >

                        @foreach($reviewsPage as $review)

                            <div style="
                            background:var(--sur);
                            border:1px solid var(--brd);
                            border-radius:16px;
                            overflow:hidden;
                        ">

                                {{-- Header --}}
                                <div style="
                                background:#1a2e1a;
                                padding:.6rem 1rem;
                                display:flex;
                                align-items:center;
                                gap:.5rem;
                            ">

                                    {{-- Avatar --}}
                                    <div style="
                                    width:30px;
                                    height:30px;
                                    border-radius:50%;
                                    background:#128C7E;
                                    display:flex;
                                    align-items:center;
                                    justify-content:center;
                                    font-weight:700;
                                    color:#fff;
                                    font-size:.8rem;
                                    flex-shrink:0;
                                ">
                                        {{ $review->avatar_text }}
                                    </div>


                                    {{-- Name + Subtitle --}}
                                    <div style="flex:1">

                                        <div style="
                                        font-size:.8rem;
                                        font-weight:600;
                                        color:#e8e8e8;
                                    ">
                                            {{ $review->client_name }}
                                        </div>


                                        @if($review->client_subtitle)

                                            <div style="
                                            font-size:.67rem;
                                            color:#aaa;
                                        ">
                                                {{ $review->client_subtitle }}
                                            </div>

                                        @endif

                                    </div>


                                    {{-- Rating --}}
                                    @if($review->rating)

                                        <div
                                            title="{{ $review->rating }}/5"
                                            style="
                                            font-size:.7rem;
                                            color:#f5b301;
                                            white-space:nowrap;
                                        "
                                        >

                                            @for($i = 1; $i <= 5; $i++)

                                                {{ $i <= $review->rating ? '★' : '☆' }}

                                            @endfor

                                        </div>

                                    @endif

                                </div>


                                {{-- Review --}}
                                <div style="padding:.9rem 1rem">

                                    <div style="
                                    background:#1f3a1f;
                                    border-radius:10px 10px 10px 0;
                                    padding:.7rem .9rem;
                                ">

                                        <p style="
                                        font-size:.84rem;
                                        color:#d4edda;
                                        line-height:1.75;
                                        margin:0;
                                    ">
                                            {{ $review->review }}
                                        </p>


                                        {{-- Time --}}
                                        @if($review->rating_time)

                                            <div style="
                                            font-size:.66rem;
                                            color:#777;
                                            margin-top:.35rem;
                                            text-align:left;
                                        ">
                                                {{ $review->rating_time }} ✓✓
                                            </div>

                                        @endif

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                @endforeach



            </div>


            {{-- ============================
                NAVIGATION
            ============================ --}}

            @if($reviewPages->count() > 1)

                <div style="
                display:flex;
                align-items:center;
                justify-content:center;
                gap:12px;
                margin-top:1.5rem;
            ">

                    <button
                        type="button"
                        onclick="rvGo(-1)"
                        style="
                        background:var(--sur);
                        border:1px solid var(--brd);
                        color:var(--txt);
                        width:36px;
                        height:36px;
                        border-radius:50%;
                        cursor:pointer;
                        font-size:1.1rem;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                    "
                    >
                        &#8594;
                    </button>


                    <div id="rv-dots" style="display:flex;gap:6px">

                        @foreach($reviewPages as $index => $page)

                            <span
                                class="rvd {{ $index === 0 ? 'active' : '' }}"
                                onclick="rvSet({{ $index }})"
                                style="
                                width:{{ $index === 0 ? '22px' : '8px' }};
                                height:5px;
                                border-radius:3px;
                                background:{{ $index === 0 ? 'var(--or)' : 'var(--brd)' }};
                                cursor:pointer;
                                transition:all .3s;
                            "
                            ></span>

                        @endforeach

                    </div>


                    <button
                        type="button"
                        onclick="rvGo(1)"
                        style="
                        background:var(--sur);
                        border:1px solid var(--brd);
                        color:var(--txt);
                        width:36px;
                        height:36px;
                        border-radius:50%;
                        cursor:pointer;
                        font-size:1.1rem;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                    "
                    >
                        &#8592;
                    </button>

                </div>

            @endif


            {{-- Mostaql Link --}}
            <div style="text-align:center;margin-top:1.25rem">

                <a
                    href="{{$hero->portfolio_url}}"
                    target="_blank"
                    rel="noopener noreferrer"
                    style="
                    font-size:.82rem;
                    color:var(--or);
                    text-decoration:none;
                    border-bottom:1px solid var(--or-border);
                    padding-bottom:2px;
                "
                >

                <span class="ari">
                    عرض جميع التقييمات على مستقل ←
                </span>

                    <span class="eni">
                    View all reviews on Mostaql ←
                </span>

                </a>

            </div>

        </div>

    </section>


    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const pages = document.querySelectorAll('#rv-slider .rv-page');
            const dots  = document.querySelectorAll('#rv-dots .rvd');

            let currentReviewPage = 0;


            window.rvSet = function(index) {

                if (!pages.length) {
                    return;
                }


                // Loop
                if (index < 0) {
                    index = pages.length - 1;
                }

                if (index >= pages.length) {
                    index = 0;
                }


                currentReviewPage = index;


                // Pages
                pages.forEach(function(page, pageIndex) {

                    page.style.display =
                        pageIndex === currentReviewPage
                            ? 'grid'
                            : 'none';

                });


                // Dots
                dots.forEach(function(dot, dotIndex) {

                    if (dotIndex === currentReviewPage) {

                        dot.classList.add('active');

                        dot.style.width = '22px';
                        dot.style.background = 'var(--or)';

                    } else {

                        dot.classList.remove('active');

                        dot.style.width = '8px';
                        dot.style.background = 'var(--brd)';

                    }

                });

            };


            window.rvGo = function(direction) {

                rvSet(currentReviewPage + direction);

            };

        });

    </script>

@endif
