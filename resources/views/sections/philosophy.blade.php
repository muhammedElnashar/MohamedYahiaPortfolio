@php
    $heading = $sections->get(\App\Enums\HomeSectionKey::PHILOSOPHY->value);
@endphp

<section id="section-philosophy" class="philosophy-section">

    <div class="si philosophy-container">

        {{-- Header --}}
        <div class="philosophy-header">

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

        </div>


        {{-- Beliefs --}}
        @if($beliefs->isNotEmpty())

            <div class="beliefs-list">

                @foreach($beliefs as $belief)

                    <article class="belief-card">

                        <div class="belief-number">

                            <span class="belief-number-dot"></span>

                            <span>
                                {{ 'BELIEF #' . str_pad(
                                    $belief->number,
                                    2,
                                    '0',
                                    STR_PAD_LEFT
                                ) }}
                            </span>

                        </div>


                        <h3 class="belief-title">
                            {{ $belief->title }}
                        </h3>


                        <p class="belief-description">
                            {{ $belief->description }}
                        </p>

                    </article>

                @endforeach

            </div>

        @endif

    </div>

</section>
