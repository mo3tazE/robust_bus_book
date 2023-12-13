<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $fillable = ['trip_id', 'dates'];

    public function getReservedSeatsCount()
    {
        // Assuming there is a seats relationship in your Bus model
        return $this->seats()->where('availability', 0)->count();
    }

    
    public function seats()
    {
        return $this->hasMany(Seat::class, 'bus_id', 'id');
    }

}
