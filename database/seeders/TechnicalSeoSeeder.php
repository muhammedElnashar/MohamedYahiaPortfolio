<?php

namespace Database\Seeders;

use App\Enums\CardSectionKey;
use App\Enums\ProcessSectionKey;
use App\Enums\ServiceSectionHeadingKey;
use App\Enums\StatisticsSectionKey;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnicalSeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = Service::create([
            'title' => [
                'en' => 'Technical SEO',
                'ar' => 'السيو التقني',
            ],

            'slug' => 'technical-seo',

            'icon' => 'code',

            'category_id' => ServiceCategory::where('slug', 'technical')->first()->id,

            'short_description' => [
                'en' => 'Solving indexation issues, Schema Markup, Canonical, Crawl Budget, and performance optimization.',
                'ar' => 'حل مشاكل الأرشفة، وSchema Markup، وCanonical، وCrawl Budget، وتحسين أداء الموقع.',
            ],

            'hero_title' => [
                'en' => 'Technical SEO — The Foundation Everything Builds On',
                'ar' => 'السيو التقني — الأساس الذي يُبنى عليه نجاح موقعك',
            ],

            'hero_description' => [
                'en' => 'Fixing indexation issues, Schema Markup, Canonical, Crawl Budget, Core Web Vitals — works with all platforms and custom-built sites in any language.',
                'ar' => 'أعالج مشاكل الأرشفة، وSchema Markup، وCanonical، وCrawl Budget، وCore Web Vitals لجميع المنصات والمواقع المبرمجة بأي لغة.',
            ],

         /*   'meta_title' => [
                'en' => 'Technical SEO Services',
                'ar' => 'خدمات السيو التقني',
            ],

            'meta_description' => [
                'en' => 'Technical SEO services to fix crawling, indexing, Core Web Vitals, Schema Markup and website performance.',
                'ar' => 'خدمات السيو التقني لتحسين الأرشفة، والزحف، وCore Web Vitals، وSchema Markup، وأداء الموقع.',
            ],*/
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
                    'en' => 'Sites Fixed',
                    'ar' => 'موقع تم إصلاحه',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => 'All',
                'label' => [
                    'en' => 'Platforms',
                    'ar' => 'جميع المنصات',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => '48h',
                'label' => [
                    'en' => 'Start Time',
                    'ar' => 'بدء التنفيذ',
                ],
                'sort_order' => 3,
            ],
            [
                'value' => 'Engineering',
                'label' => [
                    'en' => 'Real Coding Background',
                    'ar' => 'خلفية برمجية حقيقية',
                ],
                'sort_order' => 4,
            ],
        ]);
        $service->painPoints()->createMany([
            [
                'icon' => 'eye-off',
                'title' => [
                    'en' => 'New pages fail to get indexed even weeks after publishing',
                    'ar' => 'الصفحات الجديدة لا تتم أرشفتها حتى بعد أسابيع من نشرها',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'circle-x',
                'title' => [
                    'en' => 'Frequent Crawl errors appearing in Google Search Console',
                    'ar' => 'ظهور أخطاء زحف متكررة داخل Google Search Console',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'Your site fails Core Web Vitals on PageSpeed Insights',
                    'ar' => 'موقعك يفشل في اختبارات Core Web Vitals على PageSpeed Insights',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'clock',
                'title' => [
                    'en' => 'No Rich Snippets or Featured Snippets despite good content',
                    'ar' => 'عدم ظهور Rich Snippets أو Featured Snippets رغم جودة المحتوى',
                ],
                'sort_order' => 4,
            ],
            [
                'icon' => 'git-compare-arrows',
                'title' => [
                    'en' => 'Duplicate Content issues are harming your rankings',
                    'ar' => 'مشكلات المحتوى المكرر تؤثر على ترتيب موقعك',
                ],
                'sort_order' => 5,
            ],
            [
                'icon' => 'ban',
                'title' => [
                    'en' => 'Your site runs on Next.js or React with Server-Side Rendering issues',
                    'ar' => 'موقعك يعمل بـ Next.js أو React ويعاني من مشاكل Server-Side Rendering',
                ],
                'sort_order' => 6,
            ],
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'Site migrated to a new domain and traffic collapsed',
                    'ar' => 'تم نقل الموقع إلى دومين جديد وانخفضت الزيارات بشكل كبير',
                ],
                'sort_order' => 7,
            ],
        ]);

        $service->contentSections()->createMany([
            [
                'section_key' => ServiceSectionHeadingKey::SIGNS_YOU_NEED_THIS,
                'eyebrow' => [
                    'en' => 'Signs You Need This',
                    'ar' => 'علامات تدل أنك تحتاج هذه الخدمة',
                ],
                'title' => [
                    'en' => 'Is Your Site Showing These Warning Signs?',
                    'ar' => 'هل تظهر على موقعك هذه العلامات التحذيرية؟',
                ],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::DEEP_Dive,
                'eyebrow' => [
                    'en' => 'Deep Dive',
                    'ar' => 'نظرة متعمقة',
                ],
                'title' => [
                    'en' => 'Technical SEO — Why Your Business Needs It',
                    'ar' => 'السيو التقني — لماذا يحتاجه موقعك؟',
                ],
                'content' => [
                    'en' => 'Technical SEO is the foundation everything else stands on — excellent content and strong links are useless if Google cannot crawl, understand, and index your site correctly. Hidden technical issues drain Crawl Budget and prevent your pages from ranking even if they deserve the top spot.

Professional technical work includes fixing Crawlability and Indexation issues, implementing Schema Markup (Article, Product, FAQ, BreadcrumbList, Organization) to produce Rich Snippets, resolving Canonical Confusion and Duplicate Content, and improving Internal Linking structure to distribute PageRank efficiently.

Core Web Vitals are now an official ranking signal — improving LCP, CLS, and INP directly impacts rankings and user experience, which drives conversion rates. Every 100ms improvement in load time lifts conversion rates by 1–2%.',

                    'ar' => 'السيو التقني هو الأساس الذي تُبنى عليه جميع جهود تحسين محركات البحث. فحتى إذا كان لديك محتوى ممتاز وروابط قوية، فلن تحقق نتائج حقيقية إذا لم يتمكن Google من الزحف إلى صفحات موقعك وفهمها وأرشفتها بالشكل الصحيح. كما أن المشكلات التقنية الخفية تستهلك Crawl Budget وتمنع صفحاتك من المنافسة على النتائج الأولى.

يشمل السيو التقني الاحترافي معالجة مشاكل الزحف والأرشفة، وتنفيذ Schema Markup بمختلف أنواعه مثل Article وProduct وFAQ وBreadcrumb وOrganization للحصول على Rich Snippets، بالإضافة إلى حل مشاكل Canonical والمحتوى المكرر وتحسين بنية Internal Linking لتوزيع PageRank بكفاءة.

كما أصبحت مؤشرات Core Web Vitals عامل ترتيب رسمي لدى Google، لذلك فإن تحسين LCP وCLS وINP ينعكس مباشرة على تجربة المستخدم وترتيب الموقع ومعدلات التحويل، حيث يمكن لتحسين زمن التحميل بمقدار 100 مللي ثانية فقط أن يزيد معدل التحويل بنسبة تصل إلى 2٪.',
                ],
            ],
        ]);
        // Content Sections
        $service->contentSections()->createMany([
            [
                'section_key' => ServiceSectionHeadingKey::DELIVERABLE,
                'title' => [
                    'en' => "What's Included",
                    'ar' => 'ماذا تتضمن الخدمة؟',
                ],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::OUR_PROCESS,
                'title' => [
                    'en' => 'Our Process',
                    'ar' => 'آلية العمل',
                ],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::WHY_INVEST,
                'eyebrow' => [
                    'en' => 'Why Invest in SEO?',
                    'ar' => 'لماذا تستثمر في السيو؟',
                ],
                'title' => [
                    'en' => "SEO Is Not a Cost — It's the Best Digital Investment You Can Make",
                    'ar' => 'السيو ليس تكلفة — بل أفضل استثمار رقمي يمكنك القيام به',
                ],
                'content' => [
                    'en' => 'While ads stop when spending stops, SEO keeps delivering results for years — real compounding growth.',
                    'ar' => 'بينما تتوقف الإعلانات بمجرد توقف الإنفاق، يستمر السيو في تحقيق النتائج لسنوات، مما يمنحك نموًا مستدامًا وتراكميًا.',
                ],
            ],
        ]);

