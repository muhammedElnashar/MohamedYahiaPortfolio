@extends('layouts.app')
@section('content')

    <div id="page-about" class="">
        <div class="spage">
            <div class="spage-hero">
                <div class="spage-wrap">
                    <button class="spage-back" onclick="goHome()"><i data-lucide="arrow-right" id="back-icon-about"></i><span class="ari">العودة للرئيسية</span><span class="eni">Back to Home</span></button>
                    <div class="spage-eyebrow"><span class="ari">عني — القصة الكاملة</span><span class="eni">About — The Full Story</span></div>
                    <h1 class="spage-title">
                        <span class="ar">محمد يحيى — <span class="or">خبير SEO وذكاء اصطناعي</span></span>
                        <span class="en">Mohamed Yahia — <span class="or">SEO & AI Search Expert</span></span>
                    </h1>
                    <p class="spage-desc">
                        <span class="ari">مهندس حاسبات تحوّل لخبير SEO — أكثر من 6 سنوات من النتائج الحقيقية في السوق السعودي والخليجي والأسواق الدولية. 300+ موقع ومتجر، تدريب عشرات الفرق، وأنظمة SEO مبنية بـ Python وAI.</span>
                        <span class="eni">A computer engineer turned SEO expert — 6+ years of real results in Saudi, Gulf, and international markets. 300+ sites and stores, training dozens of teams, and SEO systems built with Python and AI.</span>
                    </p>
                    <div class="spage-stats">
                        <div class="sps"><div class="spsn">300+</div><div class="spsl"><span class="ari">موقع ومتجر</span><span class="eni">Sites & Stores</span></div></div>
                        <div class="sps"><div class="spsn">6+</div><div class="spsl"><span class="ari">سنوات خبرة</span><span class="eni">Years Experience</span></div></div>
                        <div class="sps"><div class="spsn">80%</div><div class="spsl"><span class="ari">تقدير الهندسة</span><span class="eni">Engineering Grade</span></div></div>
                        <div class="sps"><div class="spsn">5.0</div><div class="spsl"><span class="ari">تقييم مستقل</span><span class="eni">Mostaql Rating</span></div></div>
                    </div>
                </div>
            </div>

            <div class="spage-body">
                <div class="spage-bwrap">

                    <div class="spage-2col" style="margin-bottom:3.5rem">
                        <div>
                            <div class="spage-st"><span class="ari">القصة</span><span class="eni">The Story</span></div>
                            <p style="font-size:14px;color:var(--mu);line-height:1.85;margin-bottom:1rem">
                                <span class="ari">بدأت رحلتي من كلية الهندسة — قسم حاسبات ونظم تحكم — حيث تخرجت بتقدير 80%. أعطتني الهندسة شيئاً نادراً في عالم SEO: <strong style="color:var(--txt)">العقلية التحليلية والخلفية التقنية البرمجية</strong> اللي بتفرق بين خبير SEO عادي وخبير تقني حقيقي.</span>
                                <span class="eni">My journey started at the Faculty of Engineering — Computer Science and Control Systems — graduating with 80%. Engineering gave me something rare in SEO: the <strong style="color:var(--txt)">analytical mindset and technical programming background</strong> that distinguishes an ordinary SEO from a real technical expert.</span>
                            </p>
                            <p style="font-size:14px;color:var(--mu);line-height:1.85;margin-bottom:1rem">
                                <span class="ari">خلال 6+ سنوات عملت على أكثر من 300 موقع ومتجر — من المتاجر الإلكترونية على سلة وزد وShopify، للمواقع المبرمجة بـ Laravel وNext.js وDjango وReact وأي framework. الفارق؟ أفهم الكود بنفسي وأنفّذ التحسينات التقنية مباشرة.</span>
                                <span class="eni">Over 6+ years I worked on 300+ websites and stores — from e-commerce stores on Salla, Zid, and Shopify, to sites built with Laravel, Next.js, Django, React, and any framework. The difference? I understand code myself and implement technical improvements directly.</span>
                            </p>
                            <p style="font-size:14px;color:var(--mu);line-height:1.85">
                                <span class="ari">درّبت عشرات الفرق في شركات في السعودية والإمارات والخليج، وبنيت أنظمة SEO متكاملة تجمع بين الأتمتة وPython والذكاء الاصطناعي. اليوم أعمل مع عملاء في السعودية والإمارات والخليج والأسواق الأوروبية والأمريكية والألمانية.</span>
                                <span class="eni">I trained dozens of teams at companies in Saudi Arabia, UAE, and the Gulf, and built comprehensive SEO systems combining automation, Python, and AI. Today I work with clients in Saudi Arabia, UAE, the Gulf, and European, American, and German markets.</span>
                            </p>
                        </div>
                        <div>
                            <div class="spage-st"><span class="ari">المسيرة المهنية</span><span class="eni">Career Journey</span></div>
                            <div class="steps">
                                <div class="step-i">
                                    <div class="step-n">01</div>
                                    <div class="step-body">
                                        <div class="step-t"><span class="ari">🎓 هندسة حاسبات ونظم تحكم</span><span class="eni">🎓 Computer Science & Control Systems</span></div>
                                        <div class="step-d"><span class="ari">تخرجت بتقدير 80%. الخلفية البرمجية والتحليلية أساس كل عملي في Technical SEO وبناء الأنظمة.</span><span class="eni">Graduated with 80%. Programming and analytical background is the foundation of all my Technical SEO and systems work.</span></div>
                                    </div>
                                </div>
                                <div class="step-i">
                                    <div class="step-n">02</div>
                                    <div class="step-body">
                                        <div class="step-t"><span class="ari">🔍 بناء خبرة SEO شاملة</span><span class="eni">🔍 Building Comprehensive SEO Expertise</span></div>
                                        <div class="step-d"><span class="ari">عملت على مئات المواقع والمتاجر عبر كل المنصات — Technical SEO والمحتوى والمتاجر والسيو الدولي.</span><span class="eni">Worked on hundreds of sites and stores across all platforms — Technical SEO, content, stores, and international SEO.</span></div>
                                    </div>
                                </div>
                                <div class="step-i">
                                    <div class="step-n">03</div>
                                    <div class="step-body">
                                        <div class="step-t"><span class="ari">🏢 تدريب الفرق في الخليج</span><span class="eni">🏢 Training Teams Across the Gulf</span></div>
                                        <div class="step-d"><span class="ari">درّبت فرق SEO في شركات سعودية وإماراتية وخليجية، وأشرفت على بناء مواقع تراعي SEO من اليوم الأول.</span><span class="eni">Trained SEO teams at Saudi, UAE, and Gulf companies, and supervised building sites with SEO integrated from day one.</span></div>
                                    </div>
                                </div>
                                <div class="step-i">
                                    <div class="step-n">04</div>
                                    <div class="step-body">
                                        <div class="step-t"><span class="ari">🤖 AI Search وأنظمة Python</span><span class="eni">🤖 AI Search & Python Systems</span></div>
                                        <div class="step-d"><span class="ari">الآن أبني أنظمة SEO بالذكاء الاصطناعي وPython، وأتخصص في AEO وGEO والظهور في ChatGPT وGemini وPerplexity.</span><span class="eni">Now building AI and Python SEO systems, specializing in AEO, GEO, and visibility in ChatGPT, Gemini, and Perplexity.</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="spage-2col" style="margin-bottom:3.5rem">
                        <div style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--r);padding:1.75rem">
                            <div class="spage-st" style="margin-bottom:1.25rem"><span class="ari">📚 التعليم</span><span class="eni">📚 Education</span></div>
                            <div style="display:flex;gap:14px;align-items:flex-start;padding-bottom:1.25rem;border-bottom:1px solid var(--brd);margin-bottom:1.25rem">
                                <div style="width:44px;height:44px;border-radius:var(--rs);background:var(--or-pale);border:1px solid var(--or-border);display:flex;align-items:center;justify-content:center;flex-shrink:0"><i data-lucide="graduation-cap" style="width:20px;height:20px;stroke:var(--or)"></i></div>
                                <div>
                                    <div style="font-size:15px;font-weight:700;color:var(--txt);margin-bottom:3px"><span class="ari">بكالوريوس هندسة حاسبات ونظم تحكم</span><span class="eni">B.Sc. Computer Science & Control Systems</span></div>
                                    <div style="font-size:13px;color:var(--or);font-weight:600"><span class="ari">كلية الهندسة — تقدير 80%</span><span class="eni">Faculty of Engineering — Grade 80%</span></div>
                                    <div style="font-size:12px;color:var(--mu);margin-top:4px"><span class="ari">متخصص في الخوارزميات والبرمجة وتحليل البيانات — الأساس لكل Technical SEO</span><span class="eni">Specialized in algorithms, programming & data analysis — foundation for all Technical SEO</span></div>
                                </div>
                            </div>
                            <div style="display:flex;gap:14px;align-items:flex-start">
                                <div style="width:44px;height:44px;border-radius:var(--rs);background:var(--or-pale);border:1px solid var(--or-border);display:flex;align-items:center;justify-content:center;flex-shrink:0"><i data-lucide="award" style="width:20px;height:20px;stroke:var(--or)"></i></div>
                                <div>
                                    <div style="font-size:15px;font-weight:700;color:var(--txt);margin-bottom:3px"><span class="ari">خبير SEO معتمد — مستقل.كوم</span><span class="eni">Certified SEO Expert — Mostaql</span></div>
                                    <div style="font-size:13px;color:var(--or);font-weight:600"><span class="ari">موثق على مستقل · تقييم 5.0 · إتمام 100%</span><span class="eni">Mostaql Verified · 5.0 Rating · 100% Completion</span></div>
                                </div>
                            </div>
                        </div>

                        <div style="background:var(--sur);border:1px solid var(--brd);border-radius:var(--r);padding:1.75rem">
                            <div class="spage-st" style="margin-bottom:1.25rem"><span class="ari">⚡ منهجيتي</span><span class="eni">⚡ My Philosophy</span></div>
                            <ul class="spage-list">
                                <li><i data-lucide="check-circle-2"></i><span><span class="ari"><strong>البيانات قبل الرأي</strong> — كل قرار مبني على تحليل حقيقي</span><span class="eni"><strong>Data before opinion</strong> — every decision built on real analysis</span></span></li>
                                <li><i data-lucide="check-circle-2"></i><span><span class="ari"><strong>الخلفية التقنية</strong> — أفهم الكود وأنفّذ بنفسي</span><span class="eni"><strong>Technical background</strong> — I understand code and implement directly</span></span></li>
                                <li><i data-lucide="check-circle-2"></i><span><span class="ari"><strong>النتائج الدائمة</strong> — SEO يستمر سنوات لا أسابيع</span><span class="eni"><strong>Lasting results</strong> — SEO that lasts years, not weeks</span></span></li>
                                <li><i data-lucide="check-circle-2"></i><span><span class="ari"><strong>الشفافية الكاملة</strong> — تقارير واضحة ومفهومة</span><span class="eni"><strong>Full transparency</strong> — clear and understandable reports</span></span></li>
                                <li><i data-lucide="check-circle-2"></i><span><span class="ari"><strong>التطوير المستمر</strong> — أتابع Google وAI يومياً</span><span class="eni"><strong>Continuous learning</strong> — following Google and AI daily</span></span></li>
                            </ul>
                        </div>
                    </div>

                    <div style="margin-bottom:3rem">
                        <div class="spage-st"><span class="ari">التخصصات والمهارات</span><span class="eni">Specialties & Skills</span></div>
                        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(160px,1fr));gap:10px;margin-top:1.5rem">
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">Technical SEO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">AI Search / AEO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">GEO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">Ecommerce SEO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">Programmatic SEO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">International SEO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">Local SEO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">YouTube SEO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">ASO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">CRO</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">Link Building</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">SEO Automation</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">Python / APIs</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">Schema Markup</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">Core Web Vitals</div></div>
                            <div class="tool"><div class="tool-dot"></div><div class="tool-n">SEM / Google Ads</div></div>
                        </div>
                    </div>

                    <div style="background:linear-gradient(135deg,var(--or-pale),var(--bg3));border:1px solid var(--or-border);border-radius:var(--r);padding:2.5rem;text-align:center">
                        <div style="font-family:'Tajawal','Space Grotesk',sans-serif;font-size:24px;font-weight:900;color:var(--txt);margin-bottom:.75rem"><span class="ari">جاهز تشتغل مع خبير SEO حقيقي؟</span><span class="eni">Ready to work with a real SEO expert?</span></div>
                        <p style="font-size:14px;color:var(--mu);max-width:500px;margin:0 auto 1.5rem"><span class="ari">تواصل الآن للحصول على استشارة مجانية وخطة عمل مخصصة لموقعك.</span><span class="eni">Contact now for a free consultation and a custom action plan for your website.</span></p>
                        <a class="btn-pr" href="https://wa.me/201123269452" target="_blank" style="display:inline-flex;text-decoration:none"><i data-lucide="message-circle"></i><span class="ari">تواصل على واتساب</span><span class="eni">Chat on WhatsApp</span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
