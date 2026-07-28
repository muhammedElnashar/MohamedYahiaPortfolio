<div id="page-zid" class="">

    <div class="spage">

        <div class="spage-hero">
            <div class="spage-wrap">
                <a href="{{route('home',app()->getLocale())}}" class="spage-back"><i data-lucide="arrow-right"
                                              style="width:16px;height:16px;stroke:currentColor;fill:none"></i>
                    <span class="">Back</span>
                </a>
                <div class="spage-eyebrow"><i data-lucide="shopping-cart"
                                              style="width:14px;height:14px;vertical-align:middle;stroke:var(--or);fill:none"></i>
                    <span class="">{{$platform->name}}</span></div>
                <h1 class="spage-title ">{{$platform->title}}</h1>

                <p class="spage-desc ">{{$platform->description}}</p>
                <div class="spage-stats">
                    @foreach($platform->heroStats as $stats)
                        <div class="sp-stat">
                            <div class="sp-stat-val">{{$stats->value}}</div>
                            <div class="sp-stat-lab">{{$stats->label}}
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>

        <div class="spage-body">
            <div class="spage-bwrap">

                <!-- 1. PROBLEMS -->
                <section class="plt-section">
                    <div class="plt-sec-label">{{$platform->challenges_badge}}</div>
                    <h2 class="plt-sec-title ">{{$platform->challenges_title}}</h2>
                    <div class="plt-problems-grid">
                        @foreach($platform->challenges as $challenge)
                            <div class="plt-problem-card">
                                <div class="plt-problem-icon"><i data-lucide="{{$challenge->icon}}"></i></div>
                                <div class="plt-problem-body">
                                    <div class="plt-problem-title">{{$challenge->title}}</div>
                                    <p class="plt-problem-desc">
                                        {{$challenge->description}}
                                    </p></div>
                            </div>

                        @endforeach

                    </div>
                </section>

                <!-- 2. SERVICES -->
                <section class="plt-section plt-section-alt">
                    <div class="plt-sec-label">
                        {{$platform->services_badge}}
                    </div>
                    <h2 class="plt-sec-title ">{{$platform->services_title}}</h2>
                    <div class="plt-services-grid">
                        @foreach($platform->services as $service)
                            <div class="plt-svc-card">
                                <div class="plt-svc-icon"><i data-lucide="{{$service->icon}}"></i></div>
                                <div class="plt-svc-title">
                                {{$service->title}}
                                </div>
                                <p class="plt-svc-desc">
                                    {{$service->description}}
                                  </p>
                            </div>

                        @endforeach

                    </div>
                </section>

                <!-- 3. PROCESS -->
                <section class="plt-section">
                    <div class="plt-sec-label">{{$platform->process_badge}}</div>
                    <h2 class="plt-sec-title ">{{$platform->process_title}}</h2>
                    <div class="plt-process">
                        @foreach($platform->processes as $process)
                            <div class="plt-step">
                                <div class="plt-step-num">{{$process->step}}</div>
                                <div class="plt-step-body">
                                    <div class="plt-step-title">{{$process->title}}</div>
                                    <p class="plt-step-desc">{{$process->description}}</p>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </section>

                <!-- 4. WHY ME -->
                <section class="plt-section plt-section-alt">
                    <div class="plt-sec-label">{{$platform->advantages_badge}}</div>
                    <h2 class="plt-sec-title ">{{$platform->advantages_title}}</h2>
                    <div class="plt-why-grid">
                        @foreach($platform->advantages as $advantage)
                            <div class="plt-why-card">
                                <div class="plt-why-icon"><i data-lucide="{{$advantage->icon}}"></i></div>
                                <div class="plt-why-title">{{$advantage->title}}</div>
                                <p class="plt-why-desc">{{$advantage->description}}</p></div>

                        @endforeach
                    </div>
                </section>

                <!-- 5. SEO & AI GROWTH SYSTEM -->
                <section class="plt-section">
                    <div class="plt-sec-label">{{$platform->methodology_badge}}</div>
                    <h2 class="plt-sec-title ">{{$platform->methodology_title}}</h2>
                    <p class="plt-sec-sub ">{{$platform->methodology_description}}</p>
                    <div class="growth-grid">
                        @foreach($platform->methodologies as $methodology)
                            <div class="growth-card">
                                <div class="growth-num">{{$methodology->number}}</div>
                                <div class="growth-icon"><i data-lucide="{{$methodology->icon}}"></i></div>
                                <div class="growth-title">{{$methodology->title}}</div>
                                <p class="growth-desc">{{$methodology->description}}</p>
                            </div>

                        @endforeach

                    </div>
                </section>

                <!-- 6. CASE STUDIES -->
                <section class="plt-section plt-section-alt">
                    <div class="plt-sec-label">{{$platform->statistics_badge}}</div>
                    <h2 class="plt-sec-title ">{{$platform->statistics_title}}</h2>
                    <p class="plt-sec-sub ">{{$platform->statistics_description}}</p>
                    <div class="seo-facts-grid">

                        @foreach($platform->statistics as $statistic)
                            <div class="seo-fact-card seo-fact-card--ai">
                                @if($statistic->badge)
                                    <div class="seo-fact-badge">{{$statistic->badge}}</div>

                                @endif
                                <div class="seo-fact-val">{{$statistic->value}}<span class="seo-fact-unit">%</span></div>
                                <p class="seo-fact-desc">{{$statistic->description}}</p>
                                <div class="seo-fact-src">{{$statistic->source}}</div>
                            </div>

                        @endforeach



                    </div>
                </section>

                <!-- 7. COMPARISON -->
                <section class="plt-section">
                    <div class="plt-sec-label">{{$platform->comparison_badge}}</div>
                    <h2 class="plt-sec-title ">{{$platform->comparison_title}}</h2>
                    <div class="plt-compare-wrap">
                        <table class="plt-compare-table">
                            <thead>
                            <tr>
                                <th><span class="">Criteria</span></th>
                                <th class="plt-col-me"><i data-lucide="check-circle"
                                                          style="width:14px;height:14px;fill:none;stroke:var(--or)"></i>
                                   <span class="">Mohamed Yahia</span></th>
                                <th><span class="">General Freelancer</span></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($platform->comparisons as $comparison)
                                <tr>
                                    <td>{{$comparison->criterion}}</td>
                                    <td class="plt-col-me plt-yes"><i data-lucide="check" style="width:14px;height:14px;fill:none;stroke:var(--or)"></i>
                                       <p>{{$comparison->specialist_value}}</p>
                                      </td>
                                    <td class="plt-no"><i data-lucide="x" style="width:14px;height:14px;fill:none;stroke:#888"></i><p>{{$comparison->competitor_value}}</p> </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- 8. FAQ -->
                <section class="plt-section plt-section-alt">

                    <div class="plt-sec-label">
                        {{ $platform->faq_badge }}
                    </div>

                    <h2 class="plt-sec-title">
                        {{ $platform->faq_title }}
                    </h2>

                    <div class="faq-list">
                        @foreach($platform->faqs as $faq)
                            <details class="faq-item">

                                <summary class="faq-q">
                                    {{$faq->question}}
                                    <i data-lucide="chevron-down" class="faq-chev"></i>
                                </summary>

                                <div class="faq-a">
                                    <p>
                                        {{$faq->answer}}
                                    </p>
                                </div>

                            </details>

                        @endforeach

                    </div>

                </section>
                <!-- 9. PHILOSOPHY -->
                <section class="plt-section">
                    <div class="plt-sec-label">
                        {{$platform->philosophy_badge}}
                    </div>
                    <h2 class="plt-sec-title ">{{$platform->philosophy_title}}</h2>

                    <blockquote class="phi-quote en">
                        {{$platform->philosophy_quote}}
                    </blockquote>
                    <div class="phi-points">
                        @foreach($platform->philosophy as $philosophy)
                            <div class="phi-point">
                                <div class="phi-dot"></div>
                                <div class="phi-body">
                                    <div class="phi-title">{{$philosophy->title}}</div>
                                    <p class="phi-desc">{{$philosophy->description}}</p>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </section>

                <!-- 10. CTA -->
                <div class="spage-cta">
                    <h2 class="">{{$platform->cta_title}}</h2>
                    <p class="">{{$platform->cta_description}}</p>
                    <a href="{{$platform->cta_url}}" target="_blank"
                       style="display:inline-flex;align-items:center;gap:.6rem;background:linear-gradient(135deg,#E86A1A,#FF7C2A);color:#fff;padding:.9rem 2rem;border-radius:50px;font-weight:700;text-decoration:none;font-size:1rem;margin-top:1rem;box-shadow:0 4px 20px rgba(232,106,26,.35)">
                        <i data-lucide="message-circle" style="width:18px;height:18px;stroke:#fff;fill:none"></i>
                        {{$platform->cta_button}}
                    </a>
                </div>
                <!-- 11. CONTACT -->
                <div class="spage-contact-footer"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:2rem;margin-top:2rem">

                    <h3 style="font-size:1.2rem;font-weight:700;margin-bottom:.5rem">
                        <span class="">Contact Me Directly</span>
                    </h3>

                    <p style="color:var(--mu);margin-bottom:1.5rem;font-size:.9rem">
                        <span class="">Leave your details and I will reply as soon as possible</span>
                    </p>

                    <form class="whatsapp-contact-form"
                          style="display:flex;flex-direction:column;gap:.75rem">

                        <input
                            type="text"
                            name="name"
                            placeholder=" Your name"
                            required
                            style="background:var(--bg);border:1px solid var(--brd);border-radius:8px;padding:.75rem 1rem;color:var(--txt);font-size:.95rem;width:100%;box-sizing:border-box"
                        >

                        <input
                            type="url"
                            name="site"
                            placeholder=" Your site URL"
                            style="background:var(--bg);border:1px solid var(--brd);border-radius:8px;padding:.75rem 1rem;color:var(--txt);font-size:.95rem;width:100%;box-sizing:border-box"
                        >

                        <textarea
                            name="message"
                            rows="3"
                            placeholder=" Your message"
                            required
                            style="background:var(--bg);border:1px solid var(--brd);border-radius:8px;padding:.75rem 1rem;color:var(--txt);font-size:.95rem;width:100%;box-sizing:border-box;resize:vertical"
                        ></textarea>

                        <button
                            type="submit"
                            style="background:linear-gradient(135deg,#E86A1A,#FF7C2A);color:#fff;border:none;border-radius:8px;padding:.8rem 1.5rem;font-weight:700;cursor:pointer;font-size:.95rem;display:flex;align-items:center;gap:.5rem;justify-content:center"
                        >
                            <i data-lucide="send"
                               style="width:16px;height:16px;stroke:#fff;fill:none"></i>

                            <span class="">Send via WhatsApp</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
