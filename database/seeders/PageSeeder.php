<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    
    public $pages=['about','inheritance','law','zoovet','activity','rules','services'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->pages as $page){
            Page::factory()->create(['name'=>$page]);
        }
    }
}
