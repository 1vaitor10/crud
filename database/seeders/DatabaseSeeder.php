<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Incidencia;
use App\Models\Tag; // Asegúrate de importar el modelo Tag si lo estás utilizando
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Storage::makeDirectory('posts');
        Storage::deleteDirectory('posts');

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Incidencia::factory(4)->create();
        User::factory(10)->create(); // Ajusta el número según tus necesidades
        // Category::factory(4)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
