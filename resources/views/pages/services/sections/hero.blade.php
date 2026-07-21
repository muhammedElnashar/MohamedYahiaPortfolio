<div class="spage-hero">
    <div class="spage-wrap">
        <a class="spage-back" href="{{route('home',app()->getLocale())}}"><i data-lucide="arrow-right" id="back-icon-audit"></i>
            <span class="">Back to Home</span></a>
        <div class="spage-eyebrow"><span class="">{{$service->title}}</span></div>
        <h1 class="spage-title">
            <span class="">{{$service->hero_title}} </span></h1>
        <p class="spage-desc"><span class="">{{$service->hero_description}}</span></p>
        @include('pages.services.sections.hero-stats')
    </div>
</div>
<div class="spage-body">
    <div class="spage-bwrap">
        <div class="svc-new-section" style="margin-bottom:3rem">
            @include('pages.services.sections.pain-points')
            @include('pages.services.sections.deep-dive')

            <div class="container">
                <div
                    style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:3rem;align-items:start;margin-bottom:10rem">
                    @include('pages.services.sections.benefit')
                    @include('pages.services.sections.my-methodology')
                </div>
            </div>
            <div class="spage-2col" style="margin-bottom:10rem">
                @include('pages.services.sections.deliverable')
                @include('pages.services.sections.our-process')
            </div>
            @include('pages.services.sections.stats-investment')


        </div>
    </div>


</div>

@include('pages.services.sections.audit-cover')
@include('pages.services.sections.audit-process')
@include('pages.services.sections.audit-deliverable')
    <!-- cro-sections-audit -->

@include('pages.services.sections.problem')


@include('pages.services.sections.why-me')

@include('pages.services.sections.my-process')
@include('pages.services.sections.comparison')

@include('pages.services.sections.related-service')
@include('pages.services.sections.faq')
@include('pages.services.sections.expert-cta')
@include('pages.services.sections.why-choose-me')
@include('pages.services.sections.whatsapp-cta')






