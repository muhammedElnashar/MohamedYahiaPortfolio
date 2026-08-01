@php
    $sectionHeading = $service->contentSection('why_service');
@endphp

@if($sectionHeading && $service->benefits->isNotEmpty())

    <div class="svc-benefits">

        <div class="eye">
            {{ $sectionHeading->eyebrow }}
        </div>

        <h2 class="svc-benefits-title">
            {{ $sectionHeading->title }}
        </h2>

        <p class="svc-benefits-desc">
            {{ $sectionHeading->description }}
        </p>

        <div class="svc-benefits-list">

            @foreach($service->benefits as $benefit)

                <div class="svc-benefit">

                    <div class="svc-benefit-icon">
                        <i data-lucide="{{ $benefit->icon }}"></i>
                    </div>

                    <div class="svc-benefit-content">

                        <h3>{{ $benefit->title }}</h3>

                        <p>{{ $benefit->description }}</p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

@endif
