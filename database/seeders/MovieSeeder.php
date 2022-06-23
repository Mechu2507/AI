<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'id_type' => 1,
            'title' => 'Proceder',
            'description' => 'Historia Tomasza Chady - rapera, który ginie niespodziewanie w 2018 roku. Śmierć muzyka szokuje wszystkich wokół.',
            'link' => 'https://www.youtube.com/embed/8jFukP3tfO4',
        ]);

        Movie::create([
            'id_type' => 2,
            'title' => 'Avengers',
            'description' => 'Grupa superbohaterów, na czele z Thorem, Iron Manem i Hulkiem, łączy siły, by obronić Ziemię przed inwazją kosmitów.',
            'link' =>'https://www.youtube.com/embed/eOrNdBpGMv8',
        ]);

        Movie::create([
            'id_type' => 4,
            'title' => 'Joker',
            'description' => 'Strudzony życiem komik popada w obłęd i staje się psychopatycznym mordercą.',
            'link' => 'https://www.youtube.com/embed/zAGVQLHvwOY',
        ]);

        Movie::create([
            'id_type' => 6,
            'title' => 'Szybcy i wściekli 7',
            'description' => 'Dominic Toretto i jego ekipa ponownie łączą siły, aby pokonać rządnego zemsty brata Owena - Deckarda oraz przechwycić szpiegowski program zwany Okiem Boga.',
            'link' => 'https://www.youtube.com/embed/Skpu5HaVkOc',
        ]);

        Movie::create([
            'id_type' => 6,
            'title' => 'Armia złodziei',
            'description' => 'Prequel "Armii umarłych", w którym tajemnicza kobieta rekrutuje bankowego kasjera do pomocy w skoku na najtrudniejsze do otwarcia europejskie sejfy.',
            'link' => 'https://www.youtube.com/embed/t7m6Jpzkc4Y',
        ]);

        Movie::create([
            'id_type' => 6,
            'title' => 'Armia umałych',
            'description' => 'Podczas wybuchu epidemii zombie grupa najemników próbuje dokonać zuchwałej kradzieży w strefie kwarantanny wyznaczonej na terenie Las Vegas.',
            'link' => 'https://www.youtube.com/embed/9kJE2ZPKRGU',
        ]);

        Movie::create([
            'id_type' => 7,
            'title' => 'Obecność 2',
            'description' => 'Lorraine i Ed Warren udają się do północnej części Londynu, aby pomóc samotnej matce wychowującej czwórkę dzieci, której dom jest nawiedzany przez złośliwe duchy.',
            'link' => 'https://www.youtube.com/embed/tiiPVvvO8lI',
        ]);

        Movie::create([
            'id_type' => 8,
            'title' => 'Buzz astral',
            'description' => 'Młody pilot testowy zostaje bohaterem w kosmosie i dzięki temu dostaje swoją własną zabawkę - Buzza.',
            'link' => 'https://www.youtube.com/embed/wHBBoUtJHhA',
        ]);
    }
}
