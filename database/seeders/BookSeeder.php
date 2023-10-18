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

                'author_id' => Author::where('laqab', 'البخاري')->first()->id,

                'total_chapters' => 100,
            ],
            [
                'title' => 'صحيح مسلم',
                'title_eng' => 'Sahih Muslim',

                'author_id' => Author::where('laqab', 'مسلم')->first()->id,

                'total_chapters' => 54,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
