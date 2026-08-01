@php
    $sectionHeading = $service->contentSection('audit_cover');
    $section = $service->section('audit_covers');
@endphp

@if($section && $sectionHeading)

    <section class="svc-extra">

        <div class="container">

            <h2 class="svc-extra-title">
                {{ $sectionHeading->title }}
            </h2>

            <div class="svc-extra-grid">

                @foreach($section->cards as $card)

                    <div class="svc-extra-card">

                        <div class="svc-extra-icon">
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
