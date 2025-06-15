<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VehicleType;


class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleType::create([
            'name' => 'BMW Series 3',
            'model' => 'G20',
            'total_quantity' => 20,
            'available_quantity' => 16,
            'test_drive_quantity' => 4,
        ]);

        VehicleType::create([
            'name' => 'BMW X5',
            'model' => 'G05',
            'total_quantity' => 10,
            'available_quantity' => 8,
            'test_drive_quantity' => 2,
        ]);
    }
}
