<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'professor']);
        $role3 = Role::create(['name' => 'secretaria']);

        Permission::create(['name' => 'admin.incidencies'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'admin.incidencies.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.tags.crear'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.tags.actualitzar'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.tags.eliminar'])->syncRoles([$role1,$role2,$role3]);

        Permission::create(['name' => 'admin.posts.index'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.posts.crear'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.posts.actualitzar'])->syncRoles([$role1,$role2,$role3]);
        Permission::create(['name' => 'admin.posts.eliminar'])->syncRoles([$role1,$role2,$role3]);
    }
}