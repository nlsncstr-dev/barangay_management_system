<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Validate required environment variables
        if (empty(env('ADMIN_EMAIL')) || empty(env('ADMIN_PASSWORD'))) {
            $this->command->error('Admin credentials not set in .env file!');
            return;
        }

        // Check if admin exists
        $adminExists = User::where('email', env('ADMIN_EMAIL'))->exists();

        if (!$adminExists) {
            User::create([
                'first_name' => env('ADMIN_FIRSTNAME'),
                'last_name' => env('ADMIN_LASTNAME'),
                'email' => env('ADMIN_EMAIL'),
                'password' => Hash::make(env('ADMIN_PASSWORD')),
                'role' => 'super_admin', 
            ]);
            $this->command->info('Production admin user created successfully.');
        } else {
            $this->command->warn('Admin user already exists. No changes made.');
        }
    }
}