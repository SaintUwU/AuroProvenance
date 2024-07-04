<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        User::create([
        'name' => 'admin',
        'email' => 'admin@example.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'two_factor_secret' => null,
        'two_factor_recovery_codes' => null,
        'remember_token' => Str::random(10),
        'profile_photo_path' => null,
        'current_team_id' => null,
    ])->assignRole('admin');

    User::create([
        'name' => 'mechanic',
        'email' => 'mechanic@example.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'two_factor_secret' => null,
        'two_factor_recovery_codes' => null,
        'remember_token' => Str::random(10),
        'profile_photo_path' => null,
        'current_team_id' => null,
    ])->assignRole('mechanic');

    $user = User::create([
        'name' => 'user',
        'email' => 'user@example.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'two_factor_secret' => null,
        'two_factor_recovery_codes' => null,
        'remember_token' => Str::random(10),
        'profile_photo_path' => null,
        'current_team_id' => null,
    ]);
    $user->assignRole('user');
    }
}
