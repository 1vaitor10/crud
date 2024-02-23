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
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'v@v.com',
            'password' => bcrypt('12345678')
        ])->assignRole('admin');

        User::factory(9)->create();
    }
}
