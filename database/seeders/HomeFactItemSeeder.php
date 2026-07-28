<?php

namespace Database\Seeders;

use App\Models\HomeFactItem;
use Illuminate\Database\Seeder;

class HomeFactItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [

            [
                'icon' => 'trending-up',
                'value' => '68%',
                'label' => [
                    'en' => 'of online experiences begin with a search engine',
                    'ar' => 'من تجارب الإنترنت تبدأ من محرك بحث',
                ],
                'description' => [
                    'en' => 'Not from ads or social media — Google is the main gateway to any potential client.',
                    'ar' => 'وليس من إعلان أو سوشيال ميديا — جوجل هو المدخل الرئيسي لأي عميل محتمل.',
                ],
                'source' => 'BrightEdge',
            ],

            [
                'icon' => 'cursor-click',
                'value' => '27%',
                'label' => [
                    'en' => "click-through rate for Google's first result",
                    'ar' => "نسبة النقر على النتيجة الأولى في جوجل",
                ],
                'description' => [
                    'en' => 'The first position gets 27% of all clicks — while position 10 gets less than 3%.',
                    'ar' => 'الموقع في المرتبة الأولى يحصل على 27% من كل النقرات — بينما المرتبة العاشرة تحصل على أقل من 3%.',
                ],
                'source' => 'Backlinko',
            ],

            [
                'icon' => 'currency-dollar',
                'value' => '14.6%',
                'label' => [
                    'en'=> 'organic traffic conversion rate',
                    'ar'=> 'معدل تحويل الزيارات العضوية',
                    ],
                'description' => [
                    'en'=> 'Compared to only 1.7% from paid ads — organic visitors are more trusting and purchase-ready.',
                    'ar'=> 'مقارنة بـ 1.7% فقط من الإعلانات المدفوعة — الزائر العضوي أكثر ثقةً وجاهزيةً للشراء.',
                    ],
                'source' => 'Search Engine Journal',
            ],

            [
                'icon' => 'brain',
                'value' => '40%',
                'label' =>[
                     'en'=>'of AI Overview citations come from Top 3 results',
                     'ar'=>'من اقتباسات AI Overviews تأتي من Top 3',
                    ],
                'description' =>[
                     'en'=>'In the AI era, ranking high opens two doors: direct clicks + citations in AI answers.',
                     'ar'=>'في عصر الذكاء الاصطناعي، التصدّر يفتح بابين: نقرات مباشرة + ذكر في إجابات AI.',
                    ],
                'source' => 'Authoritas',
            ],

            [
                'icon' => 'eye-off',
                'value' => '0.6%',
                'label' =>[
                    'en'=> 'only go past page one',
                    'ar'=> 'فقط من يتجاوزون الصفحة الأولى',
                    ],
                'description' =>[
                    'en'=> "If you're not on page one you don't exist — 99.4% of searchers never reach you.",
                    'ar'=> "إذا لم تكن في الصفحة الأولى فأنت غير موجود — 99.4% من الزوار لا يصلون إليك أبداً.",
                    ],
                'source' => 'Backlinko',
            ],

            [
                'icon' => 'chart-bar-2',
                'value' => '53%',
                'label' =>[
                    'en'=> 'of web traffic comes from organic search',
                    'ar'=> 'من زيارات الإنترنت مصدرها البحث العضوي',
                    ],
                'description' =>[
                    'en'=> 'Higher than social media, paid ads & email combined — search is the king channel.',
                    'ar'=> 'أعلى من السوشيال ميديا والإعلانات المدفوعة والبريد الإلكتروني مجتمعةً — البحث هو القناة الملك. ',
                    ],
                'source' => 'BrightEdge',
            ],

            [
                'icon' => 'refresh',
                'value' => '5x',
                'label' =>[
                    'en'=> 'higher deal close rate from SEO',
                    'ar'=> 'أعلى معدل إغلاق صفقات من SEO',
                    ],
                'description' =>[
                    'en'=> 'Visitors from search close deals at 5x the rate of traditional marketing — purchase intent is higher.',
                    'ar'=> 'الزوار القادمون من محرك البحث يغلقون صفقات بمعدل 5x أعلى مقارنة بالتسويق التقليدي — نية الشراء أعلى.',
                    ],
                'source' => 'HubSpot',
            ],

            [
                'icon' => 'globe',
                'value' => '9B+',
                'label' =>[
                    'en'=> 'monthly searches on non-Google engines',
                    'ar'=> 'بحث شهري على محركات غير جوجل',
                    ],
                'description' =>[
                    'en'=> 'Bing alone handles 9B+ monthly searches + Yahoo + DuckDuckGo + Yandex.',
                    'ar'=> 'بينغ وحده يعالج أكثر من 9 مليار بحث شهرياً + Yahoo + DuckDuckGo + Yandex — أنا أُحسّن حضورك على كل المحركات، لا جوجل فقط.',
                    ],
                'source' => 'Microsoft / StatCounter',
            ],

        ];

        foreach ($items as $index => $item) {

            HomeFactItem::updateOrCreate(
                ['value' => $item['value']],
                array_merge($item, [
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ])
            );
        }
    }
}
