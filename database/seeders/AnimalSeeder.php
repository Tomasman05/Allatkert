<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("zoo")->insert([
            "name"=>"Sas",
            "type"=>"Madár",
            "cage_number"=>5
        ]);
        DB::table("zoo")->insert(
        [
            "name"=>"Piton",
            "type"=>"Hüllő",
            "cage_number"=>4
        ]);
        }
}
