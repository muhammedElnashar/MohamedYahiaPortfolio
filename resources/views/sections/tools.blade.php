<section id="tools">
    <div class="si">
        <div class="eye"><span class="ari">المنصات والأدوات</span><span class="eni">Platforms & Tools</span></div>
        <h2 class="sh"><span class="ar">خبرة على جميع المنصات وأقوى أدوات السيو</span><span class="en">Expertise Across All Platforms & the Most Powerful SEO Tools</span>
        </h2>
        <!-- Skill highlights — clickable -->
        <div style="margin-top:1.5rem">
            <p style="font-size:11px;font-weight:700;color:var(--or);letter-spacing:2px;text-transform:uppercase;margin-bottom:1rem">
                <span class="ari">مهارات رئيسية</span><span class="eni">Core Skills</span></p>
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

        <!-- Platform specialization clickable cards -->
        <div style="margin-top:2.5rem">
            <p style="font-size:11px;font-weight:700;color:var(--or);letter-spacing:2px;text-transform:uppercase;margin-bottom:1rem">
                <span class="ari">تخصص حسب المنصة</span><span class="eni">Platform Specializations</span></p>

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
                                    >                                @endif
                            </span>
                            <span
                                class="">{{$platform->name}}</span></span>

                    @endforeach

                </div>
            </div>


            <div
                style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:1rem;margin-bottom:1.5rem">
                <div onclick="openSvc('salla')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="store"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو سلة</span><span class="en">Salla SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">خبير سيو متخصص في منصة سلة — 50+ متجر، نتائج موثقة</span><span
                            class="eni">Salla SEO specialist — 50+ stores, documented GSC results</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="openSvc('zid')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="shopping-bag"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو زد</span><span class="en">Zid SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">متخصص في رفع ترتيب متاجر زد — 164K نقرة/شهر كأعلى نتيجة</span><span
                            class="eni">Zid SEO specialist — 164K clicks/month peak result</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="openSvc('wordpress')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="globe"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو WordPress</span><span class="en">WordPress SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">خبير سيو ووردبريس — تقني، محتوى، WooCommerce وMultisite</span><span
                            class="eni">WordPress SEO expert — technical, content, WooCommerce & Multisite</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="openSvc('shopify')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="shopping-cart"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو Shopify</span><span class="en">Shopify SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو شوبيفاي للمتاجر العربية والدولية — Collections وProduct Pages</span><span
                            class="eni">Shopify SEO for Arab & global stores — Collections & Product Pages</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-woocommerce')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="package"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو WooCommerce</span><span class="en">WooCommerce SEO</span></span>
                        </div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">تحسين متاجر WooCommerce — منتجات وفئات ومراجعات وSchema</span><span
                            class="eni">WooCommerce optimization — products, categories, reviews & Schema</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-magento')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="layers"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو Magento</span><span class="en">Magento SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو Magento 2 للمتاجر الكبيرة — Crawl Budget وCanonical وSchema</span><span
                            class="eni">Magento 2 SEO for large stores — Crawl Budget, Canonical & Schema</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-laravel')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="code-2"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو Laravel</span><span class="en">Laravel SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو مخصص لتطبيقات Laravel — Server-Side Rendering وSSR وMeta</span><span
                            class="eni">Custom Laravel SEO — Server-Side Rendering, SSR & Meta tags</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-react')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="zap"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span class="ar">سيو React/Next.js</span><span
                                    class="en">React/Next.js SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو تطبيقات React وNext.js — SSR وSSG وCore Web Vitals</span><span
                            class="eni">React & Next.js SEO — SSR, SSG & Core Web Vitals</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-nextjs')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="cpu"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو Next.js</span><span class="en">Next.js SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو Next.js — Hydration وMeta وStructured Data</span><span
                            class="eni">Next.js SEO — Hydration, Meta & Structured Data</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-netdjango')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="server"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span class="ar">سيو .NET & Django</span><span
                                    class="en">.NET & Django SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو .NET وDjango وPython — Technical SEO وServer Rendering</span><span
                            class="eni">ASP.NET & Django SEO — Technical SEO & Server Rendering</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-wix')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="layout"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span class="ar">سيو Wix/Squarespace</span><span
                                    class="en">Wix/Squarespace SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو منصات Wix وSquarespace — تحسين On-Page والمحتوى والروابط</span><span
                            class="eni">Wix & Squarespace SEO — On-Page, content & link building</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-hubspot')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="bar-chart-2"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو HubSpot</span><span class="en">HubSpot SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو HubSpot CMS — Pillar Pages وTopic Clusters وContent Hub</span><span
                            class="eni">HubSpot CMS SEO — Pillar Pages, Topic Clusters & Content Hub</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-googleplay')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="smartphone"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px">ASO Google Play</span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">تحسين ترتيب التطبيقات في Google Play — Keywords وScreenshots وRating</span><span
                            class="eni">Google Play ranking optimization — Keywords, Screenshots & Rating</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-appstore')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="tablet"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px">ASO App Store</span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">ASO متخصص لـ App Store — Title وKeywords وLocalization وReviews</span><span
                            class="eni">Specialized App Store ASO — Title, Keywords, Localization & Reviews</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-opencart')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="truck"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو OpenCart</span><span class="en">OpenCart SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو متجر OpenCart — URLs وMeta وSchema وسرعة التحميل</span><span
                            class="eni">OpenCart store SEO — URLs, Meta, Schema & loading speed</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
                <div onclick="showPage('page-plt-webflow')"
                     style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--rs);padding:1.25rem;cursor:pointer;transition:all .2s;display:flex;flex-direction:column;gap:.5rem"
                     onmouseover="this.style.borderColor='var(--or)';this.style.transform='translateY(-2px)'"
                     onmouseout="this.style.borderColor='var(--brd)';this.style.transform='translateY(0)'">
                    <div style="display:flex;align-items:center;justify-content:space-between;gap:.5rem">
                        <div style="display:flex;align-items:center;gap:.6rem"><i data-lucide="pen-tool"
                                                                                  style="width:18px;height:18px;stroke:var(--or);fill:none"></i><span
                                style="font-weight:800;color:var(--txt);font-size:14px"><span
                                    class="ar">سيو Webflow</span><span class="en">Webflow SEO</span></span></div>
                    </div>
                    <p style="font-size:11.5px;color:var(--mu);margin:0;line-height:1.55"><span class="ari">سيو Webflow — CMS وCollections وSchema وCore Web Vitals</span><span
                            class="eni">Webflow SEO — CMS, Collections, Schema & Core Web Vitals</span></p>
                    <span style="font-size:11px;color:var(--or);font-weight:700;margin-top:auto"><span class="ari">اعرف أكثر ←</span><span
                            class="eni">Learn More →</span></span>
                </div>
            </div>
        </div>


        <div style="margin-top:2.5rem"><p
                style="font-size:11px;font-weight:700;color:var(--or);letter-spacing:2px;text-transform:uppercase;margin-bottom:1rem">
                <span class="ari">أدوات SEO</span><span class="eni">SEO Tools</span></p>
            <div class="tool-grid">
                @foreach($seoTools as $seoTool)
                    <div class="tool">
                        <div class="tool-dot"></div>
                        <span class="tool-n">{{$seoTool->title}}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
