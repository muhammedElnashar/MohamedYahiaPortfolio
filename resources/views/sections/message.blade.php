@php
    $heading = $sections->get(
        \App\Enums\HomeSectionKey::MESSAGE->value
    );

    /*
    |--------------------------------------------------------------------------
    | 6 messages per page
    |--------------------------------------------------------------------------
    |
    | Desktop : 3 × 2
    | Tablet  : 2 × 3
    | Mobile  : horizontal swipe inside current page
    |
    */
    $waPages = $messages->chunk(6);
@endphp


@if($messages->isNotEmpty())

    <section id="section-wa-reviews" class="wa-section">

        <div class="si wa-container">


            {{-- =====================================================
                 SECTION HEADER
            ====================================================== --}}

            <header class="wa-section-header">

                @if($heading?->eyebrow)

                    <div class="eye">
                        <span>
                            {{ $heading->eyebrow }}
                        </span>
                    </div>

                @endif


                @if($heading?->title)

                    <h2 class="sh">
                        {{ $heading->title }}
                    </h2>

                @endif

            </header>



            {{-- =====================================================
                 SLIDER
            ====================================================== --}}

            <div
                id="wa-slider"
                class="wa-slider"
                data-current="0"
            >

                @foreach($waPages as $pageIndex => $page)

                    <div
                        class="wa-page {{ $pageIndex === 0 ? 'active' : '' }}"
                        data-page="{{ $pageIndex }}"
                    >

                        @foreach($page as $clientMessage)

                            <article class="wa-card">


                                {{-- =========================================
                                     WHATSAPP HEADER
                                ========================================== --}}

                                <div class="wa-chat-header">


                                    {{-- Avatar --}}

                                    <div class="wa-avatar">

                                        <svg
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                        >
                                            <path
                                                d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                                            />
                                            <circle
                                                cx="12"
                                                cy="7"
                                                r="4"
                                            />
                                        </svg>

                                    </div>


                                    {{-- Client info --}}

                                    <div class="wa-client-info">

                                        <div class="wa-client-name">

                                            {{ $clientMessage->client_name }}

                                            @if($clientMessage->client_label)

                                                <span class="wa-client-label">
                                                    · {{ $clientMessage->client_label }}
                                                </span>

                                            @endif

                                        </div>


                                        <div class="wa-online">
                                            online
                                        </div>

                                    </div>


                                    {{-- WhatsApp icon --}}

                                    <div class="wa-header-icon">

                                        <svg
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                        >
                                            <path
                                                d="M12 2a10 10 0 0 0-8.7 14.9L2 22l5.2-1.3A10 10 0 1 0 12 2zm0 18.2a8.1 8.1 0 0 1-4.1-1.1l-.3-.2-3.1.8.8-3-.2-.3A8.2 8.2 0 1 1 12 20.2z"
                                            />
                                            <path
                                                d="M16.5 13.7c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.6.1-.2.3-.6.8-.8.9-.1.2-.3.2-.5.1-1.3-.6-2.4-1.5-3.2-2.7-.2-.3.2-.5.5-1 .1-.2.1-.4 0-.5-.1-.1-.6-1.4-.8-1.9-.2-.5-.4-.4-.6-.4h-.5c-.2 0-.5.1-.7.3-.7.7-1.1 1.6-1 2.6.1 1.1.4 2.1 1.1 3 1.3 1.9 3.1 3.4 5.2 4.1.6.2 1.2.3 1.8.2.8-.1 1.5-.6 1.9-1.3.2-.4.2-.8.2-1.2-.1-.2-.2-.3-.4-.4z"
                                            />
                                        </svg>

                                    </div>


                                </div>



                                {{-- =========================================
                                     CARD CONTENT
                                ========================================== --}}

                                @if($clientMessage->image)


                                    {{-- Screenshot --}}

                                    <div class="wa-screenshot">

                                        <img
                                            src="{{ asset('storage/' . $clientMessage->image) }}"
                                            alt="{{ $clientMessage->client_name }}"
                                            loading="lazy"
                                            decoding="async"
                                        >

                                    </div>


                                @else


                                    {{-- Chat messages --}}

                                    @if(
                                        $clientMessage->message ||
                                        $clientMessage->my_reply
                                    )

                                        <div class="wa-chat-body">


                                            {{-- Client message --}}

                                            @if($clientMessage->message)

                                                <div class="wa-message-row wa-message-client">

                                                    <div class="wa-bubble wa-bubble-client">

                                                        <p>
                                                            {{ $clientMessage->message }}
                                                        </p>


                                                        <div class="wa-message-meta">

                                                            <span class="wa-checks">
                                                                ✓✓
                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            @endif



                                            {{-- My reply --}}

                                            @if($clientMessage->my_reply)

                                                <div class="wa-message-row wa-message-me">

                                                    <div class="wa-bubble wa-bubble-me">

                                                        <p>
                                                            {{ $clientMessage->my_reply }}
                                                        </p>


                                                        <div class="wa-message-meta">

                                                            <span class="wa-checks">
                                                                ✓✓
                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            @endif


                                        </div>

                                    @endif


                                @endif


                            </article>

                        @endforeach

                    </div>

                @endforeach

            </div>



            {{-- =====================================================
                 MOBILE SWIPE HINT
            ====================================================== --}}

            <div class="wa-mobile-hint">

                <span class="wa-hint-line"></span>

                <span class="ari">
                    اسحب لعرض الرسائل
                </span>

                <span class="eni">
                    Swipe to view messages
                </span>

                <span class="wa-hint-line"></span>

            </div>



            {{-- =====================================================
                 PAGE NAVIGATION
            ====================================================== --}}

            @if($waPages->count() > 1)

                <div class="wa-navigation">


                    {{-- Previous --}}

                    <button
                        type="button"
                        class="wa-nav-btn"
                        onclick="waMove(-1)"
                        aria-label="Previous messages"
                    >
                        <span>‹</span>
                    </button>



                    {{-- Dots --}}

                    <div class="wa-dots">

                        @foreach($waPages as $pageIndex => $page)

                            <button
                                type="button"
                                class="wa-dot {{ $pageIndex === 0 ? 'active' : '' }}"
                                onclick="waSet({{ $pageIndex }})"
                                aria-label="Page {{ $pageIndex + 1 }}"
                            ></button>

                        @endforeach

                    </div>



                    {{-- Next --}}

                    <button
                        type="button"
                        class="wa-nav-btn"
                        onclick="waMove(1)"
                        aria-label="Next messages"
                    >
                        <span>›</span>
                    </button>


                </div>

            @endif


        </div>

    </section>

@endif
<script>
    (function () {

        const slider = document.getElementById('wa-slider');

        if (!slider) {
            return;
        }


        const pages = slider.querySelectorAll('.wa-page');
        const dots  = document.querySelectorAll('.wa-dot');

        if (!pages.length) {
            return;
        }


        let current = 0;


        function showPage(index) {

            /*
             * Circular navigation
             *
             * previous from first → last
             * next from last → first
             */

            current =
                (index + pages.length) %
                pages.length;


            /* Pages */

            pages.forEach(function (page, i) {

                const active =
                    i === current;

                page.classList.toggle(
                    'active',
                    active
                );


                /*
                 * Reset mobile scroll when
                 * page becomes active
                 */

                if (active) {

                    page.scrollTo({
                        left: 0,
                        behavior: 'auto'
                    });

                }

            });


            /* Dots */

            dots.forEach(function (dot, i) {

                dot.classList.toggle(
                    'active',
                    i === current
                );

            });


            slider.dataset.current =
                current;

        }



        /* Previous / Next */

        window.waMove = function (direction) {

            showPage(
                current + direction
            );

        };



        /* Dot navigation */

        window.waSet = function (index) {

            showPage(index);

        };

    })();
</script>
