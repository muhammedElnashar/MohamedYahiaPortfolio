<?php

namespace Database\Seeders;

use App\Models\ContactSetting;
use Illuminate\Database\Seeder;

class ContactSettingSeeder extends Seeder
{
    public function run(): void
    {
        ContactSetting::updateOrCreate(
            [
                'email' => 'mohamedyahia702@gmail.com',
            ],
            [
                'name' => [
                    'ar' => 'محمد يحيى عبداللطيف',
                    'en' => 'Mohamed Yahia Abdellatif',
                ],

                'job_title' => [
                    'ar' => 'خبير ومستشار SEO',
                    'en' => 'SEO Expert & Consultant',
                ],

                'description' => [
                    'ar' => 'خبير SEO بخبرة أكثر من 6 سنوات، تواصل معي وسأرد في أقل من 24 ساعة.',
                    'en' => 'SEO Expert & Consultant with 6+ years of experience. Contact me and I will respond within 24 hours.',
                ],

                'whatsapp' => '201123269452',

                'linkedin_url' => 'https://www.linkedin.com/in/mohamed-yahia-249265134/',

                'linkedin_label' => [
                    'ar' => 'Mohamed Yahia — SEO Specialist',
                    'en' => 'Mohamed Yahia — SEO Specialist',
                ],

                'mostaql_url' => 'https://mostaql.com/u/Mohamed_Yahia7',

                'mostaql_label' => [
                    'ar' => 'Mohamed_Yahia7 — تقييم 100%',
                    'en' => 'Mohamed_Yahia7 — 100% Rating',
                ],

                'location' => [
                    'ar' => 'المنصورة، الدقهلية، مصر',
                    'en' => 'Mansoura, Dakahlia, Egypt',
                ],

                'consultation_title' => [
                    'ar' => '🎯 استشارة مجانية',
                    'en' => '🎯 Free Consultation',
                ],

                'consultation_description' => [
                    'ar' => 'أول استشارة مجانية: تحليل وضع موقعك وتقديم توصيات فورية.',
                    'en' => 'Your first consultation is free: I will analyze your website and provide immediate recommendations.',
                ],

                'is_active' => true,
            ]
        );
    }
}
