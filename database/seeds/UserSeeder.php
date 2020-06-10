<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'      => 'Rafael ADM',
            'email'     => 'rafael@admin.com',
            'password'  =>  bcrypt('123'),
        ]);
        \App\User::create([
            'name'      => 'João Cliente',
            'email'     => 'joao@cliente.com',
            'password'  =>  bcrypt('123'),
        ]);
    }
}
