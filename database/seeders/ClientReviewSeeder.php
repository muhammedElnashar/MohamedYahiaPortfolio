<?php

namespace Database\Seeders;

use App\Models\ClientReview;
use Illuminate\Database\Seeder;

class ClientReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            [
                'client_name' => 'Won P.',
                'client_subtitle'=>'مستقل · تجربة ثالثة',
                'avatar_text' => 'W',
                'rating' => 5,
                'rating_time' => 'منذ 9 أشهر',
                'review' => 'تجربتي رقم ٣ مع الاستاذ محمد، شغل احترافي وسريع جداً ولا يبخل عليك بالمعلومة 👍 سعدت بالعمل معك',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'client_name' => 'حسام ع.',
                'client_subtitle'=>'مستقل · تسويق إلكتروني',
                'avatar_text' => 'ح',
                'rating' => 5,
                'rating_time' => 'منذ سنة و5 أشهر ',
                'review' => 'محمد قدم لي خدمة ممتازة في تحسين محركات البحث لموقعي خلال فترة زمنية قصيرة جداً. عمله كان احترافياً وفعّالاً وأدى إلى نتائج ملحوظة. أوصي به بشدة لكل من يبحث عن تحسين سريع وفعّال 🔥',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'client_name' => 'Adnan B.',
                'client_subtitle'=>'مستقل · برمجة ومواقع',
                'avatar_text' => 'ِA',
                'rating' => 5,
                'rating_time' => 'منذ سنة و10 أشهر ',
                'review' => 'محمد، شكراً على توجيهاتك القيمة في الـSEO. فهمك العميق وتقديم المعلومة بشكل مختصر وفعّال كان له دور كبير. مشالله تبارك الله فاهم جداً في المجال — اختصرت الكثير وحأكون بتواصل مستمر إن شاء الله 🙏',
                'sort_order' => 3,
                'is_active' => true,
            ],

        ];

        foreach ($reviews as $review) {
            ClientReview::updateOrCreate(
                [
                    'client_name' => $review['client_name'],
                ],
                $review
            );
        }
    }
}
