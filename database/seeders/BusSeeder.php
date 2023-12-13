<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\User;
use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $trips = Trip::all(); 
       
        foreach ($trips as $trip) {
            Bus::create(['trip_id' => $trip->from]);    
        }
    }
}
