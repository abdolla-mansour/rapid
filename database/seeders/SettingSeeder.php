<?php

namespace Database\Seeders;

use App\Models\AboutSetting;
use App\Models\Setting;
use App\Models\HomeSetting;
use App\Models\RateSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'facebook' => 'https://www.facebook.com/satcksa1/',
            'linkedin' => 'https://www.linkedin.com/company/satcksa1/',
            'tweeter' => 'https://twitter.com/ksasatc?s=21&t=TaFC-CDVVOBrNbFAl0bW3g',
            'instagram' => 'https://www.instagram.com/satcksa1/',
            'snapchat' => 'https://www.snapchat.com/add/satcksa1?share_id=gxXhf6ky6Dw&locale=en-GB',
            'tiktok' => 'https://www.tiktok.com/@satcksa1?_t=8hvGd07hixs&_r=1',
            'whatsapp' => 'https://api.whatsapp.com/send/?phone=966112100490&text&type=phone_number&app_absent=0',
            'email' => 'info@rapidarabian.com',
            'phone' => '00966112100490',
        ]);

        HomeSetting::create([
            'home_image' => 'settings/LljTXJDDR1VJjBVyUiY02ho4aRqTDxDqmti8mapc.jpg',
            'image_name' => 'first image',
        ]);

        RateSetting::create([
            'rate' => 'Emphasizing that we are strategic partners with our customers in order to achieve the highest levels of cooperation with them.'
        ]);

        AboutSetting::create([
            'how_ar_we' => 'تمتلك شركة سريع العربية خبرات طويلة في بناء المشاريع و قد حثثت نجاحا مطلقا منذ تاسيسها عام 2019 في تقديم خدمة متميزة للعملاء حيث تمتاز بدقة تنفيذ عالي الجودة فقد وضعنا الجودة هي المعيار الاساسي في تنفيذ المشاريع و هو مصدم لدينا عن المعيار الربحي و بالتالي نعمل علي مبدا ثابت وهو ان العميل اولا.',
            'vision' => 'ان طموح الريادة و شغف التميز يجعلنا في سعي دائم لان نكون الافضل في حجم و نوعية استثمارتنا ، متسلحين بالتطوير الدائم لادئنا بما يواكب طموحتنا و تنويع منتجاتنا بما يتماشي مع رغبات عملائنا ليدفعنا في النهاية نحو تقوية قدراتنا التنافسية في جميع الانشطة التي نعمل بها لنكون واحدة من اولي شركات المقاولات و البناء في المملكة العربية السعودية يجب ان ينظر الينا الشركاء و العملاء كجزء لا يتجزا من عملية نجاحه.',
        ]);
    }
}
