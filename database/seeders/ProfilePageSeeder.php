<?php

namespace Database\Seeders;

use App\Models\ProfilePage;
use Illuminate\Database\Seeder;

class ProfilePageSeeder extends Seeder
{
    public function run(): void
    {
        $profile = ProfilePage::updateOrCreate(
            ['id' => 1],
            [
                'hero_badge' => [
                    'ar' => 'عني — القصة الكاملة',
                    'en' => 'About Me — The Full Story',
                ],

                'hero_title' => [
                    'ar' => 'محمد يحيى',
                    'en' => 'Mohamed Yahia',
                ],

                'hero_highlight' => [
                    'ar' => 'خبير SEO وذكاء اصطناعي',
                    'en' => 'SEO & AI Expert',
                ],

                'hero_description' => [
                    'ar' => 'مهندس حاسبات وخبير SEO بخبرة عملية في تحسين المواقع والمتاجر الإلكترونية وبناء استراتيجيات نمو تعتمد على البيانات والتقنية.',
                    'en' => 'Computer engineer and SEO expert with hands-on experience optimizing websites and e-commerce stores and building data-driven growth strategies.',
                ],

                'story_title' => [
                    'ar' => 'القصة',
                    'en' => 'The Story',
                ],

                'story_content' => [
                    'ar' => 'بدأت رحلتي من كلية الهندسة، قسم حاسبات ونظم تحكم، حيث تخرجت بتقدير متميز. أعطتني الهندسة أساسًا قويًا في التفكير التحليلي وفهم الأنظمة والبرمجة، ثم انتقلت إلى عالم تحسين محركات البحث وبدأت في الجمع بين SEO والخلفية التقنية للوصول إلى حلول عملية قابلة للقياس.',
                    'en' => 'My journey started in computer and control engineering, where I built a strong foundation in analytical thinking, systems, and programming. I later moved into SEO, combining search strategy with technical expertise to create measurable solutions.',
                ],

                'career_title' => [
                    'ar' => 'المسيرة المهنية',
                    'en' => 'Career Journey',
                ],

                'education_title' => [
                    'ar' => 'التعليم',
                    'en' => 'Education',
                ],

                'methodology_title' => [
                    'ar' => 'منهجيتي',
                    'en' => 'My Methodology',
                ],

                'skills_title' => [
                    'ar' => 'التخصصات والمهارات',
                    'en' => 'Specialties & Skills',
                ],

                'cta_title' => [
                    'ar' => 'جاهز تشتغل مع خبير SEO حقيقي؟',
                    'en' => 'Ready to Work With an SEO Expert?',
                ],

                'cta_description' => [
                    'ar' => 'تواصل الآن للحصول على استشارة وخطة عمل مناسبة لموقعك وأهدافك.',
                    'en' => 'Get in touch to discuss your website, goals, and the right strategy for growth.',
                ],

                'cta_button' => [
                    'ar' => 'تواصل معي واتساب',
                    'en' => 'Contact Me on WhatsApp',
                ],

                'cta_url' => null,

                'meta_title' => [
                    'ar' => 'محمد يحيى | خبير SEO والذكاء الاصطناعي',
                    'en' => 'Mohamed Yahia | SEO & AI Expert',
                ],

                'meta_description' => [
                    'ar' => 'تعرف على الخبرة والمسيرة المهنية والتخصصات والمنهجية في تحسين محركات البحث والتقنية والذكاء الاصطناعي.',
                    'en' => 'Explore professional experience, SEO expertise, technical background, methodology, and AI-focused skills.',
                ],

                'is_active' => true,
            ]
        );

        /*
        |--------------------------------------------------------------------------
        | Stats
        |--------------------------------------------------------------------------
        */

        $stats = [
            [
                'value' => '+300',
                'label' => [
                    'ar' => 'موقع ومتجر',
                    'en' => 'Websites & Stores',
                ],
            ],
            [
                'value' => '+6',
                'label' => [
                    'ar' => 'سنوات خبرة',
                    'en' => 'Years Experience',
                ],
            ],
            [
                'value' => '80%',
                'label' => [
                    'ar' => 'تقدير الهندسة',
                    'en' => 'Engineering Grade',
                ],
            ],
            [
                'value' => '5.0',
                'label' => [
                    'ar' => 'تقييم مستقل',
                    'en' => 'Freelance Rating',
                ],
            ],
        ];

        foreach ($stats as $index => $stat) {
            $profile->stats()->updateOrCreate(
                ['sort_order' => $index + 1],
                [
                    ...$stat,
                    'is_active' => true,
                ]
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Career
        |--------------------------------------------------------------------------
        */

        $career = [
            [
                'title' => [
                    'ar' => 'هندسة حاسبات ونظم تحكم',
                    'en' => 'Computer & Control Engineering',
                ],
                'description' => [
                    'ar' => 'خلفية أكاديمية وتقنية في البرمجة وتحليل الأنظمة أصبحت أساسًا للعمل في Technical SEO.',
                    'en' => 'An academic and technical background in programming and systems analysis that became a foundation for Technical SEO.',
                ],
            ],

            [
                'title' => [
                    'ar' => 'بناء خبرة SEO شاملة',
                    'en' => 'Building Comprehensive SEO Expertise',
                ],
                'description' => [
                    'ar' => 'خبرة في تحسين المواقع والمتاجر عبر الجوانب التقنية والمحتوى وتحسين الظهور في محركات البحث.',
                    'en' => 'Experience optimizing websites and stores across technical SEO, content, and organic search visibility.',
                ],
            ],

            [
                'title' => [
                    'ar' => 'تدريب الفرق في الخليج',
                    'en' => 'Training Teams Across the Gulf',
                ],
                'description' => [
                    'ar' => 'تدريب فرق على بناء وتنفيذ استراتيجيات SEO وتطوير عمليات العمل.',
                    'en' => 'Training teams to build and execute SEO strategies and improve operational workflows.',
                ],
            ],

            [
                'title' => [
                    'ar' => 'AI Search وأنظمة Python',
                    'en' => 'AI Search & Python Systems',
                ],
                'description' => [
                    'ar' => 'تطوير حلول تجمع بين SEO والذكاء الاصطناعي وPython والأتمتة وتحسين الظهور في محركات البحث الحديثة.',
                    'en' => 'Building solutions combining SEO, AI, Python, automation, and optimization for modern search experiences.',
                ],
            ],
        ];

        foreach ($career as $index => $item) {
            $profile->careerItems()->updateOrCreate(
                ['sort_order' => $index + 1],
                [
                    ...$item,
                    'is_active' => true,
                ]
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Education
        |--------------------------------------------------------------------------
        */

        $education = [
            [
                'title' => [
                    'ar' => 'بكالوريوس هندسة حاسبات ونظم تحكم',
                    'en' => 'B.Sc. Computer & Control Engineering',
                ],

                'subtitle' => [
                    'ar' => 'كلية الهندسة — تقدير 80%',
                    'en' => 'Faculty of Engineering — 80%',
                ],

                'description' => [
                    'ar' => 'تخصص في الخوارزميات والبرمجة وتحليل البيانات والأنظمة.',
                    'en' => 'Focused on algorithms, programming, data analysis, and systems.',
                ],

                'icon' => 'graduation-cap',
            ],

            [
                'title' => [
                    'ar' => 'خبير SEO معتمد — مستقل.كوم',
                    'en' => 'SEO Expert — Mostaql',
                ],

                'subtitle' => [
                    'ar' => 'تقييم 5.0 وإتمام 100%',
                    'en' => '5.0 Rating & 100% Completion',
                ],

                'description' => [
                    'ar' => 'خبرة عملية موثقة في تنفيذ مشاريع تحسين محركات البحث.',
                    'en' => 'Documented practical experience delivering SEO projects.',
                ],

                'icon' => 'award',
            ],
        ];

        foreach ($education as $index => $item) {
            $profile->educationItems()->updateOrCreate(
                ['sort_order' => $index + 1],
                [
                    ...$item,
                    'is_active' => true,
                ]
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Methodology
        |--------------------------------------------------------------------------
        */

        $methodology = [
            [
                'title' => [
                    'ar' => 'البيانات قبل الرأي',
                    'en' => 'Data Before Opinion',
                ],
                'description' => [
                    'ar' => 'كل قرار مبني على تحليل حقيقي.',
                    'en' => 'Every decision starts with real data and analysis.',
                ],
            ],

            [
                'title' => [
                    'ar' => 'الخلفية التقنية',
                    'en' => 'Technical Foundation',
                ],
                'description' => [
                    'ar' => 'فهم التقنية والكود يساعد على الوصول إلى حلول أعمق.',
                    'en' => 'Understanding technology and code enables deeper solutions.',
                ],
            ],

            [
                'title' => [
                    'ar' => 'النتائج الدائمة',
                    'en' => 'Sustainable Results',
                ],
                'description' => [
                    'ar' => 'الهدف بناء نمو مستدام وليس مكاسب مؤقتة.',
                    'en' => 'The goal is sustainable growth rather than temporary gains.',
                ],
            ],

            [
                'title' => [
                    'ar' => 'الشفافية الكاملة',
                    'en' => 'Full Transparency',
                ],
                'description' => [
                    'ar' => 'تقارير واضحة وقرارات يمكن تفسيرها وقياسها.',
                    'en' => 'Clear reporting and decisions that can be explained and measured.',
                ],
            ],

            [
                'title' => [
                    'ar' => 'التطوير المستمر',
                    'en' => 'Continuous Improvement',
                ],
                'description' => [
                    'ar' => 'متابعة تطورات البحث والذكاء الاصطناعي والأدوات باستمرار.',
                    'en' => 'Continuously following developments in search, AI, and technology.',
                ],
            ],
        ];

        foreach ($methodology as $index => $item) {
            $profile->methodologyItems()->updateOrCreate(
                ['sort_order' => $index + 1],
                [
                    ...$item,

                    'icon' => 'circle-check',

                    'is_active' => true,
                ]
            );
        }
    }
}
