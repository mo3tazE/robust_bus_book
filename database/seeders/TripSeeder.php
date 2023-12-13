<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        //
          // Example: Cairo to Asyut trip that crosses over AlFayyum and AlMinya
          // Add more trips as needed
          Trip::create(['from' => 1, 'to' => 5]);
          Trip::create(['from' => 1, 'to' => 3]);
          Trip::create(['from' => 1, 'to' => 4]);
          Trip::create(['from' => 2, 'to' => 4]);
          Trip::create(['from' => 2, 'to' => 5]);
          Trip::create(['from' => 2, 'to' => 3]);
          Trip::create(['from' => 3, 'to' => 5]);
          Trip::create(['from' => 4, 'to' => 5]);

    }
}
