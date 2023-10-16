<?php

namespace Database\Seeders;

use App\Models\Book;
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

                'author_id' => 1,

                'total_chapters' => 100,
            ],
            [
                'title' => 'صحيح مسلم',
                'title_eng' => 'Sahih Muslim',

                'author_id' => 2,

                'total_chapters' => 54,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
