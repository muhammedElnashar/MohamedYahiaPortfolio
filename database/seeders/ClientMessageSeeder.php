<?php

namespace Database\Seeders;

use App\Models\ClientMessage;
use Illuminate\Database\Seeder;

class ClientMessageSeeder extends Seeder
{
    public function run(): void
    {
        $messages = [
            [
                'client_name' => 'يوسف',
                'client_label' => 'متجر مكملات غذائية',
                'image' => null,
                'message' => 'شغل محمد واضح ومرتب. كل شهر تقرير مفصل والنتائج تتكلم عن نفسها — الزيارات العضوية زادت أكتر من 200% في 5 شهور 📈',
                'my_reply' => 'الحمد لله، الشغل المنظم بيدي نتائج حقيقية على المدى الطويل 💪',
                'sort_order' => 1,
                'is_active' => true,
            ],

            [
                'client_name' => 'منى ',
                'client_label' => 'عيادة طب تجميل',
                'image' => null,
                'message' => 'كنا غير موجودين على جوجل بالكامل. بعد 4 شهور مع محمد وصلنا الصفحة الأولى على كلمات المنطقة كلها 🙏',
                'my_reply' => 'السيو المحلي بيفرق كتير للعيادات — مبروك النتائج 🎯',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'client_name' => 'طارق',
                'client_label' => 'شركة نقل عفش',
                'image' => null,
                'message' => 'ما كنت أصدق إن شركة نقل عفش محتاجة SEO لكن محمد أثبت العكس — دلوقتي أول نتيجة على "نقل عفش بالقاهرة" 🔥',
                'my_reply' => 'كل نشاط تجاري يستفاد من السيو المحلي — مبسوط جداً بالنتيجة دي 💪',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'client_name' => 'نورة',
                'client_label' => 'متجر موضة',
                'image' => null,
                'message' => 'أنصح كل أصحاب المتاجر يتواصلون مع محمد. التقارير الشهرية واضحة ومفهومة وتحس إن في شخص يهتم فعلاً بنجاح مشروعك ✅',
                'my_reply' => 'شكراً جزيلاً — الهدف دايماً إن العميل يحس بالفرق من الشهر الأول 💪',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'client_name' => 'Ahmed',
                'client_label' => ' Law Firm · Riyadh ',
                'image' => null,
                'message' => 'Mohamed completely transformed our firm\'s online presence. From page 3 to top 3 for our most competitive legal keywords. Organic leads now exceed paid ads 🏆',
                'my_reply' => null,
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'client_name' => 'Rami',
                'client_label' => 'Medical Platform',
                'image' => null,
                'message' => 'Best SEO investment we made. Platform went from 180K to 450K clicks/month. Mohamed understands the Gulf market better than anyone we\'ve worked with 🤯',
                'my_reply' => 'Really appreciate it! Consistency is the key — glad the numbers reflect that 🚀',
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'client_name' => 'وليد',
                'client_label' => 'شركة تقنية',
                'image' => null,
                'message' => null,
                'my_reply' => null,
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'client_name' => 'سلمى',
                'client_label' => ' مؤسسة تجارية',
                'image' => null,
                'message' => null,
                'my_reply' => null,
                'sort_order' => 8,
                'is_active' => true,
            ],
            [
                'client_name' => 'عادل',
                'client_label' => 'متجر فساتين',
                'image' => null,
                'message' => null,
                'my_reply' => null,
                'sort_order' => 9,
                'is_active' => true,
            ],
            [
                'client_name' => 'خالد',
                'client_label' => 'متجر إلكترونيات',
                'image' => null,
                'message' => 'والله يا محمد ما توقعت النتيجة بالسرعة دي. الموقع ما كان يجيب أي زيارات وبعد 3 شهور بقينا في أول صفحة على كلمات كنا نحلم فيها 🔥',
                'my_reply' => 'الحمد لله، النتائج جاءت لأن الشغل كان صح من اليوم الأول 💪',
                'sort_order' => 10,
                'is_active' => true,
            ],
            [
                'client_name' => 'سارة',
                'client_label' => ' متجر عطور',
                'image' => null,
                'message' => 'متجرنا كان جديد بدون أي زيارات. بعد 3 شهور وصلنا لـ 974 نقرة و 23 ألف ظهور 😍 الله يجزاك خير يا محمد',
                'my_reply' => 'يسعدني سماع كده. الخطوة الجاية هي التوسع في كلمات مفتاحية جديدة 🎯',
                'sort_order' => 11,
                'is_active' => true,
            ],
            [
                'client_name' => 'أحمد',
                'client_label' => 'موقع استشارات',
                'image' => null,
                'message' => 'كنا نصرف على إعلانات جوجل كل شهر بدون نتائج. محمد شرح الوضع وبدأ SEO — المبيعات العضوية الحين تجاوزت الإعلانات 🎯',
                'my_reply' => 'ده الفرق بين SEO صح والإعلانات — SEO يفضل يشتغل حتى لما تنام 💪',
                'sort_order' => 12,
                'is_active' => true,
            ],
        ];

        foreach ($messages as $message) {
            ClientMessage::updateOrCreate(
                [
                    'client_name' => $message['client_name'],
                ],
                $message
            );
        }
    }
}
