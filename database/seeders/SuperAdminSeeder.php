<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Super Admin', 
            'email' => 'super@gmail.com',
            'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Admin', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Manager', 
            'email' => 'manager@gmail.com',
            'password' => Hash::make('123456')
        ]);
        $productManager->assignRole('Product Manager');

    }
}
