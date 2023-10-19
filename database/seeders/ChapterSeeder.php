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
        $chapters = [
            'albukhari_chapters',
            'muslim_chapters',
            'nasai_chapters',
            'abu_dawud_chapters',
            'tirmidhi_chapters',
            'ibn_majah_chapters',
            'muwatta_malik_chapters',
        ];

        foreach ($chapters as $chapter) {
            $csvData = fopen(base_path("local_database/chapters/{$chapter}.csv"), 'r');

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
}
