<?php

namespace Database\Seeders;

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
        /* DB::table('Articles')->insert([
            'title' => 'Belajar Model Dengan Laravel',
            'content' => 'Belajar Laravel itu menyenangkan',
            'image' =>
           'https://via.placeholder.com/640x480.png/00ff77?text=Belajar
           Model'
            ]); */
            \App\Models\Article::factory()->count(9)->create();
    }
}
