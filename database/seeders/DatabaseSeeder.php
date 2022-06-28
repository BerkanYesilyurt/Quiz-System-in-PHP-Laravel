<?php
/**
 * Quiz-System-in-PHP-Laravel
 * Author: Berkan Yeşilyurt (https://github.com/BerkanYesilyurt)
 * Repository: https://github.com/BerkanYesilyurt/Quiz-System-in-PHP-Laravel
 */
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
                'question' => 'What sort of animal is Walt Disneys Dumbo?',
                'A' => 'Rabbit',
                'B' => 'Deer',
                'C' => 'Elephant',
                'D' => 'Donkey',
                'trueOption' => 'C',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'What is the Celsius equivalent of 77 degrees Fahrenheit?',
                'A' => '5',
                'B' => '25',
                'C' => '45',
                'D' => '177',
                'trueOption' => 'B',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'The word "aristocracy" literally means power in the hands of whom?',
                'A' => 'The rich',
                'B' => 'The few',
                'C' => 'The barons',
                'D' => 'The best',
                'trueOption' => 'D',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which is a Central American country?',
                'A' => 'Nicaragua',
                'B' => 'Uruguay',
                'C' => 'Honduras',
                'D' => 'Panama',
                'trueOption' => 'B',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'How many bones does a shark have?',
                'A' => '0',
                'B' => '36',
                'C' => '121',
                'D' => '280',
                'trueOption' => 'A',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'William Tell is a legendary character whose stories are best known for his mastery of what?',
                'A' => 'Archery',
                'B' => 'Javelin',
                'C' => 'Fencing',
                'D' => 'Judo',
                'trueOption' => 'A',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'There has not been a recorded person being attacked and killed by whom?',
                'A' => 'Pandas',
                'B' => 'Piranhas',
                'C' => 'Orcas',
                'D' => 'Ants',
                'trueOption' => 'A',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Where is the headquarters of UNESCO located?',
                'A' => 'Istanbul, Turkey',
                'B' => 'Berlin, Germany',
                'C' => 'Moscow, Russia',
                'D' => 'Paris, France',
                'trueOption' => 'D',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Walter White is the main character of Breaking Bad. What is the name of the actor who portrays him?',
                'A' => 'Vince Gilligan',
                'B' => 'Jonathan Banks',
                'C' => 'Aaron Paul',
                'D' => 'Bryan Cranston',
                'trueOption' => 'D',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'question' => 'Which Number Is Not In Roman Numeral?',
                'A' => '0',
                'B' => '50',
                'C' => '100',
                'D' => '1000',
                'trueOption' => 'A',
                'clue' => 'It is clue.',
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
