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
        $csvData = fopen(base_path("local_database/books/books_list.csv"), 'r');

        $booksRow = true;
        while (($data = fgetcsv($csvData, null, ',')) !== false) {
            if (!$booksRow) {
                Book::create([
                    'title' => $data['1'],
                    'title_eng' => $data['2'],

                    'author_id' => Author::where('laqab_eng', $data['3'])->first()->id,
                ]);
            }
            $booksRow = false;
        }

        fclose($csvData);
    }
}
