<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // make seeder for movie
      DB::table('films')->insert([
        'name' => 'The Suicide Squad',
        'storyline' => 'تدور أحداث الفيلم حول مجموعة من المساجين الأكثر شرًا على الأرض ويعرفهم الجميع باسم (الفرقة الانتحارية)، والذين ينجحون في عقد اتفاق مع وكالة حكومية فاسدة من أجل تنفيذ مهام شديدة',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BMWU4NDQ2NjEtNjhkOS00Y2MwLWJkODItZmJhZGE0MDU1OWM4XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg',
        'year' => 2021,
        'rating' => 7.2,
        'category' => 'Action',
      ]);

      DB::table('films')->insert([
        'name' => 'Murder at Yellowstone City',
        'storyline' => 'يصل" شيكيرو" الي مدينه "يلو ستون" للبحث عن كيفيه العودة الي وطنه الاساسي و لكن في نفس اليوم من وصوله يكتشف سكان البلدة ان المدينه تحتوي علي ذهب و الذي اكتشف مكان الذهب يتم قتله وفتذهب الشكوك الي " شيكيرو" و يتم وضعه في الحبس بتهمة القتل .',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BYWYzNDQ2ODYtOTM5ZS00M2FlLWFiNTItZjlmMDk0ZDkyZmQ4XkEyXkFqcGdeQXVyMzQwMTY2Nzk@._V1_FMjpg_UX1000_.jpg',
        'year' => 2022,
        'rating' => 5.2,
        'category' => 'Action',
      ]);

      DB::table('films')->insert([
        'name' => 'Brian and Charles',
        'storyline' => 'بعد شتاء قاسٍ بشكل خاص ، دخل براين في اكتئاب عميق منعزلاً تمامًا ولا يوجد من يتحدث إلى براين يفعل ما سيفعله أي شخص عاقل عندما يواجه مثل هذا الموقف الكئيب',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BOTA5Y2E2ODItMzk0OC00NjA0LWE3YzYtMmJkMjA1MTIxOTIzXkEyXkFqcGdeQXVyMTA2MDU0NjM5._V1_FMjpg_UX1000_.jpg',
        'year' => 2022,
        'rating' => 8.4,
        'category' => 'Comdy',
      ]);

      DB::table('films')->insert([
        'name' => 'Ticket to Paradise ',
        'storyline' => 'تعاون زوجان مطلقان ويسافران إلى بالي لمنع ابنتهما من ارتكاب نفس الخطأ الذي يعتقدون أنهما ارتكبهما قبل 25 عامً',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BMWE0MmEwMWUtZjRjOC00YzE3LWI2MjctNjc3NWQ0YTVmNDQ4XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg',
        'year' => 2022,
        'rating' => 6.7,
        'category' => 'Comdy',
      ]);

      DB::table('films')->insert([
        'name' => 'A Dog\'s Purpose',
        'storyline' => 'يتطلع كلب لاكتشاف هدفه في الحياة على مدار حياة ومالكين متعددين شاهد فيلم المغامرة المذهل مع إيثان وكلبه!',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BNDQ4NjkxNzgzN15BMl5BanBnXkFtZTgwMjAzODQ4OTE@._V1_.jpg',
        'year' => 2022,
        'rating' => 7.2,
        'category' => 'Kids & Family',
      ]);


      DB::table('films')->insert([
        'name' => 'Madagascar 3: Europe\'s Most Wanted ',
        'storyline' => 'تنضم حيوانات مدغشقر إلى سيرك أوروبي يكافح من أجل العودة إلى نيويورك ، لكن تجد نفسها تلاحق من قبل ضابط نفساني في مراقبة الحيوانات',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BZjEzYTZjMmYtZGRjMy00ZGNjLThkMzAtY2Y4Y2E5YWYxNWU2XkEyXkFqcGdeQXVyNTIzOTk5ODM@._V1_.jpg',
        'year' => 2022,
        'rating' => 6.8,
        'category' => 'Kids & Family',
      ]);


      DB::table('films')->insert([
        'name' => 'God\'s Creatures',
        'storyline' => 'في قرية صيد تعصف بها الرياح ، تشعر الأم بالحيرة بين حماية ابنها الحبيب وإحساسها بالصواب والخطأ. الكذبة التي ترويها له تمزق أسرهم ومجتمعهم المتماسك في هذه الملحمة العاطفية المتوترة.',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BMzJiYjg5NWQtMjQxYy00MzYzLWE4Y2ItNDhmMjFjNjQ0MDQ5XkEyXkFqcGdeQXVyMTAyMjQ3NzQ1._V1_FMjpg_UX1000_.jpg',
        'year' => 2022,
        'rating' => 6.1,
        'category' => 'Drama',
      ]);


      DB::table('films')->insert([
        'name' => 'The Whale',
        'storyline' => 'يحاول مدرس اللغة الإنجليزية المنعزل والسمنة المفرطة إعادة الاتصال بابنته المراهقة المنعزلة. هل سيتمكن من الوصول إليها',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BZDQ4Njg4YTctNGZkYi00NWU1LWI4OTYtNmNjOWMyMjI1NWYzXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_FMjpg_UX1000_.jpg',
        'year' => 2022,
        'rating' => 7.8,
        'category' => 'Drama',
      ]);


      DB::table('films')->insert([
        'name' => 'Emily the Criminal',
        'storyline' => 'بسبب حظها ومثقلة بالديون ، تتورط إميلي في عملية احتيال على بطاقة الائتمان تسحبها إلى عالم الجريمة الإجرامي في لوس أنجلوس ، مما يؤدي في النهاية إلى عواقب مميتة..',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BOGI4ODQwYjUtZTA4Mi00YTljLWE4MzItM2M4OGJiNTFkZjIyXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UX1000_.jpg',
        'year' => 2022,
        'rating' =>6.8,
        'category' => 'Crime',
      ]);


      DB::table('films')->insert([
        'name' => 'Promising Young Woman',
        'storyline' => 'امرأة شابة أصيبت بصدمة بسبب حدث مأساوي في ماضيها ، وتسعى للانتقام من أولئك الذين عبروا طريقها.',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BOTgzMzE4MGItZDgxYS00ZGEwLWE3YTctZWY3ZDAyMTk0ZGU4XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg',
        'year' => 2020,
        'rating' => 7.5,
        'category' => 'Crime',
      ]);


      DB::table('films')->insert([
        'name' => 'nope',
        'storyline' => 'تدور الأحداث في إطار من الرعب حول مجموعة من الأشخاص تربطهم ظواهر غامضة. يتخبط (أو جاي هايوود) وشقيقته (إيميرالد) أثناء محاولتهما للحفاظ على تراثهما العائلي الخاص بتربية الخيول، بينما تقع أحداث غريبة في المقاطعة الصحراوية التي يسكنون بها بكاليفورنيا، ويسعى كلاهما لاكتشاف حقيقة ما يحدث من حولهما.',
        'photo' => 'https://m.media-amazon.com/images/I/71ntPgCHTIL.jpg',
        'year' => 2021,
        'rating' => 6.8,
        'category' => 'Horror',
      ]);


      DB::table('films')->insert([
        'name' => 'the black phone',
        'storyline' => 'في إطار من الرعب والدراما، يجد جون فيني نفسه مختطفًا من شخص غامض في قبو مظلم بعيد في حي يشتهر قتل الأطفال وخطفهم به، وسرعان ما يجد نفسه يتواصل مع شخص غامض يدعى "المخلوق" من خلال هاتف أسود قديم، ويحاول جون الهروب من القبو والتخلص من المختطف، ويكتشف أنه ليس أول ضحية لهذا الخاطف، ويحاول جون البحث عن الحقيقة وراء هذا الخاطف والمخلوق الغامض، وما علاقتهما بالأطفال المختطفين والمقتولين في الحي.',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BMWQxOGJlNTUtYTc1YS00NDkyLWExZjItMTFiYWEzMjAzYTdjXkEyXkFqcGdeQXVyNjk1Njg5NTA@._V1_FMjpg_UX1000_.jpg',
        'year' => 2021,
        'rating' => 6.8,
        'category' => 'Horror',
      ]);


      DB::table('films')->insert([
        'name' => 'The Iron Heart',
        'storyline' => 'يذهب عميل سري في مهمة خطيرة لإسقاط عصابة جريمة. يواجه أبولو  وحلفاؤه ، مدفوعين بالماضي المرير والمؤلم ، مهمة شاقة ستتحدى عزيمته وقوته.',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BMWU4NDQ2NjEtNjhkOS00Y2MwLWJkODItZmJhZGE0MDU1OWM4XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg',
        'year' => 2022,
        'rating' => 7.5,
        'category' => 'Pinoy',
      ]);


      DB::table('films')->insert([
        'name' => '2 Good 2 Be True',
        'storyline' => 'ملخص ميكانيكي السيارات إيلوي يترك انطباعا أوليا رهيبا على علي، الذي يعمل لدى قطب عقاري. لكن كلاهما يخفي شخصيتهما الحقيقية.',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BNzI0ZGM3NzItMjAyYi00MzkxLWE3Y2YtYTZjMjViNzE2ZjVlXkEyXkFqcGdeQXVyMTE5OTM1MjU3._V1_FMjpg_UX1000_.jpg',
        'year' => 2022,
        'rating' => 7.2,
        'category' => 'Pinoy',
      ]);


      DB::table('films')->insert([
        'name' => 'The Artist',
        'storyline' => 'تدور أحداث الفيلم عام 1927؛ حيث الممثل جورج فالتين (جان دوجاردان) الذي يؤدي أدوارًا بالأفلام الصامتة محققا أعلى الإيرادات بأفلامه ،حتى أصبح نجما لشباك التذاكر يتهافت عليه المخرجون والمنتجون لتقديم أعمال فنية ناجحة، فيتعرف جورج على الفتاة بيبي ميلر (برنيس بيجو) التي تستغل صورتها معه في إحدى الحفلات',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BMDUyZWU5N2UtOWFlMy00MTI0LTk0ZDYtMzFhNjljODBhZDA5XkEyXkFqcGdeQXVyNzA4ODc3ODU@._V1_.jpg',
        'year' => 2011,
        'rating' => 7.9,
        'category' => 'Romance',
      ]);


      DB::table('films')->insert([
        'name' => 'Together',
        'storyline' => 'في خلال فترة الإغلاق والحظر بسبب تفشي فيروس كوفيد-19، يضطر زوجين للبقاء معًا بالمنزل، حيث تبدأ مرحلة فارقة في علاقتهما تضعهما وتضع زواجهما تحت التقييم',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BMzg4YjZhOTEtZmI0NC00M2ExLThhMzUtNGVmN2UzODNmMDIxXkEyXkFqcGdeQXVyMTAyMjQ3NzQ1._V1_.jpg',
        'year' => 2021,
        'rating' => 6.2,
        'category' => 'Romance',
      ]);


      DB::table('films')->insert([
        'name' => 'Raised By Wolves',
        'storyline' => 'على متن كوكب غامض غير معروف، وبعد تمزق كوكب اﻷرض بسبب الصراعات الدينية المميتة، تقوم مجموعة من الآلات بمهمة محددة وهي تربية أطفال البشر في مواجهة مصير مجهول',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BNTRlMTg4NWYtZmRiNS00YWE0LWFkZTMtNjk5Yzc3NGE0ZTE0XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg',
        'year' => 2022,
        'rating' => 7.5,
        'category' => 'Fantasy',
      ]);


      DB::table('films')->insert([
        'name' => 'The flash',
        'storyline' => 'يسعى باري آلين لاستغلال قدراته من أجل تغيير ماضيه وإنقاذ والدته من الموت، ولكن تتسبب محاولاته في خلل بالزمن والعوالم الموازية، ويصارع من أجل إنقاذ المستقبل.',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BZjlkM2RjODgtNjRlYS00MDNjLTkxMzYtOWM4NjAwZTY2MjZiXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg',
        'year' => 2023,
        'rating' => 7.5,
        'category' => 'Fantasy',
      ]);


      DB::table('films')->insert([
        'name' => 'Ad Astra',
        'storyline' => 'فيلم ملحمي خيال علمي إثارة من إخراج جيمس جراي وتأليف جيمس وإيثان جروس. الفيلم من بطولة براد بيت ،تومي لي جونز،روث نيجا ،دونالد سثرلاند ،جيمي كينيدي. ويحكي عن رائد فضاء يذهب إلى الفضاء بحثاً عن والده المفقود، الذي تهدد تجربته النظام الشمسي',
        'photo' => 'https://m.media-amazon.com/images/M/MV5BZTllZTdlOGEtZTBmMi00MGQ5LWFjN2MtOGEyZTliNGY1MzFiXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg',
        'year' => 2019,
        'rating' => 6.5,
        'category' => 'Adventure',
      ]);


      DB::table('films')->insert([
        'name' => 'Mortal Kombat',
        'storyline' => ' مورتال كومبات تدور أحداث الفيلم في قالب من التشويق واﻹثارة حول بطل شاب يتورط في معركة طاحنة متعددة الأبعاد؛ فيبدأ في إدراك إمكانياته الحقيقية من خلال خوضه هذه التجربة العنيفة والمميتة، والتي تحدد مصيره ومصير مصير العالم بأسره.',
        'photo' => 'https://sm.ign.com/ign_in/screenshot/default/mk-vert-main-2764x4096-intl1_vktq.jpg',
        'year' => 2021,
        'rating' => 6.1,
        'category' => 'Adventure',
      ]);

    }
}
