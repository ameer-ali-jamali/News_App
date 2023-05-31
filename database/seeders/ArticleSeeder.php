<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'author' => $faker->name,
                'category' => $faker->word,
                'published_at' => $faker->date,
            ]);
        }
    }
}
