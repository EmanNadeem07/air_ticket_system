<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flight::create([
            'from' => 'Lahore',
            'to' => 'Karachi',
            'price' => 30000,
            'isInternational' => 0,
            'seats' => 100,
        ]);
        Flight::create([
            'from' => 'Lahore',
            'to' => 'Islamabad',
            'price' => 20000,
            'isInternational' => 0,
            'seats' => 200,
        ]);
        Flight::create([
            'from' => 'Lahore',
            'to' => 'Dubai',
            'price' => 50000,
            'isInternational' => 1,
            'seats' => 50,
        ]);
        Flight::create([
            'from' => 'Lahore',
            'to' => 'Australia',
            'price' => 70000,
            'isInternational' => 1,
            'seats' => 70,
        ]);
    }
}
