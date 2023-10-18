<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'محمد بن إسماعيل بن إبراهيم بن المغيرة بن بَرْدِزبَه الجعفي البخاري',
                'name_eng' => 'Muhammad ibn Isma\'il ibn Ibrahim ibn al-Mughirah ibn Bardizbah al-Ju\'fi al-Bukhari',

                'kunyah' => 'أبو عبدااالله',
                'kunyah_eng' => 'Abu Abdallah',

                'laqab' => 'البخاري',
                'laqab_eng' => 'al-Bukhari',

                'birth_year' => 810,
                'birth_month' => 7,
                'birth_day' => 20,
                'birth_place' => 'بخارى, أوزبكستان',
                'birth_place_eng' => 'Bukhara, Uzbekistan',

                'death_year' => 870,
                'death_month' => 9,
                'death_day' => 1,
                'death_place' => 'خوجة إسماعيل, أوزبكستان',
                'death_place_eng' => 'Xo\'ja Ismoil, Uzbekistan',

                'age' => 60,
            ],
            [
                'name' => 'مسلم بن الحجاج بن مسلم بن ورد بن كوشاذ القشيري النيسابوري',
                'name_eng' => 'Muslim ibn al-Hajjaj ibn Muslim ibn Ward ibn Kawshadh al-Qushayri an-Naysaburi',

                'kunyah' => 'أبو الحسين',
                'kunyah_eng' => 'al-Bukhari',

                'laqab' => 'مسلم',
                'laqab_eng' => 'Muslim',

                'birth_year' => 822,
                'birth_month' => 1,
                'birth_day' => 1,
                'birth_place' => 'نيسابور, إيران',
                'birth_place_eng' => 'Neyshabur, Iran',

                'death_year' => 875,
                'death_month' => 7,
                'death_day' => 7,
                'death_place' => 'نصر آباد, إيران',
                'death_place_eng' => 'Nasarabad, Iran',

                'age' => 55,
            ],
            [
                'name' => 'سليمان بن الأشعث بن إسحاق بن بشير بن عمرو بن عمران الأزدي السجستاني',
                'name_eng' => 'Abu Dawud Sulaiman ibn al-Ash\'ath ibn Ishaq al-Azdi al-Sijistani',

                'kunyah' => 'أبو داود',
                'kunyah_eng' => 'Abu Dawud',

                'laqab' => 'أبو داود',
                'laqab_eng' => 'Abu Dawud',

                'birth_year' => 817,
                'birth_month' => 1,
                'birth_day' => 1,
                'birth_place' => 'سجستان, إيران',
                'birth_place_eng' => 'Sijistan, Iran',

                'death_year' => 889,
                'death_month' => 2,
                'death_day' => 21,
                'death_place' => 'بصرة, عراق',
                'death_place_eng' => 'Basra, Iraq',

                'age' => 72,
            ],
            [
                'name' => 'أحمد بن شعيب بن علي بن سنان بن بحر بن دينار النسائي',
                'name_eng' => 'Ahmed ibn Shua\'ib ibn Ali ibn Sinan ibn Bahr ibn Dinar al-Nasa\'i',

                'kunyah' => 'أبو عبدالرحمن',
                'kunyah_eng' => 'Abu Abd al-Rahman',

                'laqab' => 'النسائي',
                'laqab_eng' => 'al-Nasa\'i',

                'birth_year' => 829,
                'birth_month' => 1,
                'birth_day' => 1,
                'birth_place' => 'نسا, تركمانستان',
                'birth_place_eng' => 'Nisa, Turkmenistan',

                'death_year' => 915,
                'death_month' => 8,
                'death_day' => 28,
                'death_place' => 'الرملة, فلسطين',
                'death_place_eng' => 'Ramla, Palestine',

                'age' => 86,
            ],
            [
                'name' => 'محمد بن عيسى بن سَوْرة بن موسى بن الضحاك السلمي الترمذي',
                'name_eng' => 'Muhammad ibn Isa ibn Sawrah ibn Musa ibn al-Dahhak al-Sulami al-Tirmidhi',

                'kunyah' => 'أبو عيسى',
                'kunyah_eng' => 'Abu Isa',

                'laqab' => 'الترمذي',
                'laqab_eng' => 'al-Tirmidhi',

                'birth_year' => 824,
                'birth_month' => 1,
                'birth_day' => 1,
                'birth_place' => 'ترمذ, أوزبكستان',
                'birth_place_eng' => 'Termez, Uzbekistan',

                'death_year' => 892,
                'death_month' => 10,
                'death_day' => 8,
                'death_place' => 'ترمذ, أوزبكستان',
                'death_place_eng' => 'Termez, Uzbekistan',

                'age' => 69,
            ],
            [
                'name' => 'محمد بن يزيد بن ماجه الربعي القزويني',
                'name_eng' => 'Muhammad ibn Yazid Ibn Majah al-Rab\'i al-Qazwini',

                'kunyah' => 'أبو عبدااالله',
                'kunyah_eng' => 'Abu Abdallah',

                'laqab' => 'ابن ماجه',
                'laqab_eng' => 'Ibn Majah',

                'birth_year' => 824,
                'birth_month' => 1,
                'birth_day' => 1,
                'birth_place' => 'قزوین, إيران',
                'birth_place_eng' => 'Qazvin, Iran',

                'death_year' => 887,
                'death_month' => 2,
                'death_day' => 20,
                'death_place' => 'قزوین, إيران',
                'death_place_eng' => 'Qazvin, Iran',

                'age' => 63,
            ],
            [
                'name' => 'مالك بن أنس بن مالك بن أبي عامر الأصبحي الحميري المدني',
                'name_eng' => 'Malik ibn Anas ibn Malik ibn Abi Amir al-Asbahi al-Humyari al-Madani',

                'kunyah' => 'أبو عبدااالله',
                'kunyah_eng' => 'Abu Abdallah',

                'laqab' => 'مالك',
                'laqab_eng' => 'Malik',

                'birth_year' => 711,
                'birth_month' => 1,
                'birth_day' => 1,
                'birth_place' => 'المدينة المنورة, السعودية',
                'birth_place_eng' => 'Al-Madinah al-Munawwarah, Saudi Arabia',

                'death_year' => 795,
                'death_month' => 7,
                'death_day' => 7,
                'death_place' => 'المدينة المنورة, السعودية',
                'death_place_eng' => 'Al-Madinah al-Munawwarah, Saudi Arabia',

                'age' => 84,
            ],
            [
                'name' => 'أحمد بن محمد بن حنبل الشيباني الذهلي',
                'name_eng' => 'Ahmad ibn Muhammad ibn Hanbal al-Shaybani al-Dhuhli',

                'kunyah' => 'أبو عبدااالله',
                'kunyah_eng' => 'Abu Abdallah',

                'laqab' => 'ابن حنبل',
                'laqab_eng' => 'Ibn Hanbal',

                'birth_year' => 780,
                'birth_month' => 11,
                'birth_day' => 1,
                'birth_place' => 'بغداد, عراق',
                'birth_place_eng' => 'Baghdad, Iraq',

                'death_year' => 855,
                'death_month' => 8,
                'death_day' => 2,
                'death_place' => 'بغداد, عراق',
                'death_place_eng' => 'Baghdad, Iraq',

                'age' => 75,
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