// Deliverables
        $service->deliverables()->createMany([
            [
                'icon' => 'check',
                'title' => [
                    'en' => 'Analyze and fix Crawl and Indexing issues',
                    'ar' => 'تحليل وإصلاح مشاكل الزحف والأرشفة',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'check',
                'title' => [
                    'en' => 'Set up Schema Markup (JSON-LD) for all content types',
                    'ar' => 'تنفيذ Schema Markup (JSON-LD) لجميع أنواع المحتوى',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'check',
                'title' => [
                    'en' => 'Optimize Core Web Vitals: LCP, CLS, INP',
                    'ar' => 'تحسين Core Web Vitals (LCP - CLS - INP)',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'check',
                'title' => [
                    'en' => 'Fix Canonical and Duplicate Content',
                    'ar' => 'حل مشاكل Canonical والمحتوى المكرر',
                ],
                'sort_order' => 4,
            ],
            [
                'icon' => 'check',
                'title' => [
                    'en' => 'Optimize Crawl Budget for large sites',
                    'ar' => 'تحسين Crawl Budget للمواقع الكبيرة',
                ],
                'sort_order' => 5,
            ],
            [
                'icon' => 'check',
                'title' => [
                    'en' => 'Fix Redirect Chains and 404 issues',
                    'ar' => 'إصلاح Redirect Chains وأخطاء 404',
                ],
                'sort_order' => 6,
            ],
            [
                'icon' => 'check',
                'title' => [
                    'en' => 'Optimize Robots.txt and Sitemap.xml',
                    'ar' => 'تحسين Robots.txt و Sitemap.xml',
                ],
                'sort_order' => 7,
            ],
            [
                'icon' => 'check',
                'title' => [
                    'en' => 'Works with WordPress, Laravel, Next.js, React, and any technology',
                    'ar' => 'العمل على WordPress وLaravel وNext.js وReact وجميع التقنيات',
                ],
                'sort_order' => 8,
            ],
        ]);

// Our Process
        $ourProcess = $service->processSections()->create([
            'type' => 'process',
            'key' => ProcessSectionKey::OUR_PROCESS,
            'title' => 'Our Process',
        ]);

        $ourProcess->processSteps()->createMany([
            [
                'number' => 1,
                'title' => [
                    'en' => 'Technical Audit',
                    'ar' => 'مراجعة تقنية',
                ],
                'description' => [
                    'en' => 'Technical Audit',
                    'ar' => 'مراجعة تقنية',
                ],
                'sort_order' => 1,
            ],
            [
                'number' => 2,
                'title' => [
                    'en' => 'Identify Issues',
                    'ar' => 'تحديد المشكلات',
                ],
                'description' => [
                    'en' => 'Identify Issues',
                    'ar' => 'تحديد المشكلات',
                ],
                'sort_order' => 2,
            ],
            [
                'number' => 3,
                'title' => [
                    'en' => 'Fix Issues',
                    'ar' => 'إصلاح المشكلات',
                ],
                'description' => [
                    'en' => 'Fix Issues',
                    'ar' => 'إصلاح المشكلات',
                ],
                'sort_order' => 3,
            ],
        ]);

// Investment Statistics
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
                    'ar' => 'مقارنة بعائد الإعلانات المدفوعة',
                ],
                'sort_order' => 1,
            ],
            [
                'value' => '68%',
                'label' => [
                    'en' => 'Where Buying Journeys Start',
                    'ar' => 'بداية رحلة الشراء',
                ],
                'description' => [
                    'en' => 'of online experiences begin with search',
                    'ar' => 'من التجارب تبدأ من البحث',
                ],
                'sort_order' => 2,
            ],
            [
                'value' => '#1',
                'label' => [
                    'en' => 'Click Dominance',
                    'ar' => 'السيطرة على النقرات',
                ],
                'description' => [
                    'en' => 'Position #1 captures 27%+ of all clicks',
                    'ar' => 'الترتيب الأول يحصل على أكثر من 27٪ من النقرات',
                ],
                'sort_order' => 3,
            ],
            [
                'value' => '∞',
                'label' => [
                    'en' => 'Unlimited Sustainable Growth',
                    'ar' => 'نمو مستدام بلا حدود',
                ],
                'description' => [
                    'en' => "Results don't stop — works 24/7",
                    'ar' => 'نتائج مستمرة تعمل على مدار الساعة',
                ],
                'sort_order' => 4,
            ],
        ]);

