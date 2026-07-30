@extends('layouts.app')
@section('content')
    <div id="page-about" class="">
        <div class="spage">
            <div class="spage-hero">
                <div class="spage-wrap">
                    <a class="spage-back" href="{{route('home',app()->currentLocale())}}" >
                        <i  data-lucide="{{ app()->currentLocale('ar') ? 'arrow-right' : 'arrow-left' }}" id="back-icon-about"></i>
                        <span class="">{{__('Back to Home')}}</span></a>
                    <div class="spage-eyebrow">
                        <span class="">{{$profilePage?->hero_badge}}</span>
                    </div>
                    <h1 class="spage-title">
                        <span class="">{{$profilePage?->hero_title}} <span class="or">{{$profilePage?->hero_highlight}}</span></span>
                    </h1>
                    <p class="spage-desc">
                        <span class="">{{$profilePage?->hero_description}}</span>
                    </p>
                    @if($profilePage->stats->isNotEmpty())
                        <div class="spage-stats">
                            @foreach($profilePage->stats as $stat)
                                <div class="sps">
                                    <div class="spsn">{{ $stat->value }}</div>
                                    <div class="spsl">{{ $stat->label }}</div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="spage-body">
                <div class="spage-bwrap">

                    <div class="spage-2col" style="margin-bottom:3.5rem">
                        <div>
                            <div class="spage-st"><span class="">{{$profilePage?->story_title}}</span></div>
                            <p style="font-size:14px;color:var(--mu);line-height:1.85;margin-bottom:1rem">
                                <span class="">{{$profilePage?->story_content}}</span>
                            </p>


                        </div>
                        @if($profilePage->career_title || $profilePage->careerItems->isNotEmpty())
                            <div>
                                @if($profilePage->career_title)
                                    <div class="spage-st">
                                        {{ $profilePage->career_title }}
                                    </div>
                                @endif

                                @if($profilePage->careerItems->isNotEmpty())
                                    <div class="steps">
                                        @foreach($profilePage->careerItems as $index => $career)
                                            <div class="step-i">

                                                <div class="step-n">
                                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                                </div>

                                                <div class="step-body">

                                                    @if($career->title)
                                                        <div class="step-t">
                                                            {{ $career->title }}
                                                        </div>
                                                    @endif

                                                    @if($career->description)
                                                        <div class="step-d">
                                                            {{ $career->description }}
                                                        </div>
                                                    @endif

                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>

                    <div class="spage-2col" style="margin-bottom:3.5rem">
                        <div style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--r);padding:1.75rem">
                            <div class="spage-st" style="margin-bottom:1.25rem">
                                <span class="">{{$profilePage->education_title}}</span></div>
                            @foreach($profilePage->educationItems as $educationItem)
                                <div style="display:flex;gap:14px;align-items:flex-start;padding-bottom:1.25rem;border-bottom:1px solid var(--brd);margin-bottom:1.25rem">
                                    <div style="width:44px;height:44px;border-radius:var(--rs);background:var(--or-pale);border:1px solid var(--or-border);display:flex;align-items:center;justify-content:center;flex-shrink:0">
                                        <i data-lucide="{{$educationItem->icon}}" style="width:20px;height:20px;stroke:var(--or)"></i>
                                    </div>
                                    <div>
                                        <div style="font-size:15px;font-weight:700;color:var(--txt);margin-bottom:3px">
                                            <span class="">{{$educationItem->title}}</span>
                                        </div>
                                        <div style="font-size:13px;color:var(--or);font-weight:600">
                                            <span class="">{{$educationItem->subtitle}}</span>
                                        </div>
                                        <div style="font-size:12px;color:var(--mu);margin-top:4px">
                                            <span class="">{{$educationItem->description}}</span>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>

                        <div style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--r);padding:1.75rem">
                            <div class="spage-st" style="margin-bottom:1.25rem">
                                <span class="">{{$profilePage->methodology_title}}</span></div>
                            <ul class="spage-list">
                                @foreach($profilePage->methodologyItems as $methodologyItem)
                                    <li><i data-lucide="check-circle-2"></i><span>
                                        <span class=""><strong>{{$methodologyItem->title}}</strong> ـــ {{$methodologyItem->description}}</span></span></li>

                                @endforeach
                              </ul>
                        </div>
                    </div>
                    @if($skills->isNotEmpty())
                    <div style="margin-bottom:3rem">
                        <div class="spage-st">
                            <span class="">{{$profilePage?->skills_title}}</span>
                        </div>
                        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(160px,1fr));gap:10px;margin-top:1.5rem">
                            @foreach($skills as $skill)
                                <div class="tool"><div class="tool-dot"></div><div class="tool-n">{{$skill->name}}</div></div>

                            @endforeach
                        </div>
                    </div>
                    @endif
                    <div style="background:linear-gradient(135deg,var(--or-pale),var(--bg3));border:1px solid var(--or-border);border-radius:var(--r);padding:2.5rem;text-align:center">
                        <div style="font-family:'Tajawal','Space Grotesk',sans-serif;font-size:24px;font-weight:900;color:var(--txt);margin-bottom:.75rem">
                            <span class="">{{$profilePage?->cta_title}}</span>
                        </div>
                        <p style="font-size:14px;color:var(--mu);max-width:500px;margin:0 auto 1.5rem">
                            <span class="">{{$profilePage?->cta_description}}</span>
                        </p>
                        <a class="btn-pr" href="{{$profilePage?->cta_url}}" target="_blank" style="display:inline-flex;text-decoration:none"><i data-lucide="message-circle"></i>
                            <span class="">{{$profilePage?->cta_button}}</span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
