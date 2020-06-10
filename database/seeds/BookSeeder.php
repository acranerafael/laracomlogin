<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ModelBook::create([
            'title' => 'O Senhor dos Aneis',
            'pages' => '250',
            'price' => 100.99,
            'user_id' => 2,
        ]);
        \App\Models\ModelBook::create([
            'title' => 'O homem de giz',
            'pages' => '302',
            'price' => 17.59,
            'user_id' => 2,
        ]);
    }
}
