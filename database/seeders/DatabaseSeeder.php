<?php

namespace Database\Seeders;

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
        \App\Models\Feedback::factory(10)->create();
        \App\Models\News::factory(10)->create();
        \App\Models\Product::factory(10)->create();
        \App\Models\Food::factory(10)->create();
        \App\Models\Article::factory(10)->create();
        \App\Models\Event::factory(10)->create();

        
    }
}
