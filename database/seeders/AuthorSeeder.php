<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvData = fopen(base_path("local_database/authors/authors_list.csv"), 'r');

        $authorsRow = true;
        while (($data = fgetcsv($csvData, null, ',')) !== false) {
            if (!$authorsRow) {
                Author::create([
                    'name' => $data['1'],
                    'name_eng' => $data['2'],

                    'kunyah' => $data['3'],
                    'kunyah_eng' => $data['4'],

                    'laqab' => $data['5'],
                    'laqab_eng' => $data['6'],

                    'birth_year' => $data['7'],
                    'birth_month' => $data['8'],
                    'birth_day' => $data['9'],
                    'birth_place' => $data['10'],
                    'birth_place_eng' => $data['11'],

                    'death_year' => $data['12'],
                    'death_month' => $data['13'],
                    'death_day' => $data['14'],
                    'death_place' => $data['15'],
                    'death_place_eng' => $data['16'],

                    'age' => $data['17'],
                ]);
            }
            $authorsRow = false;
        }

        fclose($csvData);
    }
}
