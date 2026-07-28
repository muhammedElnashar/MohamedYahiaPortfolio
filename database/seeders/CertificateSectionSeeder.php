<?php

namespace Database\Seeders;

use App\Models\CertificateSection;
use Illuminate\Database\Seeder;

class CertificateSectionSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Certificate Section
        |--------------------------------------------------------------------------
        */

        $section = CertificateSection::updateOrCreate(
            [
                'id' => 1,
            ],
            [
                'linkedin_button_text' => [
                    'ar' => 'عرض جميع الشهادات الـ +40 على LinkedIn',
                    'en' => 'View All 40+ Certificates on LinkedIn',
                ],

                'linkedin_url' => null,

                'gallery_hint' => [
                    'ar' => 'اضغط على الشهادة لعرضها بالحجم الكامل',
                    'en' => 'Click a certificate to view it full size',
                ],

                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | Statistics
        |--------------------------------------------------------------------------
        */

        $stats = [
            [
                'value' => '+40',
                'label' => [
                    'ar' => 'شهادة معتمدة',
                    'en' => 'Certificates',
                ],
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'value' => '+6',
                'label' => [
                    'ar' => 'منصات عالمية',
                    'en' => 'Global Platforms',
                ],
                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'value' => '+5',
                'label' => [
                    'ar' => 'تخصصات',
                    'en' => 'Specializations',
                ],
                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'value' => '2025',
                'label' => [
                    'ar' => 'آخر تحديث',
                    'en' => 'Latest Update',
                ],
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($stats as $stat) {
            $section->stats()->updateOrCreate(
                [
                    'sort_order' => $stat['sort_order'],
                ],
                $stat
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Certificate Cards
        |--------------------------------------------------------------------------
        */

        $cards = [
            [
                'platform' => 'UDEMY',

                'title' => [
                    'ar' => 'إتقان سيو ووردبريس',
                    'en' => 'WordPress SEO Mastery',
                ],

                'subtitle' => [
                    'ar' => 'Udemy — مكتمل',
                    'en' => 'Udemy — Completed',
                ],

                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'platform' => 'UDEMY',

                'title' => [
                    'ar' => 'استراتيجية السيو المحلي',
                    'en' => 'Local SEO Strategy',
                ],

                'subtitle' => [
                    'ar' => 'Udemy — مكتمل',
                    'en' => 'Udemy — Completed',
                ],

                'sort_order' => 2,
                'is_active' => true,
            ],

            [
                'platform' => 'META',

                'title' => [
                    'ar' => 'التسويق عبر وسائل التواصل الاجتماعي',
                    'en' => 'Meta Social Media Marketing',
                ],

                'subtitle' => [
                    'ar' => 'Meta — معتمد',
                    'en' => 'Meta — Certified',
                ],

                'sort_order' => 3,
                'is_active' => true,
            ],

            [
                'platform' => 'OTHER',

                'title' => [
                    'ar' => 'تحسين محركات البحث للمتاجر الإلكترونية',
                    'en' => 'E-Commerce SEO',
                ],

                'subtitle' => [
                    'ar' => 'SEO — متقدم',
                    'en' => 'SEO — Advanced',
                ],

                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($cards as $card) {
            $section->highlights()->updateOrCreate(
                [
                    'sort_order' => $card['sort_order'],
                ],
                $card
            );
        }
    }
}
