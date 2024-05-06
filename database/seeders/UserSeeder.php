<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Carlos ferrrerira',
            'email' => 'carlos@especializati.com.br',
            'password' => bcrypt('123456789'),
        ]);
    }
}
