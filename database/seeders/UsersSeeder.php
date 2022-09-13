<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'company' => 'Fabet',
            'name' => 'Graciliano Funez',
            'email' => 'gracilianofunez@gmail.com',
            'telephone' => '49 991750970',
        ]);
    }
}
