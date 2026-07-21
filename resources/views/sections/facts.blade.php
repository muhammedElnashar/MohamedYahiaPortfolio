@php
    $heading = $sections['why_seo'] ?? null;
@endphp
@if($heading && $facts->isNotEmpty())
<section class="home-facts">
    <div class="home-facts-inner">
        <div class="home-facts-head">
            <div class="home-facts-eyebrow"><span class="">{{$heading->eyebrow}}</span></div>
            <h2 class="home-facts-title">
                {{$heading->title}}
            </h2>
            <p class="home-facts-sub ">
                {{$heading->subtitle}}
            </p>
        </div>
        <div class="home-facts-grid">
            @foreach($facts as $fact)

                <div class="hf-card">

                    <div class="hf-icon">
                        <i data-lucide="{{ $fact->icon }}"></i>
                    </div>

                    <div class="hf-val">
                        {{ $fact->value }}
                    </div>

                    <div class="hf-label">
                        {{ $fact->label }}
                    </div>

                    <p class="hf-desc">
                        {{ $fact->description }}
                    </p>

                    <span class="hf-src">
        {{ $fact->source }}
    </span>

                </div>

            @endforeach
        </div>
        <div class="home-facts-bottom">
            <p class="hf-cta-txt ">Ready to start your Google ranking journey?</p>
            <a href="{{$hero->whatsapp_url}}" target="_blank" class="hf-cta-btn">
                <i data-lucide="message-circle" style="width:16px;height:16px;stroke:#fff;fill:none"></i>
             <span class="">Start Free Now</span>
            </a>
        </div>
    </div>
</section>
@endif
