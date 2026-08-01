@php
    $heading = $sections->get(
        \App\Enums\HomeSectionKey::FAQ->value
    );
@endphp


@if($faqs->isNotEmpty())

    <section id="section-faq" class="faq-section">

        <div class="si faq-container">


            {{-- Header --}}
            <header class="faq-header">

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

            </header>


            {{-- FAQs --}}
            <div class="faq-list">

                @foreach($faqs as $faq)

                    <details class="faq-item">

                        <summary class="faq-question">

                            <span class="faq-question-text">
                                {{ $faq->question }}
                            </span>

                            <span
                                class="faq-icon"
                                aria-hidden="true"
                            ></span>

                        </summary>


                        <div class="faq-answer">

                            <div class="faq-answer-inner">
                                {{ $faq->answer }}
                            </div>

                        </div>

                    </details>

                @endforeach

            </div>


            {{-- Contact CTA --}}
            <div class="faq-footer">

                <a
                    href="#contact"
                    class="faq-contact-btn"
                >

                    <span class="ari">
                        لديك سؤال آخر؟ تواصل معي
                    </span>

                    <span class="eni">
                        Have another question? Contact me
                    </span>

                    <svg
                        class="faq-contact-arrow"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path d="M5 12h14"/>
                        <path d="m13 6 6 6-6 6"/>
                    </svg>

                </a>

            </div>


        </div>

    </section>

@endif
