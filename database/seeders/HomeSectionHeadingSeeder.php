<?php

namespace Database\Seeders;

use App\Enums\HomeSectionKey;
use App\Models\HomeSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionHeadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $headings = [
            [
                'section_key' => HomeSectionKey::WHY_SEO,
                'eyebrow' => [
                    'en' => 'Why SEO?',
                    'ar' => 'لماذا SEO؟'
                ],
                'title' => [
                    'en' => 'Without SEO, you don\'t exist online',
                    'ar' => 'بدون سيو، أنت غير موجود على الإنترنت'
                ],
                'subtitle' => [
                    'en' => 'Google processes 8.5 billion searches daily — your clients are searching right now. The question: do they find you?',
                    'ar' => 'جوجل يعالج 8.5 مليار بحث يومياً — عملاؤك يبحثون الآن. السؤال: هل يجدونك؟',
                ],
            ],
            [
                'section_key' => HomeSectionKey::SERVICES,
                'eyebrow' => [
                    'en' => 'Services',
                    'ar' => 'الخدمات'
                ],
                'title' => [
                    'en' => 'Comprehensive SEO Services for Real Results',
                    'ar' => 'خدمات SEO شاملة لنتائج حقيقية'
                ],
                'badge' => [
                    'en' => '15 Specialized Services — From Core SEO to AI Search & Programmatic SEO',
                    'ar' => '15 خدمة متخصصة — من SEO الأساسي إلى AI Search وProgrammatic SEO'
                ],
                'subtitle' => [
                    'en' => 'From full auditing to execution — complete solutions to dominate search and increase sales.',
                    'ar' => 'من التدقيق الشامل إلى التنفيذ — حلول متكاملة لتصدر نتائج البحث وزيادة المبيعات.',
                ],
            ],
            [
                'section_key' => HomeSectionKey::RESULTS,
                'eyebrow' => [
                    'en' => 'Real Documented Results',
                    'ar' => 'نتائج حقيقية موثقة'
                ],
                'title' => [
                    'en' => 'Results From Real Projects',
                    'ar' => 'نتائج من مشاريع حقيقية'
                ],
                'subtitle' => [
                    'en' => 'Real screenshots from Google Search Console, Google Analytics & Bing Webmaster — documented results across multiple industries. Click any card to view full details.',
                    'ar' => 'لقطات شاشة حقيقية من Google Search Console وGoogle Analytics وBing Webmaster — نتائج موثقة عبر قطاعات متنوعة. اضغط على أي بطاقة لعرض التفاصيل الكاملة.',
                ],
            ],
            [
                'section_key' => HomeSectionKey::TOOLS,
                'eyebrow' => [
                    'en' => 'Platforms & Tools',
                    'ar' => 'المنصات والأدوات'
                ],
                'title' => [
                    'en' => 'Expertise Across All Platforms & the Most Powerful SEO Tools',
                    'ar' => 'خبرة على جميع المنصات وأقوى أدوات السيو'
                ],
                'badge' => [
                    'en' => 'Core Skills',
                    'ar' => 'مهارات رئيسية'
                ],
            ],
            [
                'section_key' => HomeSectionKey::PLATFORM,

                'title' => [
                    'en' => 'Platform Specializations',
                    'ar' => 'تخصص حسب المنصة'
                ],
            ],
            [
                'section_key' => HomeSectionKey::SEO_TOOLS,

                'title' => [
                    'en' => 'Seo Tools',
                    'ar' => 'أدوات SEO'
                ],
            ],
            [
                'section_key' => HomeSectionKey::CERTIFICATIONS,
                'eyebrow' => [
                    'en' => 'My Certifications',
                    'ar' => 'شهاداتي المعتمدة'
                ],
                'title' => [
                    'en' => 'Over 40 Certified Credentials from Top Platforms',
                    'ar' => 'أكثر من 40 شهادة معتمدة من أبرز المنصات'
                ],
                'subtitle' => [
                    'en' => 'Google · HubSpot · Semrush · Ahrefs · Meta · Udemy · and more — expertise proven by official certifications',
                    'ar' => 'Google · HubSpot · Semrush · Ahrefs · Meta · Udemy · وأكثر — خبرة مُثبَتة بشهادات رسمية'
                ],
            ],
            [
                'section_key' => HomeSectionKey::PHILOSOPHY,
                'eyebrow' => [
                    'en' => 'My Philosophy & Vision',
                    'ar' => 'فلسفتي ورؤيتي'
                ],
                'title' => [
                    'en' => 'Why I Do This — And How I Think',
                    'ar' => 'لماذا أفعل هذا — وكيف أفكر'
                ],
            ],
            [
                'section_key' => HomeSectionKey::REVIEWS,
                'eyebrow' => [
                    'en' => 'Client Reviews',
                    'ar' => 'آراء العملاء'
                ],
                'title' => [
                    'en' => 'What Our Clients Said in Their Own Words',
                    'ar' => 'ماذا قال عملاؤنا بكلماتهم الحقيقية'
                ],
                'subtitle' => [
                    'en' => 'Verified reviews from Mostaql · 25 completed projects · 100% rating',
                    'ar' => 'تقييمات موثقة من منصة مستقل · 25 مشروع مكتمل · 100% تقييم'
                ],
            ],
            [
                'section_key' => HomeSectionKey::MESSAGE,
                'eyebrow' => [
                    'en' => 'CLIENT MESSAGES',
                    'ar' => 'رسائل العملاء'
                ],
                'title' => [
                    'en' => 'What Clients Said After Working Together',
                    'ar' => 'ماذا قال العملاء بعد التعاون'
                ],
            ],
            [
                'section_key' => HomeSectionKey::FAQ,
                'eyebrow' => [
                    'en' => 'FAQ',
                    'ar' => 'الأسئلة الشائعة'
                ],
                'title' => [
                    'en' => 'Questions Every Client Asks Before Working Together',
                    'ar' => 'أسئلة يسألها كل عميل قبل التعاون'
                ],
            ],
            [
                'section_key' => HomeSectionKey::CONTACT,
                'eyebrow' => [
                    'en' => 'Get In Touch',
                    'ar' => 'تواصل معي'
                ],
                'title' => [
                    'en' => 'Ready to Improve Your Visibility on Google & AI Search',
                    'ar' => 'جاهز لتحسين ظهورك في جوجل والذكاء الاصطناعي'
                ],
            ],
        ];

        foreach ($headings as $heading) {
            HomeSection::create($heading);
        }
    }
}
