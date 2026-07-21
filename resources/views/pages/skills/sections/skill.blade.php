<div id="page-cwv" >
    <div class="spage">
        <div class="spage-hero">
            <div class="spage-wrap">
                <a class="spage-back" href="{{route('home',app()->getLocale())}}">
                    <i data-lucide="arrow-right"></i>
                    <span  class="">Back to Home</span></a>
                <div class="spage-eyebrow">
                    <span class="">{{$skill->title}}</span>
                </div>
                <div class="spage-title ">{{$skill->page->hero_title}}</div>

                <p class="spage-desc ">{{$skill->page->hero_description}}</p>

                <div class="spage-stats">
                    @foreach($skill->metrics as $metric)
                        <div class="sps">
                            <div class="spsn">{{$metric->value}}</div>
                            <div class="spsl ">{{$metric->title}}</div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
        <div class="spage-body">
            <div class="spage-bwrap">
                <div class="spage-2col">
                    <div>
                        <div class="spage-st ">{{$skill->page->feature_title}}</div>
                        <ul class="spage-list">
                            @foreach($skill->features as $feature)
                                <li>
                                    <i data-lucide="check-circle-2"></i>
                                    <span class="">
                                        <strong>{{$feature->title}} :</strong>
                                        {{$feature->description}}</span>

                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <div>

                        <div class="spage-section-title " style="margin-bottom:1rem">
                            {{$skill->page->metric_title}}
                        </div>
                        <div class="steps">
                            @foreach($skill->tools as $tool)
                                <div class="step-i" style="margin-bottom: 1rem; padding: 1rem">
                                    <div class="step-n">
                                        <i data-lucide="{{$tool->icon}}"></i>
                                    </div>
                                    <div class="step-body">
                                        <div class="step-t">{{$tool->title}}</div>
                                        <div class="step-d ">{{$tool->description}}
                                        </div>

                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>

                <div
                    style="margin-top:3rem;padding:2.5rem;background:var(--or-pale);border:1px solid var(--or-border);border-radius:var(--r);text-align:center">
                    <h3 style="font-family:'Tajawal','Space Grotesk',sans-serif;font-size:24px;font-weight:900;color:var(--txt);margin-bottom:.75rem">
                        <span class="">{{$skill->page->cta_title}}</span>
                    </h3>
                    <p style="font-size:15px;color:var(--mu);margin-bottom:1.5rem">
                        <span class="">{{$skill->page->cta_description}}</span>
                    </p>
                    <a class="btn-pr" href="{{$skill->page->cta_button_url}}" target="_blank"><i
                            data-lucide="message-circle"></i>
                        <span class="">{{$skill->page->cta_button_text}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

