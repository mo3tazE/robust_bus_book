<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $buses = Bus::all(); 
       
        foreach ($buses as $bus) {
            for ($seatNumber = 1; $seatNumber <= 12; $seatNumber++) {
                Seat::create(['bus_id' => $bus->id, 'availability' => true]);

            }

        }

    }
}
