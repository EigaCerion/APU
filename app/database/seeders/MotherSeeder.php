<?php

namespace Database\Seeders;

use App\Models\Mother;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mother::create([
            'name' => 'Siti Aisyah',
            'nik' => '1234567890',
            'birth_date' => '1990-05-15',
            'phone' => '081234567890',
            'address' => 'Jl. Merdeka No. 10, Jakarta',
        ]);

        Mother::create([
            'name' => 'Budi Santoso',
            'nik' => '0987654321',
            'birth_date' => '1985-03-20',
            'phone' => '081234567890',
            'address' => 'Jl. Sudirman No. 20, Jakarta',
        ]);
    }
}
