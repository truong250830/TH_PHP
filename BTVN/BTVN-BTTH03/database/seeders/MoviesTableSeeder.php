<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            
            [
                'title' => 'Avengers: Endgame',
                'director' => 'Anthony và Joe Russo',
                'release_date' => '2019-04-26',
                'duration' => 181,
                'cinema_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Spider-Man: No Way Home',
                'director' => 'Jon Watts',
                'release_date' => '2021-12-17',
                'duration' => 148,
                'cinema_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Batman',
                'director' => 'Matt Reeves',
                'release_date' => '2022-03-04',
                'duration' => 176,
                'cinema_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'title' => 'Dune',
                'director' => 'Denis Villeneuve',
                'release_date' => '2021-10-22',
                'duration' => 155,
                'cinema_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tenet',
                'director' => 'Christopher Nolan',
                'release_date' => '2020-08-26',
                'duration' => 150,
                'cinema_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Inception',
                'director' => 'Christopher Nolan',
                'release_date' => '2010-07-16',
                'duration' => 148,
                'cinema_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'title' => 'Joker',
                'director' => 'Todd Phillips',
                'release_date' => '2019-10-04',
                'duration' => 122,
                'cinema_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'release_date' => '2008-07-18',
                'duration' => 152,
                'cinema_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Parasite',
                'director' => 'Bong Joon-ho',
                'release_date' => '2019-05-30',
                'duration' => 132,
                'cinema_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
