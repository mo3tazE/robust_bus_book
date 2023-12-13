<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Station::create(['name' => 'Cairo','station_order'=>1]);
        Station::create(['name' => 'Giza','station_order'=>2]);
        Station::create(['name' => 'AlFayyum,','station_order'=>3]);
        Station::create(['name' => 'AlMinya,,','station_order'=>4]);
        Station::create(['name' => 'Asyut,','station_order'=>5]);


    }
}
