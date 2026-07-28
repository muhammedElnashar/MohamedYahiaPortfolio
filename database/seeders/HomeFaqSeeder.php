<?php

namespace Database\Seeders;

use App\Models\HomeFaq;
use Illuminate\Database\Seeder;

class HomeFaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [

            [
                'question' => [
                    'ar' => 'كم من الوقت تظهر نتائج SEO؟',
                    'en' => 'How long does it take to see SEO results?',
                ],
                'answer' => [
                    'ar' => 'تختلف مدة ظهور نتائج السيو حسب حالة الموقع والمنافسة والكلمات المستهدفة، لكن عادة تبدأ المؤشرات الأولية خلال أسابيع، بينما تحتاج النتائج الأقوى إلى عدة أشهر من العمل المستمر.',
                    'en' => 'SEO results depend on the website, competition, and target keywords. Initial improvements may appear within weeks, while stronger results typically require several months of consistent work.',
                ],
                'sort_order' => 1,
            ],

            [
                'question' => [
                    'ar' => 'هل تضمن وصول الموقع لأول نتائج جوجل؟',
                    'en' => 'Do you guarantee first-page Google rankings?',
                ],
                'answer' => [
                    'ar' => 'لا يمكن ضمان ترتيب محدد في جوجل، لكن أعمل على استراتيجية مبنية على البيانات والتحسين التقني والمحتوى وبناء السلطة لزيادة فرص الوصول إلى نتائج متقدمة بشكل مستدام.',
                    'en' => 'No specific Google ranking can be guaranteed. I focus on data-driven SEO, technical optimization, content, and authority building to improve the chances of sustainable ranking growth.',
                ],
                'sort_order' => 2,
            ],

            [
                'question' => [
                    'ar' => 'ما الفرق بين SEO والإعلانات المدفوعة؟',
                    'en' => 'What is the difference between SEO and paid advertising?',
                ],
                'answer' => [
                    'ar' => 'الإعلانات المدفوعة توفر زيارات طالما تستمر في الإنفاق، بينما يهدف SEO إلى بناء ظهور عضوي طويل المدى يمكن أن يستمر ويحقق زيارات دون دفع مقابل كل نقرة.',
                    'en' => 'Paid advertising generates traffic while you continue spending, whereas SEO builds long-term organic visibility that can continue generating traffic without paying for every click.',
                ],
                'sort_order' => 3,
            ],

            [
                'question' => [
                    'ar' => 'هل يصلح SEO لموقعي إذا كان صغيرًا أو جديدًا؟',
                    'en' => 'Is SEO suitable for a small or new website?',
                ],
                'answer' => [
                    'ar' => 'نعم، بل إن البدء مبكرًا يساعد على بناء الموقع بطريقة صحيحة من البداية، واختيار الكلمات المناسبة، وتجنب المشكلات التقنية والمحتوى الذي يصعب تحسينه لاحقًا.',
                    'en' => 'Yes. Starting SEO early helps build the website correctly from the beginning, target the right keywords, and avoid technical and content issues that become harder to fix later.',
                ],
                'sort_order' => 4,
            ],

            [
                'question' => [
                    'ar' => 'ما المنصات التي تدعمها؟',
                    'en' => 'Which platforms do you support?',
                ],
                'answer' => [
                    'ar' => 'أعمل مع مجموعة متنوعة من المنصات والمتاجر وأنظمة إدارة المحتوى، ويتم تحديد الاستراتيجية التقنية المناسبة وفق بنية كل منصة ومتطلبات المشروع.',
                    'en' => 'I work with a wide range of e-commerce platforms and content management systems, with the technical SEO strategy adapted to each platform and project.',
                ],
                'sort_order' => 5,
            ],

            [
                'question' => [
                    'ar' => 'كيف تقيس نجاح الحملة؟',
                    'en' => 'How do you measure SEO campaign success?',
                ],
                'answer' => [
                    'ar' => 'أقيس النتائج باستخدام مؤشرات مرتبطة بهدف المشروع مثل الزيارات العضوية، الظهور، النقرات، ترتيب الكلمات، التحويلات، ونمو الصفحات التي تحقق نتائج فعلية.',
                    'en' => 'Success is measured using metrics aligned with the project goals, including organic traffic, impressions, clicks, keyword rankings, conversions, and growth of high-performing pages.',
                ],
                'sort_order' => 6,
            ],

            [
                'question' => [
                    'ar' => 'مشروع لمرة واحدة أم تعاون شهري؟',
                    'en' => 'Do you offer one-time projects or monthly SEO?',
                ],
                'answer' => [
                    'ar' => 'كلاهما متاح حسب احتياج المشروع. يمكن تنفيذ تدقيق أو تحسين تقني كمشروع محدد، كما يمكن العمل بشكل شهري على استراتيجية SEO مستمرة تشمل التحليل والتحسين والمحتوى ومتابعة النتائج.',
                    'en' => 'Both options are available depending on the project. I can handle focused audits or technical projects, as well as ongoing monthly SEO covering analysis, optimization, content, and performance tracking.',
                ],
                'sort_order' => 7,
            ],

        ];

        foreach ($faqs as $faq) {

            HomeFaq::updateOrCreate(
                [
                    'sort_order' => $faq['sort_order'],
                ],
                [
                    ...$faq,
                    'is_active' => true,
                ]
            );
        }
    }
}
