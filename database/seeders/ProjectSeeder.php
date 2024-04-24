<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {
            $newProject = new Project();

            $newProject->name = $faker->word();
            $newProject->develop_with = "HTML, CSS, JS, VUE, BOOTSTRAP, PHP, Laravel";
            $newProject->description = $faker->paragraph(2);
            $newProject->link_github = "https://github.com/Mario-Arista";
            $newProject->image = $faker->imageUrl(640, 480, 'animals', true);

            $newProject->save();
            
        }

    }
}
