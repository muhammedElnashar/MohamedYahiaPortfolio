<?php

namespace Database\Seeders\Blog;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Category
        |--------------------------------------------------------------------------
        */

        $category = BlogCategory::firstOrCreate(
            [
                'slug' => 'seo',
            ],
            [
                'name' => [
                    'ar' => 'تحسين محركات البحث',
                    'en' => 'SEO',
                ],

                'is_active' => true,
                'sort_order' => 1,
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | Blog
        |--------------------------------------------------------------------------
        */

        $blog = Blog::updateOrCreate(

            [
                'slug' => 'complete-seo-guide',
            ],

            [
                'blog_category_id' => $category->id,

                'title' => [
                    'ar' => 'الدليل الشامل لتحسين محركات البحث SEO من الأساسيات إلى استراتيجية متكاملة',
                    'en' => 'The Complete SEO Guide: From Fundamentals to a Complete Strategy',
                ],

                'excerpt' => [
                    'ar' => 'دليل عملي لفهم تحسين محركات البحث بداية من Technical SEO والكلمات المفتاحية والمحتوى، وصولًا إلى بناء استراتيجية SEO قابلة للقياس والتطوير.',
                    'en' => 'A practical guide to SEO covering technical optimization, keyword research, content, internal linking, measurement, and building a complete search strategy.',
                ],


                /*
                |--------------------------------------------------------------------------
                | Content
                |--------------------------------------------------------------------------
                */

                'content' => [

                    'ar' => <<<'HTML'

<p>
تحسين محركات البحث (SEO) ليس مجرد إضافة كلمات مفتاحية إلى صفحات الموقع، بل هو منظومة متكاملة تجمع بين الجانب التقني، جودة المحتوى، تجربة المستخدم، فهم نية البحث، وبناء سلطة الموقع على المدى الطويل.
</p>

<p>
في هذا الدليل سنبني تصورًا عمليًا لاستراتيجية SEO متكاملة، بداية من فهم طريقة عمل محركات البحث، مرورًا بالتحسين التقني والمحتوى والكلمات المفتاحية، وحتى قياس النتائج وتطوير الاستراتيجية باستمرار.
</p>


<h2>ما هو تحسين محركات البحث SEO؟</h2>

<p>
تحسين محركات البحث هو مجموعة من الممارسات التي تهدف إلى تحسين ظهور صفحات الموقع في نتائج البحث العضوية عندما يبحث المستخدم عن منتجات أو خدمات أو معلومات مرتبطة بما يقدمه الموقع.
</p>

<p>
ولا يتعلق SEO بالحصول على ترتيب مرتفع فقط، بل بجذب المستخدم المناسب إلى الصفحة المناسبة في الوقت المناسب، ثم تقديم تجربة تساعده على الوصول إلى ما يبحث عنه بسهولة.
</p>

<blockquote>
    <p>
        الهدف الحقيقي من SEO ليس زيادة الزيارات فقط، وإنما جذب زيارات ذات قيمة يمكن أن تتحول إلى عملاء أو مبيعات أو فرص أعمال.
    </p>
</blockquote>


<h2>كيف تعمل محركات البحث؟</h2>

<p>
قبل تحسين الموقع لمحركات البحث، من المهم فهم المراحل الأساسية التي تمر بها الصفحة قبل ظهورها في نتائج البحث.
</p>


<h3>Crawling – الزحف</h3>

<p>
تستخدم محركات البحث برامج آلية لاكتشاف الصفحات والروابط الموجودة على الويب. لذلك يساعد الهيكل الداخلي الواضح للموقع والروابط الداخلية الصحيحة على اكتشاف المحتوى بكفاءة أكبر.
</p>


<h3>Indexing – الفهرسة</h3>

<p>
بعد اكتشاف الصفحة، تقوم محركات البحث بتحليل محتواها ومحاولة فهم الموضوع والعناصر والعلاقات الموجودة فيها قبل تحديد إمكانية إضافتها إلى الفهرس.
</p>


<h3>Ranking – الترتيب</h3>

<p>
عند إجراء عملية بحث، تحاول خوارزميات البحث اختيار الصفحات الأكثر ملاءمة للاستعلام وترتيبها وفق مجموعة كبيرة من الإشارات المتعلقة بالصلة والجودة وتجربة المستخدم.
</p>


<h2>العناصر الأساسية لاستراتيجية SEO</h2>

<p>
الاستراتيجية القوية لا تعتمد على عنصر واحد، بل تحتاج إلى العمل على عدة محاور بشكل متكامل.
</p>

<ul>
    <li>Technical SEO وتحسين البنية التقنية للموقع.</li>
    <li>Keyword Research وفهم ما يبحث عنه الجمهور.</li>
    <li>On-Page SEO وتحسين صفحات الموقع.</li>
    <li>Content SEO وإنشاء محتوى يخدم نية البحث.</li>
    <li>Internal Linking وربط المحتوى بطريقة منطقية.</li>
    <li>Off-Page SEO وتعزيز إشارات الثقة والسلطة.</li>
    <li>القياس والتحليل والتحسين المستمر.</li>
</ul>


<h2>Technical SEO</h2>

<p>
Technical SEO يهتم بمساعدة محركات البحث على الوصول إلى الموقع وفهمه وفهرسته، مع الحفاظ على تجربة استخدام جيدة وأداء مناسب.
</p>


<h3>سرعة الموقع</h3>

<p>
الموقع البطيء قد يؤثر على تجربة المستخدم. لذلك من المهم مراجعة الصور والخطوط والملفات البرمجية والـ caching وطريقة تحميل الموارد.
</p>


<h3>Core Web Vitals</h3>

<p>
تساعد مؤشرات Core Web Vitals في تقييم جوانب مهمة من تجربة الصفحة مثل سرعة ظهور المحتوى الرئيسي، استجابة الصفحة لتفاعل المستخدم، والاستقرار البصري أثناء التحميل.
</p>


<h3>قابلية الزحف والفهرسة</h3>

<p>
يجب التأكد من أن الصفحات المهمة متاحة لمحركات البحث وأن إعدادات robots وcanonical وsitemap لا تمنع الفهرسة المطلوبة عن طريق الخطأ.
</p>


<h3>Mobile Experience</h3>

<p>
يجب أن يكون التصميم متجاوبًا، والنص واضحًا، والأزرار سهلة الاستخدام، والمحتوى قابلًا للقراءة على الشاشات الصغيرة.
</p>


<h2>البحث عن الكلمات المفتاحية</h2>

<p>
اختيار الكلمات المفتاحية لا يبدأ من حجم البحث فقط، بل من فهم المستخدم والمرحلة التي يمر بها وما الذي يريد الوصول إليه.
</p>


<h3>Search Intent</h3>

<p>
يمكن أن تختلف نية المستخدم بشكل كبير بين استعلام وآخر. بعض عمليات البحث تهدف إلى التعلم، بينما يكون بعضها موجهًا للمقارنة أو الوصول إلى منتج أو اتخاذ قرار شراء.
</p>

<ol>
    <li>حدد الموضوع الأساسي للصفحة.</li>
    <li>اجمع الاستعلامات المرتبطة بالموضوع.</li>
    <li>حلل نتائج البحث الحالية.</li>
    <li>حدد نية البحث الأساسية.</li>
    <li>اختر الكلمة الرئيسية والكلمات الداعمة.</li>
    <li>أنشئ الصفحة بما يناسب احتياج المستخدم الفعلي.</li>
</ol>


<h2>On-Page SEO</h2>

<p>
بعد تحديد الموضوع والكلمات المناسبة، يأتي دور تحسين الصفحة نفسها بحيث يكون محتواها وهيكلها واضحين للمستخدم ومحركات البحث.
</p>


<h3>عنوان الصفحة</h3>

<p>
يجب أن يصف العنوان موضوع الصفحة بوضوح، ويكون جذابًا للمستخدم دون حشو الكلمات المفتاحية.
</p>


<h3>Meta Description</h3>

<p>
الوصف التعريفي يقدم ملخصًا للصفحة ويمكن أن يساعد المستخدم على فهم المحتوى قبل زيارة الصفحة.
</p>


<h3>Headings</h3>

<p>
استخدم H1 للعنوان الرئيسي، ثم H2 للأقسام الأساسية وH3 للتفاصيل التابعة لها، بحيث يكون تسلسل المحتوى منطقيًا وسهل القراءة.
</p>


<h2>Content SEO</h2>

<p>
المحتوى الجيد يجب أن يجيب عن احتياج المستخدم بوضوح، وليس مجرد الوصول إلى عدد معين من الكلمات.
</p>

<blockquote>
    <p>
        اكتب بالقدر الذي يحتاجه الموضوع والمستخدم، وليس بالقدر الذي يسمح لك بتكرار الكلمة المفتاحية.
    </p>
</blockquote>


<h2>الروابط الداخلية Internal Linking</h2>

<p>
الروابط الداخلية تساعد المستخدم على الانتقال إلى محتوى مرتبط، كما تساعد محركات البحث على اكتشاف العلاقات بين صفحات الموقع وفهم بنيته.
</p>


<h2>مقارنة بين أهم عناصر SEO</h2>

<table>
    <thead>
        <tr>
            <th>العنصر</th>
            <th>الهدف</th>
            <th>مثال</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>Technical SEO</td>
            <td>تحسين البنية التقنية والزحف والفهرسة</td>
            <td>Speed, Canonical, Sitemap</td>
        </tr>

        <tr>
            <td>On-Page SEO</td>
            <td>تحسين الصفحة ومحتواها</td>
            <td>Title, Headings, Internal Links</td>
        </tr>

        <tr>
            <td>Content SEO</td>
            <td>تلبية نية البحث</td>
            <td>Articles, Guides, Landing Pages</td>
        </tr>

        <tr>
            <td>Off-Page SEO</td>
            <td>تعزيز الثقة والسلطة</td>
            <td>Links & External Mentions</td>
        </tr>

    </tbody>
</table>


<h2>كيف تبني خطة SEO عملية؟</h2>


<h3>01. Audit</h3>

<p>
ابدأ بتحليل الوضع الحالي للموقع، بما يشمل المشاكل التقنية والفهرسة والمحتوى وبنية الصفحات والأداء الحالي.
</p>


<h3>02. Strategy</h3>

<p>
حدد الأولويات والكلمات والصفحات المستهدفة والفرص التي تستحق العمل عليها بناءً على أهداف المشروع.
</p>


<h3>03. Execute</h3>

<p>
نفذ التحسينات التقنية وطوّر الصفحات وأنشئ المحتوى وحسّن الروابط الداخلية.
</p>


<h3>04. Measure</h3>

<p>
راقب الظهور والنقرات والترتيب والزيارات العضوية والتحويلات.
</p>


<h3>05. Optimize</h3>

<p>
استخدم النتائج لتحديث المحتوى وتحسين الصفحات ومعالجة المشاكل والاستفادة من الفرص الجديدة.
</p>


<h2>أخطاء SEO الشائعة</h2>

<ul>
    <li>استهداف نفس الكلمة بعدة صفحات بدون استراتيجية.</li>
    <li>إنشاء محتوى لا يتوافق مع نية البحث.</li>
    <li>إهمال مشاكل الفهرسة والزحف.</li>
    <li>وجود صفحات متشابهة أو ضعيفة القيمة.</li>
    <li>إهمال الروابط الداخلية.</li>
    <li>عدم قياس التحويلات.</li>
    <li>عدم تحديث الصفحات المهمة.</li>
</ul>


<h2>كيف تقيس نجاح استراتيجية SEO؟</h2>

<table>

    <thead>
        <tr>
            <th>KPI</th>
            <th>ماذا يقيس؟</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>Impressions</td>
            <td>مرات ظهور صفحات الموقع في نتائج البحث.</td>
        </tr>

        <tr>
            <td>Clicks</td>
            <td>الزيارات القادمة من نتائج البحث.</td>
        </tr>

        <tr>
            <td>CTR</td>
            <td>نسبة النقر مقارنة بعدد مرات الظهور.</td>
        </tr>

        <tr>
            <td>Conversions</td>
            <td>الإجراءات المهمة الناتجة عن الزيارات العضوية.</td>
        </tr>

    </tbody>

</table>


<h2>الخلاصة</h2>

<p>
SEO عملية مستمرة تجمع بين التحليل والتخطيط والتنفيذ والقياس. الموقع القوي لا يعتمد على مقال واحد أو كلمة مفتاحية واحدة، وإنما على بنية واضحة ومحتوى مفيد وأداء تقني جيد وتجربة مستخدم مناسبة.
</p>

<p>
ابدأ بالمشاكل والفرص الأعلى تأثيرًا، ثم راقب النتائج وطور الاستراتيجية بناءً على البيانات بدل تنفيذ تغييرات عشوائية.
</p>

HTML,


                    'en' => <<<'HTML'

<p>
SEO is not simply about adding keywords to web pages. It is a complete system combining technical optimization, content quality, user experience, search intent, and long-term authority building.
</p>

<p>
In this guide, we will build a practical SEO framework covering how search engines work, technical SEO, keyword research, content optimization, measurement, and continuous improvement.
</p>

<h2>What is SEO?</h2>

<p>
Search Engine Optimization is the process of improving a website and its pages to increase their visibility in organic search results for relevant searches.
</p>

<blockquote>
    <p>
        The real goal of SEO is not traffic alone. It is attracting the right visitors who can become customers, leads, or valuable users.
    </p>
</blockquote>

<h2>How Do Search Engines Work?</h2>

<h3>Crawling</h3>

<p>
Search engines use automated systems to discover pages and links across the web.
</p>

<h3>Indexing</h3>

<p>
After discovering a page, search engines analyze its content and determine whether it should be included in their index.
</p>

<h3>Ranking</h3>

<p>
When someone performs a search, ranking systems attempt to select the most relevant and useful pages for that query.
</p>

<h2>The Core Elements of SEO</h2>

<ul>
    <li>Technical SEO</li>
    <li>Keyword Research</li>
    <li>On-Page SEO</li>
    <li>Content SEO</li>
    <li>Internal Linking</li>
    <li>Off-Page SEO</li>
    <li>Measurement and continuous optimization</li>
</ul>

<h2>Technical SEO</h2>

<p>
Technical SEO helps search engines access, understand, and index a website while maintaining strong performance and user experience.
</p>

<h3>Site Performance</h3>

<p>
Optimizing images, fonts, scripts, caching, and resource loading can improve website performance.
</p>

<h3>Core Web Vitals</h3>

<p>
Core Web Vitals provide useful signals for understanding important aspects of page experience.
</p>

<h3>Crawling and Indexing</h3>

<p>
Important pages should be accessible to search engines, while robots directives, canonical tags, and sitemaps should be configured correctly.
</p>

<h2>Keyword Research</h2>

<p>
Keyword research should consider search intent and business value rather than search volume alone.
</p>

<ol>
    <li>Define the primary topic.</li>
    <li>Discover related search queries.</li>
    <li>Analyze the current search results.</li>
    <li>Understand search intent.</li>
    <li>Select primary and supporting keywords.</li>
    <li>Create a page that satisfies the user's actual need.</li>
</ol>

<h2>On-Page SEO</h2>

<p>
On-page SEO helps users and search engines understand the purpose and structure of an individual page.
</p>

<h3>Page Titles</h3>

<p>
A page title should clearly describe the page while remaining useful and compelling to searchers.
</p>

<h3>Headings</h3>

<p>
Use a clear hierarchy of H1, H2, and H3 headings to organize content logically.
</p>

<h2>Content SEO</h2>

<p>
Great content should solve the user's problem rather than simply reach a predefined word count.
</p>

<blockquote>
    <p>
        Write as much as the topic requires, not as much as needed to repeat a keyword.
    </p>
</blockquote>

<h2>SEO Strategy Framework</h2>

<h3>01. Audit</h3>
<p>Understand the website's current technical, content, and search performance.</p>

<h3>02. Strategy</h3>
<p>Define priorities, target topics, pages, and opportunities.</p>

<h3>03. Execute</h3>
<p>Implement technical improvements, content, and internal linking.</p>

<h3>04. Measure</h3>
<p>Track visibility, clicks, rankings, organic traffic, and conversions.</p>

<h3>05. Optimize</h3>
<p>Use performance data to continuously improve the strategy.</p>

<h2>Conclusion</h2>

<p>
SEO is an ongoing process of analysis, strategy, execution, measurement, and improvement.
</p>

HTML,

                ],


                /*
                |--------------------------------------------------------------------------
                | Other fields
                |--------------------------------------------------------------------------
                */

                'author_name' => 'SEO Team',

                'reading_time' => 12,

                'meta_title' => [
                    'ar' => 'الدليل الشامل لتحسين محركات البحث SEO',
                    'en' => 'The Complete SEO Guide',
                ],

                'meta_description' => [
                    'ar' => 'دليل شامل لفهم SEO والتحسين التقني والكلمات المفتاحية والمحتوى وبناء استراتيجية متكاملة لتحسين ظهور الموقع في نتائج البحث.',
                    'en' => 'Learn SEO from technical optimization and keyword research to content, internal linking, measurement, and building a complete search strategy.',
                ],


                /*
                |--------------------------------------------------------------------------
                | FAQ
                |--------------------------------------------------------------------------
                */



                'is_featured' => true,

                'is_active' => true,

                'published_at' => now(),

            ]

        );


        /*
        |--------------------------------------------------------------------------
        | Tags
        |--------------------------------------------------------------------------
        |
        | نضيفها بعد ما نتأكد من اسم Model والعلاقة عندك.
        |
        */
        $blog->faqs()->createMany([

            [
                'question' => [
                    'ar' => 'ما هو تحسين محركات البحث SEO؟',
                    'en' => 'What is SEO?',
                ],

                'answer' => [
                    'ar' => 'تحسين محركات البحث هو مجموعة من الممارسات التي تهدف إلى تحسين ظهور صفحات الموقع في نتائج البحث وزيادة الزيارات العضوية.',
                    'en' => 'SEO is a set of practices designed to improve website visibility in search results and increase organic traffic.',
                ],

                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'question' => [
                    'ar' => 'كم يستغرق ظهور نتائج SEO؟',
                    'en' => 'How long does SEO take to show results?',
                ],

                'answer' => [
                    'ar' => 'تختلف المدة حسب حالة الموقع والمنافسة والكلمات المفتاحية، وعادة تبدأ المؤشرات الأولية بالظهور تدريجيًا مع استمرار تنفيذ الاستراتيجية.',
                    'en' => 'The timeline varies depending on the website, competition, and target keywords, with improvements typically appearing progressively.',
                ],

                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'question' => [
                    'ar' => 'ما الفرق بين Technical SEO وOn-Page SEO؟',
                    'en' => 'What is the difference between Technical SEO and On-Page SEO?',
                ],

                'answer' => [
                    'ar' => 'يركز Technical SEO على الجوانب التقنية مثل الزحف والفهرسة والأداء، بينما يهتم On-Page SEO بمحتوى الصفحة والعناوين والكلمات المفتاحية والروابط الداخلية.',
                    'en' => 'Technical SEO focuses on crawling, indexing, and technical performance, while On-Page SEO focuses on page content, headings, keywords, and internal links.',
                ],

                'sort_order' => 3,
                'is_active' => true,
            ],

        ]);
    }
}
