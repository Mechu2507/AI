<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'type' => 'Biograficzny',
        ]);

        Type::create([
            'type' => 'Akcja',
        ]);

        Type::create([
            'type' => 'Sci-Fi',
        ]);

        Type::create([
            'type' => 'Dramat',
        ]);

        Type::create([
            'type' => 'Kryminał',
        ]);

        Type::create([
            'type' => 'Akcja',
        ]);

        Type::create([
            'type' => 'Horror',
        ]);

        Type::create([
            'type' => 'Animacja',
        ]);
        
    }
}
