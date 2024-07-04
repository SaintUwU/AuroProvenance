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
     */
    public function run(): void
    {
        //
        $mechanic = Role::create(['name' => 'mechanic']);
        $admin = Role::create(['name' => 'admin']);
        $productManager = Role::create(['name' => 'user']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-car',
            'edit-car',
            'delete-car'
        ]);

        $mechanic->givePermissionTo([
            'create-car',
            'edit-car',
            'delete-car'
        ]);
       /* foreach ($roles as $role) {
            Role::create(['name' => $role['name']]);
        } */
    }
}
