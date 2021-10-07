<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Article::factory(10)->create();
        DB::table('articles')->insert($this->getData());
    }

    private function getData()
    {
        $data[] = [
            'name' => 'about',
            'title' => 'О нас',
            'description' => '',
            'text' => '',
        ];
        return $data;
    }
}
