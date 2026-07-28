@php
    $heading = $sections->get(\App\Enums\HomeSectionKey::TOOLS->value);
    $heading2 = $sections->get(\App\Enums\HomeSectionKey::PLATFORM->value);
    $heading3 = $sections->get(\App\Enums\HomeSectionKey::SEO_TOOLS->value);

@endphp
    <section id="tools">
        <div class="si">
            <div class="eye"><span class="">{{$heading?->eyebrow}}</span></div>
            <h2 class="sh"><span class="">{{$heading?->title}}</span>
            </h2>
@if($skills->isNotEmpty())
                <!-- Skill highlights — clickable -->
                <div style="margin-top:1.5rem">
                    <p style="font-size:11px;font-weight:700;color:var(--or);letter-spacing:2px;text-transform:uppercase;margin-bottom:1rem">
                        <span class="">Core Skills</span></p>
                    <div style="display:flex;flex-wrap:wrap;gap:.625rem">
                        @foreach($skills as $skill)
                            @if($skill->has_page)
                                <a href="{{ route('skills.show',[
                    'locale'=>app()->getLocale(),
                    'skill'=>$skill->slug
                ]) }}" data-spc="cwv" class="sk-tag">{{$skill->title}} <span
                                        style="opacity:.5">{{ $skill->has_page ? ' ↗ ' : '' }}</span></a>
                            @else
                                <span class="sk-tag">
        {{ $skill->title }}
    </span>
                            @endif
                        @endforeach
                    </div>
                </div>
@endif

            @if($platforms->isNotEmpty() && $seoSpecialties->isNotEmpty())
            <!-- Platform specialization clickable cards -->
            <div style="margin-top:2.5rem">
                <p style="font-size:11px;font-weight:700;color:var(--or);letter-spacing:2px;text-transform:uppercase;margin-bottom:1rem">
                    <span class="">{{$heading2?->title}}</span></p>

                <div class="plt-marquee-wrap">
                    <div class="plt-marquee-track">
                        @foreach($platforms as $platform)
                            <span class="plt-badge"
                                  style="background:{{$platform->background_color}};color:{{$platform->text_color}};border-color:rgba(255,255,255,.15)">
                            <span
                                class="plt-badge-logo">
                           @if($platform->icon)
                                    <img
                                        src="{{ asset('brand-icons/'.$platform->icon.'.svg') }}"
                                        alt="{{ $platform->name }}"
                                        width="22"
                                        height="22"
                                    >
                                @endif
                            </span>
                            <span
                                class="">{{$platform->name}}</span></span>

                        @endforeach

                    </div>
                </div>


                <div
                    style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:1rem;margin-bottom:1.5rem">
                    @foreach($seoSpecialties as $seoSpecialty)
                        <a href="{{route('platforms.show',['locale'=>app()->currentLocale(),'platform' => $seoSpecialty->slug])}}"
                             style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                             onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                             onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                            <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                                <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="store" style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                        style="font-weight:800;color:var(--txt);font-size:14px"><span class="">{{$seoSpecialty->name}}</span></span></div>
                            </div>
                            <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55">
                                <span class="">{{$seoSpecialty->card_description}}</span>
                              </p>
                            <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto">
                                <span class="">Learn More ←</span>
                               </span>
                        </a>

                    @endforeach

                </div>
            </div>
                @endif
            @if($seoTools->isNotEmpty())

            <div style="margin-top:2.5rem"><p
                    style="font-size:11px;font-weight:700;color:var(--or);letter-spacing:2px;text-transform:uppercase;margin-bottom:1rem">
                    <span class="">{{$heading3?->title}}</span></p>
                <div class="tool-grid">
                    @foreach($seoTools as $seoTool)
                        <div class="tool">
                            <div class="tool-dot"></div>
                            <span class="tool-n">{{$seoTool->title}}</span>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </section>

