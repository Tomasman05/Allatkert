<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;
use Database\Seeders\PersonSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Person::factory(10)->create();
        $this->call([
            AnimalSeeder::class,
            PersonSeeder::class
        ]);
    }
}
