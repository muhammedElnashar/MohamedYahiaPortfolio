@php
    $sectionHeading = $service->contentSection('faq');
@endphp

@if($sectionHeading && $service->faqs->isNotEmpty())

    <section class="svc-faq">

        <div class="container">

            <div class="svc-faq-badge">
                <i data-lucide="help-circle"></i>
                {{ $sectionHeading->eyebrow }}
            </div>

            <h2 class="svc-faq-title">
                {{ $sectionHeading->title }}
            </h2>

            <div class="svc-faq-list">

                @foreach($service->faqs as $faq)

                    <details class="svc-faq-item">

                        <summary>
                            <span>{{ $faq->question }}</span>
                            <i data-lucide="chevron-down"></i>
                        </summary>

                        <div class="svc-faq-answer">
                            {{ $faq->answer }}
                        </div>

                    </details>

                @endforeach

            </div>

        </div>

    </section>

@endif
