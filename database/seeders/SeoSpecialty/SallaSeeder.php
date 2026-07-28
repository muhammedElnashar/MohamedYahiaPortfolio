<?php

namespace Database\Seeders\SeoSpecialty;
use App\Models\SeoSpecialty;
use Illuminate\Database\Seeder;

class SallaSeeder extends Seeder
{
    public function run(): void
    {
        $salla = SeoSpecialty::create([

            'slug' => 'salla',

            'name' => [
                'ar' => 'سيو سلة',
                'en' => 'Salla SEO',
            ],

            'card_description' => [
                'ar' => 'خبير سيو متخصص في منصة سلة — +50 متجر نتائج موثقة',
                'en' => 'SEO specialist for Salla stores with documented results.',
            ],

            'badge' => [
                'ar' => 'تخصص: منصة سلة',
                'en' => 'Specialty: Salla Platform',
            ],

            'title' => [
                'ar' => 'خبير سيو سلة – تصدّر جوجل بمتجرك على سلة',
                'en' => 'Salla SEO Expert – Rank Your Store Higher on Google',
            ],

            'description' => [
                'ar' => 'خبرة متعمقة في سيو منصة سلة — أفهم قيودها التقنية وفرصها الحقيقية وكيف أحول متجرك إلى مصدر زيارات عضوية مستدامة.',
                'en' => 'Specialized Salla SEO focused on technical limitations, opportunities and sustainable organic growth.',
            ],


            'challenges_badge' => [
                'ar' => 'التحديات الشائعة',
                'en' => 'Common Challenges',
            ],

            'challenges_title' => [
                'ar' => 'لماذا يفشل سيو سلة في كثير من الحالات؟',
                'en' => 'Why Does Salla SEO Fail in Many Cases?',
            ],

            'services_badge' => [
                'ar' => 'خدماتي على هذه المنصة',
                'en' => 'My Services',
            ],

            'services_title' => [
                'ar' => 'ما الذي سأعمل عليه في سلة؟',
                'en' => 'What Will I Work on in Salla?',
            ],

            'process_badge' => [
                'ar' => 'منهجية العمل',
                'en' => 'Workflow',
            ],

            'process_title' => [
                'ar' => 'كيف أعمل خطوة بخطوة؟',
                'en' => 'How I Work Step by Step',
            ],

            'advantages_badge' => [
                'ar' => 'لماذا أنا',
                'en' => 'Why Me',
            ],

            'advantages_title' => [
                'ar' => 'ما الذي يميزني عن أي مستقل عام؟',
                'en' => 'What Makes My Approach Different?',
            ],

            'methodology_badge' => [
                'ar' => 'SEO & AI GROWTH SYSTEM™',
                'en' => 'SEO & AI GROWTH SYSTEM™',
            ],

            'methodology_title' => [
                'ar' => 'المنهجية المتكاملة التي أستخدمها في سلة',
                'en' => 'The Integrated Methodology I Use for Salla',
            ],

            'methodology_description' => [
                'ar' => 'ليس مجرد أدوات — نظام متكامل يربط كل خطوة بالنتيجة.',
                'en' => 'Not just tools — an integrated system connecting every action to measurable results.',
            ],

            'statistics_badge' => [
                'ar' => 'أرقام وحقائق',
                'en' => 'Facts & Figures',
            ],

            'statistics_title' => [
                'ar' => 'لماذا SEO + AI هو أذكى استثمار تقني الآن؟',
                'en' => 'Why SEO + AI Is a Smart Investment Now',
            ],

            'statistics_description' => [
                'ar' => 'إحصائيات موثقة من أكبر مصادر البحث الرقمي وعصر الذكاء الاصطناعي.',
                'en' => 'Statistics from major digital search and AI research sources.',
            ],

            'comparison_badge' => [
                'ar' => 'مقارنة',
                'en' => 'Comparison',
            ],

            'comparison_title' => [
                'ar' => 'متخصص سلة مقابل مستقل عام',
                'en' => 'Salla Specialist vs General Freelancer',
            ],

            'comparison_competitor_label' => [
                'ar' => 'مستقل عام',
                'en' => 'General Freelancer',
            ],

            'faq_badge' => [
                'ar' => 'الأسئلة الشائعة',
                'en' => 'FAQ',
            ],

            'faq_title' => [
                'ar' => 'أسئلة شائعة عن سيو سلة',
                'en' => 'Frequently Asked Questions About Salla SEO',
            ],

            'philosophy_badge' => [
                'ar' => 'فلسفتي ورؤيتي',
                'en' => 'My Philosophy',
            ],

            'philosophy_title' => [
                'ar' => 'لماذا التخصص في سلة تحديدًا؟',
                'en' => 'Why Specialize in Salla?',
            ],

            'philosophy_quote' => [
                'ar' => 'السيو الحقيقي لا يُشترى — يُبنى بصبر واستراتيجية وتنفيذ دقيق. مهمتي أن أجعل جوجل يرى موقعك قبل أي منافس.',
                'en' => 'Real SEO is built through strategy, patience and precise execution.',
            ],


            'cta_title' => [
                'ar' => 'جاهز تبدأ؟ تواصل معي الآن',
                'en' => 'Ready to Start? Contact Me',
            ],

            'cta_description' => [
                'ar' => 'استشارة مجانية — أبدأ بتحليل موقعك وتحديد فرص النمو على سلة.',
                'en' => 'Start with a free consultation and an analysis of your Salla growth opportunities.',
            ],

            'cta_button' => [
                'ar' => 'ابدأ الآن عبر واتساب',
                'en' => 'Start on WhatsApp',
            ],

            'cta_url' => '',

            'sort_order' => 1,
            'is_active' => true,
        ]);
        $salla->heroStats()->createMany([
            [
                'value' => '+80',
                'label' => [
                    'ar' => 'متجر سلة محسن',
                    'en' => 'Optimized Salla Stores',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => '+6',
                'label' => [
                    'ar' => 'سنوات خبرة',
                    'en' => 'Years of Experience',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => '250%',
                'label' => [
                    'ar' => 'نمو عضوي',
                    'en' => 'Organic Growth',
                ],
                'sort_order' => 3,
            ],
            [
                'value' => 'Top 10',
                'label' => [
                    'ar' => 'ترتيب مستهدف',
                    'en' => 'Target Ranking',
                ],
                'sort_order' => 4,
            ],
        ]);
        $salla->challenges()->createMany([
            [
                'icon' => 'link',
                'title' => [
                    'ar' => 'هيكل URLs المعقد في سلة',
                    'en' => 'Complex URL Structure',
                ],
                'description' => [
                    'ar' => 'سلة قد تنتج URLs في بعض الحالات تحتاج ضبطًا لتفادي التكرار وتحسين قابلية الزحف.',
                    'en' => 'Some URL patterns may require optimization to improve crawling and reduce duplication.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'ar' => 'Schema Markup للمنتجات',
                    'en' => 'Product Schema Markup',
                ],
                'description' => [
                    'ar' => 'تطبيق Product Schema الصحيح يحتاج فهمًا لبنية الصفحة وكيفية ظهور Rich Results في جوجل.',
                    'en' => 'Product Schema requires proper implementation for stronger rich result eligibility.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'layers',
                'title' => [
                    'ar' => 'صفحات الفئات بلا محتوى',
                    'en' => 'Thin Category Pages',
                ],
                'description' => [
                    'ar' => 'صفحات الفئات الفارغة من النص تضعف قدرتها على المنافسة وتحتاج تطوير محتوى منظم.',
                    'en' => 'Thin category pages often need stronger content and search-intent optimization.',
                ],
                'sort_order' => 3,
            ],
        ]);
        $salla->services()->createMany([
            [
                'icon' => 'package',
                'title' => [
                    'ar' => 'تحسين صفحات المنتجات',
                    'en' => 'Product Page Optimization',
                ],
                'description' => [
                    'ar' => 'تحسين العناوين والوصف وSchema لكل منتج لرفع فرص ظهوره في جوجل.',
                    'en' => 'Optimize product titles, descriptions and Schema for stronger organic visibility.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'layers',
                'title' => [
                    'ar' => 'تحسين صفحات الفئات',
                    'en' => 'Category Page Optimization',
                ],
                'description' => [
                    'ar' => 'بناء صفحات فئات بمحتوى غني ومحسن وكلمات مفتاحية مستهدفة.',
                    'en' => 'Build optimized category pages around relevant commercial search intent.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'ar' => 'Product Markup Schema',
                    'en' => 'Product Markup Schema',
                ],
                'description' => [
                    'ar' => 'تطبيق Product وBreadcrumb وOrganization Schema لتحسين فرص الظهور بنتائج البحث الغنية.',
                    'en' => 'Implement Product, Breadcrumb and Organization structured data.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'ar' => 'تحسين سرعة سلة و CWV',
                    'en' => 'Salla Speed & Core Web Vitals',
                ],
                'description' => [
                    'ar' => 'تحليل وتحسين LCP وCLS وINP للوصول إلى Core Web Vitals أفضل.',
                    'en' => 'Optimize LCP, CLS and INP for stronger Core Web Vitals performance.',
                ],
                'is_featured' => true,
                'sort_order' => 4,
            ],
            [
                'icon' => 'languages',
                'title' => [
                    'ar' => 'سيو متعدد اللغات',
                    'en' => 'Multilingual SEO',
                ],
                'description' => [
                    'ar' => 'إعداد Arabic/English مع canonical وhreflang الصحيح لتجنب Duplicate Content.',
                    'en' => 'Configure multilingual SEO, canonical URLs and hreflang.',
                ],
                'sort_order' => 5,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'ar' => 'بناء الروابط الداخلية',
                    'en' => 'Internal Linking',
                ],
                'description' => [
                    'ar' => 'استراتيجية Internal Linking تربط المنتجات والفئات والمدونة لتوزيع قوة السيو.',
                    'en' => 'Strategic internal linking between products, categories and content.',
                ],
                'sort_order' => 6,
            ],
        ]);
        $salla->processes()->createMany([
            [
                'step' => 1,
                'title' => [
                    'ar' => 'تدقيق SEO شامل لمتجر سلة',
                    'en' => 'Complete Salla SEO Audit',
                ],
                'description' => [
                    'ar' => 'تحليل كامل للبنية التقنية والمحتوى وأداء المتجر وفرص التحسين.',
                    'en' => 'Full technical, content and performance analysis.',
                ],
                'sort_order' => 1,
            ],
            [
                'step' => 2,
                'title' => [
                    'ar' => 'بحث الكلمات المفتاحية',
                    'en' => 'Keyword Research',
                ],
                'description' => [
                    'ar' => 'تحديد الكلمات المستهدفة حسب نية الشراء والمنافسة وحجم البحث.',
                    'en' => 'Identify target keywords based on intent, competition and search demand.',
                ],
                'sort_order' => 2,
            ],
            [
                'step' => 3,
                'title' => [
                    'ar' => 'تحسين الصفحات والمحتوى',
                    'en' => 'Page & Content Optimization',
                ],
                'description' => [
                    'ar' => 'تطبيق التحسينات على صفحات المنتجات والفئات بشكل منهجي.',
                    'en' => 'Systematic optimization of product and category pages.',
                ],
                'sort_order' => 3,
            ],
            [
                'step' => 4,
                'title' => [
                    'ar' => 'Schema والتحسين التقني',
                    'en' => 'Schema & Technical SEO',
                ],
                'description' => [
                    'ar' => 'تطبيق Structured Data وحل المشاكل التقنية وإعداد Sitemaps.',
                    'en' => 'Structured data implementation, technical fixes and sitemap optimization.',
                ],
                'sort_order' => 4,
            ],
            [
                'step' => 5,
                'title' => [
                    'ar' => 'متابعة ومراقبة النتائج',
                    'en' => 'Tracking & Reporting',
                ],
                'description' => [
                    'ar' => 'تقارير شهرية واضحة مع تتبع الترتيب والزيارات العضوية.',
                    'en' => 'Clear monthly reporting for rankings and organic performance.',
                ],
                'sort_order' => 5,
            ],
        ]);
        $salla->advantages()->createMany([
            [
                'icon' => 'award',
                'title' => [
                    'ar' => 'خبرة متخصصة',
                    'en' => 'Specialized Experience',
                ],
                'description' => [
                    'ar' => 'لست سيو عام — متخصص في هذه المنصة ولدي خبرة عملية مباشرة معها.',
                    'en' => 'Platform-specific SEO experience rather than a generic approach.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'chart',
                'title' => [
                    'ar' => 'نتائج مقاسة',
                    'en' => 'Measured Results',
                ],
                'description' => [
                    'ar' => 'كل ما أعمله مرتبط بمقاييس حقيقية: زيارات وترتيبات وعائد.',
                    'en' => 'Work is tied to measurable traffic, rankings and business outcomes.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'eye',
                'title' => [
                    'ar' => 'شفافية كاملة',
                    'en' => 'Full Transparency',
                ],
                'description' => [
                    'ar' => 'تقارير واضحة كل شهر توضح ما تم وما النتائج والخطوات القادمة.',
                    'en' => 'Clear reporting covering work completed, results and next steps.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'message',
                'title' => [
                    'ar' => 'تواصل مستمر',
                    'en' => 'Continuous Communication',
                ],
                'description' => [
                    'ar' => 'متاح عبر واتساب لأي سؤال أو تحديث دون انتظار.',
                    'en' => 'Direct communication for questions and ongoing updates.',
                ],
                'is_featured' => true,
                'sort_order' => 4,
            ],
        ]);
        $salla->methodologies()->createMany([
            [
                'number' => 1,
                'icon' => 'search',
                'title' => [
                    'ar' => 'تدقيق ذكي شامل',
                    'en' => 'Smart Comprehensive Audit',
                ],
                'description' => [
                    'ar' => 'أبدأ بتحليل 360° للمتجر والموقع على سلة: سرعة، تقني، محتوى، منافسين وفرص.',
                    'en' => '360° audit covering technical SEO, content, performance, competitors and opportunities.',
                ],
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'number' => 2,
                'icon' => 'target',
                'title' => [
                    'ar' => 'استراتيجية كلمات مدروسة',
                    'en' => 'Strategic Keyword Research',
                ],
                'description' => [
                    'ar' => 'بحث متعمق في نية الشراء وبناء Keyword Map تمنع التداخل وتزيد فرص التحويل.',
                    'en' => 'Intent-driven keyword mapping designed to reduce cannibalization and improve conversions.',
                ],
                'sort_order' => 2,
            ],
            [
                'number' => 3,
                'icon' => 'brain',
                'title' => [
                    'ar' => 'AI-Powered Content',
                    'en' => 'AI-Powered Content',
                ],
                'description' => [
                    'ar' => 'دمج الذكاء الاصطناعي في إنشاء محتوى محسن مع مراجعة بشرية ومعايير E-E-A-T.',
                    'en' => 'AI-assisted content supported by human review and E-E-A-T principles.',
                ],
                'sort_order' => 3,
            ],
            [
                'number' => 4,
                'icon' => 'link',
                'title' => [
                    'ar' => 'بناء روابط نوعية',
                    'en' => 'Quality Link Building',
                ],
                'description' => [
                    'ar' => 'اكتساب Backlinks من مواقع ذات صلة وسلطة لبناء ثقة حقيقية.',
                    'en' => 'Acquire relevant authoritative backlinks to strengthen organic authority.',
                ],
                'sort_order' => 4,
            ],
            [
                'number' => 5,
                'icon' => 'zap',
                'title' => [
                    'ar' => 'تحسين Core Web Vitals',
                    'en' => 'Core Web Vitals Optimization',
                ],
                'description' => [
                    'ar' => 'تحسين LCP وINP وCLS لأن الأداء التقني جزء مهم من تجربة المستخدم.',
                    'en' => 'Optimize LCP, INP and CLS to improve technical performance and user experience.',
                ],
                'sort_order' => 5,
            ],
            [
                'number' => 6,
                'icon' => 'chart',
                'title' => [
                    'ar' => 'تقارير ومتابعة مستمرة',
                    'en' => 'Continuous Reporting',
                ],
                'description' => [
                    'ar' => 'لوحة تحكم وتقارير دورية توضح الزيارات والترتيبات والتحويلات والخطوات القادمة.',
                    'en' => 'Ongoing reporting for traffic, rankings, conversions and next actions.',
                ],
                'sort_order' => 6,
            ],
        ]);
        $salla->comparisons()->createMany([
            [
                'criterion' => [
                    'ar' => 'خبرة سلة المباشرة',
                    'en' => 'Direct Salla Experience',
                ],
                'specialist_value' => [
                    'ar' => 'سنوات',
                    'en' => 'Years',
                ],
                'competitor_value' => [
                    'ar' => 'محدودة',
                    'en' => 'Limited',
                ],
                'sort_order' => 1,
            ],
            [
                'criterion' => [
                    'ar' => 'Schema وStructured Data',
                    'en' => 'Schema & Structured Data',
                ],
                'specialist_value' => [
                    'ar' => 'متكامل',
                    'en' => 'Complete',
                ],
                'competitor_value' => [
                    'ar' => 'جزئي',
                    'en' => 'Partial',
                ],
                'sort_order' => 2,
            ],
            [
                'criterion' => [
                    'ar' => 'تقارير شهرية واضحة',
                    'en' => 'Clear Monthly Reports',
                ],
                'specialist_value' => [
                    'ar' => 'دائمًا',
                    'en' => 'Always',
                ],
                'competitor_value' => [
                    'ar' => 'أحيانًا',
                    'en' => 'Sometimes',
                ],
                'sort_order' => 3,
            ],
            [
                'criterion' => [
                    'ar' => 'Core Web Vitals',
                    'en' => 'Core Web Vitals',
                ],
                'specialist_value' => [
                    'ar' => 'محسّن',
                    'en' => 'Optimized',
                ],
                'competitor_value' => [
                    'ar' => 'يُهمل',
                    'en' => 'Often Ignored',
                ],
                'sort_order' => 4,
            ],
            [
                'criterion' => [
                    'ar' => 'تواصل مباشر واتساب',
                    'en' => 'Direct WhatsApp Communication',
                ],
                'specialist_value' => [
                    'ar' => 'دائمًا',
                    'en' => 'Always',
                ],
                'competitor_value' => [
                    'ar' => 'بطيء',
                    'en' => 'Slow',
                ],
                'sort_order' => 5,
            ],
        ]);
        $salla->faqs()->createMany([
            [
                'question' => [
                    'ar' => 'هل يمكن تحسين سيو متجر سلة بشكل احترافي؟',
                    'en' => 'Can a Salla Store Be Professionally Optimized for SEO?',
                ],
                'answer' => [
                    'ar' => 'نعم، ويمكن تحسين الجوانب التقنية والمحتوى وصفحات المنتجات والفئات والبيانات المنظمة والربط الداخلي بما يتوافق مع إمكانيات المنصة.',
                    'en' => 'Yes. Technical SEO, content, product pages, categories, structured data and internal linking can all be optimized within the platform capabilities.',
                ],
                'sort_order' => 1,
            ],
            [
                'question' => [
                    'ar' => 'ما المدة المتوقعة لظهور نتائج سيو سلة؟',
                    'en' => 'How Long Does Salla SEO Take?',
                ],
                'answer' => [
                    'ar' => 'تختلف المدة حسب حالة المتجر والمنافسة وعمر النطاق وحجم المشاكل الحالية، لذلك يتم تحديد التوقعات بعد التدقيق.',
                    'en' => 'Timelines vary depending on the store, competition, domain history and current SEO condition.',
                ],
                'sort_order' => 2,
            ],
            [
                'question' => [
                    'ar' => 'هل مدونة سلة مفيدة للسيو؟',
                    'en' => 'Is the Salla Blog Useful for SEO?',
                ],
                'answer' => [
                    'ar' => 'نعم عند استخدامها ضمن استراتيجية محتوى تستهدف أسئلة واحتياجات العملاء وتدعم صفحات المنتجات والفئات بالربط الداخلي.',
                    'en' => 'Yes, when used strategically to target relevant informational intent and support commercial pages.',
                ],
                'sort_order' => 3,
            ],
            [
                'question' => [
                    'ar' => 'كيف تتعامل مع مشكلة URLs في سلة؟',
                    'en' => 'How Do You Handle Salla URL Issues?',
                ],
                'answer' => [
                    'ar' => 'أراجع بنية الروابط والفهرسة والـ canonical والصفحات المتكررة وحالة الزحف، ثم أحدد الحل المناسب حسب المشكلة الفعلية.',
                    'en' => 'I review URL structure, indexing, canonicalization, duplication and crawl behavior before applying the appropriate solution.',
                ],
                'sort_order' => 4,
            ],
            [
                'question' => [
                    'ar' => 'هل أحتاج متخصص سلة أم يكفي خبير سيو عام؟',
                    'en' => 'Do I Need a Salla Specialist or a General SEO Expert?',
                ],
                'answer' => [
                    'ar' => 'الخبرة المتخصصة بالمنصة تساعد على فهم قيودها وإمكانياتها والوصول إلى الحلول المناسبة بصورة أسرع وأكثر دقة.',
                    'en' => 'Platform-specific experience can make diagnosing limitations and identifying opportunities more efficient.',
                ],
                'sort_order' => 5,
            ],
        ]);
        $salla->statistics()->createMany([
            [
                'value' => '68%',
                'description' => [
                    'ar' => 'من تجارب الإنترنت تبدأ من محرك بحث — ليس من إعلان أو سوشيال ميديا.',
                    'en' => 'Online experiences often begin with a search engine rather than an ad or social media.',
                ],
                'source' => 'BrightEdge',
                'source_url' => null,
                'badge' => null,
                'sort_order' => 1,
            ],

            [
                'value' => '27%',
                'description' => [
                    'ar' => 'نسبة النقر على النتيجة الأولى — التصدّر ليس رفاهية، هو الفرق بين وجودك وغيابك.',
                    'en' => 'The first organic result can capture a significant share of clicks, making top rankings highly valuable.',
                ],
                'source' => 'Backlinko',
                'source_url' => null,
                'badge' => null,
                'sort_order' => 2,
            ],

            [
                'value' => '14.6%',
                'description' => [
                    'ar' => 'معدل تحويل SEO مقارنة بـ 1.7% فقط للإعلانات المدفوعة — جودة الزائر العضوي أعلى.',
                    'en' => 'SEO-driven visitors can deliver stronger conversion performance compared with traditional outbound acquisition.',
                ],
                'source' => 'Search Engine Journal',
                'source_url' => null,
                'badge' => null,
                'sort_order' => 3,
            ],

            [
                'value' => '15%',
                'description' => [
                    'ar' => 'من نتائج بحث جوجل تعرض AI Overview — والمواقع المذكورة فيها تحصل على ثقة ومصداقية أعلى.',
                    'en' => 'AI Overviews are changing search visibility and creating new opportunities for trusted sources.',
                ],
                'source' => 'Google / SparkToro',
                'source_url' => null,
                'badge' => 'AI Era',
                'sort_order' => 4,
            ],

            [
                'value' => '40%',
                'description' => [
                    'ar' => 'من الاستشهادات في AI Overviews تأتي من النتائج الثلاثة الأولى — لهذا التصدّر يفتح فرص ظهور إضافية.',
                    'en' => 'Strong organic rankings can increase opportunities to be referenced within AI-powered search experiences.',
                ],
                'source' => 'Ahrefs Research',
                'source_url' => null,
                'badge' => 'AI Era',
                'sort_order' => 5,
            ],

            [
                'value' => 'E-E-A-T',
                'description' => [
                    'ar' => 'إشارات الخبرة والتجربة في المحتوى تساعد جوجل على تقييم الموثوقية والجودة في عصر البحث المدعوم بالذكاء الاصطناعي.',
                    'en' => 'Experience, expertise, authoritativeness and trust signals support content quality and credibility.',
                ],
                'source' => 'Google Search Central',
                'source_url' => null,
                'badge' => 'AI Era',
                'sort_order' => 6,
            ],
        ]);
        $salla->philosophy()->createMany([
            [
                'title' => [
                    'ar' => 'التخصص ليس قيدًا — إنه قوة',
                    'en' => 'Specialization is not a limit — it is power',
                ],
                'description' => [
                    'ar' => 'كل ساعة أقضيها في سلة تعمّق فهمي وتحسن نتائج العملاء. العمق يتفوق دائمًا على الاتساع.',
                    'en' => 'Every hour I spend on Salla deepens my understanding and improves client results. Depth always beats breadth.',
                ],
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'title' => [
                    'ar' => 'SEO لخدمة الإنسان أولًا',
                    'en' => 'SEO serves humans first',
                ],
                'description' => [
                    'ar' => 'جوجل يكافئ المحتوى المفيد — كل ما أبنيه مصمم للإجابة عن سؤال حقيقي لإنسان حقيقي.',
                    'en' => 'Google rewards useful content — everything I build is designed to answer a real question for a real person.',
                ],
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'title' => [
                    'ar' => 'البيانات تقود، والإبداع يصنع الفرق',
                    'en' => 'Data leads, creativity differentiates',
                ],
                'description' => [
                    'ar' => 'أبدأ بالأرقام والتحليل، لكن الفرق الحقيقي يأتي من زاوية إبداعية تكسر المألوف.',
                    'en' => 'I start with numbers and analysis, but the real difference comes from a creative angle that breaks the mold.',
                ],
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'title' => [
                    'ar' => 'النتائج ليست صدفة — إنها هندسة',
                    'en' => 'Results are not chance — they are engineering',
                ],
                'description' => [
                    'ar' => 'كل ترتيب متقدم تحقق مع عميل كان نتيجة خطة واضحة وتنفيذ دقيق وصبر استراتيجي.',
                    'en' => 'Every top ranking achieved with a client was the result of a clear plan, precise execution, and strategic patience.',
                ],
                'sort_order' => 4,
                'is_active' => true,
            ],
        ]);
    }


}
