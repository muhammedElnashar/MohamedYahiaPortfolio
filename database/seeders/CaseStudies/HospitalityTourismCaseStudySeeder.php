<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class HospitalityTourismCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'hospitality-tourism',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+520% Organic Growth',
                'ar' => 'نمو عضوي بنسبة +520%',
            ],

            'description' => [
                'en' => 'SEO campaign for a hospitality and tourism platform focused on increasing organic traffic, bookings, and search revenue.',
                'ar' => 'حملة سيو لمنصة ضيافة وسياحة بهدف زيادة الزيارات العضوية والحجوزات والعائد من البحث.',
            ],

            'industry' => [
                'en' => 'Hospitality & Tourism',
                'ar' => 'الضيافة والسياحة',
            ],

            'niche' => [
                'en' => 'Tourism',
                'ar' => 'السياحة',
            ],

            'period' => [
                'en' => '6 Months',
                'ar' => '6 أشهر',
            ],

            'focus' => [
                'en' => 'Content + Links + Technical',
                'ar' => 'المحتوى + الروابط + السيو التقني',
            ],

            'challenge' => [
                'en' => 'The tourism platform faced intense competition from large local and international travel websites, making organic growth extremely difficult.',
                'ar' => 'كانت منصة السياحة تواجه منافسة قوية من المواقع المحلية والعالمية، مما صعّب تحقيق نمو عضوي مستدام.',
            ],

            'solution' => [
                'en' => 'Built destination-focused content, acquired travel backlinks, restructured the technical architecture, optimized activity pages, and implemented Events Schema.',
                'ar' => 'تم إنشاء محتوى متخصص لكل وجهة، وبناء روابط من مواقع السفر، وإعادة هيكلة الموقع تقنيًا، وتحسين صفحات الأنشطة، وتطبيق Events Schema.',
            ],

            'result' => [
                'en' => 'The platform became one of the leading tourism websites in the region, increasing search revenue by more than 3.5x.',
                'ar' => 'أصبحت المنصة من أبرز مواقع السياحة في المنطقة مع زيادة عائد البحث بأكثر من 3.5 مرة.',
            ],

            'metric' => '+520%',
            'metric_color' => 'green',

            'clicks' => '21K',
            'impressions' => '1.62M',
            'ctr' => '1.3%',
            'position' => '9.8',

            'image' => null,

            'sort_order' => 11,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+520%',
                'title' => [
                    'en' => 'Organic Traffic',
                    'ar' => 'الزيارات العضوية',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '0.8 → 2.4%',
                'title' => [
                    'en' => 'Conversion Rate',
                    'ar' => 'معدل التحويل',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '35+',
                'title' => [
                    'en' => 'Keywords Top 3',
                    'ar' => 'كلمات في أول 3 نتائج',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '+350%',
                'title' => [
                    'en' => 'Search Revenue',
                    'ar' => 'عائد البحث',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Content Strategy',
                    'ar' => 'استراتيجية المحتوى',
                ],
                'description' => [
                    'en' => 'Created destination-based tourism content and optimized landing pages.',
                    'ar' => 'إنشاء محتوى متخصص لكل وجهة سياحية وتحسين صفحات الهبوط.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'link',
                'title' => [
                    'en' => 'Link Building',
                    'ar' => 'بناء الروابط',
                ],
                'description' => [
                    'en' => 'Acquired backlinks from travel blogs and tourism websites.',
                    'ar' => 'الحصول على روابط من مدونات ومواقع السفر والسياحة.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'layout',
                'title' => [
                    'en' => 'Technical Structure',
                    'ar' => 'الهيكل التقني',
                ],
                'description' => [
                    'en' => 'Rebuilt the platform architecture for better crawling and scalability.',
                    'ar' => 'إعادة بناء الهيكل التقني للمنصة لتحسين الزحف وقابلية التوسع.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'code',
                'title' => [
                    'en' => 'Events Schema',
                    'ar' => 'Events Schema',
                ],
                'description' => [
                    'en' => 'Implemented structured data for tourism events and activities.',
                    'ar' => 'تطبيق البيانات المنظمة الخاصة بالفعاليات والأنشطة السياحية.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
