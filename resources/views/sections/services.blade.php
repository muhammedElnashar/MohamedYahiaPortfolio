@php
    $heading = $sections->get(\App\Enums\HomeSectionKey::SERVICES->value);
@endphp
@if($categories->isNotEmpty())

<section id="services" class="svc-bg">
    <div class="si">
        <div class="eye"><span class="">{{$heading?->eyebrow}}</span></div>
        <h2 class="sh"><span class="">{{$heading?->title}}</span></h2>
        <div style="display:inline-flex;align-items:center;gap:8px;padding:5px 14px;border-radius:30px;border:1px solid var(--or-border);background:var(--or-pale);font-size:12px;font-weight:700;color:var(--or);margin-bottom:.5rem">
            <i data-lucide="layers"></i>
            <span class="">{{$heading?->badge}}</span>
        </div>
        <p class="ssub">
            <span class="">{{$heading?->subtitle}}</span>
        </p>
        @if($homeServicesProcess)

        <div class="proc-bar">
                @foreach($homeServicesProcess as $index => $process)
                    <div class="pb-step"><span class="pb-num">{{$index+1}}</span>
                        <div class="pb-label ">{{$process->title}}</div></div>

                @endforeach

           </div>
        @endif

        <div class="svc-filter">
            <button
                class="sf-btn on"
                onclick="filterSvc('all',this)">
                {{ __('All') }}
            </button>

            @foreach($categories as $category)
                <button
                    class="sf-btn"
                    onclick="filterSvc('{{ $category->slug }}',this)">
                    {{ $category->name }}
                </button>
            @endforeach </div>
        <div class="svc-grid" id="svc-grid">

            @foreach($categories as $category)

                @foreach($category->services as $service)

                    <div
                        class="svc-card"
                        data-svc="{{ $category->slug }}">

                        @if($service->badge)
                            <div class="svc-badge">
                                {{ $service->badge }}
                            </div>
                        @endif

                        <div class="svc-ico">
                            <i data-lucide="{{ $service->icon }}"></i>
                        </div>

                        <div class="svc-n">
                            {{ $service->title }}
                        </div>

                        <p class="svc-d">
                            {{ $service->short_description }}
                        </p>

                        <div class="svc-tags">

                            @foreach($service->keywords->take(3) as $keyword)

                                <span class="svc-tag">
                        {{ $keyword->keyword }}
                    </span>

                            @endforeach

                        </div>

                        <a
                            class="svc-link"
                            href="{{ route('services.show',[
                    'locale'=>app()->getLocale(),
                    'service'=>$service->slug
                ]) }}">

                            View Details <i data-lucide="arrow-right"></i>

                        </a>

                    </div>

                @endforeach

            @endforeach

        </div>

    </div>

</section>
@endif