// Keywords
        $service->keywords()->createMany([
            ['keyword' => ['en' => 'Technical SEO', 'ar' => 'السيو التقني']],
            ['keyword' => ['en' => 'Core Web Vitals', 'ar' => 'Core Web Vitals']],
            ['keyword' => ['en' => 'Schema Markup', 'ar' => 'Schema Markup']],
            ['keyword' => ['en' => 'Website Speed', 'ar' => 'سرعة الموقع']],
            ['keyword' => ['en' => 'Google Indexing', 'ar' => 'أرشفة جوجل']],
            ['keyword' => ['en' => 'Site Structure', 'ar' => 'هيكل الموقع']],
            ['keyword' => ['en' => 'Sitemap', 'ar' => 'Sitemap']],
            ['keyword' => ['en' => 'Robots.txt', 'ar' => 'Robots.txt']],
            ['keyword' => ['en' => 'SEO Optimization', 'ar' => 'تحسين السيو']],
        ]);
        // Section Headings
        $service->contentSections()->createMany([
            [
                'section_key' => ServiceSectionHeadingKey::AUDIT_COVER,
                'title' => [
                    'en' => 'How I Work on Technical SEO',
                    'ar' => 'كيف أعمل على السيو التقني',
                ],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::AUDIT_PROCESS_STEP,
                'title' => [
                    'en' => 'Key Technical Issues I Fix',
                    'ar' => 'أهم المشكلات التقنية التي أقوم بإصلاحها',
                ],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::AUDIT_DELIVERABLE,
                'title' => [
                    'en' => 'Tools I Use',
                    'ar' => 'الأدوات التي أستخدمها',
                ],
            ],
        ]);



        $audit_cover = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Audit_Cover,
            'title' => 'How I Work on Technical SEO',
        ]);

        $audit_cover->cards()->createMany([
            [
                'icon' => 'cpu',
                'title' => ['en' => 'Crawl Budget', 'ar' => 'Crawl Budget'],
                'description' => [
                    'en' => 'Analyzing and optimizing how Google spends its crawl budget across your site.',
                    'ar' => 'تحليل وتحسين طريقة استهلاك Google لميزانية الزحف داخل موقعك.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'settings',
                'title' => ['en' => 'Indexing & Canonicals', 'ar' => 'الأرشفة والكانونيكال'],
                'description' => [
                    'en' => 'Ensuring the right pages get indexed and fixing canonical tag issues.',
                    'ar' => 'التأكد من أرشفة الصفحات الصحيحة ومعالجة مشاكل Canonical.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'title' => ['en' => 'Core Web Vitals', 'ar' => 'Core Web Vitals'],
                'description' => [
                    'en' => 'Improving LCP, CLS, and INP to boost rankings and user experience.',
                    'ar' => 'تحسين LCP وCLS وINP لرفع ترتيب الموقع وتحسين تجربة المستخدم.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => ['en' => 'Structured Data', 'ar' => 'البيانات المنظمة'],
                'description' => [
                    'en' => 'Implementing Schema Markup to generate Rich Snippets.',
                    'ar' => 'تنفيذ Schema Markup للحصول على Rich Snippets.',
                ],
                'sort_order' => 4,
            ],
            [
                'icon' => 'globe',
                'title' => ['en' => 'Hreflang', 'ar' => 'Hreflang'],
                'description' => [
                    'en' => 'Setting up correct Hreflang tags to target audiences by region and language.',
                    'ar' => 'إعداد وسوم Hreflang لاستهداف الدول واللغات بالشكل الصحيح.',
                ],
                'sort_order' => 5,
            ],
            [
                'icon' => 'file-text',
                'title' => ['en' => 'Sitemaps & Robots', 'ar' => 'Sitemap و Robots'],
                'description' => [
                    'en' => 'Building Sitemap.xml and configuring Robots.txt to support proper crawling.',
                    'ar' => 'إنشاء Sitemap.xml وإعداد Robots.txt لتحسين الزحف.',
                ],
                'sort_order' => 6,
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Key Technical Issues
        |--------------------------------------------------------------------------
        */

        $issues = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Audit_Process,
            'title' => 'Key Technical Issues I Fix',
        ]);

        $issues->cards()->createMany([
            [
                'icon' => 'layers',
                'title' => ['en' => 'Duplicate Content', 'ar' => 'المحتوى المكرر'],
                'description' => [
                    'en' => 'Detecting and resolving Duplicate Content that dilutes ranking signals.',
                    'ar' => 'اكتشاف ومعالجة المحتوى المكرر الذي يؤثر على ترتيب الموقع.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'zap',
                'title' => ['en' => 'Slow Page Speed', 'ar' => 'بطء سرعة الموقع'],
                'description' => [
                    'en' => 'Diagnosing speed bottlenecks and implementing fixes.',
                    'ar' => 'تشخيص أسباب البطء وتنفيذ التحسينات اللازمة.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'link',
                'title' => ['en' => 'Broken Links', 'ar' => 'الروابط المكسورة'],
                'description' => [
                    'en' => 'Finding 404 links and redirecting them correctly.',
                    'ar' => 'اكتشاف روابط 404 وإعادة توجيهها بالشكل الصحيح.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => ['en' => 'Missing Schema', 'ar' => 'غياب Schema'],
                'description' => [
                    'en' => 'Auditing existing Schema Markup and adding missing types.',
                    'ar' => 'مراجعة Schema الحالية وإضافة الأنواع المفقودة.',
                ],
                'sort_order' => 4,
            ],
            [
                'icon' => 'search',
                'title' => ['en' => 'Crawl Errors', 'ar' => 'أخطاء الزحف'],
                'description' => [
                    'en' => 'Analyzing GSC Coverage reports and fixing crawl issues.',
                    'ar' => 'تحليل تقارير التغطية في Search Console وإصلاح أخطاء الزحف.',
                ],
                'sort_order' => 5,
            ],
            [
                'icon' => 'eye',
                'title' => ['en' => 'Mobile Issues', 'ar' => 'مشكلات الجوال'],
                'description' => [
                    'en' => 'Testing responsiveness and fixing Mobile Usability issues.',
                    'ar' => 'اختبار التوافق مع الجوال وإصلاح مشاكل Mobile Usability.',
                ],
                'sort_order' => 6,
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Tools
        |--------------------------------------------------------------------------
        */

        $tools = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Audit_Deliverables,
            'title' => 'Tools I Use',
        ]);

        $tools->cards()->createMany([
            [
                'icon' => 'search',
                'title' => ['en' => 'Screaming Frog', 'ar' => 'Screaming Frog'],
                'description' => [
                    'en' => 'Full site crawl to uncover technical issues.',
                    'ar' => 'فحص شامل للموقع لاكتشاف جميع المشاكل التقنية.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'title' => ['en' => 'Google Search Console', 'ar' => 'Google Search Console'],
                'description' => [
                    'en' => 'Real performance, indexing, and coverage data.',
                    'ar' => 'تحليل الأداء والأرشفة والتغطية من بيانات Google.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'trending-up',
                'title' => ['en' => 'Semrush', 'ar' => 'Semrush'],
                'description' => [
                    'en' => 'Keyword, competitor, and backlink analysis.',
                    'ar' => 'تحليل الكلمات المفتاحية والمنافسين والروابط الخلفية.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'link',
                'title' => ['en' => 'Ahrefs', 'ar' => 'Ahrefs'],
                'description' => [
                    'en' => 'Backlink analysis and link opportunities.',
                    'ar' => 'تحليل الروابط الخلفية وفرص بناء الروابط.',
                ],
                'sort_order' => 4,
            ],
            [
                'icon' => 'zap',
                'title' => ['en' => 'PageSpeed Insights', 'ar' => 'PageSpeed Insights'],
                'description' => [
                    'en' => 'Measuring Core Web Vitals and performance.',
                    'ar' => 'قياس Core Web Vitals وأداء الموقع.',
                ],
                'sort_order' => 5,
            ],
            [
                'icon' => 'database',
                'title' => ['en' => 'Log File Analyzer', 'ar' => 'Log File Analyzer'],
                'description' => [
                    'en' => 'Analyzing server logs to understand Googlebot behavior.',
                    'ar' => 'تحليل سجلات الخادم لفهم سلوك Googlebot.',
                ],
                'sort_order' => 6,
            ],
        ]);
        /*
|--------------------------------------------------------------------------
| Content Sections
|--------------------------------------------------------------------------
*/

        $service->contentSections()->createMany([
            [
                'section_key' => ServiceSectionHeadingKey::WHY_ME,
                'eyebrow' => [
                    'en' => 'Why Me?',
                    'ar' => 'لماذا أنا؟',
                ],
                'title' => [
                    'en' => 'What Sets Me Apart as an SEO Expert',
                    'ar' => 'ما الذي يميزني كخبير سيو؟',
                ],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::MY_PROCESS,
                'eyebrow' => [
                    'en' => 'My Process',
                    'ar' => 'منهجية العمل',
                ],
                'title' => [
                    'en' => 'My Professional Technical SEO Methodology',
                    'ar' => 'منهجيتي الاحترافية في السيو التقني',
                ],
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Why Me
        |--------------------------------------------------------------------------
        */

        $whyMe = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Why_Me,
            'title' => 'Why Me',
        ]);

        $whyMe->cards()->createMany([
            [
                'icon' => 'award',
                'title' => [
                    'en' => '40+ Certified Credentials',
                    'ar' => 'أكثر من 40 شهادة احترافية',
                ],
                'description' => [
                    'en' => 'Google, Semrush, Ahrefs & more — documented on LinkedIn.',
                    'ar' => 'شهادات من Google وSemrush وAhrefs وغيرها، موثقة على LinkedIn.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'clock',
                'title' => [
                    'en' => '6+ Years of Specialist Experience',
                    'ar' => 'أكثر من 6 سنوات من الخبرة المتخصصة',
                ],
                'description' => [
                    'en' => 'Across Saudi Arabia, UAE, Egypt and the Arab world.',
                    'ar' => 'خبرة عملية في السعودية والإمارات ومصر ومختلف الأسواق العربية.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'bar-chart',
                'title' => [
                    'en' => '100% Data-Driven Methodology',
                    'ar' => 'منهجية تعتمد بالكامل على البيانات',
                ],
                'description' => [
                    'en' => 'Every decision backed by GSC, Ahrefs & GA4 — no guesswork.',
                    'ar' => 'كل قرار مبني على بيانات فعلية من GSC وAhrefs وGA4 دون أي تخمين.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'layers',
                'title' => [
                    'en' => 'Expertise Across Leading Platforms',
                    'ar' => 'خبرة في أشهر المنصات',
                ],
                'description' => [
                    'en' => 'Salla, Zid, WordPress, Shopify, Magento & Laravel.',
                    'ar' => 'خبرة في سلة، زد، WordPress، Shopify، Magento وLaravel.',
                ],
                'sort_order' => 4,
            ],
            [
                'icon' => 'trending-up',
                'title' => [
                    'en' => 'Measurable Results',
                    'ar' => 'نتائج قابلة للقياس',
                ],
                'description' => [
                    'en' => 'Monthly GSC & Ahrefs reports with clear ROI metrics.',
                    'ar' => 'تقارير شهرية من GSC وAhrefs مع مؤشرات أداء واضحة.',
                ],
                'sort_order' => 5,
            ],
            [
                'icon' => 'message-circle',
                'title' => [
                    'en' => 'Continuous Communication & Full Transparency',
                    'ar' => 'تواصل مستمر وشفافية كاملة',
                ],
                'description' => [
                    'en' => 'You track every step — no working in the dark, no surprises.',
                    'ar' => 'تتابع كل خطوة أثناء التنفيذ دون مفاجآت أو غموض.',
                ],
                'sort_order' => 6,
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | My Process
        |--------------------------------------------------------------------------
        */

        $myProcess = $service->processSections()->create([
            'type' => 'process',
            'key' => ProcessSectionKey::MY_PROCESS,
            'title' => 'My Process',
        ]);

        $myProcess->processSteps()->createMany([
            [
                'number' => 1,
                'title' => [
                    'en' => 'Full crawl budget & site architecture analysis',
                    'ar' => 'تحليل Crawl Budget وبنية الموقع بالكامل',
                ],
                'sort_order' => 1,
            ],
            [
                'number' => 2,
                'title' => [
                    'en' => 'Review and fix robots-old.txt, Sitemap and Canonical tags',
                    'ar' => 'مراجعة وإصلاح Robots.txt وSitemap وCanonical',
                ],
                'sort_order' => 2,
            ],
            [
                'number' => 3,
                'title' => [
                    'en' => 'Core Web Vitals improvement: LCP, CLS, INP',
                    'ar' => 'تحسين Core Web Vitals (LCP، CLS، INP)',
                ],
                'sort_order' => 3,
            ],
            [
                'number' => 4,
                'title' => [
                    'en' => 'Advanced Schema Markup & structured data implementation',
                    'ar' => 'تنفيذ Schema Markup والبيانات المنظمة بشكل احترافي',
                ],
                'sort_order' => 4,
            ],
            [
                'number' => 5,
                'title' => [
                    'en' => 'Fix indexation issues, duplicate content & pagination',
                    'ar' => 'حل مشاكل الأرشفة والمحتوى المكرر والـ Pagination',
                ],
                'sort_order' => 5,
            ],
            [
                'number' => 6,
                'title' => [
                    'en' => 'GSC & Ahrefs reporting setup and ongoing monitoring',
                    'ar' => 'إعداد تقارير GSC وAhrefs والمتابعة المستمرة',
                ],
                'sort_order' => 6,
            ],
        ]);
        /*
|--------------------------------------------------------------------------
| Content Section
|--------------------------------------------------------------------------
*/

        $service->contentSections()->createMany([
            [
                'section_key' => ServiceSectionHeadingKey::COMPARISON,
                'eyebrow' => [
                    'en' => 'The Comparison',
                    'ar' => 'المقارنة',
                ],
                'title' => [
                    'en' => 'Technical SEO Expert vs. Traditional Methods',
                    'ar' => 'خبير السيو التقني مقابل الطرق التقليدية',
                ],
            ],
            [
                'section_key' => ServiceSectionHeadingKey::FAQ,
                'eyebrow' => [
                    'en' => 'FAQ',
                    'ar' => 'الأسئلة الشائعة',
                ],
                'title' => [
                    'en' => 'Common Technical SEO Questions',
                    'ar' => 'الأسئلة الشائعة حول السيو التقني',
                ],
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Comparison
        |--------------------------------------------------------------------------
        */

        $service->comparisons()->createMany([
            [
                'feature' => [
                    'en' => 'Core Web Vitals improvement with measurement & verification',
                    'ar' => 'تحسين Core Web Vitals مع القياس والتحقق',
                ],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 1,
            ],
            [
                'feature' => [
                    'en' => 'Canonical & duplicate content fixes',
                    'ar' => 'حل مشاكل Canonical والمحتوى المكرر',
                ],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 2,
            ],
            [
                'feature' => [
                    'en' => 'Crawl budget analysis & optimization',
                    'ar' => 'تحليل وتحسين Crawl Budget',
                ],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 3,
            ],
            [
                'feature' => [
                    'en' => 'Advanced tested Schema Markup',
                    'ar' => 'تنفيذ Schema Markup احترافي ومختبر',
                ],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 4,
            ],
            [
                'feature' => [
                    'en' => 'Weekly GSC monitoring',
                    'ar' => 'متابعة أسبوعية لـ Google Search Console',
                ],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 5,
            ],
            [
                'feature' => [
                    'en' => 'Ready-to-implement developer instructions',
                    'ar' => 'تعليمات جاهزة للمطور للتنفيذ',
                ],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 6,
            ],
            [
                'feature' => [
                    'en' => 'Measurable before/after reports',
                    'ar' => 'تقارير قبل وبعد قابلة للقياس',
                ],
                'expert_value' => true,
                'traditional_value' => false,
                'sort_order' => 7,
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | FAQ
        |--------------------------------------------------------------------------
        */

        $service->faqs()->createMany([
            [
                'question' => [
                    'en' => 'How important are Core Web Vitals for my rankings?',
                    'ar' => 'ما مدى أهمية Core Web Vitals في ترتيب موقعي؟',
                ],
                'answer' => [
                    'en' => 'Core Web Vitals are an official Google ranking factor. Improving LCP, CLS, and INP enhances both search visibility and user experience.',
                    'ar' => 'تُعد Core Web Vitals عامل ترتيب رسمي لدى Google، وتحسين مؤشرات LCP وCLS وINP ينعكس مباشرة على ترتيب الموقع وتجربة المستخدم.',
                ],
            ],
            [
                'question' => [
                    'en' => 'Is technical SEO suitable for eCommerce stores?',
                    'ar' => 'هل السيو التقني مناسب لمتاجر التجارة الإلكترونية؟',
                ],
                'answer' => [
                    'en' => 'Absolutely. Large eCommerce websites benefit greatly from improving crawlability, indexing, structured data, and website speed.',
                    'ar' => 'بالتأكيد، حيث يساعد السيو التقني المتاجر الإلكترونية على تحسين الأرشفة، وسرعة الموقع، والبيانات المنظمة، وتجربة المستخدم.',
                ],
            ],
            [
                'question' => [
                    'en' => 'How long does fixing technical issues take?',
                    'ar' => 'كم يستغرق إصلاح المشكلات التقنية؟',
                ],
                'answer' => [
                    'en' => 'It depends on the website size and issue complexity, but most improvements begin to appear shortly after implementation.',
                    'ar' => 'يعتمد ذلك على حجم الموقع وطبيعة المشكلات، لكن غالبًا تبدأ النتائج بالظهور بعد تنفيذ الإصلاحات بفترة قصيرة.',
                ],
            ],
            [
                'question' => [
                    'en' => 'Do you work directly with developers?',
                    'ar' => 'هل تعمل مباشرة مع فريق التطوير؟',
                ],
                'answer' => [
                    'en' => 'Yes. I provide detailed implementation instructions and collaborate directly with developers when needed.',
                    'ar' => 'نعم، أقدم تعليمات تنفيذ واضحة وأتعاون مباشرة مع المطورين لضمان تنفيذ جميع التوصيات بالشكل الصحيح.',
                ],
            ],
            [
                'question' => [
                    'en' => 'Can you fix a site after a Google penalty?',
                    'ar' => 'هل يمكنك إصلاح موقع تعرض لعقوبة من Google؟',
                ],
                'answer' => [
                    'en' => 'Yes. The first step is identifying the cause, then applying the proper technical and content fixes before submitting for reconsideration if required.',
                    'ar' => 'نعم، يتم أولًا تحديد سبب العقوبة ثم معالجة المشكلات التقنية أو المتعلقة بالمحتوى قبل اتخاذ الإجراءات المناسبة لاستعادة الموقع.',
                ],
            ],
            [
                'question' => [
                    'en' => 'What is the difference between technical SEO and an audit?',
                    'ar' => 'ما الفرق بين السيو التقني والتدقيق التقني (SEO Audit)؟',
                ],
                'answer' => [
                    'en' => 'An audit identifies issues, while Technical SEO focuses on implementing the fixes and continuously improving the website.',
                    'ar' => 'التدقيق التقني يكتشف المشكلات، بينما السيو التقني يشمل تنفيذ الإصلاحات وتحسين الموقع بشكل مستمر.',
                ],
            ],
        ]);
        /*
|--------------------------------------------------------------------------
| Content Sections
|--------------------------------------------------------------------------
*/

        $service->contentSections()->createMany([
            [
                'section_key' => ServiceSectionHeadingKey::WHY_CHOOSE,
                'eyebrow' => [
                    'en' => 'Why Choose Mohamed',
                    'ar' => 'لماذا تختار محمد؟',
                ],
                'title' => [
                    'en' => 'The Difference Between a Real Expert and the Rest',
                    'ar' => 'الفرق بين الخبير الحقيقي والبقية',
                ],
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Expert Approach
        |--------------------------------------------------------------------------
        */

        $expertApproach = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Expert_Approach,
            'title' => 'Expert Approach',
        ]);

        $expertApproach->cards()->createMany([
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Expert Approach',
                    'ar' => 'أسلوبي في العمل',
                ],
                'description' => [
                    'en' => 'I work directly with developers at code level, providing precise technical instructions for Next.js, Django, Laravel, and WordPress. I understand the SEO impact of Server-Side Rendering, Static Generation, and modern web architectures.',
                    'ar' => 'أعمل مباشرة مع المطورين على مستوى الكود، وأقدم تعليمات تقنية دقيقة لمشاريع Next.js وDjango وLaravel وWordPress، مع فهم كامل لتأثير Server-Side Rendering وStatic Generation على السيو.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'layers',
                'title' => [
                    'en' => 'Advanced Schema Implementation',
                    'ar' => 'تنفيذ احترافي للـ Schema',
                ],
                'description' => [
                    'en' => 'I build complete Schema architecture including Entity, Organization, Product, FAQ, Breadcrumb and more, then validate everything using Google Rich Results Test and Search Console.',
                    'ar' => 'أقوم ببناء هيكل Schema متكامل يشمل Entity وOrganization وProduct وFAQ وBreadcrumb وغيرها، مع اختبارها عبر Google Rich Results Test وGoogle Search Console.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'title' => [
                    'en' => 'Performance Optimization',
                    'ar' => 'تحسين الأداء',
                ],
                'description' => [
                    'en' => 'I optimize Core Web Vitals using real engineering solutions including Lazy Loading, Critical CSS, TTFB optimization, preload strategies, and server-level improvements.',
                    'ar' => 'أحسن Core Web Vitals بحلول تقنية حقيقية تشمل Lazy Loading وCritical CSS وتحسين TTFB وPreload وتحسين إعدادات الخادم.',
                ],
                'sort_order' => 3,
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Regular Approach
        |--------------------------------------------------------------------------
        */

        $regularApproach = $service->cardSections()->create([
            'type' => 'card',
            'key' => CardSectionKey::Regular_Approach,
            'title' => 'Regular Approach',
        ]);

        $regularApproach->cards()->createMany([
            [
                'title' => [
                    'en' => 'Requests generic changes from developers without sufficient technical knowledge.',
                    'ar' => 'يطلب تعديلات عامة من المطور دون معرفة تقنية كافية.',
                ],
                'sort_order' => 1,
            ],
            [
                'title' => [
                    'en' => 'Adds simple Schema or relies on ready-made plugins without customization.',
                    'ar' => 'يعتمد على إضافات جاهزة أو يضيف Schema بشكل سطحي دون تخصيص.',
                ],
                'sort_order' => 2,
            ],
            [
                'title' => [
                    'en' => 'Only compresses images and considers the optimization complete.',
                    'ar' => 'يكتفي بضغط الصور ويعتبر أن تحسين الأداء قد انتهى.',
                ],
                'sort_order' => 3,
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Expert CTA
        |--------------------------------------------------------------------------
        */

        $service->ctas()->create([
            'section_key' => 'expert_cta',

            'icon' => 'rocket',

            'title' => [
                'en' => 'Ready to Work with a Real Expert?',
                'ar' => 'هل أنت مستعد للعمل مع خبير حقيقي؟',
            ],

            'description' => [
                'en' => 'Stop wasting time with agencies that deliver empty reports. Work with a Technical SEO expert who understands the Arab & Gulf market and delivers measurable results.',
                'ar' => 'توقف عن إضاعة الوقت مع الجهات التي تقدم تقارير بلا نتائج. اعمل مع خبير سيو تقني يفهم السوق العربي والخليجي ويقدم نتائج قابلة للقياس.',
            ],
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
                    'en' => '300+ Sites',
                    'ar' => '+300 موقع',
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
                    'en' => '6+ Years Exp.',
                    'ar' => '+6 سنوات خبرة',
                ],
                'sort_order' => 3,
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | WhatsApp CTA
        |--------------------------------------------------------------------------
        */

        $service->ctas()->create([
            'section_key' => 'whatsapp_cta',

            'title' => [
                'en' => 'Turn Your Site Into an Unstoppable Technical Structure',
                'ar' => 'حوّل موقعك إلى بنية تقنية لا يمكن إيقافها',
            ],

            'description' => [
                'en' => 'Technical SEO expert for Salla, Zid, WordPress, Shopify, Magento and Laravel.',
                'ar' => 'خبير سيو تقني لمنصات سلة، زد، WordPress، Shopify، Magento وLaravel.',
            ],

            'button_text' => [
                'en' => 'Start Now on WhatsApp',
                'ar' => 'ابدأ الآن عبر واتساب',
            ],

            'button_url' => 'https://wa.me/201234567890',
        ]);
    }

}
