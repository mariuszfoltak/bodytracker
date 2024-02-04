<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeightEntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generator = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('weight_entries')->insert([
                'user' => 'Mario',
                'value' => 100-$i,
                'register_date' => $generator->date,
            ]);
        }
    }
}
