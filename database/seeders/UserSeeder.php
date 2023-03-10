<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->create([
            'name' => 'Matias Aguila',
            'email' => 'matias@test.com',
            'password' => bcrypt('12345678'),
        ]);
        User::factory()->create([
            'name' => 'Carlos Abrisqueta',
            'email' => 'carlos@test.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
