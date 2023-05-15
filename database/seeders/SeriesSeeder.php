<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //make seeder for series
        DB::table('series')->insert([
          'name' => 'WESTWORLD',
          'seasons' => 4,
          'storyline' => 'تقع أحداث المسلسل في «وست وورلد»، وهو منتزه خيالي متقدم تقنيًا تعيش فيه روبوتات اصطناعية شبيهة جدا بالبشر، وتدعى «المضيفون»، والغرض من وجودها تلبية رغبات الزوار الأثرياء الذين يطلق عليها اسم «الوافدون الجدد». يستطيع الوافدون الجدد فعل ما يريدون داخل المنتزه دون الخوف من انتقام المضيفين',
          'photo' => 'https://www.gamespot.com/a/uploads/original/1557/15576725/3635925-unnamed.jpg',
          'year' => 2022,
          'rating' => 6.5,
          'category' => 'Drama',
        ]);

      DB::table('series')->insert([
        'name' => 'CITY ON A HILL',
        'seasons' =>3 ,
          'storyline' => 'تقع هذه السلسلة فى بوسطن، وفي تسعينيات القرن الماضي يعمل محامٍ مساعد ومساعد مخضرم فاسد في مكتب التحقيقات الفيدرالي فى بوسطن، حيث قاموا معًا بالنظر في قضية تشمل نظام العدالة الجنائية في بوسطن وتهدف الى تخريبه',
          'photo' => 'https://m.media-amazon.com/images/M/MV5BYTAxMGU0NzQtODRjOS00Y2IzLTlkOWMtYTdhYmVhYTBmNDgzXkEyXkFqcGdeQXVyMTUyMTgzNjY4._V1_FMjpg_UX1000_.jpg',
          'year' => 2022,
          'rating' => 7.2 ,
          'category' => 'Crime',
        ]);

      DB::table('series')->insert([
        'name' => 'Curb Your Enthusiasm',
        'seasons' => 11,
          'storyline' => 'هو مسلسل كوميدي يصور دقائق الحياة اليومية وخاصة تلك التي تتعلق بمشاكل وأخطاء لاري ديفيد، وتصرفات الناس المزعجين من حوله، وتفاعله معهم.',
          'photo' => 'https://images.forwardcdn.com/image/970x/center/images/cropped/curb-your-enthusiasm-season-10-key-art-1579546480.jpg',
          'year' => 2021,
          'rating' => 6.3,
          'category' => 'Comedy',
        ]);


      DB::table('series')->insert([
        'name' => 'Find Me In Paris',
        'seasons' => 3,
          'storyline' => 'بعد سقوطها عبر بوابة سحرية في عام 1905 ، والسفر عبر الزمن إلى المستقبل ، كانت لينا جريسكي ، أميرة روسية وطالبة في مدرسة أوبرا باريس للباليه المشهورة عالميًا ، تبذل قصارى جهدها للاندماج في الوقت الذي تكتشف فيه الفترة الزمنية الموجودة فيها. تعيش فيها.',
          'photo' => 'https://www.themoviedb.org/t/p/original/uOTYMzTlXFbWDZCxxc0vX9CvBsl.jpg',
          'year' => 2020,
          'rating' => 8.1,
          'category' => 'Fantasy',
        ]);


      DB::table('series')->insert([
        'name' => 'Strike Back',
        'seasons' => 7,
          'storyline' => 'تدور أحداث المسلسل حول وحدة استخباراتية سرية تابعة للجيش البريطاني (القسم 20) ، والذي يضم مجموعة من أفراد العمليات الخاصة ، الذين يقومون بعمليات بالغة الخطورة ، منها ملاحقة عضو تنظيم القاعدة',
          'photo' => 'https://www.themoviedb.org/t/p/original/c6cLI5aN3JJsnIxFREUL5Ha9GIz.jpg',
          'year' => 2020,
          'rating' => 7.2,
          'category' => 'Action',
        ]);


      DB::table('series')->insert([
        'name' => 'Lego Friends: Girls On A Mission',
        'seasons' => 3,
          'storyline' => 'فتيات في مهمة تدور أحداث العمل حول أفضل خمسة صديقات من عصبة ألعاب الليجو واللاتي تحاولن معًا فعل الشيء الصحيح في المدينة، ومعرفة الصداقات وما هو مهم على طول الطريق.',
          'photo' => 'https://www.themoviedb.org/t/p/w500/ucWzrdR7Ac4WVzx6FMFRNukNUqe.jpg',
          'year' => 2021,
          'rating' => 6.6,
          'category' => 'Adventure',
        ]);


      DB::table('series')->insert([
        'name' => 'Paw Patrol',
        'seasons' => 4,
          'storyline' => 'هو برنامج رسوم متحركة أمريكي كندي من إنتاج الشركة الأمريكية الشهيرة للرسوم المتحركة نكلوديون  هم طفل وسبعة كلاب صغيرة يحبون وضع حلول للمشاكل وإنقاذ الناس من مشاكلهم وإنقاذ سكان مدينتهم من الأخطار',
          'photo' => 'https://www.themoviedb.org/t/p/original/jXavWyam2VPR6bOhLwwuP3K2Hw4.jpg',
          'year' => 2019,
          'rating' => 6.2,
          'category' => 'Kids & family',
        ]);


      DB::table('series')->insert([
        'name' => 'Al Tufah Al Haram',
        'seasons' => 5,
          'storyline' => 'تدور أحداث مسلسل التفاحة الممنوعة في مدينة إسطنبول ويجسد المسلسل قصة اندر التي تكون متزوجة من رجل أعمال غني ولكنه بخيل، فتجد الحل لتحضر له يلديز الفتاة الجميلة، وهي طموحة وتحلم دائما بالزواج برجل غني لتعيش معه حياة الرفاهية، وتتوالى الأحداث في إطار كوميدي رومانسي.',
          'photo' => 'https://m.media-amazon.com/images/M/MV5BZGFhODc0MzktODA2NS00ODEwLTk0MzAtMzJhMTAzYjcxNTk0XkEyXkFqcGdeQXVyNDg4MjkzNDk@._V1_FMjpg_UX1000_.jpg',
          'year' => 2018,
          'rating' => 7.1,
          'category' => 'Trukish',
        ]);


      DB::table('series')->insert([
        'name' => 'Ta\'er Al Sabah - 2020',
        'seasons' => 1,
          'storyline' => 'ريهام ، الفتاة الصغيرة التي تطمح في أن تصبح كاتبة ، يجبرها والداها على الاختيار بين زواج مرتب وإيجاد وظيفة مناسبة. تسرع في الحصول على وظيفة جديدة في شركة إعلانات ، وسرعان ما تقع في حب مديرها الوسيم ، ولكنها تكتشف أنه متزوج. تقرر ريهام أن تترك الشركة ، لكنها تتغير عندما تكتشف أنها حامل.',
          'photo' => 'https://content.weyyak.com/2da99fda-3e14-4c6c-a478-4afc820f8041/b09d5b52-350f-4b47-a9ff-5e80d49de9e2/poster-image?c=50328?d=280x150',
          'year' => 2020,
          'rating' => 6.3,
          'category' => 'Romance',
        ]);

    }
}
