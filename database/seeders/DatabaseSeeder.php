<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'date' => Date::now(),
                'description' => Str::random(10),
                'title' => Str::random(10),
                'contenu' => Str::random(100),
                'author' => Str::random(10),
            ]);
        }
        for ($i = 0; $i < 10; $i++) {
            DB::table('comments')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'score' => rand(0,5),
                'contenu' => Str::random(100),
                'post_id' => rand(1,10),
            ]);
        }
    }
}
