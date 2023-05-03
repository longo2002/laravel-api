<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 25; $i++) {
            projects::table('projects')->insert([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph(),
            ]);
        }
    }
}
