<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('quiz_questions')->insert([
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
                'A' => 'Has been the industry1',
                'B' => 'Has been the industry2',
                'C' => 'Has been the industry3',
                'D' => 'Has been the industry4',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
