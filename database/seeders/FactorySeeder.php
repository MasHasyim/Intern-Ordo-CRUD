<?php

namespace Database\Seeders;

use App\Models\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Factory::create([
            'code' => 'F001',
            'name' => 'Pabrik Utama',
            'address' => 'Jl. Pandugo No.20',
            'location' => 'Surabaya',

        ]);
    }
}
