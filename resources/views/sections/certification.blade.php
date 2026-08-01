@php
    $heading = $sections->get(\App\Enums\HomeSectionKey::CERTIFICATIONS->value);
@endphp

@if($certifications)

    <section id="section-certs" class="certs-section">

        <div class="si certs-container">

            {{-- =========================================
                 HEADER
            ========================================== --}}

            <div class="certs-header">

                @if($heading?->eyebrow)
                    <div class="eye">
                        <span>{{ $heading->eyebrow }}</span>
                    </div>
                @endif

                @if($heading?->title)
                    <h2 class="sh">
                        {{ $heading->title }}
                    </h2>
                @endif

                @if($heading?->subtitle)
                    <p class="certs-intro">
                        {{ $heading->subtitle }}
                    </p>
                @endif

            </div>


            {{-- =========================================
                 STATS
            ========================================== --}}

            @if($certifications->stats->isNotEmpty())

                <div class="certs-stats">

                    @foreach($certifications->stats as $statistic)

                        <div class="certs-stat">

                            <div class="certs-stat-value">
                                {{ $statistic->value }}+
                            </div>

                            <div class="certs-stat-label">
                                {{ $statistic->label }}
                            </div>

                        </div>

                    @endforeach

                </div>

            @endif


            {{-- =========================================
                 CERTIFICATION HIGHLIGHTS
            ========================================== --}}

            @if($certifications->highlights->isNotEmpty())

                <div class="certs-slider-wrap">

                    {{-- Previous --}}

                    <button
                        type="button"
                        class="certs-arrow certs-arrow-prev"
                        onclick="slideTrack('certs-track', -1)"
                        aria-label="Previous"
                    >
                        &#8249;
                    </button>


                    {{-- Track --}}

                    <div
                        id="certs-track"
                        class="certs-track"
                    >

                        @foreach($certifications->highlights as $highlight)

                            <article class="cert-slide">

                                <div class="cert-slide-platform">
                                    {{ $highlight->platform }}
                                </div>

                                <h3 class="cert-slide-title">
                                    {{ $highlight->title }}
                                </h3>

                                <p class="cert-slide-subtitle">
                                    {{ $highlight->subtitle }}
                                </p>

                            </article>

                        @endforeach

                    </div>


                    {{-- Next --}}

                    <button
                        type="button"
                        class="certs-arrow certs-arrow-next"
                        onclick="slideTrack('certs-track', 1)"
                        aria-label="Next"
                    >
                        &#8250;
                    </button>

                </div>

            @endif


            {{-- =========================================
                 LINKEDIN CTA
            ========================================== --}}

            @if($certifications->linkedin_url)

                <div class="certs-linkedin-wrap">

                    <a
                        href="{{ $certifications->linkedin_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="certs-linkedin"
                    >

                        <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"
                            />

                            <rect
                                x="2"
                                y="9"
                                width="4"
                                height="12"
                            />

                            <circle
                                cx="4"
                                cy="4"
                                r="2"
                            />
                        </svg>

                        <span>
                        {{ $certifications->linkedin_button_text }}
                    </span>

                    </a>

                </div>

            @endif


            {{-- =========================================
                 CERTIFICATE IMAGES
            ========================================== --}}

            @if($certifications->certificates->isNotEmpty())

                <div class="cert-gallery">

                    <div
                        id="cert-imgs-track"
                        class="cert-imgs-track"
                    >

                        @foreach($certifications->certificates as $certificate)

                            <div class="cert-img-slide">

                                <img
                                    src="{{ asset('storage/' . $certificate->image) }}"
                                    alt="{{ $certificate->title ?? 'Certificate' }}"
                                    loading="lazy"
                                    onclick="this.requestFullscreen && this.requestFullscreen()"
                                >

                            </div>

                        @endforeach

                    </div>


                    {{-- Gallery Controls --}}

                    <div class="cert-gallery-controls">

                        <button
                            type="button"
                            class="cert-gallery-arrow"
                            onclick="slideTrack('cert-imgs-track', -1)"
                            aria-label="Previous certificate"
                        >
                            &#8592;
                        </button>


                        @if($certifications->gallery_hint)

                            <span class="cert-gallery-hint">
                            {{ $certifications->gallery_hint }}
                        </span>

                        @endif


                        <button
                            type="button"
                            class="cert-gallery-arrow"
                            onclick="slideTrack('cert-imgs-track', 1)"
                            aria-label="Next certificate"
                        >
                            &#8594;
                        </button>

                    </div>

                </div>

            @endif

        </div>

    </section>

@endif
<script>

    window.slideTrack = function(id, direction) {

        const track = document.getElementById(id);

        if (!track) return;


        const slide = track.firstElementChild;

        if (!slide) return;


        const style =
            window.getComputedStyle(track);


        const gap =
            parseFloat(style.gap) || 0;


        const distance =
            slide.getBoundingClientRect().width + gap;


        const rtl =
            document.documentElement.dir === 'rtl';


        track.scrollBy({

            left:
                direction *
                distance *
                (rtl ? -1 : 1),

            behavior:'smooth'

        });

    };

</script>
