<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Harits',
            'email' => 'harits@fic15.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '1234567890'
        ]);

        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Harits',
            'address' => 'Jl. Parung No. 1',
            'phone' => '1234567890',
            'email' => 'dr.harits@klinik.com',
            'doctor_name' => 'Dr. Harits',
            'unique_code' => '123456'
        ]);

        $this->call(DoctorSeeder::class);
    }
}
