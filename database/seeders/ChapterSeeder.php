<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Chapter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $chapters = [
        //     // 1. Revelation - كتاب بدء الوحى
        //     [
        //         'number' => 1,
        //         'title' => 'بدء الوحي',
        //         'title_eng' => 'Revelation',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 2. Belief - كتاب الإيمان
        //     [
        //         'number' => 2,
        //         'title' => 'الإيمان',
        //         'title_eng' => 'Belief',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 3. Knowledge - كتاب العلم
        //     [
        //         'number' => 3,
        //         'title' => 'العلم',
        //         'title_eng' => 'Knowlegde',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 4. Ablutions (Wudu') - كتاب الوضوء
        //     [
        //         'number' => 4,
        //         'title' => 'الوضوء',
        //         'title_eng' => 'Ablutions (Wudu\')',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 5. Bathing (Ghusl) - كتاب الغسل
        //     [
        //         'number' => 5,
        //         'title' => 'الغسل',
        //         'title_eng' => 'Bathing (Ghusl)',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 6. Menstrual Periods - كتاب الحيض
        //     [
        //         'number' => 6,
        //         'title' => 'الحيض',
        //         'title_eng' => 'Menstrual Periods',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 7. Rubbing hands and feet with dust (Tayammum) - كتاب التيمم
        //     [
        //         'number' => 7,
        //         'title' => 'التيمم',
        //         'title_eng' => 'Rubbing hands and feet with dust (Tayammum)',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 8. Prayers (Salat) - كتاب الصلاة
        //     [
        //         'number' => 8,
        //         'title' => 'الصلاة',
        //         'title_eng' => 'Prayers (Salat)',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 9. Times of the Prayers - كتاب مواقيت الصلاة
        //     [
        //         'number' => 9,
        //         'title' => 'مواقيت الصلاة',
        //         'title_eng' => 'Times of the Prayers',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 10. Call to Prayers (Adhaan) - كتاب الأذان
        //     [
        //         'number' => 10,
        //         'title' => 'الأذان',
        //         'title_eng' => 'Call to Prayers (Adhaan)',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 11. Friday Prayer - كتاب الجمعة
        //     [
        //         'number' => 11,
        //         'title' => 'الجمعة',
        //         'title_eng' => 'Friday Prayer',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 12. Fear Prayer - كتاب صلاة الخوف
        //     [
        //         'number' => 12,
        //         'title' => 'صلاة الخوف',
        //         'title_eng' => 'Fear Prayer',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 13. The Two Festivals (Eids) - كتاب العيدين
        //     [
        //         'number' => 13,
        //         'title' => 'العيدين',
        //         'title_eng' => 'The Two Festivals (Eids)',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 14. Witr Prayer - كتاب الوتر
        //     [
        //         'number' => 14,
        //         'title' => 'الوتر',
        //         'title_eng' => 'Witr Prayer',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 15. Invoking Allah for Rain (Istisqaa) - كتاب الاستسقاء
        //     [
        //         'number' => 15,
        //         'title' => 'الاستسقاء',
        //         'title_eng' => 'Invoking Allah for Rain (Istisqaa)',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 16. Eclipses - كتاب الكسوف
        //     [
        //         'number' => 16,
        //         'title' => 'الكسوف',
        //         'title_eng' => 'Eclipses',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 17. Prostration During Recital of Qur'an - كتاب سجود القرآن
        //     [
        //         'number' => 17,
        //         'title' => 'سجود القرآن',
        //         'title_eng' => 'Prostration During Recital of Qur\'an',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 18. Shortening the Prayers (At-Taqseer) - كتاب التقصير
        //     [
        //         'number' => 18,
        //         'title' => 'التقصير',
        //         'title_eng' => 'Shortening the Prayers (At-Taqseer)',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 19. Prayer at Night (Tahajjud) - كتاب التهجد
        //     [
        //         'number' => 19,
        //         'title' => 'التهجد',
        //         'title_eng' => 'Prayer at Night (Tahajjud)',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        //     // 20. Virtues of Prayer at Masjid Makkah and Madinah - كتاب فضل الصلاة فى مسجد مكة والمدينة
        //     [
        //         'number' => 20,
        //         'title' => 'فضل الصلاة فى مسجد مكة والمدينة',
        //         'title_eng' => 'Virtues of Prayer at Masjid Makkah and Madinah',

        //         'book_id' => Book::where('title_eng', 'Sahih al-Bukhari')->first()->id,
        //     ],
        // ];

        // foreach ($chapters as $chapter) {
        //     Chapter::create($chapter);
        // }

        // Chapter::truncate();

        $csvData = fopen(base_path('local_database/chapters/albukhari_chapters.csv'), 'r');

        $chaptersRow = true;
        while (($data = fgetcsv($csvData, null, ',')) !== false) {
            if (!$chaptersRow) {
                Chapter::create([
                    'number' => $data['0'],
                    'title' => $data['3'],
                    'title_eng' => $data['2'],
                    'book_id' => Book::where('title_eng', $data['4'])->first()->id,
                ]);
            }
            $chaptersRow = false;
        }

        fclose($csvData);

        $csvData = fopen(base_path('local_database/chapters/muslim_chapters.csv'), 'r');

        $chaptersRow = true;
        while (($data = fgetcsv($csvData, null, ',')) !== false) {
            if (!$chaptersRow) {
                Chapter::create([
                    'number' => $data['0'],
                    'title' => $data['3'],
                    'title_eng' => $data['2'],
                    'book_id' => Book::where('title_eng', $data['4'])->first()->id,
                ]);
            }
            $chaptersRow = false;
        }

        fclose($csvData);

        $csvData = fopen(base_path('local_database/chapters/nasai_chapters.csv'), 'r');

        $chaptersRow = true;
        while (($data = fgetcsv($csvData, null, ',')) !== false) {
            if (!$chaptersRow) {
                Chapter::create([
                    'number' => $data['0'],
                    'title' => $data['3'],
                    'title_eng' => $data['2'],
                    'book_id' => Book::where('title_eng', $data['4'])->first()->id,
                ]);
            }
            $chaptersRow = false;
        }

        fclose($csvData);
    }
}
