<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'صحيح البخاري',
                'title_eng' => 'Sahih al-Bukhari',

                'author_id' => Author::where('laqab_eng', 'al-Bukhari')->first()->id,
            ],
            [
                'title' => 'صحيح مسلم',
                'title_eng' => 'Sahih Muslim',

                'author_id' => Author::where('laqab_eng', 'Muslim')->first()->id,
            ],
            [
                'title' => 'سنن أبو داود',
                'title_eng' => 'Sunan Abu Dawud',

                'author_id' => Author::where('laqab_eng', 'Abu Dawud')->first()->id,
            ],
            [
                'title' => 'سنن الترمذي',
                'title_eng' => 'Sunan al-Tirmidhi',

                'author_id' => Author::where('laqab_eng', 'al-Tirmidhi')->first()->id,
            ],
            [
                'title' => 'سنن النسائي',
                'title_eng' => 'Sunan al-Nasa\'i',

                'author_id' => Author::where('laqab_eng', 'al-Nasa\'i')->first()->id,
            ],
            [
                'title' => 'سنن ابن ماجه',
                'title_eng' => 'Sunan Ibn Majah',

                'author_id' => Author::where('laqab_eng', 'Ibn Majah')->first()->id,
            ],
            [
                'title' => 'موطأ مالك',
                'title_eng' => 'Muwatta Malik',

                'author_id' => Author::where('laqab_eng', 'Malik')->first()->id,
            ],
            [
                'title' => 'مسند أحمد بن حنبل',
                'title_eng' => 'Musnad Ahmad ibn Hanbal',

                'author_id' => Author::where('laqab_eng', 'Ibn Hanbal')->first()->id,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
