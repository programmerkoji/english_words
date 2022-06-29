<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Seeder;


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
        $this->call([
            UserSeeder::class,
            // WordSeeder::class,
        ]);
        Word::factory(100)->create();
    }
}
