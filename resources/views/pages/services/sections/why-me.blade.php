@php
    $sectionHeading = $service->contentSection('why_me');
    $section = $service->section('why_me');
@endphp

@if($section && $sectionHeading)

    <section class="svc-why">

        <div class="container">

            <div class="svc-why-badge">
                <i data-lucide="star"></i>
                {{ $sectionHeading->eyebrow }}
            </div>

            <h2 class="svc-why-title">
                {{ $sectionHeading->title }}
            </h2>

            <div class="svc-why-grid">

                @foreach($section->cards as $card)

                    <div class="svc-why-card">

                        <div class="svc-why-icon">
                            <i data-lucide="{{ $card->icon }}"></i>
                        </div>

                        <h3>{{ $card->title }}</h3>

                        <p>{{ $card->description }}</p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

@endif
