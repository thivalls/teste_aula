<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(1)
            ->create([
                'name' => 'Thiago',
                'email' => 'admin@son.com',
                'password' => bcrypt('password'),
            ]);

        User::factory(1)
            ->create([
                'name' => 'Victor',
                'email' => 'outro@son.com',
                'password' => bcrypt('password'),
            ]);
    }
}
