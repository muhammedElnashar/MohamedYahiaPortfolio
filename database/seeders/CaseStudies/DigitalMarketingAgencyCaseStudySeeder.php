<?php

namespace Database\Seeders\CaseStudies;

use App\Models\CaseStudy;
use Illuminate\Database\Seeder;

class DigitalMarketingAgencyCaseStudySeeder extends Seeder
{
    public function run(): void
    {
        $case = CaseStudy::create([
            'slug' => 'digital-marketing-agency',

            'eyebrow' => [
                'en' => 'Case Study',
                'ar' => 'دراسة حالة',
            ],

            'title' => [
                'en' => '+195% Visibility Growth',
                'ar' => 'نمو الظهور بنسبة +195%',
            ],

            'description' => [
                'en' => 'Agency SEO project that positioned a digital marketing agency as a market leader through its own website.',
                'ar' => 'مشروع SEO لوكالة تسويق رقمي أثبت خبرتها من خلال نتائج موقعها الخاص.',
            ],

            'industry' => [
                'en' => 'Digital Marketing Agency',
                'ar' => 'وكالة تسويق رقمي',
            ],

            'niche' => [
                'en' => 'Digital Marketing',
                'ar' => 'التسويق الرقمي',
            ],

            'period' => [
                'en' => '3 Months',
                'ar' => '3 أشهر',
            ],

            'focus' => [
                'en' => 'Full SEO Strategy',
                'ar' => 'استراتيجية SEO كاملة',
            ],

            'challenge' => [
                'en' => 'The agency wanted its own website to rank and demonstrate its expertise instead of relying only on client work.',
                'ar' => 'كانت الوكالة ترغب في إثبات خبرتها عبر موقعها الخاص وتحقيق نتائج فعلية في محركات البحث.',
            ],

            'solution' => [
                'en' => 'Implemented agency-focused SEO, optimized case study pages, strengthened domain authority, and performed competitor gap analysis.',
                'ar' => 'تم تنفيذ SEO متخصص للوكالات، وتحسين صفحات دراسات الحالة، وبناء السلطة، وتحليل المنافسين.',
            ],

            'result' => [
                'en' => 'The agency became one of the strongest competitors in its market by proving its capabilities through measurable SEO results.',
                'ar' => 'أثبتت الوكالة قدراتها عبر نتائج SEO حقيقية وأصبحت من أقوى المنافسين في السوق.',
            ],

            'metric' => '+195%',
            'metric_color' => 'blue',

            'clicks' => '7.8K',
            'impressions' => '610K',
            'ctr' => '1.3%',
            'position' => '13.2',

            'image' => null,

            'sort_order' => 23,
            'is_active' => true,
        ]);

        $case->growths()->createMany([
            [
                'icon' => 'trending-up',
                'value' => '+195%',
                'title' => [
                    'en' => 'Visibility',
                    'ar' => 'الظهور',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'bar-chart',
                'value' => '+140%',
                'title' => [
                    'en' => 'Inbound Clients',
                    'ar' => 'العملاء الواردون',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'zap',
                'value' => '1.8 → 4.2%',
                'title' => [
                    'en' => 'CTR',
                    'ar' => 'CTR',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'target',
                'value' => '#1',
                'title' => [
                    'en' => 'Competitors Surpassed',
                    'ar' => 'تجاوز المنافسين',
                ],
                'sort_order' => 4,
            ],
        ]);

        $case->improvements()->createMany([
            [
                'icon' => 'briefcase',
                'title' => [
                    'en' => 'Agency SEO',
                    'ar' => 'Agency SEO',
                ],
                'description' => [
                    'en' => 'Specialized SEO strategy designed for marketing agencies.',
                    'ar' => 'استراتيجية SEO متخصصة لوكالات التسويق.',
                ],
                'sort_order' => 1,
            ],
            [
                'icon' => 'file-text',
                'title' => [
                    'en' => 'Case Study Pages',
                    'ar' => 'صفحات دراسات الحالة',
                ],
                'description' => [
                    'en' => 'Optimized case studies and client success pages.',
                    'ar' => 'تحسين صفحات دراسات الحالة ونتائج العملاء.',
                ],
                'sort_order' => 2,
            ],
            [
                'icon' => 'award',
                'title' => [
                    'en' => 'Domain Authority',
                    'ar' => 'Domain Authority',
                ],
                'description' => [
                    'en' => 'Strengthened authority and trust within the agency niche.',
                    'ar' => 'بناء سلطة وثقة قوية في مجال وكالات التسويق.',
                ],
                'sort_order' => 3,
            ],
            [
                'icon' => 'search',
                'title' => [
                    'en' => 'Competitor Analysis',
                    'ar' => 'تحليل المنافسين',
                ],
                'description' => [
                    'en' => 'Comprehensive competitor gap and opportunity analysis.',
                    'ar' => 'تحليل شامل للمنافسين واكتشاف فرص التفوق.',
                ],
                'sort_order' => 4,
            ],
        ]);
    }
}
