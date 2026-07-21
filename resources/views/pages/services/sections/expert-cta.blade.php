    @php
        $expertCTA =$service->ctaSection('expert_cta');
        $section = $service->section('cta');
    @endphp
@if($expertCTA)
    <div class="svc-cta-block" style="margin-bottom:3rem">
        <div class="cta-inner">
            <div class="cta-glow"></div>
            <div class="cta-icon"><i data-lucide="{{ $expertCTA->icon }}"></i></div>
            <h2 class="cta-h ">{{ $expertCTA->title }}</h2>

            <p class="cta-sub ">{{ $expertCTA->description }}</p>

            <div class="cta-trust">
                @foreach($section->stats as $stat)
                    <span><i data-lucide="{{ $stat->value }}"></i> <span class="">{{ $stat->label }}</span></span>
                @endforeach
            </div>
        </div>
    </div>

@endif
