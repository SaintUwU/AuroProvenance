<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = [
            ['name'=>'mechanic'],
            ['name' => 'admin'],
            ['name' => 'user'],
            
            // Add more roles as needed
        ];
        foreach ($roles as $role) {
            Role::create(['name' => $role['name']]);
        }
    }
}
