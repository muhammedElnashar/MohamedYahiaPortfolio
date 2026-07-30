<?php

namespace Database\Seeders;

use App\Enums\CardSectionKey;
use App\Enums\CtaTypeEnum;
use App\Enums\ProcessSectionKey;
use App\Enums\ServiceSectionHeadingKey;
use App\Enums\StatisticsSectionKey;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class FullSeoAuditSeeder extends Seeder
{
    public function run(): void
    {
        $service = Service::create([
            'title' => [
                'en' => 'Full SEO Audit',
                'ar' => 'تدقيق SEO الشامل',
            ],
            'slug' => 'full-seo-audit',
            'icon' => 'trending-up',
            'category_id' => ServiceCategory::where('slug', 'technical')->first()->id,
            'short_description' => [
                'en' => 'Complete site analysis: technical errors, structure, keywords, and competitors with a clear action plan.',
                'ar' => 'تحليل كامل للموقع: الأخطاء التقنية، البنية، الكلمات المفتاحية، والمنافسين مع خطة عمل.',
            ],
            'hero_title' => [
                'en' => 'Full SEO Audit — Precise Diagnosis for Every Site Issue',
                'ar' => 'تدقيق SEO شامل — تشخيص دقيق لكل مشاكل موقعك',
            ],
            'hero_description' => [
                'en' => 'Complete analysis: technical errors, structure, keywords, competitors, with a clear action plan to dominate search results.',
                'ar' => 'تحليل شامل: الأخطاء التقنية، البنية، الكلمات المفتاحية، والمنافسين، مع خطة عمل واضحة للسيطرة على نتائج البحث.',
            ],
            'meta_title' => [
                'en' => 'Full SEO Audit Service',
                'ar' => 'خدمة تدقيق SEO الشامل',
            ],
            'meta_description' => [
                'en' => 'Complete SEO audit for technical issues, content, keywords and competitors.',
                'ar' => 'تدقيق SEO شامل للمشاكل التقنية، المحتوى، الكلمات المفتاحية والمنافسين.',
            ],
        ]);

        $hero = $service->statisticsSections()->create([
            'type' => 'stat',
            'key' => StatisticsSectionKey::HERO,
            'title' => 'Hero Statistics',
        ]);

        $hero->stats()->createMany([
            [
                'value' => '300+',
                'label' => [
                    'en' => 'Sites Audited',
                    'ar' => 'موقع مُدقَّق',
                ],
            ],
            [
                'value' => '48h',
                'label' => [
                    'en' => 'Delivery Time',
                    'ar' => 'وقت التسليم',
                ],
            ],
            [
                'value' => '100%',
                'label' => [
                    'en' => 'Full Transparency',
                    'ar' => 'شفافية كاملة',
                ],
            ],
            [
                'value' => '6+',
                'label' => [
                    'en' => 'Years Exp.',
                    'ar' => 'سنوات خبرة',
                ],
            ],
        ]);

        // Pain Points
        $service->painPoints()->createMany([
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'Your Google rankings dropped suddenly with no clear reason',
                    'ar' => 'ترتيبك في Google تراجع فجأة دون سبب واضح',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart-2',
                'title' => [
                    'en' => 'Many of your pages are not indexed in Google Search Console',
                    'ar' => 'صفحات كثيرة من موقعك غير مُفهرسة في Google Search Console',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Your site is slow and failing Core Web Vitals tests',
                    'ar' => 'موقعك بطيء ويفشل في اختبار Core Web Vitals'
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'trending-down',
                'title' => [
                    'en' => 'Google Ads performs but organic SEO brings nothing',
                    'ar' => 'حملات Google Ads تحقق نتائج لكن الـ SEO لا يحقق شيئاً',
                ],
                'sort_order' => 4,
            ],
            [
                'icon' => 'alert-circle',
                'title' => [
                    'en' => 'Competitors rank for keywords that should be yours',
                    'ar' => 'منافسوك يتصدرون كلمات مفتاحية كان من المفترض أن تكون لك',
                ],
                'sort_order' => 5,
            ],
            [
                'icon' => 'eye-off',
                'title' => [
                    'en' => 'You launched or rebuilt a site and saw a traffic drop',
                    'ar' => 'أطلقت موقعاً جديداً أو أعدت بنائه ولاحظت انخفاض الزيارات',
                ],
                'sort_order' => 6,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'You don\'t know where to start with your site\'s SEO',
                    'ar' => 'لا تعرف من أين تبدأ في تحسين SEO موقعك',
                ],
                'sort_order' => 7,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'You received a Google penalty or notice an algorithmic filter',
                    'ar' => 'تلقيت عقوبة من Google أو لاحظت فلتر على موقعك',
                ],
                'sort_order' => 8,
            ],
        ]);

        $service->contentSections()->createMany([
            [
                'section_key' => ServiceSectionHeadingKey::SIGNS_YOU_NEED_THIS,
                'eyebrow' => ['en' => 'Why SEO?', 'ar' => 'لماذا SEO؟'],
                'title' => ['en' => 'Without SEO, you don\'t exist online', 'ar' => 'بدون SEO، أنت غير موجود على الإنترنت'],
                'content' => ['en' => 'Google processes 8.5 billion searches daily — your clients are searching right now. The question: do they find you?', 'ar' => 'تعالج جوجل 8.5 مليار عملية بحث يومياً — عملاؤك يبحثون الآن. السؤال: هل يجدونك؟'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::DEEP_Dive,
                'eyebrow' => ['en' => 'Deep Dive', 'ar' => 'تعمق'],
                'title' => ['en' => 'Full SEO Audit — Why Your Business Needs It', 'ar' => 'تدقيق SEO الشامل — لماذا تحتاجه شركتك؟'],
                'content' => ['en' => 'A Full SEO Audit is the true starting point for any successful strategy. Without an accurate diagnosis of your site current state, any effort you put into content, links, or technical fixes will be blind.', 'ar' => 'تدقيق SEO الشامل هو نقطة البداية الحقيقية لأي استراتيجية ناجحة. بدون تشخيص دقيق للحالة الحالية لموقعك، فإن أي جواب تبذله في المحتوى أو الروابط أو الإصلاحات التقنية سيكون أعمى.'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::WHY_SERVICE,
                'eyebrow' => ['en' => 'Why This Service?', 'ar' => 'لماذا هذه الخدمة؟'],
                'title' => ['en' => 'What You Get from SEO Audit', 'ar' => 'ماذا تحصل عليه من تدقيق SEO؟'],
                'content' => ['en' => 'Every dollar invested in SEO Audit returns far higher value than paid ads — because organic ranking works 24/7 without additional cost.', 'ar' => 'كل دولار يُستثمر في تدقيق SEO يعود بقيمة أعلى بكثير من الإعلانات المدفوعة — لأن الترتيب العضوي يعمل 24/7 دون تكلفة إضافية.'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::MY_METHODOLOGY,
                'eyebrow' => ['en' => 'My Methodology', 'ar' => 'منهجيتي'],
                'title' => ['en' => 'How I Deliver SEO Audit?', 'ar' => 'كيف أقدم تدقيق SEO؟'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::DELIVERABLE,
                'title' => ['en' => 'What\'s Included', 'ar' => 'ما الذي تتضمنه الخدمة'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::OUR_PROCESS,
                'title' => ['en' => 'Our Process', 'ar' => 'آلية العمل'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::WHY_INVEST,
                'eyebrow' => ['en' => 'Why Invest In SEO?', 'ar' => 'لماذا تستثمر في SEO؟'],
                'title' => ['en' => 'SEO Is Not a Cost — It\'s the Best Digital Investment You Can Make', 'ar' => 'SEO ليس تكلفة — بل هو أفضل استثمار رقمي يمكنك القيام به'],
                'content' => ['en' => 'While ads stop when spending stops, SEO keeps delivering results for years through sustainable organic visibility.', 'ar' => 'بينما تتوقف الإعلانات عند توقف الإنفاق، فإن SEO يستمر في تحقيق النتائج لسنوات من خلال ظهور عضوي مستدام.'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::KEYWORDS,
                'title' => ['en' => 'Keywords Targeted for SEO Audit', 'ar' => 'الكلمات المفتاحية المستهدفة لتدقيق SEO'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::AUDIT_COVER,
                'title' => ['en' => 'What the Audit Covers', 'ar' => 'ماذا يغطي التدقيق'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::AUDIT_PROCESS_STEP,
                'title' => ['en' => 'Audit Process Steps', 'ar' => 'خطوات عملية التدقيق'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::AUDIT_DELIVERABLE,
                'title' => ['en' => 'Audit Deliverables', 'ar' => 'مخرجات التدقيق'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::PROBLEM,
                'eyebrow' => ['en' => 'Why This Matters', 'ar' => 'لماذا هذا مهم؟'],
                'title' => ['en' => 'Common Problems Costing You Rankings & Clients', 'ar' => 'مشاكل شائعة تكلفك ترتيبك وعملاءك'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::WHY_ME,
                'eyebrow' => ['en' => 'Why Me?', 'ar' => 'لماذا أنا؟'],
                'title' => ['en' => 'What Sets Me Apart as an SEO Expert', 'ar' => 'ما الذي يميزني كخبير SEO'],
                'content' => ['en' => 'Data-driven SEO methodology backed by years of experience across Saudi Arabia, UAE, Egypt and the Arab world.', 'ar' => 'منهجية SEO مبنية على البيانات مدعومة بسنوات من الخبرة في السعودية، الإمارات، مصر والعالم العربي.'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::MY_PROCESS,
                'eyebrow' => ['en' => 'My Process', 'ar' => 'آلية عملي'],
                'title' => ['en' => 'How I Deliver a Professional SEO Audit', 'ar' => 'كيف أقدم تدقيق SEO احترافي'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::COMPARISON,
                'eyebrow' => ['en' => 'The Comparison', 'ar' => 'المقارنة'],
                'title' => ['en' => 'SEO Expert vs. Traditional Methods', 'ar' => 'خبير SEO مقابل الطرق التقليدية'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::RELATED_SERVICE,
                'title' => ['en' => 'Related Services', 'ar' => 'خدمات ذات صلة'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::FAQ,
                'eyebrow' => ['en' => 'FAQ', 'ar' => 'الأسئلة الشائعة'],
                'title' => ['en' => 'Common SEO Audit Questions', 'ar' => 'أسئلة شائعة حول تدقيق SEO'],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::WHY_CHOOSE,
                'eyebrow' => ['en' => 'Why Choose Mohamed', 'ar' => 'لماذا تختار محمد'],
                'title' => ['en' => 'The Difference Between a Real Expert and the Rest', 'ar' => 'الفرق بين خبير حقيقي والباقي'],
            ],
        ]);

        // Benefits - Why This Service?
        $service->benefits()->createMany([
            [
                'icon' => 'check',
                'title' => ['en' => 'Uncovering Hidden Issues', 'ar' => 'كشف المشاكل الخفية'],
                'description' => ['en' => 'Uncovering technical and content issues blocking your rankings', 'ar' => 'الكشف عن المشاكل التقنية والمحتوى التي تعيق ترتيبك'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'check',
                'title' => ['en' => 'Clear Roadmap', 'ar' => 'خارطة طريق واضحة'],
                'description' => ['en' => 'Detailed report with immediately actionable priorities', 'ar' => 'تقرير مفصل بأولويات قابلة للتنفيذ فوراً'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'check',
                'title' => ['en' => 'Save Time & Money', 'ar' => 'وفّر الوقت والمال'],
                'description' => ['en' => 'Know what to fix first instead of working randomly', 'ar' => 'اعرف ما يجب إصلاحه أولاً بدلاً من العمل بشكل عشوائي'],
                'sort_order' => 3,
            ],
        ]);

        // Methodology
        $myMethodology = $service->processSections()->create([
            'type' => 'process',
            'key' => ProcessSectionKey::MY_METHODOLOGY,
            'title' => 'My Methodology',
        ]);

        $myMethodology->processSteps()->createMany([
            [
                'number' => 1,
                'title' => ['en' => 'Full Technical Scan', 'ar' => 'فحص تقني شامل'],
                'description' => ['en' => 'Full crawl with Screaming Frog + Core Web Vitals analysis', 'ar' => 'زحف كامل باستخدام Screaming Frog + تحليل Core Web Vitals'],
                'sort_order' => 1,
            ],
            [
                'number' => 2,
                'title' => ['en' => 'Content & Keyword Analysis', 'ar' => 'تحليل المحتوى والكلمات المفتاحية'],
                'description' => ['en' => 'Review every page, assess keyword targeting and cannibalization', 'ar' => 'مراجعة كل صفحة، تقييم استهداف الكلمات المفتاحية وتجنب التضارب'],
                'sort_order' => 2,
            ],
            [
                'number' => 3,
                'title' => ['en' => 'Link & Authority Analysis', 'ar' => 'تحليل الروابط والسلطة'],
                'description' => ['en' => 'Review backlink profile and identify toxic links', 'ar' => 'مراجعة ملف الروابط الخلفية وتحديد الروابط السامة'],
                'sort_order' => 3,
            ],
            [
                'number' => 4,
                'title' => ['en' => 'Priority Report', 'ar' => 'تقرير ذو أولوية'],
                'description' => ['en' => 'Visual report with Quick Wins and long-term priorities', 'ar' => 'تقرير مرئي مع المكاسب السريعة والأولويات طويلة الأمد'],
                'sort_order' => 4,
            ],
        ]);

        //Deliverables -  What's Included
        $service->deliverables()->createMany([
            [
                'icon' => 'check',
                'title' => ['en' => 'Full technical analysis: Crawl, Indexing, Redirects', 'ar' => 'تحليل تقني شامل: الزحف، الفهرسة، التحويلات'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'check',
                'title' => ['en' => 'Core Web Vitals and speed analysis', 'ar' => 'تحليل Core Web Vitals وسرعة الموقع'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'check',
                'title' => ['en' => 'Keyword research and competitor Gap Analysis', 'ar' => 'بحث الكلمات المفتاحية وتحليل فجوة المنافسين'],
                'sort_order' => 3,
            ],
            [
                'icon' => 'check',
                'title' => ['en' => 'Site structure and Internal Linking audit', 'ar' => 'تدقيق بنية الموقع والروابط الداخلية'],
                'sort_order' => 4,
            ],
            [
                'icon' => 'check',
                'title' => ['en' => 'Backlinks and Toxic Links analysis', 'ar' => 'تحليل الروابط الخلفية والروابط السامة'],
                'sort_order' => 5,
            ],
            [
                'icon' => 'check',
                'title' => ['en' => 'Detailed PDF report with priority action plan', 'ar' => 'تقرير PDF مفصل مع خطة عمل محددة بالأولويات'],
                'sort_order' => 6,
            ],
        ]);

        //Our Process
        $ourProcess = $service->processSections()->create([
            'type' => 'process',
            'key' => ProcessSectionKey::OUR_PROCESS,
            'title' => 'Our Process',
        ]);

        $ourProcess->processSteps()->createMany([
            [
                'number' => 1,
                'title' => ['en' => 'Analyze Site', 'ar' => 'تحليل الموقع'],
                'description' => ['en' => 'Analyze Site', 'ar' => 'تحليل الموقع'],
                'sort_order' => 1,
            ],
            [
                'number' => 2,
                'title' => ['en' => 'Find Issues', 'ar' => 'اكتشاف المشاكل'],
                'description' => ['en' => 'Find Issues', 'ar' => 'اكتشاف المشاكل'],
                'sort_order' => 2,
            ],
            [
                'number' => 3,
                'title' => ['en' => 'Prioritize', 'ar' => 'تحديد الأولويات'],
                'description' => ['en' => 'Prioritize', 'ar' => 'تحديد الأولويات'],
                'sort_order' => 3,
            ],
        ]);

        //stats - Invest
        $investment = $service->statisticsSections()->create([
            'type' => 'stat',
            'key' => StatisticsSectionKey::INVESTMENT,
            'title' => 'Investment Statistics',
        ]);

        $investment->stats()->createMany([
            [
                'value' => '14x',
                'label' => [
                    'en' => 'Return on Investment',
                    'ar' => 'العائد على الاستثمار',
                ],
                'description' => [
                    'en' => 'SEO ROI vs. average paid ads',
                    'ar' => 'عائد استثمار SEO مقارنة بمتوسط الإعلانات المدفوعة',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => '68%',
                'label' => [
                    'en' => 'Where Buying Journeys Start',
                    'ar' => 'حيث تبدأ رحلة الشراء',
                ],
                'description' => [
                    'en' => 'of online experiences begin with search',
                    'ar' => 'من التجارب عبر الإنترنت تبدأ بالبحث',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => '#1',
                'label' => [
                    'en' => 'Click Dominance',
                    'ar' => 'الهيمنة على النقرات',
                ],
                'description' => [
                    'en' => 'Position #1 captures 27%+ of all clicks',
                    'ar' => 'المركز الأول يجذب أكثر من 27% من النقرات',
                ],
                'sort_order' => 3,
            ],
            [
                'value' => '∞',
                'label' => [
                    'en' => 'Unlimited Sustainable Growth',
                    'ar' => 'نمو مستدام غير محدود',
                ],
                'description' => [
                    'en' => 'Results don’t stop — works 24/7',
                    'ar' => 'النتائج لا تتوقف — تعمل على مدار الساعة',
                ],
                'sort_order' => 4,
            ],
        ]);

        // Keywords
        $service->keywords()->createMany([
            ['keyword' => ['en' => 'SEO Audit', 'ar' => 'تدقيق سيو']],
            ['keyword' => ['en' => 'SEO Audit', 'ar' => 'سيو تدقيق']],
            ['keyword' => ['en' => 'Site Audit', 'ar' => 'فحص موقع']],
            ['keyword' => ['en' => 'SEO Report', 'ar' => 'تقرير سيو']],
            ['keyword' => ['en' => 'Site Analysis', 'ar' => 'تحليل موقع']],
            ['keyword' => ['en' => 'site audit', 'ar' => 'فحص موقع']],
            ['keyword' => ['en' => 'SEO Issues Check', 'ar' => 'كشف مشاكل سيو']],
            ['keyword' => ['en' => 'SEO Audit Report', 'ar' => 'تقرير تحسين محركات البحث']],
        ]);

        $auditCovers = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Audit_Cover,
            'title' => 'Audit Covers',
        ]);

        $auditCovers->cards()->createMany([
            [
                'icon' => 'settings',
                'title' => ['en' => 'Technical Audit', 'ar' => 'التدقيق التقني'],
                'description' => ['en' => 'Comprehensive technical structure review: crawling, indexation, and redirects.', 'ar' => 'مراجعة شاملة للبنية التقنية: الزحف، الفهرسة، والتحويلات.'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'file-text',
                'title' => ['en' => 'On-Page Analysis', 'ar' => 'تحليل الصفحة'],
                'description' => ['en' => 'Evaluating keywords, titles, content, and page structure.', 'ar' => 'تقييم الكلمات المفتاحية، العناوين، المحتوى، وبنية الصفحة.'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'link',
                'title' => ['en' => 'Off-Page Review', 'ar' => 'مراجعة خارج الصفحة'],
                'description' => ['en' => 'Analyzing the Backlink Profile and identifying toxic links.', 'ar' => 'تحليل ملف الروابط الخلفية وتحديد الروابط السامة.'],
                'sort_order' => 3,
            ],
            [
                'icon' => 'layers',
                'title' => ['en' => 'Content Gaps', 'ar' => 'فجوات المحتوى'],
                'description' => ['en' => 'Comparing current content against competitor coverage.', 'ar' => 'مقارنة المحتوى الحالي بتغطية المنافسين.'],
                'sort_order' => 4,
            ],
            [
                'icon' => 'target',
                'title' => ['en' => 'Competitor Analysis', 'ar' => 'تحليل المنافسين'],
                'description' => ['en' => 'Studying top competitor strategies in search results.', 'ar' => 'دراسة استراتيجيات كبار المنافسين في نتائج البحث.'],
                'sort_order' => 5,
            ],
            [
                'icon' => 'bar-chart-2',
                'title' => ['en' => 'Performance Metrics', 'ar' => 'مقاييس الأداء'],
                'description' => ['en' => 'Measuring Core Web Vitals, speed, and user experience.', 'ar' => 'قياس Core Web Vitals، السرعة، وتجربة المستخدم.'],
                'sort_order' => 6,
            ],
        ]);

        $whyMe = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Why_Me,
            'title' => 'Why Me',
        ]);

        $whyMe->cards()->createMany([
            [
                'icon' => 'award',
                'title' => ['en' => '40+ Certified Credentials', 'ar' => 'أكثر من 40 شهادة معتمدة'],
                'description' => ['en' => 'Google, Semrush, Ahrefs & more — documented on LinkedIn', 'ar' => 'جوجل، Semrush، Ahrefs والمزيد — موثقة على LinkedIn'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'briefcase',
                'title' => ['en' => '6+ Years of Specialist Experience', 'ar' => 'أكثر من 6 سنوات من الخبرة المتخصصة'],
                'description' => ['en' => 'Across Saudi, UAE, Egypt and the Arab world', 'ar' => 'في السعودية، الإمارات، مصر والعالم العربي'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'bar-chart',
                'title' => ['en' => '100% Data-Driven Methodology', 'ar' => 'منهجية مبنية على البيانات 100%'],
                'description' => ['en' => 'Every decision backed by GSC, Ahrefs & GA4', 'ar' => 'كل قرار مدعوم ببيانات GSC و Ahrefs و GA4'],
                'sort_order' => 3,
            ],
            [
                'icon' => 'settings',
                'title' => ['en' => 'Expertise Across Leading Platforms', 'ar' => 'خبرة عبر المنصات الرائدة'],
                'description' => ['en' => 'Salla, Zid, WordPress, Shopify, Magento & Laravel', 'ar' => 'سلة، زد، ووردبريس، شوبيفاي، ماجنتو ولارافيل'],
                'sort_order' => 4,
            ],
            [
                'icon' => 'target',
                'title' => ['en' => 'Measurable Results', 'ar' => 'نتائج قابلة للقياس'],
                'description' => ['en' => 'Monthly GSC & Ahrefs reports with clear ROI metrics', 'ar' => 'تقارير شهرية من GSC و Ahrefs بمؤشرات عائد استثمار واضحة'],
                'sort_order' => 5,
            ],
            [
                'icon' => 'message-circle',
                'title' => ['en' => 'Continuous Communication & Full Transparency', 'ar' => 'تواصل مستمر وشفافية كاملة'],
                'description' => ['en' => 'You track every step — no working in the dark', 'ar' => 'تتابع كل خطوة — لا عمل في الظلام'],
                'sort_order' => 6,
            ],
        ]);

        $auditProcess = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Audit_Process,
            'title' => 'Audit Process',
        ]);

        $auditProcess->cards()->createMany([
            [
                'title' => ['en' => 'Crawl & Collect', 'ar' => 'الزحف وجمع البيانات'],
                'description' => ['en' => 'Crawling the site and collecting data from GSC, Ahrefs and Screaming Frog.', 'ar' => 'الزحف إلى الموقع وجمع البيانات من GSC و Ahrefs و Screaming Frog.'],
                'sort_order' => 1,
            ],
            [
                'title' => ['en' => 'Analyze & Diagnose', 'ar' => 'التحليل والتشخيص'],
                'description' => ['en' => 'Analyzing data to identify issues and opportunities.', 'ar' => 'تحليل البيانات لتحديد المشاكل والفرص.'],
                'sort_order' => 2,
            ],
            [
                'title' => ['en' => 'Prioritize', 'ar' => 'تحديد الأولويات'],
                'description' => ['en' => 'Ranking issues by impact versus implementation effort.', 'ar' => 'ترتيب المشاكل حسب التأثير مقابل جهد التنفيذ.'],
                'sort_order' => 3,
            ],
            [
                'title' => ['en' => 'Report & Action Plan', 'ar' => 'تقرير وخطة عمل'],
                'description' => ['en' => 'Delivering a detailed PDF report with a clear roadmap.', 'ar' => 'تسليم تقرير PDF مفصل مع خارطة طريق واضحة.'],
                'sort_order' => 4,
            ],
        ]);

        $auditDeliverables = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Audit_Deliverables,
            'title' => 'Audit Deliverables',
        ]);

        $auditDeliverables->cards()->createMany([
            [
                'title' => ['en' => 'Full Report', 'ar' => 'تقرير شامل'],
                'description' => ['en' => 'Comprehensive PDF report covering all technical and content aspects.', 'ar' => 'تقرير PDF شامل يغطي جميع الجوانب التقنية والمحتوى.'],
                'sort_order' => 1,
            ],
            [
                'title' => ['en' => 'Action Plan', 'ar' => 'خطة عمل'],
                'description' => ['en' => 'Prioritized action list ready for immediate implementation.', 'ar' => 'قائمة إجراءات مرتبة بالأولويات وجاهزة للتنفيذ الفوري.'],
                'sort_order' => 2,
            ],
            [
                'title' => ['en' => 'Priority Matrix', 'ar' => 'مصفوفة الأولويات'],
                'description' => ['en' => 'Classifying each issue by impact and difficulty to determine what to fix first.', 'ar' => 'تصنيف كل مشكلة حسب التأثير والصعوبة لتحديد ما يجب إصلاحه أولاً.'],
                'sort_order' => 3,
            ],
            [
                'title' => ['en' => 'Competitor Gap', 'ar' => 'فجوة المنافسين'],
                'description' => ['en' => 'Competitor comparison report highlighting the most untapped opportunities.', 'ar' => 'تقرير مقارنة المنافسين يبرز الفرص غير المستغلة.'],
                'sort_order' => 4,
            ],
        ]);

        $service->checklists()->createMany([
            // Problems
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' => ['en' => 'Google doesn\'t fully index your pages despite quality content', 'ar' => 'جوجل لا تفهرس صفحاتك بالكامل على الرغم من جودة المحتوى'],
            ],
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' => ['en' => 'Your technical report shows hundreds of errors with no fixes', 'ar' => 'تقريرك التقني يظهر مئات الأخطاء دون إصلاح'],
            ],
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' => ['en' => 'Competitors rank first while you\'re stuck on page 2–3', 'ar' => 'المنافسون يتصدرون النتائج بينما أنت عالق في الصفحة 2-3'],
            ],
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' => ['en' => 'You don\'t know which pages to prioritize for improvement', 'ar' => 'لا تعرف الصفحات التي يجب إعطاؤها الأولوية للتحسين'],
            ],
            [
                'section_key' => 'problems',
                'icon' => 'triangle-alert',
                'item' => ['en' => 'You lose traffic daily from hidden issues you can’t see', 'ar' => 'تفقد الزيارات يومياً بسبب مشاكل خفية لا يمكنك رؤيتها'],
            ],
        ]);

        $myProcess = $service->processSections()->create([
            'type' => 'process',
            'key' => ProcessSectionKey::MY_PROCESS,
            'title' => 'My Process',
        ]);

        $myProcess->processSteps()->createMany([
            [
                'number' => 1,
                'title' => ['en' => 'Full crawl & extraction of all technical and content errors', 'ar' => 'زحف كامل واستخراج جميع الأخطاء التقنية والمحتوى'],
                'sort_order' => 1,
            ],
            [
                'number' => 2,
                'title' => ['en' => 'Site hierarchy analysis & page authority distribution', 'ar' => 'تحليل تسلسل الموقع وتوزيع سلطة الصفحة'],
                'sort_order' => 2,
            ],
            [
                'number' => 3,
                'title' => ['en' => 'Core Web Vitals, speed & UX review', 'ar' => 'مراجعة Core Web Vitals والسرعة وتجربة المستخدم'],
                'sort_order' => 3,
            ],
            [
                'number' => 4,
                'title' => ['en' => 'Internal & external link audit including broken links', 'ar' => 'تدقيق الروابط الداخلية والخارجية بما في ذلك الروابط المكسورة'],
                'sort_order' => 4,
            ],
            [
                'number' => 5,
                'title' => ['en' => 'Full competitor gap analysis (top 3 rivals)', 'ar' => 'تحليل شامل لفجوة المنافسين (أفضل 3 منافسين)'],
                'sort_order' => 5,
            ],
            [
                'number' => 6,
                'title' => ['en' => 'Clear priority report with an immediate action roadmap', 'ar' => 'تقرير واضح بالأولويات مع خارطة طريق فورية للتنفيذ'],
                'sort_order' => 6,
            ],
        ]);

        $service->comparisons()->createMany([
            [
                'feature' => ['en' => 'Custom 200+ checkpoint audit report', 'ar' => 'تقرير تدقيق مخصص بأكثر من 200 نقطة فحص'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 1,
            ],
            [
                'feature' => ['en' => 'Direct competitor analysis', 'ar' => 'تحليل مباشر للمنافسين'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 2,
            ],
            [
                'feature' => ['en' => 'Clear priority implementation roadmap', 'ar' => 'خارطة طريق واضحة للتنفيذ بالأولويات'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 3,
            ],
            [
                'feature' => ['en' => 'Post-audit follow-up support', 'ar' => 'دعم متابعة بعد التدقيق'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 4,
            ],
            [
                'feature' => ['en' => 'Quick win opportunity identification', 'ar' => 'تحديد فرص المكاسب السريعة'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 5,
            ],
            [
                'feature' => ['en' => 'Deep search intent understanding', 'ar' => 'فهم عميق لنية البحث'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 6,
            ],
            [
                'feature' => ['en' => 'Technical developer handoff support', 'ar' => 'دعم تسليم المطورين للمشاكل التقنية'],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 7,
            ],
        ]);

        // FAQ
        $service->faqs()->createMany([
            [
                'question' => ['en' => 'How many checkpoints does the audit cover?', 'ar' => 'كم عدد نقاط الفحص التي يغطيها التدقيق؟'],
                'answer' => ['en' => 'More than 200 technical and content checkpoints.', 'ar' => 'أكثر من 200 نقطة فحص تقنية ومحتوى.'],
            ],
            [
                'question' => ['en' => 'Do I need a developer to implement recommendations?', 'ar' => 'هل أحتاج إلى مطور لتطبيق التوصيات؟'],
                'answer' => ['en' => 'Not always, but technical fixes may require developer support.', 'ar' => 'ليس دائماً، لكن الإصلاحات التقنية قد تتطلب دعم مطور.'],
            ],
            [
                'question' => ['en' => 'Does the audit include competitor analysis?', 'ar' => 'هل يشمل التدقيق تحليل المنافسين؟'],
                'answer' => ['en' => 'Yes, competitor gap analysis is included.', 'ar' => 'نعم، تحليل فجوة المنافسين متضمن.'],
            ],
            [
                'question' => ['en' => 'How long does the audit take?', 'ar' => 'كم يستغرق التدقيق وقتاً؟'],
                'answer' => ['en' => 'Usually between 24 and 48 hours.', 'ar' => 'عادة بين 24 و 48 ساعة.'],
            ],
        ]);

        $expertApproach = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Expert_Approach,
            'title' => 'Expert Approach',
        ]);

        $expertApproach->cards()->createMany([
            [
                'icon' => 'search',
                'title' => ['en' => 'I use Screaming Frog + Ahrefs + GSC API to extract real data. Every recommendation is backed by numbers and measurable impact priorities. Quick Wins identified within 48 hours.', 'ar' => 'أستخدم Screaming Frog + Ahrefs + GSC API لاستخراج بيانات حقيقية. كل توصية مدعومة بالأرقام وأولويات التأثير القابلة للقياس. تحديد المكاسب السريعة خلال 48 ساعة.'],
                'sort_order' => 1,
            ],
            [
                'icon' => 'trending-up',
                'title' => ['en' => 'I connect every technical issue to its direct Revenue impact: how much you lose monthly from each un-indexed page, and the expected CTR lift after fixing it.', 'ar' => 'أربط كل مشكلة تقنية بتأثيرها المباشر على الإيرادات: كم تخسر شهرياً من كل صفحة غير مفهرسة، والزيادة المتوقعة في نسبة النقر بعد إصلاحها.'],
                'sort_order' => 2,
            ],
            [
                'icon' => 'trending-up',
                'title' => ['en' => 'Post-audit I build a Python-powered monitoring Roadmap to auto-detect recurring issues — ensuring the same problems never resurface.', 'ar' => 'بعد التدقيق أبني خارطة طريق مراقبة مدعومة ببايثون لاكتشاف المشاكل المتكررة تلقائياً — لضمان عدم ظهور نفس المشاكل مرة أخرى.'],
                'sort_order' => 3,
            ],
        ]);

        $service->ctas()->create([
            'section_key' => CtaTypeEnum::EXPERT_CTA,
            'icon' => 'rocket',
            'title' => ['en' => 'Ready to Work with a Real Expert?', 'ar' => 'هل أنت مستعد للعمل مع خبير حقيقي؟'],
            'description' => ['en' => 'Stop wasting time with agencies that deliver empty reports — work with an expert who understands the Arab & Gulf market and delivers measurable results.', 'ar' => 'توقف عن إضاعة الوقت مع الوكالات التي تسلم تقارير فارغة — اعمل مع خبير يفهم السوق العربي والخليجي ويحقق نتائج قابلة للقياس.'],
        ]);

        $cta = $service->statisticsSections()->create([
            'type' => 'stat',
            'key' => StatisticsSectionKey::CTA,
            'title' => 'CTA Statistics',
        ]);

        $cta->stats()->createMany([
            [
                'value' => 'shield-check',
                'label' => [
                    'en' => '100% on Mostaql',
                    'ar' => '100% على مستقل',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => 'star',
                'label' => [
                    'en' => '100% on Mostaql',
                    'ar' => '100% على مستقل',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => 'award',
                'label' => [
                    'en' => '6+ Years Experience',
                    'ar' => 'أكثر من 6 سنوات خبرة',
                ],
                'sort_order' => 3,
            ],
        ]);

        $regularApproach = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Regular_Approach,
            'title' => 'Regular Approach',
        ]);

        $regularApproach->cards()->createMany([
            [
                'title' => ['en' => 'Superficial manual check or single-tool scan. Generic recommendations without clear priorities.', 'ar' => 'فحص يدوي سطحي أو مسح بأداة واحدة. توصيات عامة بدون أولويات واضحة.'],
                'sort_order' => 1,
            ],
            [
                'title' => ['en' => 'A long list of errors with no connection to business impact.', 'ar' => 'قائمة طويلة من الأخطاء دون أي ربط بتأثيرها على العمل.'],
                'sort_order' => 2,
            ],
            [
                'title' => ['en' => 'Delivers the report and disappears. No follow-up, no monitoring system.', 'ar' => 'يسلم التقرير ويختفي. لا متابعة، ولا نظام مراقبة.'],
                'sort_order' => 3,
            ],
        ]);

        $service->ctas()->create([
            'section_key' => CtaTypeEnum::WHATSAPP_CTA,
            'title' => ['en' => 'Ready to know exactly where your site is failing?', 'ar' => 'هل أنت مستعد لمعرفة أين يفشل موقعك بالضبط؟'],
            'description' => ['en' => 'Get a comprehensive 200+ point SEO audit with a clear immediate action roadmap.', 'ar' => 'احصل على تدقيق SEO شامل بأكثر من 200 نقطة مع خارطة طريق واضحة للتنفيذ الفوري.'],
            'button_text' => ['en' => 'Start Now on WhatsApp', 'ar' => 'ابدأ الآن على واتساب'],
            'button_url' => 'https://wa.me/201234567890',
        ]);
    }
}
