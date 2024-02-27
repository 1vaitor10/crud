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
        User::create([
            'name' => 'guille',
            'email' => 'g@g.com',
            'password' => bcrypt('12345678')
        ])->assignRole('secretaria');


        User::factory(9)->create();
    }
}
