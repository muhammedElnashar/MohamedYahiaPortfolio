@php
    $sectionHeading = $service->contentSection('problem');
@endphp

@if($sectionHeading && $service->checklists->isNotEmpty())

    <section class="svc-problems">

        <div class="container">

            <div class="svc-problems-badge">
                <i data-lucide="zap"></i>
                {{ $sectionHeading->eyebrow }}
            </div>

            <h2 class="svc-problems-title">
                {{ $sectionHeading->title }}
            </h2>

            <div class="svc-problems-grid">

                @foreach($service->checklists as $list)

                    <div class="svc-problem">

                        <i data-lucide="alert-circle"></i>

                        <span>{{ $list->item }}</span>

                    </div>

                @endforeach

            </div>

        </div>

    </section>

@endif
